# wherewhere-php

WhereWhere.cloud


## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "require": {
    "wherewhere/sdk": "*@dev",
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/wherewhere-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
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

```

## API Endpoints

All URIs are relative to *https://api.wherewhere.cloud/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**accountAuthorizeDevicePost**](docs/Api/DefaultApi.md#accountauthorizedevicepost) | **POST** /account/authorize_device | 授权设备
*DefaultApi* | [**accountChangePasswordPost**](docs/Api/DefaultApi.md#accountchangepasswordpost) | **POST** /account/change_password | 修改密码
*DefaultApi* | [**accountCreatePost**](docs/Api/DefaultApi.md#accountcreatepost) | **POST** /account/create | 添加子账号
*DefaultApi* | [**accountRemoveDevicePost**](docs/Api/DefaultApi.md#accountremovedevicepost) | **POST** /account/remove_device | 移除设备
*DefaultApi* | [**accountSetStatusPost**](docs/Api/DefaultApi.md#accountsetstatuspost) | **POST** /account/set_status | 禁用/启用子账号
*DefaultApi* | [**accountUpdatePost**](docs/Api/DefaultApi.md#accountupdatepost) | **POST** /account/update | 修改子账户
*DefaultApi* | [**accountsGet**](docs/Api/DefaultApi.md#accountsget) | **GET** /accounts | 子账户列表
*DefaultApi* | [**deviceCreatePost**](docs/Api/DefaultApi.md#devicecreatepost) | **POST** /device/create | 添加设备
*DefaultApi* | [**devicesGet**](docs/Api/DefaultApi.md#devicesget) | **GET** /devices | 设备列表
*DefaultApi* | [**locationGet**](docs/Api/DefaultApi.md#locationget) | **GET** /location | 获得最新定位
*DefaultApi* | [**locationStatusGet**](docs/Api/DefaultApi.md#locationstatusget) | **GET** /location/status | 设备定位状态统计
*DefaultApi* | [**locationUpdatePost**](docs/Api/DefaultApi.md#locationupdatepost) | **POST** /location/update | 更新设备定位
*DefaultApi* | [**reportByDeviceGet**](docs/Api/DefaultApi.md#reportbydeviceget) | **GET** /report/by_device | 根据设备获得里程统计
*DefaultApi* | [**trackAnalysisGet**](docs/Api/DefaultApi.md#trackanalysisget) | **GET** /track/analysis | 获得轨迹分段分析
*DefaultApi* | [**trackHistoryGet**](docs/Api/DefaultApi.md#trackhistoryget) | **GET** /track/history | 查询设备历史轨迹

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

