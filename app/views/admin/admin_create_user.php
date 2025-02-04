<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../public/css/admin_create_user_style.css">
    <link rel="stylesheet" href="../../../public/css/normalize.css">
    <link rel="icon" href="../../../public/images/short_logo.png">
</head>

<body>
    <div class="container">
        <h2>Registro</h2>
        <form action="../../../config/validate.php" method="POST">
            <div class="input-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" required><br>
            </div>

            <div class="input-group">
                <label for="correo">Correo:</label>
                <input type="email" name="correo" required><br>
            </div>

            <div class="input-group">
                <label for="password">Contraseña:</label>
                <input type="password" name="password" required><br>
            </div>

            <div class="input-group">
                <label>Rol:</label>
                <select name="rol">
                    <option value="1">Administrador</option>
                    <option value="2">Empleado</option>
                </select>
            </div>
            <button name="registrar" type="submit" class="btn">Registrarse</button>
        </form>
    </div>
</body>

</html>