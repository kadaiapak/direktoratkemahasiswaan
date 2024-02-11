<?= $this->extend('layout_front_end/template'); ?>
<?= $this->section('content'); ?>
<div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(<?= base_url('template_front_end/assets/img/foto_rektorat.jpg')?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?= $judul; ?></h1>
                    <ul class="breadcrumb">
                        <li><a href="/"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">SEMUA BERITA</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area full-blog right-sidebar full-blog default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="blog-content col-md-8">
                        <?php foreach ($semuaBerita as $sb) { ?>
                            <!-- Single Item -->
                        <div class="single-item">
                            <div class="item">
                                <div class="thumb">
                                    <div class="img_container" style="width: 100%; height: 400px;;">
                                        <a href="#"><img style="width: 100%; height: 100%;  object-fit: cover;" src="<?= base_url('upload/berita_sampul/'.$sb['berita_sampul']); ?>" alt="Thumb"></a>
                                    </div>
                                    <div class="date">
                                        <?php $tanggal = tanggal_indo($sb['created_at']);
                                        $array_tanggal_berita = explode(" ", $tanggal);
                                        ?>
                                        <h4><span><?= $array_tanggal_berita[0]; ?></span> <?= $array_tanggal_berita[1]; ?>, <?= $array_tanggal_berita[2]; ?></h4>
                                    </div>
                                </div>
                                <div class="info">
                                    <h3>
                                        <a href="<?= base_url('/berita/'.$sb['berita_slug']); ?>"><?= $sb['berita_judul']; ?></a>
                                    </h3>
                                    <a href="<?= base_url('/berita/'.$sb['berita_slug']); ?>">Read More <i class="fas fa-angle-double-right"></i></a>
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fas fa-user"></i> <?= $sb['nama_user']; ?></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fas fa-eye"></i> <?= $sb['berita_tayang']; ?></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <?php } ?>
                        
                        <!-- Pagination -->
                        <div class="row">
                            <div class="col-md-12 pagi-area">
                            <?= $pager->links('default', 'pagination'); ?>

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
