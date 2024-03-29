# Apideck.UnifiedFile

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** | A unique identifier for an object. | 
`name` | **string** | The name of the file | 
`type` | [**\Apideck\Client\Model\FileType**](FileType.md) |  | 
`downstream_id` | **string** | The third-party API ID of original entity | [optional] 
`description` | **string** | Optional description of the file | [optional] 
`path` | **string** | The full path of the file or folder (includes the file name) | [optional] 
`mime_type` | **string** | The MIME type of the file. | [optional] 
`downloadable` | **bool** | Whether the current user can download this file | [optional] 
`size` | **int** | The size of the file in bytes | [optional] 
`owner` | [**\Apideck\Client\Model\Owner**](Owner.md) |  | [optional] 
`parent_folders` | [**\Apideck\Client\Model\LinkedFolder[]**](LinkedFolder.md) | The parent folders of the file, starting from the root | [optional] 
`parent_folders_complete` | **bool** | Whether the list of parent folders is complete. Some connectors only return the direct parent of a file | [optional] 
`permissions` | [**\Apideck\Client\Model\UnifiedFilePermissions**](UnifiedFilePermissions.md) |  | [optional] 
`exportable` | **bool** | Whether the current file is exportable to other file formats. This property is relevant for proprietary file formats such as Google Docs or Dropbox Paper. | [optional] 
`export_formats` | **string[]** | The available file formats when exporting this file. | [optional] 
`custom_mappings` | **object** | When custom mappings are configured on the resource, the result is included here. | [optional] 
`updated_by` | **string** | The user who last updated the object. | [optional] 
`created_by` | **string** | The user who created the object. | [optional] 
`updated_at` | **\DateTime** | The date and time when the object was last updated. | [optional] 
`created_at` | **\DateTime** | The date and time when the object was created. | [optional] 





## Referenced Types:


* [`FileType`](FileType.md)






* [`Owner`](Owner.md)
* [`LinkedFolder`](LinkedFolder.md)

* [`UnifiedFilePermissions`](UnifiedFilePermissions.md)








---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


