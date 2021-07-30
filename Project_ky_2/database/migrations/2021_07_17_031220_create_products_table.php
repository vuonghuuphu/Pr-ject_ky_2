<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table){
            $table->id();
            $table->String('name',300);
            $table->float('price');
            $table->String('thumbnail',500);
            $table->integer('category_id');
            $table->longText('content');
            $table->datetime('created_at');
            $table->datetime('updated_at');
            $table->integer('luotthich');
            $table->integer('luotmua');
            $table->integer('sale');
            $table->integer('giasale');
            $table->integer('deleted');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
