<?php
/**
 * Connection
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
 * The version of the OpenAPI document: 10.1.2
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
 * Connection Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Connection implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Connection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'service_id' => 'string',
        'name' => 'string',
        'tag_line' => 'string',
        'unified_api' => 'string',
        'state' => '\Apideck\Client\Model\ConnectionState',
        'integration_state' => '\Apideck\Client\Model\IntegrationState',
        'auth_type' => '\Apideck\Client\Model\AuthType',
        'oauth_grant_type' => '\Apideck\Client\Model\OAuthGrantType',
        'status' => 'string',
        'enabled' => 'bool',
        'website' => 'string',
        'icon' => 'string',
        'logo' => 'string',
        'authorize_url' => 'string',
        'revoke_url' => 'string',
        'settings' => 'array<string,object>',
        'metadata' => 'array<string,object>',
        'form_fields' => '\Apideck\Client\Model\FormField[]',
        'configuration' => '\Apideck\Client\Model\ConnectionConfiguration[]',
        'configurable_resources' => 'string[]',
        'resource_schema_support' => 'string[]',
        'resource_settings_support' => 'string[]',
        'validation_support' => 'bool',
        'schema_support' => 'bool',
        'settings_required_for_authorization' => 'string[]',
        'subscriptions' => '\Apideck\Client\Model\WebhookSubscription[]',
        'has_guide' => 'bool',
        'created_at' => 'float',
        'custom_mappings' => '\Apideck\Client\Model\CustomMapping[]',
        'updated_at' => 'float'
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
        'service_id' => null,
        'name' => null,
        'tag_line' => null,
        'unified_api' => null,
        'state' => null,
        'integration_state' => null,
        'auth_type' => null,
        'oauth_grant_type' => null,
        'status' => null,
        'enabled' => null,
        'website' => null,
        'icon' => null,
        'logo' => null,
        'authorize_url' => null,
        'revoke_url' => null,
        'settings' => null,
        'metadata' => null,
        'form_fields' => null,
        'configuration' => null,
        'configurable_resources' => null,
        'resource_schema_support' => null,
        'resource_settings_support' => null,
        'validation_support' => null,
        'schema_support' => null,
        'settings_required_for_authorization' => null,
        'subscriptions' => null,
        'has_guide' => null,
        'created_at' => null,
        'custom_mappings' => null,
        'updated_at' => null
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
        'service_id' => 'service_id',
        'name' => 'name',
        'tag_line' => 'tag_line',
        'unified_api' => 'unified_api',
        'state' => 'state',
        'integration_state' => 'integration_state',
        'auth_type' => 'auth_type',
        'oauth_grant_type' => 'oauth_grant_type',
        'status' => 'status',
        'enabled' => 'enabled',
        'website' => 'website',
        'icon' => 'icon',
        'logo' => 'logo',
        'authorize_url' => 'authorize_url',
        'revoke_url' => 'revoke_url',
        'settings' => 'settings',
        'metadata' => 'metadata',
        'form_fields' => 'form_fields',
        'configuration' => 'configuration',
        'configurable_resources' => 'configurable_resources',
        'resource_schema_support' => 'resource_schema_support',
        'resource_settings_support' => 'resource_settings_support',
        'validation_support' => 'validation_support',
        'schema_support' => 'schema_support',
        'settings_required_for_authorization' => 'settings_required_for_authorization',
        'subscriptions' => 'subscriptions',
        'has_guide' => 'has_guide',
        'created_at' => 'created_at',
        'custom_mappings' => 'custom_mappings',
        'updated_at' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'service_id' => 'setServiceId',
        'name' => 'setName',
        'tag_line' => 'setTagLine',
        'unified_api' => 'setUnifiedApi',
        'state' => 'setState',
        'integration_state' => 'setIntegrationState',
        'auth_type' => 'setAuthType',
        'oauth_grant_type' => 'setOauthGrantType',
        'status' => 'setStatus',
        'enabled' => 'setEnabled',
        'website' => 'setWebsite',
        'icon' => 'setIcon',
        'logo' => 'setLogo',
        'authorize_url' => 'setAuthorizeUrl',
        'revoke_url' => 'setRevokeUrl',
        'settings' => 'setSettings',
        'metadata' => 'setMetadata',
        'form_fields' => 'setFormFields',
        'configuration' => 'setConfiguration',
        'configurable_resources' => 'setConfigurableResources',
        'resource_schema_support' => 'setResourceSchemaSupport',
        'resource_settings_support' => 'setResourceSettingsSupport',
        'validation_support' => 'setValidationSupport',
        'schema_support' => 'setSchemaSupport',
        'settings_required_for_authorization' => 'setSettingsRequiredForAuthorization',
        'subscriptions' => 'setSubscriptions',
        'has_guide' => 'setHasGuide',
        'created_at' => 'setCreatedAt',
        'custom_mappings' => 'setCustomMappings',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'service_id' => 'getServiceId',
        'name' => 'getName',
        'tag_line' => 'getTagLine',
        'unified_api' => 'getUnifiedApi',
        'state' => 'getState',
        'integration_state' => 'getIntegrationState',
        'auth_type' => 'getAuthType',
        'oauth_grant_type' => 'getOauthGrantType',
        'status' => 'getStatus',
        'enabled' => 'getEnabled',
        'website' => 'getWebsite',
        'icon' => 'getIcon',
        'logo' => 'getLogo',
        'authorize_url' => 'getAuthorizeUrl',
        'revoke_url' => 'getRevokeUrl',
        'settings' => 'getSettings',
        'metadata' => 'getMetadata',
        'form_fields' => 'getFormFields',
        'configuration' => 'getConfiguration',
        'configurable_resources' => 'getConfigurableResources',
        'resource_schema_support' => 'getResourceSchemaSupport',
        'resource_settings_support' => 'getResourceSettingsSupport',
        'validation_support' => 'getValidationSupport',
        'schema_support' => 'getSchemaSupport',
        'settings_required_for_authorization' => 'getSettingsRequiredForAuthorization',
        'subscriptions' => 'getSubscriptions',
        'has_guide' => 'getHasGuide',
        'created_at' => 'getCreatedAt',
        'custom_mappings' => 'getCustomMappings',
        'updated_at' => 'getUpdatedAt'
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

    const STATUS_LIVE = 'live';
    const STATUS_UPCOMING = 'upcoming';
    const STATUS_REQUESTED = 'requested';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_LIVE,
            self::STATUS_UPCOMING,
            self::STATUS_REQUESTED,
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
        $this->container['service_id'] = $data['service_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['tag_line'] = $data['tag_line'] ?? null;
        $this->container['unified_api'] = $data['unified_api'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['integration_state'] = $data['integration_state'] ?? null;
        $this->container['auth_type'] = $data['auth_type'] ?? null;
        $this->container['oauth_grant_type'] = $data['oauth_grant_type'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['enabled'] = $data['enabled'] ?? null;
        $this->container['website'] = $data['website'] ?? null;
        $this->container['icon'] = $data['icon'] ?? null;
        $this->container['logo'] = $data['logo'] ?? null;
        $this->container['authorize_url'] = $data['authorize_url'] ?? null;
        $this->container['revoke_url'] = $data['revoke_url'] ?? null;
        $this->container['settings'] = $data['settings'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
        $this->container['form_fields'] = $data['form_fields'] ?? null;
        $this->container['configuration'] = $data['configuration'] ?? null;
        $this->container['configurable_resources'] = $data['configurable_resources'] ?? null;
        $this->container['resource_schema_support'] = $data['resource_schema_support'] ?? null;
        $this->container['resource_settings_support'] = $data['resource_settings_support'] ?? null;
        $this->container['validation_support'] = $data['validation_support'] ?? null;
        $this->container['schema_support'] = $data['schema_support'] ?? null;
        $this->container['settings_required_for_authorization'] = $data['settings_required_for_authorization'] ?? null;
        $this->container['subscriptions'] = $data['subscriptions'] ?? null;
        $this->container['has_guide'] = $data['has_guide'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['custom_mappings'] = $data['custom_mappings'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
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
     * @param string|null $id The unique identifier of the connection.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string|null $service_id The ID of the service this connection belongs to.
     *
     * @return self
     */
    public function setServiceId($service_id)
    {
        $this->container['service_id'] = $service_id;

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
     * @param string|null $name The name of the connection
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets tag_line
     *
     * @return string|null
     */
    public function getTagLine()
    {
        return $this->container['tag_line'];
    }

    /**
     * Sets tag_line
     *
     * @param string|null $tag_line tag_line
     *
     * @return self
     */
    public function setTagLine($tag_line)
    {
        $this->container['tag_line'] = $tag_line;

        return $this;
    }

    /**
     * Gets unified_api
     *
     * @return string|null
     */
    public function getUnifiedApi()
    {
        return $this->container['unified_api'];
    }

    /**
     * Sets unified_api
     *
     * @param string|null $unified_api The unified API category where the connection belongs to.
     *
     * @return self
     */
    public function setUnifiedApi($unified_api)
    {
        $this->container['unified_api'] = $unified_api;

        return $this;
    }

    /**
     * Gets state
     *
     * @return \Apideck\Client\Model\ConnectionState|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Apideck\Client\Model\ConnectionState|null $state state
     *
     * @return self
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets integration_state
     *
     * @return \Apideck\Client\Model\IntegrationState|null
     */
    public function getIntegrationState()
    {
        return $this->container['integration_state'];
    }

    /**
     * Sets integration_state
     *
     * @param \Apideck\Client\Model\IntegrationState|null $integration_state integration_state
     *
     * @return self
     */
    public function setIntegrationState($integration_state)
    {
        $this->container['integration_state'] = $integration_state;

        return $this;
    }

    /**
     * Gets auth_type
     *
     * @return \Apideck\Client\Model\AuthType|null
     */
    public function getAuthType()
    {
        return $this->container['auth_type'];
    }

    /**
     * Sets auth_type
     *
     * @param \Apideck\Client\Model\AuthType|null $auth_type auth_type
     *
     * @return self
     */
    public function setAuthType($auth_type)
    {
        $this->container['auth_type'] = $auth_type;

        return $this;
    }

    /**
     * Gets oauth_grant_type
     *
     * @return \Apideck\Client\Model\OAuthGrantType|null
     */
    public function getOauthGrantType()
    {
        return $this->container['oauth_grant_type'];
    }

    /**
     * Sets oauth_grant_type
     *
     * @param \Apideck\Client\Model\OAuthGrantType|null $oauth_grant_type oauth_grant_type
     *
     * @return self
     */
    public function setOauthGrantType($oauth_grant_type)
    {
        $this->container['oauth_grant_type'] = $oauth_grant_type;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Status of the connection.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool|null $enabled Whether the connection is enabled or not. You can enable or disable a connection using the Update Connection API.
     *
     * @return self
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets website
     *
     * @return string|null
     */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
     * Sets website
     *
     * @param string|null $website The website URL of the connection
     *
     * @return self
     */
    public function setWebsite($website)
    {
        $this->container['website'] = $website;

        return $this;
    }

    /**
     * Gets icon
     *
     * @return string|null
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     *
     * @param string|null $icon A visual icon of the connection, that will be shown in the Vault
     *
     * @return self
     */
    public function setIcon($icon)
    {
        $this->container['icon'] = $icon;

        return $this;
    }

    /**
     * Gets logo
     *
     * @return string|null
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param string|null $logo The logo of the connection, that will be shown in the Vault
     *
     * @return self
     */
    public function setLogo($logo)
    {
        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets authorize_url
     *
     * @return string|null
     */
    public function getAuthorizeUrl()
    {
        return $this->container['authorize_url'];
    }

    /**
     * Sets authorize_url
     *
     * @param string|null $authorize_url The OAuth redirect URI. Redirect your users to this URI to let them authorize your app in the connector's UI. Before you can use this URI, you must add `redirect_uri` as a query parameter to the `authorize_url`. Be sure to URL encode the `redirect_uri` part. Your users will be redirected to this `redirect_uri` after they granted access to your app in the connector's UI.
     *
     * @return self
     */
    public function setAuthorizeUrl($authorize_url)
    {
        $this->container['authorize_url'] = $authorize_url;

        return $this;
    }

    /**
     * Gets revoke_url
     *
     * @return string|null
     */
    public function getRevokeUrl()
    {
        return $this->container['revoke_url'];
    }

    /**
     * Sets revoke_url
     *
     * @param string|null $revoke_url The OAuth revoke URI. Redirect your users to this URI to revoke this connection. Before you can use this URI, you must add `redirect_uri` as a query parameter. Your users will be redirected to this `redirect_uri` after they granted access to your app in the connector's UI.
     *
     * @return self
     */
    public function setRevokeUrl($revoke_url)
    {
        $this->container['revoke_url'] = $revoke_url;

        return $this;
    }

    /**
     * Gets settings
     *
     * @return array<string,object>|null
     */
    public function getSettings()
    {
        return $this->container['settings'];
    }

    /**
     * Sets settings
     *
     * @param array<string,object>|null $settings Connection settings. Values will persist to `form_fields` with corresponding id
     *
     * @return self
     */
    public function setSettings($settings)
    {
        $this->container['settings'] = $settings;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return array<string,object>|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param array<string,object>|null $metadata Attach your own consumer specific metadata
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets form_fields
     *
     * @return \Apideck\Client\Model\FormField[]|null
     */
    public function getFormFields()
    {
        return $this->container['form_fields'];
    }

    /**
     * Sets form_fields
     *
     * @param \Apideck\Client\Model\FormField[]|null $form_fields The settings that are wanted to create a connection.
     *
     * @return self
     */
    public function setFormFields($form_fields)
    {
        $this->container['form_fields'] = $form_fields;

        return $this;
    }

    /**
     * Gets configuration
     *
     * @return \Apideck\Client\Model\ConnectionConfiguration[]|null
     */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
     * Sets configuration
     *
     * @param \Apideck\Client\Model\ConnectionConfiguration[]|null $configuration configuration
     *
     * @return self
     */
    public function setConfiguration($configuration)
    {
        $this->container['configuration'] = $configuration;

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
     * @param string[]|null $configurable_resources configurable_resources
     *
     * @return self
     */
    public function setConfigurableResources($configurable_resources)
    {
        $this->container['configurable_resources'] = $configurable_resources;

        return $this;
    }

    /**
     * Gets resource_schema_support
     *
     * @return string[]|null
     */
    public function getResourceSchemaSupport()
    {
        return $this->container['resource_schema_support'];
    }

    /**
     * Sets resource_schema_support
     *
     * @param string[]|null $resource_schema_support resource_schema_support
     *
     * @return self
     */
    public function setResourceSchemaSupport($resource_schema_support)
    {
        $this->container['resource_schema_support'] = $resource_schema_support;

        return $this;
    }

    /**
     * Gets resource_settings_support
     *
     * @return string[]|null
     */
    public function getResourceSettingsSupport()
    {
        return $this->container['resource_settings_support'];
    }

    /**
     * Sets resource_settings_support
     *
     * @param string[]|null $resource_settings_support resource_settings_support
     *
     * @return self
     */
    public function setResourceSettingsSupport($resource_settings_support)
    {
        $this->container['resource_settings_support'] = $resource_settings_support;

        return $this;
    }

    /**
     * Gets validation_support
     *
     * @return bool|null
     */
    public function getValidationSupport()
    {
        return $this->container['validation_support'];
    }

    /**
     * Sets validation_support
     *
     * @param bool|null $validation_support validation_support
     *
     * @return self
     */
    public function setValidationSupport($validation_support)
    {
        $this->container['validation_support'] = $validation_support;

        return $this;
    }

    /**
     * Gets schema_support
     *
     * @return bool|null
     */
    public function getSchemaSupport()
    {
        return $this->container['schema_support'];
    }

    /**
     * Sets schema_support
     *
     * @param bool|null $schema_support schema_support
     *
     * @return self
     */
    public function setSchemaSupport($schema_support)
    {
        $this->container['schema_support'] = $schema_support;

        return $this;
    }

    /**
     * Gets settings_required_for_authorization
     *
     * @return string[]|null
     */
    public function getSettingsRequiredForAuthorization()
    {
        return $this->container['settings_required_for_authorization'];
    }

    /**
     * Sets settings_required_for_authorization
     *
     * @param string[]|null $settings_required_for_authorization List of settings that are required to be configured on integration before authorization can occur
     *
     * @return self
     */
    public function setSettingsRequiredForAuthorization($settings_required_for_authorization)
    {
        $this->container['settings_required_for_authorization'] = $settings_required_for_authorization;

        return $this;
    }

    /**
     * Gets subscriptions
     *
     * @return \Apideck\Client\Model\WebhookSubscription[]|null
     */
    public function getSubscriptions()
    {
        return $this->container['subscriptions'];
    }

    /**
     * Sets subscriptions
     *
     * @param \Apideck\Client\Model\WebhookSubscription[]|null $subscriptions subscriptions
     *
     * @return self
     */
    public function setSubscriptions($subscriptions)
    {
        $this->container['subscriptions'] = $subscriptions;

        return $this;
    }

    /**
     * Gets has_guide
     *
     * @return bool|null
     */
    public function getHasGuide()
    {
        return $this->container['has_guide'];
    }

    /**
     * Sets has_guide
     *
     * @param bool|null $has_guide Whether the connector has a guide available in the developer docs or not (https://docs.apideck.com/connectors/{service_id}/docs/consumer+connection).
     *
     * @return self
     */
    public function setHasGuide($has_guide)
    {
        $this->container['has_guide'] = $has_guide;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return float|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param float|null $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets custom_mappings
     *
     * @return \Apideck\Client\Model\CustomMapping[]|null
     */
    public function getCustomMappings()
    {
        return $this->container['custom_mappings'];
    }

    /**
     * Sets custom_mappings
     *
     * @param \Apideck\Client\Model\CustomMapping[]|null $custom_mappings List of custom mappings configured for this connection
     *
     * @return self
     */
    public function setCustomMappings($custom_mappings)
    {
        $this->container['custom_mappings'] = $custom_mappings;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return float|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param float|null $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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


