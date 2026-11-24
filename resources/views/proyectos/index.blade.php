
@extends('layouts.app')

@section('title', 'Gestión de proyectos')

@section('content')

<div class="projects-page">

    {{-- ENCABEZADO --}}
    <div class="projects-header">
        <div>
            <h1>Proyectos de vivienda</h1>
            <p>Administra los proyectos de Vivienda de Interés Social.</p>
        </div>

        <a href="{{ route('proyectos.create') }}" class="project-primary-btn">
            + Nuevo proyecto
        </a>
    </div>

    {{-- MENSAJE DE CONFIRMACIÓN --}}
    @if(session('success'))
        <div class="project-alert">
            {{ session('success') }}
        </div>
    @endif

    {{-- TABLA --}}
    <div class="project-card">

        <div class="project-card-header">
            <div>
                <h2>Listado de proyectos</h2>
                <p>Proyectos registrados en la plataforma.</p>
            </div>
        </div>

        <div class="project-table-container">

            <table class="project-table">

                <thead>
                    <tr>
                        <th>Constructora</th>
                        <th>Ciudad</th>
                        <th>Dirección</th>
                        <th>Fecha de entrega</th>
                        <th>Estado de obra</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($proyectos as $proyecto)

                        <tr>
                            <td>
                                <strong>{{ $proyecto->constructora }}</strong>
                            </td>

                            <td>{{ $proyecto->ciudad }}</td>

                            <td>{{ $proyecto->direccion }}</td>

                            <td>
                                {{ $proyecto->fecha_entrega_estimada
                                    ? $proyecto->fecha_entrega_estimada->format('d/m/Y')
                                    : 'No definida' }}
                            </td>

                            <td>
                                <span class="project-status">
                                    {{ $proyecto->estado_obra }}
                                </span>
                            </td>

                            <td>
                                <div class="project-actions">

                                    <a
                                        href="{{ route('proyectos.edit', $proyecto) }}"
                                        class="project-edit-btn">
                                        Editar
                                    </a>

                                    <form
                                        action="{{ route('proyectos.destroy', $proyecto) }}"
                                        method="POST"
                                        onsubmit="return confirm('¿Estás seguro de desactivar este proyecto?')">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="project-delete-btn">
                                            Desactivar
                                        </button>

                                    </form>

                                </div>
                            </td>
                        </tr>

                    @empty

                        <tr>
                            <td colspan="6" class="project-empty">
                                <h3>No hay proyectos registrados</h3>
                                <p>Comienza registrando tu primer proyecto de vivienda.</p>

                                <a href="{{ route('proyectos.create') }}"
                                   class="project-primary-btn">
                                    Registrar primer proyecto
                                </a>
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

        {{-- PAGINACIÓN --}}
        <div class="project-pagination">
            {{ $proyectos->links() }}
        </div>

    </div>

</div>

@endsection
