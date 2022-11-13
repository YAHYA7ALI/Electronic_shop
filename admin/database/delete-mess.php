<?php

        $id = filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);

        require_once 'connect.php';

        $delt = "DELETE FROM messages WHERE id = '$id'" ;

        if ($conn -> query($delt))
        {
        header("location: ../table-messages.php");
        exit;
        }
        else
        {
        echo $conn->error;
        }