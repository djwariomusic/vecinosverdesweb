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
	<div class="info-box">
            <span class="info-box-icon bg-aqua"><a href=""><i class="fa fa-address-book-o"></i></a></span>
            <div class="info-box-content">
							<div class="col-md-6">
              <span class="info-box-text">Curso Reciclaje Ciudadano</span>
							<span class="info-box-text"># Temas</span>
              <span class="info-box-number">1<small> Tema</small></span>
							</div>
							<div class="col-md-6">
								<br>
								<span class="info-box-text"><button type="button" class="btn btn-block btn-primary btn-lg">Ingresar!</button></span>
							</div>
            </div>
            <!-- /.info-box-content -->
  </div>

	<div class="info-box">
            <span class="info-box-icon bg-aqua"><a href=""><i class="fa fa-address-book"></i></a></span>
            <div class="info-box-content">
							<div class="col-md-6">
              <span class="info-box-text">Curso Reciclaje Comercial</span>
							<span class="info-box-text"># Temas</span>
              <span class="info-box-number">4<small> Temas</small></span>
            </div>
						<div class="col-md-6">
							<br>
							<span class="info-box-text"><button type="button" class="btn btn-block btn-primary btn-lg">Ingresar!</button></span>
						</div>
						</div>
            <!-- /.info-box-content -->
  </div>


	<div class="box box-warning">
	            <div class="box-header with-border">
	              <h3 class="box-title">Listado de Temas</h3>
	            </div>
	            <!-- /.box-header -->
							<div class="callout callout-success">
					    	<h4>Titulo Tema 1</h4>
               	<p>Descripción:<br>
								 lrem pixel
								</p>
								<span><a href="{{url('/tema')}}" class="btn btn-block btn-warning btn-flat">Iniciar</a></span>
					     </div>
							 <div class="callout callout-success">
								 <h4>Titulo Tema 2</h4>
									 <p>Descripción:<br>
									lrem pixel
								 </p>
								 <span><button type="button" class="btn btn-block btn-warning btn-flat">Iniciar</button></span>
								</div>
								<div class="callout callout-success">
 								 <h4>Titulo Tema 3</h4>
 									 <p>Descripción:<br>
 									lrem pixel
 								 </p>
								 <span><button type="button" class="btn btn-block btn-warning btn-flat">Iniciar</button></span>
 								</div>
								<div class="callout callout-success">
 								 <h4>Titulo Tema 4</h4>
 									 <p>Descripción:<br>
 									lrem pixel
 								 </p>
								 <span><button type="button" class="btn btn-block btn-warning btn-flat">Iniciar</button></span>
 								</div>
							 <!-- /.box-body -->
	 </div>
	  	</div>
@endsection
