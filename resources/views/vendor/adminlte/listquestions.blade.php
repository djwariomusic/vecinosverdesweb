@extends('adminlte::layouts.app')
@extends('adminlte::layouts.partials.scripts')


@section('htmlheader_title')
	CREACIÓN DE USUARIOS
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Listado de Preguntas.</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						{{ trans('adminlte_lang::message.logged') }}. Start creating your amazing application!
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

				</div>
		</div>
	</div>

<div class="col_md-12">
	<div class="box">
            <div class="box-header">
              <h3 class="box-title">Listado de Preguntas.</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
							<table id="datat" class="datatables" style="width:100%">
				        <thead>
				            <tr>
				                <th>Id Pregunta</th>
				                <th>Titulo Pregunta</th>
				                <th>Status</th>
				            </tr>
				        </thead>
				        <tbody>
				            <tr>
				                <td>Texto Ejemplo</td>
				                <td>Texto Ejemplo</td>
				                <td>Texto Ejemplo</td>
				            </tr>
									</tbody>
									</table>
						</div>
</div>
</div>


@endsection



@section('scripts')

	<script type="text/javascript">
			$(document).ready(function(){
					$('.datatables').DataTable({
							paging    	: true,
							lengthChange: false,
							processing	: false,
							servedSide	: true,
							responsive	: true,


							ajax: '{{route('datatable.answers')}}',
							headers: "{'X-CSRF-TOKEN': '{{csrf_token()}}'}",
							columns: [
									{data: 'idanswer', name: 'idanswer'},
									{data: 'titleanswer', name: 'titleanswer'},
									{data: 'status', name: 'status'}
							],
							language: {
								processing:     "Procesando..",
								search:         "Buscar:",
								lengthMenu:     "Mostrar _MENU_ registros",
								info:           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
								infoEmpty:      "Mostrando registros del 0 al 0 de un total de 0 registros",
								infoFiltered:   "(filtrado de un total de _MAX_ registros)",
								infoPostFix:    "",
								loadingRecords: "Cargando...",
								zeroRecords:    "No se encontraron resultados",
								emptyTable:     "Ningún dato disponible en esta tabla",
								paginate: {
										first:      "Primero",
										previous:   "Anterior",
										next:       "Siguiente",
										last:       "Último"
							},
							aria: {
									sortAscending:  ": Activar para ordenar la columna de manera ascendente",
									sortDescending: ": Activar para ordenar la columna de manera descendente"
							}
							}
					});
			});
	</script>

@endsection
