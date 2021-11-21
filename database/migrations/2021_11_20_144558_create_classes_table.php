<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('label');
            $table->integer('promotion');
            $table->string('section')->nullable();
            $table->string('option')->nullable();
            $table->string('cycle');
            $table->string('reference')->nullable();
            $table->timestamps();
            //$table->unsignedBigInteger('ecole_id');
            $table->foreignId('ecole_id')->references('ecoles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes');
    }
}
