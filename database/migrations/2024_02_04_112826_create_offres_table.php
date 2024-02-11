<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {     if(!Schema::hasTable('offres')){
        Schema::create('offres', function (Blueprint $table) {
            $table->increments('id');
            $table->string('poste');
            $table->string('fonction');
            $table->integer('experience_min')->default(0);
            $table->integer('experience_max')->default(0);
            $table->string('niveau_etude');
            $table->string('type_contrat');
            $table->integer('dept_id')->unsigned()->nullable();

            // Ensure the data type of 'id' in 'depts' matches 'departement_id'
            $table->foreign('dept_id')->references('id')->on('depts');

            $table->timestamps();
        });
    }
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offres');
    }
};
