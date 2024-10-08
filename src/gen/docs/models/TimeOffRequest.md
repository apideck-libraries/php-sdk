# Apideck.TimeOffRequest

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** | A unique identifier for an object. | [optional] 
`employee_id` | **string** | ID of the employee | [optional] 
`policy_id` | **string** | ID of the policy | [optional] 
`status` | **string** | The status of the time off request. | [optional] 
`description` | **string** | Description of the time off request. | [optional] 
`start_date` | **string** | The start date of the time off request. | [optional] 
`end_date` | **string** | The end date of the time off request. | [optional] 
`request_date` | **string** | The date the request was made. | [optional] 
`request_type` | **string** | The type of request | [optional] 
`approval_date` | **string** | The date the request was approved | [optional] 
`units` | **string** | The unit of time off requested. Possible values include: &#x60;hours&#x60;, &#x60;days&#x60;, or &#x60;other&#x60;. | [optional] 
`amount` | **float** | The amount of time off requested. | [optional] 
`day_part` | **string** | The day part of the time off request. | [optional] 
`notes` | [**\Apideck\Client\Model\TimeOffRequestNotes**](TimeOffRequestNotes.md) |  | [optional] 
`custom_mappings` | **object** | When custom mappings are configured on the resource, the result is included here. | [optional] 
`updated_by` | **string** | The user who last updated the object. | [optional] 
`created_by` | **string** | The user who created the object. | [optional] 
`updated_at` | **\DateTime** | The date and time when the object was last updated. | [optional] 
`created_at` | **\DateTime** | The date and time when the object was created. | [optional] 
`pass_through` | **object[]** | The pass_through property allows passing service-specific, custom data or structured modifications in request body when creating or updating resources. | [optional] 
`policy_type` | **string** | The policy type of the time off request | [optional] 





<a name="STATUS"></a>
## Enum: TimeOffRequest.status


* `REQUESTED` (value: `'requested'`)

* `APPROVED` (value: `'approved'`)

* `DECLINED` (value: `'declined'`)

* `CANCELLED` (value: `'cancelled'`)

* `DELETED` (value: `'deleted'`)

* `OTHER` (value: `'other'`)




<a name="REQUEST_TYPE"></a>
## Enum: TimeOffRequest.request_type


* `VACATION` (value: `'vacation'`)

* `SICK` (value: `'sick'`)

* `PERSONAL` (value: `'personal'`)

* `JURY_DUTY` (value: `'jury_duty'`)

* `VOLUNTEER` (value: `'volunteer'`)

* `BEREAVEMENT` (value: `'bereavement'`)

* `OTHER` (value: `'other'`)




<a name="UNITS"></a>
## Enum: TimeOffRequest.units


* `DAYS` (value: `'days'`)

* `HOURS` (value: `'hours'`)

* `OTHER` (value: `'other'`)




## Referenced Types:













* [`TimeOffRequestNotes`](TimeOffRequestNotes.md)








---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


