<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "ahpku";

$conn=mysqli_connect('localhost','root','','ahpku') or die ("Gagal");
mysqli_select_db($conn,$database) or die ("Database tidak ditemukan");
?>