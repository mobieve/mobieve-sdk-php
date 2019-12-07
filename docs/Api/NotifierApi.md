# Mobieve\NotifierApi

All URIs are relative to *https://38m715k2fa.execute-api.sa-east-1.amazonaws.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMessage**](NotifierApi.md#createMessage) | **POST** /messages | 
[**createTemplate**](NotifierApi.md#createTemplate) | **POST** /templates | 
[**getChannels**](NotifierApi.md#getChannels) | **GET** /channels | 
[**getMessage**](NotifierApi.md#getMessage) | **GET** /messages/{id} | 
[**getMessages**](NotifierApi.md#getMessages) | **GET** /messages | 
[**getTemplates**](NotifierApi.md#getTemplates) | **GET** /templates | 
[**updateTemplate**](NotifierApi.md#updateTemplate) | **POST** /templates/{id} | 


# **createMessage**
> \Mobieve\Model\Message createMessage($message)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
$config = Mobieve\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mobieve\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Mobieve\Api\NotifierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message = new \Mobieve\Model\Message(); // \Mobieve\Model\Message | 

try {
    $result = $apiInstance->createMessage($message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotifierApi->createMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message** | [**\Mobieve\Model\Message**](../Model/Message.md)|  |

### Return type

[**\Mobieve\Model\Message**](../Model/Message.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createTemplate**
> \Mobieve\Model\Template createTemplate($template)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
$config = Mobieve\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mobieve\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Mobieve\Api\NotifierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template = new \Mobieve\Model\Template(); // \Mobieve\Model\Template | 

try {
    $result = $apiInstance->createTemplate($template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotifierApi->createTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template** | [**\Mobieve\Model\Template**](../Model/Template.md)|  |

### Return type

[**\Mobieve\Model\Template**](../Model/Template.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChannels**
> \Mobieve\Model\ArrayOfObjects getChannels()



Obter todos os canais de notificação

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
$config = Mobieve\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mobieve\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Mobieve\Api\NotifierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getChannels();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotifierApi->getChannels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Mobieve\Model\ArrayOfObjects**](../Model/ArrayOfObjects.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessage**
> \Mobieve\Model\Message getMessage($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
$config = Mobieve\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mobieve\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Mobieve\Api\NotifierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->getMessage($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotifierApi->getMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Mobieve\Model\Message**](../Model/Message.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessages**
> \Mobieve\Model\ArrayOfObjects getMessages()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
$config = Mobieve\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mobieve\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Mobieve\Api\NotifierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMessages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotifierApi->getMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Mobieve\Model\ArrayOfObjects**](../Model/ArrayOfObjects.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplates**
> \Mobieve\Model\ArrayOfObjects getTemplates()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
$config = Mobieve\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mobieve\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Mobieve\Api\NotifierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTemplates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotifierApi->getTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Mobieve\Model\ArrayOfObjects**](../Model/ArrayOfObjects.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTemplate**
> \Mobieve\Model\Template updateTemplate($id, $template)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: BearerToken
$config = Mobieve\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Mobieve\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Mobieve\Api\NotifierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 
$template = new \Mobieve\Model\Template(); // \Mobieve\Model\Template | 

try {
    $result = $apiInstance->updateTemplate($id, $template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotifierApi->updateTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **template** | [**\Mobieve\Model\Template**](../Model/Template.md)|  |

### Return type

[**\Mobieve\Model\Template**](../Model/Template.md)

### Authorization

[BearerToken](../../README.md#BearerToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

