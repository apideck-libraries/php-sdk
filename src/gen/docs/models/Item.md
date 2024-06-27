# Apideck.Item

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`name` | **string** |  | 
`id` | **string** |  | [optional] 
`idempotency_key` | **string** | A value you specify that uniquely identifies this request among requests you have sent. | [optional] 
`description` | **string** |  | [optional] 
`abbreviation` | **string** |  | [optional] 
`product_type` | **string** |  | [optional] 
`price_amount` | **float** |  | [optional] 
`pricing_type` | **string** |  | [optional] 
`price_currency` | [**\Apideck\Client\Model\Currency**](Currency.md) |  | [optional] 
`cost` | **float** |  | [optional] 
`tax_ids` | **string[]** | A list of Tax IDs for the product. | [optional] 
`is_revenue` | **bool** | True if this item should be counted as revenue. For example, gift cards and donations would not be counted as revenue. | [optional] 
`use_default_tax_rates` | **bool** |  | [optional] 
`absent_at_location_ids` | **string[]** | A list of locations where the object is not present, even if present_at_all_locations is true. This can include locations that are deactivated. | [optional] 
`present_at_all_locations` | **bool** |  | [optional] 
`available_for_pickup` | **bool** |  | [optional] 
`available_online` | **bool** |  | [optional] 
`sku` | **string** | SKU of the item | [optional] 
`code` | **string** | Product code, e.g. UPC or EAN | [optional] 
`categories` | **object[]** |  | [optional] 
`options` | **object[]** | List of options pertaining to this item's attribute variation | [optional] 
`variations` | **object[]** |  | [optional] 
`modifier_groups` | **object[]** |  | [optional] 
`available` | **bool** |  | [optional] 
`hidden` | **bool** |  | [optional] 
`version` | **string** | The user who last updated the object. | [optional] 
`custom_mappings` | **object** | When custom mappings are configured on the resource, the result is included here. | [optional] 
`deleted` | **bool** | Flag to indicate if the object is deleted. | [optional] 
`updated_by` | **string** | The user who last updated the object. | [optional] 
`created_by` | **string** | The user who created the object. | [optional] 
`updated_at` | **\DateTime** | The date and time when the object was last updated. | [optional] 
`created_at` | **\DateTime** | The date and time when the object was created. | [optional] 
`pass_through` | **object[]** | The pass_through property allows passing service-specific, custom data or structured modifications in request body when creating or updating resources. | [optional] 





<a name="PRODUCT_TYPE"></a>
## Enum: Item.product_type


* `REGULAR` (value: `'regular'`)

* `OTHER` (value: `'other'`)




<a name="PRICING_TYPE"></a>
## Enum: Item.pricing_type


* `FIXED` (value: `'fixed'`)

* `VARIABLE` (value: `'variable'`)

* `PER_UNIT` (value: `'per_unit'`)

* `OTHER` (value: `'other'`)




## Referenced Types:








* [`Currency`](Currency.md)

























---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


