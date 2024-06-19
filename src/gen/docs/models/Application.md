# Apideck.Application

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`applicant_id` | **string** |  | 
`job_id` | **string** |  | 
`id` | **string** | A unique identifier for an object. | [optional] 
`status` | **string** |  | [optional] 
`stage` | [**\Apideck\Client\Model\ApplicationStage**](ApplicationStage.md) |  | [optional] 
`custom_mappings` | **object** | When custom mappings are configured on the resource, the result is included here. | [optional] 
`updated_by` | **string** | The user who last updated the object. | [optional] 
`created_by` | **string** | The user who created the object. | [optional] 
`updated_at` | **\DateTime** | The date and time when the object was last updated. | [optional] 
`created_at` | **\DateTime** | The date and time when the object was created. | [optional] 
`pass_through` | **object[]** | The pass_through property allows passing service-specific, custom data or structured modifications in request body when creating or updating resources. | [optional] 





<a name="STATUS"></a>
## Enum: Application.status


* `OPEN` (value: `'open'`)

* `REJECTED` (value: `'rejected'`)

* `HIRED` (value: `'hired'`)

* `CONVERTED` (value: `'converted'`)

* `OTHER` (value: `'other'`)




## Referenced Types:




* [`ApplicationStage`](ApplicationStage.md)







---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


