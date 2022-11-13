<?php
        $id = filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);

        require_once 'connect.php';

        $del = "DELETE FROM user WHERE id = '$id'" ;

        if ($conn -> query($del)) 
        {
            header("location: ../table-user.php");
            exit;
        } 
        else
        {
            echo $conn->error;
        }