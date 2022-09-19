# Apideck.Connector

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** | ID of the connector. | [optional] 
`name` | **string** | Name of the connector. | [optional] 
`status` | [**\Apideck\Client\Model\ConnectorStatus**](ConnectorStatus.md) |  | [optional] 
`description` | **string** |  | [optional] 
`icon_url` | **string** | Link to a small square icon for the connector. | [optional] 
`logo_url` | **string** | Link to the full logo for the connector. | [optional] 
`website_url` | **string** | Link to the connector's website. | [optional] 
`auth_type` | **string** | Type of authorization used by the connector | [optional] 
`auth_only` | **bool** | Indicates whether a connector only supports authentication. In this case the connector is not mapped to a Unified API, but can be used with the Proxy API | [optional] 
`blind_mapped` | **bool** | Set to &#x60;true&#x60; when connector was implemented from downstream docs only and without API access. This state indicates that integration will require Apideck support, and access to downstream API to validate mapping quality. | [optional] 
`oauth_grant_type` | **string** | OAuth grant type used by the connector. More info: https://oauth.net/2/grant-types | [optional] 
`oauth_credentials_source` | **string** | Location of the OAuth client credentials. For most connectors the OAuth client credentials are stored on integration and managed by the application owner. For others they are stored on connection and managed by the consumer in Vault. | [optional] 
`oauth_scopes` | [**\Apideck\Client\Model\ConnectorOauthScopes[]**](ConnectorOauthScopes.md) | List of OAuth Scopes available for this connector. | [optional] 
`has_sandbox_credentials` | **bool** | Indicates whether Apideck Sandbox OAuth credentials are available. | [optional] 
`settings` | [**\Apideck\Client\Model\ConnectorSetting[]**](ConnectorSetting.md) |  | [optional] 
`service_id` | **string** | Service provider identifier | [optional] 
`unified_apis` | [**\Apideck\Client\Model\ConnectorUnifiedApis[]**](ConnectorUnifiedApis.md) | List of Unified APIs that feature this connector. | [optional] 
`supported_resources` | [**\Apideck\Client\Model\ConnectorSupportedResources[]**](ConnectorSupportedResources.md) | List of resources that are supported on the connector. | [optional] 
`configurable_resources` | **string[]** | List of resources that have settings that can be configured. | [optional] 
`supported_events` | [**\Apideck\Client\Model\ConnectorSupportedEvents[]**](ConnectorSupportedEvents.md) | List of events that are supported on the connector. Events are delivered via Webhooks. | [optional] 
`docs` | [**\Apideck\Client\Model\ConnectorDoc[]**](ConnectorDoc.md) |  | [optional] 
`tls_support` | [**\Apideck\Client\Model\ConnectorTlsSupport**](ConnectorTlsSupport.md) |  | [optional] 





<a name="AUTH_TYPE"></a>
## Enum: Connector.auth_type


* `OAUTH2` (value: `'oauth2'`)

* `API_KEY` (value: `'apiKey'`)

* `BASIC` (value: `'basic'`)

* `CUSTOM` (value: `'custom'`)

* `NONE` (value: `'none'`)




<a name="OAUTH_GRANT_TYPE"></a>
## Enum: Connector.oauth_grant_type


* `AUTHORIZATION_CODE` (value: `'authorization_code'`)

* `CLIENT_CREDENTIALS` (value: `'client_credentials'`)




<a name="OAUTH_CREDENTIALS_SOURCE"></a>
## Enum: Connector.oauth_credentials_source


* `INTEGRATION` (value: `'integration'`)

* `CONNECTION` (value: `'connection'`)




## Referenced Types:


* [`ConnectorStatus`](ConnectorStatus.md)









* [`ConnectorOauthScopes`](ConnectorOauthScopes.md)

* [`ConnectorSetting`](ConnectorSetting.md)

* [`ConnectorUnifiedApis`](ConnectorUnifiedApis.md)
* [`ConnectorSupportedResources`](ConnectorSupportedResources.md)

* [`ConnectorSupportedEvents`](ConnectorSupportedEvents.md)
* [`ConnectorDoc`](ConnectorDoc.md)
* [`ConnectorTlsSupport`](ConnectorTlsSupport.md)

---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


