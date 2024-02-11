<?= $this->extend('layout_front_end/template'); ?>
<?= $this->section('content'); ?>
<div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(<?= base_url('template_front_end/assets/img/foto_rektorat.jpg')?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?= $judul; ?></h1>
                    <ul class="breadcrumb">
                        <li><a href="/"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">unit-kegiatan</li>
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
                                        Unit Kegiatan
                                    </h3>
                                    <div class="meta">
                                    </div>
                                    <p>
                                        Berikut daftar semua unit kegiatan yang ada di Universitas Negeri Padang
                                    </p>
                                    <table border="1" style="width: 100%;">
                                            <tr style="background-color: #002147; color: #cccccc;">
                                                <th style="width: 3%; height: 50px; text-align: center;">No</th>
                                                <th style="width: 60%; height: 50px; text-align: center;">Nama UK/ORMAWA</th>
                                                <th style="width: 15%; height: 50px; text-align: center;">Nama Ketua</th>
                                                <th style="width: 22%; height: 50px; text-align: center;">Kontak</th>
                                            </tr>
                                            <?php $no = 1 ?>
                                            <?php foreach($semuaUnit as $sa) { ?>
                                                <tr>
                                                    <td style="text-align: center;"><?= $no; ?></td>
                                                    <td style="text-align: center;"><?= $sa['ukormawa_judul']; ?></td>
                                                    <td style="text-align: center;"><?= $sa['ukormawa_ketua']; ?></td>
                                                    <td style="text-align: center;"><?= $sa['ukormawa_kontak']; ?></td>
                                                    <td></td>
                                                </tr>
                                                <?php $no++ ?>
                                            <?php }; ?>
                                        
                                    </table>
                                    <p style="margin-top: 20px;">
                                        Demikian dirincikan mengenai unit kegiatan yang ada di Universitas Negeri Padang, semoga bisa menjadi pedoman dalam pelaksanaan nantinya.
                                    </p>
                                    <blockquote>
                                        Alam Takambang Jadi Guru
                                    </blockquote>
                                    
                                </div>
                                <div class="post-tags">
                                    <span>Tags: </span>
                                    <a href="#">Unitkegiatan</a>
                                    <a href="#">Kemahasiswaan</a>
                                    <a href="#">UK</a>
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
