<?php
require_once './vendor/autoload.php';

use ds\DsClient;
use ds\requests\OrderQueryRequest;
use ds\models\OrderQueryModel;


$appKey    = '10221001';
$appSecret = '17de55c674b8159d5a35c03bf4c3dc76';
$client    = new DsClient($appKey, $appSecret);
// $model     = new OrderQueryModel(
//     [
//         'refOid' => '6941301918504719612'
//     ]
// );
$model = new OrderQueryModel();
//$model->refOid = '6941301918504719612';
$refOid = '6918997300171669214,6918993256551448032,6941124460991354437,6918993256551448032,6941124460991354437,6941124503641593156';

$model->setRefOid($refOid);
$request   = new OrderQueryRequest($model);
$response  = $client->send($request);
echo json_encode($response, JSON_UNESCAPED_UNICODE) . "\n\n";
