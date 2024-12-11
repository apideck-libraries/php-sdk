<?php
/**
 * Expense
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
 * Expense Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Expense implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Expense';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'transaction_date' => '\DateTime',
        'account_id' => 'string',
        'line_items' => '\Apideck\Client\Model\ExpenseLineItem[]',
        'id' => 'string',
        'number' => 'string',
        'customer_id' => 'string',
        'supplier_id' => 'string',
        'company_id' => 'string',
        'department_id' => 'string',
        'payment_type' => 'string',
        'currency' => '\Apideck\Client\Model\Currency',
        'currency_rate' => 'float',
        'type' => 'string',
        'memo' => 'string',
        'tax_rate' => '\Apideck\Client\Model\LinkedTaxRate',
        'total_amount' => 'float',
        'custom_fields' => '\Apideck\Client\Model\CustomField[]',
        'custom_mappings' => 'object',
        'updated_at' => '\DateTime',
        'created_at' => '\DateTime',
        'row_version' => 'string',
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
        'transaction_date' => 'date-time',
        'account_id' => null,
        'line_items' => null,
        'id' => null,
        'number' => null,
        'customer_id' => null,
        'supplier_id' => null,
        'company_id' => null,
        'department_id' => null,
        'payment_type' => null,
        'currency' => null,
        'currency_rate' => null,
        'type' => null,
        'memo' => null,
        'tax_rate' => null,
        'total_amount' => null,
        'custom_fields' => null,
        'custom_mappings' => null,
        'updated_at' => 'date-time',
        'created_at' => 'date-time',
        'row_version' => null,
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
        'transaction_date' => 'transaction_date',
        'account_id' => 'account_id',
        'line_items' => 'line_items',
        'id' => 'id',
        'number' => 'number',
        'customer_id' => 'customer_id',
        'supplier_id' => 'supplier_id',
        'company_id' => 'company_id',
        'department_id' => 'department_id',
        'payment_type' => 'payment_type',
        'currency' => 'currency',
        'currency_rate' => 'currency_rate',
        'type' => 'type',
        'memo' => 'memo',
        'tax_rate' => 'tax_rate',
        'total_amount' => 'total_amount',
        'custom_fields' => 'custom_fields',
        'custom_mappings' => 'custom_mappings',
        'updated_at' => 'updated_at',
        'created_at' => 'created_at',
        'row_version' => 'row_version',
        'pass_through' => 'pass_through'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transaction_date' => 'setTransactionDate',
        'account_id' => 'setAccountId',
        'line_items' => 'setLineItems',
        'id' => 'setId',
        'number' => 'setNumber',
        'customer_id' => 'setCustomerId',
        'supplier_id' => 'setSupplierId',
        'company_id' => 'setCompanyId',
        'department_id' => 'setDepartmentId',
        'payment_type' => 'setPaymentType',
        'currency' => 'setCurrency',
        'currency_rate' => 'setCurrencyRate',
        'type' => 'setType',
        'memo' => 'setMemo',
        'tax_rate' => 'setTaxRate',
        'total_amount' => 'setTotalAmount',
        'custom_fields' => 'setCustomFields',
        'custom_mappings' => 'setCustomMappings',
        'updated_at' => 'setUpdatedAt',
        'created_at' => 'setCreatedAt',
        'row_version' => 'setRowVersion',
        'pass_through' => 'setPassThrough'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transaction_date' => 'getTransactionDate',
        'account_id' => 'getAccountId',
        'line_items' => 'getLineItems',
        'id' => 'getId',
        'number' => 'getNumber',
        'customer_id' => 'getCustomerId',
        'supplier_id' => 'getSupplierId',
        'company_id' => 'getCompanyId',
        'department_id' => 'getDepartmentId',
        'payment_type' => 'getPaymentType',
        'currency' => 'getCurrency',
        'currency_rate' => 'getCurrencyRate',
        'type' => 'getType',
        'memo' => 'getMemo',
        'tax_rate' => 'getTaxRate',
        'total_amount' => 'getTotalAmount',
        'custom_fields' => 'getCustomFields',
        'custom_mappings' => 'getCustomMappings',
        'updated_at' => 'getUpdatedAt',
        'created_at' => 'getCreatedAt',
        'row_version' => 'getRowVersion',
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

    const PAYMENT_TYPE_CASH = 'cash';
    const PAYMENT_TYPE_CHECK = 'check';
    const PAYMENT_TYPE_CREDIT_CARD = 'credit_card';
    const TYPE_EXPENSE = 'expense';
    const TYPE_REFUND = 'refund';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentTypeAllowableValues()
    {
        return [
            self::PAYMENT_TYPE_CASH,
            self::PAYMENT_TYPE_CHECK,
            self::PAYMENT_TYPE_CREDIT_CARD,
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
            self::TYPE_EXPENSE,
            self::TYPE_REFUND,
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
        $this->container['transaction_date'] = $data['transaction_date'] ?? null;
        $this->container['account_id'] = $data['account_id'] ?? null;
        $this->container['line_items'] = $data['line_items'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['number'] = $data['number'] ?? null;
        $this->container['customer_id'] = $data['customer_id'] ?? null;
        $this->container['supplier_id'] = $data['supplier_id'] ?? null;
        $this->container['company_id'] = $data['company_id'] ?? null;
        $this->container['department_id'] = $data['department_id'] ?? null;
        $this->container['payment_type'] = $data['payment_type'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['currency_rate'] = $data['currency_rate'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['memo'] = $data['memo'] ?? null;
        $this->container['tax_rate'] = $data['tax_rate'] ?? null;
        $this->container['total_amount'] = $data['total_amount'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['custom_mappings'] = $data['custom_mappings'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['row_version'] = $data['row_version'] ?? null;
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

        if ($this->container['transaction_date'] === null) {
            $invalidProperties[] = "'transaction_date' can't be null";
        }
        if ($this->container['account_id'] === null) {
            $invalidProperties[] = "'account_id' can't be null";
        }
        if ($this->container['line_items'] === null) {
            $invalidProperties[] = "'line_items' can't be null";
        }
        if ((count($this->container['line_items']) < 1)) {
            $invalidProperties[] = "invalid value for 'line_items', number of items must be greater than or equal to 1.";
        }

        $allowedValues = $this->getPaymentTypeAllowableValues();
        if (!is_null($this->container['payment_type']) && !in_array($this->container['payment_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'payment_type', must be one of '%s'",
                $this->container['payment_type'],
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
     * @param \DateTime $transaction_date The date of the transaction - YYYY:MM::DDThh:mm:ss.sTZD
     *
     * @return self
     */
    public function setTransactionDate($transaction_date)
    {
        $this->container['transaction_date'] = $transaction_date;

        return $this;
    }

    /**
     * Gets account_id
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string $account_id The unique identifier for the ledger account that this expense should be credited to.
     *
     * @return self
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets line_items
     *
     * @return \Apideck\Client\Model\ExpenseLineItem[]
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \Apideck\Client\Model\ExpenseLineItem[] $line_items Expense line items linked to this expense.
     *
     * @return self
     */
    public function setLineItems($line_items)
    {


        if ((count($line_items) < 1)) {
            throw new \InvalidArgumentException('invalid length for $line_items when calling Expense., number of items must be greater than or equal to 1.');
        }
        $this->container['line_items'] = $line_items;

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
     * Gets number
     *
     * @return string|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string|null $number Number.
     *
     * @return self
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return string|null
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string|null $customer_id The ID of the customer this entity is linked to. Used for expenses that should be marked as billable to customers.
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets supplier_id
     *
     * @return string|null
     */
    public function getSupplierId()
    {
        return $this->container['supplier_id'];
    }

    /**
     * Sets supplier_id
     *
     * @param string|null $supplier_id The ID of the supplier this entity is linked to.
     *
     * @return self
     */
    public function setSupplierId($supplier_id)
    {
        $this->container['supplier_id'] = $supplier_id;

        return $this;
    }

    /**
     * Gets company_id
     *
     * @return string|null
     */
    public function getCompanyId()
    {
        return $this->container['company_id'];
    }

    /**
     * Sets company_id
     *
     * @param string|null $company_id The company or subsidiary id the transaction belongs to
     *
     * @return self
     */
    public function setCompanyId($company_id)
    {
        $this->container['company_id'] = $company_id;

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
     * @param string|null $department_id The ID of the department this expense is linked to.
     *
     * @return self
     */
    public function setDepartmentId($department_id)
    {
        $this->container['department_id'] = $department_id;

        return $this;
    }

    /**
     * Gets payment_type
     *
     * @return string|null
     */
    public function getPaymentType()
    {
        return $this->container['payment_type'];
    }

    /**
     * Sets payment_type
     *
     * @param string|null $payment_type The type of payment for the expense.
     *
     * @return self
     */
    public function setPaymentType($payment_type)
    {
        $allowedValues = $this->getPaymentTypeAllowableValues();
        if (!is_null($payment_type) && !in_array($payment_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'payment_type', must be one of '%s'",
                    $payment_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_type'] = $payment_type;

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
     * @param string|null $type The type of expense.
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
     * Gets memo
     *
     * @return string|null
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     *
     * @param string|null $memo The memo of the expense.
     *
     * @return self
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

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
     * @param float|null $total_amount The total amount of the expense line item.
     *
     * @return self
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return \Apideck\Client\Model\CustomField[]|null
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param \Apideck\Client\Model\CustomField[]|null $custom_fields custom_fields
     *
     * @return self
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

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


