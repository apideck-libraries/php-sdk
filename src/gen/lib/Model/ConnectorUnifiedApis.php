<?php
/**
 * ConnectorUnifiedApis
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
 * The version of the OpenAPI document: 10.0.0
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
 * ConnectorUnifiedApis Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ConnectorUnifiedApis implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Connector_unified_apis';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => '\Apideck\Client\Model\UnifiedApiId',
        'name' => 'string',
        'auth_only' => 'bool',
        'oauth_scopes' => '\Apideck\Client\Model\ConnectorOauthScopes1[]',
        'supported_resources' => '\Apideck\Client\Model\LinkedConnectorResource[]',
        'downstream_unsupported_resources' => 'string[]',
        'supported_events' => '\Apideck\Client\Model\ConnectorEvent[]'
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
        'auth_only' => null,
        'oauth_scopes' => null,
        'supported_resources' => null,
        'downstream_unsupported_resources' => null,
        'supported_events' => null
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
        'auth_only' => 'auth_only',
        'oauth_scopes' => 'oauth_scopes',
        'supported_resources' => 'supported_resources',
        'downstream_unsupported_resources' => 'downstream_unsupported_resources',
        'supported_events' => 'supported_events'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'auth_only' => 'setAuthOnly',
        'oauth_scopes' => 'setOauthScopes',
        'supported_resources' => 'setSupportedResources',
        'downstream_unsupported_resources' => 'setDownstreamUnsupportedResources',
        'supported_events' => 'setSupportedEvents'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'auth_only' => 'getAuthOnly',
        'oauth_scopes' => 'getOauthScopes',
        'supported_resources' => 'getSupportedResources',
        'downstream_unsupported_resources' => 'getDownstreamUnsupportedResources',
        'supported_events' => 'getSupportedEvents'
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
        $this->container['auth_only'] = $data['auth_only'] ?? null;
        $this->container['oauth_scopes'] = $data['oauth_scopes'] ?? null;
        $this->container['supported_resources'] = $data['supported_resources'] ?? null;
        $this->container['downstream_unsupported_resources'] = $data['downstream_unsupported_resources'] ?? null;
        $this->container['supported_events'] = $data['supported_events'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * @return \Apideck\Client\Model\UnifiedApiId|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param \Apideck\Client\Model\UnifiedApiId|null $id id
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
     * @param string|null $name Name of the API.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * Gets oauth_scopes
     *
     * @return \Apideck\Client\Model\ConnectorOauthScopes1[]|null
     */
    public function getOauthScopes()
    {
        return $this->container['oauth_scopes'];
    }

    /**
     * Sets oauth_scopes
     *
     * @param \Apideck\Client\Model\ConnectorOauthScopes1[]|null $oauth_scopes oauth_scopes
     *
     * @return self
     */
    public function setOauthScopes($oauth_scopes)
    {
        $this->container['oauth_scopes'] = $oauth_scopes;

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
     * Gets downstream_unsupported_resources
     *
     * @return string[]|null
     */
    public function getDownstreamUnsupportedResources()
    {
        return $this->container['downstream_unsupported_resources'];
    }

    /**
     * Sets downstream_unsupported_resources
     *
     * @param string[]|null $downstream_unsupported_resources List of resources that are not supported on the downstream.
     *
     * @return self
     */
    public function setDownstreamUnsupportedResources($downstream_unsupported_resources)
    {
        $this->container['downstream_unsupported_resources'] = $downstream_unsupported_resources;

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
     * @param \Apideck\Client\Model\ConnectorEvent[]|null $supported_events List of events that are supported on the connector for this Unified API.
     *
     * @return self
     */
    public function setSupportedEvents($supported_events)
    {
        $this->container['supported_events'] = $supported_events;

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


