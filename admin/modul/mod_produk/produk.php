<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="modul/mod_produk/aksi_produk.php";
switch($_GET[act]){
  // Tampil Produk
  default:
    echo "<h2>Berita & Artikel</h2>
          <input type=button value='Tambah Berita/Artikel' onclick=\"window.location.href='?module=produk&act=tambahproduk';\">
          <table>
          <tr><th>no</th><th>judul</th><th>isi</th><th>tanggal post</th><th>aksi</th></tr>";

    $tampil = mysql_query("SELECT * FROM produk ORDER BY id_produk DESC");
  
    $no = $posisi+1;
    while($r=mysql_fetch_array($tampil)){
      $tanggal=tgl_indo($r[tgl_masuk]);
      echo "<tr><td>$no</td>
                <td>$r[judul]</td>
                <td>$r[isi]</td>
                <td>$tanggal</td>
		            <td><a href=?module=produk&act=editproduk&id=$r[id_produk]>Edit</a> | 
		                <a href='$aksi?module=produk&act=hapus&id=$r[id_produk]&namafile=$r[gambar]'>Hapus</a></td>
		        </tr>";
      $no++;
    }
    echo "</table>";
 
    break;
  
  case "tambahproduk":
    echo "<h2>Tambah Berita/Artikel</h2>
          <form method=POST action='$aksi?module=produk&act=input' enctype='multipart/form-data'>
          <table>
          <tr><td width=100>Judul</td>     <td> : <input type=text name='judul' size=60></td></tr>";
            
    echo "</select></td></tr>
          <tr><td>Isi</td>  <td> : <textarea name='isi' style='width: 580px; height: 350px;'></textarea></td></tr>
          <tr><td>Gambar</td>      <td> : <input type=file name='fupload' size=5000> 
                                          <br>Tipe gambar harus JPG/JPEG dan ukuran lebar maks: 400 px</td></tr>
          <tr><td colspan=2><input type=submit value=Simpan>
                            <input type=button value=Batal onclick=self.history.back()></td></tr>
          </table></form>";
     break;
    
  case "editproduk":
    $edit = mysql_query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
    $r    = mysql_fetch_array($edit);

    echo "<h2>Edit Berita/Artikel</h2>
          <form method=POST enctype='multipart/form-data' action=$aksi?module=produk&act=update>
          <input type=hidden name=id value=$r[id_produk]>
          <table>
          <tr><td width=70>Judul</td>     <td> : <input type=text name='judul' size=60 value='$r[judul]'></td></tr>";
 
    echo "</select></td></tr>
          <tr><td>Isi</td>   <td> : <textarea name='isi' style='width: 600px; height: 350px;'>$r[isi]</textarea></td></tr>
          <tr><td>Gambar</td>       <td> :  
          <img src='../foto_berita/small_$r[gambar]'></td></tr>
          <tr><td>Ganti Gbr</td>    <td> : <input type=file name='fupload' size=5000> *)</td></tr>
          <tr><td colspan=2>*) Apabila gambar tidak diubah, dikosongkan saja.</td></tr>
          <tr><td colspan=2><input type=submit value=Update>
                            <input type=button value=Batal onclick=self.history.back()></td></tr>
         </table></form>";
    break;  
}
}
?>
