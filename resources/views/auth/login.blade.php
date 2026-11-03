<x-guest-layout>

    <div class="login-page">

        <div class="login-container">

            {{-- IZQUIERDA --}}
            <div class="login-info">

                <a href="{{ url('/') }}" class="login-brand">
                    <span class="login-brand-icon">I</span>
                    <span>InmoVIS</span>
                </a>

                <div class="login-info-content">

                    <span class="login-label">INMOVIS</span>

                    <h1>
                        Tu próximo hogar
                        <span>comienza aquí.</span>
                    </h1>

                    <p>
                        Accede a la plataforma para consultar proyectos,
                        viviendas disponibles y gestionar tu información.
                    </p>

                </div>

            </div>


            {{-- DERECHA --}}
            <div class="login-form-container">

                <div class="login-form">

                    <a href="{{ url('/') }}" class="login-back">
                        ← Volver al inicio
                    </a>

                    <div class="login-heading">

                        <h2>Bienvenido de nuevo</h2>

                        <p>
                            Inicia sesión en tu cuenta de InmoVIS.
                        </p>

                    </div>


                    @if (session('status'))
                        <div class="login-status">
                            {{ session('status') }}
                        </div>
                    @endif


                    <form method="POST" action="{{ route('login') }}">
                        @csrf


                        {{-- CORREO --}}
                        <div class="login-field">

                            <label for="email">
                                Correo electrónico
                            </label>

                            <input
                                id="email"
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autofocus
                                autocomplete="username"
                                placeholder="correo@ejemplo.com"
                            >

                            @error('email')
                                <span class="login-error">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>


                        {{-- CONTRASEÑA --}}
                        <div class="login-field">

                            <label for="password">
                                Contraseña
                            </label>

                            @if (Route::has('password.request'))
                                <a
                                    class="login-forgot"
                                    href="{{ route('password.request') }}"
                                >
                                    ¿Olvidaste tu contraseña?
                                </a>
                            @endif

                            <input
                                id="password"
                                type="password"
                                name="password"
                                required
                                autocomplete="current-password"
                                placeholder="Ingresa tu contraseña"
                            >

                            @error('password')
                                <span class="login-error">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>


                        {{-- RECORDAR --}}
                        <div class="login-options">

                            <label class="login-remember">

                                <input
                                    type="checkbox"
                                    id="remember"
                                    name="remember"
                                >

                                <span>Recordarme</span>

                            </label>

                        </div>


                        {{-- BOTÓN --}}
                        <button
                            type="submit"
                            class="login-button"
                        >
                            Iniciar sesión
                        </button>

                    </form>


                    <div class="login-register">

                        ¿No tienes una cuenta?

                        <a href="{{ route('register') }}">
                            Regístrate
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</x-guest-layout>