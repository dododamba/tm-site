<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('logs', function(Blueprint $table) {
                $table->increments('id');
                $table->string('action');
                $table->string('adresseIp');
                $table->string('location');
                $table->string('user');
                $table->string('table');
                $table->string('logger_token');
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
        Schema::drop('logs');
    }

}
