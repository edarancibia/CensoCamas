<!DOCTYPE html>
<html>
<head>
	<title>Gestion Camas CBO</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<!--<meta http-equiv="refresh" content="30" />-->

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">

	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/tabletools/2.2.1/css/dataTables.tableTools.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.4.1/css/buttons.dataTables.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/tabletools/2.2.4/js/dataTables.tableTools.min.js"></script>
	
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.flash.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.html5.min.js"></script>



	<!--<script type="text/javascript" charset="UTF-8" src="<?php echo base_url("assets/js/script.js"); ?>"></script>-->

	<script type="text/javascript">
	$(document).ready(function(){
		$(function(){
			//tabla h
			$('#tablaH td:last-child:contains(5)').closest('tr').css('background-color', '#04B404');
			$('#tablaH td:last-child:contains(9)').closest('tr').css('background-color', '#F7FE2E');
			$('#tablaH td:last-child:contains(10)').closest('tr').css('background-color', '#F7FE2E');
			$('#tablaH td:last-child:contains(11)').closest('tr').css('background-color', '#F7FE2E');
			$('#tablaH td:last-child:contains(12)').closest('tr').css('background-color', 'RosyBrown');
			$('#tablaH td:last-child:contains(13)').closest('tr').css('background-color', 'Brown');
			$('#tablaH td:last-child:contains(4)').closest('tr').css('background-color', 'orange');

			//tabla f
			$('#tablaF td:last-child:contains(5)').closest('tr').css('background-color', '#04B404');
			$('#tablaF td:last-child:contains(9)').closest('tr').css('background-color', '#F7FE2E');
			$('#tablaF td:last-child:contains(10)').closest('tr').css('background-color', '#F7FE2E');
			$('#tablaF td:last-child:contains(11)').closest('tr').css('background-color', '#F7FE2E');
			$('#tablaF td:last-child:contains(12)').closest('tr').css('background-color', 'RosyBrown');
			$('#tablaF td:last-child:contains(13)').closest('tr').css('background-color', 'Brown');
			$('#tablaF td:last-child:contains(4)').closest('tr').css('background-color', 'orange');

			//tabla e
			$('#tablaE td:last-child:contains(5)').closest('tr').css('background-color', '#04B404');
			$('#tablaE td:last-child:contains(9)').closest('tr').css('background-color', '#F7FE2E');
			$('#tablaE td:last-child:contains(10)').closest('tr').css('background-color', '#F7FE2E');
			$('#tablaE td:last-child:contains(11)').closest('tr').css('background-color', '#F7FE2E');
			$('#tablaE td:last-child:contains(12)').closest('tr').css('background-color', 'RosyBrown');
			$('#tablaE td:last-child:contains(13)').closest('tr').css('background-color', 'Brown');
			$('#tablaE td:last-child:contains(4)').closest('tr').css('background-color', 'orange');

			//tabla m
			$('#tablaM td:last-child:contains(5)').closest('tr').css('background-color', '#04B404');
			$('#tablaM td:last-child:contains(9)').closest('tr').css('background-color', '#F7FE2E');
			$('#tablaM td:last-child:contains(10)').closest('tr').css('background-color', '#F7FE2E');
			$('#tablaM td:last-child:contains(11)').closest('tr').css('background-color', '#F7FE2E');
			$('#tablaM td:last-child:contains(12)').closest('tr').css('background-color', 'RosyBrown');
			$('#tablaM td:last-child:contains(13)').closest('tr').css('background-color', 'Brown');
			$('#tablaM td:last-child:contains(4)').closest('tr').css('background-color', 'orange');

			//tabla upc
			$('#tablaUpc td:last-child:contains(5)').closest('tr').css('background-color', '#04B404');
			$('#tablaUpc td:last-child:contains(9)').closest('tr').css('background-color', '#F7FE2E');
			$('#tablaUpc td:last-child:contains(10)').closest('tr').css('background-color', '#F7FE2E');
			$('#tablaUpc td:last-child:contains(11)').closest('tr').css('background-color', '#F7FE2E');
			$('#tablaUpc td:last-child:contains(12)').closest('tr').css('background-color', 'RosyBrown');
			$('#tablaUpc td:last-child:contains(13)').closest('tr').css('background-color', 'Brown');
			$('#tablaUpc td:last-child:contains(4)').closest('tr').css('background-color', 'orange');

		});

		$('tr').click(function() {
		    //if (!this.rowIndex) return; // skip first row
		    var ficha = this.cells[1].innerHTML;

		    if (ficha === '') {
		    	console.log('nada');
		    }else{

		    	$.ajax({
		    		type: 'post',
		    		url: "<?php echo base_url('index.php/Mapa/Datos')?>",
		    		data: {nrofi: ficha},
		    		//dataType: "json",
		    		success: function(data,textStatus, jqXHR){
		    			var d = JSON.parse(data);
		    			$('#txtModalFicha').val(d[0].FICHA);
		    			$('#txtModalNombre').val(d[0].PACIENTE);
		    			$('#txtModalPre').val(d[0].PREVIS);
		    			$('#txtModalObs').val(d[0].OBS);
		    		},
		    		error: function(jqXHR, textStatus, errorThrown){
						console.log(jqXHR+textStatus+errorThrown);
					}
		    	});
		    	$('#myModal').modal('show'); 
		    	$('#txtModalNombre').val();
		    }
		});

		 $.datepicker.regional['es'] = {
			 closeText: 'Cerrar',
			 prevText: '< Ant',
			 nextText: 'Sig >',
			 currentText: 'Hoy',
			 monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
			 monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
			 dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
			 dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
			 dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
			 weekHeader: 'Sm',
			 dateFormat: 'yy-mm-dd',
			 firstDay: 1,
			 isRTL: false,
			 showMonthAfterYear: false,
			 yearSuffix: ''
			 };
			 $.datepicker.setDefaults($.datepicker.regional['es']);
		$(function () {
			$("#fecha").datepicker();
		});

		$( function() {
		    $( "#datepicker" ).datepicker();
		} );

		$( function() {
		    $( "#datepicker2" ).datepicker();
		});

		$( function() {
		    $( "#datepicker3" ).datepicker();
		} );

		$( function() {
		    $( "#datepicker4" ).datepicker();
		});

		$('#rdDia').on('click',function(){
			$('#datepicker2').attr('disabled','disabled');
		});

		$('#rdEntre').on('click',function(){
			$('#datepicker2').removeAttr('disabled');
		});

		$('#btnOk').on('click',function(){
			var request;
			var ini = $('#datepicker').val();
			var fin = $('#datepicker2').val();

			if ($('#rdDia').is(':checked')) {
				request = 'dia';
			}

			if ($('#rdEntre').is(':checked')) {
				request = 'entre';
			}

			$.ajax({
				type: 'post',
				url: "<?php echo base_url('index.php/Censo/Info')?>",
				data: {desde: ini, hasta: fin,request: request},

			}).done(function (data) {
				var parse = JSON.parse(data)
				Table.clear().draw();
				Table.rows.add(parse).draw();
			});
		});

		var Table = $('#grid').DataTable({
				    data: [],
				    dom: 'Bfrtip',
			        buttons: [
			            'excelHtml5'
			        ],

				    columns: [
				        {data:"CAMA"},
				        {data:"RUT_NUM"},
				        {data:"FICHA"},
				        {data:"PACIENTE"},
				        {data:"FECHAINI"},
				        {data:"HORA"},
				        {data:"PREVISION"},
				    ],
				    rowCallback: function (row, data) {},      
		});

		//EGRESOS

		$('#rdDia2').on('click',function(){
			$('#datepicker4').attr('disabled','disabled');
		});

		$('#rdEntre2').on('click',function(){
			$('#datepicker4').removeAttr('disabled');
		});

		$('#btnOk2').on('click',function(){
			var request;
			var ini = $('#datepicker3').val();
			var fin = $('#datepicker4').val();

			if ($('#rdDia2').is(':checked')) {
				request = 'diaEgre';
			}

			if ($('#rdEntre2').is(':checked')) {
				request = 'allEgre';
			}


			$.ajax({
				type: 'post',
				url: "<?php echo base_url('index.php/Censo/Info')?>",
				data: {desde: ini, hasta: fin,request: request},

			}).done(function (data) {
				console.log(data);
				var parse = JSON.parse(data);
				Table2.clear().draw();
				Table2.rows.add(parse).draw();
			});
		});

		var Table2 = $('#grid2').DataTable({
				    data: [],
				    dom: 'Bfrtip',
			        buttons: [
			            'excelHtml5'
			        ],
				    columns: [
				    	{data:"CAMA"},
				        {data:"RUT_NUM"},
				        {data:"NRO_FI"},
				        {data:"PACIENTE"},
				        {data:"FECHA_INI"},
				        {data:"FECHA"},
				        {data:"HORA"},
				        {data:"ESTADA"},
				        {data:"NIVEL"},
				        
				    ],
				    rowCallback: function (row, data) {},      
		});

});
	</script>

	<style type="text/css">
		body{
			margin-top: 60px;
		}

		tr{
			height: 30px;
		}

		td{
			width: 150px;
			text-align: center;
			-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;
		}
	</style>
</head>
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Gestión Camas</a>
        </div>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

