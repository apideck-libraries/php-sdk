# Apideck.AccountingLocation

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** | A unique identifier for an object. | [optional] 
`parent_id` | **string** | A unique identifier for an object. | [optional] 
`company_name` | **string** | The name of the company. | [optional] 
`display_name` | **string** | The display name of the location. | [optional] 
`status` | **string** | Based on the status some functionality is enabled or disabled. | [optional] 
`addresses` | [**\Apideck\Client\Model\Address[]**](Address.md) |  | [optional] 
`subsidiaries` | [**\Apideck\Client\Model\SubsidiaryReference[]**](SubsidiaryReference.md) |  | [optional] 
`custom_mappings` | **object** | When custom mappings are configured on the resource, the result is included here. | [optional] 
`row_version` | **string** | A binary value used to detect updates to a object and prevent data conflicts. It is incremented each time an update is made to the object. | [optional] 
`updated_by` | **string** | The user who last updated the object. | [optional] 
`created_by` | **string** | The user who created the object. | [optional] 
`updated_at` | **\DateTime** | The date and time when the object was last updated. | [optional] 
`created_at` | **\DateTime** | The date and time when the object was created. | [optional] 





<a name="STATUS"></a>
## Enum: AccountingLocation.status


* `ACTIVE` (value: `'active'`)

* `INACTIVE` (value: `'inactive'`)




## Referenced Types:





* [`Address`](Address.md)
* [`SubsidiaryReference`](SubsidiaryReference.md)







---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


