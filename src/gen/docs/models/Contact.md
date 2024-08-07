# Apideck.Contact

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`name` | **string** | Full name of the contact. | 
`id` | **string** | Unique identifier for the contact. | [optional] 
`owner_id` | **string** | The owner of the contact. | [optional] 
`type` | **string** | The type of the contact. | [optional] 
`company_id` | **string** | The company the contact is associated with. | [optional] 
`company_name` | **string** | The name of the company the contact is associated with. | [optional] 
`lead_id` | **string** | The lead the contact is associated with. | [optional] 
`first_name` | **string** | The first name of the contact. | [optional] 
`middle_name` | **string** | The middle name of the contact. | [optional] 
`last_name` | **string** | The last name of the contact. | [optional] 
`prefix` | **string** | The prefix of the contact. | [optional] 
`suffix` | **string** | The suffix of the contact. | [optional] 
`title` | **string** | The job title of the contact. | [optional] 
`department` | **string** | The department of the contact. | [optional] 
`language` | **string** | language code according to ISO 639-1. For the United States - EN | [optional] 
`gender` | **string** | The gender of the contact. | [optional] 
`birthday` | **string** | The birthday of the contact. | [optional] 
`image` | **string** |  | [optional] 
`photo_url` | **string** | The URL of the photo of a person. | [optional] 
`lead_source` | **string** | The lead source of the contact. | [optional] 
`fax` | **string** | The fax number of the contact. | [optional] 
`description` | **string** | The description of the contact. | [optional] 
`current_balance` | **float** | The current balance of the contact. | [optional] 
`status` | **string** | The status of the contact. | [optional] 
`active` | **bool** | The active status of the contact. | [optional] 
`websites` | [**\Apideck\Client\Model\Website[]**](Website.md) |  | [optional] 
`addresses` | [**\Apideck\Client\Model\Address[]**](Address.md) |  | [optional] 
`social_links` | [**\Apideck\Client\Model\SocialLink[]**](SocialLink.md) |  | [optional] 
`phone_numbers` | [**\Apideck\Client\Model\PhoneNumber[]**](PhoneNumber.md) |  | [optional] 
`emails` | [**\Apideck\Client\Model\Email[]**](Email.md) |  | [optional] 
`email_domain` | **string** |  | [optional] 
`custom_fields` | [**\Apideck\Client\Model\CustomField[]**](CustomField.md) |  | [optional] 
`tags` | **string[]** |  | [optional] 
`first_call_at` | **\DateTime** | The first call date of the contact. | [optional] 
`first_email_at` | **\DateTime** | The first email date of the contact. | [optional] 
`last_activity_at` | **\DateTime** | The last activity date of the contact. | [optional] 
`custom_mappings` | **object** | When custom mappings are configured on the resource, the result is included here. | [optional] 
`updated_at` | **\DateTime** | The last update date of the contact. | [optional] 
`created_at` | **\DateTime** | The creation date of the contact. | [optional] 
`opportunity_ids` | **string[]** | The opportunity ids of the contact. | [optional] 
`pass_through` | **object[]** | The pass_through property allows passing service-specific, custom data or structured modifications in request body when creating or updating resources. | [optional] 





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


