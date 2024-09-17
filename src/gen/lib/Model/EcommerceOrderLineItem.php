<?php
/**
 * EcommerceOrderLineItem
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
 * The version of the OpenAPI document: 10.7.3
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
 * EcommerceOrderLineItem Class Doc Comment
 *
 * @category Class
 * @description A single line item of an ecommerce order, representing a product or variant with associated options, quantity, and pricing information.
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EcommerceOrderLineItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EcommerceOrderLineItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'quantity' => 'string',
        'total_amount' => 'string',
        'id' => 'string',
        'product_id' => 'string',
        'variant_id' => 'string',
        'sku' => 'string',
        'description' => 'string',
        'options' => 'object[]',
        'unit_price' => 'string',
        'tax_rate' => 'string',
        'tax_amount' => 'string',
        'is_refunded' => 'bool',
        'refunded_amount' => 'string',
        'refunded_quantity' => 'string',
        'sub_total' => 'string',
        'discounts' => '\Apideck\Client\Model\EcommerceDiscount[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'quantity' => null,
        'total_amount' => null,
        'id' => null,
        'product_id' => null,
        'variant_id' => null,
        'sku' => null,
        'description' => null,
        'options' => null,
        'unit_price' => null,
        'tax_rate' => null,
        'tax_amount' => null,
        'is_refunded' => null,
        'refunded_amount' => null,
        'refunded_quantity' => null,
        'sub_total' => null,
        'discounts' => null
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
        'name' => 'name',
        'quantity' => 'quantity',
        'total_amount' => 'total_amount',
        'id' => 'id',
        'product_id' => 'product_id',
        'variant_id' => 'variant_id',
        'sku' => 'sku',
        'description' => 'description',
        'options' => 'options',
        'unit_price' => 'unit_price',
        'tax_rate' => 'tax_rate',
        'tax_amount' => 'tax_amount',
        'is_refunded' => 'is_refunded',
        'refunded_amount' => 'refunded_amount',
        'refunded_quantity' => 'refunded_quantity',
        'sub_total' => 'sub_total',
        'discounts' => 'discounts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'quantity' => 'setQuantity',
        'total_amount' => 'setTotalAmount',
        'id' => 'setId',
        'product_id' => 'setProductId',
        'variant_id' => 'setVariantId',
        'sku' => 'setSku',
        'description' => 'setDescription',
        'options' => 'setOptions',
        'unit_price' => 'setUnitPrice',
        'tax_rate' => 'setTaxRate',
        'tax_amount' => 'setTaxAmount',
        'is_refunded' => 'setIsRefunded',
        'refunded_amount' => 'setRefundedAmount',
        'refunded_quantity' => 'setRefundedQuantity',
        'sub_total' => 'setSubTotal',
        'discounts' => 'setDiscounts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'quantity' => 'getQuantity',
        'total_amount' => 'getTotalAmount',
        'id' => 'getId',
        'product_id' => 'getProductId',
        'variant_id' => 'getVariantId',
        'sku' => 'getSku',
        'description' => 'getDescription',
        'options' => 'getOptions',
        'unit_price' => 'getUnitPrice',
        'tax_rate' => 'getTaxRate',
        'tax_amount' => 'getTaxAmount',
        'is_refunded' => 'getIsRefunded',
        'refunded_amount' => 'getRefundedAmount',
        'refunded_quantity' => 'getRefundedQuantity',
        'sub_total' => 'getSubTotal',
        'discounts' => 'getDiscounts'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['total_amount'] = $data['total_amount'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['product_id'] = $data['product_id'] ?? null;
        $this->container['variant_id'] = $data['variant_id'] ?? null;
        $this->container['sku'] = $data['sku'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['options'] = $data['options'] ?? null;
        $this->container['unit_price'] = $data['unit_price'] ?? null;
        $this->container['tax_rate'] = $data['tax_rate'] ?? null;
        $this->container['tax_amount'] = $data['tax_amount'] ?? null;
        $this->container['is_refunded'] = $data['is_refunded'] ?? null;
        $this->container['refunded_amount'] = $data['refunded_amount'] ?? null;
        $this->container['refunded_quantity'] = $data['refunded_quantity'] ?? null;
        $this->container['sub_total'] = $data['sub_total'] ?? null;
        $this->container['discounts'] = $data['discounts'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['total_amount'] === null) {
            $invalidProperties[] = "'total_amount' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the product or variant associated with the line item.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return string
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param string $quantity The quantity of the product or variant associated with the line item.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets total_amount
     *
     * @return string
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param string $total_amount The total amount for the product(s) or variant associated with the line item, including taxes and discounts.
     *
     * @return self
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

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
     * Gets product_id
     *
     * @return string|null
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param string|null $product_id A unique identifier for the product associated with the line item.
     *
     * @return self
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets variant_id
     *
     * @return string|null
     */
    public function getVariantId()
    {
        return $this->container['variant_id'];
    }

    /**
     * Sets variant_id
     *
     * @param string|null $variant_id A unique identifier for the variant of the product associated with the line item, if applicable.
     *
     * @return self
     */
    public function setVariantId($variant_id)
    {
        $this->container['variant_id'] = $variant_id;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string|null $sku The SKU of the product or variant associated with the line item.
     *
     * @return self
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

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
     * @param string|null $description The description of the product or variant associated with the line item.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets options
     *
     * @return object[]|null
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param object[]|null $options options
     *
     * @return self
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return string|null
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param string|null $unit_price The unit price of the product or variant associated with the line item.
     *
     * @return self
     */
    public function setUnitPrice($unit_price)
    {
        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets tax_rate
     *
     * @return string|null
     */
    public function getTaxRate()
    {
        return $this->container['tax_rate'];
    }

    /**
     * Sets tax_rate
     *
     * @param string|null $tax_rate The tax rate applied to the product or variant associated with the line item.
     *
     * @return self
     */
    public function setTaxRate($tax_rate)
    {
        $this->container['tax_rate'] = $tax_rate;

        return $this;
    }

    /**
     * Gets tax_amount
     *
     * @return string|null
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param string|null $tax_amount The total tax amount applied to the product or variant associated with the line item.
     *
     * @return self
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets is_refunded
     *
     * @return bool|null
     */
    public function getIsRefunded()
    {
        return $this->container['is_refunded'];
    }

    /**
     * Sets is_refunded
     *
     * @param bool|null $is_refunded Whether the line item has been refunded.
     *
     * @return self
     */
    public function setIsRefunded($is_refunded)
    {
        $this->container['is_refunded'] = $is_refunded;

        return $this;
    }

    /**
     * Gets refunded_amount
     *
     * @return string|null
     */
    public function getRefundedAmount()
    {
        return $this->container['refunded_amount'];
    }

    /**
     * Sets refunded_amount
     *
     * @param string|null $refunded_amount The amount of the line item that has been refunded.
     *
     * @return self
     */
    public function setRefundedAmount($refunded_amount)
    {
        $this->container['refunded_amount'] = $refunded_amount;

        return $this;
    }

    /**
     * Gets refunded_quantity
     *
     * @return string|null
     */
    public function getRefundedQuantity()
    {
        return $this->container['refunded_quantity'];
    }

    /**
     * Sets refunded_quantity
     *
     * @param string|null $refunded_quantity The quantity of the line item that has been refunded.
     *
     * @return self
     */
    public function setRefundedQuantity($refunded_quantity)
    {
        $this->container['refunded_quantity'] = $refunded_quantity;

        return $this;
    }

    /**
     * Gets sub_total
     *
     * @return string|null
     */
    public function getSubTotal()
    {
        return $this->container['sub_total'];
    }

    /**
     * Sets sub_total
     *
     * @param string|null $sub_total The sub total for the product(s) or variant associated with the line item, excluding taxes and discounts.
     *
     * @return self
     */
    public function setSubTotal($sub_total)
    {
        $this->container['sub_total'] = $sub_total;

        return $this;
    }

    /**
     * Gets discounts
     *
     * @return \Apideck\Client\Model\EcommerceDiscount[]|null
     */
    public function getDiscounts()
    {
        return $this->container['discounts'];
    }

    /**
     * Sets discounts
     *
     * @param \Apideck\Client\Model\EcommerceDiscount[]|null $discounts discounts
     *
     * @return self
     */
    public function setDiscounts($discounts)
    {
        $this->container['discounts'] = $discounts;

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


