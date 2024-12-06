# Apideck.BadRequestResponse

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`status_code` | **float** | HTTP status code | [optional] 
`error` | **string** | Contains an explanation of the status_code as defined in HTTP/1.1 standard (RFC 7231) | [optional] 
`type_name` | **string** | The type of error returned | [optional] 
`message` | **string** | A human-readable message providing more details about the error. | [optional] 
`detail` | [**AnyOfStringMap**](AnyOfStringMap.md) | Contains parameter or domain specific information related to the error and why it occurred. | [optional] 
`ref` | **string** | Link to documentation of error type | [optional] 





## Referenced Types:




* [`AnyOfStringMap`](AnyOfStringMap.md)


---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


