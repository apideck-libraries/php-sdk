# Apideck.HrisCompany

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`legal_name` | **string** |  | 
`id` | **string** | A unique identifier for an object. | [optional] 
`display_name` | **string** |  | [optional] 
`subdomain` | **string** |  | [optional] 
`status` | **string** |  | [optional] 
`company_number` | **string** | An Company Number, Company ID or Company Code, is a unique number that has been assigned to each company. | [optional] 
`addresses` | [**\Apideck\Client\Model\Address[]**](Address.md) |  | [optional] 
`phone_numbers` | [**\Apideck\Client\Model\PhoneNumber[]**](PhoneNumber.md) |  | [optional] 
`emails` | [**\Apideck\Client\Model\Email[]**](Email.md) |  | [optional] 
`websites` | [**\Apideck\Client\Model\Website[]**](Website.md) |  | [optional] 
`debtor_id` | **string** |  | [optional] 
`deleted` | **bool** |  | [optional] 
`updated_by` | **string** | The user who last updated the object. | [optional] 
`created_by` | **string** | The user who created the object. | [optional] 
`updated_at` | **\DateTime** | The date and time when the object was last updated. | [optional] 
`created_at` | **\DateTime** | The date and time when the object was created. | [optional] 





<a name="STATUS"></a>
## Enum: HrisCompany.status


* `ACTIVE` (value: `'active'`)

* `INACTIVE` (value: `'inactive'`)

* `TRIAL` (value: `'trial'`)

* `OTHER` (value: `'other'`)




## Referenced Types:






* [`Address`](Address.md)
* [`PhoneNumber`](PhoneNumber.md)
* [`Email`](Email.md)
* [`Website`](Website.md)







---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


