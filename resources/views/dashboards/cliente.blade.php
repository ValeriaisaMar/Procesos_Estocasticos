@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

    <div class="welcome-card">

        <h2>Bienvenido a InmoVIS</h2>

        <p>
            Consulta proyectos e inmuebles disponibles de Vivienda de Interés Social.
        </p>

        <div class="welcome-user">
            Sesión iniciada como:
            <strong>{{ auth()->user()->name }}</strong>
        </div>

    </div>

@endsection