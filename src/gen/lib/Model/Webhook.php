<?php
/**
 * Webhook
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
 * The version of the OpenAPI document: 9.7.4
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
 * Webhook Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Webhook implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Webhook';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'unified_api' => '\Apideck\Client\Model\UnifiedApiId',
        'status' => '\Apideck\Client\Model\Status',
        'delivery_url' => 'string',
        'execute_base_url' => 'string',
        'events' => '\Apideck\Client\Model\WebhookEventType[]',
        'id' => 'string',
        'description' => 'string',
        'disabled_reason' => 'string',
        'updated_at' => '\DateTime',
        'created_at' => '\DateTime'
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
        'execute_base_url' => 'uri',
        'events' => null,
        'id' => null,
        'description' => null,
        'disabled_reason' => null,
        'updated_at' => 'date-time',
        'created_at' => 'date-time'
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
        'execute_base_url' => 'execute_base_url',
        'events' => 'events',
        'id' => 'id',
        'description' => 'description',
        'disabled_reason' => 'disabled_reason',
        'updated_at' => 'updated_at',
        'created_at' => 'created_at'
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
        'execute_base_url' => 'setExecuteBaseUrl',
        'events' => 'setEvents',
        'id' => 'setId',
        'description' => 'setDescription',
        'disabled_reason' => 'setDisabledReason',
        'updated_at' => 'setUpdatedAt',
        'created_at' => 'setCreatedAt'
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
        'execute_base_url' => 'getExecuteBaseUrl',
        'events' => 'getEvents',
        'id' => 'getId',
        'description' => 'getDescription',
        'disabled_reason' => 'getDisabledReason',
        'updated_at' => 'getUpdatedAt',
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

    const DISABLED_REASON_NONE = 'none';
    const DISABLED_REASON_RETRY_LIMIT = 'retry_limit';
    const DISABLED_REASON_USAGE_LIMIT = 'usage_limit';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDisabledReasonAllowableValues()
    {
        return [
            self::DISABLED_REASON_NONE,
            self::DISABLED_REASON_RETRY_LIMIT,
            self::DISABLED_REASON_USAGE_LIMIT,
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
        $this->container['unified_api'] = $data['unified_api'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['delivery_url'] = $data['delivery_url'] ?? null;
        $this->container['execute_base_url'] = $data['execute_base_url'] ?? null;
        $this->container['events'] = $data['events'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['disabled_reason'] = $data['disabled_reason'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
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

        if ($this->container['execute_base_url'] === null) {
            $invalidProperties[] = "'execute_base_url' can't be null";
        }
        if (!preg_match("/^(https?):\/\//", $this->container['execute_base_url'])) {
            $invalidProperties[] = "invalid value for 'execute_base_url', must be conform to the pattern /^(https?):\/\//.";
        }

        if ($this->container['events'] === null) {
            $invalidProperties[] = "'events' can't be null";
        }
        $allowedValues = $this->getDisabledReasonAllowableValues();
        if (!is_null($this->container['disabled_reason']) && !in_array($this->container['disabled_reason'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'disabled_reason', must be one of '%s'",
                $this->container['disabled_reason'],
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
            throw new \InvalidArgumentException("invalid value for $delivery_url when calling Webhook., must conform to the pattern /^(https?):\/\//.");
        }

        $this->container['delivery_url'] = $delivery_url;

        return $this;
    }

    /**
     * Gets execute_base_url
     *
     * @return string
     */
    public function getExecuteBaseUrl()
    {
        return $this->container['execute_base_url'];
    }

    /**
     * Sets execute_base_url
     *
     * @param string $execute_base_url The Unify Base URL events from connectors will be sent to after service id is appended.
     *
     * @return self
     */
    public function setExecuteBaseUrl($execute_base_url)
    {

        if ((!preg_match("/^(https?):\/\//", $execute_base_url))) {
            throw new \InvalidArgumentException("invalid value for $execute_base_url when calling Webhook., must conform to the pattern /^(https?):\/\//.");
        }

        $this->container['execute_base_url'] = $execute_base_url;

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
     * @param string|null $description A description of the object.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets disabled_reason
     *
     * @return string|null
     */
    public function getDisabledReason()
    {
        return $this->container['disabled_reason'];
    }

    /**
     * Sets disabled_reason
     *
     * @param string|null $disabled_reason Indicates if the webhook has has been disabled as it reached its retry limit or if account is over the usage allocated by it's plan.
     *
     * @return self
     */
    public function setDisabledReason($disabled_reason)
    {
        $allowedValues = $this->getDisabledReasonAllowableValues();
        if (!is_null($disabled_reason) && !in_array($disabled_reason, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'disabled_reason', must be one of '%s'",
                    $disabled_reason,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['disabled_reason'] = $disabled_reason;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at The date and time when the object was last updated.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at The date and time when the object was created.
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


