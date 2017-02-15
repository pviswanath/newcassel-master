<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConRessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conress', function (Blueprint $table) {
            $table->integer('res_id')->unsigned();
            $table->integer('con_id')->unsigned();
        });

        Schema::table('conress', function (Blueprint $table) {
            $table->foreign('res_id')->references('id')->on('residents')->onDelete('cascade');
             $table->foreign('con_id')->references('id')->on('rescontacts')->onDelete('cascade');
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('conress');
    }
}

