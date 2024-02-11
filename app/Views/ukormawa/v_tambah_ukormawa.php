<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Uk Ormawa</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <form class="form-horizontal form-label-left" method="POST" action="<?= base_url('admin/ukormawa/simpan'); ?>">
        <div class="row">
            <?= csrf_field(); ?>
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Tambah Uk Ormawa</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <?= validation_list_errors(); ?>
                        <div class="form-group">
                            <label for="ukormawa_judul">Nama UK/ Ormawa<b>(*)</b>:</label>
                            <input type="text" id="ukormawa_judul" name="ukormawa_judul" class="form-control <?= validation_show_error('ukormawa_judul') ? 'is-invalid' : null; ?>" name="ukormawa_judul" placeholder="Tuliskan nama uk/ ormawa" required />
                            <div class="invalid-feedback" style="text-align: left;">
                                <?= validation_show_error('ukormawa_judul'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ukormawa_deskripsi">Deskripsi UK<b>(boleh dikosongkan)</b> :</label>
                            <textarea name="ukormawa_deskripsi" id="ukormawa_deskripsi" class="form-control <?= validation_show_error('ukormawa_deskripsi') ? 'is-invalid' : null; ?>" cols="10" rows="10"><?= old('ukormawa_deskripsi'); ?></textarea>
                            <div class="invalid-feedback" style="text-align: left;">
                                <?= validation_show_error('ukormawa_deskripsi'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ukormawa_ketua">Nama Ketua<b>(*)</b>:</label>
                            <input type="text" id="ukormawa_ketua" name="ukormawa_ketua" class="form-control <?= validation_show_error('ukormawa_ketua') ? 'is-invalid' : null; ?>" name="ukormawa_ketua" placeholder="Tuliskan nama ketua uk/ ormawa" required />
                            <div class="invalid-feedback" style="text-align: left;">
                                <?= validation_show_error('ukormawa_ketua'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ukormawa_kontak">Kontak Ketua <b>(boleh dikosongkan)</b>  :</label>
                            <input type="text" id="ukormawa_kontak" name="ukormawa_kontak" class="form-control <?= validation_show_error('ukormawa_kontak') ? 'is-invalid' : null; ?>" name="ukormawa_kontak" placeholder="Tuliskan kontak ketua uk/ ormawa"/>
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
                                <input <?= validation_show_error('ukormawa_awal_menjabat') ? "style='border : 1px solid red'" : null?> placeholder="masukkan tanggal awal menjabat" type="text" value="<?= old('ukormawa_awal_menjabat'); ?>" class="form-control datepicker" name="ukormawa_awal_menjabat" required>
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
                                <input <?= validation_show_error('ukormawa_akhir_menjabat') ? "style='border : 1px solid red'" : null?> placeholder="masukkan tanggal awal menjabat" type="text" value="<?= old('ukormawa_akhir_menjabat'); ?>" class="form-control datepicker" name="ukormawa_akhir_menjabat">
                                <div class="invalid-feedback" style="text-align: left; display: block;">
                                    <?= validation_show_error('ukormawa_akhir_menjabat'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ukormawa_jumlah_anggota">Jumlah Anggota <b>(boleh dikosongkan)</b>  :</label>
                            <input type="text" id="ukormawa_jumlah_anggota" name="ukormawa_jumlah_anggota" class="form-control <?= validation_show_error('ukormawa_jumlah_anggota') ? 'is-invalid' : null; ?>" name="ukormawa_jumlah_anggota" placeholder="Tuliskan kontak ketua uk/ ormawa" />
                            <div class="invalid-feedback" style="text-align: left;">
                                <?= validation_show_error('ukormawa_jumlah_anggota'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ukormawa_aktif"><b>Apakah UK nya Aktif ? * :</b></label>
                            <select id="ukormawa_aktif" name="ukormawa_aktif" class="form-control" required>
                                <option value="">-- Pilih --</option>
                                <option value="1">Ya, Aktif</option>
                                <option value="0">Tidak, Uk tidak aktif</option>
                            </select>
                            <div class="invalid-feedback" style="text-align: left;">
                                <?= validation_show_error('ukormawa_aktif'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ukormawa_tampil"><b>Terbitkan Uk Ormawa * :</b></label>
                            <select id="ukormawa_tampil" name="ukormawa_tampil" class="form-control" required>
                                <option value="">-- Pilih --</option>
                                <option value="1">Ya, Terbitkan</option>
                                <option value="0">Tidak, Jangan terbitkan dulu</option>
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
            </div>
        </div>
        </form>
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
