# Apideck.Message

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`from` | **string** | The phone number that initiated the message. | 
`to` | **string** | The phone number that received the message. | 
`body` | **string** | The message text. | 
`id` | **string** | A unique identifier for an object. | [optional] 
`subject` | **string** |  | [optional] 
`type` | **string** | Set to sms for SMS messages and mms for MMS messages. | [optional] 
`number_of_units` | **int** | The number of units that make up the complete message. Messages can be split up due to the constraints of the message size. | [optional] 
`number_of_media_files` | **int** | The number of media files associated with the message. | [optional] 
`direction` | **string** | The direction of the message. | [optional] 
`status` | **string** | Status of the delivery of the message. | [optional] 
`scheduled_at` | **\DateTime** | The scheduled date and time of the message. | [optional] 
`sent_at` | **\DateTime** | The date and time that the message was sent | [optional] 
`webhook_url` | **string** | Define a webhook to receive delivery notifications. | [optional] 
`reference` | **string** | A client reference. | [optional] 
`price` | [**\Apideck\Client\Model\Price**](Price.md) |  | [optional] 
`error` | [**\Apideck\Client\Model\Error**](Error.md) |  | [optional] 
`messaging_service_id` | **string** | The ID of the Messaging Service used with the message. In case of Plivo this links to the Powerpack ID. | [optional] 
`custom_mappings` | **object** | When custom mappings are configured on the resource, the result is included here. | [optional] 
`updated_by` | **string** | The user who last updated the object. | [optional] 
`created_by` | **string** | The user who created the object. | [optional] 
`updated_at` | **\DateTime** | The date and time when the object was last updated. | [optional] 
`created_at` | **\DateTime** | The date and time when the object was created. | [optional] 





<a name="TYPE"></a>
## Enum: Message.type


* `SMS` (value: `'sms'`)

* `MMS` (value: `'mms'`)




<a name="DIRECTION"></a>
## Enum: Message.direction


* `INBOUND` (value: `'inbound'`)

* `OUTBOUND_API` (value: `'outbound-api'`)

* `OUTBOUND_CALL` (value: `'outbound-call'`)

* `OUTBOUND_REPLY` (value: `'outbound-reply'`)

* `UNKNOWN` (value: `'unknown'`)




<a name="STATUS"></a>
## Enum: Message.status


* `ACCEPTED` (value: `'accepted'`)

* `SCHEDULED` (value: `'scheduled'`)

* `CANCELED` (value: `'canceled'`)

* `QUEUED` (value: `'queued'`)

* `SENDING` (value: `'sending'`)

* `SENT` (value: `'sent'`)

* `FAILED` (value: `'failed'`)

* `DELIVERED` (value: `'delivered'`)

* `UNDELIVERED` (value: `'undelivered'`)

* `RECEIVING` (value: `'receiving'`)

* `RECEIVED` (value: `'received'`)

* `READ` (value: `'read'`)




## Referenced Types:














* [`Price`](Price.md)
* [`Error`](Error.md)







---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


