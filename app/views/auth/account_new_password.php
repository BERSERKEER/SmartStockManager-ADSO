<?php if (!isset($_GET['correo'])) {
	header("Location: /SmartStockManager-ADSO/app/views/auth/login.php");
	exit();
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Creación de contraseña</title>

	<!-- Routes CSS Styles -->
	<link rel="stylesheet" href="/SmartStockManager-ADSO/public/css/login_style.css?v=1.0">
	<link id="favicon" rel="icon" type="image/png" href="/SmartStockManager-ADSO/public/images/short_lg-dark.png">

	<!-- Routes JS -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="../../../public/js/new_password_account.js" defer></script>
	<script src="/SmartStockManager-ADSO/public/js/icon-theme.js"></script>
</head>

<body>
	<main class="auth-container">
		<!-- Logo -->
		<div class="logo-container">
			<img src="/SmartStockManager-ADSO/public/images/large_lg-light.png" alt="Logo">
		</div>

		<!-- Formulario de validación de contraseña -->
		<form action="/SmartStockManager-ADSO/app/controllers/AuthController.php?action=cambiarContrasena" name="" method="POST" class="login-form">
			<div class="form-field">
				<input class="form-input" type="password" id="nueva-contrasena" name="password" required placeholder=" ">
				<label class="input-label" for="nueva-contrasena">Nueva contraseña</label>
				<input type="hidden" name="correo" value="<?= $_GET['correo']; ?>">
			</div>

			<!-- <div class="form-field">
				<input class="form-input" type="password" id="confirmar-contrasena" name="confirmar_contrasena" required placeholder=" ">
				<label class="input-label" for="confirmar-contrasena">Confirmar contraseña</label>
			</div> -->

			<button type="submit" class="btn btn-primary">Cambiar</button>
		</form>
	</main>
</body>

</html>