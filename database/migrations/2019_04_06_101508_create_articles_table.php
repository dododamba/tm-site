<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('articles', function(Blueprint $table) {
                $table->increments('id');
                $table->string('titre');
$table->text('contenu');
$table->date('date_creation');
$table->integer('categorie');
$table->boolean('brouillon');
$table->integer('auteur');

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
        Schema::drop('articles');
    }

}
