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
						<h3 class="box-title">Editar Temas de Estudio.</h3>

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

@if(isset($lesson))
<div class="col_md-12">
	<form role="form2" action="{{url('/modtema')}}" method="post" name="form2">
		{{ csrf_field() }}
					<div class="box box-warning" id="creartema">
						            <div class="box-header with-border">
						              <h3 class="box-title">Edición de Temas</h3>
						            </div>
						            <!-- /.box-header -->
						            <div class="box-body">
						                <!-- input states -->
						                <div class="form-group has-success">
															<input type="text" name="idcourse2" id="idcourse2" value="{{$lesson->idcourse}}">
															<input type="text" name="idlesson2" id="idlesson2" value="{{$lesson->idlesson}}">
															<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i><b>Titulo Tema</b> <font color="orange">(*)</font></label>
														  <input type="text" name="titlelesson" id="titlelesson" class="form-control" placeholder="Ingresar Titulo Tema o Lección" pattern="[A-Z]{3-50}" maxlength="50" onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{$lesson->titlelesson}}" title="Ingrese Titulo Tema">
														</div>

														<div class="form-group has-success">
															<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i><b>Objetivo</b> <font color="orange">(*)</font></label>
															<input type="text" name="objetive" id="objetive" class="form-control" placeholder="Ingresar Objetivo del Tema" maxlength="50" onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{$lesson->objetive}}" title="Ingrese Objetivo del Tema">
														</div>

														<div class="form-group has-success">
															<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i><b>Descripción</b> <font color="orange">(*)</font></label>
															<input type="text" name="description" id="description" class="form-control" placeholder="Ingresar Descripción del Tema" maxlength="50" onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{$lesson->description}}" title="Ingrese Descripción del Tema">
														</div>

														<div class="form-group has-success">
															<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i><b>Contenido</b> <font color="orange">(*)</font></label>
															<textarea class="form-control" rows="9" id="content" name="content" placeholder="Ingresar Contenido Tema">{{$lesson->content}}</textarea>
														</div>

														<div class="form-group has-success">
															<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i><b>Imagen Portada</b> <font color="orange">(*)</font></label>
															<input type="file" class="form-control-file" id="image" name="image">
														</div>

														<div class="form-group has-success">
															<label class="control-label" for="inputSuccess"><i class="fa fa-check"></i><b>URL Video</b> <font color="orange">(*)</font></label>
															<input type="text" name="url" id="url" class="form-control" placeholder="Ingresar URL Video del Tema" maxlength="50" onkeyup="javascript:this.value=this.value.toUpperCase();" value="{{$lesson->url}}" title="Ingrese URL Video del Tema">
															<input type="hidden" name="status" id="status" class="form-control" value="1">
														</div>

														<button type="submit" class="btn btn-info">Guardar</button>
						            	</div>
						            <!-- /.box-body -->
						          </div>
</form>
</div>
@endif
@endsection
