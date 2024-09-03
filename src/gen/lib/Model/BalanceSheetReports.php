<?php
/**
 * BalanceSheetReports
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
 * The version of the OpenAPI document: 10.7.2
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
 * BalanceSheetReports Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BalanceSheetReports implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BalanceSheet_reports';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'end_date' => 'string',
        'assets' => '\Apideck\Client\Model\BalanceSheetAccount',
        'liabilities' => '\Apideck\Client\Model\BalanceSheetAccount',
        'equity' => '\Apideck\Client\Model\BalanceSheetAccount',
        'id' => 'string',
        'report_name' => 'string',
        'start_date' => 'string',
        'currency' => '\Apideck\Client\Model\Currency',
        'net_assets' => 'float',
        'custom_mappings' => 'object',
        'updated_by' => 'string',
        'created_by' => 'string',
        'updated_at' => '\DateTime',
        'created_at' => '\DateTime',
        'uncategorized_items' => 'AnyOfBalanceSheetAccountBalanceSheetAccountRecord[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'end_date' => null,
        'assets' => null,
        'liabilities' => null,
        'equity' => null,
        'id' => null,
        'report_name' => null,
        'start_date' => null,
        'currency' => null,
        'net_assets' => null,
        'custom_mappings' => null,
        'updated_by' => null,
        'created_by' => null,
        'updated_at' => 'date-time',
        'created_at' => 'date-time',
        'uncategorized_items' => null
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
        'end_date' => 'end_date',
        'assets' => 'assets',
        'liabilities' => 'liabilities',
        'equity' => 'equity',
        'id' => 'id',
        'report_name' => 'report_name',
        'start_date' => 'start_date',
        'currency' => 'currency',
        'net_assets' => 'net_assets',
        'custom_mappings' => 'custom_mappings',
        'updated_by' => 'updated_by',
        'created_by' => 'created_by',
        'updated_at' => 'updated_at',
        'created_at' => 'created_at',
        'uncategorized_items' => 'uncategorized_items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'end_date' => 'setEndDate',
        'assets' => 'setAssets',
        'liabilities' => 'setLiabilities',
        'equity' => 'setEquity',
        'id' => 'setId',
        'report_name' => 'setReportName',
        'start_date' => 'setStartDate',
        'currency' => 'setCurrency',
        'net_assets' => 'setNetAssets',
        'custom_mappings' => 'setCustomMappings',
        'updated_by' => 'setUpdatedBy',
        'created_by' => 'setCreatedBy',
        'updated_at' => 'setUpdatedAt',
        'created_at' => 'setCreatedAt',
        'uncategorized_items' => 'setUncategorizedItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'end_date' => 'getEndDate',
        'assets' => 'getAssets',
        'liabilities' => 'getLiabilities',
        'equity' => 'getEquity',
        'id' => 'getId',
        'report_name' => 'getReportName',
        'start_date' => 'getStartDate',
        'currency' => 'getCurrency',
        'net_assets' => 'getNetAssets',
        'custom_mappings' => 'getCustomMappings',
        'updated_by' => 'getUpdatedBy',
        'created_by' => 'getCreatedBy',
        'updated_at' => 'getUpdatedAt',
        'created_at' => 'getCreatedAt',
        'uncategorized_items' => 'getUncategorizedItems'
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
        $this->container['end_date'] = $data['end_date'] ?? null;
        $this->container['assets'] = $data['assets'] ?? null;
        $this->container['liabilities'] = $data['liabilities'] ?? null;
        $this->container['equity'] = $data['equity'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['report_name'] = $data['report_name'] ?? null;
        $this->container['start_date'] = $data['start_date'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['net_assets'] = $data['net_assets'] ?? null;
        $this->container['custom_mappings'] = $data['custom_mappings'] ?? null;
        $this->container['updated_by'] = $data['updated_by'] ?? null;
        $this->container['created_by'] = $data['created_by'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['uncategorized_items'] = $data['uncategorized_items'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['end_date'] === null) {
            $invalidProperties[] = "'end_date' can't be null";
        }
        if (!preg_match("/^\\d{4}-\\d{2}-\\d{2}$/", $this->container['end_date'])) {
            $invalidProperties[] = "invalid value for 'end_date', must be conform to the pattern /^\\d{4}-\\d{2}-\\d{2}$/.";
        }

        if ($this->container['assets'] === null) {
            $invalidProperties[] = "'assets' can't be null";
        }
        if ($this->container['liabilities'] === null) {
            $invalidProperties[] = "'liabilities' can't be null";
        }
        if ($this->container['equity'] === null) {
            $invalidProperties[] = "'equity' can't be null";
        }
        if (!is_null($this->container['start_date']) && !preg_match("/^\\d{4}-\\d{2}-\\d{2}$/", $this->container['start_date'])) {
            $invalidProperties[] = "invalid value for 'start_date', must be conform to the pattern /^\\d{4}-\\d{2}-\\d{2}$/.";
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
     * @param string $end_date The start date of the report
     *
     * @return self
     */
    public function setEndDate($end_date)
    {

        if ((!preg_match("/^\\d{4}-\\d{2}-\\d{2}$/", $end_date))) {
            throw new \InvalidArgumentException("invalid value for $end_date when calling BalanceSheetReports., must conform to the pattern /^\\d{4}-\\d{2}-\\d{2}$/.");
        }

        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets assets
     *
     * @return \Apideck\Client\Model\BalanceSheetAccount
     */
    public function getAssets()
    {
        return $this->container['assets'];
    }

    /**
     * Sets assets
     *
     * @param \Apideck\Client\Model\BalanceSheetAccount $assets assets
     *
     * @return self
     */
    public function setAssets($assets)
    {
        $this->container['assets'] = $assets;

        return $this;
    }

    /**
     * Gets liabilities
     *
     * @return \Apideck\Client\Model\BalanceSheetAccount
     */
    public function getLiabilities()
    {
        return $this->container['liabilities'];
    }

    /**
     * Sets liabilities
     *
     * @param \Apideck\Client\Model\BalanceSheetAccount $liabilities liabilities
     *
     * @return self
     */
    public function setLiabilities($liabilities)
    {
        $this->container['liabilities'] = $liabilities;

        return $this;
    }

    /**
     * Gets equity
     *
     * @return \Apideck\Client\Model\BalanceSheetAccount
     */
    public function getEquity()
    {
        return $this->container['equity'];
    }

    /**
     * Sets equity
     *
     * @param \Apideck\Client\Model\BalanceSheetAccount $equity equity
     *
     * @return self
     */
    public function setEquity($equity)
    {
        $this->container['equity'] = $equity;

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
     * Gets report_name
     *
     * @return string|null
     */
    public function getReportName()
    {
        return $this->container['report_name'];
    }

    /**
     * Sets report_name
     *
     * @param string|null $report_name The name of the report
     *
     * @return self
     */
    public function setReportName($report_name)
    {
        $this->container['report_name'] = $report_name;

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
            throw new \InvalidArgumentException("invalid value for $start_date when calling BalanceSheetReports., must conform to the pattern /^\\d{4}-\\d{2}-\\d{2}$/.");
        }

        $this->container['start_date'] = $start_date;

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
     * Gets net_assets
     *
     * @return float|null
     */
    public function getNetAssets()
    {
        return $this->container['net_assets'];
    }

    /**
     * Sets net_assets
     *
     * @param float|null $net_assets The net assets of the balance sheet
     *
     * @return self
     */
    public function setNetAssets($net_assets)
    {
        $this->container['net_assets'] = $net_assets;

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
     * Gets uncategorized_items
     *
     * @return AnyOfBalanceSheetAccountBalanceSheetAccountRecord[]|null
     */
    public function getUncategorizedItems()
    {
        return $this->container['uncategorized_items'];
    }

    /**
     * Sets uncategorized_items
     *
     * @param AnyOfBalanceSheetAccountBalanceSheetAccountRecord[]|null $uncategorized_items A list of balance sheet accounts
     *
     * @return self
     */
    public function setUncategorizedItems($uncategorized_items)
    {
        $this->container['uncategorized_items'] = $uncategorized_items;

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


