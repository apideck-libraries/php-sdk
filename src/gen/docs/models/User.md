# Apideck.User

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`emails` | [**\Apideck\Client\Model\Email[]**](Email.md) |  | 
`id` | **string** | The unique identifier for the user | [optional] 
`parent_id` | **string** | The parent user id | [optional] 
`username` | **string** | The username of the user | [optional] 
`first_name` | **string** | The first name of the person. | [optional] 
`last_name` | **string** | The last name of the person. | [optional] 
`title` | **string** | The job title of the person. | [optional] 
`division` | **string** | The division the person is currently in. Usually a collection of departments or teams or regions. | [optional] 
`department` | **string** | The department the person is currently in. [Deprecated](https://developers.apideck.com/changelog) in favor of the dedicated department_id and department_name field. | [optional] 
`company_name` | **string** | The name of the company. | [optional] 
`employee_number` | **string** | An Employee Number, Employee ID or Employee Code, is a unique number that has been assigned to each individual staff member within a company. | [optional] 
`description` | **string** | A description of the object. | [optional] 
`image` | **string** | The URL of the user's avatar | [optional] 
`language` | **string** | language code according to ISO 639-1. For the United States - EN | [optional] 
`status` | **string** | The status of the user | [optional] 
`password` | **string** | The password of the user | [optional] 
`addresses` | [**\Apideck\Client\Model\Address[]**](Address.md) |  | [optional] 
`phone_numbers` | [**\Apideck\Client\Model\PhoneNumber[]**](PhoneNumber.md) |  | [optional] 
`custom_mappings` | **object** | When custom mappings are configured on the resource, the result is included here. | [optional] 
`updated_at` | **string** | The date and time when the user was last updated. | [optional] 
`created_at` | **string** | The date and time when the user was created. | [optional] 
`pass_through` | **object[]** | The pass_through property allows passing service-specific, custom data or structured modifications in request body when creating or updating resources. | [optional] 





## Referenced Types:
* [`Email`](Email.md)















* [`Address`](Address.md)
* [`PhoneNumber`](PhoneNumber.md)





---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


