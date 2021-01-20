# MessageJsonldMessageRead

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**context** | **string** |  | [optional] 
**id** | **string** |  | [optional] 
**type** | **string** |  | [optional] 
**uuid** | **string** |  | [optional] 
**content** | **string** | The HTML-Email if not using a template. | [optional] 
**message_type** | **string** | Message channel: \&quot;email\&quot; or \&quot;sms\&quot; | 
**subject** | **string** | email subject | [optional] 
**template** | **string** | The iri of the previously created template. e.g. \&quot;/templates/38f39c64-1e87-11eb-a752-3085a99d0980\&quot; | [optional] 
**contact** | **string[]** | Contact information of the recipient. Either email or phoneNumber is required. | 
**application_id** | **string** |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**active** | **bool** |  | [optional] 
**deleted** | **bool** |  | [optional] 
**custom_data** | **object** |  | [optional] 
**status** | **string** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

