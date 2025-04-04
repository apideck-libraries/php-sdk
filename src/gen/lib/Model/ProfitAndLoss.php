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
 * The version of the OpenAPI document: 10.14.1
 * Contact: support@apideck.com
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
        'currency' => '\Apideck\Client\Model\Currency',
        'income' => '\Apideck\Client\Model\Income',
        'expenses' => '\Apideck\Client\Model\Expenses',
        'id' => 'string',
        'start_date' => 'string',
        'end_date' => 'string',
        'cost_of_goods_sold' => '\Apideck\Client\Model\CostOfGoodsSold',
        'other_income' => '\Apideck\Client\Model\OtherIncome',
        'other_expenses' => '\Apideck\Client\Model\OtherExpenses',
        'uncategorized_accounts' => '\Apideck\Client\Model\UncategorizedAccounts',
        'gross_profit' => '\Apideck\Client\Model\ProfitAndLossIndicator',
        'net_operating_income' => '\Apideck\Client\Model\ProfitAndLossIndicator',
        'net_income' => '\Apideck\Client\Model\ProfitAndLossIndicator',
        'custom_mappings' => 'object',
        'customer' => 'string'
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
        'cost_of_goods_sold' => null,
        'other_income' => null,
        'other_expenses' => null,
        'uncategorized_accounts' => null,
        'gross_profit' => null,
        'net_operating_income' => null,
        'net_income' => null,
        'custom_mappings' => null,
        'customer' => null
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
        'cost_of_goods_sold' => 'cost_of_goods_sold',
        'other_income' => 'other_income',
        'other_expenses' => 'other_expenses',
        'uncategorized_accounts' => 'uncategorized_accounts',
        'gross_profit' => 'gross_profit',
        'net_operating_income' => 'net_operating_income',
        'net_income' => 'net_income',
        'custom_mappings' => 'custom_mappings',
        'customer' => 'customer'
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
        'cost_of_goods_sold' => 'setCostOfGoodsSold',
        'other_income' => 'setOtherIncome',
        'other_expenses' => 'setOtherExpenses',
        'uncategorized_accounts' => 'setUncategorizedAccounts',
        'gross_profit' => 'setGrossProfit',
        'net_operating_income' => 'setNetOperatingIncome',
        'net_income' => 'setNetIncome',
        'custom_mappings' => 'setCustomMappings',
        'customer' => 'setCustomer'
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
        'cost_of_goods_sold' => 'getCostOfGoodsSold',
        'other_income' => 'getOtherIncome',
        'other_expenses' => 'getOtherExpenses',
        'uncategorized_accounts' => 'getUncategorizedAccounts',
        'gross_profit' => 'getGrossProfit',
        'net_operating_income' => 'getNetOperatingIncome',
        'net_income' => 'getNetIncome',
        'custom_mappings' => 'getCustomMappings',
        'customer' => 'getCustomer'
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
        $this->container['cost_of_goods_sold'] = $data['cost_of_goods_sold'] ?? null;
        $this->container['other_income'] = $data['other_income'] ?? null;
        $this->container['other_expenses'] = $data['other_expenses'] ?? null;
        $this->container['uncategorized_accounts'] = $data['uncategorized_accounts'] ?? null;
        $this->container['gross_profit'] = $data['gross_profit'] ?? null;
        $this->container['net_operating_income'] = $data['net_operating_income'] ?? null;
        $this->container['net_income'] = $data['net_income'] ?? null;
        $this->container['custom_mappings'] = $data['custom_mappings'] ?? null;
        $this->container['customer'] = $data['customer'] ?? null;
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
     * @return \Apideck\Client\Model\Currency
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \Apideck\Client\Model\Currency $currency currency
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
     * @return \Apideck\Client\Model\Income
     */
    public function getIncome()
    {
        return $this->container['income'];
    }

    /**
     * Sets income
     *
     * @param \Apideck\Client\Model\Income $income income
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
     * @return \Apideck\Client\Model\Expenses
     */
    public function getExpenses()
    {
        return $this->container['expenses'];
    }

    /**
     * Sets expenses
     *
     * @param \Apideck\Client\Model\Expenses $expenses expenses
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
     * @param string|null $end_date The end date of the report
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
     * Gets cost_of_goods_sold
     *
     * @return \Apideck\Client\Model\CostOfGoodsSold|null
     */
    public function getCostOfGoodsSold()
    {
        return $this->container['cost_of_goods_sold'];
    }

    /**
     * Sets cost_of_goods_sold
     *
     * @param \Apideck\Client\Model\CostOfGoodsSold|null $cost_of_goods_sold cost_of_goods_sold
     *
     * @return self
     */
    public function setCostOfGoodsSold($cost_of_goods_sold)
    {
        $this->container['cost_of_goods_sold'] = $cost_of_goods_sold;

        return $this;
    }

    /**
     * Gets other_income
     *
     * @return \Apideck\Client\Model\OtherIncome|null
     */
    public function getOtherIncome()
    {
        return $this->container['other_income'];
    }

    /**
     * Sets other_income
     *
     * @param \Apideck\Client\Model\OtherIncome|null $other_income other_income
     *
     * @return self
     */
    public function setOtherIncome($other_income)
    {
        $this->container['other_income'] = $other_income;

        return $this;
    }

    /**
     * Gets other_expenses
     *
     * @return \Apideck\Client\Model\OtherExpenses|null
     */
    public function getOtherExpenses()
    {
        return $this->container['other_expenses'];
    }

    /**
     * Sets other_expenses
     *
     * @param \Apideck\Client\Model\OtherExpenses|null $other_expenses other_expenses
     *
     * @return self
     */
    public function setOtherExpenses($other_expenses)
    {
        $this->container['other_expenses'] = $other_expenses;

        return $this;
    }

    /**
     * Gets uncategorized_accounts
     *
     * @return \Apideck\Client\Model\UncategorizedAccounts|null
     */
    public function getUncategorizedAccounts()
    {
        return $this->container['uncategorized_accounts'];
    }

    /**
     * Sets uncategorized_accounts
     *
     * @param \Apideck\Client\Model\UncategorizedAccounts|null $uncategorized_accounts uncategorized_accounts
     *
     * @return self
     */
    public function setUncategorizedAccounts($uncategorized_accounts)
    {
        $this->container['uncategorized_accounts'] = $uncategorized_accounts;

        return $this;
    }

    /**
     * Gets gross_profit
     *
     * @return \Apideck\Client\Model\ProfitAndLossIndicator|null
     */
    public function getGrossProfit()
    {
        return $this->container['gross_profit'];
    }

    /**
     * Sets gross_profit
     *
     * @param \Apideck\Client\Model\ProfitAndLossIndicator|null $gross_profit gross_profit
     *
     * @return self
     */
    public function setGrossProfit($gross_profit)
    {
        $this->container['gross_profit'] = $gross_profit;

        return $this;
    }

    /**
     * Gets net_operating_income
     *
     * @return \Apideck\Client\Model\ProfitAndLossIndicator|null
     */
    public function getNetOperatingIncome()
    {
        return $this->container['net_operating_income'];
    }

    /**
     * Sets net_operating_income
     *
     * @param \Apideck\Client\Model\ProfitAndLossIndicator|null $net_operating_income net_operating_income
     *
     * @return self
     */
    public function setNetOperatingIncome($net_operating_income)
    {
        $this->container['net_operating_income'] = $net_operating_income;

        return $this;
    }

    /**
     * Gets net_income
     *
     * @return \Apideck\Client\Model\ProfitAndLossIndicator|null
     */
    public function getNetIncome()
    {
        return $this->container['net_income'];
    }

    /**
     * Sets net_income
     *
     * @param \Apideck\Client\Model\ProfitAndLossIndicator|null $net_income net_income
     *
     * @return self
     */
    public function setNetIncome($net_income)
    {
        $this->container['net_income'] = $net_income;

        return $this;
    }

    /**
     * Gets custom_mappings
     *
     * @return object|null
     */
    public function getCustomMappings()
    {
        return $this->container['custom_mappings'];
    }

    /**
     * Sets custom_mappings
     *
     * @param object|null $custom_mappings When custom mappings are configured on the resource, the result is included here.
     *
     * @return self
     */
    public function setCustomMappings($custom_mappings)
    {
        $this->container['custom_mappings'] = $custom_mappings;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return string|null
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param string|null $customer The customer id
     *
     * @return self
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

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


