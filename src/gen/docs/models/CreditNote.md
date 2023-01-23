# Apideck.CreditNote

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`total_amount` | **float** | Amount of transaction | 
`id` | **string** | Unique identifier representing the entity | [optional] 
`number` | **string** | Credit note number. | [optional] 
`customer` | [**\Apideck\Client\Model\LinkedCustomer**](LinkedCustomer.md) |  | [optional] 
`currency` | [**\Apideck\Client\Model\Currency**](Currency.md) |  | [optional] 
`currency_rate` | **float** | Currency Exchange Rate at the time entity was recorded/generated. | [optional] 
`tax_inclusive` | **bool** | Amounts are including tax | [optional] 
`sub_total` | **float** | Sub-total amount, normally before tax. | [optional] 
`total_tax` | **float** | Total tax amount applied to this invoice. | [optional] 
`tax_code` | **string** | Applicable tax id/code override if tax is not supplied on a line item basis. | [optional] 
`balance` | **float** | The balance reflecting any payments made against the transaction. | [optional] 
`remaining_credit` | **float** | Indicates the total credit amount still available to apply towards the payment. | [optional] 
`status` | **string** | Status of credit notes | [optional] 
`reference` | **string** | Optional reference message ie: Debit remittance detail. | [optional] 
`date_issued` | **\DateTime** | Date credit note issued - YYYY:MM::DDThh:mm:ss.sTZD | [optional] 
`date_paid` | **\DateTime** | Date credit note paid - YYYY:MM::DDThh:mm:ss.sTZD | [optional] 
`type` | **string** | Type of payment | [optional] 
`account` | [**\Apideck\Client\Model\LinkedLedgerAccount**](LinkedLedgerAccount.md) |  | [optional] 
`line_items` | [**\Apideck\Client\Model\InvoiceLineItem[]**](InvoiceLineItem.md) |  | [optional] 
`allocations` | **object[]** |  | [optional] 
`note` | **string** | Optional note to be associated with the credit note. | [optional] 
`row_version` | **string** |  | [optional] 
`updated_by` | **string** |  | [optional] 
`created_by` | **string** |  | [optional] 
`updated_at` | **\DateTime** |  | [optional] 
`created_at` | **\DateTime** |  | [optional] 





<a name="STATUS"></a>
## Enum: CreditNote.status


* `DRAFT` (value: `'draft'`)

* `AUTHORISED` (value: `'authorised'`)

* `PAID` (value: `'paid'`)

* `VOIDED` (value: `'voided'`)

* `DELETED` (value: `'deleted'`)




<a name="TYPE"></a>
## Enum: CreditNote.type


* `RECEIVABLE_CREDIT` (value: `'accounts_receivable_credit'`)

* `PAYABLE_CREDIT` (value: `'accounts_payable_credit'`)




## Referenced Types:



* [`LinkedCustomer`](LinkedCustomer.md)
* [`Currency`](Currency.md)












* [`LinkedLedgerAccount`](LinkedLedgerAccount.md)
* [`InvoiceLineItem`](InvoiceLineItem.md)








---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


