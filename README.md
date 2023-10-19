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
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
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



// Configure OAuth2 access token for authorization: auth
$config = Wherewhere\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Wherewhere\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$is_all = 'is_all_example'; // string | 是否授权全部设备
$account_id = 'account_id_example'; // string
$imei_list = 56; // int | 设备列表 多个用,隔开

try {
    $result = $apiInstance->accountAuthorizeDevicePost($is_all, $account_id, $imei_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->accountAuthorizeDevicePost: ', $e->getMessage(), PHP_EOL;
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
*DefaultApi* | [**shareInfoGet**](docs/Api/DefaultApi.md#shareinfoget) | **GET** /share/info | 获取分享链接信息
*DefaultApi* | [**shareLinkPost**](docs/Api/DefaultApi.md#sharelinkpost) | **POST** /share/link | 生成分享链接
*DefaultApi* | [**trackAnalysisGet**](docs/Api/DefaultApi.md#trackanalysisget) | **GET** /track/analysis | 获得轨迹分段分析
*DefaultApi* | [**trackHistoryGet**](docs/Api/DefaultApi.md#trackhistoryget) | **GET** /track/history | 查询设备历史轨迹

## Models

- [InlineResponse200](docs/Model/InlineResponse200.md)
- [InlineResponse2001](docs/Model/InlineResponse2001.md)
- [InlineResponse2001Data](docs/Model/InlineResponse2001Data.md)
- [InlineResponse2002](docs/Model/InlineResponse2002.md)
- [InlineResponse2002Data](docs/Model/InlineResponse2002Data.md)
- [InlineResponse2003](docs/Model/InlineResponse2003.md)
- [InlineResponse2003Data](docs/Model/InlineResponse2003Data.md)
- [InlineResponse2004](docs/Model/InlineResponse2004.md)
- [InlineResponse2005](docs/Model/InlineResponse2005.md)
- [InlineResponse2005Data](docs/Model/InlineResponse2005Data.md)
- [InlineResponse2006](docs/Model/InlineResponse2006.md)
- [InlineResponse2006Data](docs/Model/InlineResponse2006Data.md)
- [InlineResponse2007](docs/Model/InlineResponse2007.md)
- [InlineResponse2007Data](docs/Model/InlineResponse2007Data.md)
- [InlineResponse2008](docs/Model/InlineResponse2008.md)
- [InlineResponse2008Data](docs/Model/InlineResponse2008Data.md)
- [InlineResponse200Data](docs/Model/InlineResponse200Data.md)

## Authorization

### api_key

- **Type**: API key
- **API key parameter name**: api_key
- **Location**: HTTP header



### auth

- **Type**: `OAuth`
- **Flow**: `implicit`
- **Authorization URL**: `https://api.wherewhere.cloud/v1/access_token`
- **Scopes**: 
    - **all**: all Auth

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
    - Package version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
