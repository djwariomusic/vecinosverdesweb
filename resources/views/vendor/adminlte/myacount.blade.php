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
						<h3 class="box-title">Mi Cuenta.</h3>

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
								<h3 class="box-title">Mi Cuenta.</h3><br>
	              <h3 class="box-title">Datos Personales</h3>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	              <form role="form" action="{{url('/modmicuenta')}}" method="post" name="form">
									{{ csrf_field() }}
	                <!-- input states -->
	                <div class="form-group has-success">
										<input type="hidden" name="id" id="id" value="{{ Auth::user()->id }}">
	                  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i><b>Cedula de Ciudadanía</b> <font color="orange">(*)</font></label>
	                  <input type="text" name="cc" id="cc" class="form-control" placeholder="Ingresar Cedula de Ciudadania" pattern="\d*" maxlength="11" value="{{ Auth::user()->cc }}" required title="Ingrese Cedula Ciudadania Ej:80741852" disabled>
	                </div>

									<div class="form-group has-success">
										<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i><b>Apellidos</b> <font color="orange">(*)</font></label>
										<input type="text" name="lastname" id="lastname" class="form-control" placeholder="Ingresar Apellidos" pattern="[A-Z]{3-20}" maxlength="20" onkeyup="javascript:this.value=this.value.toUpperCase();"  value="{{ Auth::user()->lastname }}" required title="Ingrese Apellidos" disabled>
									</div>

									<div class="form-group has-success">
										<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i><b>Nombres</b> <font color="orange">(*)</font></label>
										<input type="text" name="name" id="name" class="form-control" placeholder="Ingresar Nombres" pattern="[A-Z]{3-20}" maxlength="20" onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{ Auth::user()->name }}"  required title="Ingrese Nombres" disabled>
									</div>

									<div class="form-group has-success">
										<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i><b>Genero</b> <font color="orange">(*)</font></label>
										<select name="gender" id="gender" class="form-control" required title="Ingrese Genero" disabled>
											<option disabled selected value> -- Seleccionar Opción -- </option>
											<option value="1" <?php if(Auth::user()->gender == "1") echo "selected"; ?>> Masculino </option>
											<option value="2" <?php if(Auth::user()->gender == "2") echo "selected"; ?>> Femenino </option>
											<option value="3" <?php if(Auth::user()->gender == "3") echo "selected"; ?>> Otros </option>
										</select>
									</div>

									<div class="form-group has-success">
										<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i><b>Fecha Nacimiento</b><font color="orange">(*)</font></label>
										<input type="date" name="birthday" id="birthday" class="form-control" value="{{substr(Auth::user()->birthday, 0, 10)}}" disabled>
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
															<select name="role" id="role" class="form-control" required title="Ingrese Rol Usuario" disabled>
																<option disabled selected value> -- Seleccionar Opción -- </option>
																<option value="1" <?php if(Auth::user()->role == "1") echo "selected"; ?>> Residencial </option>
																<option value="2" <?php if(Auth::user()->role == "2") echo "selected"; ?>> Comercial </option>
																<option value="3" <?php if(Auth::user()->role == "3") echo "selected"; ?>> Reciclador </option>
																<option value="4" <?php if(Auth::user()->role == "4") echo "selected"; ?>> Visitante </option>
															</select>

						                </div>

														<div class="form-group has-success">
															<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i><b>Nombre Negocio</b> <font color="orange">(*)</font></label>
															<input type="text" name="localname" id="localname" class="form-control" placeholder="Ingresar Nombre Local" pattern="[A-Z]{3-50}" maxlength="50" onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{ Auth::user()->localname }}"  title="Ingrese Nombre Local" disabled>
														</div>

														<div class="form-group has-success">
															<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i><b>Dirección</b> <font color="orange">(*)</font></label>
															<input type="text" name="address" id="address" class="form-control" placeholder="Ingresar Dirección" maxlength="50" onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{ Auth::user()->address }}"  title="Ingrese Dirección" disabled>
														</div>

														<div class="form-group has-success">
															<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i><b>Telefono</b> <font color="orange">(*)</font></label>
															<input type="number" name="phone" id="phone" class="form-control" placeholder="Ingresar Telefono" value="{{ Auth::user()->phone }}"  title="Ingrese Telefono" disabled>
														</div>

														<div class="form-group has-success">
															<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i><b>Barrio</b> <font color="orange">(*)</font></label>
															<select name="neighborhood" id="neighborhood" class="form-control" required title="Ingrese Barrio Residencia" disabled>
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
																				<input type="email" name="email" id="email" class="form-control" placeholder="Ingresar Email" value="{{ Auth::user()->email }}" required title="Ingrese Email" disabled>
																			</div>

																			<div class="form-group has-success">
																				<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i><b>Contraseña</b> <font color="orange">(*)</font></label>
																				<input type="password" name="password" id="password" class="form-control" placeholder="Ingresar Password" value="{{ Auth::user()->password}} " maxlength="10" required title="Ingrese Contraseña de Acceso" disabled>
																			</div>

																			<input type="hidden" name="status" id="status" value="1">
																	</div>
																	<!-- /.box-body -->
																</div>
																<br><br>
												<div class="col-md-12">
												<span>
												<button type="button" class="btn btn-success" onclick="disableForm()">Editar</button>
												</span>
												&nbsp;&nbsp;&nbsp;&nbsp;
												<span>
												<button type="submit" class="btn btn-info">Guardar</button>
												</span>
											</div>
											<br><br>
					</form>
	  	</div>



@endsection
@section('scripts')
<script>
function disableForm() {
		document.getElementById("cc").disabled = false;
		document.getElementById("lastname").disabled = false;
		document.getElementById("name").disabled = false;
		document.getElementById("gender").disabled = false;
		document.getElementById("birthday").disabled = false;
		document.getElementById("role").disabled = false;
		document.getElementById("localname").disabled = false;
		document.getElementById("address").disabled = false;
		document.getElementById("phone").disabled = false;
		document.getElementById("neighborhood").disabled = false;
    document.getElementById("email").disabled = false;
		document.getElementById("password").disabled = false;
		console.log("Mario");
}

</script>
@endsection
