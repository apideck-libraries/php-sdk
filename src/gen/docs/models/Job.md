# Apideck.Job

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** | A unique identifier for an object. | [optional] 
`slug` | **string** |  | [optional] 
`title` | **string** | The job title of the person. | [optional] 
`sequence` | **int** | Sequence in relation to other jobs. | [optional] 
`visibility` | **string** | The visibility of the job | [optional] 
`status` | [**\Apideck\Client\Model\JobStatus**](JobStatus.md) |  | [optional] 
`code` | **string** | The code of the job. | [optional] 
`language` | **string** | language code according to ISO 639-1. For the United States - EN | [optional] 
`employment_terms` | **string** |  | [optional] 
`experience` | **string** | Level of experience required for the job role. | [optional] 
`remote` | **bool** | Specifies whether the posting is for a remote job. | [optional] 
`requisition_id` | **string** | A job's Requisition ID (Req ID) allows your organization to identify and track a job based on alphanumeric naming conventions unique to your company's internal processes. | [optional] 
`department` | [**\Apideck\Client\Model\Department**](Department.md) |  | [optional] 
`branch` | [**\Apideck\Client\Model\Branch**](Branch.md) |  | [optional] 
`recruiters` | **string[]** | The recruiter is generally someone who is tasked to help the hiring manager find and screen qualified applicant | [optional] 
`hiring_managers` | **object[]** |  | [optional] 
`followers` | **string[]** |  | [optional] 
`description` | **string** | A description of the object. | [optional] 
`description_html` | **string** | The job description in HTML format | [optional] 
`blocks` | **object[]** |  | [optional] 
`closing` | **string** |  | [optional] 
`closing_html` | **string** | The closing section of the job description in HTML format | [optional] 
`closing_date` | **\DateTime** |  | [optional] 
`salary` | [**\Apideck\Client\Model\JobSalary**](JobSalary.md) |  | [optional] 
`url` | **string** | URL of the job description | [optional] 
`job_portal_url` | **string** | URL of the job portal | [optional] 
`confidential` | **bool** |  | [optional] 
`available_to_employees` | **bool** | Specifies whether an employee of the organization can apply for the job. | [optional] 
`tags` | **string[]** |  | [optional] 
`addresses` | [**\Apideck\Client\Model\Address[]**](Address.md) |  | [optional] 
`record_url` | **string** |  | [optional] 
`deleted` | **bool** |  | [optional] 
`owner_id` | **string** |  | [optional] 
`published_at` | **\DateTime** |  | [optional] 
`updated_by` | **string** | The user who last updated the object. | [optional] 
`created_by` | **string** | The user who created the object. | [optional] 
`updated_at` | **\DateTime** | The date and time when the object was last updated. | [optional] 
`created_at` | **\DateTime** | The date and time when the object was created. | [optional] 





<a name="VISIBILITY"></a>
## Enum: Job.visibility


* `_PUBLIC` (value: `'public'`)

* `INTERNAL` (value: `'internal'`)




<a name="EMPLOYMENT_TERMS"></a>
## Enum: Job.employment_terms


* `FULL_TIME` (value: `'full-time'`)

* `PART_TIME` (value: `'part-time'`)

* `INTERNSHIP` (value: `'internship'`)

* `CONTRACTOR` (value: `'contractor'`)

* `EMPLOYEE` (value: `'employee'`)

* `FREELANCE` (value: `'freelance'`)

* `TEMP` (value: `'temp'`)

* `SEASONAL` (value: `'seasonal'`)

* `VOLUNTEER` (value: `'volunteer'`)

* `OTHER` (value: `'other'`)




## Referenced Types:





* [`JobStatus`](JobStatus.md)






* [`Department`](Department.md)
* [`Branch`](Branch.md)









* [`JobSalary`](JobSalary.md)





* [`Address`](Address.md)









---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


