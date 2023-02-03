# Apideck.InvoiceItem

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** | The ID of the item. | [optional] 
`name` | **string** | Item name | [optional] 
`description` | **string** | A short description of the item | [optional] 
`code` | **string** | User defined item code | [optional] 
`sold` | **bool** | Item will be available on sales transactions | [optional] 
`purchased` | **bool** | Item is available for purchase transactions | [optional] 
`tracked` | **bool** | Item is inventoried | [optional] 
`inventory_date` | **\DateTime** | The date of opening balance if inventory item is tracked - YYYY-MM-DD. | [optional] 
`type` | **string** | Item type | [optional] 
`sales_details` | [**\Apideck\Client\Model\InvoiceItemSalesDetails**](InvoiceItemSalesDetails.md) |  | [optional] 
`purchase_details` | [**\Apideck\Client\Model\InvoiceItemSalesDetails**](InvoiceItemSalesDetails.md) |  | [optional] 
`quantity` | **float** |  | [optional] 
`unit_price` | **float** |  | [optional] 
`asset_account` | [**\Apideck\Client\Model\LinkedLedgerAccount**](LinkedLedgerAccount.md) |  | [optional] 
`income_account` | [**\Apideck\Client\Model\LinkedLedgerAccount**](LinkedLedgerAccount.md) |  | [optional] 
`expense_account` | [**\Apideck\Client\Model\LinkedLedgerAccount**](LinkedLedgerAccount.md) |  | [optional] 
`active` | **bool** |  | [optional] 
`row_version` | **string** | A binary value used to detect updates to a object and prevent data conflicts. It is incremented each time an update is made to the object. | [optional] 
`updated_by` | **string** | The user who last updated the object. | [optional] 
`created_by` | **string** | The user who created the object. | [optional] 
`updated_at` | **\DateTime** | The date and time when the object was last updated. | [optional] 
`created_at` | **\DateTime** | The date and time when the object was created. | [optional] 





<a name="TYPE"></a>
## Enum: InvoiceItem.type


* `INVENTORY` (value: `'inventory'`)

* `SERVICE` (value: `'service'`)

* `OTHER` (value: `'other'`)




## Referenced Types:









* [`InvoiceItemSalesDetails`](InvoiceItemSalesDetails.md)
* [`InvoiceItemSalesDetails`](InvoiceItemSalesDetails.md)


* [`LinkedLedgerAccount`](LinkedLedgerAccount.md)
* [`LinkedLedgerAccount`](LinkedLedgerAccount.md)
* [`LinkedLedgerAccount`](LinkedLedgerAccount.md)







---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


