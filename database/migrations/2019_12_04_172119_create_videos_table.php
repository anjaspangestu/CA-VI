<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('judul_video', 100);
            $table->string('slug_video');
            $table->bigInteger('id_kategori')->unsigned();
            $table->bigInteger('id_subkategori')->unsigned();
            $table->bigInteger('id_user')->unsigned();
            $table->text('deskripsi');
            $table->foreign('id_kategori')->references('id')->on('categories')
                    ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_subkategori')->references('id')->on('sub_categories')
                    ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_user')->references('id')->on('users')
                    ->onDelete('cascade')->onUpdate('cascade');
            $table->char('video_type',5);
            $table->text('video_path');
            $table->tinyInteger('status_verifikasi');
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
        Schema::dropIfExists('videos');
    }
}
