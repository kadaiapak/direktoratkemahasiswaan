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
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data" action="<?= base_url('admin/agenda/update/'.$detail_agenda['agenda_id']); ?>">
                <?= csrf_field(); ?>
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Edit Agenda</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <input type="hidden" name="tanggal_sebelum_diedit" value="<?= $detail_agenda['tanggal']; ?>">
                        <input type="hidden" name="judul_sebelum_diedit" value="<?= $detail_agenda['judul']; ?>">
                        <div class="form-group">
                            <label for="judul"><b>Judul * :</b></label>
                            <input type="text" id="judul" name="judul" value="<?= (old('judul')) ? old('judul') : $detail_agenda['judul']; ?>" class="form-control <?= validation_show_error('judul') ? 'is-invalid' : null; ?>" name="judul" placeholder="Tuliskan judul"/>
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
                                <input placeholder="masukkan tanggal Awal" type="text" value="<?= $detail_agenda['tanggal']; ?>" class="form-control datepicker" name="tanggal">
                                <div class="invalid-feedback" style="text-align: left; display: block;">
                                <?= validation_show_error('tanggal'); ?>
                            </div>
                            </div>
                        </div>
                       
                        </script>
                        <div class="form-group">
                            <label for="tampil"><b>Terbitkan Agenda * :</b></label>
                            <select id="tampil" name="tampil" class="form-control" required>
                                <option value="">-- Pilih --</option>
                                <option value="1" <?= $detail_agenda['tampil'] == 1 ? "selected" : null ?>>Ya, Terbitkan</option>
                                <option value="0" <?= $detail_agenda['tampil'] == 2 ? "selected" : null ?>>Tidak, Jangan terbitkan dulu</option>
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
