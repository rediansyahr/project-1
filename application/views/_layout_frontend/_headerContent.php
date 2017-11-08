				<div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
							<div class="feed">
								<i class="fa fa-bullhorn"></i>
								<marquee behavior="scroll" scrollamount="5" direction="left" onmouseover="this.setAttribute('scrollamount',0);" onmouseout="this.setAttribute('scrollamount',5);">
								<?php foreach($feed as $data) { ?>
									
								<a href="<?php echo "".base_url()."Berita/detail/$data->judul_seo" ?>"><?php echo $data->judul; ?></a>
								<?php } ?>
								</marquee>
							</div>
                        </div>
                    </div>
                </div>