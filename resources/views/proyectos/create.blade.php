
@extends('layouts.app')

@section('title', 'Nuevo proyecto')

@section('content')

<div class="project-form-page">

    {{-- ENCABEZADO --}}
    <div class="project-form-header">

        <div>
            <a href="{{ route('proyectos.index') }}" class="project-back-link">
                ← Volver a proyectos
            </a>

            <h1>Registrar nuevo proyecto</h1>

            <p>
                Completa la información para agregar un proyecto de vivienda VIS.
            </p>
        </div>

    </div>


    {{-- FORMULARIO --}}
    <div class="project-form-card">

        <div class="project-form-card-header">
            <div class="project-form-icon">+</div>

            <div>
                <h2>Información del proyecto</h2>
                <p>Los campos marcados con * son obligatorios.</p>
            </div>
        </div>


        <form action="{{ route('proyectos.store') }}" method="POST">

            @csrf

            <div class="project-form-grid">

                {{-- CONSTRUCTORA --}}
                <div class="project-input-group">

                    <label for="constructora">
                        Nombre de la constructora *
                    </label>

                    <input
                        type="text"
                        id="constructora"
                        name="constructora"
                        value="{{ old('constructora') }}"
                        placeholder="Ej. Constructora Los Andes"
                        required
                    >

                    @error('constructora')
                        <span class="project-input-error">{{ $message }}</span>
                    @enderror

                </div>


                {{-- CIUDAD --}}
                <div class="project-input-group">

                    <label for="ciudad">
                        Ciudad *
                    </label>

                    <input
                        type="text"
                        id="ciudad"
                        name="ciudad"
                        value="{{ old('ciudad') }}"
                        placeholder="Ej. Montería"
                        required
                    >

                    @error('ciudad')
                        <span class="project-input-error">{{ $message }}</span>
                    @enderror

                </div>


                {{-- DIRECCIÓN --}}
                <div class="project-input-group project-full-width">

                    <label for="direccion">
                        Dirección del proyecto *
                    </label>

                    <input
                        type="text"
                        id="direccion"
                        name="direccion"
                        value="{{ old('direccion') }}"
                        placeholder="Ej. Carrera 10 # 20-30"
                        required
                    >

                    @error('direccion')
                        <span class="project-input-error">{{ $message }}</span>
                    @enderror

                </div>


                {{-- FECHA --}}
                <div class="project-input-group">

                    <label for="fecha_entrega_estimada">
                        Fecha estimada de entrega
                    </label>

                    <input
                        type="date"
                        id="fecha_entrega_estimada"
                        name="fecha_entrega_estimada"
                        value="{{ old('fecha_entrega_estimada') }}"
                    >

                    @error('fecha_entrega_estimada')
                        <span class="project-input-error">{{ $message }}</span>
                    @enderror

                </div>


                {{-- ESTADO --}}
                <div class="project-input-group">

                    <label for="estado_obra">
                        Estado de obra *
                    </label>

                    <select
                        id="estado_obra"
                        name="estado_obra"
                        required
                    >
                        <option value="">Selecciona un estado</option>

                        <option value="En planificación"
                            {{ old('estado_obra') == 'En planificación' ? 'selected' : '' }}>
                            En planificación
                        </option>

                        <option value="En construcción"
                            {{ old('estado_obra') == 'En construcción' ? 'selected' : '' }}>
                            En construcción
                        </option>

                        <option value="Finalizado"
                            {{ old('estado_obra') == 'Finalizado' ? 'selected' : '' }}>
                            Finalizado
                        </option>

                        <option value="Suspendido"
                            {{ old('estado_obra') == 'Suspendido' ? 'selected' : '' }}>
                            Suspendido
                        </option>

                    </select>

                    @error('estado_obra')
                        <span class="project-input-error">{{ $message }}</span>
                    @enderror

                </div>

            </div>


            {{-- BOTONES --}}
            <div class="project-form-actions">

                <a href="{{ route('proyectos.index') }}" class="project-cancel-btn">
                    Cancelar
                </a>

                <button type="submit" class="project-save-btn">
                    Guardar proyecto
                </button>

            </div>

        </form>

    </div>

</div>

@endsection
