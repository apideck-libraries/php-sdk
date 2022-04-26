<?php
/**
 * Message
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
 * The version of the OpenAPI document: 8.26.1
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
 * Message Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Message implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Message';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'from' => 'string',
        'to' => 'string',
        'body' => 'string',
        'id' => 'string',
        'subject' => 'string',
        'type' => 'string',
        'number_of_units' => 'int',
        'number_of_media_files' => 'int',
        'direction' => 'string',
        'status' => 'string',
        'scheduled_at' => '\DateTime',
        'sent_at' => '\DateTime',
        'webhook_url' => 'string',
        'reference' => 'string',
        'price' => '\Apideck\Client\Model\Price',
        'error' => '\Apideck\Client\Model\Error',
        'messaging_service_id' => 'string',
        'updated_by' => 'string',
        'created_by' => 'string',
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
        'from' => null,
        'to' => null,
        'body' => null,
        'id' => null,
        'subject' => null,
        'type' => null,
        'number_of_units' => null,
        'number_of_media_files' => null,
        'direction' => null,
        'status' => null,
        'scheduled_at' => 'date-time',
        'sent_at' => 'date-time',
        'webhook_url' => null,
        'reference' => null,
        'price' => null,
        'error' => null,
        'messaging_service_id' => null,
        'updated_by' => null,
        'created_by' => null,
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
        'from' => 'from',
        'to' => 'to',
        'body' => 'body',
        'id' => 'id',
        'subject' => 'subject',
        'type' => 'type',
        'number_of_units' => 'number_of_units',
        'number_of_media_files' => 'number_of_media_files',
        'direction' => 'direction',
        'status' => 'status',
        'scheduled_at' => 'scheduled_at',
        'sent_at' => 'sent_at',
        'webhook_url' => 'webhook_url',
        'reference' => 'reference',
        'price' => 'price',
        'error' => 'error',
        'messaging_service_id' => 'messaging_service_id',
        'updated_by' => 'updated_by',
        'created_by' => 'created_by',
        'updated_at' => 'updated_at',
        'created_at' => 'created_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'from' => 'setFrom',
        'to' => 'setTo',
        'body' => 'setBody',
        'id' => 'setId',
        'subject' => 'setSubject',
        'type' => 'setType',
        'number_of_units' => 'setNumberOfUnits',
        'number_of_media_files' => 'setNumberOfMediaFiles',
        'direction' => 'setDirection',
        'status' => 'setStatus',
        'scheduled_at' => 'setScheduledAt',
        'sent_at' => 'setSentAt',
        'webhook_url' => 'setWebhookUrl',
        'reference' => 'setReference',
        'price' => 'setPrice',
        'error' => 'setError',
        'messaging_service_id' => 'setMessagingServiceId',
        'updated_by' => 'setUpdatedBy',
        'created_by' => 'setCreatedBy',
        'updated_at' => 'setUpdatedAt',
        'created_at' => 'setCreatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'from' => 'getFrom',
        'to' => 'getTo',
        'body' => 'getBody',
        'id' => 'getId',
        'subject' => 'getSubject',
        'type' => 'getType',
        'number_of_units' => 'getNumberOfUnits',
        'number_of_media_files' => 'getNumberOfMediaFiles',
        'direction' => 'getDirection',
        'status' => 'getStatus',
        'scheduled_at' => 'getScheduledAt',
        'sent_at' => 'getSentAt',
        'webhook_url' => 'getWebhookUrl',
        'reference' => 'getReference',
        'price' => 'getPrice',
        'error' => 'getError',
        'messaging_service_id' => 'getMessagingServiceId',
        'updated_by' => 'getUpdatedBy',
        'created_by' => 'getCreatedBy',
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

    const TYPE_SMS = 'sms';
    const TYPE_MMS = 'mms';
    const DIRECTION_INBOUND = 'inbound';
    const DIRECTION_OUTBOUND_API = 'outbound-api';
    const DIRECTION_OUTBOUND_CALL = 'outbound-call';
    const DIRECTION_OUTBOUND_REPLY = 'outbound-reply';
    const DIRECTION_UNKNOWN = 'unknown';
    const STATUS_ACCEPTED = 'accepted';
    const STATUS_SCHEDULED = 'scheduled';
    const STATUS_CANCELED = 'canceled';
    const STATUS_QUEUED = 'queued';
    const STATUS_SENDING = 'sending';
    const STATUS_SENT = 'sent';
    const STATUS_FAILED = 'failed';
    const STATUS_DELIVERED = 'delivered';
    const STATUS_UNDELIVERED = 'undelivered';
    const STATUS_RECEIVING = 'receiving';
    const STATUS_RECEIVED = 'received';
    const STATUS_READ = 'read';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SMS,
            self::TYPE_MMS,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDirectionAllowableValues()
    {
        return [
            self::DIRECTION_INBOUND,
            self::DIRECTION_OUTBOUND_API,
            self::DIRECTION_OUTBOUND_CALL,
            self::DIRECTION_OUTBOUND_REPLY,
            self::DIRECTION_UNKNOWN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACCEPTED,
            self::STATUS_SCHEDULED,
            self::STATUS_CANCELED,
            self::STATUS_QUEUED,
            self::STATUS_SENDING,
            self::STATUS_SENT,
            self::STATUS_FAILED,
            self::STATUS_DELIVERED,
            self::STATUS_UNDELIVERED,
            self::STATUS_RECEIVING,
            self::STATUS_RECEIVED,
            self::STATUS_READ,
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
        $this->container['from'] = $data['from'] ?? null;
        $this->container['to'] = $data['to'] ?? null;
        $this->container['body'] = $data['body'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['subject'] = $data['subject'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['number_of_units'] = $data['number_of_units'] ?? null;
        $this->container['number_of_media_files'] = $data['number_of_media_files'] ?? null;
        $this->container['direction'] = $data['direction'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['scheduled_at'] = $data['scheduled_at'] ?? null;
        $this->container['sent_at'] = $data['sent_at'] ?? null;
        $this->container['webhook_url'] = $data['webhook_url'] ?? null;
        $this->container['reference'] = $data['reference'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['error'] = $data['error'] ?? null;
        $this->container['messaging_service_id'] = $data['messaging_service_id'] ?? null;
        $this->container['updated_by'] = $data['updated_by'] ?? null;
        $this->container['created_by'] = $data['created_by'] ?? null;
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

        if ($this->container['from'] === null) {
            $invalidProperties[] = "'from' can't be null";
        }
        if ($this->container['to'] === null) {
            $invalidProperties[] = "'to' can't be null";
        }
        if ($this->container['body'] === null) {
            $invalidProperties[] = "'body' can't be null";
        }
        if ((mb_strlen($this->container['body']) > 1600)) {
            $invalidProperties[] = "invalid value for 'body', the character length must be smaller than or equal to 1600.";
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDirectionAllowableValues();
        if (!is_null($this->container['direction']) && !in_array($this->container['direction'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'direction', must be one of '%s'",
                $this->container['direction'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
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
     * Gets from
     *
     * @return string
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param string $from The phone number that initiated the message.
     *
     * @return self
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets to
     *
     * @return string
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param string $to The phone number that received the message.
     *
     * @return self
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string $body The message text.
     *
     * @return self
     */
    public function setBody($body)
    {
        if ((mb_strlen($body) > 1600)) {
            throw new \InvalidArgumentException('invalid length for $body when calling Message., must be smaller than or equal to 1600.');
        }

        $this->container['body'] = $body;

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
     * Gets subject
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string|null $subject subject
     *
     * @return self
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Set to sms for SMS messages and mms for MMS messages.
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets number_of_units
     *
     * @return int|null
     */
    public function getNumberOfUnits()
    {
        return $this->container['number_of_units'];
    }

    /**
     * Sets number_of_units
     *
     * @param int|null $number_of_units The number of units that make up the complete message. Messages can be split up due to the constraints of the message size.
     *
     * @return self
     */
    public function setNumberOfUnits($number_of_units)
    {
        $this->container['number_of_units'] = $number_of_units;

        return $this;
    }

    /**
     * Gets number_of_media_files
     *
     * @return int|null
     */
    public function getNumberOfMediaFiles()
    {
        return $this->container['number_of_media_files'];
    }

    /**
     * Sets number_of_media_files
     *
     * @param int|null $number_of_media_files The number of media files associated with the message.
     *
     * @return self
     */
    public function setNumberOfMediaFiles($number_of_media_files)
    {
        $this->container['number_of_media_files'] = $number_of_media_files;

        return $this;
    }

    /**
     * Gets direction
     *
     * @return string|null
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction
     *
     * @param string|null $direction The direction of the message.
     *
     * @return self
     */
    public function setDirection($direction)
    {
        $allowedValues = $this->getDirectionAllowableValues();
        if (!is_null($direction) && !in_array($direction, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'direction', must be one of '%s'",
                    $direction,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['direction'] = $direction;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Status of the delivery of the message.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets scheduled_at
     *
     * @return \DateTime|null
     */
    public function getScheduledAt()
    {
        return $this->container['scheduled_at'];
    }

    /**
     * Sets scheduled_at
     *
     * @param \DateTime|null $scheduled_at The scheduled date and time of the message.
     *
     * @return self
     */
    public function setScheduledAt($scheduled_at)
    {
        $this->container['scheduled_at'] = $scheduled_at;

        return $this;
    }

    /**
     * Gets sent_at
     *
     * @return \DateTime|null
     */
    public function getSentAt()
    {
        return $this->container['sent_at'];
    }

    /**
     * Sets sent_at
     *
     * @param \DateTime|null $sent_at The date and time that the message was sent
     *
     * @return self
     */
    public function setSentAt($sent_at)
    {
        $this->container['sent_at'] = $sent_at;

        return $this;
    }

    /**
     * Gets webhook_url
     *
     * @return string|null
     */
    public function getWebhookUrl()
    {
        return $this->container['webhook_url'];
    }

    /**
     * Sets webhook_url
     *
     * @param string|null $webhook_url Define a webhook to receive delivery notifications.
     *
     * @return self
     */
    public function setWebhookUrl($webhook_url)
    {
        $this->container['webhook_url'] = $webhook_url;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference A client reference.
     *
     * @return self
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets price
     *
     * @return \Apideck\Client\Model\Price|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \Apideck\Client\Model\Price|null $price price
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets error
     *
     * @return \Apideck\Client\Model\Error|null
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param \Apideck\Client\Model\Error|null $error error
     *
     * @return self
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets messaging_service_id
     *
     * @return string|null
     */
    public function getMessagingServiceId()
    {
        return $this->container['messaging_service_id'];
    }

    /**
     * Sets messaging_service_id
     *
     * @param string|null $messaging_service_id The ID of the Messaging Service used with the message. In case of Plivo this links to the Powerpack ID.
     *
     * @return self
     */
    public function setMessagingServiceId($messaging_service_id)
    {
        $this->container['messaging_service_id'] = $messaging_service_id;

        return $this;
    }

    /**
     * Gets updated_by
     *
     * @return string|null
     */
    public function getUpdatedBy()
    {
        return $this->container['updated_by'];
    }

    /**
     * Sets updated_by
     *
     * @param string|null $updated_by updated_by
     *
     * @return self
     */
    public function setUpdatedBy($updated_by)
    {
        $this->container['updated_by'] = $updated_by;

        return $this;
    }

    /**
     * Gets created_by
     *
     * @return string|null
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param string|null $created_by created_by
     *
     * @return self
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

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
     * @param \DateTime|null $updated_at updated_at
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
     * @param \DateTime|null $created_at created_at
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


