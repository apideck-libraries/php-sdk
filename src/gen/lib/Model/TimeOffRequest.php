<?php
/**
 * TimeOffRequest
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
 * The version of the OpenAPI document: 9.4.0
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
 * TimeOffRequest Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TimeOffRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TimeOffRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'employee_id' => 'string',
        'policy_id' => 'string',
        'status' => 'string',
        'description' => 'string',
        'start_date' => 'string',
        'end_date' => 'string',
        'request_date' => 'string',
        'request_type' => 'string',
        'approval_date' => 'string',
        'units' => 'string',
        'amount' => 'float',
        'notes' => '\Apideck\Client\Model\TimeOffRequestNotes',
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
        'id' => null,
        'employee_id' => null,
        'policy_id' => null,
        'status' => null,
        'description' => null,
        'start_date' => null,
        'end_date' => null,
        'request_date' => null,
        'request_type' => null,
        'approval_date' => null,
        'units' => null,
        'amount' => null,
        'notes' => null,
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
        'id' => 'id',
        'employee_id' => 'employee_id',
        'policy_id' => 'policy_id',
        'status' => 'status',
        'description' => 'description',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'request_date' => 'request_date',
        'request_type' => 'request_type',
        'approval_date' => 'approval_date',
        'units' => 'units',
        'amount' => 'amount',
        'notes' => 'notes',
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
        'id' => 'setId',
        'employee_id' => 'setEmployeeId',
        'policy_id' => 'setPolicyId',
        'status' => 'setStatus',
        'description' => 'setDescription',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'request_date' => 'setRequestDate',
        'request_type' => 'setRequestType',
        'approval_date' => 'setApprovalDate',
        'units' => 'setUnits',
        'amount' => 'setAmount',
        'notes' => 'setNotes',
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
        'id' => 'getId',
        'employee_id' => 'getEmployeeId',
        'policy_id' => 'getPolicyId',
        'status' => 'getStatus',
        'description' => 'getDescription',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'request_date' => 'getRequestDate',
        'request_type' => 'getRequestType',
        'approval_date' => 'getApprovalDate',
        'units' => 'getUnits',
        'amount' => 'getAmount',
        'notes' => 'getNotes',
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

    const STATUS_REQUESTED = 'requested';
    const STATUS_APPROVED = 'approved';
    const STATUS_DECLINED = 'declined';
    const STATUS_CANCELLED = 'cancelled';
    const STATUS_DELETED = 'deleted';
    const STATUS_OTHER = 'other';
    const REQUEST_TYPE_VACATION = 'vacation';
    const REQUEST_TYPE_SICK = 'sick';
    const REQUEST_TYPE_PERSONAL = 'personal';
    const REQUEST_TYPE_JURY_DUTY = 'jury_duty';
    const REQUEST_TYPE_VOLUNTEER = 'volunteer';
    const REQUEST_TYPE_BEREAVEMENT = 'bereavement';
    const REQUEST_TYPE_OTHER = 'other';
    const UNITS_DAYS = 'days';
    const UNITS_HOURS = 'hours';
    const UNITS_OTHER = 'other';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_REQUESTED,
            self::STATUS_APPROVED,
            self::STATUS_DECLINED,
            self::STATUS_CANCELLED,
            self::STATUS_DELETED,
            self::STATUS_OTHER,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRequestTypeAllowableValues()
    {
        return [
            self::REQUEST_TYPE_VACATION,
            self::REQUEST_TYPE_SICK,
            self::REQUEST_TYPE_PERSONAL,
            self::REQUEST_TYPE_JURY_DUTY,
            self::REQUEST_TYPE_VOLUNTEER,
            self::REQUEST_TYPE_BEREAVEMENT,
            self::REQUEST_TYPE_OTHER,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUnitsAllowableValues()
    {
        return [
            self::UNITS_DAYS,
            self::UNITS_HOURS,
            self::UNITS_OTHER,
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['employee_id'] = $data['employee_id'] ?? null;
        $this->container['policy_id'] = $data['policy_id'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['start_date'] = $data['start_date'] ?? null;
        $this->container['end_date'] = $data['end_date'] ?? null;
        $this->container['request_date'] = $data['request_date'] ?? null;
        $this->container['request_type'] = $data['request_type'] ?? null;
        $this->container['approval_date'] = $data['approval_date'] ?? null;
        $this->container['units'] = $data['units'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['notes'] = $data['notes'] ?? null;
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

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['start_date']) && !preg_match("/^\\d{4}-\\d{2}-\\d{2}$/", $this->container['start_date'])) {
            $invalidProperties[] = "invalid value for 'start_date', must be conform to the pattern /^\\d{4}-\\d{2}-\\d{2}$/.";
        }

        if (!is_null($this->container['end_date']) && !preg_match("/^\\d{4}-\\d{2}-\\d{2}$/", $this->container['end_date'])) {
            $invalidProperties[] = "invalid value for 'end_date', must be conform to the pattern /^\\d{4}-\\d{2}-\\d{2}$/.";
        }

        if (!is_null($this->container['request_date']) && !preg_match("/^\\d{4}-\\d{2}-\\d{2}$/", $this->container['request_date'])) {
            $invalidProperties[] = "invalid value for 'request_date', must be conform to the pattern /^\\d{4}-\\d{2}-\\d{2}$/.";
        }

        $allowedValues = $this->getRequestTypeAllowableValues();
        if (!is_null($this->container['request_type']) && !in_array($this->container['request_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'request_type', must be one of '%s'",
                $this->container['request_type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['approval_date']) && !preg_match("/^\\d{4}-\\d{2}-\\d{2}$/", $this->container['approval_date'])) {
            $invalidProperties[] = "invalid value for 'approval_date', must be conform to the pattern /^\\d{4}-\\d{2}-\\d{2}$/.";
        }

        $allowedValues = $this->getUnitsAllowableValues();
        if (!is_null($this->container['units']) && !in_array($this->container['units'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'units', must be one of '%s'",
                $this->container['units'],
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
     * @param string|null $id A unique identifier for an object.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets employee_id
     *
     * @return string|null
     */
    public function getEmployeeId()
    {
        return $this->container['employee_id'];
    }

    /**
     * Sets employee_id
     *
     * @param string|null $employee_id ID of the employee
     *
     * @return self
     */
    public function setEmployeeId($employee_id)
    {
        $this->container['employee_id'] = $employee_id;

        return $this;
    }

    /**
     * Gets policy_id
     *
     * @return string|null
     */
    public function getPolicyId()
    {
        return $this->container['policy_id'];
    }

    /**
     * Sets policy_id
     *
     * @param string|null $policy_id ID of the policy
     *
     * @return self
     */
    public function setPolicyId($policy_id)
    {
        $this->container['policy_id'] = $policy_id;

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
     * @param string|null $status The status of the time off request.
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
     * @param string|null $description Description of the time off request.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param string|null $start_date The start date of the time off request.
     *
     * @return self
     */
    public function setStartDate($start_date)
    {

        if (!is_null($start_date) && (!preg_match("/^\\d{4}-\\d{2}-\\d{2}$/", $start_date))) {
            throw new \InvalidArgumentException("invalid value for $start_date when calling TimeOffRequest., must conform to the pattern /^\\d{4}-\\d{2}-\\d{2}$/.");
        }

        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param string|null $end_date The end date of the time off request.
     *
     * @return self
     */
    public function setEndDate($end_date)
    {

        if (!is_null($end_date) && (!preg_match("/^\\d{4}-\\d{2}-\\d{2}$/", $end_date))) {
            throw new \InvalidArgumentException("invalid value for $end_date when calling TimeOffRequest., must conform to the pattern /^\\d{4}-\\d{2}-\\d{2}$/.");
        }

        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets request_date
     *
     * @return string|null
     */
    public function getRequestDate()
    {
        return $this->container['request_date'];
    }

    /**
     * Sets request_date
     *
     * @param string|null $request_date The date the request was made.
     *
     * @return self
     */
    public function setRequestDate($request_date)
    {

        if (!is_null($request_date) && (!preg_match("/^\\d{4}-\\d{2}-\\d{2}$/", $request_date))) {
            throw new \InvalidArgumentException("invalid value for $request_date when calling TimeOffRequest., must conform to the pattern /^\\d{4}-\\d{2}-\\d{2}$/.");
        }

        $this->container['request_date'] = $request_date;

        return $this;
    }

    /**
     * Gets request_type
     *
     * @return string|null
     */
    public function getRequestType()
    {
        return $this->container['request_type'];
    }

    /**
     * Sets request_type
     *
     * @param string|null $request_type The type of request
     *
     * @return self
     */
    public function setRequestType($request_type)
    {
        $allowedValues = $this->getRequestTypeAllowableValues();
        if (!is_null($request_type) && !in_array($request_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'request_type', must be one of '%s'",
                    $request_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['request_type'] = $request_type;

        return $this;
    }

    /**
     * Gets approval_date
     *
     * @return string|null
     */
    public function getApprovalDate()
    {
        return $this->container['approval_date'];
    }

    /**
     * Sets approval_date
     *
     * @param string|null $approval_date The date the request was approved
     *
     * @return self
     */
    public function setApprovalDate($approval_date)
    {

        if (!is_null($approval_date) && (!preg_match("/^\\d{4}-\\d{2}-\\d{2}$/", $approval_date))) {
            throw new \InvalidArgumentException("invalid value for $approval_date when calling TimeOffRequest., must conform to the pattern /^\\d{4}-\\d{2}-\\d{2}$/.");
        }

        $this->container['approval_date'] = $approval_date;

        return $this;
    }

    /**
     * Gets units
     *
     * @return string|null
     */
    public function getUnits()
    {
        return $this->container['units'];
    }

    /**
     * Sets units
     *
     * @param string|null $units The unit of time off requested. Possible values include: `hours`, `days`, or `other`.
     *
     * @return self
     */
    public function setUnits($units)
    {
        $allowedValues = $this->getUnitsAllowableValues();
        if (!is_null($units) && !in_array($units, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'units', must be one of '%s'",
                    $units,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['units'] = $units;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount The amount of time off requested.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return \Apideck\Client\Model\TimeOffRequestNotes|null
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param \Apideck\Client\Model\TimeOffRequestNotes|null $notes notes
     *
     * @return self
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

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
     * @param string|null $updated_by The user who last updated the object.
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
     * @param string|null $created_by The user who created the object.
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


