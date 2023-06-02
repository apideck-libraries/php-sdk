# Apideck.JournalEntryLineItem

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`type` | **string** | Debit entries are considered positive, and credit entries are considered negative. | 
`ledger_account` | [**\Apideck\Client\Model\LinkedLedgerAccount**](LinkedLedgerAccount.md) |  | 
`id` | **string** | A unique identifier for an object. | [optional] 
`description` | **string** | User defined description | [optional] 
`tax_amount` | **float** | Tax amount | [optional] 
`sub_total` | **float** | Sub-total amount, normally before tax. | [optional] 
`total_amount` | **float** | Debit entries are considered positive, and credit entries are considered negative. | [optional] 
`tax_rate` | [**\Apideck\Client\Model\LinkedTaxRate**](LinkedTaxRate.md) |  | [optional] 
`tracking_category` | [**\Apideck\Client\Model\LinkedTrackingCategory**](LinkedTrackingCategory.md) |  | [optional] 
`department_id` | **string** | A unique identifier for an object. | [optional] 
`location_id` | **string** | A unique identifier for an object. | [optional] 





<a name="TYPE"></a>
## Enum: JournalEntryLineItem.type


* `DEBIT` (value: `'debit'`)

* `CREDIT` (value: `'credit'`)




## Referenced Types:

* [`LinkedLedgerAccount`](LinkedLedgerAccount.md)





* [`LinkedTaxRate`](LinkedTaxRate.md)
* [`LinkedTrackingCategory`](LinkedTrackingCategory.md)



---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


