# Apideck.Employee

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** |  | 
`first_name` | **string** |  | [optional] 
`last_name` | **string** |  | [optional] 
`middle_name` | **string** |  | [optional] 
`display_name` | **string** |  | [optional] 
`preferred_name` | **string** |  | [optional] 
`initials` | **string** |  | [optional] 
`salutation` | **string** |  | [optional] 
`title` | **string** |  | [optional] 
`marital_status` | **string** |  | [optional] 
`partner` | [**\Apideck\Client\Model\EmployeePartner**](EmployeePartner.md) |  | [optional] 
`division` | **string** | The division the user is currently in. | [optional] 
`division_id` | **string** | Unique identifier of the division this employee belongs to. | [optional] 
`department` | **string** | The department the user is currently in. | [optional] 
`department_id` | **string** | Unique identifier of the department ID this employee belongs to. | [optional] 
`team` | [**\Apideck\Client\Model\EmployeeTeam**](EmployeeTeam.md) |  | [optional] 
`company_id` | **string** |  | [optional] 
`company_name` | **string** |  | [optional] 
`employment_start_date` | **string** | A Start Date is the date that the employee started working at the company | [optional] 
`employment_end_date` | **string** | A Start Date is the date that the employee ended working at the company | [optional] 
`leaving_reason` | **string** | The reason because the employment ended | [optional] 
`employee_number` | **string** | An Employee Number, Employee ID or Employee Code, is a unique number that has been assigned to each individual staff member within a company. | [optional] 
`employment_status` | **string** |  | [optional] 
`employment_role` | [**\Apideck\Client\Model\EmployeeEmploymentRole**](EmployeeEmploymentRole.md) |  | [optional] 
`manager` | [**\Apideck\Client\Model\EmployeeManager**](EmployeeManager.md) |  | [optional] 
`direct_reports` | **string[]** |  | [optional] 
`social_security_number` | **string** |  | [optional] 
`birthday` | **\DateTime** |  | [optional] 
`deceased_on` | **\DateTime** |  | [optional] 
`country_of_birth` | **string** | country code according to ISO 3166-1 alpha-2. | [optional] 
`description` | **string** |  | [optional] 
`gender` | [**\Apideck\Client\Model\Gender**](Gender.md) |  | [optional] 
`pronouns` | **string** |  | [optional] 
`preferred_language` | **string** | language code according to ISO 639-1. For the United States - EN | [optional] 
`languages` | **string[]** |  | [optional] 
`nationalities` | **string[]** |  | [optional] 
`photo_url` | **string** |  | [optional] 
`timezone` | **string** |  | [optional] 
`source` | **string** | When the employee is imported as a new hire, this field indicates what system (e.g. the name of the ATS) this employee was imported from. | [optional] 
`source_id` | **string** | Unique identifier of the employee in the system this employee was imported from (e.g. the ID in the ATS). | [optional] 
`record_url` | **string** |  | [optional] 
`jobs` | [**\Apideck\Client\Model\EmployeeJobs[]**](EmployeeJobs.md) |  | [optional] 
`compensations` | [**\Apideck\Client\Model\EmployeeCompensations[]**](EmployeeCompensations.md) |  | [optional] 
`works_remote` | **bool** | Indicates whether the employee works remote | [optional] 
`addresses` | [**\Apideck\Client\Model\Address[]**](Address.md) |  | [optional] 
`phone_numbers` | [**\Apideck\Client\Model\PhoneNumber[]**](PhoneNumber.md) |  | [optional] 
`emails` | [**\Apideck\Client\Model\Email[]**](Email.md) |  | [optional] 
`custom_fields` | [**\Apideck\Client\Model\CustomField[]**](CustomField.md) |  | [optional] 
`social_links` | [**\Apideck\Client\Model\ApplicantSocialLinks[]**](ApplicantSocialLinks.md) |  | [optional] 
`tax_code` | **string** |  | [optional] 
`tax_id` | **string** |  | [optional] 
`dietary_preference` | **string** | Indicate the employee's dietary preference. | [optional] 
`food_allergies` | **string[]** | Indicate the employee's food allergies. | [optional] 
`tags` | **string[]** |  | [optional] 
`row_version` | **string** |  | [optional] 
`deleted` | **bool** |  | [optional] 
`updated_by` | **string** |  | [optional] 
`created_by` | **string** |  | [optional] 
`updated_at` | **\DateTime** |  | [optional] 
`created_at` | **\DateTime** |  | [optional] 





<a name="LEAVING_REASON"></a>
## Enum: Employee.leaving_reason


* `DISMISSED` (value: `'dismissed'`)

* `RESIGNED` (value: `'resigned'`)

* `REDUNDANCY` (value: `'redundancy'`)

* `OTHER` (value: `'other'`)




<a name="EMPLOYMENT_STATUS"></a>
## Enum: Employee.employment_status


* `ACTIVE` (value: `'active'`)

* `INACTIVE` (value: `'inactive'`)

* `TERMINATED` (value: `'terminated'`)

* `OTHER` (value: `'other'`)




## Referenced Types:










* [`EmployeePartner`](EmployeePartner.md)




* [`EmployeeTeam`](EmployeeTeam.md)







* [`EmployeeEmploymentRole`](EmployeeEmploymentRole.md)
* [`EmployeeManager`](EmployeeManager.md)






* [`Gender`](Gender.md)









* [`EmployeeJobs`](EmployeeJobs.md)
* [`EmployeeCompensations`](EmployeeCompensations.md)

* [`Address`](Address.md)
* [`PhoneNumber`](PhoneNumber.md)
* [`Email`](Email.md)
* [`CustomField`](CustomField.md)
* [`ApplicantSocialLinks`](ApplicantSocialLinks.md)












---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


