<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Creación de contraseña</title>
	<!-- Ruta de estilos -->
	<link rel="icon" href="../../../public/images/short_logo.png">
	<link rel="stylesheet" href="/SmartStockManager-ADSO/public/css/login_style.css?v=1.0">
	<!-- Scripts -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="../../../public/js/new_password_account.js" defer></script>
</head>

<body>
	<main class="auth-container">
		<!-- Contenedor del logo -->
		<div class="logo-container">
			<img src="../../../public/images/large_logo.png" alt="Logo" />
		</div>

		<!-- Formulario para creación de contraseña -->
		<form action="procesar_registro.php" name="usuariosdb" method="POST" class="login-form">
			<!-- Campo para nueva contraseña -->
			<div class="form-field">
				<input
					class="form-input"
					type="password"
					id="nueva-contrasena"
					name="nueva_contrasena"
					required
					placeholder=" ">
				<label class="input-label" for="nueva-contrasena">Nueva contraseña</label>
			</div>

			<!-- Campo para confirmar contraseña -->
			<div class="form-field">
				<input
					class="form-input"
					type="password"
					id="confirmar-contrasena"
					name="confirmar_contrasena"
					required
					placeholder=" ">
				<label class="input-label" for="confirmar-contrasena">Confirmar contraseña</label>
			</div>

			<!-- Botón para cambiar contraseña -->
			<button
				class="btn btn-primary"
				type="button"
				name="registro"
				onclick="mensaje()">
				Cambiar
			</button>
		</form>
	</main>
</body>

</html>