# Apideck.BillLineItem

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** | A unique identifier for an object. | [optional] 
`row_id` | **string** | Row ID | [optional] 
`code` | **string** | User defined item code | [optional] 
`line_number` | **int** | Line number in the invoice | [optional] 
`description` | **string** | User defined description | [optional] 
`type` | **string** | Bill Line Item type | [optional] 
`tax_amount` | **float** | Tax amount | [optional] 
`total_amount` | **float** | Total amount of the line item | [optional] 
`quantity` | **float** |  | [optional] 
`unit_price` | **float** |  | [optional] 
`unit_of_measure` | **string** | Description of the unit type the item is sold as, ie: kg, hour. | [optional] 
`discount_percentage` | **float** | Discount percentage applied to the line item when supported downstream. | [optional] 
`discount_amount` | **float** | Discount amount applied to the line item when supported downstream. | [optional] 
`location_id` | **string** | Location id | [optional] 
`department_id` | **string** | Department id | [optional] 
`item` | [**\Apideck\Client\Model\LinkedInvoiceItem**](LinkedInvoiceItem.md) |  | [optional] 
`tax_rate` | [**\Apideck\Client\Model\LinkedTaxRate**](LinkedTaxRate.md) |  | [optional] 
`ledger_account` | [**\Apideck\Client\Model\LinkedLedgerAccount**](LinkedLedgerAccount.md) |  | [optional] 
`tracking_categories` | [**\Apideck\Client\Model\LinkedTrackingCategory[]**](LinkedTrackingCategory.md) | A list of linked tracking categories. | [optional] 
`row_version` | **string** | A binary value used to detect updates to a object and prevent data conflicts. It is incremented each time an update is made to the object. | [optional] 
`updated_by` | **string** | The user who last updated the object. | [optional] 
`created_by` | **string** | The user who created the object. | [optional] 
`created_at` | **\DateTime** | The date and time when the object was created. | [optional] 
`updated_at` | **\DateTime** | The date and time when the object was last updated. | [optional] 





<a name="TYPE"></a>
## Enum: BillLineItem.type


* `EXPENSE_ITEM` (value: `'expense_item'`)

* `EXPENSE_ACCOUNT` (value: `'expense_account'`)

* `OTHER` (value: `'other'`)




## Referenced Types:















* [`LinkedInvoiceItem`](LinkedInvoiceItem.md)
* [`LinkedTaxRate`](LinkedTaxRate.md)
* [`LinkedLedgerAccount`](LinkedLedgerAccount.md)
* [`LinkedTrackingCategory`](LinkedTrackingCategory.md)






---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


