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
				<div class="box box-default">
				  <div class="box-header with-border">
				    <h3 class="box-title"><b>CREACIÓN DE USUARIOS</b></h3>
				  </div>
				  <div class="box-body">
						<form action="{{ url('/guardarusuario') }}" method="post" autocomplete="off">
							{{ csrf_field() }}
							<label for="cedula"><b>Cedula de Ciudadanía</b> <font color="orange">(*)</font></label>
							<input type="text" name="cc" id="cc" class="form-control" placeholder="Ingresar Cedula de Ciudadania" pattern="\d*" maxlength="11" value="" required title="Ingrese Cedula Ciudadania Ej:80741852">

							<label for="lastname"><b>Apellidos</b> <font color="orange">(*)</font></label>
							<input type="text" name="lastname" id="lastname1" class="form-control" placeholder="Ingresar Apellidos" pattern="[A-Z]{3-20}" maxlength="20" onkeyup="javascript:this.value=this.value.toUpperCase();" value="" required title="Ingrese Apellidos">

							<label for="name"><b>Nombres</b> <font color="orange">(*)</font></label>
							<input type="text" name="name" id="name" class="form-control" placeholder="Ingresar Nombres" pattern="[A-Z]{3-20}" maxlength="20" onkeyup="javascript:this.value=this.value.toUpperCase();" value="" title="Ingrese Nombres">

							<label for="gender"><b>Genero</b> <font color="orange">(*)</font></label>
              <select name="gender" id="gender" class="form-control" required title="Ingrese Genero">
								<option disabled selected value> -- Seleccionar Opción -- </option>
								<option value="1"> Masculino </option>
								<option value="2"> Femenino </option>
								<option value="3"> Otros </option>
							</select>

              <label for="birthday"><b>Fecha Nacimiento</b></label>
							<input type="date" name="birthday" id="birthday" class="form-control">

              <label for="role"><b>Tipo Usuario</b> <font color="orange">(*)</font></label>
              <select name="role" id="role" class="form-control" required title="Ingrese Genero">
								<option disabled selected value> -- Seleccionar Opción -- </option>
								<option value="1"> Residencial </option>
								<option value="2"> Comercial </option>
								<option value="3"> Visitante </option>
							</select>

              <label for="namelocal"><b>Nombre Negocio</b> <font color="orange">(*)</font></label>
							<input type="text" name="namelocal" id="namelocal" class="form-control" placeholder="Ingresar Nombre Local" pattern="[A-Z]{3-50}" maxlength="50" onkeyup="javascript:this.value=this.value.toUpperCase();" value="" title="Ingrese Nombre Local">

              <label for="address"><b>Dirección</b> <font color="orange">(*)</font></label>
							<input type="text" name="address" id="address" class="form-control" placeholder="Ingresar Dirección" maxlength="50" onkeyup="javascript:this.value=this.value.toUpperCase();" value="" title="Ingrese Dirección">

              <label for="´phone"><b>Telefono</b> <font color="orange">(*)</font></label>
              <input type="number" name="phone" id="phone" class="form-control" placeholder="Ingresar Telefono" value="" title="Ingrese Telefono">

              <label for="neighborhood"><b>Barrio</b> <font color="orange">(*)</font></label>
              <select name="neighborhood" id="neighborhood" class="form-control" required title="Ingrese Genero">
                <option disabled selected value> -- Seleccionar Opción -- </option>
                <option value="1"> El Chico </option>
                <option value="2"> Juan XXIII </option>
                <option value="3"> La Porciúncula </option>
                <option value="4"> Mariscal Sucre </option>
              </select>

							<input type="hidden" name="status" id="status" value="1">

							<label for="email"><b>Email</b> <font color="orange">(*)</font></label>
							<input type="email" name="email" id="email" class="form-control" placeholder="Ingresar Email" value="" required title="Ingrese Email">

							<label for="password"><b>Contraseña</b> <font color="orange">(*)</font></label>
							<input type="password" name="pswd" id="pswd" class="form-control" placeholder="Ingresar Password" value="" maxlength="10" required title="Ingrese Contraseña de Acceso">
							<br>
							<input type="submit" class="btn btn-success" value="Guardar">
							<br>
						</form>
				  </div>
				  <!-- /.box-body -->
				</div>
	  	</div>
@endsection
