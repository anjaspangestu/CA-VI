<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viewers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_video')->unsigned();
            $table->bigInteger('id_member')->unsigned();
            $table->foreign('id_video')->references('id')->on('videos')
                    ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_member')->references('id')->on('sub_categories')
                    ->onDelete('cascade')->onUpdate('cascade');
            $table->integer('viewers');
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
        Schema::dropIfExists('viewers');
    }
}
