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
						<h3 class="box-title">Creación Curso</h3>

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

@if(isset($course))
<div class="col_md-12">
	<div class="box box-warning">
	            <div class="box-header with-border">
	              <h3 class="box-title">Creación Cursos</h3>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	              <form role="form" action="{{url('/modcurso')}}" method="post" name="form">
								{{ csrf_field() }}
	                <!-- input states -->
	                <div class="form-group has-success">
	                  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Titulo Curso</label>
										<input type="hidden" class="form-control" id="idcourse" name="idcourse" value="{{isset($course) ? $course->id : '' }}">
	                  <input type="text" class="form-control" id="namecourse" name="namecourse" placeholder="Ingresar Titulo" value="{{isset($course) ? $course->namecourse : '' }}">
	                </div>

									<div class="form-group has-success">
										<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Descripción Curso</label>
										<textarea class="form-control" rows="9" id="descriptioncourse" name="descriptioncourse" placeholder="Ingresar Descripción">{{isset($course) ? $course->descriptioncourse : '' }} </textarea>
									</div>

									<div class="form-group has-success">
										<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Status Curso</label>
										<select name="status">
                          <option selected="true" disabled="disabled"> -- Seleccionar una Opción -- </option>
                          <option value="0" <?php if($course->status =="0") echo "selected"; ?>> Desactivado </option>
                          <option value="1" <?php if($course->status =="1") echo "selected"; ?>> Activo </option>
                    </select>
									</div>
	                <button type="submit" class="btn btn-info pull-right">Guardar</button>
	              </form>
	            </div>
	            <!-- /.box-body -->
	          </div>
	  	</div>
@else
<div class="col_md-12">
	<div class="box box-warning">
	            <div class="box-header with-border">
	              <h3 class="box-title">Creación Cursos</h3>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	              <form role="form" action="{{url('/crearcurso')}}" method="post" name="form">
								{{ csrf_field() }}
	                <!-- input states -->
	                <div class="form-group has-success">
	                  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Titulo Curso</label>
	                  <input type="text" class="form-control" id="namecourse" name="namecourse" placeholder="Ingresar Titulo">
	                </div>

									<div class="form-group has-success">
										<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Descripción Curso</label>
										<textarea class="form-control" rows="9" id="descriptioncourse" name="descriptioncourse" placeholder="Ingresar Descripción"> </textarea>
									</div>

									<div class="form-group has-success">
										<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Status Curso</label>
										<select name="status">
                          <option selected="true" disabled="disabled"> -- Seleccionar una Opción -- </option>
                          <option value="0"> Desactivado </option>
                          <option value="1"> Activo </option>
                    </select>
									</div>
	                <button type="submit" class="btn btn-info pull-right">Guardar</button>
	              </form>
	            </div>
	            <!-- /.box-body -->
	          </div>
	  	</div>
@endif
@endsection
