# Apideck.BillPayment

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** | A unique identifier for an object. | 
`total_amount` | **float** | The total amount of the transaction | 
`transaction_date` | **\DateTime** | The date of the transaction - YYYY:MM::DDThh:mm:ss.sTZD | 
`downstream_id` | **string** | The third-party API ID of original entity | [optional] 
`currency` | [**\Apideck\Client\Model\Currency**](Currency.md) |  | [optional] 
`currency_rate` | **float** | Currency Exchange Rate at the time entity was recorded/generated. | [optional] 
`reference` | **string** | Optional transaction reference message ie: Debit remittance detail. | [optional] 
`payment_method` | **string** | Payment method used for the transaction, such as cash, credit card, bank transfer, or check | [optional] 
`payment_method_reference` | **string** | Optional reference message returned by payment method on processing | [optional] 
`payment_method_id` | **string** | A unique identifier for an object. | [optional] 
`account` | [**\Apideck\Client\Model\LinkedLedgerAccount**](LinkedLedgerAccount.md) |  | [optional] 
`supplier` | [**\Apideck\Client\Model\LinkedSupplier**](LinkedSupplier.md) |  | [optional] 
`company_id` | **string** | The company or subsidiary id the transaction belongs to | [optional] 
`reconciled` | **bool** | Indicates if the transaction has been reconciled. | [optional] 
`status` | [**\Apideck\Client\Model\PaymentStatus**](PaymentStatus.md) |  | [optional] 
`type` | [**\Apideck\Client\Model\PaymentType**](PaymentType.md) |  | [optional] 
`allocations` | [**\Apideck\Client\Model\Allocation[]**](Allocation.md) |  | [optional] 
`note` | **string** | Note associated with the transaction | [optional] 
`number` | **string** | Number associated with the transaction | [optional] 
`tracking_categories` | [**\Apideck\Client\Model\LinkedTrackingCategory[]**](LinkedTrackingCategory.md) | A list of linked tracking categories. | [optional] 
`custom_fields` | [**\Apideck\Client\Model\CustomField[]**](CustomField.md) |  | [optional] 
`row_version` | **string** | A binary value used to detect updates to a object and prevent data conflicts. It is incremented each time an update is made to the object. | [optional] 
`display_id` | **string** | Id to be displayed. | [optional] 
`custom_mappings` | **object** | When custom mappings are configured on the resource, the result is included here. | [optional] 
`updated_by` | **string** | The user who last updated the object. | [optional] 
`created_by` | **string** | The user who created the object. | [optional] 
`created_at` | **\DateTime** | The date and time when the object was created. | [optional] 
`updated_at` | **\DateTime** | The date and time when the object was last updated. | [optional] 
`pass_through` | **object[]** | The pass_through property allows passing service-specific, custom data or structured modifications in request body when creating or updating resources. | [optional] 





## Referenced Types:




* [`Currency`](Currency.md)





* [`LinkedLedgerAccount`](LinkedLedgerAccount.md)
* [`LinkedSupplier`](LinkedSupplier.md)


* [`PaymentStatus`](PaymentStatus.md)
* [`PaymentType`](PaymentType.md)
* [`Allocation`](Allocation.md)


* [`LinkedTrackingCategory`](LinkedTrackingCategory.md)
* [`CustomField`](CustomField.md)









---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


