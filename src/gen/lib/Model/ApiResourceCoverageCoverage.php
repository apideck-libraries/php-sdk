<?php
/**
 * ApiResourceCoverageCoverage
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
 * The version of the OpenAPI document: 8.63.0
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
 * ApiResourceCoverageCoverage Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ApiResourceCoverageCoverage implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ApiResourceCoverage_coverage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'downstream_id' => 'string',
        'downstream_name' => 'string',
        'pagination_supported' => 'bool',
        'supported_operations' => 'string[]',
        'supported_filters' => 'string[]',
        'supported_sort_by' => 'string[]',
        'supported_fields' => '\Apideck\Client\Model\ApiResourceCoverageSupportedFields[]',
        'supported_list_fields' => '\Apideck\Client\Model\ApiResourceCoverageSupportedFields[]'
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
        'downstream_name' => null,
        'pagination_supported' => null,
        'supported_operations' => null,
        'supported_filters' => null,
        'supported_sort_by' => null,
        'supported_fields' => null,
        'supported_list_fields' => null
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
        'downstream_name' => 'downstream_name',
        'pagination_supported' => 'pagination_supported',
        'supported_operations' => 'supported_operations',
        'supported_filters' => 'supported_filters',
        'supported_sort_by' => 'supported_sort_by',
        'supported_fields' => 'supported_fields',
        'supported_list_fields' => 'supported_list_fields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'downstream_id' => 'setDownstreamId',
        'downstream_name' => 'setDownstreamName',
        'pagination_supported' => 'setPaginationSupported',
        'supported_operations' => 'setSupportedOperations',
        'supported_filters' => 'setSupportedFilters',
        'supported_sort_by' => 'setSupportedSortBy',
        'supported_fields' => 'setSupportedFields',
        'supported_list_fields' => 'setSupportedListFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'downstream_id' => 'getDownstreamId',
        'downstream_name' => 'getDownstreamName',
        'pagination_supported' => 'getPaginationSupported',
        'supported_operations' => 'getSupportedOperations',
        'supported_filters' => 'getSupportedFilters',
        'supported_sort_by' => 'getSupportedSortBy',
        'supported_fields' => 'getSupportedFields',
        'supported_list_fields' => 'getSupportedListFields'
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
        $this->container['downstream_name'] = $data['downstream_name'] ?? null;
        $this->container['pagination_supported'] = $data['pagination_supported'] ?? null;
        $this->container['supported_operations'] = $data['supported_operations'] ?? null;
        $this->container['supported_filters'] = $data['supported_filters'] ?? null;
        $this->container['supported_sort_by'] = $data['supported_sort_by'] ?? null;
        $this->container['supported_fields'] = $data['supported_fields'] ?? null;
        $this->container['supported_list_fields'] = $data['supported_list_fields'] ?? null;
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
     * @param string|null $downstream_id ID of the resource in the Connector's API (downstream)
     *
     * @return self
     */
    public function setDownstreamId($downstream_id)
    {
        $this->container['downstream_id'] = $downstream_id;

        return $this;
    }

    /**
     * Gets downstream_name
     *
     * @return string|null
     */
    public function getDownstreamName()
    {
        return $this->container['downstream_name'];
    }

    /**
     * Sets downstream_name
     *
     * @param string|null $downstream_name Name of the resource in the Connector's API (downstream)
     *
     * @return self
     */
    public function setDownstreamName($downstream_name)
    {
        $this->container['downstream_name'] = $downstream_name;

        return $this;
    }

    /**
     * Gets pagination_supported
     *
     * @return bool|null
     */
    public function getPaginationSupported()
    {
        return $this->container['pagination_supported'];
    }

    /**
     * Sets pagination_supported
     *
     * @param bool|null $pagination_supported Indicates if pagination (cursor and limit parameters) is supported on the list endpoint of the resource.
     *
     * @return self
     */
    public function setPaginationSupported($pagination_supported)
    {
        $this->container['pagination_supported'] = $pagination_supported;

        return $this;
    }

    /**
     * Gets supported_operations
     *
     * @return string[]|null
     */
    public function getSupportedOperations()
    {
        return $this->container['supported_operations'];
    }

    /**
     * Sets supported_operations
     *
     * @param string[]|null $supported_operations List of supported operations on the resource.
     *
     * @return self
     */
    public function setSupportedOperations($supported_operations)
    {
        $this->container['supported_operations'] = $supported_operations;

        return $this;
    }

    /**
     * Gets supported_filters
     *
     * @return string[]|null
     */
    public function getSupportedFilters()
    {
        return $this->container['supported_filters'];
    }

    /**
     * Sets supported_filters
     *
     * @param string[]|null $supported_filters Supported filters on the list endpoint of the resource.
     *
     * @return self
     */
    public function setSupportedFilters($supported_filters)
    {
        $this->container['supported_filters'] = $supported_filters;

        return $this;
    }

    /**
     * Gets supported_sort_by
     *
     * @return string[]|null
     */
    public function getSupportedSortBy()
    {
        return $this->container['supported_sort_by'];
    }

    /**
     * Sets supported_sort_by
     *
     * @param string[]|null $supported_sort_by Supported sorting properties on the list endpoint of the resource.
     *
     * @return self
     */
    public function setSupportedSortBy($supported_sort_by)
    {
        $this->container['supported_sort_by'] = $supported_sort_by;

        return $this;
    }

    /**
     * Gets supported_fields
     *
     * @return \Apideck\Client\Model\ApiResourceCoverageSupportedFields[]|null
     */
    public function getSupportedFields()
    {
        return $this->container['supported_fields'];
    }

    /**
     * Sets supported_fields
     *
     * @param \Apideck\Client\Model\ApiResourceCoverageSupportedFields[]|null $supported_fields Supported fields on the detail endpoint.
     *
     * @return self
     */
    public function setSupportedFields($supported_fields)
    {
        $this->container['supported_fields'] = $supported_fields;

        return $this;
    }

    /**
     * Gets supported_list_fields
     *
     * @return \Apideck\Client\Model\ApiResourceCoverageSupportedFields[]|null
     */
    public function getSupportedListFields()
    {
        return $this->container['supported_list_fields'];
    }

    /**
     * Sets supported_list_fields
     *
     * @param \Apideck\Client\Model\ApiResourceCoverageSupportedFields[]|null $supported_list_fields Supported fields on the list endpoint.
     *
     * @return self
     */
    public function setSupportedListFields($supported_list_fields)
    {
        $this->container['supported_list_fields'] = $supported_list_fields;

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


