        <!-- jQuery  -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/waves.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>		
		
		<!-- DataTables -->
		<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.js"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/datatables/responsive.bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/datatables/date-dd-MMM-yyyy.js"></script>
		
		<!-- JustifiedGallery -->
		<script src="<?php echo base_url(); ?>assets/plugins/justifiedGallery/jquery.justifiedGallery.min.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.core.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.app.js"></script>
		
		
		<script>
		(function() {
			$('#datakerja').DataTable({
			order : [[3,'desc']]
			});

   			$('<i id="back-to-top"></i>').appendTo($('body'));

			$(window).scroll(function() {

				if($(this).scrollTop() != 0) {
					$('#back-to-top').fadeIn();	
				} else {
					$('#back-to-top').fadeOut();
				}

			});
			
			$('#back-to-top').click(function() {
				$('body,html').animate({scrollTop:0},600);
			});	

		})();
		</script>



        <script src="<?php echo base_url(); ?>assets/plugins/lightgallery/dist/js/lightgallery-all.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/lightgallery/lib/jquery.mousewheel.min.js"></script>
        <script>
                
                $('#mygallery').lightGallery();
                $("#mygallery").justifiedGallery();
        </script>