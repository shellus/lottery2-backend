<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Lottery
 *
 * @property integer $id
 * @property string $type 类型，程序员自定义，非官方名称
 * @property string $title 彩票名称
 * @property string $name 名称缩写，如shssc
 * @property boolean $is_down 是否关闭彩票
 * @property string $down_message 关闭理由
 * @property string $description 彩票介绍
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\OpenTime[] $openTimes
 * @method static \Illuminate\Database\Query\Builder|\App\Lottery whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Lottery whereType($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Lottery whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Lottery whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Lottery whereIsDown($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Lottery whereDownMessage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Lottery whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Lottery whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Lottery whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Lottery extends Model
{
    protected $table = 'lotterys';
    //
    public function openTimes(){
        $result = $this->hasMany('App\OpenTime');
        return $result;
    }
    public function getNextPeriod(){
        \DB::connection()->enableQueryLog();
        /** @var OpenTime $open_times */
        $open_times = $this -> openTimes();
        $result = $open_times -> where('open_time','>', get_now_time()) -> first();
        return $result;
    }
}
