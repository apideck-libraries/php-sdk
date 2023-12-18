<?php
/**
 * Payment
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
 * The version of the OpenAPI document: 10.1.3
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
 * Payment Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Payment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Payment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'total_amount' => 'float',
        'transaction_date' => '\DateTime',
        'downstream_id' => 'string',
        'currency' => '\Apideck\Client\Model\Currency',
        'currency_rate' => 'float',
        'reference' => 'string',
        'payment_method' => 'string',
        'payment_method_reference' => 'string',
        'payment_method_id' => 'string',
        'accounts_receivable_account_type' => 'string',
        'accounts_receivable_account_id' => 'string',
        'account' => '\Apideck\Client\Model\LinkedLedgerAccount',
        'customer' => '\Apideck\Client\Model\LinkedCustomer',
        'supplier' => '\Apideck\Client\Model\LinkedSupplier',
        'reconciled' => 'bool',
        'status' => 'string',
        'type' => 'string',
        'allocations' => '\Apideck\Client\Model\PaymentAllocations[]',
        'note' => 'string',
        'row_version' => 'string',
        'display_id' => 'string',
        'custom_mappings' => 'object',
        'updated_by' => 'string',
        'created_by' => 'string',
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
        'total_amount' => null,
        'transaction_date' => 'date-time',
        'downstream_id' => null,
        'currency' => null,
        'currency_rate' => null,
        'reference' => null,
        'payment_method' => null,
        'payment_method_reference' => null,
        'payment_method_id' => null,
        'accounts_receivable_account_type' => null,
        'accounts_receivable_account_id' => null,
        'account' => null,
        'customer' => null,
        'supplier' => null,
        'reconciled' => null,
        'status' => null,
        'type' => null,
        'allocations' => null,
        'note' => null,
        'row_version' => null,
        'display_id' => null,
        'custom_mappings' => null,
        'updated_by' => null,
        'created_by' => null,
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
        'total_amount' => 'total_amount',
        'transaction_date' => 'transaction_date',
        'downstream_id' => 'downstream_id',
        'currency' => 'currency',
        'currency_rate' => 'currency_rate',
        'reference' => 'reference',
        'payment_method' => 'payment_method',
        'payment_method_reference' => 'payment_method_reference',
        'payment_method_id' => 'payment_method_id',
        'accounts_receivable_account_type' => 'accounts_receivable_account_type',
        'accounts_receivable_account_id' => 'accounts_receivable_account_id',
        'account' => 'account',
        'customer' => 'customer',
        'supplier' => 'supplier',
        'reconciled' => 'reconciled',
        'status' => 'status',
        'type' => 'type',
        'allocations' => 'allocations',
        'note' => 'note',
        'row_version' => 'row_version',
        'display_id' => 'display_id',
        'custom_mappings' => 'custom_mappings',
        'updated_by' => 'updated_by',
        'created_by' => 'created_by',
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
        'total_amount' => 'setTotalAmount',
        'transaction_date' => 'setTransactionDate',
        'downstream_id' => 'setDownstreamId',
        'currency' => 'setCurrency',
        'currency_rate' => 'setCurrencyRate',
        'reference' => 'setReference',
        'payment_method' => 'setPaymentMethod',
        'payment_method_reference' => 'setPaymentMethodReference',
        'payment_method_id' => 'setPaymentMethodId',
        'accounts_receivable_account_type' => 'setAccountsReceivableAccountType',
        'accounts_receivable_account_id' => 'setAccountsReceivableAccountId',
        'account' => 'setAccount',
        'customer' => 'setCustomer',
        'supplier' => 'setSupplier',
        'reconciled' => 'setReconciled',
        'status' => 'setStatus',
        'type' => 'setType',
        'allocations' => 'setAllocations',
        'note' => 'setNote',
        'row_version' => 'setRowVersion',
        'display_id' => 'setDisplayId',
        'custom_mappings' => 'setCustomMappings',
        'updated_by' => 'setUpdatedBy',
        'created_by' => 'setCreatedBy',
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
        'total_amount' => 'getTotalAmount',
        'transaction_date' => 'getTransactionDate',
        'downstream_id' => 'getDownstreamId',
        'currency' => 'getCurrency',
        'currency_rate' => 'getCurrencyRate',
        'reference' => 'getReference',
        'payment_method' => 'getPaymentMethod',
        'payment_method_reference' => 'getPaymentMethodReference',
        'payment_method_id' => 'getPaymentMethodId',
        'accounts_receivable_account_type' => 'getAccountsReceivableAccountType',
        'accounts_receivable_account_id' => 'getAccountsReceivableAccountId',
        'account' => 'getAccount',
        'customer' => 'getCustomer',
        'supplier' => 'getSupplier',
        'reconciled' => 'getReconciled',
        'status' => 'getStatus',
        'type' => 'getType',
        'allocations' => 'getAllocations',
        'note' => 'getNote',
        'row_version' => 'getRowVersion',
        'display_id' => 'getDisplayId',
        'custom_mappings' => 'getCustomMappings',
        'updated_by' => 'getUpdatedBy',
        'created_by' => 'getCreatedBy',
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

    const STATUS_AUTHORISED = 'authorised';
    const STATUS_PAID = 'paid';
    const STATUS_VOIDED = 'voided';
    const STATUS_DELETED = 'deleted';
    const TYPE_RECEIVABLE = 'accounts_receivable';
    const TYPE_PAYABLE = 'accounts_payable';
    const TYPE_RECEIVABLE_CREDIT = 'accounts_receivable_credit';
    const TYPE_PAYABLE_CREDIT = 'accounts_payable_credit';
    const TYPE_RECEIVABLE_OVERPAYMENT = 'accounts_receivable_overpayment';
    const TYPE_PAYABLE_OVERPAYMENT = 'accounts_payable_overpayment';
    const TYPE_RECEIVABLE_PREPAYMENT = 'accounts_receivable_prepayment';
    const TYPE_PAYABLE_PREPAYMENT = 'accounts_payable_prepayment';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_AUTHORISED,
            self::STATUS_PAID,
            self::STATUS_VOIDED,
            self::STATUS_DELETED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_RECEIVABLE,
            self::TYPE_PAYABLE,
            self::TYPE_RECEIVABLE_CREDIT,
            self::TYPE_PAYABLE_CREDIT,
            self::TYPE_RECEIVABLE_OVERPAYMENT,
            self::TYPE_PAYABLE_OVERPAYMENT,
            self::TYPE_RECEIVABLE_PREPAYMENT,
            self::TYPE_PAYABLE_PREPAYMENT,
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
        $this->container['total_amount'] = $data['total_amount'] ?? null;
        $this->container['transaction_date'] = $data['transaction_date'] ?? null;
        $this->container['downstream_id'] = $data['downstream_id'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['currency_rate'] = $data['currency_rate'] ?? null;
        $this->container['reference'] = $data['reference'] ?? null;
        $this->container['payment_method'] = $data['payment_method'] ?? null;
        $this->container['payment_method_reference'] = $data['payment_method_reference'] ?? null;
        $this->container['payment_method_id'] = $data['payment_method_id'] ?? null;
        $this->container['accounts_receivable_account_type'] = $data['accounts_receivable_account_type'] ?? null;
        $this->container['accounts_receivable_account_id'] = $data['accounts_receivable_account_id'] ?? null;
        $this->container['account'] = $data['account'] ?? null;
        $this->container['customer'] = $data['customer'] ?? null;
        $this->container['supplier'] = $data['supplier'] ?? null;
        $this->container['reconciled'] = $data['reconciled'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['allocations'] = $data['allocations'] ?? null;
        $this->container['note'] = $data['note'] ?? null;
        $this->container['row_version'] = $data['row_version'] ?? null;
        $this->container['display_id'] = $data['display_id'] ?? null;
        $this->container['custom_mappings'] = $data['custom_mappings'] ?? null;
        $this->container['updated_by'] = $data['updated_by'] ?? null;
        $this->container['created_by'] = $data['created_by'] ?? null;
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
        if ($this->container['total_amount'] === null) {
            $invalidProperties[] = "'total_amount' can't be null";
        }
        if ($this->container['transaction_date'] === null) {
            $invalidProperties[] = "'transaction_date' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Unique identifier representing the entity
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets total_amount
     *
     * @return float
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param float $total_amount Amount of payment
     *
     * @return self
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets transaction_date
     *
     * @return \DateTime
     */
    public function getTransactionDate()
    {
        return $this->container['transaction_date'];
    }

    /**
     * Sets transaction_date
     *
     * @param \DateTime $transaction_date Date transaction was entered - YYYY:MM::DDThh:mm:ss.sTZD
     *
     * @return self
     */
    public function setTransactionDate($transaction_date)
    {
        $this->container['transaction_date'] = $transaction_date;

        return $this;
    }

    /**
     * Gets downstream_id
     *
     * @return string|null
     */
    public function getDownstreamId()
    {
        return $this->container['downstream_id'];
    }

    /**
     * Sets downstream_id
     *
     * @param string|null $downstream_id The third-party API ID of original entity
     *
     * @return self
     */
    public function setDownstreamId($downstream_id)
    {
        $this->container['downstream_id'] = $downstream_id;

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
     * Gets currency_rate
     *
     * @return float|null
     */
    public function getCurrencyRate()
    {
        return $this->container['currency_rate'];
    }

    /**
     * Sets currency_rate
     *
     * @param float|null $currency_rate Currency Exchange Rate at the time entity was recorded/generated.
     *
     * @return self
     */
    public function setCurrencyRate($currency_rate)
    {
        $this->container['currency_rate'] = $currency_rate;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference Optional payment reference message ie: Debit remittance detail.
     *
     * @return self
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

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
     * @param string|null $payment_method Payment method name
     *
     * @return self
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets payment_method_reference
     *
     * @return string|null
     */
    public function getPaymentMethodReference()
    {
        return $this->container['payment_method_reference'];
    }

    /**
     * Sets payment_method_reference
     *
     * @param string|null $payment_method_reference Optional reference message returned by payment method on processing
     *
     * @return self
     */
    public function setPaymentMethodReference($payment_method_reference)
    {
        $this->container['payment_method_reference'] = $payment_method_reference;

        return $this;
    }

    /**
     * Gets payment_method_id
     *
     * @return string|null
     */
    public function getPaymentMethodId()
    {
        return $this->container['payment_method_id'];
    }

    /**
     * Sets payment_method_id
     *
     * @param string|null $payment_method_id Unique identifier for the payment method.
     *
     * @return self
     */
    public function setPaymentMethodId($payment_method_id)
    {
        $this->container['payment_method_id'] = $payment_method_id;

        return $this;
    }

    /**
     * Gets accounts_receivable_account_type
     *
     * @return string|null
     * @deprecated
     */
    public function getAccountsReceivableAccountType()
    {
        return $this->container['accounts_receivable_account_type'];
    }

    /**
     * Sets accounts_receivable_account_type
     *
     * @param string|null $accounts_receivable_account_type Type of accounts receivable account.
     *
     * @return self
     * @deprecated
     */
    public function setAccountsReceivableAccountType($accounts_receivable_account_type)
    {
        $this->container['accounts_receivable_account_type'] = $accounts_receivable_account_type;

        return $this;
    }

    /**
     * Gets accounts_receivable_account_id
     *
     * @return string|null
     * @deprecated
     */
    public function getAccountsReceivableAccountId()
    {
        return $this->container['accounts_receivable_account_id'];
    }

    /**
     * Sets accounts_receivable_account_id
     *
     * @param string|null $accounts_receivable_account_id Unique identifier for the account to allocate payment to.
     *
     * @return self
     * @deprecated
     */
    public function setAccountsReceivableAccountId($accounts_receivable_account_id)
    {
        $this->container['accounts_receivable_account_id'] = $accounts_receivable_account_id;

        return $this;
    }

    /**
     * Gets account
     *
     * @return \Apideck\Client\Model\LinkedLedgerAccount|null
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param \Apideck\Client\Model\LinkedLedgerAccount|null $account account
     *
     * @return self
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

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
     * Gets reconciled
     *
     * @return bool|null
     */
    public function getReconciled()
    {
        return $this->container['reconciled'];
    }

    /**
     * Sets reconciled
     *
     * @param bool|null $reconciled Payment has been reconciled
     *
     * @return self
     */
    public function setReconciled($reconciled)
    {
        $this->container['reconciled'] = $reconciled;

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
     * @param string|null $status Status of payment
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
     * @param string|null $type Type of payment
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
     * Gets allocations
     *
     * @return \Apideck\Client\Model\PaymentAllocations[]|null
     */
    public function getAllocations()
    {
        return $this->container['allocations'];
    }

    /**
     * Sets allocations
     *
     * @param \Apideck\Client\Model\PaymentAllocations[]|null $allocations allocations
     *
     * @return self
     */
    public function setAllocations($allocations)
    {
        $this->container['allocations'] = $allocations;

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
     * @param string|null $note Optional note to be associated with the payment.
     *
     * @return self
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

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
     * Gets display_id
     *
     * @return string|null
     */
    public function getDisplayId()
    {
        return $this->container['display_id'];
    }

    /**
     * Sets display_id
     *
     * @param string|null $display_id Payment id to be displayed.
     *
     * @return self
     */
    public function setDisplayId($display_id)
    {
        $this->container['display_id'] = $display_id;

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


