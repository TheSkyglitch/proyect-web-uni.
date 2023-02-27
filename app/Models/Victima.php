<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Victima
 *
 * @property $id
 * @property $nombre
 * @property $apellidos
 * @property $telefono
 * @property $correo
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Victima extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellidos' => 'required',
		'telefono' => 'required',
		'correo' => 'required',
		'descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellidos','telefono','correo','descripcion'];



}
