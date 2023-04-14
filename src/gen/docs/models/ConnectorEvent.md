# Apideck.ConnectorEvent

### Description

Unify event that is supported on the connector. Events are delivered via Webhooks.

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`event_type` | **string** | Unify event type | [optional] 
`event_source` | **string** | Unify event source | [optional] 
`downstream_event_type` | **string** | Downstream event type | [optional] 
`resources` | **string[]** |  | [optional] 
`entity_type` | **string** | Unify entity type | [optional] 





<a name="EVENT_SOURCE"></a>
## Enum: ConnectorEvent.event_source


* `NATIVE` (value: `'native'`)

* `VIRTUAL` (value: `'virtual'`)




---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


