<?php
$aksi="modul/mod_hubungi/aksi_hubungi.php";
switch($_GET[act]){
  // Tampil Hubungi Kami
  default:
    echo "<h2>Pesan Masuk</h2>
          <table>
          <tr><th>no</th><th>nama</th><th>email</th><th>pesan</th><th>aksi</th></tr>";


    $tampil=mysql_query("SELECT * FROM hubungi ORDER BY nama DESC LIMIT 5");

    $no = $posisi+1;
    while ($r=mysql_fetch_array($tampil)){
      $tgl=tgl_indo($r[tanggal]);
      echo "<tr><td>$no</td>
                <td>$r[nama]</td>
                <td>$r[email]</td>
                <td>$r[pesan]</td>
                <td><a href=$aksi?module=hubungi&act=hapus&nama=$r[nama]>Hapus</a></a>
                </td></tr>";
    $no++;
    }
    echo "</table>";
    break;
	
	
    
    
}
?>
