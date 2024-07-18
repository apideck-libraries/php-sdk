<?php
/**
 * EcommerceOrder
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
 * The version of the OpenAPI document: 10.7.0
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
 * EcommerceOrder Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EcommerceOrder implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EcommerceOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'order_number' => 'string',
        'currency' => '\Apideck\Client\Model\Currency',
        'discounts' => '\Apideck\Client\Model\EcommerceDiscount[]',
        'sub_total' => 'string',
        'shipping_cost' => 'string',
        'coupon_discount' => 'string',
        'total_discount' => 'string',
        'total_tax' => 'string',
        'total_amount' => 'string',
        'refunded_amount' => 'string',
        'status' => '\Apideck\Client\Model\EcommerceOrderStatus',
        'payment_status' => 'string',
        'fulfillment_status' => 'string',
        'payment_method' => 'string',
        'customer' => '\Apideck\Client\Model\LinkedEcommerceCustomer',
        'billing_address' => '\Apideck\Client\Model\EcommerceAddress',
        'shipping_address' => '\Apideck\Client\Model\EcommerceAddress',
        'tracking' => '\Apideck\Client\Model\TrackingItem[]',
        'line_items' => '\Apideck\Client\Model\EcommerceOrderLineItem[]',
        'note' => 'string',
        'custom_mappings' => 'object',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime'
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
        'order_number' => null,
        'currency' => null,
        'discounts' => null,
        'sub_total' => null,
        'shipping_cost' => null,
        'coupon_discount' => null,
        'total_discount' => null,
        'total_tax' => null,
        'total_amount' => null,
        'refunded_amount' => null,
        'status' => null,
        'payment_status' => null,
        'fulfillment_status' => null,
        'payment_method' => null,
        'customer' => null,
        'billing_address' => null,
        'shipping_address' => null,
        'tracking' => null,
        'line_items' => null,
        'note' => null,
        'custom_mappings' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time'
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
        'order_number' => 'order_number',
        'currency' => 'currency',
        'discounts' => 'discounts',
        'sub_total' => 'sub_total',
        'shipping_cost' => 'shipping_cost',
        'coupon_discount' => 'coupon_discount',
        'total_discount' => 'total_discount',
        'total_tax' => 'total_tax',
        'total_amount' => 'total_amount',
        'refunded_amount' => 'refunded_amount',
        'status' => 'status',
        'payment_status' => 'payment_status',
        'fulfillment_status' => 'fulfillment_status',
        'payment_method' => 'payment_method',
        'customer' => 'customer',
        'billing_address' => 'billing_address',
        'shipping_address' => 'shipping_address',
        'tracking' => 'tracking',
        'line_items' => 'line_items',
        'note' => 'note',
        'custom_mappings' => 'custom_mappings',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'order_number' => 'setOrderNumber',
        'currency' => 'setCurrency',
        'discounts' => 'setDiscounts',
        'sub_total' => 'setSubTotal',
        'shipping_cost' => 'setShippingCost',
        'coupon_discount' => 'setCouponDiscount',
        'total_discount' => 'setTotalDiscount',
        'total_tax' => 'setTotalTax',
        'total_amount' => 'setTotalAmount',
        'refunded_amount' => 'setRefundedAmount',
        'status' => 'setStatus',
        'payment_status' => 'setPaymentStatus',
        'fulfillment_status' => 'setFulfillmentStatus',
        'payment_method' => 'setPaymentMethod',
        'customer' => 'setCustomer',
        'billing_address' => 'setBillingAddress',
        'shipping_address' => 'setShippingAddress',
        'tracking' => 'setTracking',
        'line_items' => 'setLineItems',
        'note' => 'setNote',
        'custom_mappings' => 'setCustomMappings',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'order_number' => 'getOrderNumber',
        'currency' => 'getCurrency',
        'discounts' => 'getDiscounts',
        'sub_total' => 'getSubTotal',
        'shipping_cost' => 'getShippingCost',
        'coupon_discount' => 'getCouponDiscount',
        'total_discount' => 'getTotalDiscount',
        'total_tax' => 'getTotalTax',
        'total_amount' => 'getTotalAmount',
        'refunded_amount' => 'getRefundedAmount',
        'status' => 'getStatus',
        'payment_status' => 'getPaymentStatus',
        'fulfillment_status' => 'getFulfillmentStatus',
        'payment_method' => 'getPaymentMethod',
        'customer' => 'getCustomer',
        'billing_address' => 'getBillingAddress',
        'shipping_address' => 'getShippingAddress',
        'tracking' => 'getTracking',
        'line_items' => 'getLineItems',
        'note' => 'getNote',
        'custom_mappings' => 'getCustomMappings',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
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

    const PAYMENT_STATUS_PENDING = 'pending';
    const PAYMENT_STATUS_AUTHORIZED = 'authorized';
    const PAYMENT_STATUS_PAID = 'paid';
    const PAYMENT_STATUS_PARTIAL = 'partial';
    const PAYMENT_STATUS_REFUNDED = 'refunded';
    const PAYMENT_STATUS_VOIDED = 'voided';
    const PAYMENT_STATUS_UNKNOWN = 'unknown';
    const FULFILLMENT_STATUS_PENDING = 'pending';
    const FULFILLMENT_STATUS_SHIPPED = 'shipped';
    const FULFILLMENT_STATUS_PARTIAL = 'partial';
    const FULFILLMENT_STATUS_DELIVERED = 'delivered';
    const FULFILLMENT_STATUS_CANCELLED = 'cancelled';
    const FULFILLMENT_STATUS_RETURNED = 'returned';
    const FULFILLMENT_STATUS_UNKNOWN = 'unknown';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentStatusAllowableValues()
    {
        return [
            self::PAYMENT_STATUS_PENDING,
            self::PAYMENT_STATUS_AUTHORIZED,
            self::PAYMENT_STATUS_PAID,
            self::PAYMENT_STATUS_PARTIAL,
            self::PAYMENT_STATUS_REFUNDED,
            self::PAYMENT_STATUS_VOIDED,
            self::PAYMENT_STATUS_UNKNOWN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFulfillmentStatusAllowableValues()
    {
        return [
            self::FULFILLMENT_STATUS_PENDING,
            self::FULFILLMENT_STATUS_SHIPPED,
            self::FULFILLMENT_STATUS_PARTIAL,
            self::FULFILLMENT_STATUS_DELIVERED,
            self::FULFILLMENT_STATUS_CANCELLED,
            self::FULFILLMENT_STATUS_RETURNED,
            self::FULFILLMENT_STATUS_UNKNOWN,
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
        $this->container['order_number'] = $data['order_number'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['discounts'] = $data['discounts'] ?? null;
        $this->container['sub_total'] = $data['sub_total'] ?? null;
        $this->container['shipping_cost'] = $data['shipping_cost'] ?? null;
        $this->container['coupon_discount'] = $data['coupon_discount'] ?? null;
        $this->container['total_discount'] = $data['total_discount'] ?? null;
        $this->container['total_tax'] = $data['total_tax'] ?? null;
        $this->container['total_amount'] = $data['total_amount'] ?? null;
        $this->container['refunded_amount'] = $data['refunded_amount'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['payment_status'] = $data['payment_status'] ?? null;
        $this->container['fulfillment_status'] = $data['fulfillment_status'] ?? null;
        $this->container['payment_method'] = $data['payment_method'] ?? null;
        $this->container['customer'] = $data['customer'] ?? null;
        $this->container['billing_address'] = $data['billing_address'] ?? null;
        $this->container['shipping_address'] = $data['shipping_address'] ?? null;
        $this->container['tracking'] = $data['tracking'] ?? null;
        $this->container['line_items'] = $data['line_items'] ?? null;
        $this->container['note'] = $data['note'] ?? null;
        $this->container['custom_mappings'] = $data['custom_mappings'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
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
        $allowedValues = $this->getPaymentStatusAllowableValues();
        if (!is_null($this->container['payment_status']) && !in_array($this->container['payment_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'payment_status', must be one of '%s'",
                $this->container['payment_status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFulfillmentStatusAllowableValues();
        if (!is_null($this->container['fulfillment_status']) && !in_array($this->container['fulfillment_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'fulfillment_status', must be one of '%s'",
                $this->container['fulfillment_status'],
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id A unique identifier for an object.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets order_number
     *
     * @return string|null
     */
    public function getOrderNumber()
    {
        return $this->container['order_number'];
    }

    /**
     * Sets order_number
     *
     * @param string|null $order_number Order number, if any.
     *
     * @return self
     */
    public function setOrderNumber($order_number)
    {
        $this->container['order_number'] = $order_number;

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
     * @param string|null $sub_total Sub-total amount, normally before tax.
     *
     * @return self
     */
    public function setSubTotal($sub_total)
    {
        $this->container['sub_total'] = $sub_total;

        return $this;
    }

    /**
     * Gets shipping_cost
     *
     * @return string|null
     */
    public function getShippingCost()
    {
        return $this->container['shipping_cost'];
    }

    /**
     * Sets shipping_cost
     *
     * @param string|null $shipping_cost Shipping cost, if any.
     *
     * @return self
     */
    public function setShippingCost($shipping_cost)
    {
        $this->container['shipping_cost'] = $shipping_cost;

        return $this;
    }

    /**
     * Gets coupon_discount
     *
     * @return string|null
     */
    public function getCouponDiscount()
    {
        return $this->container['coupon_discount'];
    }

    /**
     * Sets coupon_discount
     *
     * @param string|null $coupon_discount Coupon discount, if any.
     *
     * @return self
     */
    public function setCouponDiscount($coupon_discount)
    {
        $this->container['coupon_discount'] = $coupon_discount;

        return $this;
    }

    /**
     * Gets total_discount
     *
     * @return string|null
     */
    public function getTotalDiscount()
    {
        return $this->container['total_discount'];
    }

    /**
     * Sets total_discount
     *
     * @param string|null $total_discount Total discount, if any.
     *
     * @return self
     */
    public function setTotalDiscount($total_discount)
    {
        $this->container['total_discount'] = $total_discount;

        return $this;
    }

    /**
     * Gets total_tax
     *
     * @return string|null
     */
    public function getTotalTax()
    {
        return $this->container['total_tax'];
    }

    /**
     * Sets total_tax
     *
     * @param string|null $total_tax Total tax, if any.
     *
     * @return self
     */
    public function setTotalTax($total_tax)
    {
        $this->container['total_tax'] = $total_tax;

        return $this;
    }

    /**
     * Gets total_amount
     *
     * @return string|null
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param string|null $total_amount Total amount due.
     *
     * @return self
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

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
     * @param string|null $refunded_amount Refunded amount, if any.
     *
     * @return self
     */
    public function setRefundedAmount($refunded_amount)
    {
        $this->container['refunded_amount'] = $refunded_amount;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Apideck\Client\Model\EcommerceOrderStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Apideck\Client\Model\EcommerceOrderStatus|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets payment_status
     *
     * @return string|null
     */
    public function getPaymentStatus()
    {
        return $this->container['payment_status'];
    }

    /**
     * Sets payment_status
     *
     * @param string|null $payment_status Current payment status of the order.
     *
     * @return self
     */
    public function setPaymentStatus($payment_status)
    {
        $allowedValues = $this->getPaymentStatusAllowableValues();
        if (!is_null($payment_status) && !in_array($payment_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'payment_status', must be one of '%s'",
                    $payment_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_status'] = $payment_status;

        return $this;
    }

    /**
     * Gets fulfillment_status
     *
     * @return string|null
     */
    public function getFulfillmentStatus()
    {
        return $this->container['fulfillment_status'];
    }

    /**
     * Sets fulfillment_status
     *
     * @param string|null $fulfillment_status Current fulfillment status of the order.
     *
     * @return self
     */
    public function setFulfillmentStatus($fulfillment_status)
    {
        $allowedValues = $this->getFulfillmentStatusAllowableValues();
        if (!is_null($fulfillment_status) && !in_array($fulfillment_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'fulfillment_status', must be one of '%s'",
                    $fulfillment_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fulfillment_status'] = $fulfillment_status;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return string|null
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param string|null $payment_method Payment method used for this order.
     *
     * @return self
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \Apideck\Client\Model\LinkedEcommerceCustomer|null
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \Apideck\Client\Model\LinkedEcommerceCustomer|null $customer customer
     *
     * @return self
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets billing_address
     *
     * @return \Apideck\Client\Model\EcommerceAddress|null
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \Apideck\Client\Model\EcommerceAddress|null $billing_address billing_address
     *
     * @return self
     */
    public function setBillingAddress($billing_address)
    {
        $this->container['billing_address'] = $billing_address;

        return $this;
    }

    /**
     * Gets shipping_address
     *
     * @return \Apideck\Client\Model\EcommerceAddress|null
     */
    public function getShippingAddress()
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address
     *
     * @param \Apideck\Client\Model\EcommerceAddress|null $shipping_address shipping_address
     *
     * @return self
     */
    public function setShippingAddress($shipping_address)
    {
        $this->container['shipping_address'] = $shipping_address;

        return $this;
    }

    /**
     * Gets tracking
     *
     * @return \Apideck\Client\Model\TrackingItem[]|null
     */
    public function getTracking()
    {
        return $this->container['tracking'];
    }

    /**
     * Sets tracking
     *
     * @param \Apideck\Client\Model\TrackingItem[]|null $tracking tracking
     *
     * @return self
     */
    public function setTracking($tracking)
    {
        $this->container['tracking'] = $tracking;

        return $this;
    }

    /**
     * Gets line_items
     *
     * @return \Apideck\Client\Model\EcommerceOrderLineItem[]|null
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \Apideck\Client\Model\EcommerceOrderLineItem[]|null $line_items line_items
     *
     * @return self
     */
    public function setLineItems($line_items)
    {
        $this->container['line_items'] = $line_items;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string|null $note Note for the order.
     *
     * @return self
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

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


