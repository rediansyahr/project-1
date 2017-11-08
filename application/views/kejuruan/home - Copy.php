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
                            <div class="tab-content">
									<?php foreach($kejuruan as $data){?>
                                    <div class="tab-pane <?php if(isset($data->active)){echo $data->active;}?>" id="<?php echo $data->KdKejuruan;?>">
									
                                    <img src="<?php echo $data->gambar;?>" style="width:100%; padding:0;"></img>
									<h4><?php echo $data->NamaKejuruan;?></h4>
									<hr>
                                    <?php echo $data->deskripsi;?>
									<?php 
									$sql = "SELECT * from cevest_subkejuruan where idkejuruan=".$data->idkejuruan."";
									while($row = mysqli_fetch_assoc($sql)){?>
                                    <div class="panel panel-default panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion-test" href="#collapseThree" class="collapsed">
													Artificial Intellegence
												</a>
												<a data-toggle="collapse" data-parent="#accordion-test" href="#collapseThree" class="btn btn-xs waves-light btn-primary collapsed pull-right">
													Detail
												</a>
											</h4>
										</div>
										<div id="collapseThree" class="panel-collapse collapse">
											<div class="panel-body">
												<img src="<?php echo "".base_url()."/uploads/jurusan/web-developer.jpg"?>" width="100%"></img><br><br>
												Technical Support atau dukungan teknis adalah layanan yang diberikan perusahaan (terutama di bidang IT) untuk membantu customer dalam hal konfigurasi, pemakaian dan troubleshooting. Secara umum, dukungan teknis diberikan dalam bentuk email, tiket, SMS, chat, website, dan telepon. dan ada beberapa Program pelajaran pada sub jurusan ini yaitu:<br><br>
												<table class="table table table-hover m-0">
													<tbody>
													<tr>
														<td><b>1</b></td>
														<td>Operator Teknik Telekomunikasi</td>
													</tr>
													<tr>
														<td><b>2</b></td>
														<td>Operator Instrumentasi dan Kontrol</td>
													</tr>
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