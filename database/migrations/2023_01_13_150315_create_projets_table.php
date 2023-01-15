<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('Privacy');
            $table->integer('attachement_id');
            // $table->foreign('attachement_id')->references('id')->on('attachements');
            // $table->foreign('proprietaire_id')->references('id')->on('proprietaires');
            $table->integer('proprietaire_id');
            $table->string('Status');
            // $table->foreign('chef_id')->references('id')->on('chefs');
            $table->integer('chef_id');
            $table->string('Domaine');
            $table->date('DateDemarrage');
            $table->date('DateLivraison');
            $table->string('Description');
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
        Schema::dropIfExists('projets');
    }
}
