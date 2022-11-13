<?php 
    require_once 'connect.php';
    $firstName = filter_var($_POST['firstName'],FILTER_SANITIZE_STRING);
    $lastName = filter_var($_POST['lastName'],FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    $address = filter_var($_POST['address'],FILTER_SANITIZE_EMAIL);
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
    $password = filter_var(md5($_POST['password']));
        $gender = filter_var($_POST['gender'],FILTER_SANITIZE_NUMBER_INT);
        $user = filter_var($_POST['user'],FILTER_SANITIZE_NUMBER_INT);
        $insert = "INSERT INTO user (firstName, lastName,email,address, password, img, gender, user)VALUES('$firstName', '$lastName','$email','$address','$password', '$newName', '$gender', '$user')" ;
        $query = $conn->query($insert);
        if ($query)
        {
            header('Location:../../../../index.php');
            exit;
        }
        else
        {
        echo $conn->error;
        }