<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    // Mostrar todos los proyectos activos
    public function index()
    {
        $proyectos = Proyecto::where('activo', true)
            ->latest()
            ->paginate(10);

        return view('proyectos.index', compact('proyectos'));
    }

    // Mostrar formulario de registro
    public function create()
    {
        return view('proyectos.create');
    }

    // Guardar un nuevo proyecto
    public function store(Request $request)
    {
        $datos = $request->validate([
            'constructora' => 'required|string|max:150',
            'ciudad' => 'required|string|max:100',
            'direccion' => 'required|string|max:255',
            'fecha_entrega_estimada' => 'nullable|date',
            'estado_obra' => 'required|in:En planificación,En construcción,Finalizado,Suspendido',
        ]);

        Proyecto::create($datos);

        return redirect()
            ->route('proyectos.index')
            ->with('success', 'Proyecto registrado correctamente.');
    }

    // Mostrar formulario de edición
    public function edit(Proyecto $proyecto)
    {
        return view('proyectos.edit', compact('proyecto'));
    }

    // Actualizar proyecto
    public function update(Request $request, Proyecto $proyecto)
    {
        $datos = $request->validate([
            'constructora' => 'required|string|max:150',
            'ciudad' => 'required|string|max:100',
            'direccion' => 'required|string|max:255',
            'fecha_entrega_estimada' => 'nullable|date',
            'estado_obra' => 'required|in:En planificación,En construcción,Finalizado,Suspendido',
        ]);

        $proyecto->update($datos);

        return redirect()
            ->route('proyectos.index')
            ->with('success', 'Proyecto actualizado correctamente.');
    }

    // Desactivar proyecto sin eliminarlo de la base de datos
    public function destroy(Proyecto $proyecto)
    {
        $proyecto->update([
            'activo' => false,
        ]);

        return redirect()
            ->route('proyectos.index')
            ->with('success', 'Proyecto desactivado correctamente.');
    }
}
