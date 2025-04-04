<?php
/**
 * JournalEntryLineItem
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
 * JournalEntryLineItem Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class JournalEntryLineItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'JournalEntryLineItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'ledger_account' => '\Apideck\Client\Model\LinkedLedgerAccount',
        'id' => 'string',
        'description' => 'string',
        'tax_amount' => 'float',
        'sub_total' => 'float',
        'total_amount' => 'float',
        'tax_rate' => '\Apideck\Client\Model\LinkedTaxRate',
        'tracking_category' => '\Apideck\Client\Model\DeprecatedLinkedTrackingCategory',
        'tracking_categories' => '\Apideck\Client\Model\LinkedTrackingCategory[]',
        'customer' => '\Apideck\Client\Model\LinkedCustomer',
        'supplier' => '\Apideck\Client\Model\LinkedSupplier',
        'department_id' => 'string',
        'location_id' => 'string',
        'line_number' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'ledger_account' => null,
        'id' => null,
        'description' => null,
        'tax_amount' => null,
        'sub_total' => null,
        'total_amount' => null,
        'tax_rate' => null,
        'tracking_category' => null,
        'tracking_categories' => null,
        'customer' => null,
        'supplier' => null,
        'department_id' => null,
        'location_id' => null,
        'line_number' => null
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
        'type' => 'type',
        'ledger_account' => 'ledger_account',
        'id' => 'id',
        'description' => 'description',
        'tax_amount' => 'tax_amount',
        'sub_total' => 'sub_total',
        'total_amount' => 'total_amount',
        'tax_rate' => 'tax_rate',
        'tracking_category' => 'tracking_category',
        'tracking_categories' => 'tracking_categories',
        'customer' => 'customer',
        'supplier' => 'supplier',
        'department_id' => 'department_id',
        'location_id' => 'location_id',
        'line_number' => 'line_number'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'ledger_account' => 'setLedgerAccount',
        'id' => 'setId',
        'description' => 'setDescription',
        'tax_amount' => 'setTaxAmount',
        'sub_total' => 'setSubTotal',
        'total_amount' => 'setTotalAmount',
        'tax_rate' => 'setTaxRate',
        'tracking_category' => 'setTrackingCategory',
        'tracking_categories' => 'setTrackingCategories',
        'customer' => 'setCustomer',
        'supplier' => 'setSupplier',
        'department_id' => 'setDepartmentId',
        'location_id' => 'setLocationId',
        'line_number' => 'setLineNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'ledger_account' => 'getLedgerAccount',
        'id' => 'getId',
        'description' => 'getDescription',
        'tax_amount' => 'getTaxAmount',
        'sub_total' => 'getSubTotal',
        'total_amount' => 'getTotalAmount',
        'tax_rate' => 'getTaxRate',
        'tracking_category' => 'getTrackingCategory',
        'tracking_categories' => 'getTrackingCategories',
        'customer' => 'getCustomer',
        'supplier' => 'getSupplier',
        'department_id' => 'getDepartmentId',
        'location_id' => 'getLocationId',
        'line_number' => 'getLineNumber'
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

    const TYPE_DEBIT = 'debit';
    const TYPE_CREDIT = 'credit';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_DEBIT,
            self::TYPE_CREDIT,
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
        $this->container['type'] = $data['type'] ?? null;
        $this->container['ledger_account'] = $data['ledger_account'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['tax_amount'] = $data['tax_amount'] ?? null;
        $this->container['sub_total'] = $data['sub_total'] ?? null;
        $this->container['total_amount'] = $data['total_amount'] ?? null;
        $this->container['tax_rate'] = $data['tax_rate'] ?? null;
        $this->container['tracking_category'] = $data['tracking_category'] ?? null;
        $this->container['tracking_categories'] = $data['tracking_categories'] ?? null;
        $this->container['customer'] = $data['customer'] ?? null;
        $this->container['supplier'] = $data['supplier'] ?? null;
        $this->container['department_id'] = $data['department_id'] ?? null;
        $this->container['location_id'] = $data['location_id'] ?? null;
        $this->container['line_number'] = $data['line_number'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['ledger_account'] === null) {
            $invalidProperties[] = "'ledger_account' can't be null";
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Debit entries are considered positive, and credit entries are considered negative.
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
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
     * Gets ledger_account
     *
     * @return \Apideck\Client\Model\LinkedLedgerAccount
     */
    public function getLedgerAccount()
    {
        return $this->container['ledger_account'];
    }

    /**
     * Sets ledger_account
     *
     * @param \Apideck\Client\Model\LinkedLedgerAccount $ledger_account ledger_account
     *
     * @return self
     */
    public function setLedgerAccount($ledger_account)
    {
        $this->container['ledger_account'] = $ledger_account;

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
     * @param string|null $description User defined description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets tax_amount
     *
     * @return float|null
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param float|null $tax_amount Tax amount
     *
     * @return self
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets sub_total
     *
     * @return float|null
     */
    public function getSubTotal()
    {
        return $this->container['sub_total'];
    }

    /**
     * Sets sub_total
     *
     * @param float|null $sub_total Sub-total amount, normally before tax.
     *
     * @return self
     */
    public function setSubTotal($sub_total)
    {
        $this->container['sub_total'] = $sub_total;

        return $this;
    }

    /**
     * Gets total_amount
     *
     * @return float|null
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param float|null $total_amount Debit entries are considered positive, and credit entries are considered negative.
     *
     * @return self
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets tax_rate
     *
     * @return \Apideck\Client\Model\LinkedTaxRate|null
     */
    public function getTaxRate()
    {
        return $this->container['tax_rate'];
    }

    /**
     * Sets tax_rate
     *
     * @param \Apideck\Client\Model\LinkedTaxRate|null $tax_rate tax_rate
     *
     * @return self
     */
    public function setTaxRate($tax_rate)
    {
        $this->container['tax_rate'] = $tax_rate;

        return $this;
    }

    /**
     * Gets tracking_category
     *
     * @return \Apideck\Client\Model\DeprecatedLinkedTrackingCategory|null
     * @deprecated
     */
    public function getTrackingCategory()
    {
        return $this->container['tracking_category'];
    }

    /**
     * Sets tracking_category
     *
     * @param \Apideck\Client\Model\DeprecatedLinkedTrackingCategory|null $tracking_category tracking_category
     *
     * @return self
     * @deprecated
     */
    public function setTrackingCategory($tracking_category)
    {
        $this->container['tracking_category'] = $tracking_category;

        return $this;
    }

    /**
     * Gets tracking_categories
     *
     * @return \Apideck\Client\Model\LinkedTrackingCategory[]|null
     */
    public function getTrackingCategories()
    {
        return $this->container['tracking_categories'];
    }

    /**
     * Sets tracking_categories
     *
     * @param \Apideck\Client\Model\LinkedTrackingCategory[]|null $tracking_categories A list of linked tracking categories.
     *
     * @return self
     */
    public function setTrackingCategories($tracking_categories)
    {
        $this->container['tracking_categories'] = $tracking_categories;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \Apideck\Client\Model\LinkedCustomer|null
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \Apideck\Client\Model\LinkedCustomer|null $customer customer
     *
     * @return self
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets supplier
     *
     * @return \Apideck\Client\Model\LinkedSupplier|null
     */
    public function getSupplier()
    {
        return $this->container['supplier'];
    }

    /**
     * Sets supplier
     *
     * @param \Apideck\Client\Model\LinkedSupplier|null $supplier supplier
     *
     * @return self
     */
    public function setSupplier($supplier)
    {
        $this->container['supplier'] = $supplier;

        return $this;
    }

    /**
     * Gets department_id
     *
     * @return string|null
     */
    public function getDepartmentId()
    {
        return $this->container['department_id'];
    }

    /**
     * Sets department_id
     *
     * @param string|null $department_id The ID of the department
     *
     * @return self
     */
    public function setDepartmentId($department_id)
    {
        $this->container['department_id'] = $department_id;

        return $this;
    }

    /**
     * Gets location_id
     *
     * @return string|null
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param string|null $location_id The ID of the location
     *
     * @return self
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets line_number
     *
     * @return int|null
     */
    public function getLineNumber()
    {
        return $this->container['line_number'];
    }

    /**
     * Sets line_number
     *
     * @param int|null $line_number Line number of the resource
     *
     * @return self
     */
    public function setLineNumber($line_number)
    {
        $this->container['line_number'] = $line_number;

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


