function mensaje(id) {
    swal({
        title: "¡Buen trabajo!",
        text: "¡La contraseña se ha cambiado con éxito!",
        icon: "success",
        button: "Aceptar",
    }).then(() => {
        window.location.href = "../../../app/views/admin/dashboard.php";
    });
}