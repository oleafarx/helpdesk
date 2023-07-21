<?php
require_once("../../config/conexion.php");
if (isset($_SESSION["us_id"])) {
?>

	<!DOCTYPE html>
	<html>

	<head lang="es">
		<?php require_once("../Main/head.php") ?>
		<title>HelpDesk::Nuevo Ticket</title>
	</head>

	<body class="with-side-menu">

		<?php require_once("../Main/header.php") ?>

		<div class="mobile-menu-left-overlay"></div>

		<?php require_once("../Main/nav.php") ?>

		<div class="page-content">
			<div class="container-fluid">

				<header class="section-header">
					<div class="tbl">
						<div class="tbl-row">
							<div class="tbl-cell">
								<h3>Nuevo Ticket</h3>
								<ol class="breadcrumb breadcrumb-simple">
									<li><a href="#">Home</a></li>
									<li class="active">Nuevo Ticket</li>
								</ol>
							</div>
						</div>
					</div>
				</header>

				<div class="box-typical box-typical-padding">
					<p>
						Desde esta ventana, podrá crear tickets de HelpDesk.
					</p>

					<h5 class="m-t-lg with-border">Ingresar información.</h5>

					<div class="row">
						<form action="" id="ticketForm">

							<input type="hidden" id="ti_usuario" name="ti_usuario" value="<?php echo $_SESSION["us_id"] ?>">

							<div class="col-lg-6">
								<fieldset class="form-group">
									<label class="form-label semibold" for="exampleInput">Categoría</label>
									<select id="ca_id" name="ca_id" class="form-control">

									</select>
								</fieldset>
							</div>
							<div class="col-lg-6">
								<fieldset class="form-group">
									<label class="form-labe semibold" for="ti_titulo">Título</label>
									<input type="text" class="form-control" id="ti_titulo" name="ti_titulo" placeholder="Ingrese título">
								</fieldset>
							</div>
							<div class="col-lg-12">
								<fieldset class="form-group">
									<label class="form-label semibold" for="ti_descripcion">Descripción</label>
									<div class="summernote-theme-10">
										<textarea class="ticketDescription" id="ti_descripcion" name="ti_descripcion"></textarea>
									</div>
								</fieldset>
							</div>
							<div class="col-lg-12" style="display: flex; justify-content: end;">
								<button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-primary">Guardar</button>
							</div>
						</form>
					</div><!--.row-->
				</div>

			</div>

		</div>

		<?php require_once("../Main/js.php") ?>
		<script text="text/javascript" src="nuevoTicket.js"></script>

	</body>

	</html>

<?php
} else {
	header("Location:" . Conectar::ruta() . "index.php");
}
?>