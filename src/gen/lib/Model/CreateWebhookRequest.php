<?php
/**
 * CreateWebhookRequest
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
 * The version of the OpenAPI document: 8.32.5
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
 * CreateWebhookRequest Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateWebhookRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateWebhookRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'unified_api' => '\Apideck\Client\Model\UnifiedApiId',
        'status' => '\Apideck\Client\Model\Status',
        'delivery_url' => 'string',
        'events' => '\Apideck\Client\Model\WebhookEventType[]',
        'description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'unified_api' => null,
        'status' => null,
        'delivery_url' => 'uri',
        'events' => null,
        'description' => null
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
        'unified_api' => 'unified_api',
        'status' => 'status',
        'delivery_url' => 'delivery_url',
        'events' => 'events',
        'description' => 'description'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'unified_api' => 'setUnifiedApi',
        'status' => 'setStatus',
        'delivery_url' => 'setDeliveryUrl',
        'events' => 'setEvents',
        'description' => 'setDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'unified_api' => 'getUnifiedApi',
        'status' => 'getStatus',
        'delivery_url' => 'getDeliveryUrl',
        'events' => 'getEvents',
        'description' => 'getDescription'
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
        $this->container['unified_api'] = $data['unified_api'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['delivery_url'] = $data['delivery_url'] ?? null;
        $this->container['events'] = $data['events'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['unified_api'] === null) {
            $invalidProperties[] = "'unified_api' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['delivery_url'] === null) {
            $invalidProperties[] = "'delivery_url' can't be null";
        }
        if (!preg_match("/^(https?):\/\//", $this->container['delivery_url'])) {
            $invalidProperties[] = "invalid value for 'delivery_url', must be conform to the pattern /^(https?):\/\//.";
        }

        if ($this->container['events'] === null) {
            $invalidProperties[] = "'events' can't be null";
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
     * Gets unified_api
     *
     * @return \Apideck\Client\Model\UnifiedApiId
     */
    public function getUnifiedApi()
    {
        return $this->container['unified_api'];
    }

    /**
     * Sets unified_api
     *
     * @param \Apideck\Client\Model\UnifiedApiId $unified_api unified_api
     *
     * @return self
     */
    public function setUnifiedApi($unified_api)
    {
        $this->container['unified_api'] = $unified_api;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Apideck\Client\Model\Status
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Apideck\Client\Model\Status $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets delivery_url
     *
     * @return string
     */
    public function getDeliveryUrl()
    {
        return $this->container['delivery_url'];
    }

    /**
     * Sets delivery_url
     *
     * @param string $delivery_url The delivery url of the webhook endpoint.
     *
     * @return self
     */
    public function setDeliveryUrl($delivery_url)
    {

        if ((!preg_match("/^(https?):\/\//", $delivery_url))) {
            throw new \InvalidArgumentException("invalid value for $delivery_url when calling CreateWebhookRequest., must conform to the pattern /^(https?):\/\//.");
        }

        $this->container['delivery_url'] = $delivery_url;

        return $this;
    }

    /**
     * Gets events
     *
     * @return \Apideck\Client\Model\WebhookEventType[]
     */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
     * Sets events
     *
     * @param \Apideck\Client\Model\WebhookEventType[] $events The list of subscribed events for this webhook. [`*`] indicates that all events are enabled.
     *
     * @return self
     */
    public function setEvents($events)
    {
        $this->container['events'] = $events;

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


