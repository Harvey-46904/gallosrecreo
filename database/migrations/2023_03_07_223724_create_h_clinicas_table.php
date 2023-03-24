<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHClinicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_clinicas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Id_ave');
            $table->foreign("Id_ave")
            ->references("id")
            ->on("aves")
            ->onDelete("cascade")
            ->onUpdate("cascade");
            $table->unsignedBigInteger('Id_evento');
            $table->foreign("Id_evento")
            ->references("id")
            ->on("eventos")
            ->onDelete("cascade")
            ->onUpdate("cascade");
            $table->string("descripcion_hc")->nullable();
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
        Schema::dropIfExists('h_clinicas');
    }
}
