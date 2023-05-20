<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $name
 * @property $email
 * @property $password
 * @property $created_at
 * @property $updated_at
 *
 * @property Compra[] $compras
 * @property HistorialCompra[] $historialCompras
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'name' => 'required',
		'email' => 'required',
    ];

    protected $perPage = 10;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','email'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function compras()
    {
        return $this->hasMany('App\Models\Compra', 'cliente_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function historialCompras()
    {
        return $this->hasMany('App\Models\HistorialCompra', 'cliente_id', 'id');
    }
    

}
