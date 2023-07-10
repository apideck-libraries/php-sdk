# Apideck.Employee

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** | A unique identifier for an object. | 
`first_name` | **string** | The first name of the person. | [optional] 
`last_name` | **string** | The last name of the person. | [optional] 
`middle_name` | **string** | Middle name of the person. | [optional] 
`display_name` | **string** | The name used to display the employee, often a combination of their first and last names. | [optional] 
`preferred_name` | **string** | The name the employee prefers to be addressed by, which may be different from their legal name. | [optional] 
`initials` | **string** | The initials of the person, usually derived from their first, middle, and last names. | [optional] 
`salutation` | **string** | A formal salutation for the person. For example, 'Mr', 'Mrs' | [optional] 
`title` | **string** | The job title of the person. | [optional] 
`marital_status` | **string** | The marital status of the employee. | [optional] 
`partner` | [**\Apideck\Client\Model\Person**](Person.md) |  | [optional] 
`division` | **string** | The division the person is currently in. Usually a collection of departments or teams or regions. | [optional] 
`division_id` | **string** | Unique identifier of the division this employee belongs to. | [optional] 
`department` | **string** | The department the person is currently in. [Deprecated](https://developers.apideck.com/changelog) in favor of the dedicated department_id and department_name field. | [optional] 
`department_id` | **string** | Unique identifier of the department ID this employee belongs to. | [optional] 
`department_name` | **string** | Name of the department this employee belongs to. | [optional] 
`team` | [**\Apideck\Client\Model\Team**](Team.md) |  | [optional] 
`teams` | [**\Apideck\Client\Model\Team[]**](Team.md) |  | [optional] 
`company_id` | **string** | The unique identifier of the company. | [optional] 
`company_name` | **string** | The name of the company. | [optional] 
`employment_start_date` | **string** | A Start Date is the date that the employee started working at the company | [optional] 
`employment_end_date` | **string** | An End Date is the date that the employee ended working at the company | [optional] 
`leaving_reason` | **string** | The reason because the employment ended. | [optional] 
`employee_number` | **string** | An Employee Number, Employee ID or Employee Code, is a unique number that has been assigned to each individual staff member within a company. | [optional] 
`employment_status` | [**\Apideck\Client\Model\EmploymentStatus**](EmploymentStatus.md) |  | [optional] 
`employment_role` | [**\Apideck\Client\Model\EmployeeEmploymentRole**](EmployeeEmploymentRole.md) |  | [optional] 
`manager` | [**\Apideck\Client\Model\EmployeeManager**](EmployeeManager.md) |  | [optional] 
`direct_reports` | **string[]** | The direct reports refer to the individuals who report directly to a person in the organizational hierarchy. | [optional] 
`social_security_number` | **string** | A unique identifier assigned by the government. This field is considered sensitive information and may be subject to special security and privacy restrictions. | [optional] 
`birthday` | **\DateTime** | The date of birth of the person. | [optional] 
`deceased_on` | **\DateTime** | The date the person deceased. | [optional] 
`country_of_birth` | **string** | Country code according to ISO 3166-1 alpha-2. | [optional] 
`description` | **string** | A description of the object. | [optional] 
`gender` | [**\Apideck\Client\Model\Gender**](Gender.md) |  | [optional] 
`pronouns` | **string** | The preferred pronouns of the person. | [optional] 
`preferred_language` | **string** | language code according to ISO 639-1. For the United States - EN | [optional] 
`languages` | **string[]** |  | [optional] 
`nationalities` | **string[]** |  | [optional] 
`photo_url` | **string** | The URL of the photo of a person. | [optional] 
`timezone` | **string** | The time zone related to the resource. The value is a string containing a standard time zone identifier, e.g. Europe/London. | [optional] 
`source` | **string** | When the employee is imported as a new hire, this field indicates what system (e.g. the name of the ATS) this employee was imported from. | [optional] 
`source_id` | **string** | Unique identifier of the employee in the system this employee was imported from (e.g. the ID in the ATS). | [optional] 
`record_url` | **string** |  | [optional] 
`jobs` | [**\Apideck\Client\Model\Job[]**](Job.md) |  | [optional] 
`compensations` | [**\Apideck\Client\Model\Compensation[]**](Compensation.md) |  | [optional] 
`works_remote` | **bool** | Indicates if the employee works from a remote location. | [optional] 
`addresses` | [**\Apideck\Client\Model\Address[]**](Address.md) |  | [optional] 
`phone_numbers` | [**\Apideck\Client\Model\PhoneNumber[]**](PhoneNumber.md) |  | [optional] 
`emails` | [**\Apideck\Client\Model\Email[]**](Email.md) |  | [optional] 
`custom_fields` | [**\Apideck\Client\Model\CustomField[]**](CustomField.md) |  | [optional] 
`social_links` | [**\Apideck\Client\Model\ApplicantSocialLinks[]**](ApplicantSocialLinks.md) |  | [optional] 
`bank_accounts` | [**\Apideck\Client\Model\EmployeeBankAccounts[]**](EmployeeBankAccounts.md) |  | [optional] 
`tax_code` | **string** |  | [optional] 
`tax_id` | **string** |  | [optional] 
`dietary_preference` | **string** | Indicate the employee's dietary preference. | [optional] 
`food_allergies` | **string[]** | Indicate the employee's food allergies. | [optional] 
`probation_period` | [**\Apideck\Client\Model\ProbationPeriod**](ProbationPeriod.md) |  | [optional] 
`tags` | **string[]** |  | [optional] 
`row_version` | **string** | A binary value used to detect updates to a object and prevent data conflicts. It is incremented each time an update is made to the object. | [optional] 
`deleted` | **bool** |  | [optional] 
`updated_by` | **string** | The user who last updated the object. | [optional] 
`created_by` | **string** | The user who created the object. | [optional] 
`updated_at` | **\DateTime** | The date and time when the object was last updated. | [optional] 
`created_at` | **\DateTime** | The date and time when the object was created. | [optional] 





<a name="LEAVING_REASON"></a>
## Enum: Employee.leaving_reason


* `DISMISSED` (value: `'dismissed'`)

* `RESIGNED` (value: `'resigned'`)

* `REDUNDANCY` (value: `'redundancy'`)

* `OTHER` (value: `'other'`)




## Referenced Types:










* [`Person`](Person.md)





* [`Team`](Team.md)
* [`Team`](Team.md)






* [`EmploymentStatus`](EmploymentStatus.md)
* [`EmployeeEmploymentRole`](EmployeeEmploymentRole.md)
* [`EmployeeManager`](EmployeeManager.md)






* [`Gender`](Gender.md)









* [`Job`](Job.md)
* [`Compensation`](Compensation.md)

* [`Address`](Address.md)
* [`PhoneNumber`](PhoneNumber.md)
* [`Email`](Email.md)
* [`CustomField`](CustomField.md)
* [`ApplicantSocialLinks`](ApplicantSocialLinks.md)
* [`EmployeeBankAccounts`](EmployeeBankAccounts.md)




* [`ProbationPeriod`](ProbationPeriod.md)








---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


