# Apideck.Order

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`merchant_id` | **string** |  | 
`location_id` | **string** |  | 
`id` | **string** |  | [optional] 
`idempotency_key` | **string** | A value you specify that uniquely identifies this request among requests you have sent. | [optional] 
`order_number` | **string** |  | [optional] 
`order_date` | **\DateTime** |  | [optional] 
`closed_date` | **\DateTime** |  | [optional] 
`reference_id` | **string** | An optional user-defined reference ID that associates this record with another entity in an external system. For example, a customer ID from an external customer management system. | [optional] 
`status` | **string** | Order status. Clover specific: If no value is set, the status defaults to hidden, which indicates a hidden order. A hidden order is not displayed in user interfaces and can only be retrieved by its id. When creating an order via the REST API the value must be manually set to 'open'. More info [https://docs.clover.com/reference/orderupdateorder]() | [optional] 
`payment_status` | **string** | Is this order paid or not? | [optional] 
`currency` | [**\Apideck\Client\Model\Currency**](Currency.md) |  | [optional] 
`title` | **string** |  | [optional] 
`note` | **string** | A note with information about this order, may be printed on the order receipt and displayed in apps | [optional] 
`customer_id` | **string** |  | [optional] 
`employee_id` | **string** |  | [optional] 
`order_type_id` | **string** |  | [optional] 
`table` | **string** |  | [optional] 
`seat` | **string** |  | [optional] 
`total_amount` | **int** |  | [optional] 
`total_tip` | **int** |  | [optional] 
`total_tax` | **int** |  | [optional] 
`total_discount` | **int** |  | [optional] 
`total_refund` | **int** |  | [optional] 
`total_service_charge` | **int** |  | [optional] 
`refunded` | **bool** |  | [optional] 
`customers` | [**\Apideck\Client\Model\OrderCustomers[]**](OrderCustomers.md) |  | [optional] 
`fulfillments` | [**\Apideck\Client\Model\OrderFulfillments[]**](OrderFulfillments.md) |  | [optional] 
`line_items` | [**\Apideck\Client\Model\OrderLineItems[]**](OrderLineItems.md) |  | [optional] 
`payments` | [**\Apideck\Client\Model\OrderPayments[]**](OrderPayments.md) |  | [optional] 
`service_charges` | [**\Apideck\Client\Model\ServiceCharge[]**](ServiceCharge.md) | Optional service charges or gratuity tip applied to the order. | [optional] 
`refunds` | [**\Apideck\Client\Model\OrderRefunds[]**](OrderRefunds.md) |  | [optional] 
`taxes` | **object[]** |  | [optional] 
`discounts` | [**\Apideck\Client\Model\OrderDiscounts[]**](OrderDiscounts.md) |  | [optional] 
`tenders` | [**\Apideck\Client\Model\OrderTenders[]**](OrderTenders.md) |  | [optional] 
`source` | **string** | Source of order. Indicates the way that the order was placed. | [optional] 
`voided` | **bool** |  | [optional] 
`voided_at` | **\DateTime** |  | [optional] 
`version` | **string** |  | [optional] 
`updated_by` | **string** |  | [optional] 
`created_by` | **string** |  | [optional] 
`updated_at` | **\DateTime** |  | [optional] 
`created_at` | **\DateTime** |  | [optional] 





<a name="STATUS"></a>
## Enum: Order.status


* `OPEN` (value: `'open'`)

* `DRAFT` (value: `'draft'`)

* `DELIVERED` (value: `'delivered'`)

* `DELAYED` (value: `'delayed'`)

* `VOIDED` (value: `'voided'`)

* `COMPLETED` (value: `'completed'`)

* `HIDDEN` (value: `'hidden'`)




<a name="PAYMENT_STATUS"></a>
## Enum: Order.payment_status


* `OPEN` (value: `'open'`)

* `PAID` (value: `'paid'`)

* `REFUNDED` (value: `'refunded'`)

* `CREDITED` (value: `'credited'`)

* `PARTIALLY_PAID` (value: `'partially_paid'`)

* `PARTIALLY_REFUNDED` (value: `'partially_refunded'`)

* `UNKNOWN` (value: `'unknown'`)




<a name="SOURCE"></a>
## Enum: Order.source


* `IN_STORE` (value: `'in-store'`)

* `ONLINE` (value: `'online'`)

* `OPT` (value: `'opt'`)

* `API` (value: `'api'`)

* `KIOSK` (value: `'kiosk'`)

* `CALLER_ID` (value: `'caller-id'`)

* `GOOGLE` (value: `'google'`)

* `INVOICE` (value: `'invoice'`)




## Referenced Types:










* [`Currency`](Currency.md)














* [`OrderCustomers`](OrderCustomers.md)
* [`OrderFulfillments`](OrderFulfillments.md)
* [`OrderLineItems`](OrderLineItems.md)
* [`OrderPayments`](OrderPayments.md)
* [`ServiceCharge`](ServiceCharge.md)
* [`OrderRefunds`](OrderRefunds.md)

* [`OrderDiscounts`](OrderDiscounts.md)
* [`OrderTenders`](OrderTenders.md)









---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


