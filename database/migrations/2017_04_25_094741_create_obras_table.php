<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('descripccion');
            $table->string('url');
            $table->integer('user_id')->unsigned();
            $table->timestamps();
        });

        Schema::create('obra_tag', function (Blueprint $table) {
            $table->integer('obra_id')->unsigned();
            $table->foreign('obra_id')->references('id')->on('obras')->onDelete('cascade');

            $table->integer('tag_id')->unsigned();
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');

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
        Schema::dropIfExists('obras');
        Schema::dropIfExists('obra_tag');
        Schema::dropIfExists('obra_like');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
