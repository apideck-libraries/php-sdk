# Apideck.HrisJob

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** | A unique identifier for an object. | [optional] 
`employee_id` | **string** | Id of the employee | [optional] 
`title` | **string** | The job title of the person. | [optional] 
`start_date` | **\DateTime** |  | [optional] 
`end_date` | **\DateTime** |  | [optional] 
`employment_status` | [**\Apideck\Client\Model\EmploymentStatus**](EmploymentStatus.md) |  | [optional] 
`department` | **string** | Department name | [optional] 
`is_primary` | **bool** | Indicates whether this the employee's primary job. | [optional] 
`location` | [**\Apideck\Client\Model\HrisJobLocation**](HrisJobLocation.md) |  | [optional] 
`custom_mappings` | **object** | When custom mappings are configured on the resource, the result is included here. | [optional] 





## Referenced Types:





* [`EmploymentStatus`](EmploymentStatus.md)


* [`HrisJobLocation`](HrisJobLocation.md)


---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


