<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="right_col" role="main">
            <!-- top tiles -->
    <div class="row" style="display: inline-block; width: 100%;">
        <?php if(session()->getFlashdata('sukses')) : ?>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="alert alert-success alert-dismissible " role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <strong>Sukses!</strong> <?= session()->getFlashdata('sukses'); ?>.
            </div>
        </div>
        <?php endif; ?>
        <?php if(session()->getFlashdata('gagal')) : ?>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="alert alert-danger alert-dismissible " role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <strong>Gagal!</strong> <?= session()->getFlashdata('gagal'); ?>.
            </div>
        </div>
        <?php endif; ?>
        <div class="tile_count col-md-12 col-lg-12 col-sm-12">
            <h1>Dashboard Admin</h1>
            <div class="row">
                <div class="col-md-4 col-sm-4  tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total Pengujung Hari Ini</span>
                    <div class="count"><?= $pengunjungHariIni['total_pengunjung']; ?></div>
                </div>
                <div class="col-md-4 col-sm-4  tile_stats_count">
                    <span class="count_top"><i class="fa fa-clock-o"></i> Total Berita</span>
                    <div class="count"><?= $totalBerita; ?></div>
                </div>
                <div class="col-md-4 col-sm-4  tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total Prestasi</span>
                    <div class="count green"></div>
                </div>
                <div class="col-md-4 col-sm-4  tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total Agenda</span>
                    <div class="count"><?= $totalAgenda; ?></div>
                </div>
                <div class="col-md-4 col-sm-4  tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total UK</span>
                    <div class="count"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /top tiles -->
</div>
<?= $this->endSection(); ?>