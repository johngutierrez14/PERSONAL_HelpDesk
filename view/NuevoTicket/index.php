<?php
	require_once ("../../config/conexion.php");
	if (isset($_SESSION["user_id"])){
?>
<!DOCTYPE html>
<html>
	<?php require_once('../MainHead/head.php');?>
	<title>HelpDesk</>::Nuevo Ticket</title>
</head>
<body class="with-side-menu">

	<!--.site-header-->
	<?php require_once('../MainHeader/header.php');?>

	<div class="mobile-menu-left-overlay"></div>
	<?php require_once('../MainNav/nav.php');?>

	<div class="page-content">
		<div class="container-fluid">
			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Nuevo ticket</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Home</a></li>
								<li class="active">Nuevo ticket</li>
							</ol>
						</div>
					</div>
				</div>
			</header>
			<div class="box-typical box-typical-padding">
				<p>Nuevos tickes para generar.</p>
				<form method="post" id="ticket_form">
				<input type="hidden" id="user_id" name="user_id" value="<?php echo $_SESSION["user_id"] ?>">
					<h5 class="m-t-lg with-border">Ingreso de informacion</h5>

					<div class="row">
						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="id_categoria">Categoria</label>
								<select id="id_categoria" name="id_categoria" class="form-control">
								</select>
							</fieldset>
						</div>
						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="titulo_ticket">Titulo</label>
								<input type="text" class="form-control" id="titulo_ticket" name="titulo_ticket" placeholder="Titulo">
							</fieldset>
						</div>
						<div class="col-lg-12">
							<fieldset class="form-group">
								<label class="form-label semibold" for="descripcion_ticket">Descripcion</label>
								<div class="summernote-theme-1">
									<textarea class="summernote" id="descripcion_ticket" name="descripcion_ticket"></textarea>
								</div>
							</fieldset>
						</div>
					</div>
					<button type="submit" name="action" value="add" class="btn btn-rounded btn-inline">Guardar</button>
				</form>
			</div>
		</div>
	</div>

	<script src="../../public/js/lib/jquery/jquery.min.js"></script>
	<script src="../../public/js/lib/tether/tether.min.js"></script>
	<script src="../../public/js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="../../public/js/plugins.js"></script>
	<script src="../../public/js/app.js"></script>
	<script src="../../public/js/lib/summernote/summernote.min.js"></script>
	<script type="text/javascript" src="nuevoTicket.js"></script>
	
</body>
</html>
<?php
	} else {
		header("Location:".Conectar::ruta()."index.php");
	}
?>