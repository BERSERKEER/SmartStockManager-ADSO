<?php

include('../config/connection_db.php');
session_start();

$usuario_id = $_POST['usuario_id'];
$nuevo_estado = ($_POST['estado'] == 'on' || $_POST['estado'] == '1') ? 'activo' : 'inactivo';

$sql = "UPDATE user SET estado='$nuevo_estado' WHERE id='$usuario_id'";
mysqli_query($conexion, $sql);

header("Location:../views/admin_home_pages.php");
exit();
