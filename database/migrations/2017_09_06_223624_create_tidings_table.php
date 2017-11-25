<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTidingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tidings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',256);
            $table->string('subtitle',256);
            $table->string('slug',100);
            $table->string('image')->nullable();
            $table->date('date');
            $table->text('body');
            $table->boolean('status')->nullable();
            $table->string('like')->nullable();
            $table->string('dislike')->nullable();
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
        Schema::dropIfExists('tidings');
    }
}
