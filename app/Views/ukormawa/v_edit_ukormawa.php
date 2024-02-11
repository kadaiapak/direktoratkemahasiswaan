<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>UK / ORMAWA</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data" action="<?= base_url('admin/ukormawa/update/'.$detail_ukormawa['ukormawa_id']); ?>">
                <?= csrf_field(); ?>
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Edit UK / ORMAWA</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <?= validation_list_errors(); ?>
                        <input type="hidden" name="judul_sebelum_diedit" value="<?= $detail_ukormawa['ukormawa_judul']; ?>">
                        <div class="form-group">
                            <label for="ukormawa_judul">Nama UK/ Ormawa<b>(*)</b>:</label>
                            <input type="text" value="<?= $detail_ukormawa['ukormawa_judul']; ?>" id="ukormawa_judul" name="ukormawa_judul" class="form-control <?= validation_show_error('ukormawa_judul') ? 'is-invalid' : null; ?>" placeholder="Tuliskan nama uk/ ormawa" required />
                            <div class="invalid-feedback" style="text-align: left;">
                                <?= validation_show_error('ukormawa_judul'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ukormawa_deskripsi">Deskripsi UK<b>(boleh dikosongkan)</b> :</label>
                            <textarea name="ukormawa_deskripsi" id="ukormawa_deskripsi" class="form-control <?= validation_show_error('ukormawa_deskripsi') ? 'is-invalid' : null; ?>" cols="10" rows="10"><?= old('ukormawa_deskripsi'); ?><?= $detail_ukormawa['ukormawa_deskripsi']; ?></textarea>
                            <div class="invalid-feedback" style="text-align: left;">
                                <?= validation_show_error('ukormawa_deskripsi'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ukormawa_ketua">Nama Ketua<b>(*)</b>:</label>
                            <input type="text" value="<?= $detail_ukormawa['ukormawa_ketua']; ?>" id="ukormawa_ketua" name="ukormawa_ketua" class="form-control <?= validation_show_error('ukormawa_ketua') ? 'is-invalid' : null; ?>" placeholder="Tuliskan nama ketua uk/ ormawa" required />
                            <div class="invalid-feedback" style="text-align: left;">
                                <?= validation_show_error('ukormawa_ketua'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ukormawa_kontak">Kontak Ketua <b>(boleh dikosongkan)</b>  :</label>
                            <input type="text" value="<?= $detail_ukormawa['ukormawa_kontak']; ?>" id="ukormawa_kontak" name="ukormawa_kontak" class="form-control <?= validation_show_error('ukormawa_kontak') ? 'is-invalid' : null; ?>" placeholder="Tuliskan kontak ketua uk/ ormawa"/>
                            <div class="invalid-feedback" style="text-align: left;">
                                <?= validation_show_error('ukormawa_kontak'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ukormawa_awal_menjabat">Tanggal Awal Menjabat <b>(*)</b> :</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-th"></span>
                                </div>
                                <input <?= validation_show_error('ukormawa_awal_menjabat') ? "style='border : 1px solid red'" : null?> placeholder="masukkan tanggal awal menjabat" type="text" value="<?= $detail_ukormawa['ukormawa_awal_menjabat']; ?>" class="form-control datepicker" name="ukormawa_awal_menjabat" required>
                                <div class="invalid-feedback" style="text-align: left; display: block;">
                                    <?= validation_show_error('ukormawa_awal_menjabat'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ukormawa_akhir_menjabat">Tanggal Akhir Menjabat <b>(boleh dikosongkan)</b>:</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-th"></span>
                                </div>
                                <input <?= validation_show_error('ukormawa_akhir_menjabat') ? "style='border : 1px solid red'" : null?> placeholder="masukkan tanggal akhir menjabat" type="text" value="<?= $detail_ukormawa['ukormawa_akhir_menjabat'] ; ?>" class="form-control datepicker" name="ukormawa_akhir_menjabat">
                                <div class="invalid-feedback" style="text-align: left; display: block;">
                                    <?= validation_show_error('ukormawa_akhir_menjabat'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ukormawa_jumlah_anggota">Jumlah Anggota <b>(boleh dikosongkan)</b>  :</label>
                            <input type="text"  value="<?= $detail_ukormawa['ukormawa_jumlah_anggota']; ?>" id="ukormawa_jumlah_anggota" name="ukormawa_jumlah_anggota" class="form-control <?= validation_show_error('ukormawa_jumlah_anggota') ? 'is-invalid' : null; ?>"  placeholder="Tuliskan jumlah anggota uk/ ormawa" />
                            <div class="invalid-feedback" style="text-align: left;">
                                <?= validation_show_error('ukormawa_jumlah_anggota'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ukormawa_aktif"><b>Apakah UK nya Aktif ? * :</b></label>
                            <select id="ukormawa_aktif" name="ukormawa_aktif" class="form-control" required>
                                <option value="">-- Pilih --</option>
                                <option value="1" <?= $detail_ukormawa['ukormawa_aktif'] == 1 ? "selected" : null; ?>>Ya, Aktif</option>
                                <option value="0" <?= $detail_ukormawa['ukormawa_aktif'] == 0 ? "selected" : null; ?>>Tidak, Uk tidak aktif</option>
                            </select>
                            <div class="invalid-feedback" style="text-align: left;">
                                <?= validation_show_error('ukormawa_aktif'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ukormawa_tampil"><b>Terbitkan Uk Ormawa * :</b></label>
                            <select id="ukormawa_tampil" name="ukormawa_tampil" class="form-control" required>
                                <option value="">-- Pilih --</option>
                                <option value="1" <?= $detail_ukormawa['ukormawa_tampil'] == 1 ? "selected" : null; ?>>Ya, Terbitkan</option>
                                <option value="0" <?= $detail_ukormawa['ukormawa_tampil'] == 0 ? "selected" : null; ?>>Tidak, Jangan terbitkan dulu</option>
                            </select>
                            <div class="invalid-feedback" style="text-align: left;">
                                <?= validation_show_error('ukormawa_tampil'); ?>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9  offset-md-3">
                                <a href="<?= base_url('/admin/ukormawa'); ?>" class="btn btn-warning btn-sm"><i class="fa fa-chevron-circle-left" style="margin-right: 5px;"></i>Kembali</a>
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save" style="margin-right: 5px;"></i>Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
 $(function(){
  $(".datepicker").datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true,
      todayHighlight: true,
  });
 });
</script>
<?= $this->endSection(); ?>
