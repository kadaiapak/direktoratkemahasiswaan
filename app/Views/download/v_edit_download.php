<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Download</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data" action="<?= base_url('admin/download/update/'.$detail_download['download_id']); ?>">
                <?= csrf_field(); ?>
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Edit Download</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <input type="hidden" name="download_file_lama" value="<?= $detail_download['download_file']; ?>">
                        <div class="form-group">
                            <label for="download_judul">Judul * :</label>
                            <input type="text" id="download_judul" name="download_judul" value="<?= (old('download_judul')) ? old('download_judul') : $detail_download['download_judul']; ?>" class="form-control <?= validation_show_error('download_judul') ? 'is-invalid' : null; ?>" name="download_judul" placeholder="Tuliskan judul"/>
                            <div class="invalid-feedback" style="text-align: left;">
                                <?= validation_show_error('download_judul'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="download_file" class="file-label">Sampul <b>(ukuran file harus berukuran 1500px X 700px)</b></label>
                            <input class="form-control <?= validation_show_error('download_file') ? 'is-invalid' : null; ?>" type="file" id="download_file" name="download_file">
                            <div class="invalid-feedback" style="text-align: left;">
                                <?= validation_show_error('download_file'); ?>
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <label for="download_file">Preview Sampul</label>
                            <img id="gambar_load" src="< ?= base_url('/upload/download_file/'.$detail_download['download_file']); ?>" alt="" style="width: 400px;" class="img-thumbnail img-preview">
                        </div> -->
                        <div class="form-group">
                            <label for="download_tampil"><b>Terbitkan Download * :</b></label>
                            <select id="download_tampil" name="download_tampil" class="form-control" required>
                                <option value="">-- Pilih --</option>
                                <option value="1" <?= $detail_download['download_tampil'] == 1 ? "selected" : null ?>>Ya, Terbitkan</option>
                                <option value="0" <?= $detail_download['download_tampil'] == 2 ? "selected" : null ?>>Tidak, Jangan terbitkan dulu</option>
                            </select>
                            <div class="invalid-feedback" style="text-align: left;">
                                <?= validation_show_error('download_tampil'); ?>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9  offset-md-3">
                                <a href="<?= base_url('/admin/download'); ?>" class="btn btn-warning btn-sm"><i class="fa fa-chevron-circle-left" style="margin-right: 5px;"></i>Kembali</a>
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
<script>
    function bacaGambar(input) {
        if(input.files && input.files[0])
        {
            var reader = new FileReader();
            reader.onload = function(e)
            {
                $('#gambar_load').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $('#download_file').change(function() {
        bacaGambar(this);
    })
</script>
<?= $this->endSection(); ?>
