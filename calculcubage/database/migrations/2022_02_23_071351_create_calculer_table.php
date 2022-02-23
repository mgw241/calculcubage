<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalculerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calcul', function (Blueprint $table) {
            $table->id('id_calcul');
            $table->foreignId('type_sciage_id');
            $table->decimal('longueur', 3, 3);
            $table->decimal('largeur', 3, 3);
            $table->integer('quantite');
            $table->decimal('volume', 3, 3);
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
        Schema::dropIfExists('calcul');
    }
}
