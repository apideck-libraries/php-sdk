# Apideck.PurchaseOrder

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** | A unique identifier for an object. | [optional] 
`downstream_id` | **string** | The third-party API ID of original entity | [optional] 
`po_number` | **string** | A PO Number uniquely identifies a purchase order and is generally defined by the buyer. | [optional] 
`reference` | **string** | Optional purchase order reference. | [optional] 
`supplier` | [**\Apideck\Client\Model\LinkedSupplier**](LinkedSupplier.md) |  | [optional] 
`company_id` | **string** | The company or subsidiary id the transaction belongs to | [optional] 
`status` | **string** |  | [optional] 
`issued_date` | **\DateTime** | Date purchase order was issued - YYYY-MM-DD. | [optional] 
`delivery_date` | **\DateTime** | The date on which the purchase order is to be delivered - YYYY-MM-DD. | [optional] 
`expected_arrival_date` | **\DateTime** | The date on which the order is expected to arrive - YYYY-MM-DD. | [optional] 
`currency` | [**\Apideck\Client\Model\Currency**](Currency.md) |  | [optional] 
`currency_rate` | **float** | Currency Exchange Rate at the time entity was recorded/generated. | [optional] 
`sub_total` | **float** | Sub-total amount, normally before tax. | [optional] 
`total_tax` | **float** | Total tax amount applied to this invoice. | [optional] 
`total` | **float** | Total amount of invoice, including tax. | [optional] 
`tax_inclusive` | **bool** | Amounts are including tax | [optional] 
`line_items` | [**\Apideck\Client\Model\InvoiceLineItem[]**](InvoiceLineItem.md) |  | [optional] 
`shipping_address` | [**\Apideck\Client\Model\Address**](Address.md) |  | [optional] 
`ledger_account` | [**\Apideck\Client\Model\LinkedLedgerAccount**](LinkedLedgerAccount.md) |  | [optional] 
`template_id` | **string** | Optional purchase order template | [optional] 
`discount_percentage` | **float** | Discount percentage applied to this transaction. | [optional] 
`bank_account` | [**\Apideck\Client\Model\BankAccount**](BankAccount.md) |  | [optional] 
`accounting_by_row` | **bool** | Indicates if accounting by row is used (true) or not (false). Accounting by row means that a separate ledger transaction is created for each row. | [optional] 
`due_date` | **\DateTime** | The due date is the date on which a payment is scheduled to be received - YYYY-MM-DD. | [optional] 
`payment_method` | **string** | Payment method used for the transaction, such as cash, credit card, bank transfer, or check | [optional] 
`tax_code` | **string** | Applicable tax id/code override if tax is not supplied on a line item basis. | [optional] 
`channel` | **string** | The channel through which the transaction is processed. | [optional] 
`memo` | **string** | Message for the supplier. This text appears on the Purchase Order. | [optional] 
`custom_mappings` | **object** | When custom mappings are configured on the resource, the result is included here. | [optional] 
`row_version` | **string** | A binary value used to detect updates to a object and prevent data conflicts. It is incremented each time an update is made to the object. | [optional] 
`updated_by` | **string** | The user who last updated the object. | [optional] 
`created_by` | **string** | The user who created the object. | [optional] 
`updated_at` | **\DateTime** | The date and time when the object was last updated. | [optional] 
`created_at` | **\DateTime** | The date and time when the object was created. | [optional] 





<a name="STATUS"></a>
## Enum: PurchaseOrder.status


* `DRAFT` (value: `'draft'`)

* `OPEN` (value: `'open'`)

* `CLOSED` (value: `'closed'`)

* `DELETED` (value: `'deleted'`)

* `BILLED` (value: `'billed'`)

* `OTHER` (value: `'other'`)




## Referenced Types:




* [`LinkedSupplier`](LinkedSupplier.md)





* [`Currency`](Currency.md)





* [`InvoiceLineItem`](InvoiceLineItem.md)
* [`Address`](Address.md)
* [`LinkedLedgerAccount`](LinkedLedgerAccount.md)


* [`BankAccount`](BankAccount.md)













---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


