					<div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu navbar-right">

                            <li class="has-submenu <?php if ($page == 'home') {echo 'active';} ?>">
                                <a href="<?php echo base_url('Home'); ?>">Home</a>
                            </li>
							<li class="has-submenu <?php if ($page == 'profile') {echo 'active';} ?>">
                                <a href="#">Profile</a>
                                <ul class="submenu">
                                    <li><a href="<?php echo base_url('Profile/profile_singkat'); ?>">Profile</a></li>
									<li><a href="<?php echo base_url('Profile/visi_misi'); ?>">Visi & Misi</a></li>
                                    <li><a href="<?php echo base_url('Profile/struktur_organisasi'); ?>">Struktur Organisasi</a></li>
                                </ul>
                            </li>
							<li class="has-submenu <?php if ($page == 'berita') {echo 'active';} ?>">
                                <a href="<?php echo base_url('Berita'); ?>">Berita</a>
                            </li>
							<li class="has-submenu <?php if ($page == 'pengumuman') {echo 'active';} ?>">
                                <a href="<?php echo base_url('Pengumuman'); ?>">Pengumuman</a>
                            </li>
							<li class="has-submenu <?php if ($page == 'galeri') {echo 'active';} ?>">
                                <a href="<?php echo base_url('Galeri'); ?>">Galeri</a>
                            </li>
							<li class="has-submenu <?php if ($page == 'loker') {echo 'active';} ?>">
                                <a href="<?php echo base_url('Loker'); ?>">Info Kerja</a>
                            </li>
							<li class="has-submenu <?php if ($page == 'kejuruan') {echo 'active';} ?>">
                                <a href="<?php echo base_url('Kejuruan'); ?>">Kejuruan</a>
                            </li>
							
                        </ul> <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                    <div class="menu-extras">
                        <div class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                    </div>
                    <!-- end menu-extras -->