# Apideck.ApiResourceCoverageCoverage

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`downstream_id` | **string** | ID of the resource in the Connector's API (downstream) | [optional] 
`downstream_name` | **string** | Name of the resource in the Connector's API (downstream) | [optional] 
`pagination_supported` | **bool** | Indicates if pagination (cursor and limit parameters) is supported on the list endpoint of the resource. | [optional] 
`pagination` | [**\Apideck\Client\Model\PaginationCoverage**](PaginationCoverage.md) |  | [optional] 
`supported_operations` | **string[]** | List of supported operations on the resource. | [optional] 
`supported_filters` | **string[]** | Supported filters on the list endpoint of the resource. | [optional] 
`supported_sort_by` | **string[]** | Supported sorting properties on the list endpoint of the resource. | [optional] 
`supported_fields` | [**\Apideck\Client\Model\SupportedProperty[]**](SupportedProperty.md) | Supported fields on the detail endpoint. | [optional] 
`supported_list_fields` | [**\Apideck\Client\Model\SupportedProperty[]**](SupportedProperty.md) | Supported fields on the list endpoint. | [optional] 





## Referenced Types:



* [`PaginationCoverage`](PaginationCoverage.md)



* [`SupportedProperty`](SupportedProperty.md)
* [`SupportedProperty`](SupportedProperty.md)

---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


