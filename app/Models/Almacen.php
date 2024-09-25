<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Almacen
 *
 * @property $id
 * @property $descripcion
 * @property $ubicacion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Almacen extends Model
{
    
    static $rules = [
		'descripcion' => 'required',
		'ubicacion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion','ubicacion'];



}
