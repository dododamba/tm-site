<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaObjects extends Migration
{
    /**compos
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mediaobjects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('media');
            $table->integer('objet');

            $table->timestamps();
            $table->softDeletes();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mediaobjects');
    }
}
