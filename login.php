<?php
	session_start();
	if(isset($_SESSION['usuario'])){
		if ($_SESSION['usuario']['tipo'] == "Admin") {
			// code...
			header('Location: Main_app/Admin/admin.php');
		}else if ($_SESSION['usuario']['tipo'] == "Usuario") {

				header('Location: Main_app/Usuario/usuario.php');
		}
	}
 ?>
<!DOCTYPE html>
<html>
	<head>
  <?php include ".idea/Raizcss.php"; ?>
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
							<h4>Iniciar Sesión </h4>
							<div class="main">
								<form class="form-horizontal"  id="formLg" >


										<div>
												<label for="email" class="fw"> Usuario </label>

												<div >
														<input type="text" class="form-control" name="usuariolg"  required autofocus >


												</div>
										</div>

										<div >
												<label for="password" class="fw">Contraseña</label>

												<div >
														<input type="password" class="form-control" name="passlg" required  >


												</div>
										</div>

										<div class="form-group">
												<div class="col-md-8 col-md-offset-4">
														<button type="submit" class="botonlg" value="Iniciar Session">
																Acceder
														</button>

														<a >
																Olvidaste tu contraseña?
														</a>
												</div>
										</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

<!-- logeo -->
<script src="js/jquery-3.3.1.min.js"></script>

  <script src="js/main.js"></script>
		<!-- JS -->

	</body>
</html>
