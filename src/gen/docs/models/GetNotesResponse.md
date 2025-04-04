# Apideck.GetNotesResponse

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`status_code` | **int** | HTTP Response Status Code | 
`status` | **string** | HTTP Response Status | 
`service` | **string** | Apideck ID of service provider | 
`resource` | **string** | Unified API resource name | 
`operation` | **string** | Operation performed | 
`data` | [**\Apideck\Client\Model\Note[]**](Note.md) |  | 
`_raw` | **array&lt;string,object&gt;** | Raw response from the integration when raw=true query param is provided | [optional] 
`meta` | [**\Apideck\Client\Model\Meta**](Meta.md) |  | [optional] 
`links` | [**\Apideck\Client\Model\Links**](Links.md) |  | [optional] 





## Referenced Types:





* [`Note`](Note.md)

* [`Meta`](Meta.md)
* [`Links`](Links.md)

---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


