# Apideck.BankFeedAccount

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** | A unique identifier for an object. | 
`bank_account_type` | **string** | Type of the bank account. | [optional] 
`source_account_id` | **string** | The source account's unique identifier. | [optional] 
`target_account_id` | **string** | The target account's unique identifier in the accounting connector. | [optional] 
`target_account_name` | **string** | Name associated with the target account. | [optional] 
`target_account_number` | **string** | Account number of the destination bank account. | [optional] 
`currency` | [**\Apideck\Client\Model\Currency**](Currency.md) |  | [optional] 
`feed_status` | **string** | Current status of the bank feed. | [optional] 
`country` | **string** | Country code according to ISO 3166-1 alpha-2. | [optional] 
`custom_fields` | [**\Apideck\Client\Model\CustomField[]**](CustomField.md) |  | [optional] 
`custom_mappings` | **array&lt;string,object&gt;** | When custom mappings are configured on the resource, the result is included here. | [optional] 
`created_at` | **\DateTime** | The date and time when the object was created. | [optional] 
`updated_at` | **\DateTime** | The date and time when the object was last updated. | [optional] 
`updated_by` | **string** | The user who last updated the object. | [optional] 
`created_by` | **string** | The user who created the object. | [optional] 





<a name="BANK_ACCOUNT_TYPE"></a>
## Enum: BankFeedAccount.bank_account_type


* `BANK` (value: `'bank'`)

* `CREDIT_CARD` (value: `'credit_card'`)




<a name="FEED_STATUS"></a>
## Enum: BankFeedAccount.feed_status


* `PENDING` (value: `'pending'`)

* `REJECTED` (value: `'rejected'`)




## Referenced Types:






* [`Currency`](Currency.md)


* [`CustomField`](CustomField.md)






---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


