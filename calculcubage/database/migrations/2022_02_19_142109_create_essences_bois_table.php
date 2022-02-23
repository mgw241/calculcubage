<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEssencesBoisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('essences_bois', function (Blueprint $table){
            $table->id('id_essence_bois');
            $table->string('nom_essence_bois')->unique();
            $table->text('description_essence_bois')->nullable();
            $table->date('created_at')->nullable();
            $table->date('updated_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('essences_bois');
    }
}
