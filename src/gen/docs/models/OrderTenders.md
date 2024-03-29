# Apideck.OrderTenders

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** | A unique identifier for an object. | [optional] 
`name` | **string** |  | [optional] 
`type` | **string** |  | [optional] 
`note` | **string** |  | [optional] 
`amount` | **float** |  | [optional] 
`percentage` | **float** |  | [optional] 
`currency` | [**\Apideck\Client\Model\Currency**](Currency.md) |  | [optional] 
`total_amount` | **int** |  | [optional] 
`total_tip` | **int** |  | [optional] 
`total_processing_fee` | **int** |  | [optional] 
`total_tax` | **int** |  | [optional] 
`total_discount` | **int** |  | [optional] 
`total_refund` | **int** |  | [optional] 
`total_service_charge` | **int** |  | [optional] 
`buyer_tendered_cash_amount` | **int** | The amount (in cents) of cash tendered by the buyer. Only applicable when the tender type is cash. | [optional] 
`change_back_cash_amount` | **int** | The amount (in cents) of cash returned to the buyer. Only applicable when the tender type is cash. | [optional] 
`card` | [**\Apideck\Client\Model\PaymentCard**](PaymentCard.md) |  | [optional] 
`card_status` | **string** | The status of the card. Only applicable when the tender type is card. | [optional] 
`card_entry_method` | **string** | The entry method of the card. Only applicable when the tender type is card. | [optional] 
`payment_id` | **string** | A unique identifier for an object. | [optional] 
`location_id` | **string** | A unique identifier for an object. | [optional] 
`transaction_id` | **string** | A unique identifier for an object. | [optional] 





<a name="TYPE"></a>
## Enum: OrderTenders.type


* `CASH` (value: `'cash'`)

* `CARD` (value: `'card'`)

* `OTHER` (value: `'other'`)




<a name="CARD_STATUS"></a>
## Enum: OrderTenders.card_status


* `AUTHORIZED` (value: `'authorized'`)

* `CAPTURED` (value: `'captured'`)

* `FAILED` (value: `'failed'`)

* `VOIDED` (value: `'voided'`)




<a name="CARD_ENTRY_METHOD"></a>
## Enum: OrderTenders.card_entry_method


* `EVM` (value: `'evm'`)

* `SWIPED` (value: `'swiped'`)

* `KEYED` (value: `'keyed'`)

* `ON_FILE` (value: `'on-file'`)

* `CONTACTLESS` (value: `'contactless'`)




## Referenced Types:






* [`Currency`](Currency.md)









* [`PaymentCard`](PaymentCard.md)






---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


