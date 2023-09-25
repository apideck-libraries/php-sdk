<?php
/**
 * WebhookSubscription
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
 * The version of the OpenAPI document: 9.9.1
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
 * WebhookSubscription Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WebhookSubscription implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WebhookSubscription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'downstream_id' => 'string',
        'unify_event_types' => 'string[]',
        'downstream_event_types' => 'string[]',
        'execute_url' => 'string',
        'created_at' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'downstream_id' => null,
        'unify_event_types' => null,
        'downstream_event_types' => null,
        'execute_url' => null,
        'created_at' => null
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
        'downstream_id' => 'downstream_id',
        'unify_event_types' => 'unify_event_types',
        'downstream_event_types' => 'downstream_event_types',
        'execute_url' => 'execute_url',
        'created_at' => 'created_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'downstream_id' => 'setDownstreamId',
        'unify_event_types' => 'setUnifyEventTypes',
        'downstream_event_types' => 'setDownstreamEventTypes',
        'execute_url' => 'setExecuteUrl',
        'created_at' => 'setCreatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'downstream_id' => 'getDownstreamId',
        'unify_event_types' => 'getUnifyEventTypes',
        'downstream_event_types' => 'getDownstreamEventTypes',
        'execute_url' => 'getExecuteUrl',
        'created_at' => 'getCreatedAt'
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
        $this->container['downstream_id'] = $data['downstream_id'] ?? null;
        $this->container['unify_event_types'] = $data['unify_event_types'] ?? null;
        $this->container['downstream_event_types'] = $data['downstream_event_types'] ?? null;
        $this->container['execute_url'] = $data['execute_url'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
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
     * Gets downstream_id
     *
     * @return string|null
     */
    public function getDownstreamId()
    {
        return $this->container['downstream_id'];
    }

    /**
     * Sets downstream_id
     *
     * @param string|null $downstream_id The ID of the downstream service
     *
     * @return self
     */
    public function setDownstreamId($downstream_id)
    {
        $this->container['downstream_id'] = $downstream_id;

        return $this;
    }

    /**
     * Gets unify_event_types
     *
     * @return string[]|null
     */
    public function getUnifyEventTypes()
    {
        return $this->container['unify_event_types'];
    }

    /**
     * Sets unify_event_types
     *
     * @param string[]|null $unify_event_types The list of Unify Events this connection is subscribed to
     *
     * @return self
     */
    public function setUnifyEventTypes($unify_event_types)
    {
        $this->container['unify_event_types'] = $unify_event_types;

        return $this;
    }

    /**
     * Gets downstream_event_types
     *
     * @return string[]|null
     */
    public function getDownstreamEventTypes()
    {
        return $this->container['downstream_event_types'];
    }

    /**
     * Sets downstream_event_types
     *
     * @param string[]|null $downstream_event_types The list of downstream Events this connection is subscribed to
     *
     * @return self
     */
    public function setDownstreamEventTypes($downstream_event_types)
    {
        $this->container['downstream_event_types'] = $downstream_event_types;

        return $this;
    }

    /**
     * Gets execute_url
     *
     * @return string|null
     */
    public function getExecuteUrl()
    {
        return $this->container['execute_url'];
    }

    /**
     * Sets execute_url
     *
     * @param string|null $execute_url The URL the downstream is sending to when the event is triggered
     *
     * @return self
     */
    public function setExecuteUrl($execute_url)
    {
        $this->container['execute_url'] = $execute_url;

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
     * @param string|null $created_at The date and time the webhook subscription was created downstream
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

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


