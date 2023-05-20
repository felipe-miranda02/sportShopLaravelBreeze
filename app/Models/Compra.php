<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Compra
 *
 * @property $id
 * @property $cliente_id
 * @property $producto_id
 * @property $talle_id
 * @property $cantidad
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property Producto $producto
 * @property Talle $talle
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Compra extends Model
{
    
    static $rules = [
		'cliente_id' => 'required',
		'producto_id' => 'required',
		'talle_id' => 'required',
		'cantidad' => 'required',
    ];

    protected $perPage = 10;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cliente_id','producto_id','talle_id','cantidad'];


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
