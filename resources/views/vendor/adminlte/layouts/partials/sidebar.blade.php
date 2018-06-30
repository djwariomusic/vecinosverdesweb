<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p style="overflow: hidden;text-overflow: ellipsis;max-width: 160px;" data-toggle="tooltip" title="{{ Auth::user()->name }}">{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>Dashboard</span></a></li>
            <li><a href="{{url('/micuenta')}}"><i class='fa fa-link'></i> <span>Mi Cuenta</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Gestión Usuarios</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/crearusuario') }}">Crear Usuario</a></li>
                    <li><a href="{{url('/usuarios')}}">Listar Usuarios</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Gestión Cursos</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/crearcurso') }}">Crear Curso</a></li>
                    <li><a href="#">Listar Cursos</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Gestión Eduación</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="">Gestion Temas</a></li>
                    <li><a href="{{url('/crearpregunta') }}">Crear Pregunta</a></li>
                    <li><a href="#">Listar Preguntas</a></li>
                    <li><a href="{{url('/crearrespuesta') }}">Crear Respuestas</a></li>
                    <li><a href="#">Listar Respuesta</a></li>
                </ul>
            </li>
            <li><a href="{{url('/miscursos')}}"><i class='fa fa-link'></i> <span>Formación</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Noticias Información</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="">Horario Empresas de Aseo</a></li>
                    <li><a href="{{url('/crearpregunta') }}">Ubicación Centro Reciclaje</a></li>
                    <li><a href="#">Contactar Reciclador</a></li>
                    <li><a href="{{url('/crearrespuesta') }}">Selección Basuras Reciclaje</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Incentivos Denuncias</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="">Generar Denuncia</a></li>
                    <li><a href="{{url('/crearpregunta') }}">Mis Denuncias</a></li>
                    <li><a href="#">Generar Incentivos</a></li>
                    <li><a href="{{url('/crearrespuesta') }}">Mis Incentivos</a></li>
                </ul>
            </li>
            <li><a href="#"><i class='fa fa-link'></i> <span>Soporte y Ayuda</span></a></li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
