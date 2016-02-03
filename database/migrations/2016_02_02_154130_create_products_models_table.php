<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsModelsTable extends Migration
{

    public function up()
    {
        Schema::create('products', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');

            $table->string('name', 80);
            $table->text('description');
            $table->decimal('price');
            $table->timestamps();

        });
    }


    public function down()
    {
        Schema::drop('products');
    }
}
