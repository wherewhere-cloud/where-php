# Wherewhere\DefaultApi

All URIs are relative to http://api.wherewhere.cloud/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountAuthorizeDevicePost()**](DefaultApi.md#accountAuthorizeDevicePost) | **POST** /account/authorize_device | 授权设备
[**accountChangePasswordPost()**](DefaultApi.md#accountChangePasswordPost) | **POST** /account/change_password | 修改密码
[**accountCreatePost()**](DefaultApi.md#accountCreatePost) | **POST** /account/create | 添加子账号
[**accountRemoveDevicePost()**](DefaultApi.md#accountRemoveDevicePost) | **POST** /account/remove_device | 移除设备
[**accountSetStatusPost()**](DefaultApi.md#accountSetStatusPost) | **POST** /account/set_status | 禁用/启用子账号
[**accountUpdatePost()**](DefaultApi.md#accountUpdatePost) | **POST** /account/update | 修改子账户
[**accountsGet()**](DefaultApi.md#accountsGet) | **GET** /accounts | 子账户列表
[**deviceCreatePost()**](DefaultApi.md#deviceCreatePost) | **POST** /device/create | 添加设备
[**devicesGet()**](DefaultApi.md#devicesGet) | **GET** /devices | 设备列表
[**locationGet()**](DefaultApi.md#locationGet) | **GET** /location | 获得最新定位
[**locationStatusGet()**](DefaultApi.md#locationStatusGet) | **GET** /location/status | 设备定位状态统计
[**locationUpdatePost()**](DefaultApi.md#locationUpdatePost) | **POST** /location/update | 更新设备定位
[**reportByDeviceGet()**](DefaultApi.md#reportByDeviceGet) | **GET** /report/by_device | 根据设备获得里程统计
[**trackAnalysisGet()**](DefaultApi.md#trackAnalysisGet) | **GET** /track/analysis | 获得轨迹分段分析
[**trackHistoryGet()**](DefaultApi.md#trackHistoryGet) | **GET** /track/history | 查询设备历史轨迹


## `accountAuthorizeDevicePost()`

```php
accountAuthorizeDevicePost($is_all, $account_id, $imei_list): \Wherewhere\Model\InlineResponse2006
```

授权设备

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: auth
$config = Wherewhere\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


// New ApiInstance
$apiInstance = Wherewhere\ApiInstance::New('YOUR_ACCESS_TOKEN');
$is_all = 'is_all_example'; // string | 是否授权全部设备 1 是 0 不是
$account_id = 'account_id_example'; // string | 子账号id
$imei_list = 'imei_list_example'; // string | 设备列表 多个用,隔开

try {
    $result = $apiInstance->accountAuthorizeDevicePost($is_all, $account_id, $imei_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->accountAuthorizeDevicePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **is_all** | **string**| 是否授权全部设备 1 是 0 不是 |
 **account_id** | **string**| 子账号id |
 **imei_list** | **string**| 设备列表 多个用,隔开 | [optional]

### Return type

[**\Wherewhere\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountChangePasswordPost()`

```php
accountChangePasswordPost($old_password, $new_password): \Wherewhere\Model\InlineResponse2006
```

修改密码

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: auth
$config = Wherewhere\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


// New ApiInstance
$apiInstance = Wherewhere\ApiInstance::New('YOUR_ACCESS_TOKEN');
$old_password = 'old_password_example'; // string | 旧密码
$new_password = 'new_password_example'; // string | 新密码

try {
    $result = $apiInstance->accountChangePasswordPost($old_password, $new_password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->accountChangePasswordPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **old_password** | **string**| 旧密码 |
 **new_password** | **string**| 新密码 |

### Return type

[**\Wherewhere\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountCreatePost()`

```php
accountCreatePost($username, $password, $account_name, $remark, $active_time, $contact_phone, $contact_email): \Wherewhere\Model\InlineResponse2005
```

添加子账号

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: auth
$config = Wherewhere\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


// New ApiInstance
$apiInstance = Wherewhere\ApiInstance::New('YOUR_ACCESS_TOKEN');
$username = 'username_example'; // string | 用户名，可以是邮箱或者手机
$password = 'password_example'; // string | 密码
$account_name = 'account_name_example'; // string | 账户名称
$remark = 'remark_example'; // string | 公司名称
$active_time = 'active_time_example'; // string | 有效日期
$contact_phone = 'contact_phone_example'; // string | 联系手机
$contact_email = 'contact_email_example'; // string | 联系邮箱

try {
    $result = $apiInstance->accountCreatePost($username, $password, $account_name, $remark, $active_time, $contact_phone, $contact_email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->accountCreatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| 用户名，可以是邮箱或者手机 |
 **password** | **string**| 密码 |
 **account_name** | **string**| 账户名称 |
 **remark** | **string**| 公司名称 | [optional]
 **active_time** | **string**| 有效日期 | [optional]
 **contact_phone** | **string**| 联系手机 | [optional]
 **contact_email** | **string**| 联系邮箱 | [optional]

### Return type

[**\Wherewhere\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountRemoveDevicePost()`

```php
accountRemoveDevicePost($account_id, $imei_list, $is_all): \Wherewhere\Model\InlineResponse2006
```

移除设备

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: auth
$config = Wherewhere\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


// New ApiInstance
$apiInstance = Wherewhere\ApiInstance::New('YOUR_ACCESS_TOKEN');
$account_id = 'account_id_example'; // string | 子账号id
$imei_list = 'imei_list_example'; // string | 设备列表 多个用,隔开
$is_all = 'is_all_example'; // string | 是否移除所有设备 1 是 0 不是

try {
    $result = $apiInstance->accountRemoveDevicePost($account_id, $imei_list, $is_all);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->accountRemoveDevicePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| 子账号id |
 **imei_list** | **string**| 设备列表 多个用,隔开 | [optional]
 **is_all** | **string**| 是否移除所有设备 1 是 0 不是 | [optional]

### Return type

[**\Wherewhere\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountSetStatusPost()`

```php
accountSetStatusPost($account_id, $status): \Wherewhere\Model\InlineResponse2006
```

禁用/启用子账号

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: auth
$config = Wherewhere\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


// New ApiInstance
$apiInstance = Wherewhere\ApiInstance::New('YOUR_ACCESS_TOKEN');
$account_id = 'account_id_example'; // string | 子账号id
$status = 56; // int | 1启用 0 禁用

try {
    $result = $apiInstance->accountSetStatusPost($account_id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->accountSetStatusPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| 子账号id |
 **status** | **int**| 1启用 0 禁用 | [optional]

### Return type

[**\Wherewhere\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountUpdatePost()`

```php
accountUpdatePost($account_id, $username, $account_name, $password, $remark, $active_time, $contact_phone, $contact_email): \Wherewhere\Model\InlineResponse2006
```

修改子账户

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: auth
$config = Wherewhere\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


// New ApiInstance
$apiInstance = Wherewhere\ApiInstance::New('YOUR_ACCESS_TOKEN');
$account_id = 'account_id_example'; // string | 子账号id
$username = 'username_example'; // string | 登录名称
$account_name = 'account_name_example'; // string | 账号名称
$password = 'password_example'; // string | 密码
$remark = 'remark_example'; // string | 备注
$active_time = 'active_time_example'; // string | 有效日期
$contact_phone = 'contact_phone_example'; // string | 联系手机
$contact_email = 'contact_email_example'; // string | 联系邮箱

try {
    $result = $apiInstance->accountUpdatePost($account_id, $username, $account_name, $password, $remark, $active_time, $contact_phone, $contact_email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->accountUpdatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| 子账号id |
 **username** | **string**| 登录名称 | [optional]
 **account_name** | **string**| 账号名称 | [optional]
 **password** | **string**| 密码 | [optional]
 **remark** | **string**| 备注 | [optional]
 **active_time** | **string**| 有效日期 | [optional]
 **contact_phone** | **string**| 联系手机 | [optional]
 **contact_email** | **string**| 联系邮箱 | [optional]

### Return type

[**\Wherewhere\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountsGet()`

```php
accountsGet($account_id, $is_include_self): \Wherewhere\Model\InlineResponse2002
```

子账户列表

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: auth
$config = Wherewhere\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


// New ApiInstance
$apiInstance = Wherewhere\ApiInstance::New('YOUR_ACCESS_TOKEN');
$account_id = 'account_id_example'; // string | 子账号id
$is_include_self = 0; // int | 是否包含主账号本身 0 不包含 1 包含

try {
    $result = $apiInstance->accountsGet($account_id, $is_include_self);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->accountsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| 子账号id | [optional]
 **is_include_self** | **int**| 是否包含主账号本身 0 不包含 1 包含 | [optional]

### Return type

[**\Wherewhere\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deviceCreatePost()`

```php
deviceCreatePost($imei, $mark, $tags): \Wherewhere\Model\InlineResponse2004
```

添加设备

添加设备到当前账户

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: auth
$config = Wherewhere\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


// New ApiInstance
$apiInstance = Wherewhere\ApiInstance::New('YOUR_ACCESS_TOKEN');
$imei = 'imei_example'; // string | 设备唯一识别号
$mark = 'mark_example'; // string | 设备备注，可以是车牌号，最长100个字符
$tags = 'tags_example'; // string | 标签名称，默认为空，支持多个标签，用逗号隔开，最多支持10个标签

try {
    $result = $apiInstance->deviceCreatePost($imei, $mark, $tags);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deviceCreatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **imei** | **string**| 设备唯一识别号 |
 **mark** | **string**| 设备备注，可以是车牌号，最长100个字符 | [optional]
 **tags** | **string**| 标签名称，默认为空，支持多个标签，用逗号隔开，最多支持10个标签 | [optional]

### Return type

[**\Wherewhere\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `devicesGet()`

```php
devicesGet($tags, $mark, $imei, $account_id, $include_child, $page, $page_size, $keyword): \Wherewhere\Model\InlineResponse2001
```

设备列表

查询当前账户的所有设备，默认每页50个设备

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: auth
$config = Wherewhere\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


// New ApiInstance
$apiInstance = Wherewhere\ApiInstance::New('YOUR_ACCESS_TOKEN');
$tags = 深圳; // string | 标签名称,支持同时查询多个，用英文逗号隔开
$mark = 'mark_example'; // string | 设备备注
$imei = {{test_imei}}; // string | 设备imei,支持同事查询多个，用英文逗号隔开
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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tags** | **string**| 标签名称,支持同时查询多个，用英文逗号隔开 | [optional]
 **mark** | **string**| 设备备注 | [optional]
 **imei** | **string**| 设备imei,支持同事查询多个，用英文逗号隔开 | [optional]
 **account_id** | **string**| 子账户id | [optional]
 **include_child** | **int**| 是否包含子账户，默认是0，返回1时包含子账户的设备 | [optional]
 **page** | **string**|  | [optional]
 **page_size** | **int**|  | [optional]
 **keyword** | **string**| 设备imei或备注模糊查询 | [optional]

### Return type

[**\Wherewhere\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `locationGet()`

```php
locationGet($imei, $mark, $keyword, $tags, $map_type, $parking_id, $account_id, $include_child, $is_show, $drive_status): \Wherewhere\Model\InlineResponse200
```

获得最新定位

查询当前账户的所有设备最新定位，默认每页50个设备

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: auth
$config = Wherewhere\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


// New ApiInstance
$apiInstance = Wherewhere\ApiInstance::New('YOUR_ACCESS_TOKEN');
$imei = ; // string | 为空时，返回所有，支持查询多个imei,用逗号隔开
$mark = 京ADD6246; // string | 车辆备注，例如车牌号
$keyword = ; // string | 模糊搜索，只针对imei和mark
$tags = 深圳; // string | 根据标签查询，多个标签用,隔开
$map_type = 'map_type_example'; // string | 地图类型，支持三种类型，默认是地球坐标， 火星坐标 GCJ02 百度坐标BD09 地球坐标 WGS84
$parking_id = ; // string | 车库ID
$account_id = ; // string | 子账户ID
$include_child = 0; // int | 非必填，是否包含子账户设备定位，默认是0
$is_show = ; // int | 非必填 1代表过滤坐标为0的数据 0代表不过滤
$drive_status = ; // int | 行驶状态: 1行驶中 2停车 3离线

try {
    $result = $apiInstance->locationGet($imei, $mark, $keyword, $tags, $map_type, $parking_id, $account_id, $include_child, $is_show, $drive_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->locationGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **imei** | **string**| 为空时，返回所有，支持查询多个imei,用逗号隔开 | [optional]
 **mark** | **string**| 车辆备注，例如车牌号 | [optional]
 **keyword** | **string**| 模糊搜索，只针对imei和mark | [optional]
 **tags** | **string**| 根据标签查询，多个标签用,隔开 | [optional]
 **map_type** | **string**| 地图类型，支持三种类型，默认是地球坐标， 火星坐标 GCJ02 百度坐标BD09 地球坐标 WGS84 | [optional]
 **parking_id** | **string**| 车库ID | [optional]
 **account_id** | **string**| 子账户ID | [optional]
 **include_child** | **int**| 非必填，是否包含子账户设备定位，默认是0 | [optional]
 **is_show** | **int**| 非必填 1代表过滤坐标为0的数据 0代表不过滤 | [optional]
 **drive_status** | **int**| 行驶状态: 1行驶中 2停车 3离线 | [optional]

### Return type

[**\Wherewhere\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `locationStatusGet()`

```php
locationStatusGet($parking_id, $tags, $account_id, $keyword): \Wherewhere\Model\InlineResponse2003
```

设备定位状态统计

可以获得设备行驶、停车、离线的统计

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: auth
$config = Wherewhere\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


// New ApiInstance
$apiInstance = Wherewhere\ApiInstance::New('YOUR_ACCESS_TOKEN');
$parking_id = {{test_parking_id}}; // string | 选填，车库ID
$tags = 'tags_example'; // string | 设备标签，支持多标签查询，用英文逗号隔开
$account_id = 'account_id_example'; // string | 选填，子账户ID
$keyword = 'keyword_example'; // string | 模糊搜索，只针对imei和mark

try {
    $result = $apiInstance->locationStatusGet($parking_id, $tags, $account_id, $keyword);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->locationStatusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parking_id** | **string**| 选填，车库ID | [optional]
 **tags** | **string**| 设备标签，支持多标签查询，用英文逗号隔开 | [optional]
 **account_id** | **string**| 选填，子账户ID | [optional]
 **keyword** | **string**| 模糊搜索，只针对imei和mark | [optional]

### Return type

[**\Wherewhere\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `locationUpdatePost()`

```php
locationUpdatePost($imei, $latitude, $longitude, $speed, $type, $gps_time, $course): \Wherewhere\Model\InlineResponse2006
```

更新设备定位

手动提交设备最新经纬度，更新定位

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: auth
$config = Wherewhere\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


// New ApiInstance
$apiInstance = Wherewhere\ApiInstance::New('YOUR_ACCESS_TOKEN');
$imei = 'imei_example'; // string | 设备号
$latitude = 3.4; // float | 经度
$longitude = 3.4; // float | 纬度
$speed = 3.4; // float | 速度，单位是km/h
$type = 'type_example'; // string | 类型 bd09|wgps84，默认是bd09
$gps_time = 56; // int | 设备定位时间
$course = 3.4; // float | 航向，默认是0

try {
    $result = $apiInstance->locationUpdatePost($imei, $latitude, $longitude, $speed, $type, $gps_time, $course);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->locationUpdatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **imei** | **string**| 设备号 |
 **latitude** | **float**| 经度 |
 **longitude** | **float**| 纬度 |
 **speed** | **float**| 速度，单位是km/h |
 **type** | **string**| 类型 bd09|wgps84，默认是bd09 |
 **gps_time** | **int**| 设备定位时间 |
 **course** | **float**| 航向，默认是0 | [optional]

### Return type

[**\Wherewhere\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportByDeviceGet()`

```php
reportByDeviceGet($type, $value, $imei, $tags, $order_by, $order_type, $m, $n): \Wherewhere\Model\InlineResponse2009
```

根据设备获得里程统计

imei/tags/parking不能同时为空，用于筛选出企业下设备

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: auth
$config = Wherewhere\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


// New ApiInstance
$apiInstance = Wherewhere\ApiInstance::New('YOUR_ACCESS_TOKEN');
$type = month; // string | 日期类型，month和year和hour和last30days
$value = 202201; // string | 202101代表2021年1月，或2021,或20230609
$imei = 10000286; // string | 设备号
$tags = 广州; // string | 设备标签
$order_by = date; // string | 排序字段 distance | time | date，默认是distance，time是驾驶时长，date是日期
$order_type = asc; // string | 排序方式 desc | asc ， 默认是desc 倒序
$m = 'm_example'; // string
$n = 'n_example'; // string

try {
    $result = $apiInstance->reportByDeviceGet($type, $value, $imei, $tags, $order_by, $order_type, $m, $n);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->reportByDeviceGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| 日期类型，month和year和hour和last30days |
 **value** | **string**| 202101代表2021年1月，或2021,或20230609 | [optional]
 **imei** | **string**| 设备号 | [optional]
 **tags** | **string**| 设备标签 | [optional]
 **order_by** | **string**| 排序字段 distance | time | date，默认是distance，time是驾驶时长，date是日期 | [optional]
 **order_type** | **string**| 排序方式 desc | asc ， 默认是desc 倒序 | [optional]
 **m** | **string**|  | [optional]
 **n** | **string**|  | [optional]

### Return type

[**\Wherewhere\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `trackAnalysisGet()`

```php
trackAnalysisGet($imei, $date, $ignore_time): \Wherewhere\Model\InlineResponse2008
```

获得轨迹分段分析

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: auth
$config = Wherewhere\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


// New ApiInstance
$apiInstance = Wherewhere\ApiInstance::New('YOUR_ACCESS_TOKEN');
$imei = {{test_imei}}; // string | 设备号
$date = 2022-02-09; // string | 查询日期
$ignore_time = 180; // int | 可忽略的行驶途中短暂停车时间，单位秒，默认180

try {
    $result = $apiInstance->trackAnalysisGet($imei, $date, $ignore_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->trackAnalysisGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **imei** | **string**| 设备号 |
 **date** | **string**| 查询日期 |
 **ignore_time** | **int**| 可忽略的行驶途中短暂停车时间，单位秒，默认180 | [optional]

### Return type

[**\Wherewhere\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `trackHistoryGet()`

```php
trackHistoryGet($imei, $start_time, $end_time, $order, $map_type, $is_show): \Wherewhere\Model\InlineResponse2007
```

查询设备历史轨迹

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: auth
$config = Wherewhere\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


// New ApiInstance
$apiInstance = Wherewhere\ApiInstance::New('YOUR_ACCESS_TOKEN');
$imei = {{test_imei}}; // string | 设备号
$start_time = 1644336000; // int | 开始时间戳
$end_time = 1644422400; // int | 结束时间戳
$order = asc; // string | 排序 asc | desc，默认是按gps_time 顺序排列
$map_type = bd09; // string | 地图类型，bd09|wgs84, 默认bd09
$is_show = ; // int | 是否过滤坐标为0的数据 1过滤 0不过滤

try {
    $result = $apiInstance->trackHistoryGet($imei, $start_time, $end_time, $order, $map_type, $is_show);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->trackHistoryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **imei** | **string**| 设备号 |
 **start_time** | **int**| 开始时间戳 |
 **end_time** | **int**| 结束时间戳 |
 **order** | **string**| 排序 asc | desc，默认是按gps_time 顺序排列 | [optional]
 **map_type** | **string**| 地图类型，bd09|wgs84, 默认bd09 | [optional]
 **is_show** | **int**| 是否过滤坐标为0的数据 1过滤 0不过滤 | [optional]

### Return type

[**\Wherewhere\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[auth](../../README.md#auth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
