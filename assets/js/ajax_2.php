<script type="text/javascript">
	$.fn.modal.Constructor.prototype.enforceFocus = $.noop; // fix error select2
	var MyTable = $('#list-data').dataTable({
		  "paging": true,
		  "lengthChange": true,
		  "searching": true,
		  "ordering": true,
		  "info": true,
		  "autoWidth": false
		});

	window.onload = function() {  
		tampilUser();
		tampilPekerjaan();
		tampilLaporan();
		<?php
			if ($this->session->flashdata('msg') != '') {
				echo "effect_msg();";
			}
		?>
	}
	
	$(document).on({
    //ajaxStart: function() { waitingDialog.show();    },
    // ajaxStop: function() { waitingDialog.hide(); }    
	});
	
	function refresh() {
		MyTable = $('#list-data').dataTable({
			order : [[1,'desc']]
		});
	}
	
	
	function refreshPekerjaan() {
		MyTable = $('#list-data').dataTable({
		
			order : [[1,'desc']]
		});
	}
	
	
	$(".date-filter").change(function() {
		var min_date = $("#min-date").val();
		var max_date = $("#max-date").val();
		
		if (min_date != "" && max_date != ""){
			//alert(min_date +" "+ max_date);
			$.ajax({
			method: "POST",
			url: "<?php echo base_url('Pekerjaan/filter'); ?>",
			data: '1_date='+min_date+'&2_date='+max_date
			})
			.done(function(data) {
				MyTable.fnDestroy();
				$('#data-pekerjaan').html(data);
				refreshPekerjaan();
			});	
		}
		else{
			
		}
	});
        $(".date-filter-1").change(function() {
		var min_date = $("#min-date-1").val();
		var max_date = $("#max-date-1").val();
		
		if (min_date != "" && max_date != ""){
			//alert(min_date +" "+ max_date);
			$.ajax({
			method: "POST",
			url: "<?php echo base_url('Laporan/filter'); ?>",
			data: '1_date='+min_date+'&2_date='+max_date
			})
			.done(function(data) {
				MyTable.fnDestroy();
				$('#data-laporan').html(data);
				refreshPekerjaan();
			});	
		}
		else{
			
		}
	});

	function effect_msg_form() {
		// $('.form-msg').hide();
		$('.form-msg').show(1000);
		setTimeout(function() { $('.form-msg').fadeOut(1000); }, 3000);
	}

	function effect_msg() {
		// $('.msg').hide();
		$('.msg').show(1000);
		setTimeout(function() { $('.msg').fadeOut(1000); }, 3000);
	}

	function tampilPegawai() {
		$.get('<?php echo base_url('Pegawai/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-pegawai').html(data);
			refresh();
		});
	}
	function tampilPekerjaan() {
		$.get('<?php echo base_url('Pekerjaan/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-pekerjaan').html(data);
			refreshPekerjaan();
			
		});
	}
	function tampilLaporan() {
		$.get('<?php echo base_url('Laporan/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-laporan').html(data);
			refreshPekerjaan();
		});
	}
	function tampilUser() {
		$.get('<?php echo base_url('User/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-user').html(data);
			refresh();
		});
	}
	// User
	
	$('#form-tambah-user').submit(function(e) {
		var data = $(this).serialize();

		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('User/prosesTambah'); ?>',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);

			tampilUser();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-tambah-user").reset();
				$('#tambah-user').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});
	var nid;
	$(document).on("click", ".konfirmasiHapus-user", function() {
		nid = $(this).attr("data-id");
	})
	$(document).on("click", ".hapus-datauser", function() {
		var id = nid;
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('User/delete'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#konfirmasiHapus').modal('hide');
			tampilUser();
			$('.msg').html(data);
			effect_msg();
		})
	})
	
	$(document).on("click", ".update-dataUser", function() {
		var id = $(this).attr("data-id");
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('User/update'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#tempat-modal').html(data);
			$('#update-user').modal('show');
		})
	})
	
	
	$(document).on('submit', '#form-update-user', function(e){
		var data = $(this).serialize();

		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('User/prosesUpdate'); ?>',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);

			tampilUser();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-update-user").reset();
				$('#update-user').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});
	
	// Pekerjaan
	
	$('#form-tambah-pekerjaan').submit(function(e) {
		var data = $(this).serialize();
		$('#btn-tambah-pekerjaan').attr("disabled", true);
		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('Pekerjaan/prosesTambah'); ?>',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);

			tampilPekerjaan();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-tambah-pekerjaan").reset();
				$('#tambah-pekerjaan').modal('hide');
				$('.msg').html(out.msg);	
				effect_msg();
				$(".select2").val('').trigger('change');
				$('#btn-tambah-pekerjaan').attr("disabled", false);
			}
		})
		
		e.preventDefault();
	});
	
	$('#form-detail-pekerjaan').submit(function(e) {
		var data = $(this).serialize();

		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('Pekerjaan/prosesTambahDetail'); ?>',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);

			tampilPekerjaan();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-detail-pekerjaan").reset();
				$('#detail-pekerjaan').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});
	
	
	$(document).on("click", ".update-dataPekerjaan", function() {
		var id = $(this).attr("data-id");
		$('.update-dataPekerjaan').attr("disabled", true);
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Pekerjaan/update'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#tempat-modal').html(data);
			$('#update-pekerjaan').modal('show');
			$('.update-dataPekerjaan').attr("disabled", false);
		})
	})
	
	$(document).on('submit', '#form-update-pekerjaan', function(e){
		var data = $(this).serialize();

		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('Pekerjaan/prosesUpdate'); ?>',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);

			tampilPekerjaan();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-update-pekerjaan").reset();
				$('#update-pekerjaan').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});
	
	var id_pekerjaan;
	$(document).on("click", ".konfirmasiHapus-pekerjaan", function() {
		id_pekerjaan = $(this).attr("data-id");
	})
	$(document).on("click", ".hapus-datapekerjaan", function() {
		var id = id_pekerjaan;
		
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Pekerjaan/delete'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#konfirmasiHapus').modal('hide');
			tampilPekerjaan();
			$('.msg').html(data);
			effect_msg();
		})
	})
	
	$(document).on("click", ".detail-dataPekerjaan", function() {
		var id = $(this).attr("data-id");
		$('.detail-dataPekerjaan').attr("disabled", true);
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Pekerjaan/detail'); ?>",
			data: "id=" +id
		})
		.done(function(data) {
			$('#tempat-modal').html(data);
			$('#detail-pekerjaan').modal('show');
			$('.detail-dataPekerjaan').attr("disabled", false);
		})
	})
	
	$(document).on("click", "#btn-refresh", function() {
		waitingDialog.show();
		tampilPekerjaan();
		tampilLaporan();
		tampilUser();
		waitingDialog.hide();
	});
	
	var waitingDialog = waitingDialog || (function ($) {
    'use strict';

	// Creating modal dialog's DOM
	var $dialog = $(
		'<div class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true" style="padding-top:15%; overflow-y:visible;">' +
		'<div class="modal-dialog modal-m">' +
		'<div class="modal-content">' +
			'<div class="modal-header"><h3 style="margin:0;"></h3></div>' +
			'<div class="modal-body">' +
				'<div class="progress progress-striped active" style="margin-bottom:0;"><div class="progress-bar" style="width: 100%"></div></div>' +
			'</div>' +
		'</div></div></div>');

	return {
		/**
		 * Opens our dialog
		 * @param message Custom message
		 * @param options Custom options:
		 * 				  options.dialogSize - bootstrap postfix for dialog size, e.g. "sm", "m";
		 * 				  options.progressType - bootstrap postfix for progress bar type, e.g. "success", "warning".
		 */
		show: function (message, options) {
			// Assigning defaults
			if (typeof options === 'undefined') {
				options = {};
			}
			if (typeof message === 'undefined') {
				message = 'Loading';
			}
			var settings = $.extend({
				dialogSize: 'm',
				progressType: '',
				onHide: null // This callback runs after the dialog was hidden
			}, options);

			// Configuring dialog
			$dialog.find('.modal-dialog').attr('class', 'modal-dialog').addClass('modal-' + settings.dialogSize);
			$dialog.find('.progress-bar').attr('class', 'progress-bar');
			if (settings.progressType) {
				$dialog.find('.progress-bar').addClass('progress-bar-' + settings.progressType);
			}
			$dialog.find('h3').text(message);
			// Adding callbacks
			if (typeof settings.onHide === 'function') {
				$dialog.off('hidden.bs.modal').on('hidden.bs.modal', function (e) {
					settings.onHide.call($dialog);
				});
			}
			// Opening dialog
			$dialog.modal();
		},
		/**
		 * Closes dialog
		 */
		hide: function () {
			$dialog.modal('hide');
		}
	};
	})(jQuery);

</script>