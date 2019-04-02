<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', 100);
            $table->string('last_name', 100)->nullable();
            $table->string('middle_name', 100)->nullable();
            $table->string('username', 100)->nullable();
            $table->string('email', 100)->unique();
            $table->string('password');
            $table->boolean('statut');
            $table->integer('role');
            $table->string('slug')->nullable();
            $table->string('confirm_token')->nullable();
            $table->string('reset_token')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->datetime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('users');
    }

}
