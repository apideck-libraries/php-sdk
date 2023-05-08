# Apideck.OrderDiscounts

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`type` | **string** |  | 
`id` | **string** | A unique identifier for an object. | [optional] 
`product_id` | **string** | A unique identifier for an object. | [optional] 
`name` | **string** |  | [optional] 
`amount` | **int** |  | [optional] 
`currency` | [**\Apideck\Client\Model\Currency**](Currency.md) |  | [optional] 
`scope` | **string** |  | [optional] 





<a name="TYPE"></a>
## Enum: OrderDiscounts.type


* `PERCENTAGE` (value: `'percentage'`)

* `FLAT_FEE` (value: `'flat_fee'`)




<a name="SCOPE"></a>
## Enum: OrderDiscounts.scope


* `ORDER` (value: `'order'`)

* `LINE_ITEM` (value: `'line_item'`)




## Referenced Types:





* [`Currency`](Currency.md)


---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


