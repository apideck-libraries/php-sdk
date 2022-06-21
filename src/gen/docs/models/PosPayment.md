# Apideck.PosPayment

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`source_id` | **string** |  | 
`order_id` | **string** |  | 
`customer_id` | **string** |  | 
`tender_id` | **string** |  | 
`amount` | **float** |  | 
`currency` | [**\Apideck\Client\Model\Currency**](Currency.md) |  | 
`id` | **string** |  | [optional] 
`merchant_id` | **string** |  | [optional] 
`employee_id` | **string** |  | [optional] 
`location_id` | **string** |  | [optional] 
`device_id` | **string** |  | [optional] 
`external_payment_id` | **string** |  | [optional] 
`idempotency_key` | **string** | A value you specify that uniquely identifies this request among requests you have sent. | [optional] 
`tip` | **float** |  | [optional] 
`tax` | **float** |  | [optional] 
`total` | **float** |  | [optional] 
`app_fee` | **float** | The amount the developer is taking as a fee for facilitating the payment on behalf of the seller. | [optional] 
`change_back_cash_amount` | **float** |  | [optional] 
`approved` | **float** | The initial amount of money approved for this payment. | [optional] 
`refunded` | **float** | The initial amount of money approved for this payment. | [optional] 
`processing_fees` | **object[]** |  | [optional] 
`source` | **string** | Source of this payment. | [optional] 
`status` | **string** | Status of this payment. | [optional] 
`cash` | [**\Apideck\Client\Model\CashDetails**](CashDetails.md) |  | [optional] 
`card_details` | [**\Apideck\Client\Model\PosPaymentCardDetails**](PosPaymentCardDetails.md) |  | [optional] 
`bank_account` | [**\Apideck\Client\Model\BankAccount**](BankAccount.md) |  | [optional] 
`wallet` | [**\Apideck\Client\Model\WalletDetails**](WalletDetails.md) |  | [optional] 
`external_details` | [**\Apideck\Client\Model\PosPaymentExternalDetails**](PosPaymentExternalDetails.md) |  | [optional] 
`service_charges` | [**\Apideck\Client\Model\ServiceCharge[]**](ServiceCharge.md) | Optional service charges or gratuity tip applied to the order. | [optional] 
`updated_by` | **string** |  | [optional] 
`created_by` | **string** |  | [optional] 
`updated_at` | **\DateTime** |  | [optional] 
`created_at` | **\DateTime** |  | [optional] 





<a name="SOURCE"></a>
## Enum: PosPayment.source


* `CARD` (value: `'card'`)

* `BANK_ACCOUNT` (value: `'bank_account'`)

* `WALLET` (value: `'wallet'`)

* `BNPL` (value: `'bnpl'`)

* `CASH` (value: `'cash'`)

* `EXTERNAL` (value: `'external'`)

* `OTHER` (value: `'other'`)




<a name="STATUS"></a>
## Enum: PosPayment.status


* `APPROVED` (value: `'approved'`)

* `PENDING` (value: `'pending'`)

* `COMPLETED` (value: `'completed'`)

* `CANCELED` (value: `'canceled'`)

* `FAILED` (value: `'failed'`)

* `OTHER` (value: `'other'`)




## Referenced Types:





* [`Currency`](Currency.md)

















* [`CashDetails`](CashDetails.md)
* [`PosPaymentCardDetails`](PosPaymentCardDetails.md)
* [`BankAccount`](BankAccount.md)
* [`WalletDetails`](WalletDetails.md)
* [`PosPaymentExternalDetails`](PosPaymentExternalDetails.md)
* [`ServiceCharge`](ServiceCharge.md)





---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


