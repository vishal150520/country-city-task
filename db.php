<?php
$server="localhost";
$user="root";
$pass="Admin@123";
$database="shoppingcart";
$conn=new mysqli($server,$user,$pass,$database);
if($conn->connect_error)
die("disconnected");

?>