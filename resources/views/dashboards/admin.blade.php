@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    <div class="dashboard-header">
        <div>
            <h2>Resumen general</h2>
            <p>Consulta el estado actual de InmoVIS.</p>
        </div>
    </div>

    <div class="stats-grid">

        <div class="stat-card">
            <div class="stat-icon">🏗️</div>
            <div>
                <span>Proyectos</span>
                <strong>0</strong>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon">🏠</div>
            <div>
                <span>Inmuebles</span>
                <strong>0</strong>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon">👥</div>
            <div>
                <span>Clientes</span>
                <strong>0</strong>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon">💰</div>
            <div>
                <span>Ventas</span>
                <strong>0</strong>
            </div>
        </div>

    </div>

    <div class="dashboard-grid">

        <div class="dashboard-card">
            <h3>Últimas ventas</h3>

            <div class="empty-state">
                <span>💰</span>
                <p>No hay ventas registradas.</p>
            </div>
        </div>

        <div class="dashboard-card">
            <h3>Disponibilidad de inmuebles</h3>

            <div class="availability">

                <div>
                    <span class="availability-dot available"></span>
                    Disponibles
                    <strong>0</strong>
                </div>

                <div>
                    <span class="availability-dot sold"></span>
                    Vendidos
                    <strong>0</strong>
                </div>

            </div>
        </div>

    </div>

@endsection