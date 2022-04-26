# Apideck.OrderFulfillments

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** |  | [optional] 
`status` | **string** | The state of the fulfillment. | [optional] 
`type` | **string** |  | [optional] 
`pickup_details` | [**\Apideck\Client\Model\OrderPickupDetails**](OrderPickupDetails.md) |  | [optional] 
`shipment_details` | **object** |  | [optional] 





<a name="STATUS"></a>
## Enum: OrderFulfillments.status


* `PROPOSED` (value: `'proposed'`)

* `RESERVED` (value: `'reserved'`)

* `PREPARED` (value: `'prepared'`)

* `COMPLETED` (value: `'completed'`)

* `CANCELLED` (value: `'cancelled'`)

* `FAILED` (value: `'failed'`)

* `OTHER` (value: `'other'`)




<a name="TYPE"></a>
## Enum: OrderFulfillments.type


* `PICKUP` (value: `'pickup'`)

* `SHIPMENT` (value: `'shipment'`)




## Referenced Types:



* [`OrderPickupDetails`](OrderPickupDetails.md)


---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


