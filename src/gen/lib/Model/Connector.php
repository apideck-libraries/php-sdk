<?php
/**
 * Connector
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Apideck
 *
 * The Apideck OpenAPI Spec: SDK Optimized
 *
 * The version of the OpenAPI document: 8.84.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Apideck\Client\Model;

use \ArrayAccess;
use \Apideck\Client\ObjectSerializer;

/**
 * Connector Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Connector implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Connector';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'status' => '\Apideck\Client\Model\ConnectorStatus',
        'description' => 'string',
        'icon_url' => 'string',
        'logo_url' => 'string',
        'website_url' => 'string',
        'auth_type' => 'string',
        'auth_only' => 'bool',
        'blind_mapped' => 'bool',
        'webhook_support_type' => '\Apideck\Client\Model\ConnectorWebhookSupportType',
        'oauth_grant_type' => 'string',
        'oauth_credentials_source' => 'string',
        'oauth_scopes' => '\Apideck\Client\Model\ConnectorOauthScopes[]',
        'custom_scopes' => 'bool',
        'has_sandbox_credentials' => 'bool',
        'settings' => '\Apideck\Client\Model\ConnectorSetting[]',
        'service_id' => 'string',
        'unified_apis' => '\Apideck\Client\Model\ConnectorUnifiedApis[]',
        'supported_resources' => '\Apideck\Client\Model\LinkedConnectorResource[]',
        'configurable_resources' => 'string[]',
        'supported_events' => '\Apideck\Client\Model\ConnectorEvent[]',
        'docs' => '\Apideck\Client\Model\ConnectorDoc[]',
        'tls_support' => '\Apideck\Client\Model\ConnectorTlsSupport'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'status' => null,
        'description' => null,
        'icon_url' => 'uri',
        'logo_url' => 'uri',
        'website_url' => 'uri',
        'auth_type' => null,
        'auth_only' => null,
        'blind_mapped' => null,
        'webhook_support_type' => null,
        'oauth_grant_type' => null,
        'oauth_credentials_source' => null,
        'oauth_scopes' => null,
        'custom_scopes' => null,
        'has_sandbox_credentials' => null,
        'settings' => null,
        'service_id' => null,
        'unified_apis' => null,
        'supported_resources' => null,
        'configurable_resources' => null,
        'supported_events' => null,
        'docs' => null,
        'tls_support' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'name' => 'name',
        'status' => 'status',
        'description' => 'description',
        'icon_url' => 'icon_url',
        'logo_url' => 'logo_url',
        'website_url' => 'website_url',
        'auth_type' => 'auth_type',
        'auth_only' => 'auth_only',
        'blind_mapped' => 'blind_mapped',
        'webhook_support_type' => 'webhook_support_type',
        'oauth_grant_type' => 'oauth_grant_type',
        'oauth_credentials_source' => 'oauth_credentials_source',
        'oauth_scopes' => 'oauth_scopes',
        'custom_scopes' => 'custom_scopes',
        'has_sandbox_credentials' => 'has_sandbox_credentials',
        'settings' => 'settings',
        'service_id' => 'service_id',
        'unified_apis' => 'unified_apis',
        'supported_resources' => 'supported_resources',
        'configurable_resources' => 'configurable_resources',
        'supported_events' => 'supported_events',
        'docs' => 'docs',
        'tls_support' => 'tls_support'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'status' => 'setStatus',
        'description' => 'setDescription',
        'icon_url' => 'setIconUrl',
        'logo_url' => 'setLogoUrl',
        'website_url' => 'setWebsiteUrl',
        'auth_type' => 'setAuthType',
        'auth_only' => 'setAuthOnly',
        'blind_mapped' => 'setBlindMapped',
        'webhook_support_type' => 'setWebhookSupportType',
        'oauth_grant_type' => 'setOauthGrantType',
        'oauth_credentials_source' => 'setOauthCredentialsSource',
        'oauth_scopes' => 'setOauthScopes',
        'custom_scopes' => 'setCustomScopes',
        'has_sandbox_credentials' => 'setHasSandboxCredentials',
        'settings' => 'setSettings',
        'service_id' => 'setServiceId',
        'unified_apis' => 'setUnifiedApis',
        'supported_resources' => 'setSupportedResources',
        'configurable_resources' => 'setConfigurableResources',
        'supported_events' => 'setSupportedEvents',
        'docs' => 'setDocs',
        'tls_support' => 'setTlsSupport'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'status' => 'getStatus',
        'description' => 'getDescription',
        'icon_url' => 'getIconUrl',
        'logo_url' => 'getLogoUrl',
        'website_url' => 'getWebsiteUrl',
        'auth_type' => 'getAuthType',
        'auth_only' => 'getAuthOnly',
        'blind_mapped' => 'getBlindMapped',
        'webhook_support_type' => 'getWebhookSupportType',
        'oauth_grant_type' => 'getOauthGrantType',
        'oauth_credentials_source' => 'getOauthCredentialsSource',
        'oauth_scopes' => 'getOauthScopes',
        'custom_scopes' => 'getCustomScopes',
        'has_sandbox_credentials' => 'getHasSandboxCredentials',
        'settings' => 'getSettings',
        'service_id' => 'getServiceId',
        'unified_apis' => 'getUnifiedApis',
        'supported_resources' => 'getSupportedResources',
        'configurable_resources' => 'getConfigurableResources',
        'supported_events' => 'getSupportedEvents',
        'docs' => 'getDocs',
        'tls_support' => 'getTlsSupport'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const AUTH_TYPE_OAUTH2 = 'oauth2';
    const AUTH_TYPE_API_KEY = 'apiKey';
    const AUTH_TYPE_BASIC = 'basic';
    const AUTH_TYPE_CUSTOM = 'custom';
    const AUTH_TYPE_NONE = 'none';
    const OAUTH_GRANT_TYPE_AUTHORIZATION_CODE = 'authorization_code';
    const OAUTH_GRANT_TYPE_CLIENT_CREDENTIALS = 'client_credentials';
    const OAUTH_GRANT_TYPE_PASSWORD = 'password';
    const OAUTH_CREDENTIALS_SOURCE_INTEGRATION = 'integration';
    const OAUTH_CREDENTIALS_SOURCE_CONNECTION = 'connection';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAuthTypeAllowableValues()
    {
        return [
            self::AUTH_TYPE_OAUTH2,
            self::AUTH_TYPE_API_KEY,
            self::AUTH_TYPE_BASIC,
            self::AUTH_TYPE_CUSTOM,
            self::AUTH_TYPE_NONE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOauthGrantTypeAllowableValues()
    {
        return [
            self::OAUTH_GRANT_TYPE_AUTHORIZATION_CODE,
            self::OAUTH_GRANT_TYPE_CLIENT_CREDENTIALS,
            self::OAUTH_GRANT_TYPE_PASSWORD,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOauthCredentialsSourceAllowableValues()
    {
        return [
            self::OAUTH_CREDENTIALS_SOURCE_INTEGRATION,
            self::OAUTH_CREDENTIALS_SOURCE_CONNECTION,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['icon_url'] = $data['icon_url'] ?? null;
        $this->container['logo_url'] = $data['logo_url'] ?? null;
        $this->container['website_url'] = $data['website_url'] ?? null;
        $this->container['auth_type'] = $data['auth_type'] ?? null;
        $this->container['auth_only'] = $data['auth_only'] ?? null;
        $this->container['blind_mapped'] = $data['blind_mapped'] ?? null;
        $this->container['webhook_support_type'] = $data['webhook_support_type'] ?? null;
        $this->container['oauth_grant_type'] = $data['oauth_grant_type'] ?? null;
        $this->container['oauth_credentials_source'] = $data['oauth_credentials_source'] ?? null;
        $this->container['oauth_scopes'] = $data['oauth_scopes'] ?? null;
        $this->container['custom_scopes'] = $data['custom_scopes'] ?? null;
        $this->container['has_sandbox_credentials'] = $data['has_sandbox_credentials'] ?? null;
        $this->container['settings'] = $data['settings'] ?? null;
        $this->container['service_id'] = $data['service_id'] ?? null;
        $this->container['unified_apis'] = $data['unified_apis'] ?? null;
        $this->container['supported_resources'] = $data['supported_resources'] ?? null;
        $this->container['configurable_resources'] = $data['configurable_resources'] ?? null;
        $this->container['supported_events'] = $data['supported_events'] ?? null;
        $this->container['docs'] = $data['docs'] ?? null;
        $this->container['tls_support'] = $data['tls_support'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAuthTypeAllowableValues();
        if (!is_null($this->container['auth_type']) && !in_array($this->container['auth_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'auth_type', must be one of '%s'",
                $this->container['auth_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getOauthGrantTypeAllowableValues();
        if (!is_null($this->container['oauth_grant_type']) && !in_array($this->container['oauth_grant_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'oauth_grant_type', must be one of '%s'",
                $this->container['oauth_grant_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getOauthCredentialsSourceAllowableValues();
        if (!is_null($this->container['oauth_credentials_source']) && !in_array($this->container['oauth_credentials_source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'oauth_credentials_source', must be one of '%s'",
                $this->container['oauth_credentials_source'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id ID of the connector.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name of the connector.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Apideck\Client\Model\ConnectorStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Apideck\Client\Model\ConnectorStatus|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets icon_url
     *
     * @return string|null
     */
    public function getIconUrl()
    {
        return $this->container['icon_url'];
    }

    /**
     * Sets icon_url
     *
     * @param string|null $icon_url Link to a small square icon for the connector.
     *
     * @return self
     */
    public function setIconUrl($icon_url)
    {
        $this->container['icon_url'] = $icon_url;

        return $this;
    }

    /**
     * Gets logo_url
     *
     * @return string|null
     */
    public function getLogoUrl()
    {
        return $this->container['logo_url'];
    }

    /**
     * Sets logo_url
     *
     * @param string|null $logo_url Link to the full logo for the connector.
     *
     * @return self
     */
    public function setLogoUrl($logo_url)
    {
        $this->container['logo_url'] = $logo_url;

        return $this;
    }

    /**
     * Gets website_url
     *
     * @return string|null
     */
    public function getWebsiteUrl()
    {
        return $this->container['website_url'];
    }

    /**
     * Sets website_url
     *
     * @param string|null $website_url Link to the connector's website.
     *
     * @return self
     */
    public function setWebsiteUrl($website_url)
    {
        $this->container['website_url'] = $website_url;

        return $this;
    }

    /**
     * Gets auth_type
     *
     * @return string|null
     */
    public function getAuthType()
    {
        return $this->container['auth_type'];
    }

    /**
     * Sets auth_type
     *
     * @param string|null $auth_type Type of authorization used by the connector
     *
     * @return self
     */
    public function setAuthType($auth_type)
    {
        $allowedValues = $this->getAuthTypeAllowableValues();
        if (!is_null($auth_type) && !in_array($auth_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'auth_type', must be one of '%s'",
                    $auth_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['auth_type'] = $auth_type;

        return $this;
    }

    /**
     * Gets auth_only
     *
     * @return bool|null
     */
    public function getAuthOnly()
    {
        return $this->container['auth_only'];
    }

    /**
     * Sets auth_only
     *
     * @param bool|null $auth_only Indicates whether a connector only supports authentication. In this case the connector is not mapped to a Unified API, but can be used with the Proxy API
     *
     * @return self
     */
    public function setAuthOnly($auth_only)
    {
        $this->container['auth_only'] = $auth_only;

        return $this;
    }

    /**
     * Gets blind_mapped
     *
     * @return bool|null
     */
    public function getBlindMapped()
    {
        return $this->container['blind_mapped'];
    }

    /**
     * Sets blind_mapped
     *
     * @param bool|null $blind_mapped Set to `true` when connector was implemented from downstream docs only and without API access. This state indicates that integration will require Apideck support, and access to downstream API to validate mapping quality.
     *
     * @return self
     */
    public function setBlindMapped($blind_mapped)
    {
        $this->container['blind_mapped'] = $blind_mapped;

        return $this;
    }

    /**
     * Gets webhook_support_type
     *
     * @return \Apideck\Client\Model\ConnectorWebhookSupportType|null
     */
    public function getWebhookSupportType()
    {
        return $this->container['webhook_support_type'];
    }

    /**
     * Sets webhook_support_type
     *
     * @param \Apideck\Client\Model\ConnectorWebhookSupportType|null $webhook_support_type webhook_support_type
     *
     * @return self
     */
    public function setWebhookSupportType($webhook_support_type)
    {
        $this->container['webhook_support_type'] = $webhook_support_type;

        return $this;
    }

    /**
     * Gets oauth_grant_type
     *
     * @return string|null
     */
    public function getOauthGrantType()
    {
        return $this->container['oauth_grant_type'];
    }

    /**
     * Sets oauth_grant_type
     *
     * @param string|null $oauth_grant_type OAuth grant type used by the connector. More info: https://oauth.net/2/grant-types
     *
     * @return self
     */
    public function setOauthGrantType($oauth_grant_type)
    {
        $allowedValues = $this->getOauthGrantTypeAllowableValues();
        if (!is_null($oauth_grant_type) && !in_array($oauth_grant_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'oauth_grant_type', must be one of '%s'",
                    $oauth_grant_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['oauth_grant_type'] = $oauth_grant_type;

        return $this;
    }

    /**
     * Gets oauth_credentials_source
     *
     * @return string|null
     */
    public function getOauthCredentialsSource()
    {
        return $this->container['oauth_credentials_source'];
    }

    /**
     * Sets oauth_credentials_source
     *
     * @param string|null $oauth_credentials_source Location of the OAuth client credentials. For most connectors the OAuth client credentials are stored on integration and managed by the application owner. For others they are stored on connection and managed by the consumer in Vault.
     *
     * @return self
     */
    public function setOauthCredentialsSource($oauth_credentials_source)
    {
        $allowedValues = $this->getOauthCredentialsSourceAllowableValues();
        if (!is_null($oauth_credentials_source) && !in_array($oauth_credentials_source, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'oauth_credentials_source', must be one of '%s'",
                    $oauth_credentials_source,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['oauth_credentials_source'] = $oauth_credentials_source;

        return $this;
    }

    /**
     * Gets oauth_scopes
     *
     * @return \Apideck\Client\Model\ConnectorOauthScopes[]|null
     */
    public function getOauthScopes()
    {
        return $this->container['oauth_scopes'];
    }

    /**
     * Sets oauth_scopes
     *
     * @param \Apideck\Client\Model\ConnectorOauthScopes[]|null $oauth_scopes List of OAuth Scopes available for this connector.
     *
     * @return self
     */
    public function setOauthScopes($oauth_scopes)
    {
        $this->container['oauth_scopes'] = $oauth_scopes;

        return $this;
    }

    /**
     * Gets custom_scopes
     *
     * @return bool|null
     */
    public function getCustomScopes()
    {
        return $this->container['custom_scopes'];
    }

    /**
     * Sets custom_scopes
     *
     * @param bool|null $custom_scopes Set to `true` when connector allows the definition of custom scopes.
     *
     * @return self
     */
    public function setCustomScopes($custom_scopes)
    {
        $this->container['custom_scopes'] = $custom_scopes;

        return $this;
    }

    /**
     * Gets has_sandbox_credentials
     *
     * @return bool|null
     */
    public function getHasSandboxCredentials()
    {
        return $this->container['has_sandbox_credentials'];
    }

    /**
     * Sets has_sandbox_credentials
     *
     * @param bool|null $has_sandbox_credentials Indicates whether Apideck Sandbox OAuth credentials are available.
     *
     * @return self
     */
    public function setHasSandboxCredentials($has_sandbox_credentials)
    {
        $this->container['has_sandbox_credentials'] = $has_sandbox_credentials;

        return $this;
    }

    /**
     * Gets settings
     *
     * @return \Apideck\Client\Model\ConnectorSetting[]|null
     */
    public function getSettings()
    {
        return $this->container['settings'];
    }

    /**
     * Sets settings
     *
     * @param \Apideck\Client\Model\ConnectorSetting[]|null $settings settings
     *
     * @return self
     */
    public function setSettings($settings)
    {
        $this->container['settings'] = $settings;

        return $this;
    }

    /**
     * Gets service_id
     *
     * @return string|null
     */
    public function getServiceId()
    {
        return $this->container['service_id'];
    }

    /**
     * Sets service_id
     *
     * @param string|null $service_id Service provider identifier
     *
     * @return self
     */
    public function setServiceId($service_id)
    {
        $this->container['service_id'] = $service_id;

        return $this;
    }

    /**
     * Gets unified_apis
     *
     * @return \Apideck\Client\Model\ConnectorUnifiedApis[]|null
     */
    public function getUnifiedApis()
    {
        return $this->container['unified_apis'];
    }

    /**
     * Sets unified_apis
     *
     * @param \Apideck\Client\Model\ConnectorUnifiedApis[]|null $unified_apis List of Unified APIs that feature this connector.
     *
     * @return self
     */
    public function setUnifiedApis($unified_apis)
    {
        $this->container['unified_apis'] = $unified_apis;

        return $this;
    }

    /**
     * Gets supported_resources
     *
     * @return \Apideck\Client\Model\LinkedConnectorResource[]|null
     */
    public function getSupportedResources()
    {
        return $this->container['supported_resources'];
    }

    /**
     * Sets supported_resources
     *
     * @param \Apideck\Client\Model\LinkedConnectorResource[]|null $supported_resources List of resources that are supported on the connector.
     *
     * @return self
     */
    public function setSupportedResources($supported_resources)
    {
        $this->container['supported_resources'] = $supported_resources;

        return $this;
    }

    /**
     * Gets configurable_resources
     *
     * @return string[]|null
     */
    public function getConfigurableResources()
    {
        return $this->container['configurable_resources'];
    }

    /**
     * Sets configurable_resources
     *
     * @param string[]|null $configurable_resources List of resources that have settings that can be configured.
     *
     * @return self
     */
    public function setConfigurableResources($configurable_resources)
    {
        $this->container['configurable_resources'] = $configurable_resources;

        return $this;
    }

    /**
     * Gets supported_events
     *
     * @return \Apideck\Client\Model\ConnectorEvent[]|null
     */
    public function getSupportedEvents()
    {
        return $this->container['supported_events'];
    }

    /**
     * Sets supported_events
     *
     * @param \Apideck\Client\Model\ConnectorEvent[]|null $supported_events List of events that are supported on the connector across all Unified APIs.
     *
     * @return self
     */
    public function setSupportedEvents($supported_events)
    {
        $this->container['supported_events'] = $supported_events;

        return $this;
    }

    /**
     * Gets docs
     *
     * @return \Apideck\Client\Model\ConnectorDoc[]|null
     */
    public function getDocs()
    {
        return $this->container['docs'];
    }

    /**
     * Sets docs
     *
     * @param \Apideck\Client\Model\ConnectorDoc[]|null $docs docs
     *
     * @return self
     */
    public function setDocs($docs)
    {
        $this->container['docs'] = $docs;

        return $this;
    }

    /**
     * Gets tls_support
     *
     * @return \Apideck\Client\Model\ConnectorTlsSupport|null
     */
    public function getTlsSupport()
    {
        return $this->container['tls_support'];
    }

    /**
     * Sets tls_support
     *
     * @param \Apideck\Client\Model\ConnectorTlsSupport|null $tls_support tls_support
     *
     * @return self
     */
    public function setTlsSupport($tls_support)
    {
        $this->container['tls_support'] = $tls_support;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


