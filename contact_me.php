<?php 
include "config/koneksi.php";
$nama=$_REQUEST['nama'];
$email=$_REQUEST['email'];
$pesan=$_REQUEST['pesan']; 

//membuat Query untuk menyimpan data
$sql="INSERT INTO hubungi (nama, email, pesan) 
values ('$nama','$email','$pesan')";
//menyimpan data ke database
mysql_query($sql);

echo "<h2>Data Telah Disimpan</h2>";
?>