<?php
/**
 * WebhookEventLog
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
 * WebhookEventLog Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WebhookEventLog implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WebhookEventLog';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'status_code' => 'int',
        'success' => 'bool',
        'application_id' => 'string',
        'consumer_id' => 'string',
        'unified_api' => '\Apideck\Client\Model\UnifiedApiId',
        'service' => '\Apideck\Client\Model\WebhookEventLogService',
        'endpoint' => 'string',
        'event_type' => 'string',
        'execution_attempt' => 'float',
        'http_method' => 'string',
        'timestamp' => 'string',
        'entity_type' => 'string',
        'request_body' => 'string',
        'response_body' => 'string',
        'retry_scheduled' => 'bool',
        'attempts' => '\Apideck\Client\Model\WebhookEventLogAttempts[]'
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
        'status_code' => null,
        'success' => null,
        'application_id' => null,
        'consumer_id' => null,
        'unified_api' => null,
        'service' => null,
        'endpoint' => 'uri',
        'event_type' => null,
        'execution_attempt' => null,
        'http_method' => null,
        'timestamp' => null,
        'entity_type' => null,
        'request_body' => null,
        'response_body' => null,
        'retry_scheduled' => null,
        'attempts' => null
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
        'status_code' => 'status_code',
        'success' => 'success',
        'application_id' => 'application_id',
        'consumer_id' => 'consumer_id',
        'unified_api' => 'unified_api',
        'service' => 'service',
        'endpoint' => 'endpoint',
        'event_type' => 'event_type',
        'execution_attempt' => 'execution_attempt',
        'http_method' => 'http_method',
        'timestamp' => 'timestamp',
        'entity_type' => 'entity_type',
        'request_body' => 'request_body',
        'response_body' => 'response_body',
        'retry_scheduled' => 'retry_scheduled',
        'attempts' => 'attempts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'status_code' => 'setStatusCode',
        'success' => 'setSuccess',
        'application_id' => 'setApplicationId',
        'consumer_id' => 'setConsumerId',
        'unified_api' => 'setUnifiedApi',
        'service' => 'setService',
        'endpoint' => 'setEndpoint',
        'event_type' => 'setEventType',
        'execution_attempt' => 'setExecutionAttempt',
        'http_method' => 'setHttpMethod',
        'timestamp' => 'setTimestamp',
        'entity_type' => 'setEntityType',
        'request_body' => 'setRequestBody',
        'response_body' => 'setResponseBody',
        'retry_scheduled' => 'setRetryScheduled',
        'attempts' => 'setAttempts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'status_code' => 'getStatusCode',
        'success' => 'getSuccess',
        'application_id' => 'getApplicationId',
        'consumer_id' => 'getConsumerId',
        'unified_api' => 'getUnifiedApi',
        'service' => 'getService',
        'endpoint' => 'getEndpoint',
        'event_type' => 'getEventType',
        'execution_attempt' => 'getExecutionAttempt',
        'http_method' => 'getHttpMethod',
        'timestamp' => 'getTimestamp',
        'entity_type' => 'getEntityType',
        'request_body' => 'getRequestBody',
        'response_body' => 'getResponseBody',
        'retry_scheduled' => 'getRetryScheduled',
        'attempts' => 'getAttempts'
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
        $this->container['status_code'] = $data['status_code'] ?? null;
        $this->container['success'] = $data['success'] ?? null;
        $this->container['application_id'] = $data['application_id'] ?? null;
        $this->container['consumer_id'] = $data['consumer_id'] ?? null;
        $this->container['unified_api'] = $data['unified_api'] ?? null;
        $this->container['service'] = $data['service'] ?? null;
        $this->container['endpoint'] = $data['endpoint'] ?? null;
        $this->container['event_type'] = $data['event_type'] ?? null;
        $this->container['execution_attempt'] = $data['execution_attempt'] ?? null;
        $this->container['http_method'] = $data['http_method'] ?? null;
        $this->container['timestamp'] = $data['timestamp'] ?? null;
        $this->container['entity_type'] = $data['entity_type'] ?? null;
        $this->container['request_body'] = $data['request_body'] ?? null;
        $this->container['response_body'] = $data['response_body'] ?? null;
        $this->container['retry_scheduled'] = $data['retry_scheduled'] ?? null;
        $this->container['attempts'] = $data['attempts'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['endpoint']) && !preg_match("/^(https?):\/\//", $this->container['endpoint'])) {
            $invalidProperties[] = "invalid value for 'endpoint', must be conform to the pattern /^(https?):\/\//.";
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
     * Gets status_code
     *
     * @return int|null
     */
    public function getStatusCode()
    {
        return $this->container['status_code'];
    }

    /**
     * Sets status_code
     *
     * @param int|null $status_code HTTP Status code that was returned.
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
     * @return bool|null
     */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
     * Sets success
     *
     * @param bool|null $success Whether or not the request was successful.
     *
     * @return self
     */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;

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
     * @param string|null $application_id ID of your Apideck Application
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
     * @param string|null $consumer_id Unique consumer identifier. You can freely choose a consumer ID yourself. Most of the time, this is an ID of your internal data model that represents a user or account in your system (for example account:12345). If the consumer doesn't exist yet, Vault will upsert a consumer based on your ID.
     *
     * @return self
     */
    public function setConsumerId($consumer_id)
    {
        $this->container['consumer_id'] = $consumer_id;

        return $this;
    }

    /**
     * Gets unified_api
     *
     * @return \Apideck\Client\Model\UnifiedApiId|null
     */
    public function getUnifiedApi()
    {
        return $this->container['unified_api'];
    }

    /**
     * Sets unified_api
     *
     * @param \Apideck\Client\Model\UnifiedApiId|null $unified_api unified_api
     *
     * @return self
     */
    public function setUnifiedApi($unified_api)
    {
        $this->container['unified_api'] = $unified_api;

        return $this;
    }

    /**
     * Gets service
     *
     * @return \Apideck\Client\Model\WebhookEventLogService|null
     */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
     * Sets service
     *
     * @param \Apideck\Client\Model\WebhookEventLogService|null $service service
     *
     * @return self
     */
    public function setService($service)
    {
        $this->container['service'] = $service;

        return $this;
    }

    /**
     * Gets endpoint
     *
     * @return string|null
     */
    public function getEndpoint()
    {
        return $this->container['endpoint'];
    }

    /**
     * Sets endpoint
     *
     * @param string|null $endpoint The URL of the webhook endpoint.
     *
     * @return self
     */
    public function setEndpoint($endpoint)
    {

        if (!is_null($endpoint) && (!preg_match("/^(https?):\/\//", $endpoint))) {
            throw new \InvalidArgumentException("invalid value for $endpoint when calling WebhookEventLog., must conform to the pattern /^(https?):\/\//.");
        }

        $this->container['endpoint'] = $endpoint;

        return $this;
    }

    /**
     * Gets event_type
     *
     * @return string|null
     */
    public function getEventType()
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type
     *
     * @param string|null $event_type Name of source event that webhook is subscribed to.
     *
     * @return self
     */
    public function setEventType($event_type)
    {
        $this->container['event_type'] = $event_type;

        return $this;
    }

    /**
     * Gets execution_attempt
     *
     * @return float|null
     */
    public function getExecutionAttempt()
    {
        return $this->container['execution_attempt'];
    }

    /**
     * Sets execution_attempt
     *
     * @param float|null $execution_attempt Number of attempts webhook endpoint was called before a success was returned or eventually failed
     *
     * @return self
     */
    public function setExecutionAttempt($execution_attempt)
    {
        $this->container['execution_attempt'] = $execution_attempt;

        return $this;
    }

    /**
     * Gets http_method
     *
     * @return string|null
     */
    public function getHttpMethod()
    {
        return $this->container['http_method'];
    }

    /**
     * Sets http_method
     *
     * @param string|null $http_method HTTP Method of request to endpoint.
     *
     * @return self
     */
    public function setHttpMethod($http_method)
    {
        $this->container['http_method'] = $http_method;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return string|null
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param string|null $timestamp ISO Date and time when the request was made.
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets entity_type
     *
     * @return string|null
     */
    public function getEntityType()
    {
        return $this->container['entity_type'];
    }

    /**
     * Sets entity_type
     *
     * @param string|null $entity_type Name of the Entity described by the attributes delivered within payload
     *
     * @return self
     */
    public function setEntityType($entity_type)
    {
        $this->container['entity_type'] = $entity_type;

        return $this;
    }

    /**
     * Gets request_body
     *
     * @return string|null
     */
    public function getRequestBody()
    {
        return $this->container['request_body'];
    }

    /**
     * Sets request_body
     *
     * @param string|null $request_body The JSON stringified payload that was delivered to the webhook endpoint.
     *
     * @return self
     */
    public function setRequestBody($request_body)
    {
        $this->container['request_body'] = $request_body;

        return $this;
    }

    /**
     * Gets response_body
     *
     * @return string|null
     */
    public function getResponseBody()
    {
        return $this->container['response_body'];
    }

    /**
     * Sets response_body
     *
     * @param string|null $response_body The JSON stringified response that was returned from the webhook endpoint.
     *
     * @return self
     */
    public function setResponseBody($response_body)
    {
        $this->container['response_body'] = $response_body;

        return $this;
    }

    /**
     * Gets retry_scheduled
     *
     * @return bool|null
     */
    public function getRetryScheduled()
    {
        return $this->container['retry_scheduled'];
    }

    /**
     * Sets retry_scheduled
     *
     * @param bool|null $retry_scheduled If the request has not hit the max retry limit and will be retried.
     *
     * @return self
     */
    public function setRetryScheduled($retry_scheduled)
    {
        $this->container['retry_scheduled'] = $retry_scheduled;

        return $this;
    }

    /**
     * Gets attempts
     *
     * @return \Apideck\Client\Model\WebhookEventLogAttempts[]|null
     */
    public function getAttempts()
    {
        return $this->container['attempts'];
    }

    /**
     * Sets attempts
     *
     * @param \Apideck\Client\Model\WebhookEventLogAttempts[]|null $attempts record of each attempt to call webhook endpoint
     *
     * @return self
     */
    public function setAttempts($attempts)
    {
        $this->container['attempts'] = $attempts;

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


