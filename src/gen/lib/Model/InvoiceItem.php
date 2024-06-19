<?php
/**
 * InvoiceItem
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
 * The version of the OpenAPI document: 10.6.0
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
 * InvoiceItem Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InvoiceItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InvoiceItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'description' => 'string',
        'code' => 'string',
        'sold' => 'bool',
        'purchased' => 'bool',
        'tracked' => 'bool',
        'taxable' => 'bool',
        'inventory_date' => '\DateTime',
        'type' => 'string',
        'sales_details' => '\Apideck\Client\Model\InvoiceItemSalesDetails',
        'purchase_details' => '\Apideck\Client\Model\InvoiceItemSalesDetails',
        'quantity' => 'float',
        'unit_price' => 'float',
        'asset_account' => '\Apideck\Client\Model\LinkedLedgerAccount',
        'income_account' => '\Apideck\Client\Model\LinkedLedgerAccount',
        'expense_account' => '\Apideck\Client\Model\LinkedLedgerAccount',
        'tracking_category' => '\Apideck\Client\Model\LinkedTrackingCategory',
        'active' => 'bool',
        'custom_mappings' => 'object',
        'row_version' => 'string',
        'updated_by' => 'string',
        'created_by' => 'string',
        'updated_at' => '\DateTime',
        'created_at' => '\DateTime',
        'pass_through' => 'object[]'
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
        'name' => null,
        'description' => null,
        'code' => null,
        'sold' => null,
        'purchased' => null,
        'tracked' => null,
        'taxable' => null,
        'inventory_date' => 'date',
        'type' => null,
        'sales_details' => null,
        'purchase_details' => null,
        'quantity' => null,
        'unit_price' => null,
        'asset_account' => null,
        'income_account' => null,
        'expense_account' => null,
        'tracking_category' => null,
        'active' => null,
        'custom_mappings' => null,
        'row_version' => null,
        'updated_by' => null,
        'created_by' => null,
        'updated_at' => 'date-time',
        'created_at' => 'date-time',
        'pass_through' => null
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
        'name' => 'name',
        'description' => 'description',
        'code' => 'code',
        'sold' => 'sold',
        'purchased' => 'purchased',
        'tracked' => 'tracked',
        'taxable' => 'taxable',
        'inventory_date' => 'inventory_date',
        'type' => 'type',
        'sales_details' => 'sales_details',
        'purchase_details' => 'purchase_details',
        'quantity' => 'quantity',
        'unit_price' => 'unit_price',
        'asset_account' => 'asset_account',
        'income_account' => 'income_account',
        'expense_account' => 'expense_account',
        'tracking_category' => 'tracking_category',
        'active' => 'active',
        'custom_mappings' => 'custom_mappings',
        'row_version' => 'row_version',
        'updated_by' => 'updated_by',
        'created_by' => 'created_by',
        'updated_at' => 'updated_at',
        'created_at' => 'created_at',
        'pass_through' => 'pass_through'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'description' => 'setDescription',
        'code' => 'setCode',
        'sold' => 'setSold',
        'purchased' => 'setPurchased',
        'tracked' => 'setTracked',
        'taxable' => 'setTaxable',
        'inventory_date' => 'setInventoryDate',
        'type' => 'setType',
        'sales_details' => 'setSalesDetails',
        'purchase_details' => 'setPurchaseDetails',
        'quantity' => 'setQuantity',
        'unit_price' => 'setUnitPrice',
        'asset_account' => 'setAssetAccount',
        'income_account' => 'setIncomeAccount',
        'expense_account' => 'setExpenseAccount',
        'tracking_category' => 'setTrackingCategory',
        'active' => 'setActive',
        'custom_mappings' => 'setCustomMappings',
        'row_version' => 'setRowVersion',
        'updated_by' => 'setUpdatedBy',
        'created_by' => 'setCreatedBy',
        'updated_at' => 'setUpdatedAt',
        'created_at' => 'setCreatedAt',
        'pass_through' => 'setPassThrough'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'description' => 'getDescription',
        'code' => 'getCode',
        'sold' => 'getSold',
        'purchased' => 'getPurchased',
        'tracked' => 'getTracked',
        'taxable' => 'getTaxable',
        'inventory_date' => 'getInventoryDate',
        'type' => 'getType',
        'sales_details' => 'getSalesDetails',
        'purchase_details' => 'getPurchaseDetails',
        'quantity' => 'getQuantity',
        'unit_price' => 'getUnitPrice',
        'asset_account' => 'getAssetAccount',
        'income_account' => 'getIncomeAccount',
        'expense_account' => 'getExpenseAccount',
        'tracking_category' => 'getTrackingCategory',
        'active' => 'getActive',
        'custom_mappings' => 'getCustomMappings',
        'row_version' => 'getRowVersion',
        'updated_by' => 'getUpdatedBy',
        'created_by' => 'getCreatedBy',
        'updated_at' => 'getUpdatedAt',
        'created_at' => 'getCreatedAt',
        'pass_through' => 'getPassThrough'
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

    const TYPE_INVENTORY = 'inventory';
    const TYPE_SERVICE = 'service';
    const TYPE_OTHER = 'other';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_INVENTORY,
            self::TYPE_SERVICE,
            self::TYPE_OTHER,
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['code'] = $data['code'] ?? null;
        $this->container['sold'] = $data['sold'] ?? null;
        $this->container['purchased'] = $data['purchased'] ?? null;
        $this->container['tracked'] = $data['tracked'] ?? null;
        $this->container['taxable'] = $data['taxable'] ?? null;
        $this->container['inventory_date'] = $data['inventory_date'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['sales_details'] = $data['sales_details'] ?? null;
        $this->container['purchase_details'] = $data['purchase_details'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['unit_price'] = $data['unit_price'] ?? null;
        $this->container['asset_account'] = $data['asset_account'] ?? null;
        $this->container['income_account'] = $data['income_account'] ?? null;
        $this->container['expense_account'] = $data['expense_account'] ?? null;
        $this->container['tracking_category'] = $data['tracking_category'] ?? null;
        $this->container['active'] = $data['active'] ?? null;
        $this->container['custom_mappings'] = $data['custom_mappings'] ?? null;
        $this->container['row_version'] = $data['row_version'] ?? null;
        $this->container['updated_by'] = $data['updated_by'] ?? null;
        $this->container['created_by'] = $data['created_by'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['pass_through'] = $data['pass_through'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
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
     * @param string|null $id The ID of the item.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Item name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string|null $description A short description of the item
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code User defined item code
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets sold
     *
     * @return bool|null
     */
    public function getSold()
    {
        return $this->container['sold'];
    }

    /**
     * Sets sold
     *
     * @param bool|null $sold Item will be available on sales transactions
     *
     * @return self
     */
    public function setSold($sold)
    {
        $this->container['sold'] = $sold;

        return $this;
    }

    /**
     * Gets purchased
     *
     * @return bool|null
     */
    public function getPurchased()
    {
        return $this->container['purchased'];
    }

    /**
     * Sets purchased
     *
     * @param bool|null $purchased Item is available for purchase transactions
     *
     * @return self
     */
    public function setPurchased($purchased)
    {
        $this->container['purchased'] = $purchased;

        return $this;
    }

    /**
     * Gets tracked
     *
     * @return bool|null
     */
    public function getTracked()
    {
        return $this->container['tracked'];
    }

    /**
     * Sets tracked
     *
     * @param bool|null $tracked Item is inventoried
     *
     * @return self
     */
    public function setTracked($tracked)
    {
        $this->container['tracked'] = $tracked;

        return $this;
    }

    /**
     * Gets taxable
     *
     * @return bool|null
     */
    public function getTaxable()
    {
        return $this->container['taxable'];
    }

    /**
     * Sets taxable
     *
     * @param bool|null $taxable If true, transactions for this item are taxable
     *
     * @return self
     */
    public function setTaxable($taxable)
    {
        $this->container['taxable'] = $taxable;

        return $this;
    }

    /**
     * Gets inventory_date
     *
     * @return \DateTime|null
     */
    public function getInventoryDate()
    {
        return $this->container['inventory_date'];
    }

    /**
     * Sets inventory_date
     *
     * @param \DateTime|null $inventory_date The date of opening balance if inventory item is tracked - YYYY-MM-DD.
     *
     * @return self
     */
    public function setInventoryDate($inventory_date)
    {
        $this->container['inventory_date'] = $inventory_date;

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
     * @param string|null $type Item type
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
     * Gets sales_details
     *
     * @return \Apideck\Client\Model\InvoiceItemSalesDetails|null
     */
    public function getSalesDetails()
    {
        return $this->container['sales_details'];
    }

    /**
     * Sets sales_details
     *
     * @param \Apideck\Client\Model\InvoiceItemSalesDetails|null $sales_details sales_details
     *
     * @return self
     */
    public function setSalesDetails($sales_details)
    {
        $this->container['sales_details'] = $sales_details;

        return $this;
    }

    /**
     * Gets purchase_details
     *
     * @return \Apideck\Client\Model\InvoiceItemSalesDetails|null
     */
    public function getPurchaseDetails()
    {
        return $this->container['purchase_details'];
    }

    /**
     * Sets purchase_details
     *
     * @param \Apideck\Client\Model\InvoiceItemSalesDetails|null $purchase_details purchase_details
     *
     * @return self
     */
    public function setPurchaseDetails($purchase_details)
    {
        $this->container['purchase_details'] = $purchase_details;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return float|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float|null $quantity quantity
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return float|null
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param float|null $unit_price unit_price
     *
     * @return self
     */
    public function setUnitPrice($unit_price)
    {
        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets asset_account
     *
     * @return \Apideck\Client\Model\LinkedLedgerAccount|null
     */
    public function getAssetAccount()
    {
        return $this->container['asset_account'];
    }

    /**
     * Sets asset_account
     *
     * @param \Apideck\Client\Model\LinkedLedgerAccount|null $asset_account asset_account
     *
     * @return self
     */
    public function setAssetAccount($asset_account)
    {
        $this->container['asset_account'] = $asset_account;

        return $this;
    }

    /**
     * Gets income_account
     *
     * @return \Apideck\Client\Model\LinkedLedgerAccount|null
     */
    public function getIncomeAccount()
    {
        return $this->container['income_account'];
    }

    /**
     * Sets income_account
     *
     * @param \Apideck\Client\Model\LinkedLedgerAccount|null $income_account income_account
     *
     * @return self
     */
    public function setIncomeAccount($income_account)
    {
        $this->container['income_account'] = $income_account;

        return $this;
    }

    /**
     * Gets expense_account
     *
     * @return \Apideck\Client\Model\LinkedLedgerAccount|null
     */
    public function getExpenseAccount()
    {
        return $this->container['expense_account'];
    }

    /**
     * Sets expense_account
     *
     * @param \Apideck\Client\Model\LinkedLedgerAccount|null $expense_account expense_account
     *
     * @return self
     */
    public function setExpenseAccount($expense_account)
    {
        $this->container['expense_account'] = $expense_account;

        return $this;
    }

    /**
     * Gets tracking_category
     *
     * @return \Apideck\Client\Model\LinkedTrackingCategory|null
     */
    public function getTrackingCategory()
    {
        return $this->container['tracking_category'];
    }

    /**
     * Sets tracking_category
     *
     * @param \Apideck\Client\Model\LinkedTrackingCategory|null $tracking_category tracking_category
     *
     * @return self
     */
    public function setTrackingCategory($tracking_category)
    {
        $this->container['tracking_category'] = $tracking_category;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active active
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

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
     * Gets row_version
     *
     * @return string|null
     */
    public function getRowVersion()
    {
        return $this->container['row_version'];
    }

    /**
     * Sets row_version
     *
     * @param string|null $row_version A binary value used to detect updates to a object and prevent data conflicts. It is incremented each time an update is made to the object.
     *
     * @return self
     */
    public function setRowVersion($row_version)
    {
        $this->container['row_version'] = $row_version;

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
     * Gets pass_through
     *
     * @return object[]|null
     */
    public function getPassThrough()
    {
        return $this->container['pass_through'];
    }

    /**
     * Sets pass_through
     *
     * @param object[]|null $pass_through The pass_through property allows passing service-specific, custom data or structured modifications in request body when creating or updating resources.
     *
     * @return self
     */
    public function setPassThrough($pass_through)
    {
        $this->container['pass_through'] = $pass_through;

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


