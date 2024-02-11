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
        <form class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data" action="<?= base_url('admin/download/simpan'); ?>">
        <?= csrf_field(); ?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Tambah Download</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <div class="form-group">
                            <label for="download_judul">Judul * :</label>
                            <input type="text" id="download_judul" value="<?= old('download_judul'); ?>" name="download_judul" class="form-control <?= validation_show_error('download_judul') ? 'is-invalid' : null; ?>" name="download_judul" placeholder="Tuliskan judul"/>
                            <div class="invalid-feedback" style="text-align: left;">
                                <?= validation_show_error('download_judul'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="download_file" class="file-label">Upload File <b>(Format PDF / DOC / EXCEL)</b></label>
                            <input class="form-control <?= validation_show_error('download_file') ? 'is-invalid' : null; ?>" type="file" id="download_file" name="download_file">
                            <div class="invalid-feedback" style="text-align: left;">
                                <?= validation_show_error('download_file'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="download_tampil"><b>Terbitkan Berita * :</b></label>
                            <select id="download_tampil" name="download_tampil" class="form-control" required>
                                <option value="">-- Pilih --</option>
                                <option value="1">Ya, Terbitkan</option>
                                <option value="0">Tidak, Jangan terbitkan dulu</option>
                            </select>
                            <div class="invalid-feedback" style="text-align: left;">
                                <?= validation_show_error('download_tampil'); ?>
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <label for="download_file">Preview File</label>
                            <img id="gambar_load" src="< ?= base_url('/image_manager/pattern.jpg'); ?>" alt="" style="width: 400px;" class="img-thumbnail img-preview">
                        </div> -->
                        <div class="form-group">
                            <a href="<?= base_url('/admin/download'); ?>" class="btn btn-warning btn-sm"><i class="fa fa-chevron-circle-left" style="margin-right: 5px;"></i>Kembali</a>
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save" style="margin-right: 5px;"></i>Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
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
