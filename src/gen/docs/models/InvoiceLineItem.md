# Apideck.InvoiceLineItem

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** | A unique identifier for an object. | [optional] 
`row_id` | **string** | Row ID | [optional] 
`code` | **string** | User defined item code | [optional] 
`line_number` | **int** | Line number of the resource | [optional] 
`description` | **string** | User defined description | [optional] 
`type` | **string** | Item type | [optional] 
`tax_amount` | **float** | Tax amount | [optional] 
`total_amount` | **float** | Total amount of the line item | [optional] 
`quantity` | **float** |  | [optional] 
`unit_price` | **float** |  | [optional] 
`unit_of_measure` | **string** | Description of the unit type the item is sold as, ie: kg, hour. | [optional] 
`discount_percentage` | **float** | Discount percentage applied to the line item when supported downstream. | [optional] 
`discount_amount` | **float** | Discount amount applied to the line item when supported downstream. | [optional] 
`location_id` | **string** | The ID of the location | [optional] 
`department_id` | **string** | The ID of the department | [optional] 
`item` | [**\Apideck\Client\Model\LinkedInvoiceItem**](LinkedInvoiceItem.md) |  | [optional] 
`tax_rate` | [**\Apideck\Client\Model\LinkedTaxRate**](LinkedTaxRate.md) |  | [optional] 
`tracking_categories` | [**\Apideck\Client\Model\LinkedTrackingCategory[]**](LinkedTrackingCategory.md) | A list of linked tracking categories. | [optional] 
`ledger_account` | [**\Apideck\Client\Model\LinkedLedgerAccount**](LinkedLedgerAccount.md) |  | [optional] 
`custom_fields` | [**\Apideck\Client\Model\CustomField[]**](CustomField.md) |  | [optional] 
`row_version` | **string** | A binary value used to detect updates to a object and prevent data conflicts. It is incremented each time an update is made to the object. | [optional] 
`updated_by` | **string** | The user who last updated the object. | [optional] 
`created_by` | **string** | The user who created the object. | [optional] 
`created_at` | **\DateTime** | The date and time when the object was created. | [optional] 
`updated_at` | **\DateTime** | The date and time when the object was last updated. | [optional] 





<a name="TYPE"></a>
## Enum: InvoiceLineItem.type


* `SALES_ITEM` (value: `'sales_item'`)

* `DISCOUNT` (value: `'discount'`)

* `INFO` (value: `'info'`)

* `SUB_TOTAL` (value: `'sub_total'`)

* `OTHER` (value: `'other'`)




## Referenced Types:















* [`LinkedInvoiceItem`](LinkedInvoiceItem.md)
* [`LinkedTaxRate`](LinkedTaxRate.md)
* [`LinkedTrackingCategory`](LinkedTrackingCategory.md)
* [`LinkedLedgerAccount`](LinkedLedgerAccount.md)
* [`CustomField`](CustomField.md)






---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


