# Apideck.ExpenseLineItem

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`total_amount` | **float** | The total amount of the expense line item. | 
`id` | **string** | A unique identifier for an object. | [optional] 
`tracking_categories` | [**\Apideck\Client\Model\LinkedTrackingCategory[]**](LinkedTrackingCategory.md) | A list of linked tracking categories. | [optional] 
`account_id` | **string** | The unique identifier for the ledger account. | [optional] 
`customer_id` | **string** | The ID of the customer this expense item is linked to. | [optional] 
`department_id` | **string** | The ID of the department this expense item is linked to. | [optional] 
`location_id` | **string** | The ID of the location this expense item is linked to. | [optional] 
`tax_rate` | [**\Apideck\Client\Model\LinkedTaxRate**](LinkedTaxRate.md) |  | [optional] 
`description` | **string** | The expense line item description | [optional] 
`billable` | **bool** | Boolean that indicates if the line item is billable or not. | [optional] 





## Referenced Types:


* [`LinkedTrackingCategory`](LinkedTrackingCategory.md)




* [`LinkedTaxRate`](LinkedTaxRate.md)



---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


