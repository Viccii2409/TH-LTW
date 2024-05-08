<?php
$servername = "localhost";
$username = "root";
$password = "12345678"
$dbname = "movie";

$conn = myslqi_connect($servername,$username,$dbname);
if(!$conn){
    die("Connection failed: " . myslqi_connect_error());
}
?>