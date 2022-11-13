<?php 
        require_once 'connect.php' ;
        $email = filter_var($_POST["email"],FILTER_SANITIZE_STRING);
        $Pass =filter_var(md5($_POST["password"]));
        $sql = "SELECT * FROM user WHERE email= '$email' and password = '$Pass'
            and user = 0 ";
        $queryconn = $conn -> query($sql) ;
        $email = $queryconn -> fetch_assoc();
        $id =filter_var($email['id'],FILTER_SANITIZE_NUMBER_INT);
        if ($queryconn -> num_rows > 0) 
        {
            session_start();
            session_regenerate_id();
            $_SESSION['login_id'] = $id ;
            header('Location: ../../index.php');
            exit;
        }
        else 
        {
            header('Location: ../login.php');
            exit;
        }