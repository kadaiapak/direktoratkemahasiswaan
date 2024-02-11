<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Examin - Education and LMS Template">

    <!-- ========== Page Title ========== -->
    <title><?= $judul; ?></title>

    <!-- ========== Favicon Icon ========== -->
    <!-- <link rel="shortcut icon" href="< ?= base_url()?>template_front_end/assets/img/favicon.png" type="image/x-icon"> -->
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <!-- ========== Start Stylesheet ========== -->
    <link href="<?= base_url()?>template_front_end/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= base_url()?>template_front_end/assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?= base_url()?>template_front_end/assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="<?= base_url()?>template_front_end/assets/css/elegant-icons.css" rel="stylesheet" />
    <link href="<?= base_url()?>template_front_end/assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="<?= base_url()?>template_front_end/assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="<?= base_url()?>template_front_end/assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="<?= base_url()?>template_front_end/assets/css/animate.css" rel="stylesheet" />
    <link href="<?= base_url()?>template_front_end/assets/css/bootsnav.css" rel="stylesheet" />
    <link href="<?= base_url()?>template_front_end/style.css" rel="stylesheet">
    <link href="<?= base_url()?>template_front_end/assets/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="< ?= base_url()?>template_front_end/assets/js/html5/html5shiv.min.js"></script>
      <script src="< ?= base_url()?>template_front_end/assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">

</head>

<body>

    <!-- Preloader Start -->
    <!-- <div class="se-pre-con"></div> -->
    <!-- Preloader Ends -->

    <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area address-one-lines bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 address-info">
                    <div class="info box">
                        <ul>
                            <li>
                                <i class="fas fa-map"></i>
                                Jalan Prof. Dr. Hamka, Air Tawar Padang
                            </li>
                            <li>
                                <i class="fas fa-envelope-open"></i>
                                kemahasiswaan@unp.ac.id
                            </li>
                            <!-- <li>
                                <i class="fas fa-phone"></i>
                                0751 7058692
                            </li> -->
                        </ul>
                    </div>
                </div>
                <div class="user-login text-right col-md-4">
                    <!-- <a class="popup-with-form" href="#register-form">
                        <i class="fas fa-edit"></i> Register
                    </a> -->
                    <!-- <a  class="popup-with-form" href="#login-form">
                        <i class="fas fa-user"></i> Login
                    </a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-sticky bootsnav">

            <!-- Start Top Search -->
            <div class="container">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                            <form action="#">
                                <input type="text" name="text" class="form-control" placeholder="Search">
                                <button type="submit">
                                    <i class="fas fa-search"></i>
                                </button>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="/" style="display: flex; align-items: center;">
                        <img src="<?= base_url()?>template/src/img/unpkopsuratm.jpg" class="logo" alt="Logo" style="margin-right: 10px; height: 50px; width: 50px;" >
                        <div class="navbar-text" style="padding: 0; margin: 0;">
                            DIREKTORAT KEMAHASISWAAN<br>    
                            UNIVERSITAS NEGERI PADANG
                        </div>
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        <li>
                            <a href="/">beranda</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Tentang DITMAWA UNP</a>
                            <ul class="dropdown-menu">
                                <li><a href="/profil-ditmawa">Profil Ditmawa</a></li>
                                <li><a href="/struktur-organisasi">Struktur Organisasi</a></li>
                                <li><a href="/semua-agenda">Agenda Kegiatan</a></li>
                            </ul>
                        </li>
                        <!-- <li class="dropdown"> -->
                            <!-- <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Home</a>
                            <ul class="dropdown-menu">
                                <li><a href="index.html">Home Version One</a></li>
                                <li><a href="index-2.html">Home Version Two</a></li>
                                <li><a href="index-3.html">Home Version Three</a></li>
                                <li><a href="index-4.html">Home Version Four</a></li>
                                <li><a href="index-5.html">Home Version Five</a></li>
                                <li><a href="index-6.html">Home Version Six</a></li>
                                <li><a href="index-7.html">Home Version Serven <span class="badge">New</span></a></li>
                                <li><a href="index-onepage.html">Onepage Version One</a></li>
                                <li><a href="index-2-onepage.html">Onepage Version Two</a></li>
                                <li><a href="index-3-onepage.html">Onepage Version Three</a></li>
                                <li><a href="index-4-onepage.html">Onepage Version Four</a></li>
                                <li><a href="index-5-onepage.html">Onepage Version Five</a></li>
                                <li><a href="index-6-onepage.html">Onepage Version Six</a></li>
                            </ul>
                        </li> -->
                        
                        <!-- <li class="dropdown megamenu-fw">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <ul class="dropdown-menu megamenu-content" role="menu">
                                <li>
                                    <div class="row">
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Gallery</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="gallery-2-colum.html">Gallery Two Colum</a></li>
                                                    <li><a href="gallery-3-colum.html">Gallery Three Colum</a></li>
                                                    <li><a href="gallery-4-colum.html">Gallery Four Colum</a></li>
                                                    <li><a href="gallery-6-colum.html">Gallery Six Colum</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Advisor</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="advisor-carousel.html">Advisor Carousel</a></li>
                                                    <li><a href="advisor-2-colum.html">Advisor Two Colum</a></li>
                                                    <li><a href="advisor-3-colum.html">Advisor Three Colum</a></li>
                                                    <li><a href="advisor-carousel-2.html">Advisor Carousel Two</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">User Pages</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="profile.html">Profile</a></li>
                                                    <li><a href="edit-profile.html">Edit Profile</a></li>
                                                    <li><a href="login.html">login</a></li>
                                                    <li><a href="register.html">register</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-menu col-md-3">
                                            <h6 class="title">Other Pages</h6>
                                            <div class="content">
                                                <ul class="menu-col">
                                                    <li><a href="about-us.html">About Us</a></li>
                                                    <li><a href="faq.html">Faq</a></li>
                                                    <li><a href="pricing-table.html">Pricing Table</a></li>
                                                    <li><a href="contact.html">Contact</a></li>
                                                    <li><a href="404.html">Error Page</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li> -->
                        <!-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Courses</a>
                            <ul class="dropdown-menu">
                                <li><a href="courses.html">Courses Carousel One</a></li>
                                <li><a href="courses-2.html">Courses Grid One</a></li>
                                <li><a href="courses-3.html">Courses Grid Two</a></li>
                                <li><a href="courses-4.html">Courses Carousel Two</a></li>
                                <li><a href="course-details.html">Course Details</a></li>
                            </ul>
                        </li> -->
                        <!-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Teachers</a>
                            <ul class="dropdown-menu">
                                <li><a href="teachers.html">Advisor</a></li>
                                <li><a href="teachers-details.html">Advisor Details</a></li>
                            </ul>
                        </li> -->
                        <!-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Event</a>
                            <ul class="dropdown-menu">
                                <li><a href="event.html">Event Mixed Colum</a></li>
                                <li><a href="event-2.html">Event Grid Colum</a></li>
                                <li><a href="event-3.html">Event Carousel</a></li>
                            </ul>
                        </li> -->
                        <li>
                            <a href="/unit-kegiatan">Unit Kegiatan</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Panduan</a>
                            <ul class="dropdown-menu">
                                <li><a href="/panduan-bebas-ukt">Panduan Bebas UKT</a></li>
                                <li><a href="/panduan-sib">Panduan Sistem Informasi Beasiswa</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="/semua-prestasi">Prestasi</a>
                        </li>
                        <li>
                            <a href="/semua-download">Download</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->
			<?= $this->renderSection('content'); ?>

    <!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark default-padding-top text-light">
        <div class="container">
            <div class="row">
                <div class="f-items">
                    <div class="col-md-4 item">
                        <div class="f-item" style="display: flex; align-items: center; flex-direction: column;">
                            <img style="margin-bottom: 0;" src="<?= base_url()?>template_front_end/assets/img/logo_unp.png" height="100" alt="Logo">
                            <h4 class="text-center footer-text" style="margin-bottom: 0;">DIREKTORAT KEMAHASISWAAN</h4>
                            <h4 class="text-center footer-text">UNIVERSITAS NEGERI PADANG</h4>
                            <p>
                            Gedung Rectorate and Research Center Universitas Negeri Padang</br>
                            Jalan Prof. Dr. Hamka, Air Tawar Padang, Sumatera Barat</br>
                            Telepon: 0751 7058692</br>
                            Fax: 0751 7058692<br>
                            Email: callcenter.kemahasiswaan@unp.ac.id<br>
                            </p>
                            <p class="text-italic">
                                "Alam takambang jadi guru"
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 item">
                        <div class="f-item link">
                            <h4>Link terkait</h4>
                            <ul>
                                <li>
                                    <a href="https://sib-partnership.unp.ac.id/auth">Sistem Informasi Beasiswa</a>
                                </li>
                                <li>
                                    <a href="https://bak.unp.ac.id/">Akademik</a>
                                </li>
                                <li>
                                    <a href="https://puspres.unp.ac.id/">Pembebasan UKT Bagi Mahasiswa Berprestasi</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 item">
                        <div class="f-item link">
                            <h4>Informasi</h4>
                            <ul>
                                <li>
                                    <a href="#">Beasiswa</a>
                                </li>
                                <li>
                                    <a href="#">Prestasi</a>
                                </li>
                                <li>
                                    <a href="#">Organisasi</a>
                                </li>
                                <li>
                                    <a href="#">Alumni</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 item">
                        <div class="f-item address">
                            <h4>Kontak</h4>
                            <ul>
                                <li>
                                    <i class="fas fa-envelope" aria-hidden="true"></i> 
                                    <p> <span><a href="mailto:callcenter.kemahasiswaan@unp.ac.id">callcenter.kemahasiswaan@unp.ac.id</a></span></p>
                                </li>
                                <li>
                                    <i class="fab fa-instagram"></i> 
                                    <p> <span><a href="https://www.instagram.com/kemahasiswaan_unp/"></a>@kemahasiswaan_unp</span></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <p>&copy; Copyright 2024. All Rights Reserved by <a href="/">Direktorat Kemahasiswaan UNP</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="<?= base_url()?>template_front_end/assets/js/jquery-1.12.4.min.js"></script>
    <script src="<?= base_url()?>template_front_end/assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url()?>template_front_end/assets/js/equal-height.min.js"></script>
    <script src="<?= base_url()?>template_front_end/assets/js/jquery.appear.js"></script>
    <script src="<?= base_url()?>template_front_end/assets/js/jquery.easing.min.js"></script>
    <script src="<?= base_url()?>template_front_end/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url()?>template_front_end/assets/js/modernizr.custom.13711.js"></script>
    <script src="<?= base_url()?>template_front_end/assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url()?>template_front_end/assets/js/wow.min.js"></script>
    <script src="<?= base_url()?>template_front_end/assets/js/isotope.pkgd.min.js"></script>
    <script src="<?= base_url()?>template_front_end/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?= base_url()?>template_front_end/assets/js/count-to.js"></script>
    <script src="<?= base_url()?>template_front_end/assets/js/loopcounter.js"></script>
    <script src="<?= base_url()?>template_front_end/assets/js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url()?>template_front_end/assets/js/bootsnav.js"></script>
    <script src="<?= base_url()?>template_front_end/assets/js/main.js"></script>

</body>
</html>