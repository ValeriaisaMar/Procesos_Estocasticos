<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $usuario = auth()->user();

        return match ($usuario->role) {
            'admin' => view('dashboards.admin'),
            'asesor' => view('dashboards.asesor'),
            'cliente' => view('dashboards.cliente'),
            default => abort(403, 'Rol de usuario no válido.'),
        };
    }
}