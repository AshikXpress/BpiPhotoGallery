<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videoes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('caption',255)->nullable();
            $table->string('celebration_year',200);
            $table->string('celebration_name',255);
            $table->text('celebration_descpt')->nullable();
            $table->string('youtube_id',255);
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
        Schema::dropIfExists('videoes');
    }
}
