<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'haji';

$conn = mysqli_connect($server,$user,$pass,$dbname) or die(mysqli_error($conn));

if(!$conn){
	die("Connection Failed".mysqli_connect_error());
}
?>