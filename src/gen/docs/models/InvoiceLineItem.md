# Apideck.InvoiceLineItem

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** |  | [optional] 
`row_id` | **string** | Row ID | [optional] 
`code` | **string** | User defined item code | [optional] 
`line_number` | **int** | Line number in the invoice | [optional] 
`description` | **string** | User defined description | [optional] 
`type` | **string** | Item type | [optional] 
`tax_amount` | **float** | Tax amount | [optional] 
`total_amount` | **float** | Total amount of the line item | [optional] 
`quantity` | **float** |  | [optional] 
`unit_price` | **float** |  | [optional] 
`unit_of_measure` | **string** | Description of the unit type the item is sold as, ie: kg, hour. | [optional] 
`discount_percentage` | **float** | Discount percentage | [optional] 
`item` | [**\Apideck\Client\Model\LinkedInvoiceItem**](LinkedInvoiceItem.md) |  | [optional] 
`tax_rate` | [**\Apideck\Client\Model\LinkedTaxRate**](LinkedTaxRate.md) |  | [optional] 
`ledger_account` | [**\Apideck\Client\Model\LinkedLedgerAccount**](LinkedLedgerAccount.md) |  | [optional] 
`row_version` | **string** |  | [optional] 





<a name="TYPE"></a>
## Enum: InvoiceLineItem.type


* `SALES_ITEM` (value: `'sales_item'`)

* `DISCOUNT` (value: `'discount'`)

* `INFO` (value: `'info'`)

* `SUB_TOTAL` (value: `'sub_total'`)




## Referenced Types:












* [`LinkedInvoiceItem`](LinkedInvoiceItem.md)
* [`LinkedTaxRate`](LinkedTaxRate.md)
* [`LinkedLedgerAccount`](LinkedLedgerAccount.md)


---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


