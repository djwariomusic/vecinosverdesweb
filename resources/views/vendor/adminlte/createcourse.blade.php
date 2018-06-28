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

<div class="col_md-12">
	<div class="box box-warning">
	            <div class="box-header with-border">
	              <h3 class="box-title">Creación Cursos</h3>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	              <form role="form">
	                <!-- input states -->
	                <div class="form-group has-success">
	                  <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Titulo Curso</label>
	                  <input type="text" class="form-control" id="inputSuccess" placeholder="Ingresar Titulo">
	                </div>

									<div class="form-group has-success">
										<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Descripción Curso</label>
										<textarea class="form-control" rows="9" id="inputSuccess" placeholder="Descripción Ingresar Titulo"> </textarea>
									</div>
	                <button type="submit" class="btn btn-info pull-right">Sign in</button>
	              </form>
	            </div>
	            <!-- /.box-body -->
	          </div>
	  	</div>
@endsection
