<?php

use App\Models\Ecole;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEcolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecoles', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('telephone')->nullable();
            $table->text('adresse')->nullable();
            $table->text('description')->nullable();
            $table->string('pays')->nullable();
            $table->string('ville')->nullable();
            $table->string('logo')->nullable();
            $table->timestamps();
        });
        $ecole=new Ecole();
        $ecole->nom="Saint cyprien";
        $ecole->adresse="79, av de l'école Kinshasa/Ngaliema";
        $ecole->pays="RDC";
        $ecole->ville="Kinshasa";
        $ecole->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ecoles');
    }
}
