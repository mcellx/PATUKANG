<?php

$host       = 'localhost'; // host default dari database
$user       = 'root'; // user default dari database
$password   = ''; // jika menggunakan user default tidak menggunakan password
$db         = 'db_projek'; // nama database

// buat query
$link = mysqli_connect($host, $user, $password, $db) or die(mysql_error());
 ?>