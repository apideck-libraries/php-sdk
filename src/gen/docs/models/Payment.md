# Apideck.Payment

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`total_amount` | **float** | Amount of payment | 
`transaction_date` | **\DateTime** | Date transaction was entered - YYYY:MM::DDThh:mm:ss.sTZD | 
`id` | **string** | Unique identifier representing the entity | [optional] 
`currency` | [**\Apideck\Client\Model\Currency**](Currency.md) |  | [optional] 
`currency_rate` | **float** | Currency Exchange Rate at the time entity was recorded/generated. | [optional] 
`reference` | **string** | Optional payment reference message ie: Debit remittance detail. | [optional] 
`payment_method` | **string** | Payment method | [optional] 
`payment_method_reference` | **string** | Optional reference message returned by payment method on processing | [optional] 
`accounts_receivable_account_type` | **string** | Type of accounts receivable account. | [optional] 
`accounts_receivable_account_id` | **string** | Unique identifier for the account to allocate payment to. | [optional] 
`account` | [**\Apideck\Client\Model\LinkedLedgerAccount**](LinkedLedgerAccount.md) |  | [optional] 
`customer` | [**\Apideck\Client\Model\LinkedCustomer**](LinkedCustomer.md) |  | [optional] 
`reconciled` | **bool** | Payment has been reconciled | [optional] 
`status` | **string** | Status of payment | [optional] 
`type` | **string** | Type of payment | [optional] 
`allocations` | **object[]** |  | [optional] 
`note` | **string** | Optional note to be associated with the payment. | [optional] 
`row_version` | **string** |  | [optional] 
`created_at` | **\DateTime** |  | [optional] 
`updated_at` | **\DateTime** |  | [optional] 





<a name="STATUS"></a>
## Enum: Payment.status


* `AUTHORISED` (value: `'authorised'`)

* `PAID` (value: `'paid'`)

* `VOIDED` (value: `'voided'`)

* `DELETED` (value: `'deleted'`)




<a name="TYPE"></a>
## Enum: Payment.type


* `RECEIVABLE` (value: `'accounts_receivable'`)

* `PAYABLE` (value: `'accounts_payable'`)

* `RECEIVABLE_CREDIT` (value: `'accounts_receivable_credit'`)

* `PAYABLE_CREDIT` (value: `'accounts_payable_credit'`)

* `RECEIVABLE_OVERPAYMENT` (value: `'accounts_receivable_overpayment'`)

* `PAYABLE_OVERPAYMENT` (value: `'accounts_payable_overpayment'`)

* `RECEIVABLE_PREPAYMENT` (value: `'accounts_receivable_prepayment'`)

* `PAYABLE_PREPAYMENT` (value: `'accounts_payable_prepayment'`)




## Referenced Types:



* [`Currency`](Currency.md)






* [`LinkedLedgerAccount`](LinkedLedgerAccount.md)
* [`LinkedCustomer`](LinkedCustomer.md)









---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


