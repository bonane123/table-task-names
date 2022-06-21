<?php
$server = 'localhost';
$username = 'root';
$pass = '';
$dbname = 'crude';

$conn = mysqli_connect($server, $username, $pass, $dbname);
if(!$conn){
   die('Failed to connect');
}
?>