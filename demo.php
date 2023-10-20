<?php
require_once(__DIR__ . '/vendor/autoload.php');

// New ApiInstance
$apiInstance = Wherewhere\ApiInstance::New('YOUR_ACCESS_TOKEN');

$tags = '深圳'; // string | 标签名称,支持同时查询多个，用英文逗号隔开
$mark = 'mark_example'; // string | 设备备注
$imei = 'xxx'; // string | 设备imei,支持同事查询多个，用英文逗号隔开
$account_id = 'account_id_example'; // string | 子账户id
$include_child = 0; // int | 是否包含子账户，默认是0，返回1时包含子账户的设备
$page = 1; // string
$page_size = 50; // int
$keyword = 00000; // string | 设备imei或备注模糊查询

try {
    $result = $apiInstance->devicesGet($tags, $mark, $imei, $account_id, $include_child, $page, $page_size, $keyword);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->devicesGet: ', $e->getMessage(), PHP_EOL;
}