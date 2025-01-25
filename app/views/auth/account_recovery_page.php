<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Recuperación de cuenta</title>
	<!-- Estilos -->
	<link rel="icon" href="../../../public/images/short_logo.png">
	<link rel="stylesheet" href="/SmartStockManager-ADSO/public/css/login_style.css?v=1.0">
	<!-- Librerías -->
	<link rel="stylesheet" href="../../../public/css/normalize.css">
	<!-- Scripts -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="/SmartStockManager-ADSO/public/js/index.js" defer></script>
</head>

<body>
	<main class="auth-container">
		<!-- Contenedor del logo -->
		<div class="logo-container">
			<img src="../../../public/images/large_logo.png" alt="Logo" />
		</div>

		<!-- Formulario de recuperación -->
		<form class="login-form" action="procesar_registro.php" name="usuariosdb" method="POST">
			<!-- Campo de correo electrónico -->
			<div class="form-field">
				<input
					type="text"
					class="form-input"
					id="identificador"
					name="id_usuario"
					required
					placeholder=" ">
				<label class="input-label" for="identificador">Correo electrónico</label>
			</div>

			<!-- Botón de envío -->
			<button
				class="btn btn-primary"
				type="button"
				name="registro"
				onclick="mensaje()">
				Enviar
			</button>

			<!-- Enlace para redirigir al inicio de sesión -->
			<div class="form-link">
				<a href="./login.php">Ya tengo mi cuenta</a>
			</div>
		</form>
	</main>
</body>

</html>