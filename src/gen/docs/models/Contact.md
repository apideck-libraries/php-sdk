# Apideck.Contact

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`name` | **string** |  | 
`id` | **string** |  | [optional] 
`owner_id` | **string** |  | [optional] 
`type` | **string** |  | [optional] 
`company_id` | **string** |  | [optional] 
`company_name` | **string** |  | [optional] 
`lead_id` | **string** |  | [optional] 
`first_name` | **string** |  | [optional] 
`middle_name` | **string** |  | [optional] 
`last_name` | **string** |  | [optional] 
`prefix` | **string** |  | [optional] 
`suffix` | **string** |  | [optional] 
`title` | **string** |  | [optional] 
`department` | **string** |  | [optional] 
`language` | **string** | language code according to ISO 639-1. For the United States - EN | [optional] 
`gender` | **string** |  | [optional] 
`birthday` | **string** |  | [optional] 
`image` | **string** |  | [optional] 
`photo_url` | **string** |  | [optional] 
`lead_source` | **string** |  | [optional] 
`fax` | **string** |  | [optional] 
`description` | **string** |  | [optional] 
`current_balance` | **float** |  | [optional] 
`status` | **string** |  | [optional] 
`active` | **bool** |  | [optional] 
`websites` | [**\Apideck\Client\Model\Website[]**](Website.md) |  | [optional] 
`addresses` | [**\Apideck\Client\Model\Address[]**](Address.md) |  | [optional] 
`social_links` | [**\Apideck\Client\Model\SocialLink[]**](SocialLink.md) |  | [optional] 
`phone_numbers` | [**\Apideck\Client\Model\PhoneNumber[]**](PhoneNumber.md) |  | [optional] 
`emails` | [**\Apideck\Client\Model\Email[]**](Email.md) |  | [optional] 
`email_domain` | **string** |  | [optional] 
`custom_fields` | [**\Apideck\Client\Model\CustomField[]**](CustomField.md) |  | [optional] 
`tags` | **string[]** |  | [optional] 
`first_call_at` | **\DateTime** |  | [optional] 
`first_email_at` | **\DateTime** |  | [optional] 
`last_activity_at` | **\DateTime** |  | [optional] 
`updated_at` | **\DateTime** |  | [optional] 
`created_at` | **\DateTime** |  | [optional] 





<a name="TYPE"></a>
## Enum: Contact.type


* `CUSTOMER` (value: `'customer'`)

* `SUPPLIER` (value: `'supplier'`)

* `EMPLOYEE` (value: `'employee'`)

* `PERSONAL` (value: `'personal'`)




<a name="GENDER"></a>
## Enum: Contact.gender


* `MALE` (value: `'male'`)

* `FEMALE` (value: `'female'`)

* `UNISEX` (value: `'unisex'`)




## Referenced Types:

























* [`Website`](Website.md)
* [`Address`](Address.md)
* [`SocialLink`](SocialLink.md)
* [`PhoneNumber`](PhoneNumber.md)
* [`Email`](Email.md)

* [`CustomField`](CustomField.md)







---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


