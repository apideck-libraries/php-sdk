<?php
/**
 * WebhookEvent
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
 * The version of the OpenAPI document: 10.7.5
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
 * WebhookEvent Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WebhookEvent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WebhookEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'event_id' => 'string',
        'unified_api' => 'string',
        'service_id' => 'string',
        'consumer_id' => 'string',
        'entity_id' => 'string',
        'entity_type' => 'string',
        'entity_url' => 'string',
        'execution_attempt' => 'float',
        'occurred_at' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'event_id' => null,
        'unified_api' => null,
        'service_id' => null,
        'consumer_id' => null,
        'entity_id' => null,
        'entity_type' => null,
        'entity_url' => null,
        'execution_attempt' => null,
        'occurred_at' => null
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
        'event_id' => 'event_id',
        'unified_api' => 'unified_api',
        'service_id' => 'service_id',
        'consumer_id' => 'consumer_id',
        'entity_id' => 'entity_id',
        'entity_type' => 'entity_type',
        'entity_url' => 'entity_url',
        'execution_attempt' => 'execution_attempt',
        'occurred_at' => 'occurred_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'event_id' => 'setEventId',
        'unified_api' => 'setUnifiedApi',
        'service_id' => 'setServiceId',
        'consumer_id' => 'setConsumerId',
        'entity_id' => 'setEntityId',
        'entity_type' => 'setEntityType',
        'entity_url' => 'setEntityUrl',
        'execution_attempt' => 'setExecutionAttempt',
        'occurred_at' => 'setOccurredAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'event_id' => 'getEventId',
        'unified_api' => 'getUnifiedApi',
        'service_id' => 'getServiceId',
        'consumer_id' => 'getConsumerId',
        'entity_id' => 'getEntityId',
        'entity_type' => 'getEntityType',
        'entity_url' => 'getEntityUrl',
        'execution_attempt' => 'getExecutionAttempt',
        'occurred_at' => 'getOccurredAt'
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

    const UNIFIED_API_ACCOUNTING = 'accounting';
    const UNIFIED_API_ATS = 'ats';
    const UNIFIED_API_CALENDAR = 'calendar';
    const UNIFIED_API_CRM = 'crm';
    const UNIFIED_API_CSP = 'csp';
    const UNIFIED_API_CUSTOMER_SUPPORT = 'customer-support';
    const UNIFIED_API_ECOMMERCE = 'ecommerce';
    const UNIFIED_API_EMAIL = 'email';
    const UNIFIED_API_EMAIL_MARKETING = 'email-marketing';
    const UNIFIED_API_EXPENSE_MANAGEMENT = 'expense-management';
    const UNIFIED_API_FILE_STORAGE = 'file-storage';
    const UNIFIED_API_FORM = 'form';
    const UNIFIED_API_HRIS = 'hris';
    const UNIFIED_API_LEAD = 'lead';
    const UNIFIED_API_PAYROLL = 'payroll';
    const UNIFIED_API_POS = 'pos';
    const UNIFIED_API_PROCUREMENT = 'procurement';
    const UNIFIED_API_PROJECT_MANAGEMENT = 'project-management';
    const UNIFIED_API_SCRIPT = 'script';
    const UNIFIED_API_SMS = 'sms';
    const UNIFIED_API_SPREADSHEET = 'spreadsheet';
    const UNIFIED_API_TEAM_MESSAGING = 'team-messaging';
    const UNIFIED_API_ISSUE_TRACKING = 'issue-tracking';
    const UNIFIED_API_TIME_REGISTRATION = 'time-registration';
    const UNIFIED_API_TRANSACTIONAL_EMAIL = 'transactional-email';
    const UNIFIED_API_VAULT = 'vault';
    const UNIFIED_API_DATA_WAREHOUSE = 'data-warehouse';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUnifiedApiAllowableValues()
    {
        return [
            self::UNIFIED_API_ACCOUNTING,
            self::UNIFIED_API_ATS,
            self::UNIFIED_API_CALENDAR,
            self::UNIFIED_API_CRM,
            self::UNIFIED_API_CSP,
            self::UNIFIED_API_CUSTOMER_SUPPORT,
            self::UNIFIED_API_ECOMMERCE,
            self::UNIFIED_API_EMAIL,
            self::UNIFIED_API_EMAIL_MARKETING,
            self::UNIFIED_API_EXPENSE_MANAGEMENT,
            self::UNIFIED_API_FILE_STORAGE,
            self::UNIFIED_API_FORM,
            self::UNIFIED_API_HRIS,
            self::UNIFIED_API_LEAD,
            self::UNIFIED_API_PAYROLL,
            self::UNIFIED_API_POS,
            self::UNIFIED_API_PROCUREMENT,
            self::UNIFIED_API_PROJECT_MANAGEMENT,
            self::UNIFIED_API_SCRIPT,
            self::UNIFIED_API_SMS,
            self::UNIFIED_API_SPREADSHEET,
            self::UNIFIED_API_TEAM_MESSAGING,
            self::UNIFIED_API_ISSUE_TRACKING,
            self::UNIFIED_API_TIME_REGISTRATION,
            self::UNIFIED_API_TRANSACTIONAL_EMAIL,
            self::UNIFIED_API_VAULT,
            self::UNIFIED_API_DATA_WAREHOUSE,
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
        $this->container['event_id'] = $data['event_id'] ?? null;
        $this->container['unified_api'] = $data['unified_api'] ?? null;
        $this->container['service_id'] = $data['service_id'] ?? null;
        $this->container['consumer_id'] = $data['consumer_id'] ?? null;
        $this->container['entity_id'] = $data['entity_id'] ?? null;
        $this->container['entity_type'] = $data['entity_type'] ?? null;
        $this->container['entity_url'] = $data['entity_url'] ?? null;
        $this->container['execution_attempt'] = $data['execution_attempt'] ?? null;
        $this->container['occurred_at'] = $data['occurred_at'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets event_id
     *
     * @return string|null
     */
    public function getEventId()
    {
        return $this->container['event_id'];
    }

    /**
     * Sets event_id
     *
     * @param string|null $event_id Unique reference to this request event
     *
     * @return self
     */
    public function setEventId($event_id)
    {
        $this->container['event_id'] = $event_id;

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
     * @param string|null $unified_api Name of Apideck Unified API
     *
     * @return self
     */
    public function setUnifiedApi($unified_api)
    {
        $allowedValues = $this->getUnifiedApiAllowableValues();
        if (!is_null($unified_api) && !in_array($unified_api, $allowedValues, true)) {
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
     * @param string|null $service_id Service provider identifier
     *
     * @return self
     */
    public function setServiceId($service_id)
    {
        $this->container['service_id'] = $service_id;

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
     * Gets entity_id
     *
     * @return string|null
     */
    public function getEntityId()
    {
        return $this->container['entity_id'];
    }

    /**
     * Sets entity_id
     *
     * @param string|null $entity_id The service provider's ID of the entity that triggered this event
     *
     * @return self
     */
    public function setEntityId($entity_id)
    {
        $this->container['entity_id'] = $entity_id;

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
     * @param string|null $entity_type The type entity that triggered this event
     *
     * @return self
     */
    public function setEntityType($entity_type)
    {
        $this->container['entity_type'] = $entity_type;

        return $this;
    }

    /**
     * Gets entity_url
     *
     * @return string|null
     */
    public function getEntityUrl()
    {
        return $this->container['entity_url'];
    }

    /**
     * Sets entity_url
     *
     * @param string|null $entity_url The url to retrieve entity detail.
     *
     * @return self
     */
    public function setEntityUrl($entity_url)
    {
        $this->container['entity_url'] = $entity_url;

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
     * @param float|null $execution_attempt The current count this request event has been attempted
     *
     * @return self
     */
    public function setExecutionAttempt($execution_attempt)
    {
        $this->container['execution_attempt'] = $execution_attempt;

        return $this;
    }

    /**
     * Gets occurred_at
     *
     * @return string|null
     */
    public function getOccurredAt()
    {
        return $this->container['occurred_at'];
    }

    /**
     * Sets occurred_at
     *
     * @param string|null $occurred_at ISO Datetime for when the original event occurred
     *
     * @return self
     */
    public function setOccurredAt($occurred_at)
    {
        $this->container['occurred_at'] = $occurred_at;

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


