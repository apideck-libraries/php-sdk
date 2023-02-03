# Apideck.Webhook

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`unified_api` | [**\Apideck\Client\Model\UnifiedApiId**](UnifiedApiId.md) |  | 
`status` | [**\Apideck\Client\Model\Status**](Status.md) |  | 
`delivery_url` | **string** | The delivery url of the webhook endpoint. | 
`execute_base_url` | **string** | The Unify Base URL events from connectors will be sent to after service id is appended. | 
`events` | [**\Apideck\Client\Model\WebhookEventType[]**](WebhookEventType.md) | The list of subscribed events for this webhook. [&#x60;*&#x60;] indicates that all events are enabled. | 
`id` | **string** |  | [optional] 
`description` | **string** | A description of the object. | [optional] 
`disabled_reason` | **string** | Indicates if the webhook has has been disabled as it reached its retry limit or if account is over the usage allocated by it's plan. | [optional] 
`updated_at` | **\DateTime** | The date and time when the object was last updated. | [optional] 
`created_at` | **\DateTime** | The date and time when the object was created. | [optional] 





<a name="DISABLED_REASON"></a>
## Enum: Webhook.disabled_reason


* `RETRY_LIMIT` (value: `'retry_limit'`)

* `USAGE_LIMIT` (value: `'usage_limit'`)




## Referenced Types:
* [`UnifiedApiId`](UnifiedApiId.md)
* [`Status`](Status.md)


* [`WebhookEventType`](WebhookEventType.md)






---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


