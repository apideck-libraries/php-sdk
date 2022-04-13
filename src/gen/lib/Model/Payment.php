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
 * The version of the OpenAPI document: 8.20.0
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
        'total_amount' => 'float',
        'transaction_date' => '\DateTime',
        'id' => 'string',
        'currency' => '\Apideck\Client\Model\Currency',
        'currency_rate' => 'float',
        'reference' => 'string',
        'payment_method' => 'string',
        'payment_method_reference' => 'string',
        'accounts_receivable_account_type' => 'string',
        'accounts_receivable_account_id' => 'string',
        'account' => '\Apideck\Client\Model\LinkedLedgerAccount',
        'customer' => '\Apideck\Client\Model\LinkedCustomer',
        'reconciled' => 'bool',
        'status' => 'string',
        'type' => 'string',
        'allocations' => 'object[]',
        'note' => 'string',
        'row_version' => 'string',
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
        'total_amount' => null,
        'transaction_date' => 'date-time',
        'id' => null,
        'currency' => null,
        'currency_rate' => null,
        'reference' => null,
        'payment_method' => null,
        'payment_method_reference' => null,
        'accounts_receivable_account_type' => null,
        'accounts_receivable_account_id' => null,
        'account' => null,
        'customer' => null,
        'reconciled' => null,
        'status' => null,
        'type' => null,
        'allocations' => null,
        'note' => null,
        'row_version' => null,
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
        'total_amount' => 'total_amount',
        'transaction_date' => 'transaction_date',
        'id' => 'id',
        'currency' => 'currency',
        'currency_rate' => 'currency_rate',
        'reference' => 'reference',
        'payment_method' => 'payment_method',
        'payment_method_reference' => 'payment_method_reference',
        'accounts_receivable_account_type' => 'accounts_receivable_account_type',
        'accounts_receivable_account_id' => 'accounts_receivable_account_id',
        'account' => 'account',
        'customer' => 'customer',
        'reconciled' => 'reconciled',
        'status' => 'status',
        'type' => 'type',
        'allocations' => 'allocations',
        'note' => 'note',
        'row_version' => 'row_version',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total_amount' => 'setTotalAmount',
        'transaction_date' => 'setTransactionDate',
        'id' => 'setId',
        'currency' => 'setCurrency',
        'currency_rate' => 'setCurrencyRate',
        'reference' => 'setReference',
        'payment_method' => 'setPaymentMethod',
        'payment_method_reference' => 'setPaymentMethodReference',
        'accounts_receivable_account_type' => 'setAccountsReceivableAccountType',
        'accounts_receivable_account_id' => 'setAccountsReceivableAccountId',
        'account' => 'setAccount',
        'customer' => 'setCustomer',
        'reconciled' => 'setReconciled',
        'status' => 'setStatus',
        'type' => 'setType',
        'allocations' => 'setAllocations',
        'note' => 'setNote',
        'row_version' => 'setRowVersion',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total_amount' => 'getTotalAmount',
        'transaction_date' => 'getTransactionDate',
        'id' => 'getId',
        'currency' => 'getCurrency',
        'currency_rate' => 'getCurrencyRate',
        'reference' => 'getReference',
        'payment_method' => 'getPaymentMethod',
        'payment_method_reference' => 'getPaymentMethodReference',
        'accounts_receivable_account_type' => 'getAccountsReceivableAccountType',
        'accounts_receivable_account_id' => 'getAccountsReceivableAccountId',
        'account' => 'getAccount',
        'customer' => 'getCustomer',
        'reconciled' => 'getReconciled',
        'status' => 'getStatus',
        'type' => 'getType',
        'allocations' => 'getAllocations',
        'note' => 'getNote',
        'row_version' => 'getRowVersion',
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
        $this->container['total_amount'] = $data['total_amount'] ?? null;
        $this->container['transaction_date'] = $data['transaction_date'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['currency_rate'] = $data['currency_rate'] ?? null;
        $this->container['reference'] = $data['reference'] ?? null;
        $this->container['payment_method'] = $data['payment_method'] ?? null;
        $this->container['payment_method_reference'] = $data['payment_method_reference'] ?? null;
        $this->container['accounts_receivable_account_type'] = $data['accounts_receivable_account_type'] ?? null;
        $this->container['accounts_receivable_account_id'] = $data['accounts_receivable_account_id'] ?? null;
        $this->container['account'] = $data['account'] ?? null;
        $this->container['customer'] = $data['customer'] ?? null;
        $this->container['reconciled'] = $data['reconciled'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['allocations'] = $data['allocations'] ?? null;
        $this->container['note'] = $data['note'] ?? null;
        $this->container['row_version'] = $data['row_version'] ?? null;
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
     * @param string|null $id Unique identifier representing the entity
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string|null $payment_method Payment method
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
     * @return object[]|null
     */
    public function getAllocations()
    {
        return $this->container['allocations'];
    }

    /**
     * Sets allocations
     *
     * @param object[]|null $allocations allocations
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
     * @param string|null $row_version row_version
     *
     * @return self
     */
    public function setRowVersion($row_version)
    {
        $this->container['row_version'] = $row_version;

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
     * @param \DateTime|null $created_at created_at
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
     * @param \DateTime|null $updated_at updated_at
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


