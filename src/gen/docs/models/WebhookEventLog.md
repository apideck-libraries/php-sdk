# Apideck.WebhookEventLog

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** |  | [optional] 
`status_code` | **int** | HTTP Status code that was returned. | [optional] 
`success` | **bool** | Whether or not the request was successful. | [optional] 
`application_id` | **string** | ID of your Apideck Application | [optional] 
`consumer_id` | **string** | Unique consumer identifier. You can freely choose a consumer ID yourself. Most of the time, this is an ID of your internal data model that represents a user or account in your system (for example account:12345). If the consumer doesn't exist yet, Vault will upsert a consumer based on your ID. | [optional] 
`unified_api` | [**\Apideck\Client\Model\UnifiedApiId**](UnifiedApiId.md) |  | [optional] 
`service` | [**\Apideck\Client\Model\WebhookEventLogService**](WebhookEventLogService.md) |  | [optional] 
`endpoint` | **string** | The URL of the webhook endpoint. | [optional] 
`event_type` | **string** | Name of source event that webhook is subscribed to. | [optional] 
`execution_attempt` | **float** | Number of attempts webhook endpoint was called before a success was returned or eventually failed | [optional] 
`http_method` | **string** | HTTP Method of request to endpoint. | [optional] 
`timestamp` | **string** | ISO Date and time when the request was made. | [optional] 
`entity_type` | **string** | Name of the Entity described by the attributes delivered within payload | [optional] 
`request_body` | **string** | The JSON stringified payload that was delivered to the webhook endpoint. | [optional] 
`response_body` | **string** | The JSON stringified response that was returned from the webhook endpoint. | [optional] 
`retry_scheduled` | **bool** | If the request has not hit the max retry limit and will be retried. | [optional] 
`attempts` | [**\Apideck\Client\Model\WebhookEventLogAttempts[]**](WebhookEventLogAttempts.md) | record of each attempt to call webhook endpoint | [optional] 





## Referenced Types:





* [`UnifiedApiId`](UnifiedApiId.md)
* [`WebhookEventLogService`](WebhookEventLogService.md)









* [`WebhookEventLogAttempts`](WebhookEventLogAttempts.md)

---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


