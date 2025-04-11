## 环境
```
PHP 7.4.7 (cli) (built: Jun 11 2020 18:46:58) ( NTS )
Copyright (c) The PHP Group
Zend Engine v3.4.0, Copyright (c) Zend Technologies
    with Zend OPcache v7.4.7, Copyright (c), by Zend Technologies
    with Xdebug v2.9.2, Copyright (c) 2002-2020, by Derick Rethans
Composer version 2.3.5 2022-04-13 16:43:00
```

## 扩展引入

### 1. 直接引入
```
$ composer require roybinhsu/ds-sdk

```
### 2. 自定义
```
$ git clone git@github.com:RoybinHsu/ds.git
$ cd ds
$ composer install
$ composer dump-autoload

# 在项目中使用
require_once 'vendor/autoload.php';

```

### 3-1 基础使用
```
use ds\DsClient;
use ds\requests\OrderQueryRequest;
use ds\models\OrderQueryModel;

$appKey    = '18768798988098103478928374';
$appSecret = 'asdfasdfasdfas9876918739asdf';
$client    = new DsClient($appKey, $appSecret);
// 方法一
$requestModel = new OrderQueryModel();
$requestModel->refOid = '123456678090980980,98798678676157468';
// 方法二
// $data = [
//     'refOid' => '123456678090980980,98798678676157468'
// ];
// $requestModel = new OrderQueryModel($data);
// 方法三
// $requestModel = new OrderQueryModel();
// $requestModel->setRefOid('123456678090980980,98798678676157468');
$request  = new OrderQueryRequest($requestModel);
$response  = $client->send($request);

```

### 3-2 监听事件使用
```
$data = [
    'refOid' => '123456678090980980,98798678676157468'
];
$requestModel = new OrderQueryModel($data);
$request  = new OrderQueryRequest($requestModel);
$client->event->on(\ds\Event::BEFORE_SEND, function($options) {
    // TODO 发送请求前业务逻辑
});
$client->event->on(\ds\Event::AFTER_SEND, function($args) {
    // TODO 发送请求后业务逻辑
});
// $client->event->off(Event::BEFORE_SEND);
$response = $client->send($request);
```
