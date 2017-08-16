<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carros', function (Blueprint $table) {
            $table->increments('car_id');
            $table->string('car_modelo', 60);
            $table->integer('car_fab_id')->unsigned();
            $table->date('car_ano');
            $table->float('car_quilometragem', 4, 2);
            $table->enum('car_tipo_motor', array_keys(config('api.tipos_motor')));
            $table->enum('car_tipo_direcao', array_keys(config('api.tipos_direcao')));
            $table->float('car_preco', 6, 2);
            $table->float('car_consumo', 3, 2);
            $table->timestamps();

            $table->foreign('car_fab_id')->references('fab_id')->on('fabricantes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carros');
    }
}
