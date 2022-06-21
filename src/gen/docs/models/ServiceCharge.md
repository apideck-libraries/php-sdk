# Apideck.ServiceCharge

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** |  | [optional] 
`name` | **string** | Service charge name | [optional] 
`amount` | **float** |  | [optional] 
`percentage` | **float** | Service charge percentage. Use this field to calculate the amount of the service charge. Pass a percentage and amount at the same time. | [optional] 
`currency` | [**\Apideck\Client\Model\Currency**](Currency.md) |  | [optional] 
`active` | **bool** |  | [optional] 
`type` | **string** | The type of the service charge. | [optional] 





<a name="TYPE"></a>
## Enum: ServiceCharge.type


* `AUTO_GRATUITY` (value: `'auto_gratuity'`)

* `CUSTOM` (value: `'custom'`)




## Referenced Types:




* [`Currency`](Currency.md)



---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


