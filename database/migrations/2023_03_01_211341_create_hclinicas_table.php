<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHclinicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hclinicas', function (Blueprint $table) {
            $table->id();
            $table->date("Fecha_clinica");
            $table->integer("id_ave");
            $table->text("Observacion");
            $table->string("Enfermedad");
            $table->integer("id_vacuna");
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
        Schema::dropIfExists('hclinicas');
    }
}
