				<div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box-bread">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone">
                                    <li>
                                        <a href="<?php echo base_url();?>">Home</a>
                                    </li>
                                    <li class="active">
										Info Kerja
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Info Kerja</h4>
                        </div>
                    </div>
                </div>
				
                <div class="row">
					<div class="col-md-12">
						<div class="card-box">
						<h4>Informasi Lowongan Pekerjaan</h4>
						<hr>
						<table id="datakerja" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Perusahaan</th>
                                    <th>Judul</th>
                                    <th>Posisi</th>
                                    <th>Tanggal Posting</th>
                                    <th>Tanggal Berlaku</th>
									<th>Detail</th>
                                </tr>
                                </thead>
                                <tbody>
								<?php
                                foreach($results as $data){
								?>
                                <tr>
                                    <td><?php echo $data->namaperusahaan?></td>
                                    <td><?php echo $data->judul?></td>
                                    <td><?php echo $data->posisi?></td>
                                    <td><?php echo $data->tglposting?></td>
                                    <td><?php echo $data->tglberlaku?></td>
									<td><a href="<?php echo base_url('Loker/detail/'.$data->id_loker.'')?>" class="btn btn-xs waves-light btn-primary">Lihat Detail</a></td>
                                </tr>
                                <?php }?>
                                
							</tbody>
						</table>
						</div>
					</div>
					
                </div>
                <!-- end row -->
