# Apideck.PosPaymentExternalDetails

### Description

Details about an external payment.

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`type` | **string** | The type of external payment the seller received. It can be one of the following: - CHECK - Paid using a physical check. - BANK_TRANSFER - Paid using external bank transfer. - OTHER\\_GIFT\\_CARD - Paid using a non-Square gift card. - CRYPTO - Paid using a crypto currency. - SQUARE_CASH - Paid using Square Cash App. - SOCIAL - Paid using peer-to-peer payment applications. - EXTERNAL - A third-party application gathered this payment outside of Square. - EMONEY - Paid using an E-money provider. - CARD - A credit or debit card that Square does not support. - STORED_BALANCE - Use for house accounts, store credit, and so forth. - FOOD_VOUCHER - Restaurant voucher provided by employers to employees to pay for meals - OTHER - A type not listed here. | 
`source` | **string** | A description of the external payment source. For example,  \&quot;Food Delivery Service\&quot;. | 
`source_id` | **string** | An ID to associate the payment to its originating source. | [optional] 
`source_fee_amount` | **float** | The fees paid to the source. The amount minus this field is the net amount seller receives. | [optional] 





<a name="TYPE"></a>
## Enum: PosPaymentExternalDetails.type


* `CHECK` (value: `'check'`)

* `BANK_TRANSFER` (value: `'bank_transfer'`)

* `OTHER_GIFT_CARD` (value: `'other_gift_card'`)

* `CRYPTO` (value: `'crypto'`)

* `SQUARE_CASH` (value: `'square_cash'`)

* `SOCIAL` (value: `'social'`)

* `EXTERNAL` (value: `'external'`)

* `EMONEY` (value: `'emoney'`)

* `CARD` (value: `'card'`)

* `STORED_BALANCE` (value: `'stored_balance'`)

* `FOOD_VOUCHER` (value: `'food_voucher'`)

* `OTHER` (value: `'other'`)




---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


