<?php
        require_once 'connect.php';
        if (isset($_POST['submit'])) {
            $firstName = filter_var($_POST['firstName'],FILTER_SANITIZE_STRING);
            $lastName = filter_var($_POST['lastName'],FILTER_SANITIZE_STRING);
            $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
            $address = filter_var($_POST['address'],FILTER_SANITIZE_STRING);
            $image = $_FILES['img']['name'];
            $image_size = $_FILES['img']['size'];
            $image_tmp = $_FILES['img']['tmp_name'];
            $image_folder = 'img/' . $image;
            $password = filter_var(md5($_POST['password']));
            $password_confirm = filter_var(md5($_POST['password-confirm']));
            $gender = filter_var($_POST['gender'],FILTER_SANITIZE_NUMBER_INT);
            $user = filter_var($_POST['user'],FILTER_SANITIZE_NUMBER_INT);
            $insert = "INSERT INTO user (firstName,lastName,email,address,img,password,gender,user)VALUES('$firstName','$lastName','$email','$address','$image','$password','$gender','$user')";
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
                            header('location:../../user-register.php');
                            exit;
                        }
                    }
            }
