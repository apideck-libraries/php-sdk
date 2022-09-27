<?php
/**
 * EmployeeCompensations
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
 * EmployeeCompensations Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EmployeeCompensations implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Employee_compensations';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'job_id' => 'string',
        'rate' => 'float',
        'payment_unit' => '\Apideck\Client\Model\PaymentUnit',
        'currency' => '\Apideck\Client\Model\Currency',
        'flsa_status' => 'string',
        'effective_date' => 'string'
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
        'job_id' => null,
        'rate' => null,
        'payment_unit' => null,
        'currency' => null,
        'flsa_status' => null,
        'effective_date' => null
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
        'job_id' => 'job_id',
        'rate' => 'rate',
        'payment_unit' => 'payment_unit',
        'currency' => 'currency',
        'flsa_status' => 'flsa_status',
        'effective_date' => 'effective_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'job_id' => 'setJobId',
        'rate' => 'setRate',
        'payment_unit' => 'setPaymentUnit',
        'currency' => 'setCurrency',
        'flsa_status' => 'setFlsaStatus',
        'effective_date' => 'setEffectiveDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'job_id' => 'getJobId',
        'rate' => 'getRate',
        'payment_unit' => 'getPaymentUnit',
        'currency' => 'getCurrency',
        'flsa_status' => 'getFlsaStatus',
        'effective_date' => 'getEffectiveDate'
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

    const FLSA_STATUS_EXEMPT = 'exempt';
    const FLSA_STATUS_SALARIED_NONEXEMPT = 'salaried-nonexempt';
    const FLSA_STATUS_NONEXEMPT = 'nonexempt';
    const FLSA_STATUS_OWNER = 'owner';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFlsaStatusAllowableValues()
    {
        return [
            self::FLSA_STATUS_EXEMPT,
            self::FLSA_STATUS_SALARIED_NONEXEMPT,
            self::FLSA_STATUS_NONEXEMPT,
            self::FLSA_STATUS_OWNER,
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
        $this->container['job_id'] = $data['job_id'] ?? null;
        $this->container['rate'] = $data['rate'] ?? null;
        $this->container['payment_unit'] = $data['payment_unit'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['flsa_status'] = $data['flsa_status'] ?? null;
        $this->container['effective_date'] = $data['effective_date'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getFlsaStatusAllowableValues();
        if (!is_null($this->container['flsa_status']) && !in_array($this->container['flsa_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'flsa_status', must be one of '%s'",
                $this->container['flsa_status'],
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
     * Gets job_id
     *
     * @return string|null
     */
    public function getJobId()
    {
        return $this->container['job_id'];
    }

    /**
     * Sets job_id
     *
     * @param string|null $job_id The ID of the job to which the compensation belongs.
     *
     * @return self
     */
    public function setJobId($job_id)
    {
        $this->container['job_id'] = $job_id;

        return $this;
    }

    /**
     * Gets rate
     *
     * @return float|null
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param float|null $rate The amount paid per payment unit.
     *
     * @return self
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets payment_unit
     *
     * @return \Apideck\Client\Model\PaymentUnit|null
     */
    public function getPaymentUnit()
    {
        return $this->container['payment_unit'];
    }

    /**
     * Sets payment_unit
     *
     * @param \Apideck\Client\Model\PaymentUnit|null $payment_unit payment_unit
     *
     * @return self
     */
    public function setPaymentUnit($payment_unit)
    {
        $this->container['payment_unit'] = $payment_unit;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \Apideck\Client\Model\Currency|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \Apideck\Client\Model\Currency|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets flsa_status
     *
     * @return string|null
     */
    public function getFlsaStatus()
    {
        return $this->container['flsa_status'];
    }

    /**
     * Sets flsa_status
     *
     * @param string|null $flsa_status The FLSA status for this compensation.
     *
     * @return self
     */
    public function setFlsaStatus($flsa_status)
    {
        $allowedValues = $this->getFlsaStatusAllowableValues();
        if (!is_null($flsa_status) && !in_array($flsa_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'flsa_status', must be one of '%s'",
                    $flsa_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['flsa_status'] = $flsa_status;

        return $this;
    }

    /**
     * Gets effective_date
     *
     * @return string|null
     */
    public function getEffectiveDate()
    {
        return $this->container['effective_date'];
    }

    /**
     * Sets effective_date
     *
     * @param string|null $effective_date The effective date for this compensation.
     *
     * @return self
     */
    public function setEffectiveDate($effective_date)
    {
        $this->container['effective_date'] = $effective_date;

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


