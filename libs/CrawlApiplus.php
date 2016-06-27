<?php
/**
 * Created by PhpStorm.
 * User: shellus
 * Date: 2016-06-14
 * Time: 0:05
 */

namespace Lib;


use GuzzleHttp\Client;

class CrawlApiplus
{
    protected $lottery_name;
    protected $base_url = 'http://c.apiplus.cn/';
    protected $configs = [
        'format' => 'json',
        'code' => 'xjssc',
        'token' => 'c7a2e9bf51674fab'
    ];

    private function query($url, $params = []){
        $client = new Client();
        $res = $client->request('GET', $url, [
            'query' => array_merge([
                'format' => $this->configs['format'],
                'code' => $this->configs['code'],
                'token' => $this->configs['token'],
            ], $params)
        ]);

        $result = json_decode($res->getBody()->getContents(), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \Exception('no json!');
        }
        return $result;
    }
    public function __construct($configs)
    {
        $this -> setConfigs($configs);
    }
    public function getResultByCurly()
    {
        return $this -> query($this -> base_url . 'curly.do')['data'][0];
    }
    /**
     * @return array
     */
    public function getConfigs()
    {
        return $this->configs;
    }

    /**
     * @param array $configs
     */
    public function setConfigs($configs)
    {
        $this->configs = array_merge($this->configs, $configs);
    }
}