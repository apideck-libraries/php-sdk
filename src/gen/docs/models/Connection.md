# Apideck.Connection

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** |  | [optional] 
`service_id` | **string** |  | [optional] 
`name` | **string** |  | [optional] 
`tag_line` | **string** |  | [optional] 
`unified_api` | **string** |  | [optional] 
`website` | **string** |  | [optional] 
`icon` | **string** |  | [optional] 
`logo` | **string** |  | [optional] 
`settings` | **object** | Connection settings. Values will persist to &#x60;form_fields&#x60; with corresponding id | [optional] 
`metadata` | **array&lt;string,object&gt;** | Attach your own consumer specific metadata | [optional] 
`auth_type` | [**\Apideck\Client\Model\AuthType**](AuthType.md) |  | [optional] 
`oauth_grant_type` | [**\Apideck\Client\Model\OAuthGrantType**](OAuthGrantType.md) |  | [optional] 
`status` | **string** |  | [optional] 
`form_fields` | [**\Apideck\Client\Model\FormField[]**](FormField.md) |  | [optional] 
`configuration` | [**\Apideck\Client\Model\ConnectionConfiguration[]**](ConnectionConfiguration.md) |  | [optional] 
`configurable_resources` | **string[]** |  | [optional] 
`resource_schema_support` | **string[]** |  | [optional] 
`resource_settings_support` | **string[]** |  | [optional] 
`settings_required_for_authorization` | **string[]** |  | [optional] 
`authorize_url` | **string** |  | [optional] 
`revoke_url` | **string** |  | [optional] 
`enabled` | **bool** |  | [optional] 
`has_guide` | **bool** |  | [optional] 
`created_at` | **float** |  | [optional] 
`updated_at` | **float** |  | [optional] 
`state` | [**\Apideck\Client\Model\ConnectionState**](ConnectionState.md) |  | [optional] 





<a name="STATUS"></a>
## Enum: Connection.status


* `LIVE` (value: `'live'`)

* `UPCOMING` (value: `'upcoming'`)

* `REQUESTED` (value: `'requested'`)




## Referenced Types:










* [`AuthType`](AuthType.md)
* [`OAuthGrantType`](OAuthGrantType.md)

* [`FormField`](FormField.md)
* [`ConnectionConfiguration`](ConnectionConfiguration.md)










* [`ConnectionState`](ConnectionState.md)

---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


