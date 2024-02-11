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
                        <h2>Daftar download</h2>
                        <div class="clearfix"></div>
                    </div>
					
                    <div class="x_content">
						<div>
							<a href="<?= base_url("admin/download/tambah"); ?>" class="btn btn-success btn-sm"><i class="fa fa-plus-square" style="margin-right: 5px;"></i>Tambah Download</a>
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
												<th class="column-title">No</th>
												<th class="column-title">Judul Download</th>
												<th class="column-title">File</th>
												<th class="column-title">Penulis</th>
												<th class="column-title">Jumlah Download</th>
												<th class="column-title">Tampil</th>
												<th class="column-title no-link last"><span class="nobr">Aksi</span>
												</th>
											</tr>
										</thead>
										<tbody>
                                        	<?php $no = 1 ?>
											<?php foreach($semua_download as $sd): ?>
											<tr>
												<td class=" "><?= $no; ?></td>
												<td class=" "><?= $sd['download_judul']; ?></td>
												<td>	
													<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bs-example-modal-lg-<?= $sd['download_id']?>">Lihat File</button>
													<div class="modal fade bs-example-modal-lg-<?= $sd['download_id']?>" tabindex="-1" role="dialog" aria-hidden="true">
														<div class="modal-dialog modal-lg">
															<div class="modal-content">
																<div class="modal-body">
																	<embed src="<?= base_url('/upload/download_file/'.$sd['download_file']); ?>" width="400px" height="700px" />
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																</div>
															</div>
														</div>
													</div>
												</td>
												<td class=" "><?= $sd['nama_user']; ?></td>
												<td class=" "><?= $sd['download_jumlah']; ?></td>
												<td class=" "><?= $sd['download_tampil'] == 1 ? "<span class='badge badge-success'>Aktif</span>" : ($sd['download_tampil'] ==  0 ? "<span class='badge badge-warning'>Tidak Aktif</span>" : null)  ?></td>
												<td class="">
													<a href="<?= base_url('/admin/download/edit/'.$sd['download_id']); ?>" class="btn btn-warning">Ubah</a>
													<?php if(session()->get('level') == 1) { ?>
														<a href="<?= base_url('/admin/download/hapus/'.$sd['download_id']); ?>" class="btn btn-danger">Hapus</a>
													<?php }else { ?>
														<a href="<?= base_url('/admin/download/hapus/'.$sd['download_id']); ?>" class="btn btn-danger">Permintaan Hapus</a>
													<?php } ?>
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
