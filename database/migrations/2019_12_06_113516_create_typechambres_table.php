<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypechambresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('typechambres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('chambre_de_luxe');
            $table->string('chambre_de_famille');
            $table->string('chambre_superieur');
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
        Schema::dropIfExists('typechambres');
    }
}
