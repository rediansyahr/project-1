<!DOCTYPE html>
<html>
  <head>
    <title>BBPLK Bekasi</title>
    <!-- meta -->
    <?php echo @$_meta; ?>

    <!-- css --> 
    <?php echo @$_css; ?>

  </head>

  <body>
    <div class="wrapper">
		<div class="container">
		  <!-- header -->
		  <?php echo @$_header; ?> <!-- nav -->
		  <?php echo @$_headerContent; ?>
		  <!-- content -->
		  <?php echo @$_content; ?> <!-- headerContent --><!-- mainContent -->
		  
		</div>
		<!-- footer -->
		  <?php echo @$_footer; ?>
    </div>

    <!-- js -->
    <?php echo @$_js; ?>
  </body>
</html>