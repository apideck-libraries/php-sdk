# Apideck.Order

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`merchant_id` | **string** |  | 
`location_id` | **string** |  | 
`id` | **string** |  | [optional] 
`order_number` | **string** |  | [optional] 
`order_date` | **\DateTime** |  | [optional] 
`closed_date` | **\DateTime** |  | [optional] 
`reference_id` | **string** | An optional user-defined reference ID that associates this record with another entity in an external system. For example, a customer ID from an external customer management system. | [optional] 
`status` | **string** |  | [optional] 
`state` | **string** | A string describing the state of the order. Clover specific: If no value is set, the state defaults to null, which indicates a hidden order. A hidden order is not displayed in user interfaces and can only be retrieved by its id. When creating an order via the REST API the value must be manually set to 'open'. More info [https://docs.clover.com/reference/orderupdateorder]() | [optional] 
`payment_status` | **string** | Is this order paid or not? | [optional] 
`currency` | **string** | Indicates the associated currency for an amount of money. Values correspond to [ISO 4217](https://en.wikipedia.org/wiki/ISO_4217). | [optional] 
`title` | **string** |  | [optional] 
`note` | **string** | A note with information about this order, may be printed on the order receipt and displayed in apps | [optional] 
`customer_id` | **string** |  | [optional] 
`employee_id` | **string** |  | [optional] 
`order_type_id` | **string** |  | [optional] 
`table` | **string** |  | [optional] 
`seat` | **string** |  | [optional] 
`total_amount` | **float** |  | [optional] 
`total_tip` | **float** |  | [optional] 
`total_tax` | **float** |  | [optional] 
`total_discount` | **float** |  | [optional] 
`total_refund` | **float** |  | [optional] 
`total_service_charge` | **float** |  | [optional] 
`refunded` | **bool** |  | [optional] 
`customers` | [**\Apideck\Client\Model\OrderCustomers[]**](OrderCustomers.md) |  | [optional] 
`fulfillments` | [**\Apideck\Client\Model\OrderFulfillments[]**](OrderFulfillments.md) |  | [optional] 
`line_items` | [**\Apideck\Client\Model\OrderLineItems[]**](OrderLineItems.md) |  | [optional] 
`payments` | [**\Apideck\Client\Model\OrderPayments[]**](OrderPayments.md) |  | [optional] 
`service_charges` | **object[]** | Optional service charges or gratuity tip applied to the order. | [optional] 
`refunds` | [**\Apideck\Client\Model\OrderRefunds[]**](OrderRefunds.md) |  | [optional] 
`taxes` | **object[]** |  | [optional] 
`discounts` | [**\Apideck\Client\Model\OrderDiscounts[]**](OrderDiscounts.md) |  | [optional] 
`tenders` | [**\Apideck\Client\Model\OrderTenders[]**](OrderTenders.md) |  | [optional] 
`source` | **string** | Source of order. Indicates the way that the order was placed. | [optional] 
`voided` | **bool** |  | [optional] 
`voided_at` | **\DateTime** |  | [optional] 
`version` | **string** |  | [optional] 
`updated_by` | [**\Apideck\Client\Model\Version**](Version.md) |  | [optional] 
`created_by` | [**\Apideck\Client\Model\CreatedBy**](CreatedBy.md) |  | [optional] 
`updated_at` | [**\Apideck\Client\Model\UpdatedAt**](UpdatedAt.md) |  | [optional] 
`created_at` | [**\Apideck\Client\Model\CreatedAt**](CreatedAt.md) |  | [optional] 





<a name="STATUS"></a>
## Enum: Order.status


* `OPEN` (value: `'open'`)

* `DRAFT` (value: `'draft'`)

* `DELIVERED` (value: `'delivered'`)

* `DELAYED` (value: `'delayed'`)

* `VOIDED` (value: `'voided'`)

* `COMPLETED` (value: `'completed'`)




<a name="PAYMENT_STATUS"></a>
## Enum: Order.payment_status


* `OPEN` (value: `'open'`)

* `PAID` (value: `'paid'`)

* `REFUNDED` (value: `'refunded'`)

* `CREDITED` (value: `'credited'`)

* `PARTIALLY_PAID` (value: `'partially_paid'`)

* `PARTIALLY_REFUNDED` (value: `'partially_refunded'`)

* `UNKNOWN` (value: `'unknown'`)




<a name="CURRENCY"></a>
## Enum: Order.currency


* `UNKNOWN_CURRENCY` (value: `'UNKNOWN_CURRENCY'`)

* `AED` (value: `'AED'`)

* `AFN` (value: `'AFN'`)

* `ALL` (value: `'ALL'`)

* `AMD` (value: `'AMD'`)

* `ANG` (value: `'ANG'`)

* `AOA` (value: `'AOA'`)

* `ARS` (value: `'ARS'`)

* `AUD` (value: `'AUD'`)

* `AWG` (value: `'AWG'`)

* `AZN` (value: `'AZN'`)

* `BAM` (value: `'BAM'`)

* `BBD` (value: `'BBD'`)

* `BDT` (value: `'BDT'`)

* `BGN` (value: `'BGN'`)

* `BHD` (value: `'BHD'`)

* `BIF` (value: `'BIF'`)

* `BMD` (value: `'BMD'`)

* `BND` (value: `'BND'`)

* `BOB` (value: `'BOB'`)

* `BOV` (value: `'BOV'`)

* `BRL` (value: `'BRL'`)

* `BSD` (value: `'BSD'`)

* `BTN` (value: `'BTN'`)

* `BWP` (value: `'BWP'`)

* `BYR` (value: `'BYR'`)

* `BZD` (value: `'BZD'`)

* `CAD` (value: `'CAD'`)

* `CDF` (value: `'CDF'`)

* `CHE` (value: `'CHE'`)

* `CHF` (value: `'CHF'`)

* `CHW` (value: `'CHW'`)

* `CLF` (value: `'CLF'`)

* `CLP` (value: `'CLP'`)

* `CNY` (value: `'CNY'`)

* `COP` (value: `'COP'`)

* `COU` (value: `'COU'`)

* `CRC` (value: `'CRC'`)

* `CUC` (value: `'CUC'`)

* `CUP` (value: `'CUP'`)

* `CVE` (value: `'CVE'`)

* `CZK` (value: `'CZK'`)

* `DJF` (value: `'DJF'`)

* `DKK` (value: `'DKK'`)

* `DOP` (value: `'DOP'`)

* `DZD` (value: `'DZD'`)

* `EGP` (value: `'EGP'`)

* `ERN` (value: `'ERN'`)

* `ETB` (value: `'ETB'`)

* `EUR` (value: `'EUR'`)

* `FJD` (value: `'FJD'`)

* `FKP` (value: `'FKP'`)

* `GBP` (value: `'GBP'`)

* `GEL` (value: `'GEL'`)

* `GHS` (value: `'GHS'`)

* `GIP` (value: `'GIP'`)

* `GMD` (value: `'GMD'`)

* `GNF` (value: `'GNF'`)

* `GTQ` (value: `'GTQ'`)

* `GYD` (value: `'GYD'`)

* `HKD` (value: `'HKD'`)

* `HNL` (value: `'HNL'`)

* `HRK` (value: `'HRK'`)

* `HTG` (value: `'HTG'`)

* `HUF` (value: `'HUF'`)

* `IDR` (value: `'IDR'`)

* `ILS` (value: `'ILS'`)

* `INR` (value: `'INR'`)

* `IQD` (value: `'IQD'`)

* `IRR` (value: `'IRR'`)

* `ISK` (value: `'ISK'`)

* `JMD` (value: `'JMD'`)

* `JOD` (value: `'JOD'`)

* `JPY` (value: `'JPY'`)

* `KES` (value: `'KES'`)

* `KGS` (value: `'KGS'`)

* `KHR` (value: `'KHR'`)

* `KMF` (value: `'KMF'`)

* `KPW` (value: `'KPW'`)

* `KRW` (value: `'KRW'`)

* `KWD` (value: `'KWD'`)

* `KYD` (value: `'KYD'`)

* `KZT` (value: `'KZT'`)

* `LAK` (value: `'LAK'`)

* `LBP` (value: `'LBP'`)

* `LKR` (value: `'LKR'`)

* `LRD` (value: `'LRD'`)

* `LSL` (value: `'LSL'`)

* `LTL` (value: `'LTL'`)

* `LVL` (value: `'LVL'`)

* `LYD` (value: `'LYD'`)

* `MAD` (value: `'MAD'`)

* `MDL` (value: `'MDL'`)

* `MGA` (value: `'MGA'`)

* `MKD` (value: `'MKD'`)

* `MMK` (value: `'MMK'`)

* `MNT` (value: `'MNT'`)

* `MOP` (value: `'MOP'`)

* `MRO` (value: `'MRO'`)

* `MUR` (value: `'MUR'`)

* `MVR` (value: `'MVR'`)

* `MWK` (value: `'MWK'`)

* `MXN` (value: `'MXN'`)

* `MXV` (value: `'MXV'`)

* `MYR` (value: `'MYR'`)

* `MZN` (value: `'MZN'`)

* `NAD` (value: `'NAD'`)

* `NGN` (value: `'NGN'`)

* `NIO` (value: `'NIO'`)

* `NOK` (value: `'NOK'`)

* `NPR` (value: `'NPR'`)

* `NZD` (value: `'NZD'`)

* `OMR` (value: `'OMR'`)

* `PAB` (value: `'PAB'`)

* `PEN` (value: `'PEN'`)

* `PGK` (value: `'PGK'`)

* `PHP` (value: `'PHP'`)

* `PKR` (value: `'PKR'`)

* `PLN` (value: `'PLN'`)

* `PYG` (value: `'PYG'`)

* `QAR` (value: `'QAR'`)

* `RON` (value: `'RON'`)

* `RSD` (value: `'RSD'`)

* `RUB` (value: `'RUB'`)

* `RWF` (value: `'RWF'`)

* `SAR` (value: `'SAR'`)

* `SBD` (value: `'SBD'`)

* `SCR` (value: `'SCR'`)

* `SDG` (value: `'SDG'`)

* `SEK` (value: `'SEK'`)

* `SGD` (value: `'SGD'`)

* `SHP` (value: `'SHP'`)

* `SLL` (value: `'SLL'`)

* `SOS` (value: `'SOS'`)

* `SRD` (value: `'SRD'`)

* `SSP` (value: `'SSP'`)

* `STD` (value: `'STD'`)

* `SVC` (value: `'SVC'`)

* `SYP` (value: `'SYP'`)

* `SZL` (value: `'SZL'`)

* `THB` (value: `'THB'`)

* `TJS` (value: `'TJS'`)

* `TMT` (value: `'TMT'`)

* `TND` (value: `'TND'`)

* `TOP` (value: `'TOP'`)

* `TRC` (value: `'TRC'`)

* `_TRY` (value: `'TRY'`)

* `TTD` (value: `'TTD'`)

* `TWD` (value: `'TWD'`)

* `TZS` (value: `'TZS'`)

* `UAH` (value: `'UAH'`)

* `UGX` (value: `'UGX'`)

* `USD` (value: `'USD'`)

* `USN` (value: `'USN'`)

* `USS` (value: `'USS'`)

* `UYI` (value: `'UYI'`)

* `UYU` (value: `'UYU'`)

* `UZS` (value: `'UZS'`)

* `VEF` (value: `'VEF'`)

* `VND` (value: `'VND'`)

* `VUV` (value: `'VUV'`)

* `WST` (value: `'WST'`)

* `XAF` (value: `'XAF'`)

* `XAG` (value: `'XAG'`)

* `XAU` (value: `'XAU'`)

* `XBA` (value: `'XBA'`)

* `XBB` (value: `'XBB'`)

* `XBC` (value: `'XBC'`)

* `XBD` (value: `'XBD'`)

* `XCD` (value: `'XCD'`)

* `XDR` (value: `'XDR'`)

* `XOF` (value: `'XOF'`)

* `XPD` (value: `'XPD'`)

* `XPF` (value: `'XPF'`)

* `XPT` (value: `'XPT'`)

* `XTS` (value: `'XTS'`)

* `XXX` (value: `'XXX'`)

* `YER` (value: `'YER'`)

* `ZAR` (value: `'ZAR'`)

* `ZMK` (value: `'ZMK'`)

* `ZMW` (value: `'ZMW'`)

* `BTC` (value: `'BTC'`)




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

























* [`OrderCustomers`](OrderCustomers.md)
* [`OrderFulfillments`](OrderFulfillments.md)
* [`OrderLineItems`](OrderLineItems.md)
* [`OrderPayments`](OrderPayments.md)

* [`OrderRefunds`](OrderRefunds.md)

* [`OrderDiscounts`](OrderDiscounts.md)
* [`OrderTenders`](OrderTenders.md)




* [`Version`](Version.md)
* [`CreatedBy`](CreatedBy.md)
* [`UpdatedAt`](UpdatedAt.md)
* [`CreatedAt`](CreatedAt.md)

---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


