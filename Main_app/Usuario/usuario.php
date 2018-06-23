
<?php
session_start();
if (isset($_SESSION['usuario'])) {

    if ($_SESSION['usuario']['tipo'] != "Usuario") {
        header('Location: ../Usuario/usuario.php');
    }

}else {
    header('Location: ../../login.php');
}
?>

<!DOCTYPE html>
<html>
<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Magz is a HTML5 & CSS3 magazine template is based on Bootstrap 3.">
    <meta name="author" content="Kodinger">
    <meta name="keyword" content="magz, html5, css3, template, magazine template">
    <!-- Shareable -->
    <meta property="og:title" content="HTML5 & CSS3 magazine template is based on Bootstrap 3" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://github.com/nauvalazhar/Magz" />
    <meta property="og:image" content="https://raw.githubusercontent.com/nauvalazhar/Magz/master/images/preview.png" />
    <title>Four On The Floor</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="../../scripts/ionicons/css/ionicons.min.css">
    <!-- Toast -->
    <link rel="stylesheet" href="../../scripts/toast/jquery.toast.min.css">
    <!-- OwlCarousel -->
    <link rel="stylesheet" href="../../scripts/owlcarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../../scripts/owlcarousel/dist/assets/owl.theme.default.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="../../scripts/magnific-popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="../../scripts/sweetalert/dist/sweetalert.css">
    <!-- Custom style -->
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/skins/all.css">
    <link rel="stylesheet" href="../../css/demo.css">
    <script src="../../js/jquery-3.3.1.min.js"></script>






</head>

<body class="skin-blue">

<div class="error">
    <span>Datos de ingreso no válidos, inténtelo de nuevo  por favor</span>
</div>
<header class="primary up" style="top: 0px;">
    <nav class="menu">
        <div class="container">
            <div class="brand">
                <a href="index">
                    <img src="../../img/ff/fof.png" alt="Magz Logo">
                </a>
            </div>
            <div class="mobile-toggle">
                <a href="#" data-toggle="menu" data-target="#menu-list"><i class="ion-navicon-round"></i></a>
            </div>
            <div class="mobile-toggle">
                <a href="#" data-toggle="sidebar" data-target="#sidebar"><i class="ion-ios-arrow-left"></i></a>
            </div>
            <div id="menu-list">


                <ul class="nav-list">
                    <li><a href="index">Home</a></li>

                    <li><a href="../salir.php">Cerrar sesión</a></li>

                </ul>

            </div>
    </nav>

    <!-- CONTENIDO DE USER -->
    <section class="box-center">
        <div class="container">

            <div class="container-fluid">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Editar mi perfil</h4>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-5 pr-1">
                                        <div class="form-group">
                                            <label>Sexo</label>
                                            <select type="text" class="form-control"  id="inlineFormCustomSelect"">
                                            <option selected>Hombre</option>
                                            <option value="1">Mujer</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3 px-1">
                                        <div class="form-group">
                                            <label>Nombre de usuario</label>
                                            <input type="text" class="form-control" placeholder="Usuario" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-4 pl-1">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Correo electrónico</label>
                                            <input type="email" class="form-control" placeholder="Correo">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <label>Nombre completo</label>
                                            <input type="text" class="form-control" placeholder="Nombres y apellidos" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 pl-1">
                                        <div class="form-group">
                                            <label>Nueva contraseña</label>
                                            <input id="password" type="" class="form-control" name="password">
                                        </div>
                                    </div>
                                </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>Ciudad</label>
                                    <input type="text" class="form-control" placeholder="Ciudad" value="">
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <div class="form-group">
                                    <label>País</label>
                                    <input type="text" class="form-control" placeholder="País" value="">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Géneros de música de mi interes</label>
                                    <textarea rows="4" cols="140" class="form-control" placeholder="Escribe los géneros de música que más te gusten." value=""></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info btn-fill pull-right">Editar</button>
                        <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        </div>
        </div>
    </section>
</body>
</html>