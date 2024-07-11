# Apideck.Customer

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** | A unique identifier for an object. | 
`downstream_id` | **string** | The third-party API ID of original entity | [optional] 
`display_id` | **string** | Display ID | [optional] 
`display_name` | **string** | Display name | [optional] 
`company_name` | **string** | The name of the company. | [optional] 
`company_id` | **string** | The company or subsidiary id the transaction belongs to | [optional] 
`title` | **string** | The job title of the person. | [optional] 
`first_name` | **string** | The first name of the person. | [optional] 
`middle_name` | **string** | Middle name of the person. | [optional] 
`last_name` | **string** | The last name of the person. | [optional] 
`suffix` | **string** |  | [optional] 
`individual` | **bool** | Is this an individual or business customer | [optional] 
`project` | **bool** | If true, indicates this is a Project. | [optional] 
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
`parent` | [**\Apideck\Client\Model\LinkedParentCustomer**](LinkedParentCustomer.md) |  | [optional] 
`status` | **string** | Customer status | [optional] 
`payment_method` | **string** | Payment method used for the transaction, such as cash, credit card, bank transfer, or check | [optional] 
`channel` | **string** | The channel through which the transaction is processed. | [optional] 
`custom_mappings` | **object** | When custom mappings are configured on the resource, the result is included here. | [optional] 
`updated_by` | **string** | The user who last updated the object. | [optional] 
`created_by` | **string** | The user who created the object. | [optional] 
`updated_at` | **\DateTime** | The date and time when the object was last updated. | [optional] 
`created_at` | **\DateTime** | The date and time when the object was created. | [optional] 
`row_version` | **string** | A binary value used to detect updates to a object and prevent data conflicts. It is incremented each time an update is made to the object. | [optional] 
`pass_through` | **object[]** | The pass_through property allows passing service-specific, custom data or structured modifications in request body when creating or updating resources. | [optional] 





<a name="STATUS"></a>
## Enum: Customer.status


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
* [`LinkedParentCustomer`](LinkedParentCustomer.md)











---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


