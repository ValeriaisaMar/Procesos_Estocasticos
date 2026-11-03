@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

    <div class="welcome-card">

        <h2>Bienvenido a InmoVIS</h2>

        <p>
            Panel de gestión para asesores de vivienda VIS.
        </p>

        <div class="welcome-user">
            Sesión iniciada como:
            <strong>{{ auth()->user()->name }}</strong>
        </div>

    </div>

@endsection