<ul class="nav navbar-nav side-nav">
    <li>
        <a href="Admin"><i class="fa fa-fw fa-dashboard"></i> Inicio</a>
    </li>
    <li class="">
        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-edit"></i>
            Registrar <i class="fa fa-fw fa-caret-down"></i></a>
        <ul id="demo" class="collapse">
            <li>
                <a href="AltaAdmin">Administrador</a>
            </li>
            <li class="active">
                <a href="{{ url('admin/RegistrarEvento') }}">Evento Proximo</a>
            </li>

            <li class="active">
                <a href="{{ url('admin/RegistrarCanciones') }}">Lista de Canciones</a>
            </li>

            <li class="active">
                <a href="AltaArtista.php">Artistas</a>
            </li>


        </ul>
    </li>
    <li class="active">
        <a href="registros.php"><i class="fa fa-fw fa-table"></i> Registros / Editar</a>
    </li>
    <li>
        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Solicitudes</a>
    </li>
    <li>
        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
    </li>
    <li>
        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
    </li>
    <li>
        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
    </li>
</ul>