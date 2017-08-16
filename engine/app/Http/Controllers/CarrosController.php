<?php

namespace App\Http\Controllers;

use App\Models\Carro;

class CarrosController extends Controller
{
    protected $carro;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Carro $carro)
    {
        $this->carro = $carro;
    }

    public function index()
    {
        return $this->carro->all()->toJson();
    }
}
