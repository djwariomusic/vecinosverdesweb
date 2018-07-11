@extends('adminlte::layouts.app')

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
						<h3 class="box-title">Creación Preguntas 2</h3>

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



	@if(isset($lessons))
	<div class="col_md-12">
		<div class="box box-warning">
		            <div class="box-header with-border">
		              <h3 class="box-title">Creación Preguntas</h3>
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body">
		              <form role="form">
										<div class="container">
											<div class="form-group">
												<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i><b>Busqueda de Temas</b> <font color="orange">(*)</font></label>
												<div class="input-group my-colorpicker2 colorpicker-element">
													<select name="namelesson" style="width:100%;height:45px;">
														<option disabled select value> -- Seleccionar una Opción -- </option>
														@forelse($lessons as $lesson)
														<option value="{{$lesson->idlesson}}"> {{$lesson->titlelesson}} </option>
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
		              </form>
		            </div>
		            <!-- /.box-body -->

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
																							<td><a href="{{url('editartema/'.$lesson->idlesson)}}" style="text-decoration:none"><i class="fa fa-edit"></i></a></td>
																							<td><a href="" style="text-decoration:none" data-toggle="modal" data-target="#MyModal" data-id="{{$lesson->idlesson}}" href="#addIdModal" class="open-AddIdModal"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
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




<div class="col_md-12">
	<div class="box box-warning">
	            <div class="box-header with-border">
	              <h3 class="box-title">Creación Preguntas</h3>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	              <form role="form">
	                <!-- input states -->
									<div class="form-group has-success">
										<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i>Buscar Tema</label>
										<div class="input-group input-group-sm">
											<input type="text" class="form-control">
													<span class="input-group-btn">
														<button type="button" class="btn btn-info btn-flat">Buscar!</button>
													</span>
										</div>
									</div>

									<div class="form-group has-success">
	                  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Titulo Pregunta</label>
	                  <input type="text" class="form-control" id="inputSuccess" placeholder="Ingresar Titulo">
	                </div>

									<div class="form-group has-success">
										<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Descripción Pregunta</label>
										<textarea class="form-control" rows="9" id="inputSuccess" placeholder="Descripción Ingresar Titulo"> </textarea>
									</div>
	                <button type="submit" class="btn btn-info pull-right">Sign in</button>
	              </form>
	            </div>
	            <!-- /.box-body -->
	          </div>
	  	</div>

@endsection
