<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\OpenResult
 *
 * @mixin \Eloquent
 * @property integer $id
 * @property integer $lottery_id
 * @property string $open_time
 * @property string $open_value
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\OpenResult whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\OpenResult whereLotteryId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\OpenResult whereOpenTime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\OpenResult whereOpenValue($value)
 * @method static \Illuminate\Database\Query\Builder|\App\OpenResult whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\OpenResult whereUpdatedAt($value)
 */
class OpenResult extends Model
{
    //
}
