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
						<h3 class="box-title">Crear Temas de Estudio.</h3>

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
@if(isset($courses))
	<div class="box box-warning">
	            <div class="box-header with-border">
								<h3 class="box-title">Busqueda y Asignación de Curso</h3><br>
	            </div>
							<form role="form" action="{{url('/buscarcursotemas')}}" method="post" name="form">
							{{ csrf_field() }}
	            <!-- /.box-header -->
	            <div class="box-body">
									<div class="container">
										<div class="form-group">
			                <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i><b>Busqueda de Cursos</b> <font color="orange">(*)</font></label>
			                <div class="input-group my-colorpicker2 colorpicker-element">
												<select name="namecourse" style="width:100%;height:45px;">
													<option disabled select value> -- Seleccionar una Opción -- </option>
													@forelse($courses as $course)
													<option value="{{$course->id}}"> {{$course->namecourse}} </option>
													@empty
													<option disabled select value> No se encontraron Resultados </option>
													@endforelse
												</select>
					                <div id="btnbuscar" class="input-group-addon bg-primary text-white">
					              			<button type="submit" class="btn btn-info"><i class="fa fa-search" aria-hidden="true"></i></button>
					                </div>
			                </div>
		                <!-- /.input group -->
              			</div>
									</div>


@endif

								@if(isset($lessons))
								@if(isset($lessons2))
								@if($lessons2=="")
																	<div class="col-md-12">
																	<div class="alert alert-warning alert-dismissible">
																	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
																	<h4><i class="icon fa fa-warning"></i> Alerta!</h4>
																	No se encontraron Temas relacionados con el Curso.
																	</div>
																	<br><br><br>
																			<input type="text" name="idcourse" id="idcourse" value="{{$namecourse}}"/>
																			<span class="info-box-text"><button type="button" class="btn btn-block btn-primary btn-lg" onclick="demoDisplay()">Crear Tema</button></span>
																	<br>
																	</div>

								@else
																	<div class="col-md-12">
																	<div class="alert alert-success alert-dismissible">
																	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
																	<h4><i class="fa fa-info-circle"></i> Información!</h4>
																	Se ha encontrado coincidencias de temas en el Curso seleccionado.
																	</div>
																	<br><br>
																	<div class="row">
																	<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i><b>Listado de Temas - Curso:
																		@if(isset($courses2))
																		{{$courses2->namecourse	}}
																		@endif
																	</b></label>
																	<table id="datat" class="datatables">
																		<thead>
																				<tr>
																						<th>Titulo Tema</th>
																						<th>Status</th>
																						<th>Editar</th>
																						<th>Eliminar</th>
																				</tr>
																		</thead>
																		<tbody>
																			@forelse($lessons as $lesson)
																				<tr>
																						<td>{{ $lesson->titlelesson }}</td>
																						<td>{{ $lesson->status }}<input type="hidden" name="idcourse" id="idcourse" value="{{$lesson->id}}"/>	</td>
																						<td>Texto Ejemplo</td>
																						<td>Texto Ejemplo</td>
																				</tr>
																				@empty
																					<tr>
																						<td colspan="5" scope="col">No se encontraron Resultados</td>
																					</tr>
																				@endforelse
																			</tbody>
																		</table>
																	</div>
																			<br><br><br>
																			<span class="info-box-text"><button type="button" class="btn btn-block btn-primary btn-lg" onclick="demoDisplay()">Crear Tema</button></span>
																			<br>
																		</div>
															</form>
														  </div>
									            <!-- /.box-body -->


										@endif
										@endif
										@endif
</div>
</div>

<br>
<div class="col_md-12">
	<form role="form2" action="{{url('/creartema')}}" method="post" name="form2">
		{{ csrf_field() }}
					<div class="box box-warning" id="creartema" style="display:none;">
						            <div class="box-header with-border">
						              <h3 class="box-title">Creación de Temas</h3>
						            </div>
						            <!-- /.box-header -->
						            <div class="box-body">
						                <!-- input states -->
						                <div class="form-group has-success">
															<input type="text" name="idcourse2" id="idcourse2">
															<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i><b>Titulo Tema</b> <font color="orange">(*)</font></label>
														  <input type="text" name="titlelesson" id="titlelesson" class="form-control" placeholder="Ingresar Titulo Tema o Lección" pattern="[A-Z]{3-50}" maxlength="50" onkeyup="javascript:this.value=this.value.toUpperCase();" value="" title="Ingrese Titulo Tema">
														</div>

														<div class="form-group has-success">
															<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i><b>Objetivo</b> <font color="orange">(*)</font></label>
															<input type="text" name="objetive" id="objetive" class="form-control" placeholder="Ingresar Objetivo del Tema" maxlength="50" onkeyup="javascript:this.value=this.value.toUpperCase();" value="" title="Ingrese Objetivo del Tema">
														</div>

														<div class="form-group has-success">
															<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i><b>Descripción</b> <font color="orange">(*)</font></label>
															<input type="text" name="description" id="description" class="form-control" placeholder="Ingresar Descripción del Tema" maxlength="50" onkeyup="javascript:this.value=this.value.toUpperCase();" value="" title="Ingrese Descripción del Tema">
														</div>

														<div class="form-group has-success">
															<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i><b>Contenido</b> <font color="orange">(*)</font></label>
															<textarea class="form-control" rows="9" id="content" name="content" placeholder="Ingresar Contenido Tema"></textarea>
														</div>

														<div class="form-group has-success">
															<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i><b>Imagen Portada</b> <font color="orange">(*)</font></label>
															<input type="file" class="form-control-file" id="image" name="image">
														</div>

														<div class="form-group has-success">
															<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i><b>URL Video</b> <font color="orange">(*)</font></label>
															<input type="text" name="url" id="url" class="form-control" placeholder="Ingresar URL Video del Tema" maxlength="50" onkeyup="javascript:this.value=this.value.toUpperCase();" value="" title="Ingrese URL Video del Tema">
															<input type="hidden" name="status" id="status" class="form-control" value="1">
														</div>

														<button type="submit" class="btn btn-info" formaction="/creartema">Guardar</button>
						            	</div>
						            <!-- /.box-body -->
						          </div>
</form>
</div>
@endsection
@section('scripts')

<script>
function demoDisplay() {
		var idcourse = document.getElementById("idcourse").value;
		document.getElementById("idcourse2").value = idcourse;
    document.getElementById("creartema").style.display = "block";
}
</script>

@endsection
