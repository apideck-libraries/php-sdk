# Apideck.Invoice

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** | A unique identifier for an object. | [optional] 
`downstream_id` | **string** | The third-party API ID of original entity | [optional] 
`type` | **string** | Invoice type | [optional] 
`number` | **string** | Invoice number. | [optional] 
`customer` | [**\Apideck\Client\Model\LinkedCustomer**](LinkedCustomer.md) |  | [optional] 
`company_id` | **string** | The company or subsidiary id the transaction belongs to | [optional] 
`invoice_date` | **\DateTime** | Date invoice was issued - YYYY-MM-DD. | [optional] 
`due_date` | **\DateTime** | The invoice due date is the date on which a payment or invoice is scheduled to be received by the seller - YYYY-MM-DD. | [optional] 
`terms` | **string** | Terms of payment. | [optional] 
`po_number` | **string** | A PO Number uniquely identifies a purchase order and is generally defined by the buyer. The buyer will match the PO number in the invoice to the Purchase Order. | [optional] 
`reference` | **string** | Optional invoice reference. | [optional] 
`status` | **string** | Invoice status | [optional] 
`invoice_sent` | **bool** | Invoice sent to contact/customer. | [optional] 
`currency` | [**\Apideck\Client\Model\Currency**](Currency.md) |  | [optional] 
`currency_rate` | **float** | Currency Exchange Rate at the time entity was recorded/generated. | [optional] 
`tax_inclusive` | **bool** | Amounts are including tax | [optional] 
`sub_total` | **float** | Sub-total amount, normally before tax. | [optional] 
`total_tax` | **float** | Total tax amount applied to this invoice. | [optional] 
`tax_code` | **string** | Applicable tax id/code override if tax is not supplied on a line item basis. | [optional] 
`discount_percentage` | **float** | Discount percentage applied to this invoice. | [optional] 
`discount_amount` | **float** | Discount amount applied to this invoice. | [optional] 
`total` | **float** | Total amount of invoice, including tax. | [optional] 
`balance` | **float** | Balance of invoice due. | [optional] 
`deposit` | **float** | Amount of deposit made to this invoice. | [optional] 
`customer_memo` | **string** | Customer memo | [optional] 
`tracking_category` | [**\Apideck\Client\Model\LinkedTrackingCategory**](LinkedTrackingCategory.md) |  | [optional] 
`line_items` | [**\Apideck\Client\Model\InvoiceLineItem[]**](InvoiceLineItem.md) |  | [optional] 
`billing_address` | [**\Apideck\Client\Model\Address**](Address.md) |  | [optional] 
`shipping_address` | [**\Apideck\Client\Model\Address**](Address.md) |  | [optional] 
`template_id` | **string** | Optional invoice template | [optional] 
`source_document_url` | **string** | URL link to a source document - shown as 'Go to [appName]' in the downstream app. Currently only supported for Xero. | [optional] 
`payment_method` | **string** | Payment method used for the transaction, such as cash, credit card, bank transfer, or check | [optional] 
`channel` | **string** | The channel through which the transaction is processed. | [optional] 
`language` | **string** | language code according to ISO 639-1. For the United States - EN | [optional] 
`accounting_by_row` | **bool** | Indicates if accounting by row is used (true) or not (false). Accounting by row means that a separate ledger transaction is created for each row. | [optional] 
`bank_account` | [**\Apideck\Client\Model\BankAccount**](BankAccount.md) |  | [optional] 
`ledger_account` | [**\Apideck\Client\Model\LinkedLedgerAccount**](LinkedLedgerAccount.md) |  | [optional] 
`custom_mappings` | **object** | When custom mappings are configured on the resource, the result is included here. | [optional] 
`custom_fields` | [**\Apideck\Client\Model\CustomField[]**](CustomField.md) |  | [optional] 
`row_version` | **string** | A binary value used to detect updates to a object and prevent data conflicts. It is incremented each time an update is made to the object. | [optional] 
`updated_by` | **string** | The user who last updated the object. | [optional] 
`created_by` | **string** | The user who created the object. | [optional] 
`updated_at` | **\DateTime** | The date and time when the object was last updated. | [optional] 
`created_at` | **\DateTime** | The date and time when the object was created. | [optional] 





<a name="TYPE"></a>
## Enum: Invoice.type


* `STANDARD` (value: `'standard'`)

* `CREDIT` (value: `'credit'`)

* `SERVICE` (value: `'service'`)

* `PRODUCT` (value: `'product'`)

* `SUPPLIER` (value: `'supplier'`)

* `OTHER` (value: `'other'`)




<a name="STATUS"></a>
## Enum: Invoice.status


* `DRAFT` (value: `'draft'`)

* `SUBMITTED` (value: `'submitted'`)

* `AUTHORISED` (value: `'authorised'`)

* `PARTIALLY_PAID` (value: `'partially_paid'`)

* `PAID` (value: `'paid'`)

* `VOID` (value: `'void'`)

* `CREDIT` (value: `'credit'`)

* `DELETED` (value: `'deleted'`)




## Referenced Types:




* [`LinkedCustomer`](LinkedCustomer.md)








* [`Currency`](Currency.md)











* [`LinkedTrackingCategory`](LinkedTrackingCategory.md)
* [`InvoiceLineItem`](InvoiceLineItem.md)
* [`Address`](Address.md)
* [`Address`](Address.md)






* [`BankAccount`](BankAccount.md)
* [`LinkedLedgerAccount`](LinkedLedgerAccount.md)

* [`CustomField`](CustomField.md)






---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


