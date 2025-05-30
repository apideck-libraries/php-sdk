# Apideck.BankFeedStatementTransactions

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`posted_date` | **\DateTime** | The date of the transaction - YYYY:MM::DDThh:mm:ss.sTZD | 
`amount` | **float** | The amount of the transaction. | 
`credit_or_debit` | [**\Apideck\Client\Model\CreditOrDebit**](CreditOrDebit.md) |  | 
`source_transaction_id` | **string** | The ID of the source transaction. | 
`description` | **string** | A description of the transaction. | [optional] 
`counterparty` | **string** | The counterparty of the transaction. | [optional] 
`reference` | **string** | The reference of the transaction. | [optional] 
`transaction_type` | **string** | Type of transaction. | [optional] 





<a name="TRANSACTION_TYPE"></a>
## Enum: BankFeedStatementTransactions.transaction_type


* `CREDIT` (value: `'credit'`)

* `DEBIT` (value: `'debit'`)

* `DEPOSIT` (value: `'deposit'`)

* `TRANSFER` (value: `'transfer'`)

* `PAYMENT` (value: `'payment'`)

* `OTHER` (value: `'other'`)




## Referenced Types:


* [`CreditOrDebit`](CreditOrDebit.md)






---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


