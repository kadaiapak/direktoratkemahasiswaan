<?= $this->extend('layout_front_end/template'); ?>
<?= $this->section('content'); ?>
<div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(<?= base_url('template_front_end/assets/img/foto_rektorat.jpg')?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?= $judul; ?></h1>
                    <ul class="breadcrumb">
                        <li><a href="/"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">SEMUA DOWNLOAD</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area full-blog right-sidebar full-blog default-padding ">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="blog-content col-md-8">
                        <?php foreach ($semuaDownload as $sd) { ?>
                            <!-- Single Item -->
                        <div class="single-item">
                            <div class="item">
                                <div class="thumb">
                                    <div class="date">
                                        <?php $tanggal = tanggal_indo($sd['created_at']);
                                        $array_tanggal_download = explode(" ", $tanggal);
                                        ?>
                                        <h4><span><?= $array_tanggal_download[0]; ?></span> <?= $array_tanggal_download[1]; ?>, <?= $array_tanggal_download[2]; ?></h4>
                                    </div>
                                </div>
                                <div class="info">
                                    <div class="row" style="margin: 0; display: flex; align-items: center;">
                                        <div class="col-lg-8 col-md-8 col-sm-12">
                                            <h3 style="margin: 0;"><a href="<?= base_url('/semua-download/'.$sd['download_file']); ?>"><?= $sd['download_judul']; ?></a></h3>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <a class="btn btn-dark border btn-sx" href="<?= base_url('/semua-download/'.$sd['download_file']); ?>">Download</a>
                                        </div>
                                    </div>
                                    
                                    <div class="meta" style="border-bottom: 2px solid #e7e7e7; border-top: none;">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fas fa-user"></i> <?= $sd['nama_user']; ?></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fas fa-download"></i> <?= $sd['download_jumlah']; ?></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fas fa-calendar"></i> <?= $array_tanggal_download[0]; ?></span> <?= $array_tanggal_download[1]; ?>, <?= $array_tanggal_download[2]; ?></a>
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
