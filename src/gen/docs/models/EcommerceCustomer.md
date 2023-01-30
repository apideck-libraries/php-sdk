# Apideck.EcommerceCustomer

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** |  | 
`name` | **string** | Full name of the customer | [optional] 
`first_name` | **string** | First name of the customer | [optional] 
`last_name` | **string** | Last name of the customer | [optional] 
`company_name` | **string** | Company name of the customer | [optional] 
`status` | **string** | The current status of the customer | [optional] 
`emails` | [**\Apideck\Client\Model\Email[]**](Email.md) | An array of email addresses for the customer. | [optional] 
`phone_numbers` | [**\Apideck\Client\Model\PhoneNumber[]**](PhoneNumber.md) | An array of phone numbers for the customer. | [optional] 
`addresses` | [**\Apideck\Client\Model\EcommerceCustomerAddresses[]**](EcommerceCustomerAddresses.md) | An array of addresses for the customer. | [optional] 
`orders` | [**\Apideck\Client\Model\LinkedEcommerceOrder[]**](LinkedEcommerceOrder.md) |  | [optional] 
`created_at` | **\DateTime** |  | [optional] 
`updated_at` | **\DateTime** |  | [optional] 





<a name="STATUS"></a>
## Enum: EcommerceCustomer.status


* `ACTIVE` (value: `'active'`)

* `ARCHIVED` (value: `'archived'`)




## Referenced Types:






* [`Email`](Email.md)
* [`PhoneNumber`](PhoneNumber.md)
* [`EcommerceCustomerAddresses`](EcommerceCustomerAddresses.md)
* [`LinkedEcommerceOrder`](LinkedEcommerceOrder.md)



---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


