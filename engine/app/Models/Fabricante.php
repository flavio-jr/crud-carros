<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fabricante extends Model
{
    protected $table = 'fabricantes';

    protected $primaryKey = 'fab_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fab_nome'
    ];

    public function carros()
    {
        return $this->hasMany('App\Models\Carro', 'car_fab_id', 'fab_id');
    }
}
