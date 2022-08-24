<?php
/**
 * ProfitAndLoss
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
 * The version of the OpenAPI document: 8.41.1
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
 * ProfitAndLoss Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProfitAndLoss implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProfitAndLoss';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'report_name' => 'string',
        'currency' => 'string',
        'income' => '\Apideck\Client\Model\ProfitAndLossIncome',
        'expenses' => '\Apideck\Client\Model\ProfitAndLossExpenses',
        'id' => 'string',
        'start_date' => 'string',
        'end_date' => 'string',
        'customer_id' => 'string',
        'net_income' => '\Apideck\Client\Model\ProfitAndLossNetIncome',
        'net_operating_income' => '\Apideck\Client\Model\ProfitAndLossNetOperatingIncome',
        'gross_profit' => '\Apideck\Client\Model\ProfitAndLossGrossProfit'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'report_name' => null,
        'currency' => null,
        'income' => null,
        'expenses' => null,
        'id' => null,
        'start_date' => null,
        'end_date' => null,
        'customer_id' => null,
        'net_income' => null,
        'net_operating_income' => null,
        'gross_profit' => null
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
        'report_name' => 'report_name',
        'currency' => 'currency',
        'income' => 'income',
        'expenses' => 'expenses',
        'id' => 'id',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'customer_id' => 'customer_id',
        'net_income' => 'net_income',
        'net_operating_income' => 'net_operating_income',
        'gross_profit' => 'gross_profit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'report_name' => 'setReportName',
        'currency' => 'setCurrency',
        'income' => 'setIncome',
        'expenses' => 'setExpenses',
        'id' => 'setId',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'customer_id' => 'setCustomerId',
        'net_income' => 'setNetIncome',
        'net_operating_income' => 'setNetOperatingIncome',
        'gross_profit' => 'setGrossProfit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'report_name' => 'getReportName',
        'currency' => 'getCurrency',
        'income' => 'getIncome',
        'expenses' => 'getExpenses',
        'id' => 'getId',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'customer_id' => 'getCustomerId',
        'net_income' => 'getNetIncome',
        'net_operating_income' => 'getNetOperatingIncome',
        'gross_profit' => 'getGrossProfit'
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
        $this->container['report_name'] = $data['report_name'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['income'] = $data['income'] ?? null;
        $this->container['expenses'] = $data['expenses'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['start_date'] = $data['start_date'] ?? null;
        $this->container['end_date'] = $data['end_date'] ?? null;
        $this->container['customer_id'] = $data['customer_id'] ?? null;
        $this->container['net_income'] = $data['net_income'] ?? null;
        $this->container['net_operating_income'] = $data['net_operating_income'] ?? null;
        $this->container['gross_profit'] = $data['gross_profit'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['report_name'] === null) {
            $invalidProperties[] = "'report_name' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['income'] === null) {
            $invalidProperties[] = "'income' can't be null";
        }
        if ($this->container['expenses'] === null) {
            $invalidProperties[] = "'expenses' can't be null";
        }
        if (!is_null($this->container['start_date']) && !preg_match("/^\\d{4}-\\d{2}-\\d{2}$/", $this->container['start_date'])) {
            $invalidProperties[] = "invalid value for 'start_date', must be conform to the pattern /^\\d{4}-\\d{2}-\\d{2}$/.";
        }

        if (!is_null($this->container['end_date']) && !preg_match("/^\\d{4}-\\d{2}-\\d{2}$/", $this->container['end_date'])) {
            $invalidProperties[] = "invalid value for 'end_date', must be conform to the pattern /^\\d{4}-\\d{2}-\\d{2}$/.";
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
     * Gets report_name
     *
     * @return string
     */
    public function getReportName()
    {
        return $this->container['report_name'];
    }

    /**
     * Sets report_name
     *
     * @param string $report_name The name of the report
     *
     * @return self
     */
    public function setReportName($report_name)
    {
        $this->container['report_name'] = $report_name;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets income
     *
     * @return \Apideck\Client\Model\ProfitAndLossIncome
     */
    public function getIncome()
    {
        return $this->container['income'];
    }

    /**
     * Sets income
     *
     * @param \Apideck\Client\Model\ProfitAndLossIncome $income income
     *
     * @return self
     */
    public function setIncome($income)
    {
        $this->container['income'] = $income;

        return $this;
    }

    /**
     * Gets expenses
     *
     * @return \Apideck\Client\Model\ProfitAndLossExpenses
     */
    public function getExpenses()
    {
        return $this->container['expenses'];
    }

    /**
     * Sets expenses
     *
     * @param \Apideck\Client\Model\ProfitAndLossExpenses $expenses expenses
     *
     * @return self
     */
    public function setExpenses($expenses)
    {
        $this->container['expenses'] = $expenses;

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
     * @param string|null $start_date The start date of the report
     *
     * @return self
     */
    public function setStartDate($start_date)
    {

        if (!is_null($start_date) && (!preg_match("/^\\d{4}-\\d{2}-\\d{2}$/", $start_date))) {
            throw new \InvalidArgumentException("invalid value for $start_date when calling ProfitAndLoss., must conform to the pattern /^\\d{4}-\\d{2}-\\d{2}$/.");
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
     * @param string|null $end_date The start date of the report
     *
     * @return self
     */
    public function setEndDate($end_date)
    {

        if (!is_null($end_date) && (!preg_match("/^\\d{4}-\\d{2}-\\d{2}$/", $end_date))) {
            throw new \InvalidArgumentException("invalid value for $end_date when calling ProfitAndLoss., must conform to the pattern /^\\d{4}-\\d{2}-\\d{2}$/.");
        }

        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return string|null
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string|null $customer_id Customer id
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets net_income
     *
     * @return \Apideck\Client\Model\ProfitAndLossNetIncome|null
     */
    public function getNetIncome()
    {
        return $this->container['net_income'];
    }

    /**
     * Sets net_income
     *
     * @param \Apideck\Client\Model\ProfitAndLossNetIncome|null $net_income net_income
     *
     * @return self
     */
    public function setNetIncome($net_income)
    {
        $this->container['net_income'] = $net_income;

        return $this;
    }

    /**
     * Gets net_operating_income
     *
     * @return \Apideck\Client\Model\ProfitAndLossNetOperatingIncome|null
     */
    public function getNetOperatingIncome()
    {
        return $this->container['net_operating_income'];
    }

    /**
     * Sets net_operating_income
     *
     * @param \Apideck\Client\Model\ProfitAndLossNetOperatingIncome|null $net_operating_income net_operating_income
     *
     * @return self
     */
    public function setNetOperatingIncome($net_operating_income)
    {
        $this->container['net_operating_income'] = $net_operating_income;

        return $this;
    }

    /**
     * Gets gross_profit
     *
     * @return \Apideck\Client\Model\ProfitAndLossGrossProfit|null
     */
    public function getGrossProfit()
    {
        return $this->container['gross_profit'];
    }

    /**
     * Sets gross_profit
     *
     * @param \Apideck\Client\Model\ProfitAndLossGrossProfit|null $gross_profit gross_profit
     *
     * @return self
     */
    public function setGrossProfit($gross_profit)
    {
        $this->container['gross_profit'] = $gross_profit;

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


