<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aves', function (Blueprint $table) {
            $table->id();
            $table->integer("Placa");
            $table->char("Genero",6);
            $table->string("Candado");
            $table->char("Madre",20);
            $table->char("Padre",20);
            $table->date("Fecha_nacimiento");
            $table->string("estado");
            $table->text("Observacion");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aves');
    }
}
