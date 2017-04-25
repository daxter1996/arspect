<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('location');
            $table->timestamps();

        });

        Schema::create('gallery_user', function (Blueprint $table) {
            $table->integer('gallery_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->foreign('gallery_id')->references('id')->on('galleries')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Schema::dropIfExists('galleries');
        Schema::dropIfExists('gallery_user');
        Schema::dropIfExists('gallery_tag');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
