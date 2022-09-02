<?php
/**
 * Payroll
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
 * The version of the OpenAPI document: 8.46.0
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
 * Payroll Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Payroll implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Payroll';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'processed' => 'bool',
        'check_date' => 'string',
        'start_date' => 'string',
        'end_date' => 'string',
        'company_id' => 'string',
        'processed_date' => 'string',
        'totals' => '\Apideck\Client\Model\PayrollTotals',
        'compensations' => '\Apideck\Client\Model\Compensation[]'
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
        'processed' => null,
        'check_date' => null,
        'start_date' => null,
        'end_date' => null,
        'company_id' => null,
        'processed_date' => null,
        'totals' => null,
        'compensations' => null
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
        'processed' => 'processed',
        'check_date' => 'check_date',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'company_id' => 'company_id',
        'processed_date' => 'processed_date',
        'totals' => 'totals',
        'compensations' => 'compensations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'processed' => 'setProcessed',
        'check_date' => 'setCheckDate',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'company_id' => 'setCompanyId',
        'processed_date' => 'setProcessedDate',
        'totals' => 'setTotals',
        'compensations' => 'setCompensations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'processed' => 'getProcessed',
        'check_date' => 'getCheckDate',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'company_id' => 'getCompanyId',
        'processed_date' => 'getProcessedDate',
        'totals' => 'getTotals',
        'compensations' => 'getCompensations'
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
        $this->container['processed'] = $data['processed'] ?? null;
        $this->container['check_date'] = $data['check_date'] ?? null;
        $this->container['start_date'] = $data['start_date'] ?? null;
        $this->container['end_date'] = $data['end_date'] ?? null;
        $this->container['company_id'] = $data['company_id'] ?? null;
        $this->container['processed_date'] = $data['processed_date'] ?? null;
        $this->container['totals'] = $data['totals'] ?? null;
        $this->container['compensations'] = $data['compensations'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['processed'] === null) {
            $invalidProperties[] = "'processed' can't be null";
        }
        if ($this->container['check_date'] === null) {
            $invalidProperties[] = "'check_date' can't be null";
        }
        if (!preg_match("/^\\d{4}-\\d{2}-\\d{2}$/", $this->container['check_date'])) {
            $invalidProperties[] = "invalid value for 'check_date', must be conform to the pattern /^\\d{4}-\\d{2}-\\d{2}$/.";
        }

        if ($this->container['start_date'] === null) {
            $invalidProperties[] = "'start_date' can't be null";
        }
        if (!preg_match("/^\\d{4}-\\d{2}-\\d{2}$/", $this->container['start_date'])) {
            $invalidProperties[] = "invalid value for 'start_date', must be conform to the pattern /^\\d{4}-\\d{2}-\\d{2}$/.";
        }

        if ($this->container['end_date'] === null) {
            $invalidProperties[] = "'end_date' can't be null";
        }
        if (!preg_match("/^\\d{4}-\\d{2}-\\d{2}$/", $this->container['end_date'])) {
            $invalidProperties[] = "invalid value for 'end_date', must be conform to the pattern /^\\d{4}-\\d{2}-\\d{2}$/.";
        }

        if (!is_null($this->container['processed_date']) && !preg_match("/^\\d{4}-\\d{2}-\\d{2}$/", $this->container['processed_date'])) {
            $invalidProperties[] = "invalid value for 'processed_date', must be conform to the pattern /^\\d{4}-\\d{2}-\\d{2}$/.";
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets processed
     *
     * @return bool
     */
    public function getProcessed()
    {
        return $this->container['processed'];
    }

    /**
     * Sets processed
     *
     * @param bool $processed Whether or not the payroll has been successfully processed. Note that processed payrolls cannot be updated.
     *
     * @return self
     */
    public function setProcessed($processed)
    {
        $this->container['processed'] = $processed;

        return $this;
    }

    /**
     * Gets check_date
     *
     * @return string
     */
    public function getCheckDate()
    {
        return $this->container['check_date'];
    }

    /**
     * Sets check_date
     *
     * @param string $check_date The date on which employees will be paid for the payroll.
     *
     * @return self
     */
    public function setCheckDate($check_date)
    {

        if ((!preg_match("/^\\d{4}-\\d{2}-\\d{2}$/", $check_date))) {
            throw new \InvalidArgumentException("invalid value for $check_date when calling Payroll., must conform to the pattern /^\\d{4}-\\d{2}-\\d{2}$/.");
        }

        $this->container['check_date'] = $check_date;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param string $start_date The start date, inclusive, of the pay period.
     *
     * @return self
     */
    public function setStartDate($start_date)
    {

        if ((!preg_match("/^\\d{4}-\\d{2}-\\d{2}$/", $start_date))) {
            throw new \InvalidArgumentException("invalid value for $start_date when calling Payroll., must conform to the pattern /^\\d{4}-\\d{2}-\\d{2}$/.");
        }

        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param string $end_date The end date, inclusive, of the pay period.
     *
     * @return self
     */
    public function setEndDate($end_date)
    {

        if ((!preg_match("/^\\d{4}-\\d{2}-\\d{2}$/", $end_date))) {
            throw new \InvalidArgumentException("invalid value for $end_date when calling Payroll., must conform to the pattern /^\\d{4}-\\d{2}-\\d{2}$/.");
        }

        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets company_id
     *
     * @return string|null
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param string|null $company_id company_id
     *
     * @return self
     */
    public function setCompanyId($company_id)
    {
        $this->container['company_id'] = $company_id;

        return $this;
    }

    /**
     * Gets processed_date
     *
     * @return string|null
     */
    public function getProcessedDate()
    {
        return $this->container['processed_date'];
    }

    /**
     * Sets processed_date
     *
     * @param string|null $processed_date The date the payroll was processed.
     *
     * @return self
     */
    public function setProcessedDate($processed_date)
    {

        if (!is_null($processed_date) && (!preg_match("/^\\d{4}-\\d{2}-\\d{2}$/", $processed_date))) {
            throw new \InvalidArgumentException("invalid value for $processed_date when calling Payroll., must conform to the pattern /^\\d{4}-\\d{2}-\\d{2}$/.");
        }

        $this->container['processed_date'] = $processed_date;

        return $this;
    }

    /**
     * Gets totals
     *
     * @return \Apideck\Client\Model\PayrollTotals|null
     */
    public function getTotals()
    {
        return $this->container['totals'];
    }

    /**
     * Sets totals
     *
     * @param \Apideck\Client\Model\PayrollTotals|null $totals totals
     *
     * @return self
     */
    public function setTotals($totals)
    {
        $this->container['totals'] = $totals;

        return $this;
    }

    /**
     * Gets compensations
     *
     * @return \Apideck\Client\Model\Compensation[]|null
     */
    public function getCompensations()
    {
        return $this->container['compensations'];
    }

    /**
     * Sets compensations
     *
     * @param \Apideck\Client\Model\Compensation[]|null $compensations An array of compensations for the payroll.
     *
     * @return self
     */
    public function setCompensations($compensations)
    {
        $this->container['compensations'] = $compensations;

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


