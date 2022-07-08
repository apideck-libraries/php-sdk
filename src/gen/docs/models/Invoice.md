# Apideck.Invoice

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** |  | [optional] 
`downstream_id` | **string** | The third-party API ID of original entity | [optional] 
`type` | **string** | Invoice type | [optional] 
`number` | **string** | Invoice number. | [optional] 
`customer` | [**\Apideck\Client\Model\LinkedCustomer**](LinkedCustomer.md) |  | [optional] 
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
`total` | **float** | Total amount of invoice, including tax. | [optional] 
`balance` | **float** | Balance of invoice due. | [optional] 
`deposit` | **float** | Amount of deposit made to this invoice. | [optional] 
`customer_memo` | **string** | Customer memo | [optional] 
`line_items` | [**\Apideck\Client\Model\InvoiceLineItem[]**](InvoiceLineItem.md) |  | [optional] 
`billing_address` | [**\Apideck\Client\Model\Address**](Address.md) |  | [optional] 
`shipping_address` | [**\Apideck\Client\Model\Address**](Address.md) |  | [optional] 
`template_id` | **string** | Optional invoice template | [optional] 
`source_document_url` | **string** | URL link to a source document - shown as 'Go to [appName]' in the downstream app. Currently only supported for Xero. | [optional] 
`row_version` | **string** |  | [optional] 
`updated_by` | **string** |  | [optional] 
`created_by` | **string** |  | [optional] 
`updated_at` | **\DateTime** |  | [optional] 
`created_at` | **\DateTime** |  | [optional] 





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









* [`InvoiceLineItem`](InvoiceLineItem.md)
* [`Address`](Address.md)
* [`Address`](Address.md)








---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


