<?php
require_once 'connect.php';
    $name = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
    $phone = filter_var($_POST['phone'],FILTER_SANITIZE_NUMBER_INT);
    $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    $messages = $_POST['messages'];
   // $view = filter_var($_POST['view'],FILTER_SANITIZE_STRING);
    $insert = "INSERT INTO messages (name , phone , email , messages)VALUES('$name' , '$phone' , '$email','$messages')";
    $query = $conn -> query($insert);
    if ($query) {
        header("location:../../contact.php");
        exit;
    }else {
        echo $conn -> error;
    }