# VentureLeap\MessengerService\TemplateApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteTemplateItem**](TemplateApi.md#deletetemplateitem) | **DELETE** /templates/{id} | Removes the Template resource.
[**getTemplateCollection**](TemplateApi.md#gettemplatecollection) | **GET** /templates | Retrieves the collection of Template resources.
[**getTemplateItem**](TemplateApi.md#gettemplateitem) | **GET** /templates/{id} | Retrieves a Template resource.
[**postTemplateCollection**](TemplateApi.md#posttemplatecollection) | **POST** /templates | Creates a Template resource.
[**putTemplateItem**](TemplateApi.md#puttemplateitem) | **PUT** /templates/{id} | Replaces the Template resource.

# **deleteTemplateItem**
> deleteTemplateItem($id)

Removes the Template resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: applicationId
$config = VentureLeap\MessengerService\Configuration::getDefaultConfiguration()->setApiKey('ApplicationId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\MessengerService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApplicationId', 'Bearer');

$apiInstance = new VentureLeap\MessengerService\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $apiInstance->deleteTemplateItem($id);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->deleteTemplateItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[applicationId](../../README.md#applicationId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplateCollection**
> \VentureLeap\MessengerService\Model\InlineResponse2001 getTemplateCollection($properties, $page)

Retrieves the collection of Template resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: applicationId
$config = VentureLeap\MessengerService\Configuration::getDefaultConfiguration()->setApiKey('ApplicationId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\MessengerService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApplicationId', 'Bearer');

$apiInstance = new VentureLeap\MessengerService\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$properties = array("properties_example"); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getTemplateCollection($properties, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->getTemplateCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]

### Return type

[**\VentureLeap\MessengerService\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[applicationId](../../README.md#applicationId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplateItem**
> \VentureLeap\MessengerService\Model\TemplateJsonldTemplateRead getTemplateItem($id)

Retrieves a Template resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: applicationId
$config = VentureLeap\MessengerService\Configuration::getDefaultConfiguration()->setApiKey('ApplicationId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\MessengerService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApplicationId', 'Bearer');

$apiInstance = new VentureLeap\MessengerService\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getTemplateItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->getTemplateItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\VentureLeap\MessengerService\Model\TemplateJsonldTemplateRead**](../Model/TemplateJsonldTemplateRead.md)

### Authorization

[applicationId](../../README.md#applicationId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTemplateCollection**
> \VentureLeap\MessengerService\Model\TemplateJsonldTemplateRead postTemplateCollection($body)

Creates a Template resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: applicationId
$config = VentureLeap\MessengerService\Configuration::getDefaultConfiguration()->setApiKey('ApplicationId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\MessengerService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApplicationId', 'Bearer');

$apiInstance = new VentureLeap\MessengerService\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \VentureLeap\MessengerService\Model\TemplateJsonldTemplateWrite(); // \VentureLeap\MessengerService\Model\TemplateJsonldTemplateWrite | The new Template resource

try {
    $result = $apiInstance->postTemplateCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->postTemplateCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\VentureLeap\MessengerService\Model\TemplateJsonldTemplateWrite**](../Model/TemplateJsonldTemplateWrite.md)| The new Template resource | [optional]

### Return type

[**\VentureLeap\MessengerService\Model\TemplateJsonldTemplateRead**](../Model/TemplateJsonldTemplateRead.md)

### Authorization

[applicationId](../../README.md#applicationId)

### HTTP request headers

 - **Content-Type**: application/ld+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTemplateItem**
> \VentureLeap\MessengerService\Model\TemplateJsonldTemplateRead putTemplateItem($id, $body)

Replaces the Template resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: applicationId
$config = VentureLeap\MessengerService\Configuration::getDefaultConfiguration()->setApiKey('ApplicationId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\MessengerService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApplicationId', 'Bearer');

$apiInstance = new VentureLeap\MessengerService\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$body = new \VentureLeap\MessengerService\Model\TemplateJsonldTemplateWrite(); // \VentureLeap\MessengerService\Model\TemplateJsonldTemplateWrite | The updated Template resource

try {
    $result = $apiInstance->putTemplateItem($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->putTemplateItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\VentureLeap\MessengerService\Model\TemplateJsonldTemplateWrite**](../Model/TemplateJsonldTemplateWrite.md)| The updated Template resource | [optional]

### Return type

[**\VentureLeap\MessengerService\Model\TemplateJsonldTemplateRead**](../Model/TemplateJsonldTemplateRead.md)

### Authorization

[applicationId](../../README.md#applicationId)

### HTTP request headers

 - **Content-Type**: application/ld+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

