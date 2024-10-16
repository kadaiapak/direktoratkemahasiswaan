<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Berita</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <form class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data" action="<?= base_url('admin/berita/simpan'); ?>">
            <?= csrf_field(); ?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Tambah Berita</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <div class="form-group">
                            <label for="berita_sampul" class="file-label">Sampul <b>(ukuran sampul harus berukuran 1500px X 700px dan dibawah 1MB / 1024KB)</b></label>
                            <input accept="image/*" class="form-control <?= validation_show_error('berita_sampul') ? 'is-invalid' : null; ?>" type="file" id="berita_sampul" name="berita_sampul">
                            <div class="invalid-feedback" style="text-align: left;">
                                <?= validation_show_error('berita_sampul'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="berita_sampul">Preview Sampul</label>
                            <img id="gambar_load" src="<?= base_url('/image_manager/pattern.jpg'); ?>" alt="" style="width: 400px;" class="img-thumbnail img-preview">
                        </div>
                        <div class="form-group">
                            <label for="berita_judul">Judul * :</label>
                            <input type="text" id="berita_judul" value="<?= old('berita_judul'); ?>" name="berita_judul" class="form-control <?= validation_show_error('berita_judul') ? 'is-invalid' : null; ?>" name="berita_judul" placeholder="Tuliskan judul"/>
                            <div class="invalid-feedback" style="text-align: left;">
                                <?= validation_show_error('berita_judul'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="berita_isi">Konten * :</label>
                            <textarea name="berita_isi" id="berita_isi" class="form-control <?= validation_show_error('berita_isi') ? 'is-invalid' : null; ?>" cols="10" rows="10"><?= old('berita_isi'); ?></textarea>
                            <div class="invalid-feedback" style="text-align: left;">
                                <?= validation_show_error('berita_isi'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-lg-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Pengaturan Tambahan</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <div class="form-group">
                            <label for="berita_kategori"><b>Kategori * :</b></label>
                            <select name="berita_kategori" id="berita_kategori" class="form-control <?= validation_show_error('berita_kategori') ? 'is-invalid' : null; ?>" required>
                                <option value="">-- Pilih Kategori --</option>
                                <option value="1" <?= old('berita_kategori') == 1 ? "selected" : null ; ?>>Organisasi dan Kesejahteraan Mahasiswa</option>
                                <option value="2" <?= old('berita_kategori') == 2 ? "selected" : null ; ?>>Prestasi dan Alumni</option>
                            </select>
                            <div class="invalid-feedback" style="text-align: left;">
                                <?= validation_show_error('berita_kategori'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="berita_subkategori"><b>Sub Kategori * :</b></label>
                            <select id="berita_subkategori" name="berita_subkategori" class="form-control" required>
                                <option value="">-- Pilih Sub Kategori --</option>
                                <option value="1" <?= old('berita_subkategori') == 1 ? "selected" : null ; ?>>Beasiswa</option>
                                <option value="2" <?= old('berita_subkategori') == 2 ? "selected" : null ; ?>>Organisasi</option>
                                <option value="3" <?= old('berita_subkategori') == 3 ? "selected" : null ; ?>>Prestasi</option>
                                <option value="4" <?= old('berita_subkategori') == 4 ? "selected" : null ; ?>>Alumni</option>
                            </select>
                            <div class="invalid-feedback" style="text-align: left;">
                                <?= validation_show_error('berita_subkategori'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="berita_tampil"><b>Terbitkan Berita * :</b></label>
                            <select id="berita_tampil" name="berita_tampil" class="form-control" required>
                                <option value="">-- Pilih --</option>
                                <option value="1">Ya, Terbitkan</option>
                                <option value="0">Tidak, Jangan terbitkan dulu</option>
                            </select>
                            <div class="invalid-feedback" style="text-align: left;">
                                <?= validation_show_error('berita_tampil'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-8 col-sm-8">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>SEO</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <div class="form-group">
                            <label  for="kata_kunci"><b>Kata Kunci Pencarian Google</b> <small>pisahkan menggunakan koma</small></label>
                            <input type="text" name="kata_kunci" class="form-control <?= validation_show_error('kata_kunci') ? 'is-invalid' : null; ?>" id="kata_kunci">
                            <div class="invalid-feedback" style="text-align: left;">
                                <?= validation_show_error('kata_kunci'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi_meta"><b>Deskripsi pada Pencarian Google</b> </label>
                            <input type="text" name="deskripsi_meta" class="form-control <?= validation_show_error('deskripsi_meta') ? 'is-invalid' : null; ?>" id="deskripsi_meta">
                            <div class="invalid-feedback" style="text-align: left;">
                                <?= validation_show_error('deskripsi_meta'); ?>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        
                    </div>
                </div>
            </div> -->
            <div class="col-md-9 col-sm-9  offset-md-3">
                <div class="form-group">
                    <a href="<?= base_url('/admin/berita'); ?>" class="btn btn-warning btn-sm"><i class="fa fa-chevron-circle-left" style="margin-right: 5px;"></i>Kembali</a>
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save" style="margin-right: 5px;"></i>Simpan</button>
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
    $('#berita_sampul').change(function() {
        bacaGambar(this);
    })
</script>
<?= $this->endSection(); ?>
