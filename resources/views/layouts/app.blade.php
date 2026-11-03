<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>InmoVIS</title>


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="inmovis-layout">

        <!-- MENÚ LATERAL -->
        <aside class="sidebar">

            <div class="logo">
                <div class="logo-icon">I</div>

                <div>
                    <h2>InmoVIS</h2>
                    <span>Gestión de vivienda VIS</span>
                </div>
            </div>

            <nav class="menu">

                <a href="{{ route('dashboard') }}" class="menu-item">
                    <span>⌂</span>
                    <span>Inicio</span>
                </a>

                @if(auth()->user()->role === 'admin')
                    <a href="#" class="menu-item">
                        <span>🏗</span>
                        <span>Proyectos</span>
                    </a>

                    <a href="#" class="menu-item">
                        <span>🏠</span>
                        <span>Inmuebles</span>
                    </a>

                    <a href="#" class="menu-item">
                        <span>👥</span>
                        <span>Clientes</span>
                    </a>

                    <a href="#" class="menu-item">
                        <span>👤</span>
                        <span>Usuarios</span>
                    </a>

                    <a href="#" class="menu-item">
                        <span>💰</span>
                        <span>Ventas</span>
                    </a>

                    <a href="#" class="menu-item">
                        <span>📊</span>
                        <span>Reportes</span>
                    </a>
                @endif

                @if(auth()->user()->role === 'asesor')

                    <a href="#" class="menu-item">
                        <span>🏠</span>
                        <span>Inmuebles</span>
                    </a>

                    <a href="#" class="menu-item">
                        <span>👥</span>
                        <span>Clientes</span>
                    </a>

                    <a href="#" class="menu-item">
                        <span>💰</span>
                        <span>Ventas</span>
                    </a>

                @endif

                @if(auth()->user()->role === 'cliente')

                    <a href="#" class="menu-item">
                        <span>🏗</span>
                        <span>Proyectos</span>
                    </a>

                    <a href="#" class="menu-item">
                        <span>🏠</span>
                        <span>Inmuebles</span>
                    </a>

                @endif

            </nav>

            <!-- USUARIO -->
            <div class="sidebar-user">

                <div class="user-avatar">
                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                </div>

                <div class="user-info">
                    <strong>{{ auth()->user()->name }}</strong>

                    <span>
                        {{ ucfirst(auth()->user()->role) }}
                    </span>
                </div>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="logout-button">
                        ↪
                    </button>
                </form>

            </div>

        </aside>


        <!-- CONTENIDO PRINCIPAL -->
        <main class="main-content">

            <header class="topbar">

                <div>
                    <h1>@yield('title', 'Inicio')</h1>
                    <p>Panel de gestión InmoVIS</p>
                </div>

                <div class="topbar-user">
                    {{ auth()->user()->name }}
                </div>

            </header>


            <section class="content">

                @yield('content')

            </section>

        </main>

    </div>

</body>
</html>