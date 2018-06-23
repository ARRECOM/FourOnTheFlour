<!DOCTYPE html>
<html>
<head>

    <?php include ".idea/Raizcss.php"; ?>
    <script src="validar.js"></script>

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
                    <img src="img/ff/fof.png" alt="Magz Logo">
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

                    <li><a href="login">Iniciar Sesión</a></li>

                </ul>

            </div>
    </nav>

    <!-- Start nav -->

</header>
<section class="">
    <div class="container">
        <div class="box-wrapper">
            <div class=" box-border">
                <div class="box-body">
                    <br>
                    <h4>Formulario de Registro</h4>
                    <form action="insert.php" id="form" method="POST" onsubmit="return validar();" >

                        <div class="form-group">
                            <label>Nombre Completos</label>
                            <input id="Nombre" type="text" class="form-control" name="Nombre" >

                        </div>

                        <div class="form-group">
                            <label>Correo Electronico</label>
                            <input id="email" type="email" class="form-control" name="email" >

                        </div>

                        <div class="form-group">
                            <label>Nombre de Usuario</label>
                            <input id="username" type="text" class="form-control" name="username" >

                        </div>

                        <div class="form-group">
                            <label>Edad</label>
                            <input id="Edad" type="text" class="form-control" name="Edad" >

                        </div>

                        <div class="form-group">
                            <label class="fw">Contraseña</label>
                            <input id="password" type="password" class="form-control" name="password" >
                        </div>


                        <div class="form-group text-right">
                            <button class="btn btn-primary btn-block" id="btnguardar" type="submit" >Registrar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- logeo -->
<script src="js/main.js"></script>



</body>
</html>
