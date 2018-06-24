<?php
include_once('Query/EventoRender.php');
$consulta = PrincipalNews();

?>
<!DOCTYPE html>
<html>
<head>
    <?php include "lib/CSS.php"; ?>
</head>
<body class="skin-blue">

<header class="primary up"  style="top: 0px;">

    <!-- Start nav -->
    <nav class="menu">
        <?php include "lib/NAV.PHP" ?>
    </nav>

</header>

<section class="home">
    <div class="container">
        <?php include "lib/HOME.php" ?>
    </div>

</section>

<section class="best-of-the-week">
    <div class="container">
        <?php include "lib/BESTWEEK.php"?>
    </div>

</section>


<!-- JS -->

<?php include "lib/JS.php"; ?>

</body>

</html>
