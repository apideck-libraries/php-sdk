# Apideck.Ticket

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** | A unique identifier for an object. | 
`parent_id` | **string** | The ticket's parent ID | [optional] 
`collection_id` | **string** | The ticket's collection ID | [optional] 
`type` | **string** | The ticket's type | [optional] 
`subject` | **string** | Subject of the ticket | [optional] 
`description` | **string** | The ticket's description. HTML version of description is mapped if supported by the third-party platform | [optional] 
`status` | **string** | The current status of the ticket. Possible values include: open, in_progress, closed, or - in cases where there is no clear mapping - the original value passed through. | [optional] 
`priority` | **string** | Priority of the ticket | [optional] 
`assignees` | [**\Apideck\Client\Model\Assignee[]**](Assignee.md) |  | [optional] 
`updated_at` | **\DateTime** | The date and time when the object was last updated. | [optional] 
`created_at` | **\DateTime** | The date and time when the object was created. | [optional] 
`created_by` | **string** | The user who created the object. | [optional] 
`due_date` | **\DateTime** | Due date of the ticket | [optional] 
`completed_at` | **\DateTime** | When the ticket was completed | [optional] 
`tags` | [**\Apideck\Client\Model\CollectionTag[]**](CollectionTag.md) |  | [optional] 
`custom_mappings` | **object** | When custom mappings are configured on the resource, the result is included here. | [optional] 





<a name="PRIORITY"></a>
## Enum: Ticket.priority


* `LOW` (value: `'low'`)

* `NORMAL` (value: `'normal'`)

* `HIGH` (value: `'high'`)

* `URGENT` (value: `'urgent'`)




## Referenced Types:








* [`Assignee`](Assignee.md)





* [`CollectionTag`](CollectionTag.md)


---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


