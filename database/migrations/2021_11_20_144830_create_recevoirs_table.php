<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecevoirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recevoirs', function (Blueprint $table) {
            $table->id();
            /*$table->unsignedBigInteger('message_id');
            $table->unsignedBigInteger('parent_id');*/
            $table->foreignId('message_id')->references('messages');
            $table->foreignId('parent_id')->references('parents');
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
        Schema::dropIfExists('recevoirs');
    }
}
