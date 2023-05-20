<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HistorialCompra
 *
 * @property $id
 * @property $precio
 * @property $fecha
 * @property $cantidad
 * @property $talle_id
 * @property $cliente_id
 * @property $producto_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property Producto $producto
 * @property Talle $talle
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class HistorialCompra extends Model
{
    
    static $rules = [
		'precio' => 'required',
		'fecha' => 'required',
		'cantidad' => 'required',
		'talle_id' => 'required',
		'cliente_id' => 'required',
		'producto_id' => 'required',
    ];

    protected $perPage = 10;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['precio','fecha','cantidad','talle_id','cliente_id','producto_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'cliente_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function producto()
    {
        return $this->hasOne('App\Models\Producto', 'id', 'producto_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function talle()
    {
        return $this->hasOne('App\Models\Talle', 'id', 'talle_id');
    }
    

}
