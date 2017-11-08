				<div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box-bread">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone">
                                    <li>
                                        <a href="<?php echo base_url();?>">Home</a>
                                    </li>
                                    <li class="active">
										Pengumuman
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Pengumuman</h4>
                        </div>
                    </div>
                </div>
				
                <div class="row">
                    
					<div class="col-md-8">
						<?php foreach($results as $data) { ?>
						<div class="thumbnail">
							<div class="item-inner-blog">
								<?php if(isset($data->gambar)){?>
								<a href="<?php echo "".base_url()."Berita/detail/$data->judul_seo" ?>"><img src="<?php echo $data->gambar; ?>" alt="<?php echo $data->judul; ?>"></a>
								<?php } else{}?>
							</div> 
							<div class="blog-property">
							<a href="<?php echo "".base_url()."Pengumuman/detail/$data->id_pengumuman" ?>"><h3><?php echo $data->judul; ?></h3></a>
							<i class="fa fa-clock-o"></i> <?php echo $data->tanggal ?> by <b><?php echo $data->nama ?></b>
							<hr>
							<div class="detail_text">
							<?php echo substr($data->isi_pengumuman,0,300); ?> [...]
							</div>
							<br><br>
							<!--a class="btn btn-primary" href="<?php echo "".base_url()."Berita/detail/$data->judul_seo" ?>">Read More</a-->
							</div>
						</div>
						<?php } ?>
						<?php echo $paging; ?>
					</div>
					<div class="col-md-4">
                        <div class="widget">
                        <form class="search">
                            <input placeholder="Cari Berita..." class="form-control" type="text">
                            <a href=""><i class="fa fa-search"></i></a>
                        </form>
                        </div>
                        <div class="widget">
                        <div class="panel panel-bbplk">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-newspaper-o"></i> Berita Terbaru</h3>
                            </div>
                            <div class="panel-body">
                                <div class="inbox-widget" >
                                <?php foreach($feed as $datafeed) { ?>
                                <a href="<?php echo "".base_url()."Berita/detail/$datafeed->judul_seo" ?>">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img src="<?php echo ''.base_url().''.$datafeed->gambar.'' ?>" class="img-thumb" alt="<?php echo $datafeed->judul; ?>"></div>
                                        <div class="inbox-top">
                                        <button type="button" class="btn btn-icon btn-xs waves-effect waves-light btn-primary">Berita</button>
                                        <p class="inbox-item-text"><?php echo $datafeed->tanggal ?></p>
                                        </div>
                                        <div class="box-margin-kiri">
                                        <p class="inbox-item-author"><?php echo $datafeed->judul ?></p>
                                        </div>
                                    </div>
                                </a>
                                <?php } ?>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="widget">
                        <div class="panel panel-bbplk">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-newspaper-o"></i> Info Kerja Terbaru</h3>
                            </div>
                            <div class="panel-body">
                                <div class="inbox-widget" >
                                <?php foreach($info_kerja as $datakerja) { ?>
                                <a href="<?php echo "".base_url()."Info_kerja/detail/$datakerja->id_loker" ?>">
                                    <div class="inbox-item">
                                        
                                        <div class="inbox-top">
                                        <button type="button" class="btn btn-icon btn-xs waves-effect waves-light btn-primary">INFO KERJA</button>
                                        <p class="inbox-item-text"> <?php echo $datakerja->tglposting ?></p>
                                        </div>
                                        
                                        <p class="inbox-item-author"><?php echo $datakerja->judul ?></p>
                                       
                                    </div>
                                </a>
                                <?php } ?>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="widget">
                        <div class="panel panel-bbplk">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-newspaper-o"></i> Arsip Berita</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group b-0 mail-list">
                                    <a href="#" class="list-group-item b-0"><span class="fa fa-angle-double-right text m-r-10"></span>Oktober 2017</a>
                                    <a href="#" class="list-group-item b-0"><span class="fa fa-angle-double-right text m-r-10"></span>September 2017</a>
                                    <a href="#" class="list-group-item b-0"><span class="fa fa-angle-double-right text m-r-10"></span>Agustus 2017</a>
                                    <a href="#" class="list-group-item b-0"><span class="fa fa-angle-double-right text m-r-10"></span>Juli 2017</a>
                                    <a href="#" class="list-group-item b-0"><span class="fa fa-angle-double-right text m-r-10"></span>Juni 2017</a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
					
                </div>
                <!-- end row -->