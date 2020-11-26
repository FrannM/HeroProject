<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnemiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Enemies', function (Blueprint $table) {
            $table->timestamps();
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('atk');
            $table->integer('def');
            $table->integer('hp');
            $table->integer('luck');
            $table->integer('coins');
            $table->integer('xp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Enemies');
    }
}
