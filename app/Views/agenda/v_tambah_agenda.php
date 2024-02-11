<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Agenda</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <form class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data" action="<?= base_url('admin/agenda/simpan'); ?>">
        <div class="row">
            <?= csrf_field(); ?>
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Tambah Agenda</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <div class="form-group">
                            <label for="judul"><b>Judul * : </b></label>
                            <input type="text" id="judul" name="judul" class="form-control <?= validation_show_error('judul') ? 'is-invalid' : null; ?>" name="judul" placeholder="Tuliskan judul" required />
                            <div class="invalid-feedback" style="text-align: left;">
                                <?= validation_show_error('judul'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tanggal"><b>Tanggal Kegiatan :</b></label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-th"></span>
                                </div>
                                <input <?= validation_show_error('tanggal') ? "style='border : 1px solid red'" : null?> placeholder="masukkan tanggal Kegiatan" type="text" value="<?= old('tanggal'); ?>" class="form-control datepicker" name="tanggal" required>
                                <div class="invalid-feedback" style="text-align: left; display: block;">
                                <?= validation_show_error('tanggal'); ?>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tampil"><b>Terbitkan Agenda * :</b></label>
                            <select id="tampil" name="tampil" class="form-control" required>
                                <option value="">-- Pilih --</option>
                                <option value="1">Ya, Terbitkan</option>
                                <option value="0">Tidak, Jangan terbitkan dulu</option>
                            </select>
                            <div class="invalid-feedback" style="text-align: left;">
                                <?= validation_show_error('tampil'); ?>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9  offset-md-3">
                                <a href="<?= base_url('/admin/agenda'); ?>" class="btn btn-warning btn-sm"><i class="fa fa-chevron-circle-left" style="margin-right: 5px;"></i>Kembali</a>
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
