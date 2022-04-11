# Apideck.Folder

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`name` | **string** | The name of the folder | 
`parent_folders` | [**\Apideck\Client\Model\LinkedFolder[]**](LinkedFolder.md) | The parent folders of the file, starting from the root | 
`id` | **string** |  | [optional] 
`description` | **string** | Optional description of the folder | [optional] 
`path` | **string** | The full path of the folder (includes the folder name) | [optional] 
`size` | **int** | The size of the folder in bytes | [optional] 
`owner` | [**\Apideck\Client\Model\Owner**](Owner.md) |  | [optional] 
`parent_folders_complete` | **bool** | Whether the list of parent folder is complete. Some connectors only return the direct parent of a folder | [optional] 
`updated_by` | **string** |  | [optional] 
`created_by` | **string** |  | [optional] 
`updated_at` | **\DateTime** |  | [optional] 
`created_at` | **\DateTime** |  | [optional] 





## Referenced Types:

* [`LinkedFolder`](LinkedFolder.md)




* [`Owner`](Owner.md)






---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


