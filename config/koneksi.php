<?php
$server = "localhost";
$username = "u980387199_admin";
$password = "123456";
$database = "u980387199_kisi";

// Koneksi dan memilih database di server
mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");
?>
