# Apideck.Job

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** |  | [optional] 
`title` | **string** |  | [optional] 
`visibility` | **string[]** |  | [optional] 
`status` | [**\Apideck\Client\Model\JobStatus**](JobStatus.md) |  | [optional] 
`code` | **string** | The code of the job. | [optional] 
`requisition_id` | **string** | A job's Requisition ID (Req ID) allows your organization to identify and track a job based on alphanumeric naming conventions unique to your company's internal processes. | [optional] 
`hiring_managers` | **object[]** |  | [optional] 
`description` | **string** |  | [optional] 
`description_html` | **string** | The job description in HTML format | [optional] 
`blocks` | **object[]** |  | [optional] 
`closing` | **string** |  | [optional] 
`closing_html` | **string** | The closing section of the job description in HTML format | [optional] 
`url` | **string** | URL of the job description | [optional] 
`job_portal_url` | **string** | URL of the job portal | [optional] 
`confidential` | **bool** |  | [optional] 
`tags` | **string[]** |  | [optional] 
`owner_id` | **string** |  | [optional] 
`updated_by` | **string** |  | [optional] 
`created_by` | **string** |  | [optional] 
`updated_at` | **\DateTime** |  | [optional] 
`created_at` | **\DateTime** |  | [optional] 





<a name="VISIBILITY[]"></a>
## Enum: Job.visibility


* `_PUBLIC` (value: `'public'`)

* `INTERNAL` (value: `'internal'`)




## Referenced Types:



* [`JobStatus`](JobStatus.md)


















---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


