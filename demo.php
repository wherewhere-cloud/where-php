<?php
require_once(__DIR__ . '/vendor/autoload.php');

// New ApiInstance
$apiInstance = Wherewhere\ApiInstance::New('YOUR_ACCESS_TOKEN');

$is_all = 'is_all_example'; // string | 是否授权全部设备
$account_id = 'account_id_example'; // string
$imei_list = 56; // int | 设备列表 多个用,隔开

try {
    $result = $apiInstance->accountAuthorizeDevicePost($is_all, $account_id, $imei_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->accountAuthorizeDevicePost: ', $e->getMessage(), PHP_EOL;
}