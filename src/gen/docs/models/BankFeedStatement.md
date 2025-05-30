# Apideck.BankFeedStatement

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** | A unique identifier for an object. | 
`bank_feed_account_id` | **string** | The ID of the bank feed account this statement belongs to. | [optional] 
`status` | **string** | The current status of the bank feed statement. | [optional] 
`start_date` | **\DateTime** | Start date of the bank feed statement. | [optional] 
`end_date` | **\DateTime** | End date of the bank feed statement. | [optional] 
`start_balance` | **float** | Balance amount at the start of the period. | [optional] 
`start_balance_credit_or_debit` | [**\Apideck\Client\Model\CreditOrDebit**](CreditOrDebit.md) |  | [optional] 
`end_balance` | **float** | Balance amount at the end of the period. | [optional] 
`end_balance_credit_or_debit` | [**\Apideck\Client\Model\CreditOrDebit**](CreditOrDebit.md) |  | [optional] 
`transactions` | [**\Apideck\Client\Model\BankFeedStatementTransactions[]**](BankFeedStatementTransactions.md) | List of transactions in the bank feed statement. | [optional] 
`created_at` | **\DateTime** | The date and time when the object was created. | [optional] 
`created_by` | **string** | The user who created the object. | [optional] 
`updated_at` | **\DateTime** | The date and time when the object was last updated. | [optional] 
`updated_by` | **string** | The user who last updated the object. | [optional] 





<a name="STATUS"></a>
## Enum: BankFeedStatement.status


* `PENDING` (value: `'pending'`)

* `REJECTED` (value: `'rejected'`)

* `SUCCESS` (value: `'success'`)




## Referenced Types:






* [`CreditOrDebit`](CreditOrDebit.md)

* [`CreditOrDebit`](CreditOrDebit.md)
* [`BankFeedStatementTransactions`](BankFeedStatementTransactions.md)





---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


