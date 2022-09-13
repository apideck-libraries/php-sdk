<?php
/**
 * OrderTenders
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
 * The version of the OpenAPI document: 8.57.0
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
 * OrderTenders Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OrderTenders implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Order_tenders';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'type' => 'string',
        'note' => 'string',
        'amount' => 'float',
        'percentage' => 'float',
        'currency' => '\Apideck\Client\Model\Currency',
        'total_amount' => 'int',
        'total_tip' => 'int',
        'total_processing_fee' => 'int',
        'total_tax' => 'int',
        'total_discount' => 'int',
        'total_refund' => 'int',
        'total_service_charge' => 'int',
        'buyer_tendered_cash_amount' => 'int',
        'change_back_cash_amount' => 'int',
        'card' => '\Apideck\Client\Model\PaymentCard',
        'card_status' => 'string',
        'card_entry_method' => 'string',
        'payment_id' => 'string',
        'location_id' => 'string',
        'transaction_id' => 'string'
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
        'type' => null,
        'note' => null,
        'amount' => null,
        'percentage' => null,
        'currency' => null,
        'total_amount' => null,
        'total_tip' => null,
        'total_processing_fee' => null,
        'total_tax' => null,
        'total_discount' => null,
        'total_refund' => null,
        'total_service_charge' => null,
        'buyer_tendered_cash_amount' => null,
        'change_back_cash_amount' => null,
        'card' => null,
        'card_status' => null,
        'card_entry_method' => null,
        'payment_id' => null,
        'location_id' => null,
        'transaction_id' => null
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
        'type' => 'type',
        'note' => 'note',
        'amount' => 'amount',
        'percentage' => 'percentage',
        'currency' => 'currency',
        'total_amount' => 'total_amount',
        'total_tip' => 'total_tip',
        'total_processing_fee' => 'total_processing_fee',
        'total_tax' => 'total_tax',
        'total_discount' => 'total_discount',
        'total_refund' => 'total_refund',
        'total_service_charge' => 'total_service_charge',
        'buyer_tendered_cash_amount' => 'buyer_tendered_cash_amount',
        'change_back_cash_amount' => 'change_back_cash_amount',
        'card' => 'card',
        'card_status' => 'card_status',
        'card_entry_method' => 'card_entry_method',
        'payment_id' => 'payment_id',
        'location_id' => 'location_id',
        'transaction_id' => 'transaction_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'type' => 'setType',
        'note' => 'setNote',
        'amount' => 'setAmount',
        'percentage' => 'setPercentage',
        'currency' => 'setCurrency',
        'total_amount' => 'setTotalAmount',
        'total_tip' => 'setTotalTip',
        'total_processing_fee' => 'setTotalProcessingFee',
        'total_tax' => 'setTotalTax',
        'total_discount' => 'setTotalDiscount',
        'total_refund' => 'setTotalRefund',
        'total_service_charge' => 'setTotalServiceCharge',
        'buyer_tendered_cash_amount' => 'setBuyerTenderedCashAmount',
        'change_back_cash_amount' => 'setChangeBackCashAmount',
        'card' => 'setCard',
        'card_status' => 'setCardStatus',
        'card_entry_method' => 'setCardEntryMethod',
        'payment_id' => 'setPaymentId',
        'location_id' => 'setLocationId',
        'transaction_id' => 'setTransactionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'type' => 'getType',
        'note' => 'getNote',
        'amount' => 'getAmount',
        'percentage' => 'getPercentage',
        'currency' => 'getCurrency',
        'total_amount' => 'getTotalAmount',
        'total_tip' => 'getTotalTip',
        'total_processing_fee' => 'getTotalProcessingFee',
        'total_tax' => 'getTotalTax',
        'total_discount' => 'getTotalDiscount',
        'total_refund' => 'getTotalRefund',
        'total_service_charge' => 'getTotalServiceCharge',
        'buyer_tendered_cash_amount' => 'getBuyerTenderedCashAmount',
        'change_back_cash_amount' => 'getChangeBackCashAmount',
        'card' => 'getCard',
        'card_status' => 'getCardStatus',
        'card_entry_method' => 'getCardEntryMethod',
        'payment_id' => 'getPaymentId',
        'location_id' => 'getLocationId',
        'transaction_id' => 'getTransactionId'
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

    const TYPE_CASH = 'cash';
    const TYPE_CARD = 'card';
    const TYPE_OTHER = 'other';
    const CARD_STATUS_AUTHORIZED = 'authorized';
    const CARD_STATUS_CAPTURED = 'captured';
    const CARD_STATUS_FAILED = 'failed';
    const CARD_STATUS_VOIDED = 'voided';
    const CARD_ENTRY_METHOD_EVM = 'evm';
    const CARD_ENTRY_METHOD_SWIPED = 'swiped';
    const CARD_ENTRY_METHOD_KEYED = 'keyed';
    const CARD_ENTRY_METHOD_ON_FILE = 'on-file';
    const CARD_ENTRY_METHOD_CONTACTLESS = 'contactless';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CASH,
            self::TYPE_CARD,
            self::TYPE_OTHER,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCardStatusAllowableValues()
    {
        return [
            self::CARD_STATUS_AUTHORIZED,
            self::CARD_STATUS_CAPTURED,
            self::CARD_STATUS_FAILED,
            self::CARD_STATUS_VOIDED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCardEntryMethodAllowableValues()
    {
        return [
            self::CARD_ENTRY_METHOD_EVM,
            self::CARD_ENTRY_METHOD_SWIPED,
            self::CARD_ENTRY_METHOD_KEYED,
            self::CARD_ENTRY_METHOD_ON_FILE,
            self::CARD_ENTRY_METHOD_CONTACTLESS,
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
        $this->container['type'] = $data['type'] ?? null;
        $this->container['note'] = $data['note'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['percentage'] = $data['percentage'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['total_amount'] = $data['total_amount'] ?? null;
        $this->container['total_tip'] = $data['total_tip'] ?? null;
        $this->container['total_processing_fee'] = $data['total_processing_fee'] ?? null;
        $this->container['total_tax'] = $data['total_tax'] ?? null;
        $this->container['total_discount'] = $data['total_discount'] ?? null;
        $this->container['total_refund'] = $data['total_refund'] ?? null;
        $this->container['total_service_charge'] = $data['total_service_charge'] ?? null;
        $this->container['buyer_tendered_cash_amount'] = $data['buyer_tendered_cash_amount'] ?? null;
        $this->container['change_back_cash_amount'] = $data['change_back_cash_amount'] ?? null;
        $this->container['card'] = $data['card'] ?? null;
        $this->container['card_status'] = $data['card_status'] ?? null;
        $this->container['card_entry_method'] = $data['card_entry_method'] ?? null;
        $this->container['payment_id'] = $data['payment_id'] ?? null;
        $this->container['location_id'] = $data['location_id'] ?? null;
        $this->container['transaction_id'] = $data['transaction_id'] ?? null;
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

        $allowedValues = $this->getCardStatusAllowableValues();
        if (!is_null($this->container['card_status']) && !in_array($this->container['card_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'card_status', must be one of '%s'",
                $this->container['card_status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCardEntryMethodAllowableValues();
        if (!is_null($this->container['card_entry_method']) && !in_array($this->container['card_entry_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'card_entry_method', must be one of '%s'",
                $this->container['card_entry_method'],
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
     * @param string|null $type type
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
     * @param string|null $note note
     *
     * @return self
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets percentage
     *
     * @return float|null
     */
    public function getPercentage()
    {
        return $this->container['percentage'];
    }

    /**
     * Sets percentage
     *
     * @param float|null $percentage percentage
     *
     * @return self
     */
    public function setPercentage($percentage)
    {
        $this->container['percentage'] = $percentage;

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
     * Gets total_tip
     *
     * @return int|null
     */
    public function getTotalTip()
    {
        return $this->container['total_tip'];
    }

    /**
     * Sets total_tip
     *
     * @param int|null $total_tip total_tip
     *
     * @return self
     */
    public function setTotalTip($total_tip)
    {
        $this->container['total_tip'] = $total_tip;

        return $this;
    }

    /**
     * Gets total_processing_fee
     *
     * @return int|null
     */
    public function getTotalProcessingFee()
    {
        return $this->container['total_processing_fee'];
    }

    /**
     * Sets total_processing_fee
     *
     * @param int|null $total_processing_fee total_processing_fee
     *
     * @return self
     */
    public function setTotalProcessingFee($total_processing_fee)
    {
        $this->container['total_processing_fee'] = $total_processing_fee;

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
     * Gets total_refund
     *
     * @return int|null
     */
    public function getTotalRefund()
    {
        return $this->container['total_refund'];
    }

    /**
     * Sets total_refund
     *
     * @param int|null $total_refund total_refund
     *
     * @return self
     */
    public function setTotalRefund($total_refund)
    {
        $this->container['total_refund'] = $total_refund;

        return $this;
    }

    /**
     * Gets total_service_charge
     *
     * @return int|null
     */
    public function getTotalServiceCharge()
    {
        return $this->container['total_service_charge'];
    }

    /**
     * Sets total_service_charge
     *
     * @param int|null $total_service_charge total_service_charge
     *
     * @return self
     */
    public function setTotalServiceCharge($total_service_charge)
    {
        $this->container['total_service_charge'] = $total_service_charge;

        return $this;
    }

    /**
     * Gets buyer_tendered_cash_amount
     *
     * @return int|null
     */
    public function getBuyerTenderedCashAmount()
    {
        return $this->container['buyer_tendered_cash_amount'];
    }

    /**
     * Sets buyer_tendered_cash_amount
     *
     * @param int|null $buyer_tendered_cash_amount The amount (in cents) of cash tendered by the buyer. Only applicable when the tender type is cash.
     *
     * @return self
     */
    public function setBuyerTenderedCashAmount($buyer_tendered_cash_amount)
    {
        $this->container['buyer_tendered_cash_amount'] = $buyer_tendered_cash_amount;

        return $this;
    }

    /**
     * Gets change_back_cash_amount
     *
     * @return int|null
     */
    public function getChangeBackCashAmount()
    {
        return $this->container['change_back_cash_amount'];
    }

    /**
     * Sets change_back_cash_amount
     *
     * @param int|null $change_back_cash_amount The amount (in cents) of cash returned to the buyer. Only applicable when the tender type is cash.
     *
     * @return self
     */
    public function setChangeBackCashAmount($change_back_cash_amount)
    {
        $this->container['change_back_cash_amount'] = $change_back_cash_amount;

        return $this;
    }

    /**
     * Gets card
     *
     * @return \Apideck\Client\Model\PaymentCard|null
     */
    public function getCard()
    {
        return $this->container['card'];
    }

    /**
     * Sets card
     *
     * @param \Apideck\Client\Model\PaymentCard|null $card card
     *
     * @return self
     */
    public function setCard($card)
    {
        $this->container['card'] = $card;

        return $this;
    }

    /**
     * Gets card_status
     *
     * @return string|null
     */
    public function getCardStatus()
    {
        return $this->container['card_status'];
    }

    /**
     * Sets card_status
     *
     * @param string|null $card_status The status of the card. Only applicable when the tender type is card.
     *
     * @return self
     */
    public function setCardStatus($card_status)
    {
        $allowedValues = $this->getCardStatusAllowableValues();
        if (!is_null($card_status) && !in_array($card_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'card_status', must be one of '%s'",
                    $card_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['card_status'] = $card_status;

        return $this;
    }

    /**
     * Gets card_entry_method
     *
     * @return string|null
     */
    public function getCardEntryMethod()
    {
        return $this->container['card_entry_method'];
    }

    /**
     * Sets card_entry_method
     *
     * @param string|null $card_entry_method The entry method of the card. Only applicable when the tender type is card.
     *
     * @return self
     */
    public function setCardEntryMethod($card_entry_method)
    {
        $allowedValues = $this->getCardEntryMethodAllowableValues();
        if (!is_null($card_entry_method) && !in_array($card_entry_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'card_entry_method', must be one of '%s'",
                    $card_entry_method,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['card_entry_method'] = $card_entry_method;

        return $this;
    }

    /**
     * Gets payment_id
     *
     * @return string|null
     */
    public function getPaymentId()
    {
        return $this->container['payment_id'];
    }

    /**
     * Sets payment_id
     *
     * @param string|null $payment_id payment_id
     *
     * @return self
     */
    public function setPaymentId($payment_id)
    {
        $this->container['payment_id'] = $payment_id;

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
     * @param string|null $location_id location_id
     *
     * @return self
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets transaction_id
     *
     * @return string|null
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     *
     * @param string|null $transaction_id transaction_id
     *
     * @return self
     */
    public function setTransactionId($transaction_id)
    {
        $this->container['transaction_id'] = $transaction_id;

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


