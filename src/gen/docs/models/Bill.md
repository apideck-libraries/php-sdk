# Apideck.Bill

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** | A unique identifier for an object. | [optional] 
`downstream_id` | **string** | The third-party API ID of original entity | [optional] 
`bill_number` | **string** | Reference to supplier bill number | [optional] 
`supplier` | [**\Apideck\Client\Model\LinkedSupplier**](LinkedSupplier.md) |  | [optional] 
`company_id` | **string** | The company or subsidiary id the transaction belongs to | [optional] 
`currency` | [**\Apideck\Client\Model\Currency**](Currency.md) |  | [optional] 
`currency_rate` | **float** | Currency Exchange Rate at the time entity was recorded/generated. | [optional] 
`tax_inclusive` | **bool** | Amounts are including tax | [optional] 
`bill_date` | **\DateTime** | Date bill was issued - YYYY-MM-DD. | [optional] 
`due_date` | **\DateTime** | The due date is the date on which a payment is scheduled to be received - YYYY-MM-DD. | [optional] 
`paid_date` | **\DateTime** | The paid date is the date on which a payment was sent to the supplier - YYYY-MM-DD. | [optional] 
`po_number` | **string** | A PO Number uniquely identifies a purchase order and is generally defined by the buyer. The buyer will match the PO number in the invoice to the Purchase Order. | [optional] 
`reference` | **string** | Optional bill reference. | [optional] 
`line_items` | [**\Apideck\Client\Model\BillLineItem[]**](BillLineItem.md) |  | [optional] 
`terms` | **string** | Terms of payment. | [optional] 
`balance` | **float** | Balance of bill due. | [optional] 
`deposit` | **float** | Amount of deposit made to this bill. | [optional] 
`sub_total` | **float** | Sub-total amount, normally before tax. | [optional] 
`total_tax` | **float** | Total tax amount applied to this bill. | [optional] 
`total` | **float** | Total amount of bill, including tax. | [optional] 
`tax_code` | **string** | Applicable tax id/code override if tax is not supplied on a line item basis. | [optional] 
`notes` | **string** |  | [optional] 
`status` | **string** | Invoice status | [optional] 
`ledger_account` | [**\Apideck\Client\Model\LinkedLedgerAccount**](LinkedLedgerAccount.md) |  | [optional] 
`payment_method` | **string** | Payment method used for the transaction, such as cash, credit card, bank transfer, or check | [optional] 
`channel` | **string** | The channel through which the transaction is processed. | [optional] 
`language` | **string** | language code according to ISO 639-1. For the United States - EN | [optional] 
`accounting_by_row` | **bool** | Indicates if accounting by row is used (true) or not (false). Accounting by row means that a separate ledger transaction is created for each row. | [optional] 
`bank_account` | [**\Apideck\Client\Model\BankAccount**](BankAccount.md) |  | [optional] 
`discount_percentage` | **float** | Discount percentage applied to this transaction. | [optional] 
`source_document_url` | **string** | URL link to a source document - shown as 'Go to [appName]' in the downstream app. Currently only supported for Xero. | [optional] 
`tracking_categories` | [**\Apideck\Client\Model\LinkedTrackingCategory[]**](LinkedTrackingCategory.md) | A list of linked tracking categories. | [optional] 
`updated_by` | **string** | The user who last updated the object. | [optional] 
`created_by` | **string** | The user who created the object. | [optional] 
`updated_at` | **\DateTime** | The date and time when the object was last updated. | [optional] 
`created_at` | **\DateTime** | The date and time when the object was created. | [optional] 
`row_version` | **string** | A binary value used to detect updates to a object and prevent data conflicts. It is incremented each time an update is made to the object. | [optional] 
`custom_fields` | [**\Apideck\Client\Model\CustomField[]**](CustomField.md) |  | [optional] 
`custom_mappings` | **object** | When custom mappings are configured on the resource, the result is included here. | [optional] 
`pass_through` | **object[]** | The pass_through property allows passing service-specific, custom data or structured modifications in request body when creating or updating resources. | [optional] 
`accounting_period` | **string** | Accounting period | [optional] 





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







* [`BillLineItem`](BillLineItem.md)









* [`LinkedLedgerAccount`](LinkedLedgerAccount.md)




* [`BankAccount`](BankAccount.md)


* [`LinkedTrackingCategory`](LinkedTrackingCategory.md)





* [`CustomField`](CustomField.md)




---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


