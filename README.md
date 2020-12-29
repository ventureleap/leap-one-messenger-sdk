# SwaggerClient-php
No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/ventureleap/leap-one-messenger-sdk.git"
    }
  ],
  "require": {
    "ventureleap/leap-one-messenger-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = VentureLeap\MessengerService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\MessengerService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\MessengerService\Api\ConfigurationEntryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $apiInstance->deleteConfigurationEntryItem($id);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationEntryApi->deleteConfigurationEntryItem: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: apiKey
$config = VentureLeap\MessengerService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\MessengerService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\MessengerService\Api\ConfigurationEntryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | 
$value = "value_example"; // string | 
$application_id = "application_id_example"; // string | 
$page = 1; // int | The collection page number
$items_per_page = 30; // int | The number of items per page
$pagination = true; // bool | Enable or disable pagination

try {
    $result = $apiInstance->getConfigurationEntryCollection($key, $value, $application_id, $page, $items_per_page, $pagination);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationEntryApi->getConfigurationEntryCollection: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: apiKey
$config = VentureLeap\MessengerService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\MessengerService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\MessengerService\Api\ConfigurationEntryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getConfigurationEntryItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationEntryApi->getConfigurationEntryItem: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: apiKey
$config = VentureLeap\MessengerService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\MessengerService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\MessengerService\Api\ConfigurationEntryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \VentureLeap\MessengerService\Model\ConfigurationEntryJsonldConfigurationWrite(); // \VentureLeap\MessengerService\Model\ConfigurationEntryJsonldConfigurationWrite | The new ConfigurationEntry resource

try {
    $result = $apiInstance->postConfigurationEntryCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationEntryApi->postConfigurationEntryCollection: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: apiKey
$config = VentureLeap\MessengerService\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = VentureLeap\MessengerService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new VentureLeap\MessengerService\Api\ConfigurationEntryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$body = new \VentureLeap\MessengerService\Model\ConfigurationEntryJsonldConfigurationWrite(); // \VentureLeap\MessengerService\Model\ConfigurationEntryJsonldConfigurationWrite | The updated ConfigurationEntry resource

try {
    $result = $apiInstance->putConfigurationEntryItem($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationEntryApi->putConfigurationEntryItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to */*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ConfigurationEntryApi* | [**deleteConfigurationEntryItem**](docs/Api/ConfigurationEntryApi.md#deleteconfigurationentryitem) | **DELETE** /messenger/configuration_entries/{id} | Removes the ConfigurationEntry resource.
*ConfigurationEntryApi* | [**getConfigurationEntryCollection**](docs/Api/ConfigurationEntryApi.md#getconfigurationentrycollection) | **GET** /messenger/configuration_entries | Retrieves the collection of ConfigurationEntry resources.
*ConfigurationEntryApi* | [**getConfigurationEntryItem**](docs/Api/ConfigurationEntryApi.md#getconfigurationentryitem) | **GET** /messenger/configuration_entries/{id} | Retrieves a ConfigurationEntry resource.
*ConfigurationEntryApi* | [**postConfigurationEntryCollection**](docs/Api/ConfigurationEntryApi.md#postconfigurationentrycollection) | **POST** /messenger/configuration_entries | Creates a ConfigurationEntry resource.
*ConfigurationEntryApi* | [**putConfigurationEntryItem**](docs/Api/ConfigurationEntryApi.md#putconfigurationentryitem) | **PUT** /messenger/configuration_entries/{id} | Replaces the ConfigurationEntry resource.
*MessageApi* | [**deleteMessageItem**](docs/Api/MessageApi.md#deletemessageitem) | **DELETE** /messenger/messages/{id} | Removes the Message resource.
*MessageApi* | [**getMessageCollection**](docs/Api/MessageApi.md#getmessagecollection) | **GET** /messenger/messages | Retrieves the collection of Message resources.
*MessageApi* | [**getMessageItem**](docs/Api/MessageApi.md#getmessageitem) | **GET** /messenger/messages/{id} | Retrieves a Message resource.
*MessageApi* | [**postMessageCollection**](docs/Api/MessageApi.md#postmessagecollection) | **POST** /messenger/messages | Creates a Message resource.
*TemplateApi* | [**deleteTemplateItem**](docs/Api/TemplateApi.md#deletetemplateitem) | **DELETE** /messenger/templates/{id} | Removes the Template resource.
*TemplateApi* | [**getTemplateCollection**](docs/Api/TemplateApi.md#gettemplatecollection) | **GET** /messenger/templates | Retrieves the collection of Template resources.
*TemplateApi* | [**getTemplateItem**](docs/Api/TemplateApi.md#gettemplateitem) | **GET** /messenger/templates/{id} | Retrieves a Template resource.
*TemplateApi* | [**postTemplateCollection**](docs/Api/TemplateApi.md#posttemplatecollection) | **POST** /messenger/templates | Creates a Template resource.
*TemplateApi* | [**putTemplateItem**](docs/Api/TemplateApi.md#puttemplateitem) | **PUT** /messenger/templates/{id} | Replaces the Template resource.

## Documentation For Models

 - [AnyOfMessageJsonldMessageReadTemplate](docs/Model/AnyOfMessageJsonldMessageReadTemplate.md)
 - [ConfigurationEntryJsonldConfigurationRead](docs/Model/ConfigurationEntryJsonldConfigurationRead.md)
 - [ConfigurationEntryJsonldConfigurationWrite](docs/Model/ConfigurationEntryJsonldConfigurationWrite.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse200Hydrasearch](docs/Model/InlineResponse200Hydrasearch.md)
 - [InlineResponse200HydrasearchHydramapping](docs/Model/InlineResponse200HydrasearchHydramapping.md)
 - [InlineResponse200Hydraview](docs/Model/InlineResponse200Hydraview.md)
 - [MessageJsonldMessageRead](docs/Model/MessageJsonldMessageRead.md)
 - [MessageJsonldMessageWrite](docs/Model/MessageJsonldMessageWrite.md)
 - [TemplateJsonldMessageRead](docs/Model/TemplateJsonldMessageRead.md)
 - [TemplateJsonldTemplateRead](docs/Model/TemplateJsonldTemplateRead.md)
 - [TemplateJsonldTemplateWrite](docs/Model/TemplateJsonldTemplateWrite.md)

## Documentation For Authorization


## 0

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header

## apiKey

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Author



