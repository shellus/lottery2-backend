<?php
use Illuminate\Database\Seeder;

/**
 * 填充彩票种类
 * 所有彩票种类，包括跨彩种（例如足球和时时彩）都在这里
 * 彩票种类呈树状结构
 * 每条记录有唯一name字段，用来优化url结构和前端配置固定彩种
 * Class LotteryTableSeeder
 */
class LotteryTableSeeder extends Seeder {

    public function run()
    {
        /*
        $url = "http://apis.haoservice.com/lifeservice/HighLottery/list?key=1cfc52d20921491f8868903390c90bfd";
        $data = json_decode(file_get_contents($url),true);
        */

        $lotterys = [
            // 时时彩
            ['id' => 1,'type' =>'ssc', 'title' => '重庆时时彩', 'name' => 'cqssc', 'description' => '每日：120期，开奖频率：10分钟。'],
//            ['id' => 2,'type' =>'ssc', 'title' => '新疆时时彩', 'name' => 'xjssc', 'description' => '每日：96期，开奖频率：10分钟。'],
//            ['id' => 4,'type' =>'ssc', 'title' => '天津时时彩', 'name' => 'tjssc', 'description' => '每日：84期，开奖频率：10分钟。'],
//
//            // 11选5
//            ['id' => 6,'type' =>'11x5', 'title' => '安徽11选5', 'name' => 'ah11x5', 'description' => '这是11选5的说明'],
//            ['id' => 7,'type' =>'11x5', 'title' => '北京11选5', 'name' => 'bj11x5', 'description' => '这是11选5的说明'],
//            ['id' => 8,'type' =>'11x5', 'title' => '福建11选5', 'name' => 'fj11x5', 'description' => '这是11选5的说明'],
//            ['id' => 9,'type' =>'11x5', 'title' => '甘肃11选5', 'name' => 'gs11x5', 'description' => '这是11选5的说明'],
//            ['id' => 10,'type' =>'11x5', 'title' => '广西11选5', 'name' => 'gx11x5', 'description' => '这是11选5的说明'],
//            ['id' => 11,'type' =>'11x5', 'title' => '贵州11选5', 'name' => 'gz11x5', 'description' => '这是11选5的说明'],
//            ['id' => 12,'type' =>'11x5', 'title' => '河北11选5', 'name' => 'heb11x5', 'description' => '这是11选5的说明'],
//            ['id' => 13,'type' =>'11x5', 'title' => '河南11选5', 'name' => 'hen11x5', 'description' => '这是11选5的说明'],
//            ['id' => 14,'type' =>'11x5', 'title' =>'黑龙江11选5','name' => 'hlj11x5', 'description' => '这是11选5的说明'],
//            ['id' => 15,'type' =>'11x5', 'title' => '湖北11选5', 'name' => 'hub11x5', 'description' => '这是11选5的说明'],
//            ['id' => 16,'type' =>'11x5', 'title' => '吉林11选5', 'name' => 'jl11x5', 'description' => '这是11选5的说明'],
//            ['id' => 17,'type' =>'11x5', 'title' => '江苏11选5', 'name' => 'js11x5', 'description' => '这是11选5的说明'],
//            ['id' => 18,'type' =>'11x5', 'title' => '辽宁11选5', 'name' => 'ln11x5', 'description' => '这是11选5的说明'],
//            ['id' => 19,'type' =>'11x5','title' =>'内蒙古11选5', 'name' => 'nmg11x5', 'description' => '这是11选5的说明'],
//            ['id' => 20,'type' =>'11x5', 'title' => '四川11选5', 'name' => 'sc11x5', 'description' => '这是11选5的说明'],
//            ['id' => 21,'type' =>'11x5', 'title' => '上海11选5', 'name' => 'sh11x5', 'description' => '这是11选5的说明'],
//            ['id' => 22,'type' =>'11x5', 'title' => '陕西11选5', 'name' => 'sxl11x5', 'description' => '这是11选5的说明'],
//            ['id' => 23,'type' =>'11x5', 'title' => '山西11选5', 'name' => 'sxr11x5', 'description' => '这是11选5的说明'],
//            ['id' => 24,'type' =>'11x5', 'title' => '天津11选5', 'name' => 'tj11x5', 'description' => '这是11选5的说明'],
//            ['id' => 25,'type' =>'11x5', 'title' => '新疆11选5', 'name' => 'xj11x5', 'description' => '这是11选5的说明'],
//            ['id' => 26,'type' =>'11x5', 'title' => '云南11选5', 'name' => 'yn11x5', 'description' => '这是11选5的说明'],
//            ['id' => 27,'type' =>'11x5', 'title' => '浙江11选5', 'name' => 'zj11x5', 'description' => '这是11选5的说明'],
//
//
//            // 快三
//            ['id' => 28,'type' =>'k3', 'title' => '江苏快三', 'name' => 'jsk3', 'description' => '这是江苏快三的说明'],
//            ['id' => 29,'type' =>'k3', 'title' => '安徽快三', 'name' => 'ahk3', 'description' => '这是江苏快三的说明'],
//            ['id' => 30,'type' =>'k3', 'title' => '北京快三', 'name' => 'bjk3', 'description' => '这是江苏快三的说明'],
//            ['id' => 31,'type' =>'k3', 'title' => '福建快三', 'name' => 'fjk3', 'description' => '这是江苏快三的说明'],
//            ['id' => 32,'type' =>'k3', 'title' => '甘肃快三', 'name' => 'gsk3', 'description' => '这是江苏快三的说明'],
//            ['id' => 33,'type' =>'k3', 'title' => '广西快三', 'name' => 'gxk3', 'description' => '这是江苏快三的说明'],
//            ['id' => 34,'type' =>'k3', 'title' => '贵州快三', 'name' => 'gzk3', 'description' => '这是江苏快三的说明'],
//            ['id' => 35,'type' =>'k3', 'title' => '河北快三', 'name' =>'hebk3', 'description' => '这是江苏快三的说明'],
//            ['id' => 36,'type' =>'k3', 'title' => '湖北快三', 'name' =>'hubk3', 'description' => '这是江苏快三的说明'],
//            ['id' => 37,'type' =>'k3', 'title' => '湖南快三', 'name' =>'hunk3', 'description' => '这是江苏快三的说明'],
//            ['id' => 38,'type' =>'k3', 'title' => '吉林快三', 'name' => 'jlk3', 'description' => '这是江苏快三的说明'],
//            ['id' => 39,'type' =>'k3', 'title' =>'内蒙古快三', 'name'=>'nmgk3' , 'description' => '这是江苏快三的说明'],
//            ['id' => 40,'type' =>'k3', 'title' => '青海快三', 'name' => 'qhk3', 'description' => '这是江苏快三的说明'],
//            ['id' => 41,'type' =>'k3', 'title' => '上海快三', 'name' => 'shk3', 'description' => '这是江苏快三的说明'],
//
//            // pk10
//            ['id' => 42,'type' =>'pk10', 'title' => '北京PK拾', 'name' => 'bjpk10', 'description' => '这是北京PK拾的说明'],

        ];
        foreach($lotterys as $lottery){
            \App\Lottery::create($lottery);
            $this -> command -> info('插入' . $lottery['name']);
        }
    }
}

