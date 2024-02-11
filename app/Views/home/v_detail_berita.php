<?= $this->extend('layout_front_end/template'); ?>
<?= $this->section('content'); ?>
<!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(<?= base_url('template_front_end/assets/img/foto_rektorat.jpg')?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Detail Berita</h1>
                    <ul class="breadcrumb">
                        <li><a href="/"><i class="fas fa-home"></i> Beranda</a></li>
                        <li><a href="<?= base_url('/semua-berita'); ?>">Berita</a></li>
                        <li class="active">Detail</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area full-blog right-sidebar single-blog full-blog default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="blog-content col-md-8">
                        <div class="item-box">
                            <div class="item">
                                <div class="thumb">
                                    <a href="#">
                                        <div class="image_contaner" style="width: 100%; height: 400px;">
                                            <img style="object-fit: cover; height: 100%; width: 100%;" src="<?= base_url('/upload/berita_sampul/'.$detail_berita['berita_sampul']); ?>" alt="Thumb">
                                        </div>  
                                    </a>
                                    <?php $tanggal_berita = tanggal_indo($detail_berita['created_at']);
                                          $array_tanggal_berita = explode(' ', $tanggal_berita); 
                                            ?>
                                    <div class="date">
                                        <h4><span><?= $array_tanggal_berita[0]; ?></span> <?= $array_tanggal_berita[1]; ?>, <?= $array_tanggal_berita[2]; ?></h4>
                                    </div>
                                </div>
                                <div class="info">
                                    <h3>    
                                        <?= $detail_berita['berita_judul']; ?>
                                    </h3>
                                    <div class="meta">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-user"></i> <?= $detail_berita['nama_user']; ?></a></li>

                                            <li><a href="#"><i class="fa fa-eye"></i><?= $detail_berita['berita_tayang']; ?> Dibaca</a></li>
                                        </ul>
                                        <div class="share">
                                            <i class="fas fa-share-alt"></i>
                                            <ul>
                                                <li class="facebook">
                                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li class="twitter">
                                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li class="pinterest">
                                                    <a href="#"><i class="fab fa-pinterest"></i></a>
                                                </li>
                                                <li class="dribbble">
                                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?= $detail_berita['berita_isi']; ?>
                                </div>
                                
                                <!-- <div class="post-pagi-area">
                                    <a href="#"><i class="fas fa-angle-double-left"></i> Previus Post</a>
                                    <a href="#">Next Post <i class="fas fa-angle-double-right"></i></a>
                                </div>
                                <div class="post-tags">
                                    <span>Tags: </span>
                                    <a href="#">Consulting</a>
                                    <a href="#">Planing</a>
                                    <a href="#">Business</a>
                                    <a href="#">Fashion</a>
                                </div>
                                <div class="author-bio">
                                    <div class="avatar">
                                        <img src="assets/img/800x800.png" alt="Author">
                                    </div>
                                    <div class="content">
                                        <p>
                                            Supply as so period it enough income he genius. Themselves acceptance bed sympathize get dissimilar way admiration son. Design for are edward regret met lovers. This are calm case roof and. 

                                        </p>
                                        <h4> - Jonkey Rotham</h4>
                                    </div>
                                </div>
                                <div class="comments-area">
                                    <div class="comments-title">
                                        <h4>
                                            5 comments
                                        </h4>
                                        <div class="comments-list">
                                            <div class="commen-item">
                                                <div class="avatar">
                                                    <img src="assets/img/100x100.png" alt="Author">
                                                </div>
                                                <div class="content">
                                                    <h5>Jonathom Doe</h5>
                                                    <div class="comments-info">
                                                        July 15, 2018 <a href="#"><i class="fa fa-reply"></i>Reply</a>
                                                    </div>
                                                    <p>
                                                        Delivered ye sportsmen zealously arranging frankness estimable as. Nay any article enabled musical shyness yet sixteen yet blushes. Entire its the did figure wonder off. 
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="commen-item reply">
                                                <div class="avatar">
                                                    <img src="assets/img/100x100.png" alt="Author">
                                                </div>
                                                <div class="content">
                                                    <h5>Spark Lee</h5>
                                                    <div class="comments-info">
                                                        July 15, 2018 <a href="#"><i class="fa fa-reply"></i>Reply</a>
                                                    </div>
                                                    <p>
                                                        Delivered ye sportsmen zealously arranging frankness estimable as. Nay any article enabled musical shyness yet sixteen yet blushes. Entire its the did figure wonder off. 
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comments-form">
                                        <div class="title">
                                            <h4>Leave a comments</h4>
                                        </div>
                                        <form action="#" class="contact-comments">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input name="name" class="form-control" placeholder="Name *" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input name="email" class="form-control" placeholder="Email *" type="email">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group comments">
                                                        <textarea class="form-control" placeholder="Comment"></textarea>
                                                    </div>
                                                    <div class="form-group full-width submit">
                                                        <button type="submit">
                                                            Post Comments
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div> -->
                            
                            </div>
                        </div>
                    </div>
                    <!-- Start Sidebar -->
                    <?php include('berita_sidebar.php'); ?>
                    <!-- End Start Sidebar -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
<?= $this->endSection(); ?>
