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

    <title>Kajian Islam Sistem Informasi ITS</title>

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
                <a class="navbar-brand" href="#page-top">KISI ITS</a>
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
                        <a href="#portfolio">Departemen & BSO</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">Tentang</a>
                    </li>
                    <li class="page-scroll">
                        <a href="galeri.php">Galeri</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Hubungi</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/KISI.jpg" alt="">
                    <div class="intro-text">
                        <span class="name">Kajian Islam Sistem Informasi</span>
                        <hr class="star-light">
                        <h3>Muda Memberdaya 2015/2016</h3>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Departemen & BSO</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/kader.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/syiar.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/medfo.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/sos.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/kwu.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/relasi.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal7" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/keilmuan.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal9" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/KISI.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal8" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/nisa.png" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Tentang Kami</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Kajian Islam Sitem Informasi atau yang biasa disingkat KISI merupakan lembaga dakwah Islam tingkat jurusan yang berada di jurusan Sistem Informasi. </p>
                </div>
                <div class="col-lg-4">
                    <p>Pada periode 2015/2016 ini, KISI digerakkan oleh kabinet muda memberdaya yang diketuai oleh Ahmad Sirajuddin(2013).</p>
                </div>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="tentangkami.php" class="btn btn-lg btn-outline">
                        </i> Selengkapnya
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>HUBUNGI kami</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form id="form1" name="form1" method="post" action="contact_me.php">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="Nama" id="nama" required data-validation-required-message="Silakan masukkan nama.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Alamat E-mail" id="email" required data-validation-required-message="Silakan masukkan alamat e-mail.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Pesan</label>
                                <textarea rows="5" name="pesan" class="form-control" placeholder="Pesan" id="pesan" required data-validation-required-message="Silakan masukkan pesan."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
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
                            </li>
                            
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>PIhak Terkait</h3>
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

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Departemen Kaderisasi</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/kader.png" alt="" width="270" class="img-responsive img-centered">
                            <p>Departemen yang bertujuan untuk membangun jiwa kepemimpinan mahasiswa muslim SI dengan tetap memegang nilai-nilai spirit islami, berakhlak karimah, serta berjiwa nasionalisme melalui program kegiatan mentoring wajib, sambutan mahasiswa baru sistem informasi(SAMURAI), mentoring keilmuan agama, mentoring kepemimpinan, sekolah pikir, amal yaumi, dan intensive islamic teaching and learning life.</p>
                            <ul class="list-inline item-details">
                                <li>By :
                                    <strong><a href="kisi-its.tk">KISI ITS 2015</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Departemen Syiar</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/syiar.png" alt="" width="270" class="img-responsive img-centered">
                            <p>Departemen yang berfungsi untuk menyerukan kebaikan dengan cara-cara anti mainstream, melayani kebutuhan rohani mahasiswa muslim SI, serta bersama berbuat kebaikan dengan melakukan amal ma'ruf nahi munkar, seperti kajian DOTA(Dirosah Ta'lim Muta'alim), Kalin (Kajian Lentera Iman), NBA(Ngaji Bareng Al-Kahfi), Debian(Do'a dan Pengajian Bersama Menjelang Ujian), Sibim(Sistem Informasi Bertanya Islam Menjawab), MIT (Muslim Inspiring Talk), MySQL(Majelis dan Seminar Qiyamul Lail), dan seminar cara cepat menghafal Al-Quran.</p>
                            <ul class="list-inline item-details">
                                <li>By :
                                    <strong><a href="kisi-its.tk">KISI ITS 2015</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Departemen Media Informasi</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/medfo.png" alt="" width="270" class="img-responsive img-centered">
                            <p>Departemen yang bertujuan untuk mengembangakan jiwa Kreatifitas mahasiswa Muslim Jurusan Sistem Informasi ITS, sebagai penunjang dakwah melalui Media Sosial, Majalah Dinding, Buletin OASIS, File Transfer Protocol, dan Pelatihan Desain Kreatif</p>
                            <ul class="list-inline item-details">
                                <li>By :
                                    <strong><a href="kisi-its.tk">KISI ITS 2015</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Departemen Sosial</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/sos.png" alt="" width="270" class="img-responsive img-centered">
                            <p>Departemen yang berfungsi sebagai wadah pengabdian sosial Mahasiswa Muslim Jurusan Sistem Informasi ITS melalui penyediaan program beasiswa anak putus sekolah bernama Semai Navigator Peradaban (Sevira), Donasi Ceria (DORA), Donasi Al-Qur'an untuk Negeri (DAUN). Program jariyah Musola serta melakukan kerjasama dengan pihak eksternal dalam menunjang kegiatan sosial secara kolaboral.</p>
                            <ul class="list-inline item-details">
          <li>By :
                                    <strong><a href="kisi-its.tk">KISI ITS 2015</a>
                                    </strong>
                                </li> 
                                </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Departemen Kewirausahaan</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/kwu.png" alt="" width="270" class="img-responsive img-centered">
                            <p>Departemen yang bertujuan untuk mengembangkan jiwa kewirausahaan Mahasiswa Jurusan Sistem Informasi ITS melalui kegiatan penunjang kewirausahaan seperti Program Sekolah Usman, Mentoring Kewirausahaan, Muslim Enterpreneur Sistem Informasi (MUSI), serta mendukung pendanaan mandiri KISI melalui kegiatan dana usaha dan sponsorship.</p>
                            <ul class="list-inline item-details">
                                <li>By :
                                    <strong><a href="kisi-its.tk">KISI ITS 2015</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Departemen Relasi Ukhuwah</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/relasi.png" alt="" width="270" class="img-responsive img-centered">
                            <p>Departemen yang bertujuan untuk meningkatkan intensitas ukhuwah antar mahasiswa muslim SI melalui kegiatan kebersamaan seperti buka puasa barokah (bapro), KISI Family day, Fun Bike KISI, Rihlah Berkah, Benchmarking, Upgrading, Muhasabah Bersama Awal Pekan(MUBARAK), Bersih-bersih Mushola (BBM), dan kegiatan ukhuwah lainnya baik internal maupun eksternal</p>
                            <ul class="list-inline item-details">
                                <li>By :
                                    <strong><a href="kisi-its.tk">KISI ITS 2015</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
    <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Departemen Keilmuan</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/keilmuan.png" alt="" width="270" class="img-responsive img-centered">
                            <p>Departemen yang berfungsi sebagai sarana.....</p>
                            <ul class="list-inline item-details">
                                <li>By :
                                    <strong><a href="kisi-its.tk">KISI ITS 2015</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
    <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>BSO An-Nisa'</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/nisa.png" alt="" width="270" class="img-responsive img-centered">
                            <p>BSO An-Nisa merupakan Badan Semi Otonom (BSO) KISI yang memiliki peran yang membangun nilai-nilai kemuslimahan Mahasiswa Muslimah Jurusan Sistem Infromasi ITS guna meningkatkan potensi diri masing-masing dengan tetap memegang spirit #MuslimahSholihah melalui Kajian An-Nisa dan mukena An-Nisa.</p>
                            <ul class="list-inline item-details">
                                <li>By :
                                    <strong><a href="kisi-its.tk">KISI ITS 2015</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
