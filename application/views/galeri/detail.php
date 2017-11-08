				<div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box-bread">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone">
                                    <li>
                                        <a href="#">Home</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo ''.base_url().'Galeri';?>">Galeri</a>
                                    </li>
									<li class="active">
                                        <?php echo $results->judul; ?>
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Galeri</h4>
                        </div>
                    </div>
                </div>
				
                <div class="row">
					<div class="col-md-8">
						<div class="thumbnail">
							<div class="item-inner-blog-solo">
							
								<img src="<?php echo ''.base_url().''.$results->gambar.'' ?>" alt="<?php echo $results->judul; ?>">      
							</div> 
							<div class="blog-property">
							<h3><?php echo $results->judul; ?></h3>
							<i class="fa fa-clock-o"></i> <?php echo $results->tanggal; ?> by <b><?php echo $results->nama; ?></b>
							<hr>
							<div class="detail_text">
							<?php echo $results->isi_galeri; ?>
							</div>
                            <div id="mygallery" >
                                    <?php if($galeri!=null){foreach ($galeri as $data) { ?>                
                                    <a href="<?php echo "".base_url()."".$data->gambar.""?>">
                                        <img src="<?php echo "".base_url()."".$data->gambar.""?>"/>
                                    </a>
                                    <?php }} ?>
                             </div>
							</div>
						</div>
						

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
