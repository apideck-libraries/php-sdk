# Apideck.Activity

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`type` | **string** | The type of the activity | 
`id` | **string** | The unique identifier of the activity | [optional] 
`downstream_id` | **string** | The third-party API ID of original entity | [optional] 
`activity_datetime` | **string** | The date and time of the activity | [optional] 
`duration_seconds` | **int** | The duration of the activity in seconds | [optional] 
`user_id` | **string** | The user related to the activity | [optional] 
`account_id` | **string** | The account related to the activity | [optional] 
`contact_id` | **string** | The contact related to the activity | [optional] 
`company_id` | **string** | The company related to the activity | [optional] 
`opportunity_id` | **string** | The opportunity related to the activity | [optional] 
`lead_id` | **string** | The lead related to the activity | [optional] 
`owner_id` | **string** | The owner of the activity | [optional] 
`campaign_id` | **string** | The campaign related to the activity | [optional] 
`case_id` | **string** | The case related to the activity | [optional] 
`asset_id` | **string** | The asset related to the activity | [optional] 
`contract_id` | **string** | The contract related to the activity | [optional] 
`product_id` | **string** | The product related to the activity | [optional] 
`solution_id` | **string** | The solution related to the activity | [optional] 
`custom_object_id` | **string** | The custom object related to the activity | [optional] 
`title` | **string** | The title of the activity | [optional] 
`description` | **string** | A description of the activity | [optional] 
`note` | **string** | An internal note about the activity | [optional] 
`location` | **string** | The location of the activity | [optional] 
`location_address` | [**\Apideck\Client\Model\Address**](Address.md) |  | [optional] 
`all_day_event` | **bool** | Whether the Activity is an all day event or not | [optional] 
`private` | **bool** | Whether the Activity is private or not | [optional] 
`group_event` | **bool** | Whether the Activity is a group event or not | [optional] 
`event_sub_type` | **string** | The sub type of the group event | [optional] 
`group_event_type` | **string** | The type of the group event | [optional] 
`child` | **bool** | Whether the activity is a child of another activity or not | [optional] 
`archived` | **bool** | Whether the activity is archived or not | [optional] 
`deleted` | **bool** | Whether the activity is deleted or not | [optional] 
`show_as` | **string** |  | [optional] 
`done` | **bool** | Whether the Activity is done or not | [optional] 
`start_datetime` | **string** | The start date and time of the activity | [optional] 
`end_datetime` | **string** | The end date and time of the activity | [optional] 
`duration_minutes` | **int** | The duration of the activity in minutes | [optional] 
`activity_date` | **string** | The date of the activity | [optional] 
`end_date` | **string** | The end date of the activity | [optional] 
`recurrent` | **bool** | Whether the activity is recurrent or not | [optional] 
`reminder_datetime` | **string** | The date and time of the reminder | [optional] 
`reminder_set` | **bool** | Whether the reminder is set or not | [optional] 
`video_conference_url` | **string** | The URL of the video conference | [optional] 
`video_conference_id` | **string** | The ID of the video conference | [optional] 
`custom_fields` | [**\Apideck\Client\Model\CustomField[]**](CustomField.md) | Custom fields of the activity | [optional] 
`attendees` | [**\Apideck\Client\Model\ActivityAttendee[]**](ActivityAttendee.md) |  | [optional] 
`custom_mappings` | **object** | When custom mappings are configured on the resource, the result is included here. | [optional] 
`updated_by` | **string** | The user who last updated the activity | [optional] 
`created_by` | **string** | The user who created the activity | [optional] 
`updated_at` | **string** | The date and time when the activity was last updated | [optional] 
`created_at` | **string** | The date and time when the activity was created | [optional] 
`pass_through` | **object[]** | The pass_through property allows passing service-specific, custom data or structured modifications in request body when creating or updating resources. | [optional] 





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


