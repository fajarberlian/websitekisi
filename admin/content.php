<?php
include "../config/koneksi.php";
include "../config/library.php";
include "../config/fungsi_indotgl.php";
include "../config/fungsi_combobox.php";

// Bagian Home
if ($_GET[module]=='home'){
  if ($_SESSION['leveluser']=='admin'){
  echo "<h2>Selamat Datang Admin</h2>
          <p>Hello <b>$_SESSION[namalengkap]</b> !!! Selamat datang di halaman Administrator.<br> Di sini, Anda dapat mengelola konten website KISI dengan cara memilih fitur yang berada di sebelah kiri halaman. Adapun fitur-fitur pengelolaan seperti pengelolaan berita atau artikel, galeri dan pesan masuk.</p>
          <p>&nbsp;</p>
          <p align=right>Login : $hari_ini, ";
  echo tgl_indo(date("Y m d")); 
  echo " | "; 
  echo date("H:i:s");
  echo " WIB</p>";
  }
}

// Bagian Modul
elseif ($_GET[module]=='modul'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_modul/modul.php";
  }
}


// Bagian Produk
elseif ($_GET[module]=='produk'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_produk/produk.php";
  }
}


// Bagian Galeri
elseif ($_GET[module]=='galeri'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_galeri/galeri.php";
  }
}

// Bagian Hubungi
elseif ($_GET[module]=='hubungi'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_hubungi/hubungi.php";
  }	
}


// Apabila modul tidak ditemukan
else{
  echo "<p><b>MODUL BELUM ADA ATAU BELUM LENGKAP</b></p>";
}
?>
