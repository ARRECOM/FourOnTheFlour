<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include ".idea/Raizcss.php"; ?>
    <title>Document</title>
</head>
<body class="skin-blue">

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


<h4>Formulario de Registro de solicitud</h4>
<form action="EventoS.php" role="form" method="POST">
    <div class="form-group">
        <label>Nombre de la empresa</label>
        <input class="form-control" type="text"  id="EmpresaN" name="EmpresaN">
    </div>

    <div class="form-group">
        <label>Giro de la empresa</label>
        <input class="form-control" type="text"  id="Giro" name="Giro">
    </div>

    <div class="form-group">
        <label>Capacidad de personas</label>
        <input class="form-control" type="text" id="Capacidad" name="Capacidad">
    </div>

    <div class="form-group">
        <label>Sistema de audio</label>
        <input class="form-control" type="text" id="SysAudio" name="SysAudio">
    </div>

    <div class="form-group">
        <label>Otros eventos realizados por el solicitante</label>
        <textarea class="form-control" rows="3" id="AntecedenteE" name="AntecedenteE"></textarea>
    </div>



    <div class="form-group">
        <label>Fecha tentava del evento</label>
        <input class="form-control" type="date" value="2018-01-01" id="FechaTen" name="FechaTen">
    </div>

    <div class="form-group">
        <label>Teléfono de contacto 1</label>
        <input class="form-control" type="text" class="input-medium bfh-phone"  id="Telefono1" name="Telefono1">

    </div>

    <div class="form-group">
        <label>Teléfono de contacto 2</label>
        <input class="form-control" type="text" class="input-medium bfh-phone"  id="Telefono2" name="Telefono2">

    </div>


    <div class="form-group">
        <label class="mr-sm-2" for="inlineFormCustomSelect">Genero</label>
        <div class="form-group">
            <select class="form-control" id="Genero" name="Genero">
                <option selected>House</option>
                <option value="1">Tech House</option>
                <option value="2">Techno</option>
                <option value="3">Funky</option>
                <option value="4">Retro</option>
            </select>
        </div>


    </div>


    <button type="submit" class="btn btn-lg btn-primary">Guardar</button>
    <button type="reset" class="btn btn-lg btn-success">Limpiar campos</button>
</form>


</body>
</html>