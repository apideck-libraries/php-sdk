# Apideck.Activity

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`type` | **string** |  | 
`id` | **string** |  | [optional] 
`downstream_id` | **string** | The third-party API ID of original entity | [optional] 
`activity_datetime` | **string** |  | [optional] 
`duration_seconds` | **int** |  | [optional] 
`user_id` | **string** |  | [optional] 
`account_id` | **string** |  | [optional] 
`contact_id` | **string** |  | [optional] 
`company_id` | **string** |  | [optional] 
`opportunity_id` | **string** |  | [optional] 
`lead_id` | **string** |  | [optional] 
`owner_id` | **string** |  | [optional] 
`campaign_id` | **string** |  | [optional] 
`case_id` | **string** |  | [optional] 
`asset_id` | **string** |  | [optional] 
`contract_id` | **string** |  | [optional] 
`product_id` | **string** |  | [optional] 
`solution_id` | **string** |  | [optional] 
`custom_object_id` | **string** |  | [optional] 
`title` | **string** |  | [optional] 
`description` | **string** |  | [optional] 
`note` | **string** |  | [optional] 
`location` | **string** |  | [optional] 
`location_address` | [**\Apideck\Client\Model\Address**](Address.md) |  | [optional] 
`all_day_event` | **bool** |  | [optional] 
`private` | **bool** |  | [optional] 
`group_event` | **bool** |  | [optional] 
`event_sub_type` | **string** |  | [optional] 
`group_event_type` | **string** |  | [optional] 
`child` | **bool** |  | [optional] 
`archived` | **bool** |  | [optional] 
`deleted` | **bool** |  | [optional] 
`show_as` | **string** |  | [optional] 
`done` | **bool** | Whether the Activity is done or not | [optional] 
`start_datetime` | **string** |  | [optional] 
`end_datetime` | **string** |  | [optional] 
`duration_minutes` | **int** |  | [optional] 
`activity_date` | **string** |  | [optional] 
`end_date` | **string** |  | [optional] 
`recurrent` | **bool** |  | [optional] 
`reminder_datetime` | **string** |  | [optional] 
`reminder_set` | **bool** |  | [optional] 
`video_conference_url` | **string** |  | [optional] 
`video_conference_id` | **string** |  | [optional] 
`custom_fields` | [**\Apideck\Client\Model\CustomField[]**](CustomField.md) |  | [optional] 
`attendees` | [**\Apideck\Client\Model\ActivityAttendee[]**](ActivityAttendee.md) |  | [optional] 
`updated_by` | **string** |  | [optional] 
`created_by` | **string** |  | [optional] 
`updated_at` | **string** |  | [optional] 
`created_at` | **string** |  | [optional] 





<a name="TYPE"></a>
## Enum: Activity.type


* `CALL` (value: `'call'`)

* `MEETING` (value: `'meeting'`)

* `EMAIL` (value: `'email'`)

* `NOTE` (value: `'note'`)

* `TASK` (value: `'task'`)

* `DEADLINE` (value: `'deadline'`)

* `SEND_LETTER` (value: `'send-letter'`)

* `SEND_QUOTE` (value: `'send-quote'`)

* `OTHER` (value: `'other'`)




<a name="SHOW_AS"></a>
## Enum: Activity.show_as


* `FREE` (value: `'free'`)

* `BUSY` (value: `'busy'`)




## Referenced Types:























* [`Address`](Address.md)




















* [`CustomField`](CustomField.md)
* [`ActivityAttendee`](ActivityAttendee.md)





---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


