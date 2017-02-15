<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('apt_floornumber');
            $table->string('apt_number');
            $table->string('apt_comments');
           $table->integer('cntr_id')->unsigned();
        });

      /*  Schema::table('apartments', function (Blueprint $table) {
            $table->foreign('cntr_id')->references('id')->on('centers')->onDelete('cascade');
        });*/

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('apartments');
    }
}
