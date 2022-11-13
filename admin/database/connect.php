<?php 

define('HOST' , 'localhost');
define('UserName','root');
define('PASS','');
define('Name','spadmin');
$conn = new mysqli(HOST, UserName, PASS, Name);
$conn -> set_charset('utf8');
if (! $conn) {
    echo $conn -> connect_error ;
}
