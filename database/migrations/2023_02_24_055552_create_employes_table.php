<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('unit_id')->references('id')->on('units')->cascadeOnDelete();
            $table->foreignId('departement_id')->references('id')->on('departements')->cascadeOnDelete();
            $table->string('name');
            $table->string('nip');
            $table->enum('jk', ['P', 'L']);
            $table->string('photo');
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
        Schema::dropIfExists('employes');
    }
};
