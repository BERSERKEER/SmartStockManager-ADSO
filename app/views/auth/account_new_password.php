<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Creación de contraseña</title>
	<!-- Routes CSS Styles -->
	<link rel="stylesheet" href="/SmartStockManager-ADSO/public/css/login_style.css?v=1.0">
	<link id="favicon" rel="icon" type="image/png" href="/SmartStockManager-ADSO/public/images/short_lg-dark.png">
	<!--Routes JS-->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="../../../public/js/new_password_account.js" defer></script>
	<script src="/SmartStockManager-ADSO/public/js/icon-theme.js"></script>
</head>

<body>
	<main class="auth-container">
		<!-- Content lg -->
		<div class="logo-container">
			<img src="/SmartStockManager-ADSO/public/images/large_lg-light.png" alt="Logo" />
		</div>

		<!-- Form validate password -->
		<form action="procesar_registro.php" name="usuariosdb" method="POST" class="login-form">
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