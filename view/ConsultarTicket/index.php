<?php
	require_once ("../../config/conexion.php");
	if (isset($_SESSION["user_id"])){
?>
<!DOCTYPE html>
<html>
	<?php require_once('../MainHead/head.php');?>
	<title>HelpDesk</>::Consultar Ticket</title>
</head>
<body class="with-side-menu">

	<!--.site-header-->
	<?php require_once('../MainHeader/header.php');?>

	<div class="mobile-menu-left-overlay"></div>
	<?php require_once('../MainNav/nav.php');?>

	<div class="page-content">
		<div class="container-fluid">
			Blank page.
		</div>
	</div>

	<script src="../../public/js/lib/jquery/jquery.min.js"></script>
	<script src="../../public/js/lib/tether/tether.min.js"></script>
	<script src="../../public/js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="../../public/js/plugins.js"></script>
	<script src="../../public/js/app.js"></script>
	<script type="text/javascript" src="consultarTicket.js"></script>

</body>
</html>
<?php
	} else {
		header("Location:".Conectar::ruta()."index.php");
	}
?>