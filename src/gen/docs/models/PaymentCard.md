# Apideck.PaymentCard

### Description

A card's non-confidential details.

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** | A unique identifier for an object. | [optional] 
`bin` | **string** | The first six digits of the card number, known as the Bank Identification Number (BIN). | [optional] 
`card_brand` | **string** | The first six digits of the card number, known as the Bank Identification Number (BIN). | [optional] 
`card_type` | **string** |  | [optional] 
`prepaid_type` | **string** |  | [optional] 
`cardholder_name` | **string** |  | [optional] 
`customer_id` | **string** |  | [optional] 
`merchant_id` | **string** |  | [optional] 
`exp_month` | **int** | The expiration month of the associated card as an integer between 1 and 12. | [optional] 
`exp_year` | **int** | The four-digit year of the card's expiration date. | [optional] 
`fingerprint` | **string** |  | [optional] 
`last_4` | **string** |  | [optional] 
`enabled` | **bool** | Indicates whether or not a card can be used for payments. | [optional] 
`billing_address` | [**\Apideck\Client\Model\Address**](Address.md) |  | [optional] 
`reference_id` | **string** | An optional user-defined reference ID that associates this record with another entity in an external system. For example, a customer ID from an external customer management system. | [optional] 
`version` | **string** |  | [optional] 





<a name="CARD_BRAND"></a>
## Enum: PaymentCard.card_brand


* `VISA` (value: `'visa'`)

* `MASTERCARD` (value: `'mastercard'`)

* `AMEX` (value: `'amex'`)

* `DISCOVER` (value: `'discover'`)

* `DISCOVER_DINERS` (value: `'discover-diners'`)

* `JCB` (value: `'jcb'`)

* `CHINA_UNIONPAY` (value: `'china-unionpay'`)

* `SQUARE_GIFT_CARD` (value: `'square-gift-card'`)

* `SQUARE_CAPITAL_CARD` (value: `'square-capital-card'`)

* `INTERAC` (value: `'interac'`)

* `EFTPOS` (value: `'eftpos'`)

* `FELICA` (value: `'felica'`)

* `EBT` (value: `'ebt'`)

* `OTHER` (value: `'other'`)




<a name="CARD_TYPE"></a>
## Enum: PaymentCard.card_type


* `CREDIT` (value: `'credit'`)

* `DEBIT` (value: `'debit'`)

* `PREPAID` (value: `'prepaid'`)

* `OTHER` (value: `'other'`)




<a name="PREPAID_TYPE"></a>
## Enum: PaymentCard.prepaid_type


* `NON_PREPAID` (value: `'non-prepaid'`)

* `PREPAID` (value: `'prepaid'`)

* `UNKNOWN` (value: `'unknown'`)




## Referenced Types:













* [`Address`](Address.md)



---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


