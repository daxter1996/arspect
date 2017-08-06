<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtraInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extra_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->text('biografia')->nullable();
            $table->string('dni')->nullable();
            $table->string('location_name')->nullable();
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('web')->nullable();
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
        Schema::dropIfExists('extra_infos');
    }
}
