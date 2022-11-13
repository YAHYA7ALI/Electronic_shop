<?php
        require_once 'connect.php';
        if (isset($_POST['submit'])) {
            $firstName = filter_var($_POST['firstName'],FILTER_SANITIZE_STRING);
            $lastName = filter_var($_POST['lastName'],FILTER_SANITIZE_STRING);
            $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
            $password = filter_var(md5($_POST['password']));
            $password_confirm = filter_var(md5($_POST['password-confirmation']));
            $image = $_FILES['img']['name'];
            $image_size = $_FILES['img']['size'];
            $image_tmp = $_FILES['img']['tmp_name'];
            $image_folder = 'img/' . $image;
            $admin = filter_var($_POST['dir'],FILTER_SANITIZE_NUMBER_INT);
            $gender = filter_var($_POST['gender'],FILTER_SANITIZE_NUMBER_INT);
            $insert = "INSERT INTO admin (firstName,lastName,email,password,img,dir,gender)VALUES('$firstName','$lastName','$email','$password','$image','$admin','$gender')";
            $query = $conn->query($insert);
                    if ($insert) 
                    {
                        if ($image_size > 2000000)
                        {
                            echo 'image size is to lager';
                        } 
                        else 
                        {
                            move_uploaded_file($image_tmp, $image_folder);
                            echo 'registered successfull !';
                            header('location:../login.php');
                            exit;
                        }
                    }
            }

