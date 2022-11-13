<?php

require_once 'connect.php';
    $id = filter_var($_POST['id'],FILTER_SANITIZE_NUMBER_INT);
    $firstName = filter_var($_POST['firstName'],FILTER_SANITIZE_STRING);
    $lastName = filter_var($_POST['lastName'],FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    $password = filter_var(md5($_POST['password']));
    $img = $_FILES['img']['name'];
    $temp = $_FILES['img']['tmp_name'];
    $image_folder = 'img/' . $img;
    $dir = filter_var($_POST['dir'],FILTER_SANITIZE_NUMBER_INT);
    $gender = filter_var($_POST['gender'],FILTER_SANITIZE_NUMBER_INT);
    if (!empty($password)) {
        $updatpass = " UPDATE admin SET password = '$password' WHERE id = '$id' ";
        $conn -> query($updatpass);
    }
    $update = "UPDATE admin SET firstName = '$firstName', lastName = '$lastName', email = '$email', password = '$password', img = '$img', dir = '$dir', gender = '$gender' WHERE id = '$id'" ;
    if ($update) {
        move_uploaded_file($tmp, $image_folder);
    }
    if ($conn -> query($update)) 
    {
        header("location: ../table-admin.php");
        exit;
    }
    else 
    {
        echo $conn -> error ;
    }