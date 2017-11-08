<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url(); ?>assets/img/<?php echo $userdata->foto; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $userdata->nama_user; ?></p>
        <!-- Status -->
        <a href="<?php echo base_url(); ?>assets/#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">LIST MENU</li>
      <!-- Optionally, you can add icons to the links -->
	  <?php if ($this->userdata->jabatan == 'Supervisor'){?>
      <li <?php if ($page == 'home') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Home'); ?>">
          <i class="fa fa-home"></i>
          <span>Home</span>
        </a>
      </li>
	  <li <?php if ($page == 'user') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('User'); ?>">
          <i class="fa fa-user"></i>
          <span>Data User</span>
        </a>
      </li>
	  <li <?php if ($page == 'pekerjaan') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Pekerjaan'); ?>">
          <i class="fa fa-briefcase"></i>
          <span>Pekerjaan</span>
        </a>
      </li>
          <li <?php if ($page == 'reliability') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Reliability'); ?>">
          <i class="fa fa-wrench"></i>
          <span>Reliability</span>
        </a>
      </li>
	  <li <?php if ($page == 'laporan') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Laporan'); ?>">
          <i class="fa fa-newspaper-o"></i>
          <span>Laporan</span>
        </a>
      </li>
      <li>
        <a href="#" id="btn-refresh">
          <i class="fa fa-refresh"></i>
          <span>Refresh</span>
        </a>
      </li>
	  <?php 
	  } else if($this->userdata->jabatan == 'Staff'){
	  ?>
	  <li <?php if ($page == 'home') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Home'); ?>">
          <i class="fa fa-home"></i>
          <span>Home</span>
        </a>
      </li>
	  <li <?php if ($page == 'pekerjaan') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Pekerjaan'); ?>">
          <i class="fa fa-briefcase"></i>
          <span>Pekerjaan</span>
        </a>
      </li>
      <li <?php if ($page == 'reliability') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Reliability'); ?>">
          <i class="fa fa-wrench"></i>
          <span>Reliability</span>
        </a>
      </li>
      <li>
        <a href="#" id="btn-refresh">
          <i class="fa fa-refresh"></i>
          <span>Refresh</span>
        </a>
      </li>
	  
     <?php 
    } else if($this->userdata->jabatan == 'Operator'){
    ?>
<li <?php if ($page == 'home') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Home'); ?>">
          <i class="fa fa-home"></i>
          <span>Home</span>
        </a>
      </li>
     <li <?php if ($page == 'pekerjaan') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Pekerjaan'); ?>">
          <i class="fa fa-briefcase"></i>
          <span>Pekerjaan</span>
        </a>
      </li>
    <li <?php if ($page == 'reliability') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Reliability'); ?>">
          <i class="fa fa-wrench"></i>
          <span>Reliability</span>
        </a>
      </li>
    <li <?php if ($page == 'laporan') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Laporan'); ?>">
          <i class="fa fa-newspaper-o"></i>
          <span>Laporan</span>
        </a>
      </li>
      <li>
        <a href="#" id="btn-refresh">
          <i class="fa fa-refresh"></i>
          <span>Refresh</span>
        </a>
      </li>
    
    <?php
      
    }
    ?>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>