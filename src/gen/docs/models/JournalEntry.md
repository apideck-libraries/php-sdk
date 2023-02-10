# Apideck.JournalEntry

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** | A unique identifier for an object. | [optional] 
`currency_rate` | [**\Apideck\Client\Model\Currency**](Currency.md) |  | [optional] 
`currency` | [**\Apideck\Client\Model\Currency**](Currency.md) |  | [optional] 
`line_items` | [**\Apideck\Client\Model\JournalEntryLineItem[]**](JournalEntryLineItem.md) | Requires a minimum of 2 line items that sum to 0 | [optional] 
`memo` | **string** | Reference for the journal entry. | [optional] 
`updated_by` | **string** | The user who last updated the object. | [optional] 
`created_by` | **string** | The user who created the object. | [optional] 
`updated_at` | **\DateTime** | The date and time when the object was last updated. | [optional] 
`posted_at` | **\DateTime** | This is the date on which the journal entry was added. This can be different from the creation date and can also be backdated. | [optional] 
`created_at` | **\DateTime** | The date and time when the object was created. | [optional] 





## Referenced Types:

* [`Currency`](Currency.md)
* [`Currency`](Currency.md)
* [`JournalEntryLineItem`](JournalEntryLineItem.md)







---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


