// Seleccionar el contenedor de la barra de navegación
window.addEventListener("scroll", function() {
    var navbar = document.querySelector(".navbar"); // Asegúrate de que sea el selector correcto
    navbar.classList.toggle("sticky", window.scrollY > 0); // Aplica la clase sticky si el scroll es mayor que 0
});
