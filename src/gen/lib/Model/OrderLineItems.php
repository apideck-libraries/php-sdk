<?php
/**
 * OrderLineItems
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
 * OrderLineItems Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OrderLineItems implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Order_line_items';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'item' => 'object',
        'total_tax' => 'int',
        'total_discount' => 'int',
        'total_amount' => 'int',
        'quantity' => 'float',
        'unit_price' => 'float',
        'applied_taxes' => 'object[]',
        'applied_discounts' => 'object[]',
        'modifiers' => 'object[]'
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
        'item' => null,
        'total_tax' => null,
        'total_discount' => null,
        'total_amount' => null,
        'quantity' => null,
        'unit_price' => null,
        'applied_taxes' => null,
        'applied_discounts' => null,
        'modifiers' => null
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
        'item' => 'item',
        'total_tax' => 'total_tax',
        'total_discount' => 'total_discount',
        'total_amount' => 'total_amount',
        'quantity' => 'quantity',
        'unit_price' => 'unit_price',
        'applied_taxes' => 'applied_taxes',
        'applied_discounts' => 'applied_discounts',
        'modifiers' => 'modifiers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'item' => 'setItem',
        'total_tax' => 'setTotalTax',
        'total_discount' => 'setTotalDiscount',
        'total_amount' => 'setTotalAmount',
        'quantity' => 'setQuantity',
        'unit_price' => 'setUnitPrice',
        'applied_taxes' => 'setAppliedTaxes',
        'applied_discounts' => 'setAppliedDiscounts',
        'modifiers' => 'setModifiers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'item' => 'getItem',
        'total_tax' => 'getTotalTax',
        'total_discount' => 'getTotalDiscount',
        'total_amount' => 'getTotalAmount',
        'quantity' => 'getQuantity',
        'unit_price' => 'getUnitPrice',
        'applied_taxes' => 'getAppliedTaxes',
        'applied_discounts' => 'getAppliedDiscounts',
        'modifiers' => 'getModifiers'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['item'] = $data['item'] ?? null;
        $this->container['total_tax'] = $data['total_tax'] ?? null;
        $this->container['total_discount'] = $data['total_discount'] ?? null;
        $this->container['total_amount'] = $data['total_amount'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['unit_price'] = $data['unit_price'] ?? null;
        $this->container['applied_taxes'] = $data['applied_taxes'] ?? null;
        $this->container['applied_discounts'] = $data['applied_discounts'] ?? null;
        $this->container['modifiers'] = $data['modifiers'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets item
     *
     * @return object|null
     */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
     * Sets item
     *
     * @param object|null $item item
     *
     * @return self
     */
    public function setItem($item)
    {
        $this->container['item'] = $item;

        return $this;
    }

    /**
     * Gets total_tax
     *
     * @return int|null
     */
    public function getTotalTax()
    {
        return $this->container['total_tax'];
    }

    /**
     * Sets total_tax
     *
     * @param int|null $total_tax total_tax
     *
     * @return self
     */
    public function setTotalTax($total_tax)
    {
        $this->container['total_tax'] = $total_tax;

        return $this;
    }

    /**
     * Gets total_discount
     *
     * @return int|null
     */
    public function getTotalDiscount()
    {
        return $this->container['total_discount'];
    }

    /**
     * Sets total_discount
     *
     * @param int|null $total_discount total_discount
     *
     * @return self
     */
    public function setTotalDiscount($total_discount)
    {
        $this->container['total_discount'] = $total_discount;

        return $this;
    }

    /**
     * Gets total_amount
     *
     * @return int|null
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param int|null $total_amount total_amount
     *
     * @return self
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

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
     * Gets applied_taxes
     *
     * @return object[]|null
     */
    public function getAppliedTaxes()
    {
        return $this->container['applied_taxes'];
    }

    /**
     * Sets applied_taxes
     *
     * @param object[]|null $applied_taxes applied_taxes
     *
     * @return self
     */
    public function setAppliedTaxes($applied_taxes)
    {
        $this->container['applied_taxes'] = $applied_taxes;

        return $this;
    }

    /**
     * Gets applied_discounts
     *
     * @return object[]|null
     */
    public function getAppliedDiscounts()
    {
        return $this->container['applied_discounts'];
    }

    /**
     * Sets applied_discounts
     *
     * @param object[]|null $applied_discounts applied_discounts
     *
     * @return self
     */
    public function setAppliedDiscounts($applied_discounts)
    {
        $this->container['applied_discounts'] = $applied_discounts;

        return $this;
    }

    /**
     * Gets modifiers
     *
     * @return object[]|null
     */
    public function getModifiers()
    {
        return $this->container['modifiers'];
    }

    /**
     * Sets modifiers
     *
     * @param object[]|null $modifiers Customizable options – toppings, add-ons, or special requests – create item modifiers. Modifiers that are applied to items will display on your customers’ digital receipts
     *
     * @return self
     */
    public function setModifiers($modifiers)
    {
        $this->container['modifiers'] = $modifiers;

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


