<?php
/**
 * ConsumerConnection
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
 * The version of the OpenAPI document: 8.30.0
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
 * ConsumerConnection Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ConsumerConnection implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConsumerConnection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'icon' => 'string',
        'logo' => 'string',
        'website' => 'string',
        'tag_line' => 'string',
        'service_id' => 'string',
        'unified_api' => 'string',
        'consumer_id' => 'string',
        'auth_type' => '\Apideck\Client\Model\AuthType',
        'enabled' => 'bool',
        'settings' => 'object',
        'metadata' => 'array<string,object>',
        'created_at' => 'string',
        'updated_at' => 'string',
        'state' => 'string'
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
        'icon' => null,
        'logo' => null,
        'website' => null,
        'tag_line' => null,
        'service_id' => null,
        'unified_api' => null,
        'consumer_id' => null,
        'auth_type' => null,
        'enabled' => null,
        'settings' => null,
        'metadata' => null,
        'created_at' => null,
        'updated_at' => null,
        'state' => null
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
        'icon' => 'icon',
        'logo' => 'logo',
        'website' => 'website',
        'tag_line' => 'tag_line',
        'service_id' => 'service_id',
        'unified_api' => 'unified_api',
        'consumer_id' => 'consumer_id',
        'auth_type' => 'auth_type',
        'enabled' => 'enabled',
        'settings' => 'settings',
        'metadata' => 'metadata',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'state' => 'state'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'icon' => 'setIcon',
        'logo' => 'setLogo',
        'website' => 'setWebsite',
        'tag_line' => 'setTagLine',
        'service_id' => 'setServiceId',
        'unified_api' => 'setUnifiedApi',
        'consumer_id' => 'setConsumerId',
        'auth_type' => 'setAuthType',
        'enabled' => 'setEnabled',
        'settings' => 'setSettings',
        'metadata' => 'setMetadata',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'state' => 'setState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'icon' => 'getIcon',
        'logo' => 'getLogo',
        'website' => 'getWebsite',
        'tag_line' => 'getTagLine',
        'service_id' => 'getServiceId',
        'unified_api' => 'getUnifiedApi',
        'consumer_id' => 'getConsumerId',
        'auth_type' => 'getAuthType',
        'enabled' => 'getEnabled',
        'settings' => 'getSettings',
        'metadata' => 'getMetadata',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'state' => 'getState'
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

    const STATE_AVAILABLE = 'available';
    const STATE__CALLABLE = 'callable';
    const STATE_ADDED = 'added';
    const STATE_CONFIGURED = 'configured';
    const STATE_AUTHORIZED = 'authorized';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_AVAILABLE,
            self::STATE__CALLABLE,
            self::STATE_ADDED,
            self::STATE_CONFIGURED,
            self::STATE_AUTHORIZED,
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
        $this->container['icon'] = $data['icon'] ?? null;
        $this->container['logo'] = $data['logo'] ?? null;
        $this->container['website'] = $data['website'] ?? null;
        $this->container['tag_line'] = $data['tag_line'] ?? null;
        $this->container['service_id'] = $data['service_id'] ?? null;
        $this->container['unified_api'] = $data['unified_api'] ?? null;
        $this->container['consumer_id'] = $data['consumer_id'] ?? null;
        $this->container['auth_type'] = $data['auth_type'] ?? null;
        $this->container['enabled'] = $data['enabled'] ?? null;
        $this->container['settings'] = $data['settings'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'state', must be one of '%s'",
                $this->container['state'],
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
     * @param string|null $id id
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
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string|null $icon icon
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
     * @param string|null $logo logo
     *
     * @return self
     */
    public function setLogo($logo)
    {
        $this->container['logo'] = $logo;

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
     * @param string|null $website website
     *
     * @return self
     */
    public function setWebsite($website)
    {
        $this->container['website'] = $website;

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
     * @param string|null $service_id service_id
     *
     * @return self
     */
    public function setServiceId($service_id)
    {
        $this->container['service_id'] = $service_id;

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
     * @param string|null $unified_api unified_api
     *
     * @return self
     */
    public function setUnifiedApi($unified_api)
    {
        $this->container['unified_api'] = $unified_api;

        return $this;
    }

    /**
     * Gets consumer_id
     *
     * @return string|null
     */
    public function getConsumerId()
    {
        return $this->container['consumer_id'];
    }

    /**
     * Sets consumer_id
     *
     * @param string|null $consumer_id consumer_id
     *
     * @return self
     */
    public function setConsumerId($consumer_id)
    {
        $this->container['consumer_id'] = $consumer_id;

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
     * @param bool|null $enabled enabled
     *
     * @return self
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets settings
     *
     * @return object|null
     */
    public function getSettings()
    {
        return $this->container['settings'];
    }

    /**
     * Sets settings
     *
     * @param object|null $settings Connection settings. Values will persist to `form_fields` with corresponding id
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
     * Gets created_at
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string|null $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state state
     *
     * @return self
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'state', must be one of '%s'",
                    $state,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

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


