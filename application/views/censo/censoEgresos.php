<div class="container">
	<div class="row">
    <h4>Egresos</h4>
        <input type="radio" id="rdDia2" name="buscaEg" value="dia"> Día<br>
        <input type="radio" id="rdEntre2" name="buscaEg" value="entre"> Entre fechas<br>
		<div class="form-group">
			Desde: <input type="text" id="datepicker3">
			Hasta: <input type="text" id="datepicker4">
			<button type="button" id="btnOk2" class="btn btn-primary">Buscar</button>
        </div>
	</div>

	<div class="row">
		<table id="grid2" class="table table-striped table-bordered dt-responsive nowrap">
            <thead>
                <tr>
                    <th>Cama</th>
                    <th>Ficha/Rut</th>
                    <th>Nº Ingreso</th>
                    <th>Paciente</th>
                    <th>F.Ingreso</th>
                    <th>F.Egreso</th>
                    <th>Hora</th>
                    <th>Estada</th>
                    <th>N.Cuidado</th>
                </tr>
            </thead>

  

    </table>
	</div>
</div>