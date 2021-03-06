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
`state` | [**\Apideck\Client\Model\ConnectionState**](ConnectionState.md) |  | [optional] 
`auth_type` | [**\Apideck\Client\Model\AuthType**](AuthType.md) |  | [optional] 
`oauth_grant_type` | [**\Apideck\Client\Model\OAuthGrantType**](OAuthGrantType.md) |  | [optional] 
`status` | **string** |  | [optional] 
`enabled` | **bool** | Whether the connection is enabled or not. You can enable or disable a connection using the Update Connection API. | [optional] 
`website` | **string** |  | [optional] 
`icon` | **string** |  | [optional] 
`logo` | **string** |  | [optional] 
`authorize_url` | **string** | The OAuth redirect URI. Redirect your users to this URI to let them authorize your app in the connector's UI. Before you can use this URI, you must add &#x60;redirect_uri&#x60; as a query parameter. Your users will be redirected to this &#x60;redirect_uri&#x60; after they granted access to your app in the connector's UI. | [optional] 
`revoke_url` | **string** | The OAuth revoke URI. Redirect your users to this URI to revoke this connection. Before you can use this URI, you must add &#x60;redirect_uri&#x60; as a query parameter. Your users will be redirected to this &#x60;redirect_uri&#x60; after they granted access to your app in the connector's UI. | [optional] 
`settings` | **array&lt;string,object&gt;** | Connection settings. Values will persist to &#x60;form_fields&#x60; with corresponding id | [optional] 
`metadata` | **array&lt;string,object&gt;** | Attach your own consumer specific metadata | [optional] 
`form_fields` | [**\Apideck\Client\Model\FormField[]**](FormField.md) |  | [optional] 
`configuration` | [**\Apideck\Client\Model\ConnectionConfiguration[]**](ConnectionConfiguration.md) |  | [optional] 
`configurable_resources` | **string[]** |  | [optional] 
`resource_schema_support` | **string[]** |  | [optional] 
`resource_settings_support` | **string[]** |  | [optional] 
`settings_required_for_authorization` | **string[]** |  | [optional] 
`has_guide` | **bool** | Whether the connector has a guide available in the developer docs or not (https://docs.apideck.com/connectors/{service_id}/docs/consumer+connection). | [optional] 
`created_at` | **float** |  | [optional] 
`updated_at` | **float** |  | [optional] 





<a name="STATUS"></a>
## Enum: Connection.status


* `LIVE` (value: `'live'`)

* `UPCOMING` (value: `'upcoming'`)

* `REQUESTED` (value: `'requested'`)




## Referenced Types:





* [`ConnectionState`](ConnectionState.md)
* [`AuthType`](AuthType.md)
* [`OAuthGrantType`](OAuthGrantType.md)









* [`FormField`](FormField.md)
* [`ConnectionConfiguration`](ConnectionConfiguration.md)








---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


