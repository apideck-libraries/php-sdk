# Apideck.TrackingCategory

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** | A unique identifier for an object. | [optional] 
`parent_id` | **string** | A unique identifier for an object. | [optional] 
`name` | **string** | The name of the tracking category. | [optional] 
`code` | **string** | The code of the tracking category. | [optional] 
`status` | **string** | Based on the status some functionality is enabled or disabled. | [optional] 
`custom_mappings` | **object** | When custom mappings are configured on the resource, the result is included here. | [optional] 
`row_version` | **string** | A binary value used to detect updates to a object and prevent data conflicts. It is incremented each time an update is made to the object. | [optional] 
`updated_by` | **string** | The user who last updated the object. | [optional] 
`created_by` | **string** | The user who created the object. | [optional] 
`updated_at` | **\DateTime** | The date and time when the object was last updated. | [optional] 
`created_at` | **\DateTime** | The date and time when the object was created. | [optional] 
`pass_through` | **object[]** | The pass_through property allows passing service-specific, custom data or structured modifications in request body when creating or updating resources. | [optional] 
`subsidiaries` | **object[]** | The subsidiaries the account belongs to. | [optional] 





<a name="STATUS"></a>
## Enum: TrackingCategory.status


* `ACTIVE` (value: `'active'`)

* `INACTIVE` (value: `'inactive'`)




---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


