<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="modul/mod_galeri/aksi_galeri.php";
switch($_GET[act]){
  // Tampil Produk
  default:
    echo "<h2>Galeri</h2>
          <input type=button value='Tambah Foto' onclick=\"window.location.href='?module=galeri&act=tambahgaleri';\">
          <table>
          <tr><th>no</th><th>judul</th><th>tanggal post</th><th>aksi</th></tr>";

    $tampil = mysql_query("SELECT * FROM galeri ORDER BY id_galeri DESC");
  
    $no = $posisi+1;
    while($r=mysql_fetch_array($tampil)){
      $tanggal=tgl_indo($r[tgl_masuk]);
      echo "<tr><td>$no</td>
                <td>$r[judul]</td>
                <td>$tanggal</td>
		            <td><a href=?module=galeri&act=editgaleri&id=$r[id_galeri]>Edit</a> | 
		                <a href='$aksi?module=galeri&act=hapus&id=$r[id_galeri]&namafile=$r[gambar]'>Hapus</a></td>
		        </tr>";
      $no++;
    }
    echo "</table>";
 
    break;
  
  case "tambahgaleri":
    echo "<h2>Tambah Foto</h2>
          <form method=POST action='$aksi?module=galeri&act=input' enctype='multipart/form-data'>
          <table>
          <tr><td width=100>Judul</td>     <td> : <input type=text name='judul' size=80></td></tr>
          <tr><td>Gambar</td>      <td> : <input type=file name='fupload' size=5000> 
                                          <br>Tipe gambar harus JPG/JPEG dan ukuran lebar maks: 400 px</td></tr>
          <tr><td colspan=2><input type=submit value=Simpan>
                            <input type=button value=Batal onclick=self.history.back()></td></tr>
          </table></form>";
     break;
    
  case "editgaleri":
    $edit = mysql_query("SELECT * FROM galeri WHERE id_galeri='$_GET[id]'");
    $r    = mysql_fetch_array($edit);

    echo "<h2>Edit Galeri</h2>
          <form method=POST enctype='multipart/form-data' action=$aksi?module=galeri&act=update>
          <input type=hidden name=id value=$r[id_galeri]>
          <table>
          <tr><td width=70>Judul Foto</td>     <td> : <input type=text name='judul' size=80 value='$r[judul]'></td></tr>
          
          <tr><td>Gambar</td>       <td> :  
          <img src='../foto_file/small_$r[gambar]'></td></tr>
          <tr><td>Ganti Gbr</td>    <td> : <input type=file name='fupload' size=5000> *)</td></tr>
          <tr><td colspan=2>*) Apabila gambar tidak diubah, dikosongkan saja.</td></tr>
          <tr><td colspan=2><input type=submit value=Update>
                            <input type=button value=Batal onclick=self.history.back()></td></tr>
         </table></form>";
    break;  
}
}
?>
