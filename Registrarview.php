
<!DOCTYPE html>
<html>
	<head>
  <?php include ".idea/Raizcss.php"; ?>
	<script src="js/validar_usuario.js">

	</script>
	</head>

	<body class="skin-blue">

		<div class="error">
	<span>Datos de ingreso no válidos, inténtelo de nuevo  por favor</span>
</div>
		<header class="primary up" style="top: 0px;">
		<nav class="menu">
      <div class="container">
        <div class="brand">
          <a href="">
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
              <li><a href="index.php">Home</a></li>
            <li><a href="">Registrar</a></li>
            <li><a href="">Iniciar Sesión</a></li>

          </ul>

        </div>
		</nav>

			<!-- Start nav -->

		</header>
    <section class="login first grey">
      <div class="container">
        <div class="box-wrapper">
          <div class="box box-border">
            <div class="box-body">
              <h4>Formulario de Registro</h4>
              <form   method="POST"  action="insert.php" onsubmit="return validar_usuario();">

                <div class="form-group">
                  <label>Nombre Completos</label>
                  <input id="Nombre" type="text" class="form-control" name="Nombre"  required autofocus>

                </div>

                <div class="form-group">
                  <label>Correo Electronico</label>
                  <input id="email" type="email" class="form-control" name="email"  required>

                </div>

                <div class="form-group">
                  <label>Nombre de Usuario</label>
                  <input id="username" type="text" class="form-control" name="username"  required>

                </div>

                <div class="form-group">
                  <label>Edad</label>
                  <input id="Edad" type="text" class="form-control" name="Edad"  required>

                </div>

                <div class="form-group">
                  <label class="fw">Contraseña</label>
                  <input id="password" type="password" class="form-control" name="password" required>
                </div>

								<div class="form-group">
									<label>Usario</label>
									<input id="tipo" type="text" class="form-control" name="tipo" value="Usuario" required>

								</div>

                <div class="form-group text-right">
                  <button class="btn btn-primary btn-block" id="btnguardar">Registrar</button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
		<script type="text/javascript">

		</script>
<!-- logeo -->
  <script src="js/main.js"></script>
		<!-- JS -->

	</body>
</html>