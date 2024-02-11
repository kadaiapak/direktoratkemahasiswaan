<?= $this->extend('layout_front_end/template'); ?>
<?= $this->section('content'); ?>
    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area content-top-heading less-paragraph text-normal">
        <div id="bootcarousel" class="carousel slide animate_text carousel-fade" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner text-light carousel-zoom">
                <div class="item active">
                    <div class="slider-thumb bg-fixed" style="background-image: url(<?= base_url('template_front_end/assets/img/foto_rektorat.jpg')?>);"></div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h3 data-animation="animated slideInLeft">DIREKTORAT KEMAHASISWAAN DAN ALUMNI</h3>
                                            <h1 data-animation="animated slideInUp">UNIVERSITAS NEGERI PADANG</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="item">
                    <div class="slider-thumb bg-fixed" style="background-image: url(<?= base_url('template_front_end/assets/img/foto_rektorat.jpg')?>);"></div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h3 data-animation="animated slideInLeft">DIREKTORAT KEMAHASISWAAN</h3>
                                            <h1 data-animation="animated slideInUp">UNIVERSITAS NEGERI PADANG</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slider-thumb bg-fixed" style="background-image: url(<?= base_url('template_front_end/assets/img/foto_rektorat.jpg')?>);"></div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h3 data-animation="animated slideInLeft">DIREKTORAT KEMAHASISWAAN</h3>
                                            <h1 data-animation="animated slideInUp">UNIVERSITAS NEGERI PADANG</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
        <!-- End Banner -->
    <marquee bgcolor="#002147" style="color: white;"><strong>MOHON UNTUK TIDAK MEMBERIKAN IMBALAN DALAM BENTUK APAPUN ATAS PELAYANAN YANG KAMI BERIKAN (BAIK SEBELUM ATAU SESUDAH LAYANAN DIBERIKAN)</strong></marquee>
    <!-- Start About 
    ============================================= -->
    <!-- <div class="about-area default-padding" >
        <div class="container">
            <div class="row">
                <div class="about-info">
                    <div class="col-md-6 thumb">
                        <img src="<?= base_url()?>template_front_end/assets/img/pkm.jpg" alt="Thumb">
                    </div>
                    <div class="col-md-6 info">
                        <h5>Sambutan</h5>
                        <h2>Selamat datang di Direktorat Kemahasiswaan dan Alumni</h2>
                        <p>
                        Direktorat Kemahasiswaan (Ditmawa) UNP adalah unit kerja di lingkungan Universitas yang mengurusi berbagai aktivitas kesejahteraan mahasiswa dan alumni.
                        Pada periode tahun 2024, Ditmawa berada di bawah Wakil Rektor I Bidang Kemahasiswaan. Sebagai sebuah institusi, Ditmawa merupakan salah satu unit kerja strategis yang mampu menghantarkan mahasiswa UNP menjadi aset bangsa yang berwawasan global, memiliki jiwa kepemimpinan dan siap bekerja sebagai tim serta memiliki integritas yang dilandasi nilai-nilai Pancasila.
                        </p>
                        <a href="#" class="btn btn-dark border btn-md">Baca Selengkapnya</a>
                    </div>
                </div>
                <div class="seperator col-md-12">
                    <span class="border"></span>
                </div>
                <div class="our-features">
                    <div class="col-md-6 col-sm-6">
                        <div class="item mariner">
                            <div class="icon">
                                <i class="flaticon-faculty-shield"></i>
                            </div>
                            <div class="info">
                                <h4>SUB ORGANISASI DAN KESEJAHTERAAN MAHASISWA</h4>
                                <a href="#">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="item java">
                            <div class="icon">
                                <i class="flaticon-book-2"></i>
                            </div>
                            <div class="info">
                                <h4>SUB PRESTASI DAN ALUMNI</h4>
                                <a href="#">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- End About -->

    <!-- Berita Beasiswa -->
    <!-- Start Berita -->
    <div class="blog-area full-blog left-sidebar full-blog default-padding">
        <div class="container">
            <div class="row">
                <div class="site-heading text-left">
                        <h2>Beasiswa</h2>
                </div>
                <div class="blog-items">
                    <?php foreach ($beasiswa_berita as $bb) { ?>
                    <div class="blog-content col-lg-3 col-md-3 col-sm-12">
                        <!-- Single Item -->
                        <div class="single-item">
                            <div class="item">
                                <div class="thumb">
                                    <a href="<?= base_url('/berita/'.$bb['berita_slug']); ?>"  >
                                        <div class="img_container" style="width: 100%; height:180px;">
                                            <img style="width: 100%; height: 100%; object-fit: cover;" src="<?= base_url()?>upload/berita_sampul/<?= $bb['berita_sampul']; ?>" alt="Thumb">
                                        </div>
                                    </a>
                                    <div class="date">
                                        <?php $tanggal = tanggal_indo($bb['created_at']);
                                        $array_tanggal_beasiswa = explode(" ", $tanggal);
                                        ?>
                                        <h4><span><?= $array_tanggal_beasiswa[0]; ?></span> <?= $array_tanggal_beasiswa[1]; ?>, <?= $array_tanggal_beasiswa[2]; ?></h4>
                                    </div>
                                </div>
                                <div class="info">
                                    <h3>
                                        <a href="<?= base_url('/berita/'.$bb['berita_slug']); ?>"><?= $bb['berita_judul']; ?></a>
                                    </h3>
                                    <a href="<?= base_url('/berita/'.$bb['berita_slug']); ?>">Read More <i class="fas fa-angle-double-right"></i></a>
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fas fa-user"></i> <?= $bb['nama_user']; ?></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fas fa-eye"></i> <?= $bb['berita_tayang']; ?></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->
                    </div>
                    <?php } ?>
                        <div class="more-btn col-md-12 text-center">
                        <a href="<?= base_url('/berita-beasiswa'); ?>" class="btn btn-dark border btn-md">LIHAT SEMUA BERITA</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Berita -->
    <!-- End Berita Beasiswa -->

    <!-- Berita Prestasi -->
    <!-- Start Berita -->
    <div class="blog-area full-blog left-sidebar full-blog default-padding" style="background-image: url(<?= base_url('image_manager/pattern.jpg')?>);">
        <div class="container">
            <div class="row">
                <div class="site-heading text-left">
                        <h2>Lomba / Prestasi</h2>
                </div>
                <div class="blog-items">
                    <?php foreach ($prestasi_berita as $pb) { ?>
                    <div class="blog-content col-lg-3 col-md-3 col-sm-12">
                        <!-- Single Item -->
                        <div class="single-item">
                            <div class="item">
                                <div class="thumb">
                                    <div class="img_container" style="width: 100%; height:180px;">
                                        <img style="width: 100%; height: 100%; object-fit: cover;" src="<?= base_url()?>upload/berita_sampul/<?= $pb['berita_sampul']; ?>" alt="Thumb">
                                    </div>
                                    <div class="date">
                                        <?php $tanggal = tanggal_indo($pb['created_at']);
                                        $array_tanggal_prestasi = explode(" ", $tanggal);
                                        ?>
                                        <h4><span><?= $array_tanggal_prestasi[0]; ?></span> <?= $array_tanggal_prestasi[1]; ?>, <?= $array_tanggal_prestasi[2]; ?></h4>
                                    </div>
                                </div>
                                <div class="info">
                                    <h3>
                                        <a href="<?= base_url('/berita/'.$pb['berita_slug']); ?>"><?= $pb['berita_judul']; ?></a>
                                    </h3>
                                    <a href="<?= base_url('/berita/'.$pb['berita_slug']); ?>">Read More <i class="fas fa-angle-double-right"></i></a>
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fas fa-user"></i> </i> <?= $pb['nama_user']; ?></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fas fa-eye"></i> <?= $pb['berita_tayang']; ?></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->
                    </div>
                    <?php } ?>
                        <div class="more-btn col-md-12 text-center">
                        <a href="<?= base_url('/berita-prestasi'); ?>" class="btn btn-dark border btn-md">LIHAT SEMUA BERITA</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Berita -->
    <!-- End Berita Prestasi -->

    <!-- Berita Organisasi -->
    <!-- Start Berita -->
    <div class="blog-area full-blog left-sidebar full-blog default-padding">
        <div class="container">
            <div class="row">
                <div class="site-heading text-left">
                        <h2>Organisasi Kemahasiswaan</h2>
                </div>
                <div class="blog-items">
                    <?php foreach ($organisasi_berita as $ob) { ?>
                    <div class="blog-content col-lg-3 col-md-3 col-sm-12">
                        <!-- Single Item -->
                        <div class="single-item">
                            <div class="item">
                                <div class="thumb">
                                    <div class="img_container" style="width: 100%; height:180px;">
                                        <img style="width: 100%; height: 100%; object-fit: cover;" src="<?= base_url()?>upload/berita_sampul/<?= $ob['berita_sampul']; ?>" alt="Thumb">
                                    </div>
                                    <div class="date">
                                        <?php $tanggal = tanggal_indo($ob['created_at']);
                                        $array_tanggal_prestasi = explode(" ", $tanggal);
                                        ?>
                                        <h4><span><?= $array_tanggal_prestasi[0]; ?></span> <?= $array_tanggal_prestasi[1]; ?>, <?= $array_tanggal_prestasi[2]; ?></h4>
                                    </div>
                                </div>
                                <div class="info">
                                    <h3>
                                        <a href="<?= base_url('/berita/'.$ob['berita_slug']); ?>"><?= $ob['berita_judul']; ?></a>
                                    </h3>
                                    <a href="<?= base_url('/berita/'.$ob['berita_slug']); ?>">Read More <i class="fas fa-angle-double-right"></i></a>
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fas fa-user"></i> <?= $ob['nama_user']; ?></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fas fa-eye"></i> <?= $ob['berita_tayang']; ?></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->
                    </div>
                    <?php } ?>
                    <div class="more-btn col-md-12 text-center">
                        <a href="<?= base_url('/berita-organisasi'); ?>" class="btn btn-dark border btn-md">LIHAT SEMUA BERITA</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Berita -->
    <!-- End Berita Prestasi -->
    
    

    <!-- Start Berita -->
    <div class="blog-area bg-dark text-light full-blog left-sidebar full-blog default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12 col-md-4">
                    <div class="site-heading text-left">
                        <h2>Agenda</h2>
                    </div>
                    <div class="item">
                        <div class="row">
                            <?php foreach ($semua_agenda as $sa) { ?>
                            <div class="col-lg-12 col-md-12 col-sm-12" style="border-bottom: 1px solid #ffb606; margin-bottom: 10px;">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3">
                                        <div class="icon">
                                            <?php $tanggal_agenda = tanggal_indo($sa['tanggal']);
                                                $array_tanggal_agenda = explode(' ', $tanggal_agenda); 
                                            ?>
                                            <h1 style="border-bottom: 1px solid #ffb606;"><?= $array_tanggal_agenda[0]; ?></h1>
                                            <h5><?= $array_tanggal_agenda[1]; ?></h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-9">
                                        <div class="info">
                                            <h4>
                                                <a href="#"><?= $sa['judul']; ?></a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            
                        </div>
                    </div>
                    <div class="more-btn col-md-12 text-center">
                        <a href="<?= base_url('/semua-agenda'); ?>" class="btn btn-light border btn-md" style="margin-top: 20px;">SEMUA AGENDA</a>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1"></div>

                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="site-heading text-left">
                        <h2>Tour Universitas Negeri Padang</h2>
                    </div>
                    <video autoplay muted loop src="<?= base_url('upload/video/video.mp4'); ?>" style="width: 100%;">
                    </video>
                    <p style="text-align: justify;" >
                    Universitas Negeri Padang (UNP) adalah hasil konversi IKIP Padang menjadi Universitas pada tahun 1999 yang pada mulanya bernama perguruan tinggi pendidikan guru (PTPG) yang berdiri pada tanggal 23 Oktober 1954. UNP terdiri dari 10 fakultas dan 1 Pascasarjana. Kampus UNP terletak di kampus Air Tawar, Kota Padang. UNP terakreditasi Unggul Institusi dari BAN-PT.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Berita -->

    

    <!-- Start Top Categories 
    ============================================= -->
    <!-- <div id="top-categories" class="top-cat-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Top Categories</h2>
                        <p>
                            Discourse assurance estimable applauded to so. Him everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating excellence an to impression. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="top-cat-items">
                    <div class="col-md-3 col-sm-6 equal-height">
                        <div class="item" style="background-image: url(< ?= base_url('template_front_end/assets/img/800x600.png')?>);">
                            <a href="#">
                                <i class="flaticon-feature"></i>
                                <div class="info">
                                    <h4>software engineering</h4>
                                    <span>(1,226) Topics</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 equal-height">
                        <div class="item" style="background-image: url(< ?= base_url('template_front_end/assets/img/800x600.png')?>);">
                            <a href="#">
                                <i class="flaticon-interaction"></i>
                                <div class="info">
                                    <h4>Interactive Programming</h4>
                                    <span>(2,366) Topics</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 equal-height">
                        <div class="item" style="background-image: url(< ?= base_url('template_front_end/assets/img/800x600.png')?>);">
                            <a href="#">
                                <i class="flaticon-conveyor"></i>
                                <div class="info">
                                    <h4>Quantum Mechanics</h4>
                                    <span>(766) Topics</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 equal-height">
                        <div class="item" style="background-image: url(< ?= base_url('template_front_end/assets/img/800x600.png')?>);">
                            <a href="#">
                                <i class="flaticon-education"></i>
                                <div class="info">
                                    <h4>Preventing Dementia</h4>
                                    <span>(4,500) Topics</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 equal-height">
                        <div class="item" style="background-image: url(< ?= base_url('template_front_end/assets/img/800x600.png')?>);">
                            <a href="#">
                                <i class="flaticon-potential"></i>
                                <div class="info">
                                    <h4>Hidden Potential</h4>
                                    <span>(975) Topics</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 equal-height">
                        <div class="item" style="background-image: url(< ?= base_url('template_front_end/assets/img/800x600.png')?>);">
                            <a href="#">
                                <i class="flaticon-print"></i>
                                <div class="info">
                                    <h4>Introduction Programming</h4>
                                    <span>(3,340) Topics</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 equal-height">
                        <div class="item" style="background-image: url(< ?= base_url('template_front_end/assets/img/800x600.png')?>);">
                            <a href="#">
                                <i class="flaticon-translate"></i>
                                <div class="info">
                                    <h4>Machine Learning</h4>
                                    <span>(7,800) Topics</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 equal-height">
                        <div class="item" style="background-image: url(< ?= base_url('template_front_end/assets/img/800x600.png')?>);">
                            <a href="#">
                                <i class="flaticon-firewall"></i>
                                <div class="info">
                                    <h4>Maintaining a Mindful</h4>
                                    <span>(24,80) Topics</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Top Categories -->

    <!-- Start Fun Factor 
    ============================================= -->
    <!-- <div class="fun-factor-area default-padding bottom-less text-center bg-fixed shadow dark-hard" style="background-image: url(<?= base_url('template_front_end/assets/img/2440x1578.png')?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 item">
                    <div class="fun-fact">
                        <div class="icon">
                            <i class="flaticon-contract"></i>
                        </div>
                        <div class="info">
                            <span class="timer" data-to="212" data-speed="5000"></span>
                            <span class="medium">National Awards</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="fun-fact">
                        <div class="icon">
                            <i class="flaticon-professor"></i>
                        </div>
                        <div class="info">
                            <span class="timer" data-to="128" data-speed="5000"></span>
                            <span class="medium">Best Teachers</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="fun-fact">
                        <div class="icon">
                            <i class="flaticon-online"></i>
                        </div>
                        <div class="info">
                            <span class="timer" data-to="8970" data-speed="5000"></span>
                            <span class="medium">Students Enrolled</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="fun-fact">
                        <div class="icon">
                            <i class="flaticon-reading"></i>
                        </div>
                        <div class="info">
                            <span class="timer" data-to="640" data-speed="5000"></span>
                            <span class="medium">Cources</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Fun Factor -->

    <!-- Start Event
    ============================================= -->
    <!-- <section id="event" class="event-area default-padding">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Upcoming Events</h2>
                        <p>
                            Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="event-items">
                    Single Item
                    <div class="item horizontal col-md-12">
                        <div class="col-md-6 thumb bg-cover" style="background-image: url(<?= base_url('template_front_end/assets/img/1500x700.png')?>);">
                            <div class="date">
                                <h4><span>12</span> Dec, 2018</h4>
                            </div>
                        </div>
                        <div class="col-md-6 info">
                            <h4>
                                <a href="#">Secondary Schools United Nations</a>
                            </h4>
                            <div class="meta">
                                <ul>
                                    <li><i class="fas fa-calendar-alt"></i> 15 Oct, 2019</li>
                                    <li><i class="fas fa-clock"></i>  8:00 AM - 5:00 PM</li>
                                    <li><i class="fas fa-map"></i> California, TX 70240 </li>
                                </ul>
                            </div>
                            <p>
                                Early had add equal china quiet visit. Appear an manner as no limits either praise in. In in written on charmed justice is amiable farther besides. Law insensible middletons unsatiable for apartments boy delightful unreserved. 
                            </p>
                            <a href="#" class="btn btn-dark effect btn-sm">
                                <i class="fas fa-chart-bar"></i> Book Now
                            </a>
                            <a href="#" class="btn btn-gray btn-sm">
                                <i class="fas fa-ticket-alt"></i> 43 Available
                            </a>
                        </div>
                    </div>
                    Single Item

                    Single Item
                    <div class="item vertical col-md-6">
                        <div class="thumb">
                            <img src="<?= base_url()?>template_front_end/assets/img/800x600.png" alt="Thumb">
                            <div class="date">
                                <h4><span>27</span> Feb, 2019</h4>
                            </div>
                        </div>
                        <div class="info">
                            <h4>
                                <a href="#">Social Science & Humanities</a>
                            </h4>
                            <div class="meta">
                                <ul>
                                    <li><i class="fas fa-calendar-alt"></i> 15 Oct, 2019</li>
                                    <li><i class="fas fa-clock"></i>  8:00 AM - 5:00 PM</li>
                                    <li><i class="fas fa-map"></i> California, TX 70240 </li>
                                </ul>
                            </div>
                            <p>
                                Early had add equal china quiet visit. Appear an manner as no limits either praise in. In in written on charmed justice is amiable farther besides. Law insensible middletons unsatiable for apartments boy delightful unreserved. 
                            </p>
                            <a href="#" class="btn btn-dark effect btn-sm">
                                <i class="fas fa-chart-bar"></i> Book Now
                            </a>
                            <a href="#" class="btn btn-gray btn-sm">
                                <i class="fas fa-ticket-alt"></i> 189 Available
                            </a>
                        </div>
                    </div>
                    Single Item

                    Single Item
                    <div class="item vertical col-md-6">
                        <div class="thumb">
                            <img src="<?= base_url()?>template_front_end/assets/img/800x600.png" alt="Thumb">
                            <div class="date">
                                <h4><span>15</span> Mar, 2019</h4>
                            </div>
                        </div>
                        <div class="info">
                            <h4>
                                <a href="#">Actualized Leadership Network Seminar</a>
                            </h4>
                            <div class="meta">
                                <ul>
                                    <li><i class="fas fa-calendar-alt"></i> 15 Oct, 2019</li>
                                    <li><i class="fas fa-clock"></i>  8:00 AM - 5:00 PM</li>
                                    <li><i class="fas fa-map"></i> California, TX 70240 </li>
                                </ul>
                            </div>
                            <p>
                                Early had add equal china quiet visit. Appear an manner as no limits either praise in. In in written on charmed justice is amiable farther besides. Law insensible middletons unsatiable for apartments boy delightful unreserved. 
                            </p>
                            <a href="#" class="btn btn-dark effect btn-sm">
                                <i class="fas fa-chart-bar"></i> Book Now
                            </a>
                            <a href="#" class="btn btn-gray btn-sm">
                                <i class="fas fa-ticket-alt"></i> 32 Available
                            </a>
                        </div>
                    </div>
                    Single Item

                    Single Item
                    <div class="item horizontal col-md-12">
                        <div class="col-md-6 thumb bg-cover" style="background-image: url(<?= base_url('template_front_end/assets/img/1500x700.png')?>);">
                            <div class="date">
                                <h4><span>24</span> Apr, 2019</h4>
                            </div>
                        </div>
                        <div class="col-md-6 info">
                            <h4>
                                <a href="#">International Conference on Art Business</a>
                            </h4>
                            <div class="meta">
                                <ul>
                                    <li><i class="fas fa-calendar-alt"></i> 15 Oct, 2019</li>
                                    <li><i class="fas fa-clock"></i>  8:00 AM - 5:00 PM</li>
                                    <li><i class="fas fa-map"></i> California, TX 70240 </li>
                                </ul>
                            </div>
                            <p>
                                Early had add equal china quiet visit. Appear an manner as no limits either praise in. In in written on charmed justice is amiable farther besides. Law insensible middletons unsatiable for apartments boy delightful unreserved. 
                            </p>
                            <a href="#" class="btn btn-dark effect btn-sm">
                                <i class="fas fa-chart-bar"></i> Book Now
                            </a>
                            <a href="#" class="btn btn-gray btn-sm">
                                <i class="fas fa-ticket-alt"></i> 12 Available
                            </a>
                        </div>
                    </div>
                    Single Item

                    <div class="more-btn col-md-12 text-center">
                        <a href="#" class="btn btn-dark border btn-md">View All Events</a>
                    </div>

                </div>
            </div>
        </div>
    </section> -->
    <!-- End Event -->

    <!-- Start Testimonials 
    ============================================= -->
    
    <!-- <div class="testimonials-area carousel-shadow default-padding bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Students Review</h2>
                        <p>
                            Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="clients-review-carousel owl-carousel owl-theme">
                        Single Item 
                        <div class="item">
                            <div class="col-md-5 thumb">
                                <img src="< ?= base_url()?>template_front_end/assets/img/800x800.png" alt="Thumb">
                            </div>
                            <div class="col-md-7 info">
                                <p>
                                    Procuring continued suspicion its ten. Pursuit brother are had fifteen distant has. Early had add equal china quiet visit. Appear an manner as no limits either praise.. 
                                </p>
                                <h4>Druna Patia</h4>
                                <span>Biology Student</span>
                            </div>
                        </div>
                        Single Item 
                        Single Item
                        <div class="item">
                            <div class="col-md-5 thumb">
                                <img src="< ?= base_url()?>template_front_end/assets/img/800x800.png" alt="Thumb">
                            </div>
                            <div class="col-md-7 info">
                                <p>
                                    Procuring continued suspicion its ten. Pursuit brother are had fifteen distant has. Early had add equal china quiet visit. Appear an manner as no limits either praise.. 
                                </p>
                                <h4>Astron Brun</h4>
                                <span>Science Student</span>
                            </div>
                        </div>
                        Single Item
                        Single Item
                        <div class="item">
                            <div class="col-md-5 thumb">
                                <img src="< ?= base_url()?>template_front_end/assets/img/800x800.png" alt="Thumb">
                            </div>
                            <div class="col-md-7 info">
                                <p>
                                    Procuring continued suspicion its ten. Pursuit brother are had fifteen distant has. Early had add equal china quiet visit. Appear an manner as no limits either praise.. 
                                </p>
                                <h4>Paol Druva</h4>
                                <span>Development Student</span>
                            </div>
                        </div>
                        Single Item
                        Single Item
                        <div class="item">
                            <div class="col-md-5 thumb">
                                <img src="< ?= base_url()?>template_front_end/assets/img/800x800.png" alt="Thumb">
                            </div>
                            <div class="col-md-7 info">
                                <p>
                                    Procuring continued suspicion its ten. Pursuit brother are had fifteen distant has. Early had add equal china quiet visit. Appear an manner as no limits either praise.. 
                                </p>
                                <h4>Druna Patia</h4>
                                <span>Biology Student</span>
                            </div>
                        </div>
                        Single Item
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- End Testimonials -->

    <!-- Start Blog 
    ============================================= -->
    <!-- <div id="blog" class="blog-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Latest News</h2>
                        <p>
                            Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog-items">

                    Single Item
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#"><img src="< ?= base_url()?>template_front_end/assets/img/800x600.png" alt="Thumb"></a>
                                <div class="date">
                                    <h4><span>24</span> Nov, 2018</h4>
                                </div>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="#">Objection happiness something</a>
                                </h4>
                                <p>
                                    Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the partiality unaffected
                                </p>
                                <a href="#">Baca Selengkapnya <i class="fas fa-angle-double-right"></i></a>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-user"></i> Author</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i> 23 Comments</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    Single Item
                    Single Item
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#"><img src="< ?= base_url()?>template_front_end/assets/img/800x600.png" alt="Thumb"></a>
                                <div class="date">
                                    <h4><span>12</span> Sep, 2018</h4>
                                </div>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="#">Meant to learn of vexed</a>
                                </h4>
                                <p>
                                    Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the partiality unaffected
                                </p>
                                <a href="#">Baca Selengkapnya <i class="fas fa-angle-double-right"></i></a>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-user"></i> Author</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i> 23 Comments</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    Single Item
                    Single Item
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#"><img src="< ?= base_url()?>template_front_end/assets/img/800x600.png" alt="Thumb"></a>
                                <div class="date">
                                    <h4><span>29</span> Dec, 2018</h4>
                                </div>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="#">Delightful up dissimilar</a>
                                </h4>
                                <p>
                                    Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the partiality unaffected
                                </p>
                                <a href="#">Baca Selengkapnya <i class="fas fa-angle-double-right"></i></a>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-user"></i> Author</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i> 23 Comments</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    Single Item

                </div>
            </div>
        </div>
    </div> -->
    <!-- End Blog -->

    <!-- Start Clients Area 
    ============================================= -->
    <div class="clients-area default-padding bg-gray">
        <div class="container">
            <div class="site-heading text-left">
                <h2>Sistem Informasi</h2>
            </div>
            <div class="clients-items owl-carousel owl-theme text-center">
                <div class="single-item">
                    <a href="#"><img src="<?= base_url()?>template_front_end/assets/img/sistem_informasi_satu.png" alt="Clients"></a>
                </div>
                <div class="single-item">
                    <a href="#"><img src="<?= base_url()?>template_front_end/assets/img/sistem_informasi_dua.png" alt="Clients"></a>
                </div>
                <div class="single-item">
                    <a href="#"><img src="<?= base_url()?>template_front_end/assets/img/sistem_informasi_tiga.png" alt="Clients"></a>
                </div>
                <div class="single-item">
                    <a href="#"><img src="<?= base_url()?>template_front_end/assets/img/sistem_informasi_empat.png" alt="Clients"></a>
                </div>
                <div class="single-item">
                    <a href="#"><img src="<?= base_url()?>template_front_end/assets/img/sistem_informasi_lima.png" alt="Clients"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Clients Area -->
  

<?= $this->endSection(); ?>
