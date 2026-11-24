<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = 'proyectos';

    protected $fillable = [
        'constructora',
        'ciudad',
        'direccion',
        'fecha_entrega_estimada',
        'estado_obra',
        'activo',
    ];

    protected function casts(): array
    {
        return [
            'fecha_entrega_estimada' => 'date',
            'activo' => 'boolean',
        ];
    }

    // Un proyecto puede tener muchos inmuebles
    public function inmuebles()
    {
        return $this->hasMany(Inmueble::class);
    }
}