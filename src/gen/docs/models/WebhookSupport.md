# Apideck.WebhookSupport

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`mode` | **string** | Mode of the webhook support. | [optional] 
`subscription_level` | **string** | Received events are scoped to connection or across integration. | [optional] 
`managed_via` | **string** | How the subscription is managed in the downstream. | [optional] 
`virtual_webhooks` | [**\Apideck\Client\Model\VirtualWebhooks**](VirtualWebhooks.md) |  | [optional] 





<a name="MODE"></a>
## Enum: WebhookSupport.mode


* `NATIVE` (value: `'native'`)

* `VIRTUAL` (value: `'virtual'`)

* `NONE` (value: `'none'`)




<a name="SUBSCRIPTION_LEVEL"></a>
## Enum: WebhookSupport.subscription_level


* `CONNECTION` (value: `'connection'`)

* `INTEGRATION` (value: `'integration'`)




<a name="MANAGED_VIA"></a>
## Enum: WebhookSupport.managed_via


* `MANUAL` (value: `'manual'`)

* `API` (value: `'api'`)




## Referenced Types:



* [`VirtualWebhooks`](VirtualWebhooks.md)

---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


