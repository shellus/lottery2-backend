<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpenResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('open_results', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lottery_id')->unsigned();
            $table->string('period_number', 32);
            $table->timestamp('open_time');
            $table->string('open_value');
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
        Schema::drop('open_results');
    }
}
