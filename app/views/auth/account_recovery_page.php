<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Recuperación de cuenta</title>
	<!-- CSS Styles -->
	<link rel="stylesheet" href="/SmartStockManager-ADSO/public/css/login_style.css">
	<link rel="stylesheet" href="/SmartStockManager-ADSO/public/css/normalize.css">
	<!-- Favicon -->
	<link id="favicon" rel="icon" type="image/png" href="/SmartStockManager-ADSO/public/images/short_lg-dark.png">
	<!-- JS Scripts -->
	<script src="/SmartStockManager-ADSO/public/js/icon-theme.js"></script>
	<!-- Libreries -->
	<!-- SweetAlert2 -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
	<main class="auth-container">
		<div class="logo-container">
			<img src="/SmartStockManager-ADSO/public/images/large_lg-light.png" alt="Logo">
		</div>

		<form class="login-form" action="/SmartStockManager-ADSO/app/controllers/AuthController.php?action=solicitarRecuperacion" method="POST">
			<div class="form-field">
				<input type="email" class="form-input" name="correo" required placeholder=" ">
				<label class="input-label" for="identificador">Correo electrónico</label>
			</div>

			<button class="btn btn-primary" type="submit" name="registro">
				Enviar
			</button>

			<div class="form-link">
				<a href="/SmartStockManager-ADSO/app/views/auth/login.php">Ya tengo cuenta</a>
			</div>
		</form>
	</main>
</body>

</html>