# Apideck.Payment

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** | Unique identifier representing the entity | 
`total_amount` | **float** | Amount of payment | 
`transaction_date` | **\DateTime** | Date transaction was entered - YYYY:MM::DDThh:mm:ss.sTZD | 
`downstream_id` | **string** | The third-party API ID of original entity | [optional] 
`currency` | [**\Apideck\Client\Model\Currency**](Currency.md) |  | [optional] 
`currency_rate` | **float** | Currency Exchange Rate at the time entity was recorded/generated. | [optional] 
`reference` | **string** | Optional payment reference message ie: Debit remittance detail. | [optional] 
`payment_method` | **string** | Payment method name | [optional] 
`payment_method_reference` | **string** | Optional reference message returned by payment method on processing | [optional] 
`payment_method_id` | **string** | Unique identifier for the payment method. | [optional] 
`accounts_receivable_account_type` | **string** | Type of accounts receivable account. | [optional] 
`accounts_receivable_account_id` | **string** | Unique identifier for the account to allocate payment to. | [optional] 
`account` | [**\Apideck\Client\Model\LinkedLedgerAccount**](LinkedLedgerAccount.md) |  | [optional] 
`customer` | [**\Apideck\Client\Model\LinkedCustomer**](LinkedCustomer.md) |  | [optional] 
`supplier` | [**\Apideck\Client\Model\LinkedSupplier**](LinkedSupplier.md) |  | [optional] 
`company_id` | **string** | The company or subsidiary id the transaction belongs to | [optional] 
`reconciled` | **bool** | Payment has been reconciled | [optional] 
`status` | **string** | Status of payment | [optional] 
`type` | **string** | Type of payment | [optional] 
`allocations` | [**\Apideck\Client\Model\PaymentAllocations[]**](PaymentAllocations.md) |  | [optional] 
`note` | **string** | Optional note to be associated with the payment. | [optional] 
`row_version` | **string** | A binary value used to detect updates to a object and prevent data conflicts. It is incremented each time an update is made to the object. | [optional] 
`display_id` | **string** | Payment id to be displayed. | [optional] 
`custom_mappings` | **object** | When custom mappings are configured on the resource, the result is included here. | [optional] 
`updated_by` | **string** | The user who last updated the object. | [optional] 
`created_by` | **string** | The user who created the object. | [optional] 
`created_at` | **\DateTime** | The date and time when the object was created. | [optional] 
`updated_at` | **\DateTime** | The date and time when the object was last updated. | [optional] 





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
* [`LinkedSupplier`](LinkedSupplier.md)




* [`PaymentAllocations`](PaymentAllocations.md)









---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


