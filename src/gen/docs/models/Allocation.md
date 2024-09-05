# Apideck.Allocation

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** | Unique identifier of entity this payment should be attributed to. | [optional] 
`type` | **string** | Type of entity this payment should be attributed to. | [optional] 
`code` | **string** |  | [optional] 
`amount` | **float** | Amount of payment that should be attributed to this allocation. If null, the total_amount will be used. | [optional] 
`allocation_id` | **string** | Unique identifier of the allocation | [optional] 





<a name="TYPE"></a>
## Enum: Allocation.type


* `INVOICE` (value: `'invoice'`)

* `ORDER` (value: `'order'`)

* `EXPENSE` (value: `'expense'`)

* `CREDIT_MEMO` (value: `'credit_memo'`)

* `OVER_PAYMENT` (value: `'over_payment'`)

* `PRE_PAYMENT` (value: `'pre_payment'`)

* `JOURNAL_ENTRY` (value: `'journal_entry'`)

* `OTHER` (value: `'other'`)

* `BILL` (value: `'bill'`)




---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


