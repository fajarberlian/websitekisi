

<?php 
  error_reporting(0);
  session_start();	
  include "config/koneksi.php";
	include "config/fungsi_indotgl.php";
	include "config/fungsi_combobox.php";
	include "config/library.php";
  include "config/fungsi_autolink.php";
  include "config/fungsi_thumb.php";
?>
		<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Berita & Artikel - Kajian Islam Sistem Informasi ITS</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">KISI ITS</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="berita.php">Berita & Artikel</a>
                    </li>
                    
                    <li class="page-scroll">
                        <a href="tentangkami.php">Tentang</a>
                    </li>
                    <li class="page-scroll">
                        <a href="galeri.php">Galeri</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    
    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>&nbsp;</h2>
                    <h2>Berita & Artikel</h2>
                    <hr class="star-primary">
              </div>
            </div>
            <div class="row">


<?php
 include "config/koneksi.php";
 $artikel = $_GET['id_produk'];
 $sql = " SELECT * FROM produk WHERE id_produk='$artikel' ";
 $query = mysql_query($sql);
 while ($hasil=mysql_fetch_array($query)) {
 echo"<h1>$hasil[judul]</h1>";
 echo"<i>Diposting pada tanggal : $hasil[tgl_masuk]<br><br></i>";
 
?>
<td>
				<a href="foto_berita/<?php echo $hasil['gambar'];?>">
				<img src="foto_berita/<?php echo $hasil['gambar'];?>" alt="" width='200' height='200'/>
				</a>
					
		  </td>

<?php 
 echo"<br></br>";
 echo"<br>$hasil[isi]</br>";
 echo"<br></br>";
 echo"<br></br>";
 echo'<a href="berita.php"><p>&laquo;Kembali&raquo;</p></a>';
 }
?>


        </div>
    </section>

    
                

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Lokasi</h3>
                        <iframe src="https://www.google.com/maps/d/embed?mid=z28dJy-xza_A.kCZwU6DSoVAM" width="330" height="190"></iframe>
                        <p>Jurusan Sistem Informasi Institut Teknologi Sepuluh Nopember Surabaya</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>ikuti kami</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/technomuslim" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            
                            <li>
                                <a href="https://twitter.com/KISI_ITS" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Pihak Terkait</h3>
                    <a href="http://its.ac.id"
       target="_blank"><img src="img/ITS.png" style="float:center; width:85px; height:85px";  hspace="25px" />
       <a href="http://jmmi.its.ac.id"
       target="_blank"><img src="img/JMMI.png" style="float:center; width:120px; height:120px"/>
                    
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; KISI 2015
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    
    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>

</body>

</html>
