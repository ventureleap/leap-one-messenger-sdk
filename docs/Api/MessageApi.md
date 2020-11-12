# VentureLeap\MessengerService\MessageApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteMessageItem**](MessageApi.md#deletemessageitem) | **DELETE** /messages/{id} | Removes the Message resource.
[**getMessageCollection**](MessageApi.md#getmessagecollection) | **GET** /messages | Retrieves the collection of Message resources.
[**getMessageItem**](MessageApi.md#getmessageitem) | **GET** /messages/{id} | Retrieves a Message resource.
[**postMessageCollection**](MessageApi.md#postmessagecollection) | **POST** /messages | Creates a Message resource.

# **deleteMessageItem**
> deleteMessageItem($id)

Removes the Message resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: applicationId
$config = VentureLeap\MessengerService\Configuration::getDefaultConfiguration()->setApiKey('ApplicationId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\MessengerService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApplicationId', 'Bearer');

$apiInstance = new VentureLeap\MessengerService\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $apiInstance->deleteMessageItem($id);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->deleteMessageItem: ', $e->getMessage(), PHP_EOL;
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

# **getMessageCollection**
> \VentureLeap\MessengerService\Model\InlineResponse200 getMessageCollection($properties, $content, $sender, $sender, $recipient, $recipient, $message_type, $message_type, $status, $status, $page)

Retrieves the collection of Message resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: applicationId
$config = VentureLeap\MessengerService\Configuration::getDefaultConfiguration()->setApiKey('ApplicationId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\MessengerService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApplicationId', 'Bearer');

$apiInstance = new VentureLeap\MessengerService\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$properties = array("properties_example"); // string[] | Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]={propertyName}&properties[]={anotherPropertyName}&properties[{nestedPropertyParent}][]={nestedProperty}
$content = "content_example"; // string | 
$sender = "sender_example"; // string | 
$sender = array("sender_example"); // string[] | 
$recipient = "recipient_example"; // string | 
$recipient = array("recipient_example"); // string[] | 
$message_type = "message_type_example"; // string | 
$message_type = array("message_type_example"); // string[] | 
$status = "status_example"; // string | 
$status = array("status_example"); // string[] | 
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getMessageCollection($properties, $content, $sender, $sender, $recipient, $recipient, $message_type, $message_type, $status, $status, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->getMessageCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **properties** | [**string[]**](../Model/string.md)| Allows you to reduce the response to contain only the properties you need. If your desired property is nested, you can address it using nested arrays. Example: properties[]&#x3D;{propertyName}&amp;properties[]&#x3D;{anotherPropertyName}&amp;properties[{nestedPropertyParent}][]&#x3D;{nestedProperty} | [optional]
 **content** | **string**|  | [optional]
 **sender** | **string**|  | [optional]
 **sender** | [**string[]**](../Model/string.md)|  | [optional]
 **recipient** | **string**|  | [optional]
 **recipient** | [**string[]**](../Model/string.md)|  | [optional]
 **message_type** | **string**|  | [optional]
 **message_type** | [**string[]**](../Model/string.md)|  | [optional]
 **status** | **string**|  | [optional]
 **status** | [**string[]**](../Model/string.md)|  | [optional]
 **page** | **int**| The collection page number | [optional] [default to 1]

### Return type

[**\VentureLeap\MessengerService\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[applicationId](../../README.md#applicationId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMessageItem**
> \VentureLeap\MessengerService\Model\MessageJsonldMessageRead getMessageItem($id)

Retrieves a Message resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: applicationId
$config = VentureLeap\MessengerService\Configuration::getDefaultConfiguration()->setApiKey('ApplicationId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\MessengerService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApplicationId', 'Bearer');

$apiInstance = new VentureLeap\MessengerService\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getMessageItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->getMessageItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\VentureLeap\MessengerService\Model\MessageJsonldMessageRead**](../Model/MessageJsonldMessageRead.md)

### Authorization

[applicationId](../../README.md#applicationId)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postMessageCollection**
> \VentureLeap\MessengerService\Model\MessageJsonldMessageRead postMessageCollection($body)

Creates a Message resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: applicationId
$config = VentureLeap\MessengerService\Configuration::getDefaultConfiguration()->setApiKey('ApplicationId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\MessengerService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApplicationId', 'Bearer');

$apiInstance = new VentureLeap\MessengerService\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \VentureLeap\MessengerService\Model\MessageJsonldMessageWrite(); // \VentureLeap\MessengerService\Model\MessageJsonldMessageWrite | The new Message resource

try {
    $result = $apiInstance->postMessageCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->postMessageCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\VentureLeap\MessengerService\Model\MessageJsonldMessageWrite**](../Model/MessageJsonldMessageWrite.md)| The new Message resource | [optional]

### Return type

[**\VentureLeap\MessengerService\Model\MessageJsonldMessageRead**](../Model/MessageJsonldMessageRead.md)

### Authorization

[applicationId](../../README.md#applicationId)

### HTTP request headers

 - **Content-Type**: application/ld+json
 - **Accept**: application/ld+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

