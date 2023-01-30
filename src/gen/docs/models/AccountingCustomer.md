# Apideck.AccountingCustomer

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** |  | [optional] 
`downstream_id` | **string** | The third-party API ID of original entity | [optional] 
`display_id` | **string** | Display ID | [optional] 
`display_name` | **string** | Display name | [optional] 
`company_name` | **string** |  | [optional] 
`title` | **string** |  | [optional] 
`first_name` | **string** |  | [optional] 
`middle_name` | **string** |  | [optional] 
`last_name` | **string** |  | [optional] 
`suffix` | **string** |  | [optional] 
`individual` | **bool** | Is this an individual or business customer | [optional] 
`addresses` | [**\Apideck\Client\Model\Address[]**](Address.md) |  | [optional] 
`phone_numbers` | [**\Apideck\Client\Model\PhoneNumber[]**](PhoneNumber.md) |  | [optional] 
`emails` | [**\Apideck\Client\Model\Email[]**](Email.md) |  | [optional] 
`websites` | [**\Apideck\Client\Model\Website[]**](Website.md) |  | [optional] 
`bank_accounts` | [**\Apideck\Client\Model\BankAccount[]**](BankAccount.md) |  | [optional] 
`notes` | **string** | Some notes about this customer | [optional] 
`tax_rate` | [**\Apideck\Client\Model\LinkedTaxRate**](LinkedTaxRate.md) |  | [optional] 
`tax_number` | **string** |  | [optional] 
`currency` | [**\Apideck\Client\Model\Currency**](Currency.md) |  | [optional] 
`account` | [**\Apideck\Client\Model\LinkedLedgerAccount**](LinkedLedgerAccount.md) |  | [optional] 
`status` | **string** | Customer status | [optional] 
`updated_by` | **string** |  | [optional] 
`created_by` | **string** |  | [optional] 
`updated_at` | **\DateTime** |  | [optional] 
`created_at` | **\DateTime** |  | [optional] 
`row_version` | **string** |  | [optional] 





<a name="STATUS"></a>
## Enum: AccountingCustomer.status


* `ACTIVE` (value: `'active'`)

* `INACTIVE` (value: `'inactive'`)

* `ARCHIVED` (value: `'archived'`)

* `GDPR_ERASURE_REQUEST` (value: `'gdpr-erasure-request'`)

* `UNKNOWN` (value: `'unknown'`)




## Referenced Types:











* [`Address`](Address.md)
* [`PhoneNumber`](PhoneNumber.md)
* [`Email`](Email.md)
* [`Website`](Website.md)
* [`BankAccount`](BankAccount.md)

* [`LinkedTaxRate`](LinkedTaxRate.md)

* [`Currency`](Currency.md)
* [`LinkedLedgerAccount`](LinkedLedgerAccount.md)







---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


