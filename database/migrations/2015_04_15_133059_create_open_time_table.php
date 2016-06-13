<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * 彩票开奖时间表表
 * Class Lotterys
 */
class CreateOpenTimeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        // 彩票信息表
        Schema::create('open_times', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('period_number')->unsigned();
            $table->integer('lottery_id')->unsigned();
            $table->time('open_time', 32);
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
        Schema::drop('open_times');
	}

}
