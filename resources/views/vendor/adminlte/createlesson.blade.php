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

	<div class="box box-warning">
	            <div class="box-header with-border">
								<h3 class="box-title">Busqueda y Asignación de Curso</h3><br>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	              <form role="form">
	                <!-- input states -->
									<div class="container">
										<div class="form-group">
			                <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i><b>Busqueda de Cursos</b> <font color="orange">(*)</font></label>
			                <div class="input-group my-colorpicker2 colorpicker-element">
			                  <input type="text" style="height: 44px;" class="form-control">
					                <div id="btnbuscar" class="input-group-addon bg-primary text-white">
					              			<button type="submit" class="btn btn-info"><i class="fa fa-search" aria-hidden="true"></i></button>
					                </div>
			                </div>
		                <!-- /.input group -->
              			</div>
									</div>

									<div class="col-md-12">
									<div class="alert alert-warning alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
									<h4><i class="icon fa fa-warning"></i> Alert!</h4>
									Warning alert preview. This alert is dismissable.
									</div>
									</div>

									<div class="col-md-12">
									<div class="alert alert-success alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
									<h4><i class="fa fa-info-circle"></i> Alert!</h4>
									Warning alert preview. This alert is dismissable.
									</div>
									<br><br>
									<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i><b>Listado de Temas - Curso:</b></label>
									<table id="datat" class="datatables" style="width:100%">
										<thead>
												<tr>
														<th>Id Curso</th>
														<th>Nombre Curso</th>
														<th>Estatus</th>
														<th>Editar</th>
														<th>Eliminar</th>
												</tr>
										</thead>
										<tbody>
												<tr>
														<td>Texto Ejemplo</td>
														<td>Texto Ejemplo</td>
														<td>Texto Ejemplo</td>
														<td>Texto Ejemplo</td>
														<td>Texto Ejemplo</td>
												</tr>
											</tbody>
										</table>


											<br><br><br>
											<span class="info-box-text"><button type="button" class="btn btn-block btn-primary btn-lg">Crear Tema</button></span>
											<br>
										</div>
						  </div>
	            <!-- /.box-body -->
	          </div>
						<div class="box box-warning">
						            <div class="box-header with-border">
						              <h3 class="box-title">Creación de Temas</h3>
						            </div>
						            <!-- /.box-header -->
						            <div class="box-body">
						                <!-- input states -->
						                <div class="form-group has-success">
						                  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i><b>Tipo Usuario</b> <font color="orange">(*)</font></label>
															<select name="role" id="role" class="form-control" required title="Ingrese Genero">
																<option disabled selected value> -- Seleccionar Opción -- </option>
																<option value="1"> Residencial </option>
																<option value="2"> Comercial </option>
																<option value="3"> Reciclador </option>
																<option value="4"> Visitante </option>
															</select>

						                </div>

														<div class="form-group has-success">
															<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i><b>Nombre Negocio</b> <font color="orange">(*)</font></label>
															<input type="text" name="namelocal" id="namelocal" class="form-control" placeholder="Ingresar Nombre Local" pattern="[A-Z]{3-50}" maxlength="50" onkeyup="javascript:this.value=this.value.toUpperCase();" value="" title="Ingrese Nombre Local">
														</div>

														<div class="form-group has-success">
															<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i><b>Dirección</b> <font color="orange">(*)</font></label>
															<input type="text" name="address" id="address" class="form-control" placeholder="Ingresar Dirección" maxlength="50" onkeyup="javascript:this.value=this.value.toUpperCase();" value="" title="Ingrese Dirección">
														</div>

														<div class="form-group has-success">
															<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i><b>Telefono</b> <font color="orange">(*)</font></label>
															<input type="number" name="phone" id="phone" class="form-control" placeholder="Ingresar Telefono" value="" title="Ingrese Telefono">
														</div>

														<div class="form-group has-success">
															<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i><b>Barrio</b> <font color="orange">(*)</font></label>
															<select name="neighborhood" id="neighborhood" class="form-control" required title="Ingrese Genero">
								                <option disabled selected value> -- Seleccionar Opción -- </option>
								                <option value="1"> El Chico </option>
								                <option value="2"> Juan XXIII </option>
								                <option value="3"> La Porciúncula </option>
								                <option value="4"> Mariscal Sucre </option>
								              </select>
														</div>
														<button type="submit" class="btn btn-info pull-right">Sign in</button>
						            </div>
						            <!-- /.box-body -->
						          </div>
					</form>
	  	</div>



@endsection
