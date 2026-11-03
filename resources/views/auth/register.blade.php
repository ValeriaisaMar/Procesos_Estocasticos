<x-guest-layout>

    <div class="auth-page">

        <div class="auth-container">

            {{-- PANEL IZQUIERDO --}}
            <div class="auth-info">

                <a href="{{ url('/') }}" class="auth-brand">
                    <span class="brand-icon">I</span>
                    <span>InmoVIS</span>
                </a>

                <div class="auth-info-content">
                    <span class="auth-label">ÚNETE A INMOVIS</span>

                    <h1>
                        Encuentra el hogar
                        <span>que mereces.</span>
                    </h1>

                    <p>
                        Crea tu cuenta y comienza a consultar
                        proyectos y viviendas de interés social
                        disponibles.
                    </p>

                    <div class="auth-benefits">

                        <div class="auth-benefit">
                            <div class="benefit-icon">✓</div>
                            <div>
                                <strong>Proyectos VIS</strong>
                                <span>Consulta diferentes proyectos disponibles.</span>
                            </div>
                        </div>

                        <div class="auth-benefit">
                            <div class="benefit-icon">✓</div>
                            <div>
                                <strong>Viviendas disponibles</strong>
                                <span>Encuentra viviendas según tus necesidades.</span>
                            </div>
                        </div>

                        <div class="auth-benefit">
                            <div class="benefit-icon">✓</div>
                            <div>
                                <strong>Información clara</strong>
                                <span>Consulta precios, características y disponibilidad.</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>


            {{-- FORMULARIO --}}
            <div class="auth-form-container">

                <div class="auth-form">

                    <a href="{{ url('/') }}" class="back-link">
                        ← Volver al inicio
                    </a>

                    <div class="auth-heading">
                        <h2>Crear una cuenta</h2>
                        <p>
                            Regístrate para comenzar a utilizar InmoVIS.
                        </p>
                    </div>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        {{-- NOMBRE --}}
                        <div class="form-group">

                            <label for="name">
                                Nombre completo
                            </label>

                            <input
                                id="name"
                                type="text"
                                name="name"
                                value="{{ old('name') }}"
                                required
                                autofocus
                                autocomplete="name"
                                placeholder="Ingresa tu nombre completo"
                            >

                            @error('name')
                                <span class="form-error">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>


                        {{-- CORREO --}}
                        <div class="form-group">

                            <label for="email">
                                Correo electrónico
                            </label>

                            <input
                                id="email"
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autocomplete="username"
                                placeholder="ejemplo@correo.com"
                            >

                            @error('email')
                                <span class="form-error">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>


                        {{-- CONTRASEÑA --}}
                        <div class="form-group">

                            <label for="password">
                                Contraseña
                            </label>

                            <input
                                id="password"
                                type="password"
                                name="password"
                                required
                                autocomplete="new-password"
                                placeholder="Crea una contraseña"
                            >

                            @error('password')
                                <span class="form-error">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>


                        {{-- CONFIRMAR CONTRASEÑA --}}
                        <div class="form-group">

                            <label for="password_confirmation">
                                Confirmar contraseña
                            </label>

                            <input
                                id="password_confirmation"
                                type="password"
                                name="password_confirmation"
                                required
                                autocomplete="new-password"
                                placeholder="Repite tu contraseña"
                            >

                            @error('password_confirmation')
                                <span class="form-error">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>


                        <button type="submit" class="auth-button">
                            Crear mi cuenta
                        </button>

                    </form>


                    <div class="auth-register">
                        ¿Ya tienes una cuenta?
                        <a href="{{ route('login') }}">
                            Inicia sesión
                        </a>
                    </div>

                </div>

            </div>

        </div>

    </div>

</x-guest-layout>