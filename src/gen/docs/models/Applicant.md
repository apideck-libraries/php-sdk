# Apideck.Applicant

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** | A unique identifier for an object. | [optional] 
`name` | **string** | The name of an applicant. | [optional] 
`first_name` | **string** | The first name of the person. | [optional] 
`last_name` | **string** | The last name of the person. | [optional] 
`middle_name` | **string** | Middle name of the person. | [optional] 
`initials` | **string** | The initials of the person, usually derived from their first, middle, and last names. | [optional] 
`birthday` | **\DateTime** | The date of birth of the person. | [optional] 
`cover_letter` | **string** |  | [optional] 
`job_url` | **string** |  | [optional] 
`photo_url` | **string** | The URL of the photo of a person. | [optional] 
`headline` | **string** | Typically a list of previous companies where the contact has worked or schools that the contact has attended | [optional] 
`title` | **string** | The job title of the person. | [optional] 
`emails` | [**\Apideck\Client\Model\Email[]**](Email.md) |  | [optional] 
`custom_fields` | [**\Apideck\Client\Model\CustomField[]**](CustomField.md) |  | [optional] 
`phone_numbers` | [**\Apideck\Client\Model\PhoneNumber[]**](PhoneNumber.md) |  | [optional] 
`addresses` | [**\Apideck\Client\Model\Address[]**](Address.md) |  | [optional] 
`websites` | [**\Apideck\Client\Model\ApplicantWebsites[]**](ApplicantWebsites.md) |  | [optional] 
`social_links` | [**\Apideck\Client\Model\ApplicantSocialLinks[]**](ApplicantSocialLinks.md) |  | [optional] 
`stage_id` | **string** |  | [optional] 
`recruiter_id` | **string** |  | [optional] 
`coordinator_id` | **string** |  | [optional] 
`application_ids` | **string[]** |  | [optional] 
`applications` | **string[]** |  | [optional] 
`followers` | **string[]** |  | [optional] 
`sources` | **string[]** |  | [optional] 
`source_id` | **string** |  | [optional] 
`confidential` | **bool** |  | [optional] 
`anonymized` | **bool** |  | [optional] 
`tags` | **string[]** |  | [optional] 
`archived` | **bool** |  | [optional] 
`last_interaction_at` | **\DateTime** |  | [optional] 
`owner_id` | **string** |  | [optional] 
`sourced_by` | **string** |  | [optional] 
`cv_url` | **string** |  | [optional] 
`record_url` | **string** |  | [optional] 
`rejected_at` | **\DateTime** |  | [optional] 
`custom_mappings` | **object** | When custom mappings are configured on the resource, the result is included here. | [optional] 
`deleted` | **bool** | Flag to indicate if the object is deleted. | [optional] 
`deleted_by` | **string** | The user who deleted the object. | [optional] 
`deleted_at` | **\DateTime** | The time at which the object was deleted. | [optional] 
`updated_by` | **string** | The user who last updated the object. | [optional] 
`created_by` | **string** | The user who created the object. | [optional] 
`updated_at` | **\DateTime** | The date and time when the object was last updated. | [optional] 
`created_at` | **\DateTime** | The date and time when the object was created. | [optional] 





## Referenced Types:












* [`Email`](Email.md)
* [`CustomField`](CustomField.md)
* [`PhoneNumber`](PhoneNumber.md)
* [`Address`](Address.md)
* [`ApplicantWebsites`](ApplicantWebsites.md)
* [`ApplicantSocialLinks`](ApplicantSocialLinks.md)



























---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


