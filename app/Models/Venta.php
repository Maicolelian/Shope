<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Venta
 *
 * @property $id
 * @property $cliente
 * @property $direccion
 * @property $telefono
 * @property $fecha
 * @property $producto
 * @property $precio
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Venta extends Model
{
    
    static $rules = [
		'cliente' => 'required',
		'direccion' => 'required',
		'telefono' => 'required',
		'fecha' => 'required',
		'producto' => 'required',
		'precio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cliente','direccion','telefono','fecha','producto','precio'];



}
