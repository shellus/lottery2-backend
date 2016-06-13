# lottery2-backend

彩票项目第二版本的PHP后端代码，包括彩票种类、玩法信息、期数规则、开奖结果采集和储存、投注、计算中奖金额等等。。。

## 使用方法

```bash

git clone git@github.com:shellus/shcms.git
cd shcms

cp .env.example .env
#编辑 .env 文件，修改数据库连接信息

composer install

php artisan migrate
php artisan db:seed

```

## 文档

暂无

## 命名约定
- 数据模型名称
    - Lottery      彩票
    - Period       期数
    - OpenTime     开奖时间
    - User         网站会员

- 字段含义（部分）
    - Lottery ->  name         彩票代码
    - Period ->   period_no     期号


## 开源协议

lottery2-backend 是一个开源软件 基于 [MIT license](http://opensource.org/licenses/MIT).
