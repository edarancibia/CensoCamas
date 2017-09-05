<div class="container">
	<div class="row">
    <h4>Ingresos</h4>
        <input type="radio" id="rdDia" name="buscaIng" value="dia"> Día<br>
        <input type="radio" id="rdEntre" name="buscaIng" value="entre"> Entre fechas<br>
		<div class="form-group">
			Desde: <input type="text" id="datepicker">
			Hasta: <input type="text" id="datepicker2">
			<button type="button" id="btnOk" class="btn btn-primary">Buscar</button>
        </div>
	</div>

	<div class="row">
		<table id="grid" class="table table-striped table-bordered dt-responsive nowrap">
            <thead>
                <tr>
                    <th>Cama</th>
                    <th>Ficha/Rut</th>
                    <th>Nº Ingreso</th>
                    <th>Paciente</th>
                    <th>F.Ingreso</th>
                    <th>Hora</th>
                    <th>Prevision</th>
                </tr>
            </thead>

  

    </table>
	</div>
</div>