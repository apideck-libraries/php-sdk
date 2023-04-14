# Apideck.Consumer

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`consumer_id` | **string** | Unique consumer identifier. You can freely choose a consumer ID yourself. Most of the time, this is an ID of your internal data model that represents a user or account in your system (for example account:12345). If the consumer doesn't exist yet, Vault will upsert a consumer based on your ID. | 
`application_id` | **string** | ID of your Apideck Application | [optional] 
`metadata` | [**\Apideck\Client\Model\ConsumerMetadata**](ConsumerMetadata.md) |  | [optional] 
`connections` | [**\Apideck\Client\Model\ConsumerConnection[]**](ConsumerConnection.md) |  | [optional] 
`services` | **string[]** |  | [optional] 
`aggregated_request_count` | **float** |  | [optional] 
`request_counts` | [**\Apideck\Client\Model\RequestCountAllocation**](RequestCountAllocation.md) |  | [optional] 
`created` | **string** |  | [optional] 
`modified` | **string** |  | [optional] 
`request_count_updated` | **string** |  | [optional] 





## Referenced Types:


* [`ConsumerMetadata`](ConsumerMetadata.md)
* [`ConsumerConnection`](ConsumerConnection.md)


* [`RequestCountAllocation`](RequestCountAllocation.md)




---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


