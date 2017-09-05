<div class="container">
	<div class="row">
	<div class="col-md-10 col-md-offset-3">
		<h2>Mapa de camas</h2>
		<form class="form-inline">
		<div class="form-group">
		<label>Sector H</label>
		<table border="1" id="tablaH" class="table-hover">	
			<thead></thead>
		<tbody>
		<?php
		if (empty($sech)) {
			echo "no hay datos";
		}else{
			foreach ($sech as $row) {
				echo "<tr>
						<td>".$row['CAMA']."</td>
						<td style='display:none'>".$row['FICHA']."</td>
						<td style='display:none'>".$row['ESTADO']."</td>
					  </tr>";
			}
		}
		?>
		</tbody>
		</table>
		</div>
		&nbsp;&nbsp;&nbsp;&nbsp;

		<div class="form-group">
		<label>Sector F</label>
		<table border="1" id="tablaF" class="table-hover">		
		
		<?php
		if (empty($secf)) {
			echo "no hay datos";
		}else{
			foreach ($secf as $row) {
				echo "<tr>
						<td>".$row['CAMA']."</td>
						<td style='display:none'>".$row['FICHA']."</td>
						<td style='display:none'>".$row['ESTADO']."</td>
					  </tr>";
			}
		}
		?>
		</table>
		</div>
		&nbsp;&nbsp;&nbsp;&nbsp;

		<div class="form-group">
		<label>Sector E</label>
		<table border="1" id="tablaE" class="table-hover">		
		
		<?php
		if (empty($sece)) {
			echo "no hay datos";
		}else{
			foreach ($sece as $row) {
				echo "<tr>
						<td>".$row['CAMA']."</td>
						<td style='display:none'>".$row['FICHA']."</td>
						<td style='display:none'>".$row['ESTADO']."</td>
					  </tr>";
			}
		}
		?>
		</table>
		</div>
		&nbsp;&nbsp;&nbsp;&nbsp;

		<div class="form-group">

		<table border="1" id="tablaM" class="table-hover">		
		<label>Maternidad</label>
		<?php
		if (empty($secm)) {
			echo "no hay datos";
		}else{
			foreach ($secm as $row) {
				echo "<tr>
						<td>".$row['CAMA']."</td>
						<td style='display:none'>".$row['FICHA']."</td>
						<td style='display:none'>".$row['ESTADO']."</td>
					  </tr>";
			}
		}
		?>
		</table>

		</div>
		&nbsp;&nbsp;&nbsp;&nbsp;

		<div class="form-group">
		<label>U.P.C</label>
		<table border="1" id="tablaUpc" class="table-hover">		
		
		<?php
		if (empty($secupc)) {
			echo "no hay datos";
		}else{
			foreach ($secupc as $row) {
				echo "<tr>
						<td>".$row['CAMA']."</td>
						<td style='display:none'>".$row['FICHA']."</td>
						<td style='display:none'>".$row['ESTADO']."</td>
					  </tr>";
			}
		}
		?>
		</table>
		</div>

		</form>
	</div>
	</div>
</div>
</body>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Información del paciente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <label for="txtModalFicha">Nro Ingreso:</label>
      <input type="text" name="txtModalFicha" id="txtModalFicha" class="form-control" disabled>
      <label for="txtModalNombre">Paciente</label>
       <input type="text" name="txtModalNombre" id="txtModalNombre" class="form-control" disabled>
       <label for="txtModalPre">Previsión</label>
       <input type="text" name="txtModalPre" id="txtModalPre" class="form-control" disabled>
       <label for="txtModalObs">Obs:</label>
       <input type="text" name="txtModalObs" id="txtModalObs" class="form-control" disabled>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<script>setTimeout('document.location.reload()',30000); </script>
</html>