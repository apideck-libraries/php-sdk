# Apideck.Merchant

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** |  | [optional] 
`name` | **string** | The name of the merchant | [optional] 
`address` | [**\Apideck\Client\Model\Address**](Address.md) |  | [optional] 
`owner_id` | **string** |  | [optional] 
`main_location_id` | **string** | The main location ID of the merchant | [optional] 
`status` | **string** | Status of this merchant. | [optional] 
`service_charges` | [**\Apideck\Client\Model\ServiceCharge[]**](ServiceCharge.md) |  | [optional] 
`language` | **string** | language code according to ISO 639-1. For the United States - EN | [optional] 
`currency` | [**\Apideck\Client\Model\Currency**](Currency.md) |  | [optional] 
`updated_by` | **string** |  | [optional] 
`created_by` | **string** |  | [optional] 
`updated_at` | **\DateTime** |  | [optional] 
`created_at` | **\DateTime** |  | [optional] 





<a name="STATUS"></a>
## Enum: Merchant.status


* `ACTIVE` (value: `'active'`)

* `INACTIVE` (value: `'inactive'`)

* `OTHER` (value: `'other'`)




## Referenced Types:


* [`Address`](Address.md)



* [`ServiceCharge`](ServiceCharge.md)

* [`Currency`](Currency.md)





---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


