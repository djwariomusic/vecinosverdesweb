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
						<h3 class="box-title">Creación Usuarios</h3>

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
	              <h3 class="box-title">Datos Personales</h3>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	              <form role="form">
	                <!-- input states -->
	                <div class="form-group has-success">
	                  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i><b>Cedula de Ciudadanía</b> <font color="orange">(*)</font></label>
	                  <input type="text" name="cc" id="cc" class="form-control" placeholder="Ingresar Cedula de Ciudadania" pattern="\d*" maxlength="11" value="" required title="Ingrese Cedula Ciudadania Ej:80741852">
	                </div>

									<div class="form-group has-success">
										<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i><b>Apellidos</b> <font color="orange">(*)</font></label>
										<input type="text" name="lastname" id="lastname1" class="form-control" placeholder="Ingresar Apellidos" pattern="[A-Z]{3-20}" maxlength="20" onkeyup="javascript:this.value=this.value.toUpperCase();" value="" required title="Ingrese Apellidos">
									</div>

									<div class="form-group has-success">
										<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i><b>Nombres</b> <font color="orange">(*)</font></label>
										<input type="text" name="lastname" id="lastname1" class="form-control" placeholder="Ingresar Apellidos" pattern="[A-Z]{3-20}" maxlength="20" onkeyup="javascript:this.value=this.value.toUpperCase();" value="" required title="Ingrese Apellidos">
									</div>

									<div class="form-group has-success">
										<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i><b>Genero</b> <font color="orange">(*)</font></label>
										<select name="gender" id="gender" class="form-control" required title="Ingrese Genero">
											<option disabled selected value> -- Seleccionar Opción -- </option>
											<option value="1"> Masculino </option>
											<option value="2"> Femenino </option>
											<option value="3"> Otros </option>
										</select>
									</div>

									<div class="form-group has-success">
										<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i><b>Fecha Nacimiento</b><font color="orange">(*)</font></label>
										<input type="date" name="birthday" id="birthday" class="form-control">
									</div>
	            </div>
	            <!-- /.box-body -->
	          </div>
						<div class="box box-warning">
						            <div class="box-header with-border">
						              <h3 class="box-title">Datos Tipo Usuario Residencia</h3>
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
						            </div>
						            <!-- /.box-body -->
						          </div>

											<div class="box box-warning">
																	<div class="box-header with-border">
																		<h3 class="box-title">Datos de Inicio Sesión</h3>
																	</div>
																	<!-- /.box-header -->
																	<div class="box-body">
																			<!-- input states -->
																			<div class="form-group has-success">
																				<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i><b>Email</b> <font color="orange">(*)</font></label>
																				<input type="email" name="email" id="email" class="form-control" placeholder="Ingresar Email" value="" required title="Ingrese Email">
																			</div>

																			<div class="form-group has-success">
																				<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i><b>Contraseña</b> <font color="orange">(*)</font></label>
																				<input type="password" name="pswd" id="pswd" class="form-control" placeholder="Ingresar Password" value="" maxlength="10" required title="Ingrese Contraseña de Acceso">
																			</div>

																			<input type="hidden" name="status" id="status" value="1">
																	</div>
																	<!-- /.box-body -->
																</div>
																<br><br>
												<div class="col-md-12">
												<button type="submit" class="btn btn-info pull-right">Sign in</button>
											</div>
											<br><br>
					</form>
	  	</div>



@endsection
