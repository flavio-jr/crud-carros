<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    protected $table = 'carros';

    protected $primaryKey = 'car_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'car_modelo',
        'car_fab_id',
        'car_ano',
        'car_quilometragem',
        'car_tipo_direcao',
        'car_preco',
        'car_consumo'
    ];

    public function fabricante()
    {
        return $this->belongsTo('App\Models\Fabricante', 'fab_id', 'car_fab_id');
    }
}
