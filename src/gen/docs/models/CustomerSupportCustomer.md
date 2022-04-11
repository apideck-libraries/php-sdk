# Apideck.CustomerSupportCustomer

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** |  | [optional] 
`company_name` | **string** |  | [optional] 
`first_name` | **string** |  | [optional] 
`last_name` | **string** |  | [optional] 
`individual` | **bool** |  | [optional] 
`addresses` | [**\Apideck\Client\Model\Address[]**](Address.md) |  | [optional] 
`notes` | **string** |  | [optional] 
`phone_numbers` | [**\Apideck\Client\Model\PhoneNumber[]**](PhoneNumber.md) |  | [optional] 
`emails` | [**\Apideck\Client\Model\Email[]**](Email.md) |  | [optional] 
`tax_number` | **string** |  | [optional] 
`currency` | [**\Apideck\Client\Model\Currency**](Currency.md) |  | [optional] 
`bank_accounts` | [**\Apideck\Client\Model\BankAccount**](BankAccount.md) |  | [optional] 
`status` | **string** | Customer status | [optional] 
`updated_by` | **string** |  | [optional] 
`created_by` | **string** |  | [optional] 
`updated_at` | **\DateTime** |  | [optional] 
`created_at` | **\DateTime** |  | [optional] 





<a name="STATUS"></a>
## Enum: CustomerSupportCustomer.status


* `ACTIVE` (value: `'active'`)

* `ARCHIVED` (value: `'archived'`)

* `GDPR_ERASURE_REQUEST` (value: `'gdpr-erasure-request'`)

* `UNKNOWN` (value: `'unknown'`)




## Referenced Types:





* [`Address`](Address.md)

* [`PhoneNumber`](PhoneNumber.md)
* [`Email`](Email.md)

* [`Currency`](Currency.md)
* [`BankAccount`](BankAccount.md)






---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


