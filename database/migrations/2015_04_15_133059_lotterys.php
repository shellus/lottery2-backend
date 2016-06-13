<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * 彩票种类表结构
 * Class Lotterys
 */
class Lotterys extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        // 彩票信息表
        Schema::create('lotterys', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('type', 32)
                ->comment("类型，程序员自定义，非官方名称");
            $table->string('title', 32)
                ->comment("彩票名称");
            $table->string('name', 32) -> unique()
                ->comment("名称缩写，如shssc");
            $table->tinyInteger('is_down')->default(0)->unsigned()
                ->comment("是否关闭彩票");
            $table->string('down_message')
                ->comment("关闭理由");
            $table->string('description', 32)
                ->comment("彩票介绍");
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
        Schema::drop('lotterys');
	}

}
