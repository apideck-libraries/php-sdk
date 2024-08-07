# Apideck.SharedLink

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`target_id` | **string** | The ID of the file or folder to link. | 
`url` | **string** | The URL that can be used to view the file. | [optional] 
`download_url` | **string** | The URL that can be used to download the file. | [optional] 
`target` | [**\Apideck\Client\Model\SharedLinkTarget**](SharedLinkTarget.md) |  | [optional] 
`scope` | **string** | The scope of the shared link. | [optional] 
`password_protected` | **bool** | Indicated if the shared link is password protected. | [optional] 
`password` | **string** | Optional password for the shared link. | [optional] 
`expires_at` | **\DateTime** |  | [optional] 
`updated_at` | **\DateTime** | The date and time when the object was last updated. | [optional] 
`created_at` | **\DateTime** | The date and time when the object was created. | [optional] 
`pass_through` | **object[]** | The pass_through property allows passing service-specific, custom data or structured modifications in request body when creating or updating resources. | [optional] 





<a name="SCOPE"></a>
## Enum: SharedLink.scope


* `_PUBLIC` (value: `'public'`)

* `COMPANY` (value: `'company'`)




## Referenced Types:



* [`SharedLinkTarget`](SharedLinkTarget.md)








---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


