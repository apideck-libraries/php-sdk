# Apideck.Merchant

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** | A unique identifier for an object. | [optional] 
`name` | **string** | The name of the merchant | [optional] 
`address` | [**\Apideck\Client\Model\Address**](Address.md) |  | [optional] 
`owner_id` | **string** |  | [optional] 
`main_location_id` | **string** | The main location ID of the merchant | [optional] 
`status` | **string** | Status of this merchant. | [optional] 
`service_charges` | [**\Apideck\Client\Model\ServiceCharge[]**](ServiceCharge.md) |  | [optional] 
`language` | **string** | language code according to ISO 639-1. For the United States - EN | [optional] 
`currency` | [**\Apideck\Client\Model\Currency**](Currency.md) |  | [optional] 
`updated_by` | **string** | The user who last updated the object. | [optional] 
`created_by` | **string** | The user who created the object. | [optional] 
`updated_at` | **\DateTime** | The date and time when the object was last updated. | [optional] 
`created_at` | **\DateTime** | The date and time when the object was created. | [optional] 





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


