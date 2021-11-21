<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleves', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->text('adresse')->nullable();
            $table->string('photo')->nullable();
            $table->date('naissance');
            $table->timestamps();
            /*$table->unsignedBigInteger('classe_id');
            $table->unsignedBigInteger('responsable_id');*/
            $table->foreignId('classe_id')->references('classes');
            $table->foreignId('responsable_id')->references('responsables');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eleves');
    }
}
