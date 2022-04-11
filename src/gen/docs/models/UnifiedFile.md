# Apideck.UnifiedFile

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** |  | 
`name` | **string** | The name of the file | 
`type` | [**\Apideck\Client\Model\FileType**](FileType.md) |  | 
`description` | **string** | Optional description of the file | [optional] 
`path` | **string** | The full path of the file or folder (includes the file name) | [optional] 
`mime_type` | **string** | The MIME type of the file. | [optional] 
`downloadable` | **bool** | Whether the current user can download this file | [optional] 
`size` | **int** | The size of the file in bytes | [optional] 
`owner` | [**\Apideck\Client\Model\Owner**](Owner.md) |  | [optional] 
`parent_folders` | [**\Apideck\Client\Model\LinkedFolder[]**](LinkedFolder.md) | The parent folders of the file, starting from the root | [optional] 
`parent_folders_complete` | **bool** | Whether the list of parent folder is complete. Some connectors only return the direct parent of a file | [optional] 
`updated_by` | **string** |  | [optional] 
`created_by` | **string** |  | [optional] 
`updated_at` | **\DateTime** |  | [optional] 
`created_at` | **\DateTime** |  | [optional] 





## Referenced Types:


* [`FileType`](FileType.md)





* [`Owner`](Owner.md)
* [`LinkedFolder`](LinkedFolder.md)






---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


