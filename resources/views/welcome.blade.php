<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>InmoVIS | Vivienda de Interés Social</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="public-page">

    <!-- NAVBAR -->
    <header class="public-navbar">

        <div class="public-container navbar-content">

            <a href="{{ url('/') }}" class="brand">
                <div class="brand-icon">I</div>

                <div class="brand-text">
                    <strong>InmoVIS</strong>
                    <span>Vivienda de Interés Social</span>
                </div>
            </a>

            <nav class="public-nav">

                <a href="{{ url('/') }}" class="active">
                    Inicio
                </a>

                <a href="#proyectos">
                    Proyectos
                </a>

                <a href="#nosotros">
                    Nosotros
                </a>

                <a href="{{ route('login') }}">
                    Iniciar sesión
                </a>

                <a href="{{ route('register') }}" class="nav-register">
                    Registrarse
                </a>

            </nav>

        </div>

    </header>


    <!-- HERO -->
    <main>

        <section class="hero">

            <div class="public-container hero-content">

                <div class="hero-text">

                    <span class="hero-label">
                        VIVIENDA DE INTERÉS SOCIAL
                    </span>

                    <h1>
                        Encuentra el hogar que
                        <span>mereces.</span>
                    </h1>

                    <p>
                        Descubre proyectos de vivienda de interés social,
                        consulta inmuebles disponibles y encuentra información
                        clara para tomar la mejor decisión.
                    </p>

                    <div class="hero-buttons">

                        <a href="#proyectos" class="btn-primary">
                            Explorar proyectos
                        </a>

                        <a href="{{ route('register') }}" class="btn-secondary">
                            Crear una cuenta
                        </a>

                    </div>

                </div>


                <div class="hero-visual">

                    <div class="house-card">

                        <div class="house-icon">
                            🏠
                        </div>

                        <div>
                            <strong>Tu nuevo hogar</strong>
                            <span>Vivienda VIS</span>
                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- BENEFICIOS -->
        <section class="features">

            <div class="public-container">

                <div class="section-heading">

                    <span>INMOVIS</span>

                    <h2>
                        Todo lo que necesitas en un solo lugar
                    </h2>

                    <p>
                        Una plataforma diseñada para facilitar la consulta
                        y gestión de vivienda de interés social.
                    </p>

                </div>


                <div class="features-grid">

                    <div class="feature-card">

                        <div class="feature-icon">
                            🏠
                        </div>

                        <h3>
                            Encuentra viviendas
                        </h3>

                        <p>
                            Consulta las viviendas disponibles y conoce
                            sus principales características.
                        </p>

                    </div>


                    <div class="feature-card">

                        <div class="feature-icon">
                            🏗️
                        </div>

                        <h3>
                            Conoce los proyectos
                        </h3>

                        <p>
                            Explora proyectos de vivienda VIS y conoce
                            las opciones disponibles.
                        </p>

                    </div>


                    <div class="feature-card">

                        <div class="feature-icon">
                            📋
                        </div>

                        <h3>
                            Información clara
                        </h3>

                        <p>
                            Consulta precios, características y
                            disponibilidad de cada inmueble.
                        </p>

                    </div>

                </div>

            </div>

        </section>


        <!-- PROYECTOS -->
        <section class="projects-section" id="proyectos">

            <div class="public-container">

                <div class="section-heading">

                    <span>PROYECTOS</span>

                    <h2>
                        Encuentra tu próximo hogar
                    </h2>

                    <p>
                        Próximamente podrás consultar nuestros proyectos
                        de vivienda disponibles.
                    </p>

                </div>


                <div class="project-placeholder">

                    <div>
                        🏗️
                    </div>

                    <h3>
                        Proyectos de vivienda VIS
                    </h3>

                    <p>
                        Estamos preparando nuestro catálogo de proyectos.
                    </p>

                </div>

            </div>

        </section>


        <!-- NOSOTROS -->
        <section class="about-section" id="nosotros">

            <div class="public-container about-content">

                <div>

                    <span class="section-label">
                        SOBRE INMOVIS
                    </span>

                    <h2>
                        Una plataforma para facilitar
                        el acceso a la vivienda VIS.
                    </h2>

                </div>

                <p>
                    InmoVIS centraliza la información relacionada con
                    proyectos, inmuebles y procesos de comercialización
                    de vivienda de interés social, facilitando el acceso
                    a la información para clientes y la gestión para
                    asesores y administradores.
                </p>

            </div>

        </section>

    </main>


    <!-- FOOTER -->
    <footer class="public-footer">

        <div class="public-container footer-content">

            <div>
                <strong>InmoVIS</strong>
                <span>Gestión y comercialización de vivienda VIS</span>
            </div>

            <span>
                © {{ date('Y') }} InmoVIS. Todos los derechos reservados.
            </span>

        </div>

    </footer>

</body>

</html>