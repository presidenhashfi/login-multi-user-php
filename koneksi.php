<?php  

//set koneksi database
$host = "localhost"; //host
$user = "root"; //username host
$pass = ""; // password database
$db   = "tutorial"; //nama database
$databaseport = 8111; //port database, defaultnya 

$conn = mysqli_connect($host,$user,$pass,$db, $databaseport); //koneksi database

//set base_url
$base_url = "http://localhost/login-multi-user-php"; 
//ketikan nama folder utama anda sesudah http://localhost/(nama folder utama anda).
