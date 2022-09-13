<?php
/**
 * ConsumerRequestCountsInDateRangeResponseData
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
 * The version of the OpenAPI document: 8.57.0
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
 * ConsumerRequestCountsInDateRangeResponseData Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ConsumerRequestCountsInDateRangeResponseData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConsumerRequestCountsInDateRangeResponse_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'application_id' => 'string',
        'consumer_id' => 'string',
        'start_datetime' => 'string',
        'end_datetime' => 'string',
        'aggregated_request_count' => 'float',
        'request_counts' => '\Apideck\Client\Model\RequestCountAllocation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'application_id' => null,
        'consumer_id' => null,
        'start_datetime' => null,
        'end_datetime' => null,
        'aggregated_request_count' => null,
        'request_counts' => null
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
        'application_id' => 'application_id',
        'consumer_id' => 'consumer_id',
        'start_datetime' => 'start_datetime',
        'end_datetime' => 'end_datetime',
        'aggregated_request_count' => 'aggregated_request_count',
        'request_counts' => 'request_counts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'application_id' => 'setApplicationId',
        'consumer_id' => 'setConsumerId',
        'start_datetime' => 'setStartDatetime',
        'end_datetime' => 'setEndDatetime',
        'aggregated_request_count' => 'setAggregatedRequestCount',
        'request_counts' => 'setRequestCounts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'application_id' => 'getApplicationId',
        'consumer_id' => 'getConsumerId',
        'start_datetime' => 'getStartDatetime',
        'end_datetime' => 'getEndDatetime',
        'aggregated_request_count' => 'getAggregatedRequestCount',
        'request_counts' => 'getRequestCounts'
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
        $this->container['application_id'] = $data['application_id'] ?? null;
        $this->container['consumer_id'] = $data['consumer_id'] ?? null;
        $this->container['start_datetime'] = $data['start_datetime'] ?? null;
        $this->container['end_datetime'] = $data['end_datetime'] ?? null;
        $this->container['aggregated_request_count'] = $data['aggregated_request_count'] ?? null;
        $this->container['request_counts'] = $data['request_counts'] ?? null;
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
     * Gets application_id
     *
     * @return string|null
     */
    public function getApplicationId()
    {
        return $this->container['application_id'];
    }

    /**
     * Sets application_id
     *
     * @param string|null $application_id application_id
     *
     * @return self
     */
    public function setApplicationId($application_id)
    {
        $this->container['application_id'] = $application_id;

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
     * Gets start_datetime
     *
     * @return string|null
     */
    public function getStartDatetime()
    {
        return $this->container['start_datetime'];
    }

    /**
     * Sets start_datetime
     *
     * @param string|null $start_datetime start_datetime
     *
     * @return self
     */
    public function setStartDatetime($start_datetime)
    {
        $this->container['start_datetime'] = $start_datetime;

        return $this;
    }

    /**
     * Gets end_datetime
     *
     * @return string|null
     */
    public function getEndDatetime()
    {
        return $this->container['end_datetime'];
    }

    /**
     * Sets end_datetime
     *
     * @param string|null $end_datetime end_datetime
     *
     * @return self
     */
    public function setEndDatetime($end_datetime)
    {
        $this->container['end_datetime'] = $end_datetime;

        return $this;
    }

    /**
     * Gets aggregated_request_count
     *
     * @return float|null
     */
    public function getAggregatedRequestCount()
    {
        return $this->container['aggregated_request_count'];
    }

    /**
     * Sets aggregated_request_count
     *
     * @param float|null $aggregated_request_count aggregated_request_count
     *
     * @return self
     */
    public function setAggregatedRequestCount($aggregated_request_count)
    {
        $this->container['aggregated_request_count'] = $aggregated_request_count;

        return $this;
    }

    /**
     * Gets request_counts
     *
     * @return \Apideck\Client\Model\RequestCountAllocation|null
     */
    public function getRequestCounts()
    {
        return $this->container['request_counts'];
    }

    /**
     * Sets request_counts
     *
     * @param \Apideck\Client\Model\RequestCountAllocation|null $request_counts request_counts
     *
     * @return self
     */
    public function setRequestCounts($request_counts)
    {
        $this->container['request_counts'] = $request_counts;

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


