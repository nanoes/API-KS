<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTratamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tratamientos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pa_id')->unsigned()->required();
            $table->bigInteger('od_id')->unsigned()->required();
            $table->foreign('pa_id')->references('id')->on('odontologos')->onDelete('cascade');
            $table->foreign('od_id')->references('id')->on('pacientes')->onDelete('cascade');
            $table->integer('cant_placas');
            $table->timestamp('ended_at')->nullable();
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
        Schema::dropIfExists('tratamientos');
    }
}
