<?php

        $id = filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);

        require_once 'connect.php';

        $delt = "DELETE FROM products WHERE id = '$id'" ;

        if ($conn -> query($delt))
        {
        header("location: ../table-product.php");
        exit;
        }
        else
        {
        echo $conn->error;
        }