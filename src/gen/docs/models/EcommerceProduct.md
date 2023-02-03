# Apideck.EcommerceProduct

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** | A unique identifier for an object. | 
`name` | **string** | The name of the product as it should be displayed to customers. | [optional] 
`description` | **string** | A detailed description of the product. | [optional] 
`status` | **string** | The current status of the product (active or archived). | [optional] 
`price` | **string** | The price of the product. | [optional] 
`sku` | **string** | The stock keeping unit of the product. | [optional] 
`inventory_quantity` | **int** | The quantity of the product in stock. | [optional] 
`images` | [**\Apideck\Client\Model\EcommerceProductImages[]**](EcommerceProductImages.md) | An array of image URLs for the product. | [optional] 
`weight` | **string** | The weight of the product. | [optional] 
`weight_unit` | **string** | The unit of measurement for the weight of the product. | [optional] 
`options` | [**\Apideck\Client\Model\EcommerceProductOptions[]**](EcommerceProductOptions.md) | An array of options for the product. | [optional] 
`variants` | [**\Apideck\Client\Model\EcommerceProductVariants[]**](EcommerceProductVariants.md) |  | [optional] 
`tags` | **string[]** | An array of tags for the product, used for organization and searching. | [optional] 
`categories` | **string[]** | An array of categories for the product, used for organization and searching. | [optional] 
`created_at` | **\DateTime** | The date and time when the object was created. | [optional] 
`updated_at` | **\DateTime** | The date and time when the object was last updated. | [optional] 





<a name="STATUS"></a>
## Enum: EcommerceProduct.status


* `ACTIVE` (value: `'active'`)

* `ARCHIVED` (value: `'archived'`)




## Referenced Types:







* [`EcommerceProductImages`](EcommerceProductImages.md)


* [`EcommerceProductOptions`](EcommerceProductOptions.md)
* [`EcommerceProductVariants`](EcommerceProductVariants.md)





---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


