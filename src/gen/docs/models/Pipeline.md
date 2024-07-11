# Apideck.Pipeline

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`name` | **string** | The name of the Pipeline. | 
`id` | **string** | The unique identifier of the Pipeline. | [optional] 
`currency` | [**\Apideck\Client\Model\Currency**](Currency.md) |  | [optional] 
`archived` | **bool** | Whether the Pipeline is archived or not. | [optional] 
`active` | **bool** | Whether the Pipeline is active or not. | [optional] 
`display_order` | **int** | The order in which the Pipeline is displayed in the UI. | [optional] 
`win_probability_enabled` | **bool** | Whether the Pipeline has win probability enabled or not. | [optional] 
`stages` | [**\Apideck\Client\Model\PipelineStages[]**](PipelineStages.md) | The Pipeline Stages. | [optional] 
`updated_at` | **\DateTime** | The date and time when the object was last updated. | [optional] 
`created_at` | **\DateTime** | The date and time when the object was created. | [optional] 
`pass_through` | **object[]** | The pass_through property allows passing service-specific, custom data or structured modifications in request body when creating or updating resources. | [optional] 





## Referenced Types:


* [`Currency`](Currency.md)




* [`PipelineStages`](PipelineStages.md)




---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


