<script type="text/javascript" src="<?php echo base_url()?>assets/plugins/googlecharts/loader.js"></script>
<?php
date_default_timezone_set('Asia/Jakarta');
$sekarang 			= date("D");

?>

<div class="row">
  <div class="col-lg-2 col-xs-6">
    <div class="small-box bg-green">
      <div class="inner">
        <h3 id="count_pekerjaan"></h3>

        <p>Jumlah Pekerjaan</p>
      </div>
      <div class="icon">
        <i class="ion ion-ios-briefcase-outline"></i>
      </div>
      <a href="<?php echo base_url('Pekerjaan') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-2 col-xs-6">
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3 id='count_open'></h3>
		
        <p>OPEN</p>
      </div>
      <div class="icon">
        <i class="ion ion-ios-bell-outline"></i>
      </div>
      <a href="<?php echo base_url('Pekerjaan/index/OPEN') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-2 col-xs-6">
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3 id="count_closed"></h3>
		
        <p>CLOSED</p>
      </div>
      <div class="icon">
        <i class="ion ion ion-ios-bell"></i>
      </div>
      <a href="<?php echo base_url('Pekerjaan/index/CLOSED') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-2 col-xs-6">
    <div class="small-box bg-red">
      <div class="inner">
        <h3 id="count_mo"></h3>
		
        <p>MTNC OUTAGE</p>
      </div>
      <div class="icon">
        <i class="ion ion-ios-gear"></i>
      </div>
      <a href="<?php echo base_url('Pekerjaan/index/MAINTENANCE_OUTAGE') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-2 col-xs-6">
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3 id="count_ws"></h3>
		
        <p>WAITING SHUTDOWN</p>
      </div>
      <div class="icon">
        <i class="ion ion-ios-clock-outline"></i>
      </div>
      <a href="<?php echo base_url('Pekerjaan/index/WAITING_SHUTDOWN') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <div class="col-lg-2 col-xs-6">
    <div class="small-box bg-green">
      <div class="inner">
        <h3 id="count_wm"></h3>
		
        <p>WAITING MATERIAL</p>
      </div>
      <div class="icon">
        <i class="ion ion-social-dropbox"></i>
      </div>
      <a href="<?php echo base_url('Pekerjaan/index/WAITING_MATERIAL') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  


  <div class="col-lg-12 col-xs-12">
	<div class="nav-tabs-custom">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#pm" data-toggle="tab">Pekerjaan by PM</a></li>
			<li><a href="#kks" data-toggle="tab">Pekerjaan by KKS</a></li>
			<li><a href="#unit" data-toggle="tab">Pekerjaan by Unit</a></li>
			<li><a href="#pic" data-toggle="tab">Pekerjaan by PIC</a></li>
			<li><a href="#critical" data-toggle="tab">Pekerjaan by Critical</a></li>
                        <li><a href="#pekerjaan" data-toggle="tab">Data Pekerjaan</a></li>
		</ul>
		<div class="tab-content">
		<!------------------ PM ----------------------------->
			<div class="active tab-pane" id="pm">
			
			<div id="pmchart" style="width: 100%; height:470px; "></div>
			  
			</div>
                 <!------------------ Pekerjaan ----------------------------->
			<div class="tab-pane" id="pekerjaan">
			
			<table id="example" class="table table-bordered table-striped display" >
      <thead>
        <tr>
		  <th style="width:10px;"></th>
          <th style="min-width:48px;">Raised Date</th>
          <th style="min-width:48px;">Finish Date</th>
          <th>KKS</th>
          <th style="min-width:45px;">Unit</th>
          <th>Nama Pekerjaan</th>
		  <th>Ranking Critical</th>
		  <th>User</th>
		  <th>PIC</th>
		  <th>Status</th>
		  <th>Source</th>
        </tr>
      </thead>
    </table>
			  
			</div>
		<!------------------ KKS ----------------------------->
			<div class="tab-pane" id="kks">
			<table width="100%">
			<tr>
			<td>Tanggal Awal : </td>
			<td>
			<div class="input-group date" style="width:95%;">
				<div class="input-group-addon">
					<i class="fa fa-calendar"></i>
				</div>
				<input class="form-control datepicker" style="border-radius:0px;" type="text" name="start_date" id="start_date">
			</div>
			</td>
			<td>Tanggal Akhir : </td>
			<td>
			<div class="input-group date" style="width:95%;">
				<div class="input-group-addon">
					<i class="fa fa-calendar"></i>
				</div>
				<input class="form-control datepicker " type="text" name="end_date" id="end_date" style="border-radius:0px;">
			</div>
			</td>
			<td>
				<button class="form-control btn btn-primary" id="aaa" style="width:95%;"><i class="fa fa-refresh"></i></button>
			</td>
			<td id="btn-save-1">
				
			</td>
			</tr>
			</table>
			
			<div id="donutchart" style="width: 100%; height:470px;"></div>
			  
			</div>
		<!------------------ UNIT ----------------------------->
			<div class="tab-pane" id="unit">
			<table width="100%">
			<tr>
			<td>Tanggal Awal : </td>
			<td>
			<div class="input-group date" style="width:95%;">
				<div class="input-group-addon">
					<i class="fa fa-calendar"></i>
				</div>
				<input class="form-control datepicker" style="border-radius:0px;" type="text" name="start_date_unit" id="start_date_unit">
			</div>
			</td>
			<td>Tanggal Akhir : </td>
			<td>
			<div class="input-group date" style="width:95%;">
				<div class="input-group-addon">
					<i class="fa fa-calendar"></i>
				</div>
				<input class="form-control datepicker " type="text" name="end_date_unit" id="end_date_unit" style="border-radius:0px;">
			</div>
			</td>
			<td>
				<button class="form-control btn btn-primary" id="generate-unit" style="width:95%;"><i class="fa fa-refresh"></i></button>
			</td>
			<td id="btn-save-3">
				
			</td>
			</tr>
			</table>
			
			<div id="unitchart" style="width: 100%; height:470px;"></div>
			  
			</div>
		<!------------------ PIC ----------------------------->
			<div class="tab-pane" id="pic">
			<table width="100%">
			<tr>
			<td>Tanggal Awal : </td>
			<td>
			<div class="input-group date" style="width:95%;">
				<div class="input-group-addon">
					<i class="fa fa-calendar"></i>
				</div>
				<input class="form-control datepicker" style="border-radius:0px;" type="text" name="start_date" id="start_date_pic">
			</div>
			</td>
			<td>Tanggal Akhir : </td>
			<td>
			<div class="input-group date" style="width:95%;">
				<div class="input-group-addon">
					<i class="fa fa-calendar"></i>
				</div>
				<input class="form-control datepicker " type="text" name="end_date_pic" id="end_date_pic" style="border-radius:0px;">
			</div>
			</td>
			<td>
				<button class="form-control btn btn-primary" id="generate-pic" style="width:95%;"><i class="fa fa-refresh"></i></button>
			</td>
			<td id="btn-save-2">
				
			</td>
			</tr>
			</table>
			
			<div id="picchart" style="width: 100%; height:470px;"></div>
			  
			</div>
        
		<!------------------ CRITICAL ----------------------------->
			<div class="tab-pane" id="critical">
			<table width="100%">
			<tr>
			<td>Tanggal Awal : </td>
			<td>
			<div class="input-group date" style="width:95%;">
				<div class="input-group-addon">
					<i class="fa fa-calendar"></i>
				</div>
				<input class="form-control datepicker" style="border-radius:0px;" type="text" name="start_date" id="start_date_critical">
			</div>
			</td>
			<td>Tanggal Akhir : </td>
			<td>
			<div class="input-group date" style="width:95%;">
				<div class="input-group-addon">
					<i class="fa fa-calendar"></i>
				</div>
				<input class="form-control datepicker " type="text" name="end_date_pic" id="end_date_critical" style="border-radius:0px;">
			</div>
			</td>
			<td>
				<button class="form-control btn btn-primary" id="generate-critical" style="width:95%;"><i class="fa fa-refresh"></i></button>
			</td>
			<td id="btn-save-4">
				
			</td>
			</tr>
			</table>
			
			<div id="criticalchart" style="width: 100%; height:470px;"></div>
			  
			</div>
      
	  </div>
	</div>
  </div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
        waitingDialog.show();
        
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Home/grafikPM'); ?>",
			dataType: 'json'
		})
		.done(function(data) {
                 waitingDialog.hide();
                 
			google.charts.load('current', {'packages':['corechart']});
      
			// Set a callback to run when the Google Visualization API is loaded.
			google.charts.setOnLoadCallback(drawChart);
			  
			function drawChart() {
			  // Create our data table out of JSON data loaded from server.
			  var cartdata = new google.visualization.DataTable(data);
			  var options = {
						  title: 'Grafik Pekerjaan Preventive Management',						  
						  animation:{
							duration: 1000,
							easing: 'out'
						  }
						};
			  // Instantiate and draw our chart, passing in some options.
			  var chart = new google.visualization.LineChart(document.getElementById('pmchart'));
			  
			  google.visualization.events.addListener(chart, 'ready', function () {
				  
			  });

			  chart.draw(cartdata, options);
			}
		})
	});
        
	$("#aaa").click(function() {
		var start_date = $("#start_date").val();
		var end_date = $("#end_date").val();
		$('#aaa').attr("disabled", true);
		waitingDialog.show();
		//alert(start_date);
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Home/grafikKKS'); ?>",
			data: '1_date='+start_date+'&2_date='+end_date
		})
		.done(function(data) {
			waitingDialog.hide();
			google.charts.load('current', {'packages':['corechart']});
      
			// Set a callback to run when the Google Visualization API is loaded.
			google.charts.setOnLoadCallback(drawChart);
			  
			function drawChart() {
			  moment.locale('id');
			  var tgl_awal = moment($("#start_date").val()).format('LL');
			  var tgl_akhir = moment($("#end_date").val()).format('LL');
			  // Create our data table out of JSON data loaded from server.
			  var cartdata = new google.visualization.DataTable(data);
			  var options = {
						  title: 'Grafik Pekerjaan Berdasarkan KKS dari '+ tgl_awal +' sampai '+ tgl_akhir +'',						  
						  animation:{
							duration: 1000,
							easing: 'out'
						  }
						};
			  // Instantiate and draw our chart, passing in some options.
			  var chart_div = document.getElementById('btn-save-1');
			  var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
			  
			  google.visualization.events.addListener(chart, 'ready', function () {
				  
				chart_div.innerHTML = '<a href="' + chart.getImageURI() + '" download="chart.png" class="form-control btn btn-primary"><i class="fa fa-save"></i>	</a>';
				console.log(chart_div.innerHTML);
			  });

			  chart.draw(cartdata, options);
			  $('#aaa').attr("disabled", false);

			}
		})
		
	});
	
	$("#generate-pic").click(function() {
		var start_date_pic = $("#start_date_pic").val();
		var end_date_pic = $("#end_date_pic").val();
		$('#generate-pic').attr("disabled", true);
		waitingDialog.show();
		//alert(start_date_pic+" "+ end_date_pic);
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Home/grafikPIC'); ?>",
			data: '1_date='+start_date_pic+'&2_date='+end_date_pic
		})
		.done(function(data) {
			waitingDialog.hide();
			google.charts.load('current', {'packages':['corechart']});
      
			// Set a callback to run when the Google Visualization API is loaded.
			google.charts.setOnLoadCallback(drawChart);
			  
			function drawChart() {
			  moment.locale('id');
			  var tgl_awal = moment($("#start_date_pic").val()).format('LL');
			  var tgl_akhir = moment($("#end_date_pic").val()).format('LL');
			  // Create our data table out of JSON data loaded from server.
			  var cartdata = new google.visualization.DataTable(data);
			  var options = {
						  title: 'Grafik Pekerjaan Berdasarkan PIC dari '+ tgl_awal +' sampai '+ tgl_akhir +'',						  
						  animation:{
							duration: 1000,
							easing: 'out'
						  }
						};
			  // Instantiate and draw our chart, passing in some options.
			  var chart_div = document.getElementById('btn-save-2');
			  var chart = new google.visualization.PieChart(document.getElementById('picchart'));
			  
			  google.visualization.events.addListener(chart, 'ready', function () {
				  
				chart_div.innerHTML = '<a href="' + chart.getImageURI() + '" download="chart.png" class="form-control btn btn-primary"><i class="fa fa-save"></i>	</a>';
				console.log(chart_div.innerHTML);
			  });

			  chart.draw(cartdata, options);
			  $('#generate-pic').attr("disabled", false);
			}
		})
		
	});
	
	$("#generate-unit").click(function() {
		var start_date_unit = $("#start_date_unit").val();
		var end_date_unit = $("#end_date_unit").val();
		$('#generate-unit').attr("disabled", true);
		waitingDialog.show();
		//alert(start_date_pic+" "+ end_date_pic);
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Home/grafikUNIT'); ?>",
			data: '1_date='+start_date_unit+'&2_date='+end_date_unit
		})
		.done(function(data) {
			waitingDialog.hide();
			google.charts.load('current', {'packages':['corechart']});
      
			// Set a callback to run when the Google Visualization API is loaded.
			google.charts.setOnLoadCallback(drawChart);
			  
			function drawChart() {
			  moment.locale('id');
			  var tgl_awal = moment($("#start_date_unit").val()).format('LL');
			  var tgl_akhir = moment($("#end_date_unit").val()).format('LL');
			  // Create our data table out of JSON data loaded from server.
			  var cartdata = new google.visualization.DataTable(data);
			  var options = {
						  title: 'Grafik Pekerjaan Berdasarkan Unit dari '+ tgl_awal +' sampai '+ tgl_akhir +'',						  
						  animation:{
							duration: 1000,
							easing: 'out'
						  }
						};
			  // Instantiate and draw our chart, passing in some options.
			  var chart_div = document.getElementById('btn-save-3');
			  var chart = new google.visualization.PieChart(document.getElementById('unitchart'));
			  
			  google.visualization.events.addListener(chart, 'ready', function () {
				  
				chart_div.innerHTML = '<a href="' + chart.getImageURI() + '" download="chart.png" class="form-control btn btn-primary"><i class="fa fa-save"></i>	</a>';
				console.log(chart_div.innerHTML);
			  });

			  chart.draw(cartdata, options);
			  $('#generate-unit').attr("disabled", false);
			}
		})
		
	});
	
	$("#generate-critical").click(function() {
		var start_date_critical = $("#start_date_critical").val();
		var end_date_critical = $("#end_date_critical").val();
		$('#generate-critical').attr("disabled", true);
		waitingDialog.show();
		$.ajax({
			method: "POST",
			url: "<?php echo base_url('Home/grafikCritical'); ?>",
			data: '1_date='+start_date_critical+'&2_date='+end_date_critical
		})
		.done(function(data) {
			waitingDialog.hide();
			google.charts.load('current', {'packages':['corechart']});
      
			// Set a callback to run when the Google Visualization API is loaded.
			google.charts.setOnLoadCallback(drawChart);
			  
			function drawChart() {
			  moment.locale('id');
			  var tgl_awal = moment($("#start_date_critical").val()).format('LL');
			  var tgl_akhir = moment($("#end_date_critical").val()).format('LL');
			  // Create our data table out of JSON data loaded from server.
			  var cartdata = new google.visualization.DataTable(data);
			  var options = {
						  title: 'Grafik Pekerjaan Berdasarkan Tingkat Critical dari '+ tgl_awal +' sampai '+ tgl_akhir +'',						  
						  animation:{
							duration: 1000,
							easing: 'out'
						  }
						};
			  // Instantiate and draw our chart, passing in some options.
			  var chart_div = document.getElementById('btn-save-4');
			  var chart = new google.visualization.PieChart(document.getElementById('criticalchart'));
			  
			  google.visualization.events.addListener(chart, 'ready', function () {
				  
				chart_div.innerHTML = '<a href="' + chart.getImageURI() + '" download="chart.png" class="form-control btn btn-primary"><i class="fa fa-save"></i>	</a>';
				console.log(chart_div.innerHTML);
			  });

			  chart.draw(cartdata, options);
			  $('#generate-critical').attr("disabled", false);

			}
		})
		
	});
	


</script>

<script>
/* Formatting function for row details - modify as you need */
function format ( d ) {
	moment.locale('id');
    // `d` is the original data object for the row
    return '<table class="table table-hover table-striped">'+
		'<tr>'+
            '<td width=130px><b>Deskripsi Pekerjaan</b></td>'+
			'<td width=10px>:</td>'+
            '<td class="wrappable">'+d.deskripsi_pekerjaan+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td><b>Temuan Abnormal</b></td>'+
			'<td>:</td>'+
            '<td class="wrappable">'+d.temuan_abnormal+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td><b>Action</b></td>'+
			'<td>:</td>'+
            '<td class="wrappable">'+d.action+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td><b>Hasil</b></td>'+
			'<td>:</td>'+
            '<td class="wrappable">'+d.hasil+'</td>'+
        '</tr>'+
		'<tr>'+
            '<td><b>Keterangan</b></td>'+
			'<td>:</td>'+
            '<td class="wrappable">'+d.keterangan+'</td>'+
        '</tr>'+
		'<tr>'+
            '<td><b>WM</b></td>'+
			'<td>:</td>'+
            '<td class="wrappable">'+d.wm+'</td>'+
        '</tr>'+
		'<tr>'+
            '<td><b>WS</b></td>'+
			'<td>:</td>'+
            '<td class="wrappable">'+d.ws+'</td>'+
        '</tr>'+
    '</table>';
}
                
$(document).ready(function() {

    var table = $('#example').DataTable( {
        "ajax": "<?php echo base_url(); ?>/Pekerjaan/data_json",
        "columns": [
            {
                "className":      'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": ''
            },
            { "data": "tanggal" },
            { "data": "tanggal_selesai" },
            { "data": "KKS" },
            { "data": "unit" },
			{ "data": "nama_pekerjaan" },
			{ "data": "ranking_critical" },
			{ "data": "nama_user" },
			{ "data": "pic" },
			{ "data": "status" },
			{ "data": "sumber" }
        ],
        "order": [[1, 'desc']]
    } );
     
    // Add event listener for opening and closing details
    $('#example tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row( tr );
 
        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            // Open this row
            row.child( format(row.data()) ).show();
            tr.addClass('shown');
        }
    } );
    setInterval( function () {
    table.ajax.reload( null, false ); // user paging is not reset on reload
	}, 60000 );
} );

function refreshCount(){
		$.ajax({
			method: 'POST',
			url: '<?php echo base_url('Home/count'); ?>',
			dataType: "json"
		})
		.done(function(data) {
			$('#count_pekerjaan').html(data.count_pekerjaan);
			$('#count_open').html(data.count_open);
			$('#count_closed').html(data.count_close);
			$('#count_mo').html(data.count_mo);
			$('#count_ws').html(data.count_ws);
			$('#count_wm').html(data.count_wm);
		})
		e.preventDefault();
	     };
    setInterval( function () {
    refreshCount();
	}, 1000 );
</script>