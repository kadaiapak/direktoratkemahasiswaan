<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

 <!-- page content -->
 <div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Daftar Uk Ormawa</h2>
                        <div class="clearfix"></div>
                    </div>
					
                    <div class="x_content">
						<div>
							<a href="<?= base_url("admin/ukormawa/tambah"); ?>" class="btn btn-success btn-sm"><i class="fa fa-plus-square" style="margin-right: 5px;"></i>Tambah Uk Ormawa</a>
						</div>
						<br>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
									<?php if(session()->getFlashdata('sukses')) : ?>
										<div class="alert alert-success alert-dismissible " role="alert">
											<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
											</button>
											<strong>Sukses!</strong> <?= session()->getFlashdata('sukses'); ?>.
										</div>
									<?php endif; ?>
									<?php if(session()->getFlashdata('gagal')) : ?>
										<div class="alert alert-danger alert-dismissible " role="alert">
											<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
											</button>
											<strong>Gagal!</strong> <?= session()->getFlashdata('gagal'); ?>.
										</div>
									<?php endif; ?>
									<table id="datatable" class="table table-bordered">
										<thead>
											<tr class="headings">
												<th class="column-title">No </th>
												<th class="column-title">Nama UK</th>
												<th class="column-title">Ketua</th>
												<th class="column-title">Kontak Ketua</th>
												<th class="column-title">Tanggal Menjabat</th>
												<th class="column-title">Tampilkan ?</th>
												<th class="column-title no-link last"><span class="nobr">Aksi</span>
												</th>
											</tr>
										</thead>
										<tbody>
                                        	<?php $no = 1 ?>
											<?php foreach($semua_ukormawa as $sa): ?>
											<tr>
												<td class=" "><?= $no; ?></td>
												<td class=" "><?= $sa['ukormawa_judul']; ?></td>
												<td class=" "><?= $sa['ukormawa_ketua']; ?></td>
												<td class=" "><?= $sa['ukormawa_kontak']; ?></td>
												<td class=" "><?= tanggal_indo($sa['ukormawa_awal_menjabat']) ?></td>
												<td class=" "><?= $sa['ukormawa_tampil'] == 1 ? "<span class='badge badge-success'>Tampil</span>" : ($sa['ukormawa_tampil'] ==  0 ? "<span class='badge badge-warning'>Tidak ditampilkan</span>" : null)  ?></td>
												<td>
													<a href="<?= base_url('/admin/ukormawa/edit/'.$sa['ukormawa_id']); ?>" class="btn btn-warning">Ubah</a>
													<a href="#" class="btn btn-danger">Hapus</a>
												</td>
												<?php $no++ ?>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
                        		</div>
                    		</div>
                		</div>
            		</div>
            	</div>
    		</div>
        </div>
    </div>
</div>
        <!-- /page content -->


<?= $this->endSection(); ?>
