<?php
/**
 * PosPayment
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
 * The version of the OpenAPI document: 10.9.0
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
 * PosPayment Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PosPayment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PosPayment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'source_id' => 'string',
        'order_id' => 'string',
        'customer_id' => 'string',
        'tender_id' => 'string',
        'amount' => 'float',
        'currency' => '\Apideck\Client\Model\Currency',
        'id' => 'string',
        'merchant_id' => 'string',
        'employee_id' => 'string',
        'location_id' => 'string',
        'device_id' => 'string',
        'external_payment_id' => 'string',
        'idempotency_key' => 'string',
        'tip' => 'float',
        'tax' => 'float',
        'total' => 'float',
        'app_fee' => 'float',
        'change_back_cash_amount' => 'float',
        'approved' => 'float',
        'refunded' => 'float',
        'processing_fees' => 'object[]',
        'source' => 'string',
        'status' => 'string',
        'cash' => '\Apideck\Client\Model\CashDetails',
        'card_details' => '\Apideck\Client\Model\PosPaymentCardDetails',
        'bank_account' => '\Apideck\Client\Model\PosBankAccount',
        'wallet' => '\Apideck\Client\Model\WalletDetails',
        'external_details' => '\Apideck\Client\Model\PosPaymentExternalDetails',
        'service_charges' => '\Apideck\Client\Model\ServiceCharge[]',
        'custom_mappings' => 'object',
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
        'source_id' => null,
        'order_id' => null,
        'customer_id' => null,
        'tender_id' => null,
        'amount' => null,
        'currency' => null,
        'id' => null,
        'merchant_id' => null,
        'employee_id' => null,
        'location_id' => null,
        'device_id' => null,
        'external_payment_id' => null,
        'idempotency_key' => null,
        'tip' => null,
        'tax' => null,
        'total' => null,
        'app_fee' => null,
        'change_back_cash_amount' => null,
        'approved' => null,
        'refunded' => null,
        'processing_fees' => null,
        'source' => null,
        'status' => null,
        'cash' => null,
        'card_details' => null,
        'bank_account' => null,
        'wallet' => null,
        'external_details' => null,
        'service_charges' => null,
        'custom_mappings' => null,
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
        'source_id' => 'source_id',
        'order_id' => 'order_id',
        'customer_id' => 'customer_id',
        'tender_id' => 'tender_id',
        'amount' => 'amount',
        'currency' => 'currency',
        'id' => 'id',
        'merchant_id' => 'merchant_id',
        'employee_id' => 'employee_id',
        'location_id' => 'location_id',
        'device_id' => 'device_id',
        'external_payment_id' => 'external_payment_id',
        'idempotency_key' => 'idempotency_key',
        'tip' => 'tip',
        'tax' => 'tax',
        'total' => 'total',
        'app_fee' => 'app_fee',
        'change_back_cash_amount' => 'change_back_cash_amount',
        'approved' => 'approved',
        'refunded' => 'refunded',
        'processing_fees' => 'processing_fees',
        'source' => 'source',
        'status' => 'status',
        'cash' => 'cash',
        'card_details' => 'card_details',
        'bank_account' => 'bank_account',
        'wallet' => 'wallet',
        'external_details' => 'external_details',
        'service_charges' => 'service_charges',
        'custom_mappings' => 'custom_mappings',
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
        'source_id' => 'setSourceId',
        'order_id' => 'setOrderId',
        'customer_id' => 'setCustomerId',
        'tender_id' => 'setTenderId',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'id' => 'setId',
        'merchant_id' => 'setMerchantId',
        'employee_id' => 'setEmployeeId',
        'location_id' => 'setLocationId',
        'device_id' => 'setDeviceId',
        'external_payment_id' => 'setExternalPaymentId',
        'idempotency_key' => 'setIdempotencyKey',
        'tip' => 'setTip',
        'tax' => 'setTax',
        'total' => 'setTotal',
        'app_fee' => 'setAppFee',
        'change_back_cash_amount' => 'setChangeBackCashAmount',
        'approved' => 'setApproved',
        'refunded' => 'setRefunded',
        'processing_fees' => 'setProcessingFees',
        'source' => 'setSource',
        'status' => 'setStatus',
        'cash' => 'setCash',
        'card_details' => 'setCardDetails',
        'bank_account' => 'setBankAccount',
        'wallet' => 'setWallet',
        'external_details' => 'setExternalDetails',
        'service_charges' => 'setServiceCharges',
        'custom_mappings' => 'setCustomMappings',
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
        'source_id' => 'getSourceId',
        'order_id' => 'getOrderId',
        'customer_id' => 'getCustomerId',
        'tender_id' => 'getTenderId',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'id' => 'getId',
        'merchant_id' => 'getMerchantId',
        'employee_id' => 'getEmployeeId',
        'location_id' => 'getLocationId',
        'device_id' => 'getDeviceId',
        'external_payment_id' => 'getExternalPaymentId',
        'idempotency_key' => 'getIdempotencyKey',
        'tip' => 'getTip',
        'tax' => 'getTax',
        'total' => 'getTotal',
        'app_fee' => 'getAppFee',
        'change_back_cash_amount' => 'getChangeBackCashAmount',
        'approved' => 'getApproved',
        'refunded' => 'getRefunded',
        'processing_fees' => 'getProcessingFees',
        'source' => 'getSource',
        'status' => 'getStatus',
        'cash' => 'getCash',
        'card_details' => 'getCardDetails',
        'bank_account' => 'getBankAccount',
        'wallet' => 'getWallet',
        'external_details' => 'getExternalDetails',
        'service_charges' => 'getServiceCharges',
        'custom_mappings' => 'getCustomMappings',
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

    const SOURCE_CARD = 'card';
    const SOURCE_BANK_ACCOUNT = 'bank_account';
    const SOURCE_WALLET = 'wallet';
    const SOURCE_BNPL = 'bnpl';
    const SOURCE_CASH = 'cash';
    const SOURCE_EXTERNAL = 'external';
    const SOURCE_OTHER = 'other';
    const STATUS_APPROVED = 'approved';
    const STATUS_PENDING = 'pending';
    const STATUS_COMPLETED = 'completed';
    const STATUS_CANCELED = 'canceled';
    const STATUS_FAILED = 'failed';
    const STATUS_OTHER = 'other';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSourceAllowableValues()
    {
        return [
            self::SOURCE_CARD,
            self::SOURCE_BANK_ACCOUNT,
            self::SOURCE_WALLET,
            self::SOURCE_BNPL,
            self::SOURCE_CASH,
            self::SOURCE_EXTERNAL,
            self::SOURCE_OTHER,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_APPROVED,
            self::STATUS_PENDING,
            self::STATUS_COMPLETED,
            self::STATUS_CANCELED,
            self::STATUS_FAILED,
            self::STATUS_OTHER,
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
        $this->container['source_id'] = $data['source_id'] ?? null;
        $this->container['order_id'] = $data['order_id'] ?? null;
        $this->container['customer_id'] = $data['customer_id'] ?? null;
        $this->container['tender_id'] = $data['tender_id'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['merchant_id'] = $data['merchant_id'] ?? null;
        $this->container['employee_id'] = $data['employee_id'] ?? null;
        $this->container['location_id'] = $data['location_id'] ?? null;
        $this->container['device_id'] = $data['device_id'] ?? null;
        $this->container['external_payment_id'] = $data['external_payment_id'] ?? null;
        $this->container['idempotency_key'] = $data['idempotency_key'] ?? null;
        $this->container['tip'] = $data['tip'] ?? null;
        $this->container['tax'] = $data['tax'] ?? null;
        $this->container['total'] = $data['total'] ?? null;
        $this->container['app_fee'] = $data['app_fee'] ?? null;
        $this->container['change_back_cash_amount'] = $data['change_back_cash_amount'] ?? null;
        $this->container['approved'] = $data['approved'] ?? null;
        $this->container['refunded'] = $data['refunded'] ?? null;
        $this->container['processing_fees'] = $data['processing_fees'] ?? null;
        $this->container['source'] = $data['source'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['cash'] = $data['cash'] ?? null;
        $this->container['card_details'] = $data['card_details'] ?? null;
        $this->container['bank_account'] = $data['bank_account'] ?? null;
        $this->container['wallet'] = $data['wallet'] ?? null;
        $this->container['external_details'] = $data['external_details'] ?? null;
        $this->container['service_charges'] = $data['service_charges'] ?? null;
        $this->container['custom_mappings'] = $data['custom_mappings'] ?? null;
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

        if ($this->container['source_id'] === null) {
            $invalidProperties[] = "'source_id' can't be null";
        }
        if ($this->container['order_id'] === null) {
            $invalidProperties[] = "'order_id' can't be null";
        }
        if ($this->container['customer_id'] === null) {
            $invalidProperties[] = "'customer_id' can't be null";
        }
        if ($this->container['tender_id'] === null) {
            $invalidProperties[] = "'tender_id' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if (!is_null($this->container['idempotency_key']) && (mb_strlen($this->container['idempotency_key']) > 45)) {
            $invalidProperties[] = "invalid value for 'idempotency_key', the character length must be smaller than or equal to 45.";
        }

        $allowedValues = $this->getSourceAllowableValues();
        if (!is_null($this->container['source']) && !in_array($this->container['source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'source', must be one of '%s'",
                $this->container['source'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
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
     * Gets source_id
     *
     * @return string
     */
    public function getSourceId()
    {
        return $this->container['source_id'];
    }

    /**
     * Sets source_id
     *
     * @param string $source_id The ID for the source of funds for this payment. Square-only: This can be a payment token (card nonce) generated by the payment form or a card on file made linked to the customer. if recording a payment that the seller received outside of Square, specify either `CASH` or `EXTERNAL`.
     *
     * @return self
     */
    public function setSourceId($source_id)
    {
        $this->container['source_id'] = $source_id;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string $order_id order_id
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string $customer_id customer_id
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets tender_id
     *
     * @return string
     */
    public function getTenderId()
    {
        return $this->container['tender_id'];
    }

    /**
     * Sets tender_id
     *
     * @param string $tender_id tender_id
     *
     * @return self
     */
    public function setTenderId($tender_id)
    {
        $this->container['tender_id'] = $tender_id;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

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
     * Gets merchant_id
     *
     * @return string|null
     */
    public function getMerchantId()
    {
        return $this->container['merchant_id'];
    }

    /**
     * Sets merchant_id
     *
     * @param string|null $merchant_id merchant_id
     *
     * @return self
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets employee_id
     *
     * @return string|null
     */
    public function getEmployeeId()
    {
        return $this->container['employee_id'];
    }

    /**
     * Sets employee_id
     *
     * @param string|null $employee_id employee_id
     *
     * @return self
     */
    public function setEmployeeId($employee_id)
    {
        $this->container['employee_id'] = $employee_id;

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
     * Gets device_id
     *
     * @return string|null
     */
    public function getDeviceId()
    {
        return $this->container['device_id'];
    }

    /**
     * Sets device_id
     *
     * @param string|null $device_id device_id
     *
     * @return self
     */
    public function setDeviceId($device_id)
    {
        $this->container['device_id'] = $device_id;

        return $this;
    }

    /**
     * Gets external_payment_id
     *
     * @return string|null
     */
    public function getExternalPaymentId()
    {
        return $this->container['external_payment_id'];
    }

    /**
     * Sets external_payment_id
     *
     * @param string|null $external_payment_id external_payment_id
     *
     * @return self
     */
    public function setExternalPaymentId($external_payment_id)
    {
        $this->container['external_payment_id'] = $external_payment_id;

        return $this;
    }

    /**
     * Gets idempotency_key
     *
     * @return string|null
     */
    public function getIdempotencyKey()
    {
        return $this->container['idempotency_key'];
    }

    /**
     * Sets idempotency_key
     *
     * @param string|null $idempotency_key A value you specify that uniquely identifies this request among requests you have sent.
     *
     * @return self
     */
    public function setIdempotencyKey($idempotency_key)
    {
        if (!is_null($idempotency_key) && (mb_strlen($idempotency_key) > 45)) {
            throw new \InvalidArgumentException('invalid length for $idempotency_key when calling PosPayment., must be smaller than or equal to 45.');
        }

        $this->container['idempotency_key'] = $idempotency_key;

        return $this;
    }

    /**
     * Gets tip
     *
     * @return float|null
     */
    public function getTip()
    {
        return $this->container['tip'];
    }

    /**
     * Sets tip
     *
     * @param float|null $tip tip
     *
     * @return self
     */
    public function setTip($tip)
    {
        $this->container['tip'] = $tip;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return float|null
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param float|null $tax tax
     *
     * @return self
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets total
     *
     * @return float|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param float|null $total total
     *
     * @return self
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets app_fee
     *
     * @return float|null
     */
    public function getAppFee()
    {
        return $this->container['app_fee'];
    }

    /**
     * Sets app_fee
     *
     * @param float|null $app_fee The amount the developer is taking as a fee for facilitating the payment on behalf of the seller.
     *
     * @return self
     */
    public function setAppFee($app_fee)
    {
        $this->container['app_fee'] = $app_fee;

        return $this;
    }

    /**
     * Gets change_back_cash_amount
     *
     * @return float|null
     */
    public function getChangeBackCashAmount()
    {
        return $this->container['change_back_cash_amount'];
    }

    /**
     * Sets change_back_cash_amount
     *
     * @param float|null $change_back_cash_amount change_back_cash_amount
     *
     * @return self
     */
    public function setChangeBackCashAmount($change_back_cash_amount)
    {
        $this->container['change_back_cash_amount'] = $change_back_cash_amount;

        return $this;
    }

    /**
     * Gets approved
     *
     * @return float|null
     */
    public function getApproved()
    {
        return $this->container['approved'];
    }

    /**
     * Sets approved
     *
     * @param float|null $approved The initial amount of money approved for this payment.
     *
     * @return self
     */
    public function setApproved($approved)
    {
        $this->container['approved'] = $approved;

        return $this;
    }

    /**
     * Gets refunded
     *
     * @return float|null
     */
    public function getRefunded()
    {
        return $this->container['refunded'];
    }

    /**
     * Sets refunded
     *
     * @param float|null $refunded The initial amount of money approved for this payment.
     *
     * @return self
     */
    public function setRefunded($refunded)
    {
        $this->container['refunded'] = $refunded;

        return $this;
    }

    /**
     * Gets processing_fees
     *
     * @return object[]|null
     */
    public function getProcessingFees()
    {
        return $this->container['processing_fees'];
    }

    /**
     * Sets processing_fees
     *
     * @param object[]|null $processing_fees processing_fees
     *
     * @return self
     */
    public function setProcessingFees($processing_fees)
    {
        $this->container['processing_fees'] = $processing_fees;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string|null $source Source of this payment.
     *
     * @return self
     */
    public function setSource($source)
    {
        $allowedValues = $this->getSourceAllowableValues();
        if (!is_null($source) && !in_array($source, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'source', must be one of '%s'",
                    $source,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Status of this payment.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets cash
     *
     * @return \Apideck\Client\Model\CashDetails|null
     */
    public function getCash()
    {
        return $this->container['cash'];
    }

    /**
     * Sets cash
     *
     * @param \Apideck\Client\Model\CashDetails|null $cash cash
     *
     * @return self
     */
    public function setCash($cash)
    {
        $this->container['cash'] = $cash;

        return $this;
    }

    /**
     * Gets card_details
     *
     * @return \Apideck\Client\Model\PosPaymentCardDetails|null
     */
    public function getCardDetails()
    {
        return $this->container['card_details'];
    }

    /**
     * Sets card_details
     *
     * @param \Apideck\Client\Model\PosPaymentCardDetails|null $card_details card_details
     *
     * @return self
     */
    public function setCardDetails($card_details)
    {
        $this->container['card_details'] = $card_details;

        return $this;
    }

    /**
     * Gets bank_account
     *
     * @return \Apideck\Client\Model\PosBankAccount|null
     */
    public function getBankAccount()
    {
        return $this->container['bank_account'];
    }

    /**
     * Sets bank_account
     *
     * @param \Apideck\Client\Model\PosBankAccount|null $bank_account bank_account
     *
     * @return self
     */
    public function setBankAccount($bank_account)
    {
        $this->container['bank_account'] = $bank_account;

        return $this;
    }

    /**
     * Gets wallet
     *
     * @return \Apideck\Client\Model\WalletDetails|null
     */
    public function getWallet()
    {
        return $this->container['wallet'];
    }

    /**
     * Sets wallet
     *
     * @param \Apideck\Client\Model\WalletDetails|null $wallet wallet
     *
     * @return self
     */
    public function setWallet($wallet)
    {
        $this->container['wallet'] = $wallet;

        return $this;
    }

    /**
     * Gets external_details
     *
     * @return \Apideck\Client\Model\PosPaymentExternalDetails|null
     */
    public function getExternalDetails()
    {
        return $this->container['external_details'];
    }

    /**
     * Sets external_details
     *
     * @param \Apideck\Client\Model\PosPaymentExternalDetails|null $external_details external_details
     *
     * @return self
     */
    public function setExternalDetails($external_details)
    {
        $this->container['external_details'] = $external_details;

        return $this;
    }

    /**
     * Gets service_charges
     *
     * @return \Apideck\Client\Model\ServiceCharge[]|null
     */
    public function getServiceCharges()
    {
        return $this->container['service_charges'];
    }

    /**
     * Sets service_charges
     *
     * @param \Apideck\Client\Model\ServiceCharge[]|null $service_charges Optional service charges or gratuity tip applied to the order.
     *
     * @return self
     */
    public function setServiceCharges($service_charges)
    {
        $this->container['service_charges'] = $service_charges;

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


