<?php
include_once('lib/Consultas.php');
$consulta = LisAdminitrador();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include"lib/CSS.php" ?>

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">FOUR ON THE FLOOR ADMINISTRADOR</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b
                            class="caret"></b></a>
                <ul class="dropdown-menu message-dropdown">
                    <li class="message-preview">
                        <a href="#">
                            <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                <div class="media-body">
                                    <h5 class="media-heading"><strong>John Smith</strong>
                                    </h5>
                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="message-preview">
                        <a href="#">
                            <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                <div class="media-body">
                                    <h5 class="media-heading"><strong>John Smith</strong>
                                    </h5>
                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="message-preview">
                        <a href="#">
                            <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                <div class="media-body">
                                    <h5 class="media-heading"><strong>John Smith</strong>
                                    </h5>
                                    <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="message-footer">
                        <a href="#">Read All New Messages</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b
                            class="caret"></b></a>
                <ul class="dropdown-menu alert-dropdown">
                    <li>
                        <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                    </li>
                    <li>
                        <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">View All</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b
                            class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <?php include"lib/Navegacion.php" ?>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Registros
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i> <a href="index.html">Inicio</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-edit"></i> Registros
                        </li>

                    </ol>
                </div>
            </div>
            <!-- /.row -->


            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Administradores</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-lg-6">

                            <form class="form-horizontal" role="form" method="POST">


                                <table class="table table-condensed">
                                    <!-- On cells (`td` or `th`) -->
                                    <thead>
                                    <tr>

                                        <td class="success">Nombre</td>
                                        <td class="success">Email</td>
                                        <td class="success">Nombre de usuario</td>
                                        <td class="success">Edad</td>
                                        <td class="success">Tipo de usuario</td>

                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php
                                    while ($persona = $consulta->fetch_assoc())
                                    {
                                    ?>
                                    <tr>
                                        <td><?php echo $persona['nombres']; ?></td>
                                        <td><?php echo $persona['email']; ?></td>
                                        <td><?php echo $persona['usuario']; ?></td>
                                        <td><?php echo $persona['Edad']; ?></td>
                                        <td><?php echo $persona['tipo']; ?></td>

                                    </tr>
                                    <?php
                                     }
                                    ?>

                                    </tbody>

                                </table>

                                <br>
                                <br>
                                <button type="submit" class="btn btn-primary">Editar</button>
                                <button type="reset" class="btn btn-default">Borrar</button>

                            </form>

                        </div>
                    </div>
                </div>


                <br>
                <br>


            </div>

            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Visitantes</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-lg-6">

                            <form class="form-horizontal" role="form" method="POST">


                                <table class="table table-condensed">


                                    <!-- On cells (`td` or `th`) -->
                                    <thead>
                                    <tr>
                                        <td class="success">#</td>
                                        <td class="success">Nombre</td>
                                        <td class="success">NickName</td>
                                        <td class="success">password</td>

                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>

                                    </tr>
                                    <tr>

                                    </tr>

                                    </tbody>

                                </table>

                                <br>
                                <br>
                                <button type="submit" class="btn btn-primary">Editar</button>
                                <button type="reset" class="btn btn-default">Borrar</button>

                            </form>

                        </div>
                    </div>
                </div>


                <br>
                <br>


            </div>

            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Eventos</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-lg-11">

                            <form class="form-horizontal" role="form" method="POST">


                                <table class="table table-condensed">


                                    <!-- On cells (`td` or `th`) -->
                                    <thead>
                                    <tr>
                                        <td class="success">#</td>
                                        <td class="success">Imagen</td>
                                        <td class="success">Hora inicio</td>
                                        <td class="success">Hora cierre</td>
                                        <td class="success">Fecha</td>
                                        <td class="success">Lugar</td>
                                        <td class="success">Teléfono del lugar</td>
                                        <td class="success">Nombre DJ</td>
                                        <td class="success">Biografía DJ</td>
                                        <td class="success">Precio preventa</td>
                                        <td class="success">Precio puerta</td>

                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>6</td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
                                        <td>11</td>


                                    </tr>
                                    <tr>

                                    </tr>

                                    </tbody>

                                </table>

                                <br>
                                <br>
                                <button type="submit" class="btn btn-primary">Editar</button>
                                <button type="reset" class="btn btn-default">Borrar</button>

                            </form>

                        </div>
                    </div>
                </div>


                <br>
                <br>
            </div>

            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Lista de Canciones</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-lg-6">

                            <form class="form-horizontal" role="form" method="POST">


                                <table class="table table-condensed">


                                    <!-- On cells (`td` or `th`) -->
                                    <thead>
                                    <tr>
                                        <td class="success">#</td>
                                        <td class="success">Nombre</td>
                                        <td class="success">URL</td>
                                        <td class="success">Duración</td>

                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>

                                    </tr>
                                    <tr>

                                    </tr>

                                    </tbody>

                                </table>

                                <br>
                                <br>
                                <button type="submit" class="btn btn-primary">Editar</button>
                                <button type="reset" class="btn btn-default">Borrar</button>

                            </form>

                        </div>
                    </div>
                </div>


                <br>
                <br>


            </div>

            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Artistas</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-lg-6">

                            <form class="form-horizontal" role="form" method="POST">


                                <table class="table table-condensed">


                                    <!-- On cells (`td` or `th`) -->
                                    <thead>
                                    <tr>
                                        <td class="success">#</td>
                                        <td class="success">Nombre DJ</td>
                                        <td class="success">Teléfono</td>
                                        <td class="success">Correo electrónico</td>

                                    </tr>
                                    </thead>

                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>

                                    </tr>
                                    <tr>

                                    </tr>

                                    </tbody>

                                </table>

                                <br>
                                <br>
                                <button type="submit" class="btn btn-primary">Editar</button>
                                <button type="reset" class="btn btn-default">Borrar</button>

                            </form>

                        </div>
                    </div>
                </div>


                <br>
                <br>


            </div>

            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="../../js/AdminJS/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../../js/AdminJS/bootstrap.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="../../js/AdminJS/plugins/morris/raphael.min.js"></script>
<script src="../../js/AdminJS/plugins/morris/morris.min.js"></script>
<script src="../../js/AdminJS/plugins/morris/morris-data.js"></script>

</body>

</html>
