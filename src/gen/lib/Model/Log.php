<?php
/**
 * Log
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
 * The version of the OpenAPI document: 8.35.1
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
 * Log Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Log implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Log';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'api_style' => 'string',
        'base_url' => 'string',
        'child_request' => 'bool',
        'consumer_id' => 'string',
        'duration' => 'float',
        'execution' => 'int',
        'has_children' => 'bool',
        'http_method' => 'string',
        'id' => 'string',
        'latency' => 'float',
        'operation' => '\Apideck\Client\Model\LogOperation',
        'parent_id' => 'string',
        'path' => 'string',
        'sandbox' => 'bool',
        'service' => '\Apideck\Client\Model\LogService',
        'status_code' => 'int',
        'success' => 'bool',
        'timestamp' => 'string',
        'unified_api' => 'string',
        'error_message' => 'string',
        'source_ip' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'api_style' => null,
        'base_url' => null,
        'child_request' => null,
        'consumer_id' => null,
        'duration' => null,
        'execution' => null,
        'has_children' => null,
        'http_method' => null,
        'id' => null,
        'latency' => null,
        'operation' => null,
        'parent_id' => null,
        'path' => null,
        'sandbox' => null,
        'service' => null,
        'status_code' => null,
        'success' => null,
        'timestamp' => null,
        'unified_api' => null,
        'error_message' => null,
        'source_ip' => null
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
        'api_style' => 'api_style',
        'base_url' => 'base_url',
        'child_request' => 'child_request',
        'consumer_id' => 'consumer_id',
        'duration' => 'duration',
        'execution' => 'execution',
        'has_children' => 'has_children',
        'http_method' => 'http_method',
        'id' => 'id',
        'latency' => 'latency',
        'operation' => 'operation',
        'parent_id' => 'parent_id',
        'path' => 'path',
        'sandbox' => 'sandbox',
        'service' => 'service',
        'status_code' => 'status_code',
        'success' => 'success',
        'timestamp' => 'timestamp',
        'unified_api' => 'unified_api',
        'error_message' => 'error_message',
        'source_ip' => 'source_ip'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'api_style' => 'setApiStyle',
        'base_url' => 'setBaseUrl',
        'child_request' => 'setChildRequest',
        'consumer_id' => 'setConsumerId',
        'duration' => 'setDuration',
        'execution' => 'setExecution',
        'has_children' => 'setHasChildren',
        'http_method' => 'setHttpMethod',
        'id' => 'setId',
        'latency' => 'setLatency',
        'operation' => 'setOperation',
        'parent_id' => 'setParentId',
        'path' => 'setPath',
        'sandbox' => 'setSandbox',
        'service' => 'setService',
        'status_code' => 'setStatusCode',
        'success' => 'setSuccess',
        'timestamp' => 'setTimestamp',
        'unified_api' => 'setUnifiedApi',
        'error_message' => 'setErrorMessage',
        'source_ip' => 'setSourceIp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'api_style' => 'getApiStyle',
        'base_url' => 'getBaseUrl',
        'child_request' => 'getChildRequest',
        'consumer_id' => 'getConsumerId',
        'duration' => 'getDuration',
        'execution' => 'getExecution',
        'has_children' => 'getHasChildren',
        'http_method' => 'getHttpMethod',
        'id' => 'getId',
        'latency' => 'getLatency',
        'operation' => 'getOperation',
        'parent_id' => 'getParentId',
        'path' => 'getPath',
        'sandbox' => 'getSandbox',
        'service' => 'getService',
        'status_code' => 'getStatusCode',
        'success' => 'getSuccess',
        'timestamp' => 'getTimestamp',
        'unified_api' => 'getUnifiedApi',
        'error_message' => 'getErrorMessage',
        'source_ip' => 'getSourceIp'
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

    const UNIFIED_API_CRM = 'crm';
    const UNIFIED_API_LEAD = 'lead';
    const UNIFIED_API_PROXY = 'proxy';
    const UNIFIED_API_VAULT = 'vault';
    const UNIFIED_API_ACCOUNTING = 'accounting';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUnifiedApiAllowableValues()
    {
        return [
            self::UNIFIED_API_CRM,
            self::UNIFIED_API_LEAD,
            self::UNIFIED_API_PROXY,
            self::UNIFIED_API_VAULT,
            self::UNIFIED_API_ACCOUNTING,
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
        $this->container['api_style'] = $data['api_style'] ?? null;
        $this->container['base_url'] = $data['base_url'] ?? null;
        $this->container['child_request'] = $data['child_request'] ?? null;
        $this->container['consumer_id'] = $data['consumer_id'] ?? null;
        $this->container['duration'] = $data['duration'] ?? null;
        $this->container['execution'] = $data['execution'] ?? null;
        $this->container['has_children'] = $data['has_children'] ?? null;
        $this->container['http_method'] = $data['http_method'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['latency'] = $data['latency'] ?? null;
        $this->container['operation'] = $data['operation'] ?? null;
        $this->container['parent_id'] = $data['parent_id'] ?? null;
        $this->container['path'] = $data['path'] ?? null;
        $this->container['sandbox'] = $data['sandbox'] ?? null;
        $this->container['service'] = $data['service'] ?? null;
        $this->container['status_code'] = $data['status_code'] ?? null;
        $this->container['success'] = $data['success'] ?? null;
        $this->container['timestamp'] = $data['timestamp'] ?? null;
        $this->container['unified_api'] = $data['unified_api'] ?? null;
        $this->container['error_message'] = $data['error_message'] ?? null;
        $this->container['source_ip'] = $data['source_ip'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['api_style'] === null) {
            $invalidProperties[] = "'api_style' can't be null";
        }
        if ($this->container['base_url'] === null) {
            $invalidProperties[] = "'base_url' can't be null";
        }
        if ($this->container['child_request'] === null) {
            $invalidProperties[] = "'child_request' can't be null";
        }
        if ($this->container['consumer_id'] === null) {
            $invalidProperties[] = "'consumer_id' can't be null";
        }
        if ($this->container['duration'] === null) {
            $invalidProperties[] = "'duration' can't be null";
        }
        if ($this->container['execution'] === null) {
            $invalidProperties[] = "'execution' can't be null";
        }
        if ($this->container['has_children'] === null) {
            $invalidProperties[] = "'has_children' can't be null";
        }
        if ($this->container['http_method'] === null) {
            $invalidProperties[] = "'http_method' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['latency'] === null) {
            $invalidProperties[] = "'latency' can't be null";
        }
        if ($this->container['operation'] === null) {
            $invalidProperties[] = "'operation' can't be null";
        }
        if ($this->container['parent_id'] === null) {
            $invalidProperties[] = "'parent_id' can't be null";
        }
        if ($this->container['path'] === null) {
            $invalidProperties[] = "'path' can't be null";
        }
        if ($this->container['sandbox'] === null) {
            $invalidProperties[] = "'sandbox' can't be null";
        }
        if ($this->container['service'] === null) {
            $invalidProperties[] = "'service' can't be null";
        }
        if ($this->container['status_code'] === null) {
            $invalidProperties[] = "'status_code' can't be null";
        }
        if ($this->container['success'] === null) {
            $invalidProperties[] = "'success' can't be null";
        }
        if ($this->container['timestamp'] === null) {
            $invalidProperties[] = "'timestamp' can't be null";
        }
        if ($this->container['unified_api'] === null) {
            $invalidProperties[] = "'unified_api' can't be null";
        }
        $allowedValues = $this->getUnifiedApiAllowableValues();
        if (!is_null($this->container['unified_api']) && !in_array($this->container['unified_api'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'unified_api', must be one of '%s'",
                $this->container['unified_api'],
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
     * Gets api_style
     *
     * @return string
     */
    public function getApiStyle()
    {
        return $this->container['api_style'];
    }

    /**
     * Sets api_style
     *
     * @param string $api_style Indicates if the request was made via REST or Graphql endpoint.
     *
     * @return self
     */
    public function setApiStyle($api_style)
    {
        $this->container['api_style'] = $api_style;

        return $this;
    }

    /**
     * Gets base_url
     *
     * @return string
     */
    public function getBaseUrl()
    {
        return $this->container['base_url'];
    }

    /**
     * Sets base_url
     *
     * @param string $base_url The Apideck base URL the request was made to.
     *
     * @return self
     */
    public function setBaseUrl($base_url)
    {
        $this->container['base_url'] = $base_url;

        return $this;
    }

    /**
     * Gets child_request
     *
     * @return bool
     */
    public function getChildRequest()
    {
        return $this->container['child_request'];
    }

    /**
     * Sets child_request
     *
     * @param bool $child_request Indicates whether or not this is a child or parent request.
     *
     * @return self
     */
    public function setChildRequest($child_request)
    {
        $this->container['child_request'] = $child_request;

        return $this;
    }

    /**
     * Gets consumer_id
     *
     * @return string
     */
    public function getConsumerId()
    {
        return $this->container['consumer_id'];
    }

    /**
     * Sets consumer_id
     *
     * @param string $consumer_id The consumer Id associated with the request.
     *
     * @return self
     */
    public function setConsumerId($consumer_id)
    {
        $this->container['consumer_id'] = $consumer_id;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return float
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param float $duration The entire execution time in milliseconds it took to call the Apideck service provider.
     *
     * @return self
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets execution
     *
     * @return int
     */
    public function getExecution()
    {
        return $this->container['execution'];
    }

    /**
     * Sets execution
     *
     * @param int $execution The entire execution time in milliseconds it took to make the request.
     *
     * @return self
     */
    public function setExecution($execution)
    {
        $this->container['execution'] = $execution;

        return $this;
    }

    /**
     * Gets has_children
     *
     * @return bool
     */
    public function getHasChildren()
    {
        return $this->container['has_children'];
    }

    /**
     * Sets has_children
     *
     * @param bool $has_children When request is a parent request, this indicates if there are child requests associated.
     *
     * @return self
     */
    public function setHasChildren($has_children)
    {
        $this->container['has_children'] = $has_children;

        return $this;
    }

    /**
     * Gets http_method
     *
     * @return string
     */
    public function getHttpMethod()
    {
        return $this->container['http_method'];
    }

    /**
     * Sets http_method
     *
     * @param string $http_method HTTP Method of request.
     *
     * @return self
     */
    public function setHttpMethod($http_method)
    {
        $this->container['http_method'] = $http_method;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id UUID acting as Request Identifier.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets latency
     *
     * @return float
     */
    public function getLatency()
    {
        return $this->container['latency'];
    }

    /**
     * Sets latency
     *
     * @param float $latency Latency added by making this request via Unified Api.
     *
     * @return self
     */
    public function setLatency($latency)
    {
        $this->container['latency'] = $latency;

        return $this;
    }

    /**
     * Gets operation
     *
     * @return \Apideck\Client\Model\LogOperation
     */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
     * Sets operation
     *
     * @param \Apideck\Client\Model\LogOperation $operation operation
     *
     * @return self
     */
    public function setOperation($operation)
    {
        $this->container['operation'] = $operation;

        return $this;
    }

    /**
     * Gets parent_id
     *
     * @return string
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param string $parent_id When request is a child request, this UUID indicates it's parent request.
     *
     * @return self
     */
    public function setParentId($parent_id)
    {
        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string $path The path component of the URI the request was made to.
     *
     * @return self
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets sandbox
     *
     * @return bool
     */
    public function getSandbox()
    {
        return $this->container['sandbox'];
    }

    /**
     * Sets sandbox
     *
     * @param bool $sandbox Indicates whether the request was made using Apidecks sandbox credentials or not.
     *
     * @return self
     */
    public function setSandbox($sandbox)
    {
        $this->container['sandbox'] = $sandbox;

        return $this;
    }

    /**
     * Gets service
     *
     * @return \Apideck\Client\Model\LogService
     */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
     * Sets service
     *
     * @param \Apideck\Client\Model\LogService $service service
     *
     * @return self
     */
    public function setService($service)
    {
        $this->container['service'] = $service;

        return $this;
    }

    /**
     * Gets status_code
     *
     * @return int
     */
    public function getStatusCode()
    {
        return $this->container['status_code'];
    }

    /**
     * Sets status_code
     *
     * @param int $status_code HTTP Status code that was returned.
     *
     * @return self
     */
    public function setStatusCode($status_code)
    {
        $this->container['status_code'] = $status_code;

        return $this;
    }

    /**
     * Gets success
     *
     * @return bool
     */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
     * Sets success
     *
     * @param bool $success Whether or not the request was successful.
     *
     * @return self
     */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return string
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param string $timestamp ISO Date and time when the request was made.
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets unified_api
     *
     * @return string
     */
    public function getUnifiedApi()
    {
        return $this->container['unified_api'];
    }

    /**
     * Sets unified_api
     *
     * @param string $unified_api Which Unified Api request was made to.
     *
     * @return self
     */
    public function setUnifiedApi($unified_api)
    {
        $allowedValues = $this->getUnifiedApiAllowableValues();
        if (!in_array($unified_api, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'unified_api', must be one of '%s'",
                    $unified_api,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['unified_api'] = $unified_api;

        return $this;
    }

    /**
     * Gets error_message
     *
     * @return string|null
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message
     *
     * @param string|null $error_message If error occurred, this is brief explanation
     *
     * @return self
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;

        return $this;
    }

    /**
     * Gets source_ip
     *
     * @return string|null
     */
    public function getSourceIp()
    {
        return $this->container['source_ip'];
    }

    /**
     * Sets source_ip
     *
     * @param string|null $source_ip The IP address of the source of the request.
     *
     * @return self
     */
    public function setSourceIp($source_ip)
    {
        $this->container['source_ip'] = $source_ip;

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


