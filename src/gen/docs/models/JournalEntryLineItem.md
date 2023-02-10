# Apideck.JournalEntryLineItem

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`total_amount` | **float** | Debit entries are considered positive, and credit entries are considered negative. | 
`type` | **string** | Debit entries are considered positive, and credit entries are considered negative. | 
`ledger_account` | [**\Apideck\Client\Model\LinkedLedgerAccount**](LinkedLedgerAccount.md) |  | 
`id` | **string** | A unique identifier for an object. | [optional] 
`description` | **string** | User defined description | [optional] 
`tax_amount` | **float** | Tax amount | [optional] 
`tax_rate` | [**\Apideck\Client\Model\LinkedTaxRate**](LinkedTaxRate.md) |  | [optional] 
`linked_tracking_category` | [**\Apideck\Client\Model\LinkedLedgerAccount**](LinkedLedgerAccount.md) |  | [optional] 





<a name="TYPE"></a>
## Enum: JournalEntryLineItem.type


* `DEBIT` (value: `'debit'`)

* `CREDIT` (value: `'credit'`)




## Referenced Types:


* [`LinkedLedgerAccount`](LinkedLedgerAccount.md)



* [`LinkedTaxRate`](LinkedTaxRate.md)
* [`LinkedLedgerAccount`](LinkedLedgerAccount.md)

---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


