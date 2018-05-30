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
		<link rel="stylesheet" href="scripts/bootstrap/bootstrap.min.css">
		<!-- IonIcons -->
		<link rel="stylesheet" href="scripts/ionicons/css/ionicons.min.css">
		<!-- Toast -->
		<link rel="stylesheet" href="scripts/toast/jquery.toast.min.css">
		<!-- OwlCarousel -->
		<link rel="stylesheet" href="scripts/owlcarousel/dist/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="scripts/owlcarousel/dist/assets/owl.theme.default.min.css">
		<!-- Magnific Popup -->
		<link rel="stylesheet" href="scripts/magnific-popup/dist/magnific-popup.css">
		<link rel="stylesheet" href="scripts/sweetalert/dist/sweetalert.css">
		<!-- Custom style -->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/skins/all.css">
		<link rel="stylesheet" href="css/demo.css">
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
							<h4>Iniciar Sesión como Administrador</h4>
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
