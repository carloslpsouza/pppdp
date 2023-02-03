<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questoes', function (Blueprint $table) {
            $table->id();
            $table->longText('pergunta');
            $table->timestamps();

            $table->unsignedBigInteger('id_dependencia')->nullable();
            $table->foreign('id_dependencia')->references('id')->on('questoes')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('id_entrada');
            $table->foreign('id_entrada')->references('id')->on('entradas')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('id_questionario');
            $table->foreign('id_questionario')->references('id')->on('questionarios')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questoes');
    }
};
