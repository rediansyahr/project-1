				<div class="row">
                    <div class="col-sm-9">
						<div class="panel panel-default">
                            <div class="panel-body" style="padding:0;">
								<!-- START carousel-->
                                    <div id="carousel-example-captions" data-ride="carousel" class="carousel slide">
                                        
                                        <div role="listbox" class="carousel-inner">
										<?php foreach($headline as $data) { ?>
                                            <div class="item <?php echo $data->active?>">
												<a href="<?php echo $data->headline_link?>" target="_blank">
                                                <img src="<?php echo $data->headline_gambar?>">
												<!--div class="carousel-top">
                                                    <p><?php echo $data->tanggal ?></p>
                                                </div-->
                                                <div class="carousel-caption">
                                                    <p>
                                                        <?php echo $data->headline_text?>
                                                    </p>
                                                </div>
												</a>
                                            </div>
										<?php } ?>
                                        </div>
										
                                        <a href="#carousel-example-captions" role="button" data-slide="prev" class="left carousel-control"> <span aria-hidden="true" class="fa fa-angle-left"></span> <span class="sr-only">Previous</span> </a>
                                        <a href="#carousel-example-captions" role="button" data-slide="next" class="right carousel-control"> <span aria-hidden="true" class="fa fa-angle-right"></span> <span class="sr-only">Next</span> </a>
                                    </div>
                                <!-- END carousel-->
							</div>
						</div>
						<div class="col-sm-6" style="padding:0;" >
							<div class="card-box ribbon-box margin-kanan">
                            <div class="ribbon ribbon-bbplk"><i class="fa fa-newspaper-o"></i> BERITA TERBARU</div>
                            <div class="clearfix"></div>
                            <div class="inbox-widget" >
								<?php foreach($berita_naker as $data) { ?>
                                <a href="Berita/detail/<?php echo $data->judul_seo?>">
                                    <div class="inbox-item">
										<button type="button" class="btn btn-icon btn-xs waves-effect waves-light btn-primary">BERITA</button>
										<p class="inbox-item-text"><?php echo $data->tanggal ?></p>
										<div class="inbox-item-img"><img src="<?php echo $data->gambar?>" class="img-thumb" alt="<?php echo $data->judul?>"></div>
										<div class="box-margin-kiri">
                                        <p class="inbox-item-author"><?php echo $data->judul?></p>
                                        </div>
                                    </div>
                                </a>
								<?php } ?>
                                <center><div class="inbox-item">
									<a href="<?php echo base_url('Berita'); ?>" class="btn btn-primary">Lebih Banyak</a>
                                </div></center>
                            </div>
							</div>
						</div>
						
						<div class="col-sm-6" style="padding:0;">
							<div class="card-box ribbon-box">
                            <div class="ribbon ribbon-bbplk"><i class="fa fa-film"></i> GALERI TERBARU</div>
                            <div class="clearfix"></div>
                            <div class="inbox-widget" >
								<?php  foreach($galeri as $datagaleri) { ?>
                                <a href="Galeri/detail/<?php echo $datagaleri->judul_seo?>">
                                    <div class="inbox-item">
										<button type="button" class="btn btn-icon btn-xs waves-effect waves-light btn-primary">GALERI</button>
										<p class="inbox-item-text"> <?php echo $datagaleri->tanggal ?></p>
										<div class="inbox-item-img"><img src="<?php echo $datagaleri->gambar?>" class="img-thumb" alt="<?php echo $datagaleri->judul?>"></div>
										<div class="box-margin-kiri">
                                        <p class="inbox-item-author"><?php echo $datagaleri->judul?></p>
                                        </div>
                                    </div>
                                </a>
								<?php } ?>
                                <center><div class="inbox-item">
									<a href="<?php echo base_url('Galeri'); ?>" class="btn btn-primary">Lebih Banyak</a>
                                </div></center>
                            </div>
                        </div>
						</div>	
					</div>
					<div class="col-sm-3">
						<div class="card-box ribbon-box">
                            <div class="ribbon ribbon-bbplk"><i class="fa fa-bullhorn"></i> PENGUMUMAN TERBARU</div>
                            <div class="clearfix"></div>
                            <div class="inbox-widget" >
								<?php foreach($pengumuman as $datapengumuman) { ?>
                                <a href="Pengumuman/detail/<?php echo $datapengumuman->id_pengumuman?>">
                                    <div class="inbox-item">
										<button type="button" class="btn btn-icon btn-xs waves-effect waves-light btn-primary">PENGUMUMAN</button>
										<p class="inbox-item-text"> <?php echo $datapengumuman->tanggal ?></p>
                                        <p class="inbox-item-author"><?php echo $datapengumuman->judul?></p>
                                    </div>
                                </a>
								<?php } ?>
                                <center><div class="inbox-item">
									<a href="<?php echo base_url('Pengumuman'); ?>" class="btn btn-primary">Lebih Banyak</a>
                                </div></center>
                            </div>
                        </div>
					</div>
					<div class="col-sm-3">
					<div class="card-box ribbon-box">
                            <div class="ribbon ribbon-bbplk"><i class="fa fa-briefcase"></i> INFO KERJA TERBARU</div>
                            <div class="clearfix"></div>
                            <div class="inbox-widget" >
								<?php foreach($info_kerja as $datainfo) { ?>
                                <a href="Loker/detail/<?php echo $datainfo->id_loker?>">
                                    <div class="inbox-item">
										<button type="button" class="btn btn-icon btn-xs waves-effect waves-light btn-primary">INFO KERJA</button>
										<p class="inbox-item-text"><?php echo $datainfo->tglposting ?></p>
                                        <p class="inbox-item-author"><?php echo $datainfo->judul?></p>
                                    </div>
                                </a>
								<?php } ?>
                                <center><div class="inbox-item">
									<a href="<?php echo base_url('Berita/tampil/info_kerja'); ?>" class="btn btn-primary">Lebih Banyak</a>
                                </div></center>
                            </div>
                        </div>
					</div>
					
                </div>