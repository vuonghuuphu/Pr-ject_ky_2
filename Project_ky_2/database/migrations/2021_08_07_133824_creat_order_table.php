<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table){
            $table->id();
            $table->String('name',500);
            $table->String('address',500);
            $table->integer('sdt');
            $table->integer('tong');
            $table->datetime('created_at');
            $table->datetime('updated_at');
            $table->integer('user_id');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
