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
						<h3 class="box-title">LIstado de Usuarios</h3>

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
              <h3 class="box-title">Listado de Usuarios.</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
							<table id="datat" class="datatables" style="width:100%">
				        <thead>
				            <tr>
				                <th>Id</th>
				                <th id="columnhidden">Apellidos y Nombres</th>
				                <th>No Identificación</th>
				                <th>Rol Usuario</th>
												<th>Editar</th>
												<th>Eliminar</th>
				            </tr>
				        </thead>
				        <tbody>
				            <tr>
				                <td>Ejemplo Dato</td>
				                <td>Ejemplo Dato</td>
				                <td>Ejemplo Dato</td>
				                <td>Ejemplo Dato</td>
												<td>Ejemplo Dato</td>
												<td>Ejemplo Dato</td>
				            </tr>
									</tbody>
									</table>
						</div>
</div>
</div>

<!-- Modal Bootstrap 1 -->
    <div class="modal fade" id="MyModal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Eliminar Registro</h4>
          </div>

          <div class="modal-body">
            <p align="justify">
              Esta Seguro que desea Eliminar el Curso. Este puede tener temas asociados.<br>

            </p>
          </div>

          <div class="modal-footer">
            <form action="{{url('/eliminarusuario')}}" method="post">
              {{ csrf_field() }}
              <input type="text" name="id" id="id" value=""/>
              <button type="submit" class="btn btn-danger">Eliminar</button>
              <button type="button" id="btnmodalclose" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </form>
          </div>
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
							ajax: '{{route('datatable.users')}}',
							columns: [
									{data: 'id', name: 'id'},
									{data: function (data, type, dataToSet) {
											 return data.lastname + " " + data.name;
									 }},
									{data: 'cc', name: 'cc'},
									{data: 'role', name: 'role'},
									{data: 'id',
					         'render': function(data, type, row, meta){
					            if(type === 'display'){
					                data = '<a style="text-decoration:none" href="/editarusuario/' + data + '"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>';
					            }

					            return data;
					         }
								 },
									{data: 'id',
					         'render': function(data, type, row, meta){
					            if(type === 'display'){
					                data = '<a href="" style="text-decoration:none" data-toggle="modal" data-target="#MyModal" data-id="' + data + '" href="#addIdModal" class="open-AddIdModal"><i class="fa fa-trash" aria-hidden="true"></i></a>';
					            }

					            return data;
					         }
								  }
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
	<script>
	  $(document).on("click", ".open-AddIdModal", function () {
	     var myId = $(this).data('id');
	     $(".modal-footer #id").val( myId );
	    $('#addIdModal').modal('show');
	  });
	</script>

@endsection
