<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
include "../../../config/koneksi.php";
include "../../../config/library.php";
include "../../../config/fungsi_thumb.php";

$module=$_GET[module];
$act=$_GET[act];

// Hapus produk
if ($module=='galeri' AND $act=='hapus'){
  $data=mysql_fetch_array(mysql_query("SELECT gambar FROM galeri WHERE id_galeri='$_GET[id]'"));
  if ($data['gambar']!=''){
     mysql_query("DELETE FROM galeri WHERE id_galeri='$_GET[id]'");
     unlink("../../../foto_file/$_GET[namafile]");   
     unlink("../../../foto_file/small_$_GET[namafile]");   
  }
  else{
     mysql_query("DELETE FROM galeri WHERE id_galeri='$_GET[id]'");
  }
  header('location:../../media.php?module='.$module);


  mysql_query("DELETE FROM galeri WHERE id_galeri='$_GET[id]'");
  header('location:../../media.php?module='.$module);
}

// Input produk
elseif ($module=='galeri' AND $act=='input'){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(1,99);
  $nama_file_unik = $acak.$nama_file; 


  // Apabila ada gambar yang diupload
  if (!empty($lokasi_file)){
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
    echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');
        window.location=('../../media.php?module=galeri)</script>";
    }
    else{
    UploadFoto($nama_file_unik);

    mysql_query("INSERT INTO galeri(judul,
                                    
                                    tgl_masuk,
                                    gambar) 
                            VALUES('$_POST[judul]',
                                   '$tgl_sekarang',
                                   '$nama_file_unik')");
  header('location:../../media.php?module='.$module);
  }
  }
  else{
    mysql_query("INSERT INTO galeri(judul,
                                    tgl_masuk) 
                            VALUES('$_POST[judul]',
                                   '$tgl_sekarang')");
  header('location:../../media.php?module='.$module);
  }
}

// Update produk
elseif ($module=='galeri' AND $act=='update'){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(1,99);
  $nama_file_unik = $acak.$nama_file; 


  // Apabila gambar tidak diganti
  if (empty($lokasi_file)){
    mysql_query("UPDATE galeri SET judul = '$_POST[judul]'
                             WHERE id_galeri   = '$_POST[id]'");
  header('location:../../media.php?module='.$module);
  }
  else{
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
    echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');
        window.location=('../../media.php?module=galeri)</script>";
    }
    else{
    UploadFoto($nama_file_unik);
    mysql_query("UPDATE galeri SET judul = '$_POST[judul]',
              
                                   gambar      = '$nama_file_unik'   
                             WHERE id_galeri   = '$_POST[id]'");
    header('location:../../media.php?module='.$module);
    }
  }
}
}
?>
