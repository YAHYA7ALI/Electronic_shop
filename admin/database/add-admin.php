<?php 
    require_once 'connect.php';
    $firstName = filter_var($_POST['firstName'],FILTER_SANITIZE_STRING);
    $lastName = filter_var($_POST['lastName'],FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    $password = filter_var(md5($_POST['password']));
    $img = $_FILES ['img']['name'] ;
    $temp = $_FILES ['img']['tmp_name'];
    if ($_FILES['img']['error'] == 0) 
    {
        $exstensions = ['jpg', 'jpeg', 'gif', 'png'];
        $ext = pathinfo($img , PATHINFO_EXTENSION);
            if (in_array($ext , $exstensions)) 
            {
                    if ($_FILES['img']['size'] < 2000000) 
                    {
                        $newName = md5(uniqid(). '.' . $ext) ;
                        move_uploaded_file($temp,'../img/' . $newName);
                    }
                    else 
                    {
                        echo "File Size Is To Big" ;
                    }
            }
            else 
            {
                echo " Worning File Exstensions " ;
            }
    }
    else 
    {
        echo "You Must Upload In Image" ;
    }
        $gender = filter_var($_POST['gender'],FILTER_SANITIZE_NUMBER_INT);
        $admin = filter_var($_POST['dir'],FILTER_SANITIZE_NUMBER_INT);
        $insert = "INSERT INTO admin (firstName, lastName,email, password, img, gender, dir)VALUES('$firstName', '$lastName','$email', '$password', '$newName', '$gender', '$admin')" ;
        $query = $conn->query($insert);
        if ($query)
        {
            header('Location: ../table-admin.php');
            exit;
        }
        else
        {
        echo $conn->error;
        }