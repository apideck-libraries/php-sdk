# Apideck.Bill

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** |  | [optional] 
`downstream_id` | **string** | The third-party API ID of original entity | [optional] 
`supplier` | [**\Apideck\Client\Model\LinkedSupplier**](LinkedSupplier.md) |  | [optional] 
`currency` | [**\Apideck\Client\Model\Currency**](Currency.md) |  | [optional] 
`currency_rate` | **float** | Currency Exchange Rate at the time entity was recorded/generated. | [optional] 
`tax_inclusive` | **bool** | Amounts are including tax | [optional] 
`bill_date` | **\DateTime** | Date bill was issued - YYYY-MM-DD. | [optional] 
`due_date` | **\DateTime** | The due date is the date on which a payment is scheduled to be received by the supplier - YYYY-MM-DD. | [optional] 
`po_number` | **string** | A PO Number uniquely identifies a purchase order and is generally defined by the buyer. The buyer will match the PO number in the invoice to the Purchase Order. | [optional] 
`line_items` | [**\Apideck\Client\Model\InvoiceLineItem[]**](InvoiceLineItem.md) |  | [optional] 
`terms` | **string** | Terms of payment. | [optional] 
`balance` | **float** | Balance of bill due. | [optional] 
`total` | **float** | Total amount of bill, including tax. | [optional] 
`tax_code` | **string** | Applicable tax id/code override if tax is not supplied on a line item basis. | [optional] 
`notes` | **string** |  | [optional] 
`status` | **string** | Invoice status | [optional] 
`ledger_account` | [**\Apideck\Client\Model\LinkedLedgerAccount**](LinkedLedgerAccount.md) |  | [optional] 
`updated_by` | **string** |  | [optional] 
`created_by` | **string** |  | [optional] 
`updated_at` | **\DateTime** |  | [optional] 
`created_at` | **\DateTime** |  | [optional] 
`row_version` | **string** |  | [optional] 





<a name="STATUS"></a>
## Enum: Bill.status


* `DRAFT` (value: `'draft'`)

* `SUBMITTED` (value: `'submitted'`)

* `AUTHORISED` (value: `'authorised'`)

* `PARTIALLY_PAID` (value: `'partially_paid'`)

* `PAID` (value: `'paid'`)

* `VOID` (value: `'void'`)

* `CREDIT` (value: `'credit'`)

* `DELETED` (value: `'deleted'`)




## Referenced Types:


* [`LinkedSupplier`](LinkedSupplier.md)
* [`Currency`](Currency.md)





* [`InvoiceLineItem`](InvoiceLineItem.md)






* [`LinkedLedgerAccount`](LinkedLedgerAccount.md)






---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


