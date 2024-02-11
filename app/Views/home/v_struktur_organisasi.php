<?= $this->extend('layout_front_end/template'); ?>
<?= $this->section('content'); ?>
<div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(<?= base_url('template_front_end/assets/img/foto_rektorat.jpg')?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?= $judul; ?></h1>
                    <ul class="breadcrumb">
                        <li><a href="/"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">DIREKTORAT KEMAHASISWAAN</li>
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
                                        Struktur Organisasi Direktorat Kemahasiswaan
                                    </h3>
                                    <div class="meta">
                                    </div>
                                    <p>
                                        Berikut struktur organisasi direktorat kemahasiswaan
                                    </p>
                                   
                                    <p style="margin-top: 20px;">
                                        Demikian dijelaskan mengenai profil singkat direktorat kemahasiswaan, semoga bisa menjadi pedoman dalam pelaksanaan nantinya.
                                    </p>
                                    <blockquote>
                                        Alam Takambang Jadi Guru
                                    </blockquote>
                                    
                                </div>
                               
                                <div class="post-tags">
                                    <span>Tags: </span>
                                    <a href="#">Agenda</a>
                                    <a href="#">Kemahasiswaan</a>
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
