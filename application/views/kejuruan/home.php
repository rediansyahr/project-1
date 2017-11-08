				<div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box-bread">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone">
                                    <li>
                                        <a href="<?php echo base_url();?>">Home</a>
                                    </li>
                                    <li class="active">
										Kejuruan
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Kejuruan</h4>
                        </div>
                    </div>
                </div>
				
                <div class="row">
					<div class="col-md-4">
						<div class="panel panel-bbplk">
                            <div class="panel-heading">
                                <h3 class="panel-title">Kejuruan</h3>
                            </div>
                            <div class="panel-body">
                                <div class="tabs-vertical-env">
                                <ul class="nav tabs-vertical">
									<?php foreach($kejuruan as $data){?>
                                    <li class="<?php if(isset($data->active)){echo $data->active;}?>">
                                        <a href="#<?php echo $data->KdKejuruan;?>" data-toggle="tab" aria-expanded="true"><?php echo $data->NamaKejuruan;?></a>
                                    </li>
									<?php }?>
                                </ul>

                                
                            </div>
                            </div>
                        </div>
					</div>
					<div class="col-md-8">
                        <div class="card-box">
                            <!--h4 class="header-title m-t-0 m-b-30">Kejuruan</h4-->
                            <div class="tab-content subkejuruan">
									<?php foreach($kejuruan as $data){?>
                                    <div class="tab-pane <?php if(isset($data->active)){echo $data->active;}?>" id="<?php echo $data->KdKejuruan;?>">
									
                                    <img src="<?php echo $data->gambar;?>" ></img>
									<h4><?php echo $data->NamaKejuruan;?></h4>
									<hr>
                                    <?php echo $data->deskripsi;?>
									<?php 
									$query = $this->db->where('idkejuruan',$data->idkejuruan)->get("cevest_subkejuruan");
									foreach ($query->result() as $subjurusan) {
									?>
                                    <div class="panel panel-default panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion-test" href="#<?php echo $subjurusan->kdsubjur ?>" class="collapsed">
													<?php echo $subjurusan->namasubjur ?>
												</a>
												<a data-toggle="collapse" data-parent="#accordion-test" href="#<?php echo $subjurusan->kdsubjur ?>" class="btn btn-xs waves-light btn-primary collapsed pull-right">
													Detail
												</a>
											</h4>
										</div>
										<div id="<?php echo $subjurusan->kdsubjur ?>" class="panel-collapse collapse">
											<div class="panel-body">
												<img src="<?php echo $subjurusan->gambar ?>"></img><br><br>
												<?php echo $this->Fungsi->trim($subjurusan->keterangan) ?><br><br>
												
												<table class="table table table-hover m-0">
													<tbody>
													<?php 
													$i=1;
													$query = $this->db->where('idsubjur',$subjurusan->idsubjur)->get("cevest_progpel");
													foreach ($query->result() as $progpel) {
													?>
													<tr>
														<td><b><?php echo $i;?></b></td>
														<td><?php echo $progpel->namaprogram;?></td>
													</tr>
													<?php $i++;}?>
													</tbody>
												</table>												
											</div>
										</div>
									</div>
									<?php }?>
                                    </div>
									<?php }?>
                                </div>
                        </div>
					</div>
					
                </div>
                <!-- end row -->