# Mobieve\DefaultApi

All URIs are relative to *https://38m715k2fa.execute-api.sa-east-1.amazonaws.com/ngrok*

Method | HTTP request | Description
------------- | ------------- | -------------
[**channelsOptions**](DefaultApi.md#channelsOptions) | **OPTIONS** /channels | 
[**messagesIdOptions**](DefaultApi.md#messagesIdOptions) | **OPTIONS** /messages/{id} | 
[**messagesOptions**](DefaultApi.md#messagesOptions) | **OPTIONS** /messages | 
[**templatesIdOptions**](DefaultApi.md#templatesIdOptions) | **OPTIONS** /templates/{id} | 
[**templatesOptions**](DefaultApi.md#templatesOptions) | **OPTIONS** /templates | 


# **channelsOptions**
> \Mobieve\Model\ModelEmpty channelsOptions()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mobieve\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->channelsOptions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->channelsOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Mobieve\Model\ModelEmpty**](../Model/ModelEmpty.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messagesIdOptions**
> \Mobieve\Model\ModelEmpty messagesIdOptions()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mobieve\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->messagesIdOptions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->messagesIdOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Mobieve\Model\ModelEmpty**](../Model/ModelEmpty.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messagesOptions**
> \Mobieve\Model\ModelEmpty messagesOptions()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mobieve\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->messagesOptions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->messagesOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Mobieve\Model\ModelEmpty**](../Model/ModelEmpty.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templatesIdOptions**
> \Mobieve\Model\ModelEmpty templatesIdOptions()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mobieve\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->templatesIdOptions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->templatesIdOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Mobieve\Model\ModelEmpty**](../Model/ModelEmpty.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templatesOptions**
> \Mobieve\Model\ModelEmpty templatesOptions()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Mobieve\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->templatesOptions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->templatesOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Mobieve\Model\ModelEmpty**](../Model/ModelEmpty.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

