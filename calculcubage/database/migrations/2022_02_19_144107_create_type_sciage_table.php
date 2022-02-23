<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeSciageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_sciage', function (Blueprint $table) {
            $table->id('id_type_sciage');
            $table->string('nom_type_sciage')->unique();
            $table->text('description_type_sciage')->nullable();
            $table->decimal('epaisseur_type_sciage', 3, 3);
            $table->foreignId('essence_bois_id')->references('id_essence_bois')->on('essences_bois');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_sciage');
    }
}
