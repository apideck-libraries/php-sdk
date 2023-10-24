<?php
/**
 * GetConsumersResponseData
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
 * GetConsumersResponseData Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GetConsumersResponseData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetConsumersResponse_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'consumer_id' => 'string',
        'application_id' => 'string',
        'metadata' => '\Apideck\Client\Model\ConsumerMetadata',
        'aggregated_request_count' => 'float',
        'request_counts' => '\Apideck\Client\Model\RequestCountAllocation',
        'created' => 'string',
        'modified' => 'string',
        'request_count_updated' => 'string',
        'services' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'consumer_id' => null,
        'application_id' => null,
        'metadata' => null,
        'aggregated_request_count' => null,
        'request_counts' => null,
        'created' => null,
        'modified' => null,
        'request_count_updated' => null,
        'services' => null
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
        'consumer_id' => 'consumer_id',
        'application_id' => 'application_id',
        'metadata' => 'metadata',
        'aggregated_request_count' => 'aggregated_request_count',
        'request_counts' => 'request_counts',
        'created' => 'created',
        'modified' => 'modified',
        'request_count_updated' => 'request_count_updated',
        'services' => 'services'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'consumer_id' => 'setConsumerId',
        'application_id' => 'setApplicationId',
        'metadata' => 'setMetadata',
        'aggregated_request_count' => 'setAggregatedRequestCount',
        'request_counts' => 'setRequestCounts',
        'created' => 'setCreated',
        'modified' => 'setModified',
        'request_count_updated' => 'setRequestCountUpdated',
        'services' => 'setServices'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'consumer_id' => 'getConsumerId',
        'application_id' => 'getApplicationId',
        'metadata' => 'getMetadata',
        'aggregated_request_count' => 'getAggregatedRequestCount',
        'request_counts' => 'getRequestCounts',
        'created' => 'getCreated',
        'modified' => 'getModified',
        'request_count_updated' => 'getRequestCountUpdated',
        'services' => 'getServices'
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
        $this->container['consumer_id'] = $data['consumer_id'] ?? null;
        $this->container['application_id'] = $data['application_id'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
        $this->container['aggregated_request_count'] = $data['aggregated_request_count'] ?? null;
        $this->container['request_counts'] = $data['request_counts'] ?? null;
        $this->container['created'] = $data['created'] ?? null;
        $this->container['modified'] = $data['modified'] ?? null;
        $this->container['request_count_updated'] = $data['request_count_updated'] ?? null;
        $this->container['services'] = $data['services'] ?? null;
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
     * Gets metadata
     *
     * @return \Apideck\Client\Model\ConsumerMetadata|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param \Apideck\Client\Model\ConsumerMetadata|null $metadata metadata
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

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
     * Gets created
     *
     * @return string|null
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param string|null $created created
     *
     * @return self
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets modified
     *
     * @return string|null
     */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
     * Sets modified
     *
     * @param string|null $modified modified
     *
     * @return self
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

        return $this;
    }

    /**
     * Gets request_count_updated
     *
     * @return string|null
     */
    public function getRequestCountUpdated()
    {
        return $this->container['request_count_updated'];
    }

    /**
     * Sets request_count_updated
     *
     * @param string|null $request_count_updated request_count_updated
     *
     * @return self
     */
    public function setRequestCountUpdated($request_count_updated)
    {
        $this->container['request_count_updated'] = $request_count_updated;

        return $this;
    }

    /**
     * Gets services
     *
     * @return string[]|null
     */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
     * Sets services
     *
     * @param string[]|null $services services
     *
     * @return self
     */
    public function setServices($services)
    {
        $this->container['services'] = $services;

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


