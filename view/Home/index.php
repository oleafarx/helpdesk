<?php
	require_once("../../config/conexion.php");
	if(isset($_SESSION["us_id"])) {
?>

<!DOCTYPE html>
<html>
<head lang="es">
	<?php require_once("../Main/head.php") ?>
    <title>HelpDesk::Home</title>
</head>
<body class="with-side-menu">

	<?php require_once("../Main/header.php") ?>

	<div class="mobile-menu-left-overlay"></div>
	
    <?php require_once("../Main/nav.php") ?>

	<div class="page-content">
		<div class="container-fluid">
			Blank page.
		</div><!--.container-fluid-->
	</div><!--.page-content-->

    <?php require_once("../Main/js.php") ?>    
	<script text="text/javascript" src="home.js"></script>

</body>
</html>

<?php 
	} else {
		header("Location:".Conectar::ruta()."index.php");
	}
?>