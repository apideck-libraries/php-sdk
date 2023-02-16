# Apideck.EcommerceOrder

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** | A unique identifier for an object. | 
`order_number` | **string** | Order number, if any. | [optional] 
`currency` | [**\Apideck\Client\Model\Currency**](Currency.md) |  | [optional] 
`discounts` | [**\Apideck\Client\Model\EcommerceDiscount[]**](EcommerceDiscount.md) |  | [optional] 
`sub_total` | **string** | Sub-total amount, normally before tax. | [optional] 
`shipping_cost` | **string** | Shipping cost, if any. | [optional] 
`total_discount` | **string** | Total discount, if any. | [optional] 
`total_tax` | **string** | Total tax, if any. | [optional] 
`total_amount` | **string** | Total amount due. | [optional] 
`status` | [**\Apideck\Client\Model\EcommerceOrderStatus**](EcommerceOrderStatus.md) |  | [optional] 
`payment_status` | **string** | Current payment status of the order. | [optional] 
`fulfillment_status` | **string** | Current fulfillment status of the order. | [optional] 
`payment_method` | **string** | Payment method used for this order. | [optional] 
`customer` | [**\Apideck\Client\Model\LinkedEcommerceCustomer**](LinkedEcommerceCustomer.md) |  | [optional] 
`billing_address` | [**\Apideck\Client\Model\EcommerceAddress**](EcommerceAddress.md) |  | [optional] 
`shipping_address` | [**\Apideck\Client\Model\EcommerceAddress**](EcommerceAddress.md) |  | [optional] 
`line_items` | [**\Apideck\Client\Model\EcommerceOrderLineItem[]**](EcommerceOrderLineItem.md) |  | [optional] 
`note` | **string** | Note for the order. | [optional] 
`created_at` | **\DateTime** | The date and time when the object was created. | [optional] 
`updated_at` | **\DateTime** | The date and time when the object was last updated. | [optional] 





<a name="PAYMENT_STATUS"></a>
## Enum: EcommerceOrder.payment_status


* `PENDING` (value: `'pending'`)

* `AUTHORIZED` (value: `'authorized'`)

* `PAID` (value: `'paid'`)

* `PARTIAL` (value: `'partial'`)

* `REFUNDED` (value: `'refunded'`)

* `VOIDED` (value: `'voided'`)

* `UNKNOWN` (value: `'unknown'`)




<a name="FULFILLMENT_STATUS"></a>
## Enum: EcommerceOrder.fulfillment_status


* `PENDING` (value: `'pending'`)

* `SHIPPED` (value: `'shipped'`)

* `PARTIAL` (value: `'partial'`)

* `DELIVERED` (value: `'delivered'`)

* `CANCELLED` (value: `'cancelled'`)

* `RETURNED` (value: `'returned'`)

* `UNKNOWN` (value: `'unknown'`)




## Referenced Types:


* [`Currency`](Currency.md)
* [`EcommerceDiscount`](EcommerceDiscount.md)





* [`EcommerceOrderStatus`](EcommerceOrderStatus.md)



* [`LinkedEcommerceCustomer`](LinkedEcommerceCustomer.md)
* [`EcommerceAddress`](EcommerceAddress.md)
* [`EcommerceAddress`](EcommerceAddress.md)
* [`EcommerceOrderLineItem`](EcommerceOrderLineItem.md)




---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


