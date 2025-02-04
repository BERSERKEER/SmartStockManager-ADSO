<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <!-- Ruta de Estilos -->
    <link rel="stylesheet" href="/SmartStockManager-ADSO/public/css/normalize.css" />
    <link rel="stylesheet" href="/SmartStockManager-ADSO/public/css/landing_style.css" />
    <!--<link rel="stylesheet" href="/SmartStockManager-ADSO/public/images/short_logo.png" />-->
</head>

<body>
    <!--Barra de navegacion-->
    <nav class="navbar">
        <div class="logo" id="Home">
            <img src="./public/images/short_logo.png" alt="Logo">
            <h2>SmartStockManager</h2>
        </div>
        <ul class="nav-links" id="nav-links">
            <li><a href="#About">Acerca</a></li>
            <li><a href="#Services">Servicios</a></li>
            <li><a href="#Product">Productos</a></li>
            <li><a href="#Location">Ubicacion</a></li>
            <li><a href="#Contact">Contacto</a></li>
            <li><a href="./app/views/auth/login.php" class="active">Ingresar</a></li>
        </ul>
        <div class="menu-icon" id="menu-icon">☰</div>
    </nav>

    <!-- Contenedor Principal -->
    <main class="main">
        <header class="header">
            <div class="header-content">
                <h1>Bienvenido a nuestra página web</h1>
                <p>Esta es una página web de ejemplo.</p>
                <a href="#Product" class="button-add-icon">Ver productos
                    <img src="./public/images/icon/icon-arrow-forward.svg" alt="Icono">
                </a>
            </div>
        </header>

        <!-- Sección: Quienes somos -->
        <section class="section about" id="About">
            <h2>Quiénes Somos</h2>
            <p>
                En SSM Repuestos somos una empresa dedicada a ofrecer los mejores productos y servicios para el mantenimiento y reparación de vehículos. Desde hace más de 10 años, nos hemos consolidado como uno de los principales proveedores de repuestos en la región, siempre comprometidos con la calidad y satisfacción del cliente.
            </p>
            <p>
                Contamos con un equipo altamente capacitado y apasionado por la industria automotriz, que está siempre listo para brindar asesoramiento especializado y soluciones a medida para cada cliente.
            </p>
        </section>

        <!-- Servicios: Tipos de servicios -->
        <section class="section services" id="Services">
            <h2>Nuestros Servicios</h2>
            <p>
                En SSM Repuestos, ofrecemos más que solo repuestos. Nos especializamos en brindar asesoría experta para el mantenimiento y reparación de vehículos. Ya sea que busques mejorar el rendimiento de tu automóvil o mantenerlo en óptimas condiciones, nuestros técnicos capacitados están aquí para ayudarte.
            </p>

            <!-- Contenedor de tarjetas -->
            <div class="services-container">
                <div class="service-card">
                    <img src="./public/images/icon/icon_add_shopping.svg" alt="Venta de Repuestos">
                    <h3>Venta de Repuestos</h3>
                    <p>Ofrecemos una amplia gama de repuestos originales y alternativos.</p>
                </div>
                <div class="service-card">
                    <img src="./public/images/icon/icon_connect_without_contact.svg" alt="Asesoría Técnica">
                    <h3>Asesoría Técnica</h3>
                    <p>Nuestros expertos te guían en el mantenimiento y reparación de tu vehículo.</p>
                </div>
                <div class="service-card">
                    <img src="./public/images/icon/icon_engineering_install.svg" alt="Instalación Profesional">
                    <h3>Instalación Profesional</h3>
                    <p>Contamos con técnicos especializados para la instalación de piezas.</p>
                </div>
            </div>
        </section>

        <!-- Productos: Tipos de producto -->
        <section class="section product" id="Product">
            <h2>Nuestros Productos</h2>
            <p>Descubre nuestra variedad de productos de alta calidad para tu vehículo.</p>

            <!-- Contenedor de tarjetas -->
            <div class="product-container">
                <div class="product-card">
                    <img src="./public/images/icon/icon-settings.svg" alt="Filtro de Aceite">
                    <h3>Filtro de Aceite</h3>
                    <p>Protege el motor de tu auto con nuestros filtros de aceite de alta calidad.</p>
                </div>
                <div class="product-card">
                    <img src="./public/images/icon/icon-settings.svg" alt="Pastillas de Freno">
                    <h3>Pastillas de Freno</h3>
                    <p>Pastillas de freno resistentes para una conducción segura y eficiente.</p>
                </div>
                <div class="product-card">
                    <img src="./public/images/icon/icon-settings.svg" alt="Batería de Auto">
                    <h3>Batería de Auto</h3>
                    <p>Baterías duraderas con alto rendimiento para todo tipo de vehículos.</p>
                </div>
                <div class="product-card">
                    <img src="./public/images/icon/icon-settings.svg" alt="Bujías">
                    <h3>Bujías de Encendido</h3>
                    <p>Mejora el rendimiento de tu motor con nuestras bujías premium.</p>
                </div>
                <div class="product-card">
                    <img src="./public/images/icon/icon-settings.svg" alt="Amortiguadores">
                    <h3>Amortiguadores</h3>
                    <p>Amortiguadores de alta calidad para un viaje más estable y seguro.</p>
                </div>
                <div class="product-card">
                    <img src="./public/images/icon/icon-settings.svg" alt="Neumáticos">
                    <h3>Neumáticos</h3>
                    <p>Variedad de neumáticos resistentes y seguros para cualquier terreno.</p>
                </div>
            </div>
        </section>

        <!-- Contacto: Referencia de ubicacion -->
        <section class="section location" id="Location">
            <h2>Nuestra Ubicación</h2>
            <p>Encuéntranos fácilmente en nuestra tienda física, ubicada en una zona céntrica y de fácil acceso.</p>

            <!-- Contenedor del mapa -->
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3168.9476668328547!2d-122.0842496842194!3d37.42199977982552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb24c2f8f8bbf%3A0x4077c6cd342ec1d1!2sGoogleplex!5e0!3m2!1sen!2sus!4v1610000000000!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </section>

        <!-- Contacto: Medio de comuncacion -->
        <section class="section contact" id="Contact">
            <h2>Contáctanos</h2>
            <p>¿Tienes alguna consulta? Escríbenos y te responderemos lo antes posible.</p>

            <!-- Formulario de contacto -->
            <form class="contact-form">
                <label for="name">Nombre</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Mensaje</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                <a href="#" class="submit-btn">Enviar Consulta</a>
            </form>
        </section>

        <!-- Footer -->
        <footer class="footer">
            <div class="footer-container">
                <!-- Información de contacto -->
                <div class="footer-info">
                    <h3>Contacto</h3>
                    <p>📍 Calle 123, Ciudad, País</p>
                    <p>📞 +123 456 789</p>
                    <p>📧 contacto@empresa.com</p>
                </div>

                <!-- Redes Sociales -->
                <div class="footer-social">
                    <h3>Síguenos</h3>
                    <a href="https://www.facebook.com/" target="_blank"><img src="./public/images/icon/icon_facebook.svg" alt="Facebook"></a>
                    <a href="https://www.x.com/" target="_blank"><img src="./public/images/icon/icon_twitterx.svg" alt="Twitter"></a>
                    <a href="https://www.instagram.com/" target="_blank"><img src="./public/images/icon/icon_insta.svg" alt="Instagram"></a>
                </div>

                <!-- Enlaces rápidos -->
                <div class="footer-links">
                    <h3>Enlaces</h3>
                    <a href="#">Sobre Nosotros</a>
                    <a href="#">Política de Privacidad</a>
                    <a href="#">Términos y Condiciones</a>
                </div>
            </div>

            <!-- Derechos reservados -->
            <p class="footer-copy">&copy; 2024 Todos los derechos reservados.</p>
        </footer>
        <!--script resposivo nevigation menu-->
        <script>
            const menuIcon = document.getElementById("menu-icon");
            const navLinks = document.getElementById("nav-links");

            menuIcon.addEventListener("click", () => {
                navLinks.classList.toggle("show");
            });
        </script>
</body>

</html>