<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->text('contenu');
            $table->string('objet')->nullable();
            $table->enum('type',['communication','alerte','planification']);
            $table->timestamps();
            /*$table->unsignedBigInteger('eleve_id');
            $table->unsignedBigInteger('user_id');*/
            $table->foreignId('eleve_id')->references('eleves');
            $table->foreignId('user_id')->references('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
