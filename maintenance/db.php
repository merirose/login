<?php
$host = 'localhost';
$user = 'root'; //username of your database
$pass = ''; //password of your database
$db = 'maintenance'; //database name
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
?>
