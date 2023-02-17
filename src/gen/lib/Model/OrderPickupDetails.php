<?php
/**
 * OrderPickupDetails
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
 * The version of the OpenAPI document: 8.91.0
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
 * OrderPickupDetails Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OrderPickupDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Order_pickup_details';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accepted_at' => '\DateTime',
        'auto_complete_duration' => 'string',
        'cancel_reason' => 'string',
        'expires_at' => '\DateTime',
        'schedule_type' => 'string',
        'pickup_at' => '\DateTime',
        'pickup_window_duration' => 'string',
        'prep_time_duration' => 'string',
        'note' => 'string',
        'placed_at' => '\DateTime',
        'rejected_at' => '\DateTime',
        'ready_at' => '\DateTime',
        'expired_at' => '\DateTime',
        'picked_up_at' => '\DateTime',
        'canceled_at' => '\DateTime',
        'is_curbside_pickup' => 'bool',
        'curbside_pickup_details' => '\Apideck\Client\Model\OrderPickupDetailsCurbsidePickupDetails',
        'recipient' => '\Apideck\Client\Model\OrderPickupDetailsRecipient'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'accepted_at' => 'date-time',
        'auto_complete_duration' => null,
        'cancel_reason' => null,
        'expires_at' => 'date-time',
        'schedule_type' => null,
        'pickup_at' => 'date-time',
        'pickup_window_duration' => null,
        'prep_time_duration' => null,
        'note' => null,
        'placed_at' => 'date-time',
        'rejected_at' => 'date-time',
        'ready_at' => 'date-time',
        'expired_at' => 'date-time',
        'picked_up_at' => 'date-time',
        'canceled_at' => 'date-time',
        'is_curbside_pickup' => null,
        'curbside_pickup_details' => null,
        'recipient' => null
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
        'accepted_at' => 'accepted_at',
        'auto_complete_duration' => 'auto_complete_duration',
        'cancel_reason' => 'cancel_reason',
        'expires_at' => 'expires_at',
        'schedule_type' => 'schedule_type',
        'pickup_at' => 'pickup_at',
        'pickup_window_duration' => 'pickup_window_duration',
        'prep_time_duration' => 'prep_time_duration',
        'note' => 'note',
        'placed_at' => 'placed_at',
        'rejected_at' => 'rejected_at',
        'ready_at' => 'ready_at',
        'expired_at' => 'expired_at',
        'picked_up_at' => 'picked_up_at',
        'canceled_at' => 'canceled_at',
        'is_curbside_pickup' => 'is_curbside_pickup',
        'curbside_pickup_details' => 'curbside_pickup_details',
        'recipient' => 'recipient'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accepted_at' => 'setAcceptedAt',
        'auto_complete_duration' => 'setAutoCompleteDuration',
        'cancel_reason' => 'setCancelReason',
        'expires_at' => 'setExpiresAt',
        'schedule_type' => 'setScheduleType',
        'pickup_at' => 'setPickupAt',
        'pickup_window_duration' => 'setPickupWindowDuration',
        'prep_time_duration' => 'setPrepTimeDuration',
        'note' => 'setNote',
        'placed_at' => 'setPlacedAt',
        'rejected_at' => 'setRejectedAt',
        'ready_at' => 'setReadyAt',
        'expired_at' => 'setExpiredAt',
        'picked_up_at' => 'setPickedUpAt',
        'canceled_at' => 'setCanceledAt',
        'is_curbside_pickup' => 'setIsCurbsidePickup',
        'curbside_pickup_details' => 'setCurbsidePickupDetails',
        'recipient' => 'setRecipient'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accepted_at' => 'getAcceptedAt',
        'auto_complete_duration' => 'getAutoCompleteDuration',
        'cancel_reason' => 'getCancelReason',
        'expires_at' => 'getExpiresAt',
        'schedule_type' => 'getScheduleType',
        'pickup_at' => 'getPickupAt',
        'pickup_window_duration' => 'getPickupWindowDuration',
        'prep_time_duration' => 'getPrepTimeDuration',
        'note' => 'getNote',
        'placed_at' => 'getPlacedAt',
        'rejected_at' => 'getRejectedAt',
        'ready_at' => 'getReadyAt',
        'expired_at' => 'getExpiredAt',
        'picked_up_at' => 'getPickedUpAt',
        'canceled_at' => 'getCanceledAt',
        'is_curbside_pickup' => 'getIsCurbsidePickup',
        'curbside_pickup_details' => 'getCurbsidePickupDetails',
        'recipient' => 'getRecipient'
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

    const SCHEDULE_TYPE_SCHEDULED = 'scheduled';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getScheduleTypeAllowableValues()
    {
        return [
            self::SCHEDULE_TYPE_SCHEDULED,
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
        $this->container['accepted_at'] = $data['accepted_at'] ?? null;
        $this->container['auto_complete_duration'] = $data['auto_complete_duration'] ?? null;
        $this->container['cancel_reason'] = $data['cancel_reason'] ?? null;
        $this->container['expires_at'] = $data['expires_at'] ?? null;
        $this->container['schedule_type'] = $data['schedule_type'] ?? null;
        $this->container['pickup_at'] = $data['pickup_at'] ?? null;
        $this->container['pickup_window_duration'] = $data['pickup_window_duration'] ?? null;
        $this->container['prep_time_duration'] = $data['prep_time_duration'] ?? null;
        $this->container['note'] = $data['note'] ?? null;
        $this->container['placed_at'] = $data['placed_at'] ?? null;
        $this->container['rejected_at'] = $data['rejected_at'] ?? null;
        $this->container['ready_at'] = $data['ready_at'] ?? null;
        $this->container['expired_at'] = $data['expired_at'] ?? null;
        $this->container['picked_up_at'] = $data['picked_up_at'] ?? null;
        $this->container['canceled_at'] = $data['canceled_at'] ?? null;
        $this->container['is_curbside_pickup'] = $data['is_curbside_pickup'] ?? null;
        $this->container['curbside_pickup_details'] = $data['curbside_pickup_details'] ?? null;
        $this->container['recipient'] = $data['recipient'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getScheduleTypeAllowableValues();
        if (!is_null($this->container['schedule_type']) && !in_array($this->container['schedule_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'schedule_type', must be one of '%s'",
                $this->container['schedule_type'],
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
     * Gets accepted_at
     *
     * @return \DateTime|null
     */
    public function getAcceptedAt()
    {
        return $this->container['accepted_at'];
    }

    /**
     * Sets accepted_at
     *
     * @param \DateTime|null $accepted_at accepted_at
     *
     * @return self
     */
    public function setAcceptedAt($accepted_at)
    {
        $this->container['accepted_at'] = $accepted_at;

        return $this;
    }

    /**
     * Gets auto_complete_duration
     *
     * @return string|null
     */
    public function getAutoCompleteDuration()
    {
        return $this->container['auto_complete_duration'];
    }

    /**
     * Sets auto_complete_duration
     *
     * @param string|null $auto_complete_duration The duration of time after which an open and accepted pickup fulfillment is automatically moved to the COMPLETED state. The duration must be in RFC 3339 format (for example, 'P1W3D').
     *
     * @return self
     */
    public function setAutoCompleteDuration($auto_complete_duration)
    {
        $this->container['auto_complete_duration'] = $auto_complete_duration;

        return $this;
    }

    /**
     * Gets cancel_reason
     *
     * @return string|null
     */
    public function getCancelReason()
    {
        return $this->container['cancel_reason'];
    }

    /**
     * Sets cancel_reason
     *
     * @param string|null $cancel_reason A description of why the pickup was canceled.
     *
     * @return self
     */
    public function setCancelReason($cancel_reason)
    {
        $this->container['cancel_reason'] = $cancel_reason;

        return $this;
    }

    /**
     * Gets expires_at
     *
     * @return \DateTime|null
     */
    public function getExpiresAt()
    {
        return $this->container['expires_at'];
    }

    /**
     * Sets expires_at
     *
     * @param \DateTime|null $expires_at Indicating when this fulfillment expires if it is not accepted. The timestamp must be in RFC 3339 format (for example, \"2016-09-04T23:59:33.123Z\"). The expiration time can only be set up to 7 days in the future. If `expires_at` is not set, this pickup fulfillment is automatically accepted when  placed.
     *
     * @return self
     */
    public function setExpiresAt($expires_at)
    {
        $this->container['expires_at'] = $expires_at;

        return $this;
    }

    /**
     * Gets schedule_type
     *
     * @return string|null
     */
    public function getScheduleType()
    {
        return $this->container['schedule_type'];
    }

    /**
     * Sets schedule_type
     *
     * @param string|null $schedule_type The schedule type of the pickup fulfillment.
     *
     * @return self
     */
    public function setScheduleType($schedule_type)
    {
        $allowedValues = $this->getScheduleTypeAllowableValues();
        if (!is_null($schedule_type) && !in_array($schedule_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'schedule_type', must be one of '%s'",
                    $schedule_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['schedule_type'] = $schedule_type;

        return $this;
    }

    /**
     * Gets pickup_at
     *
     * @return \DateTime|null
     */
    public function getPickupAt()
    {
        return $this->container['pickup_at'];
    }

    /**
     * Sets pickup_at
     *
     * @param \DateTime|null $pickup_at The timestamp that represents the start of the pickup window. Must be in RFC 3339 timestamp format, e.g.,  \"2016-09-04T23:59:33.123Z\".  For fulfillments with the schedule type `ASAP`, this is automatically set to the current time plus the expected duration to prepare the fulfillment.
     *
     * @return self
     */
    public function setPickupAt($pickup_at)
    {
        $this->container['pickup_at'] = $pickup_at;

        return $this;
    }

    /**
     * Gets pickup_window_duration
     *
     * @return string|null
     */
    public function getPickupWindowDuration()
    {
        return $this->container['pickup_window_duration'];
    }

    /**
     * Sets pickup_window_duration
     *
     * @param string|null $pickup_window_duration The window of time in which the order should be picked up after the `pickup_at` timestamp. Must be in RFC 3339 duration format, e.g., \"P1W3D\". Can be used as an informational guideline for merchants.
     *
     * @return self
     */
    public function setPickupWindowDuration($pickup_window_duration)
    {
        $this->container['pickup_window_duration'] = $pickup_window_duration;

        return $this;
    }

    /**
     * Gets prep_time_duration
     *
     * @return string|null
     */
    public function getPrepTimeDuration()
    {
        return $this->container['prep_time_duration'];
    }

    /**
     * Sets prep_time_duration
     *
     * @param string|null $prep_time_duration The duration of time it takes to prepare this fulfillment. The duration must be in RFC 3339 format (for example, \"P1W3D\").
     *
     * @return self
     */
    public function setPrepTimeDuration($prep_time_duration)
    {
        $this->container['prep_time_duration'] = $prep_time_duration;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string|null $note A note meant to provide additional instructions about the pickup fulfillment displayed in the Square Point of Sale application and set by the API.
     *
     * @return self
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets placed_at
     *
     * @return \DateTime|null
     */
    public function getPlacedAt()
    {
        return $this->container['placed_at'];
    }

    /**
     * Sets placed_at
     *
     * @param \DateTime|null $placed_at Indicating when the fulfillment was placed. The timestamp must be in RFC 3339 format (for example, \"2016-09-04T23:59:33.123Z\").
     *
     * @return self
     */
    public function setPlacedAt($placed_at)
    {
        $this->container['placed_at'] = $placed_at;

        return $this;
    }

    /**
     * Gets rejected_at
     *
     * @return \DateTime|null
     */
    public function getRejectedAt()
    {
        return $this->container['rejected_at'];
    }

    /**
     * Sets rejected_at
     *
     * @param \DateTime|null $rejected_at Indicating when the fulfillment was rejected. The timestamp must be in RFC 3339 format (for example, \"2016-09-04T23:59:33.123Z\").
     *
     * @return self
     */
    public function setRejectedAt($rejected_at)
    {
        $this->container['rejected_at'] = $rejected_at;

        return $this;
    }

    /**
     * Gets ready_at
     *
     * @return \DateTime|null
     */
    public function getReadyAt()
    {
        return $this->container['ready_at'];
    }

    /**
     * Sets ready_at
     *
     * @param \DateTime|null $ready_at Indicating when the fulfillment is marked as ready for pickup. The timestamp must be in RFC 3339 format (for example, \"2016-09-04T23:59:33.123Z\").
     *
     * @return self
     */
    public function setReadyAt($ready_at)
    {
        $this->container['ready_at'] = $ready_at;

        return $this;
    }

    /**
     * Gets expired_at
     *
     * @return \DateTime|null
     */
    public function getExpiredAt()
    {
        return $this->container['expired_at'];
    }

    /**
     * Sets expired_at
     *
     * @param \DateTime|null $expired_at Indicating when the fulfillment expired. The timestamp must be in RFC 3339 format (for example, \"2016-09-04T23:59:33.123Z\").
     *
     * @return self
     */
    public function setExpiredAt($expired_at)
    {
        $this->container['expired_at'] = $expired_at;

        return $this;
    }

    /**
     * Gets picked_up_at
     *
     * @return \DateTime|null
     */
    public function getPickedUpAt()
    {
        return $this->container['picked_up_at'];
    }

    /**
     * Sets picked_up_at
     *
     * @param \DateTime|null $picked_up_at Indicating when the fulfillment was picked up by the recipient. The timestamp must be in RFC 3339 format (for example, \"2016-09-04T23:59:33.123Z\").
     *
     * @return self
     */
    public function setPickedUpAt($picked_up_at)
    {
        $this->container['picked_up_at'] = $picked_up_at;

        return $this;
    }

    /**
     * Gets canceled_at
     *
     * @return \DateTime|null
     */
    public function getCanceledAt()
    {
        return $this->container['canceled_at'];
    }

    /**
     * Sets canceled_at
     *
     * @param \DateTime|null $canceled_at Indicating when the fulfillment was canceled. The timestamp must be in RFC 3339 format (for example, \"2016-09-04T23:59:33.123Z\").
     *
     * @return self
     */
    public function setCanceledAt($canceled_at)
    {
        $this->container['canceled_at'] = $canceled_at;

        return $this;
    }

    /**
     * Gets is_curbside_pickup
     *
     * @return bool|null
     */
    public function getIsCurbsidePickup()
    {
        return $this->container['is_curbside_pickup'];
    }

    /**
     * Sets is_curbside_pickup
     *
     * @param bool|null $is_curbside_pickup If set to `true`, indicates that this pickup order is for curbside pickup, not in-store pickup.
     *
     * @return self
     */
    public function setIsCurbsidePickup($is_curbside_pickup)
    {
        $this->container['is_curbside_pickup'] = $is_curbside_pickup;

        return $this;
    }

    /**
     * Gets curbside_pickup_details
     *
     * @return \Apideck\Client\Model\OrderPickupDetailsCurbsidePickupDetails|null
     */
    public function getCurbsidePickupDetails()
    {
        return $this->container['curbside_pickup_details'];
    }

    /**
     * Sets curbside_pickup_details
     *
     * @param \Apideck\Client\Model\OrderPickupDetailsCurbsidePickupDetails|null $curbside_pickup_details curbside_pickup_details
     *
     * @return self
     */
    public function setCurbsidePickupDetails($curbside_pickup_details)
    {
        $this->container['curbside_pickup_details'] = $curbside_pickup_details;

        return $this;
    }

    /**
     * Gets recipient
     *
     * @return \Apideck\Client\Model\OrderPickupDetailsRecipient|null
     */
    public function getRecipient()
    {
        return $this->container['recipient'];
    }

    /**
     * Sets recipient
     *
     * @param \Apideck\Client\Model\OrderPickupDetailsRecipient|null $recipient recipient
     *
     * @return self
     */
    public function setRecipient($recipient)
    {
        $this->container['recipient'] = $recipient;

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


