<?php 
$host = "103.183.92.101";
//ganti localhost dengan IP "103.183.92.101"
$username = "bulu_masdanis2021";
$password = "simasdanisbeta21!!";
$db = "bulu_masdanis";

//error_reporting(0);
$koneksi = new mysqli($host, $username, $password, $db);
// Check connection

if ($koneksi->connect_error) {
    die("Connection failed: ".$koneksi->connect_error);
}
?>