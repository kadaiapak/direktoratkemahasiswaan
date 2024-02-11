<?= $this->extend('layout_front_end/template'); ?>
<?= $this->section('content'); ?>
<div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(<?= base_url('template_front_end/assets/img/foto_rektorat.jpg')?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?= $judul; ?></h1>
                    <ul class="breadcrumb">
                        <li><a href="/"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">SEMUA AGENDA KEMAHASISWAAN</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- START BLOG -->
    <div class="blog-area full-blog standard single-blog full-blog default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="blog-content col-md-10 col-md-offset-1">
                        <div class="item-box">
                            <div class="item">
                                <div class="info">
                                    <h3>
                                        Agenda Kegiatan Direktorat Kemahasiswaan Tahun 2024
                                    </h3>
                                    <div class="meta">
                                    </div>
                                    <p>
                                        Berikut susunan agenda kegiatan kemahasiswaan tahun 2024 
                                    </p>
                                    <table border="1" style="width: 100%;">
                                            <tr style="background-color: #002147; color: #cccccc;">
                                                <th style="width: 3%; height: 50px; text-align: center;">No</th>
                                                <th style="width: 15%; height: 50px; text-align: center;">Tanggal Kegaitan</th>
                                                <th style="width: 60%; height: 50px; text-align: center;">Judul Kegiatan</th>
                                                <th style="width: 22%; height: 50px; text-align: center;">Lokasi Kegiatan</th>
                                            </tr>
                                            <?php $no = 1 ?>
                                            <?php foreach($semuaAgenda as $sa) { ?>
                                                <?php $tanggal = tanggal_indo($sa['tanggal']) ?>
                                                <tr>
                                                    <td style="text-align: center;"><?= $no; ?></td>
                                                    <td style="padding-left: 5px;"><?= $tanggal; ?></td>
                                                    <td style="padding-left: 5px;"><?= $sa['judul']; ?></td>
                                                    <td></td>
                                                </tr>
                                                <?php $no++ ?>
                                            <?php }; ?>
                                        
                                    </table>
                                    <p style="margin-top: 20px;">
                                        Demikian dirancang Agenda Kegiatan Direktorat Kemahasiswaan ini, semoga bisa menjadi pedoman dalam pelaksanaan nantinya.
                                    </p>
                                    <blockquote>
                                        Alam Takambang Jadi Guru
                                    </blockquote>
                                    
                                </div>
                               
                                <div class="post-tags">
                                    <span>Tags: </span>
                                    <a href="/">Agenda</a>
                                    <a href="/">Kemahasiswaan</a>
                                </div>
                                <div class="author-bio">
                                    <div class="avatar" style="width: 50px;">
                                        <img src="<?= base_url(); ?>template/unp.png" style="width: 50px;" alt="Author">
                                    </div>
                                    <div class="content">
                                        <p>
                                            Supply as so period it enough income he genius. Themselves acceptance bed sympathize get dissimilar way admiration son. Design for are edward regret met lovers. This are calm case roof and. 

                                        </p>
                                        <h4> - Jonkey Rotham</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
<?= $this->endSection(); ?>
