<?php
/**
 * Bill
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
 * The version of the OpenAPI document: 9.0.0
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
 * Bill Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Bill implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Bill';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'downstream_id' => 'string',
        'bill_number' => 'string',
        'supplier' => '\Apideck\Client\Model\LinkedSupplier',
        'currency' => '\Apideck\Client\Model\Currency',
        'currency_rate' => 'float',
        'tax_inclusive' => 'bool',
        'bill_date' => '\DateTime',
        'due_date' => '\DateTime',
        'paid_date' => '\DateTime',
        'po_number' => 'string',
        'reference' => 'string',
        'line_items' => '\Apideck\Client\Model\BillLineItem[]',
        'terms' => 'string',
        'balance' => 'float',
        'deposit' => 'float',
        'sub_total' => 'float',
        'total_tax' => 'float',
        'total' => 'float',
        'tax_code' => 'string',
        'notes' => 'string',
        'status' => 'string',
        'ledger_account' => '\Apideck\Client\Model\LinkedLedgerAccount',
        'updated_by' => 'string',
        'created_by' => 'string',
        'updated_at' => '\DateTime',
        'created_at' => '\DateTime',
        'row_version' => 'string'
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
        'downstream_id' => null,
        'bill_number' => null,
        'supplier' => null,
        'currency' => null,
        'currency_rate' => null,
        'tax_inclusive' => null,
        'bill_date' => 'date',
        'due_date' => 'date',
        'paid_date' => 'date',
        'po_number' => null,
        'reference' => null,
        'line_items' => null,
        'terms' => null,
        'balance' => null,
        'deposit' => null,
        'sub_total' => null,
        'total_tax' => null,
        'total' => null,
        'tax_code' => null,
        'notes' => null,
        'status' => null,
        'ledger_account' => null,
        'updated_by' => null,
        'created_by' => null,
        'updated_at' => 'date-time',
        'created_at' => 'date-time',
        'row_version' => null
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
        'downstream_id' => 'downstream_id',
        'bill_number' => 'bill_number',
        'supplier' => 'supplier',
        'currency' => 'currency',
        'currency_rate' => 'currency_rate',
        'tax_inclusive' => 'tax_inclusive',
        'bill_date' => 'bill_date',
        'due_date' => 'due_date',
        'paid_date' => 'paid_date',
        'po_number' => 'po_number',
        'reference' => 'reference',
        'line_items' => 'line_items',
        'terms' => 'terms',
        'balance' => 'balance',
        'deposit' => 'deposit',
        'sub_total' => 'sub_total',
        'total_tax' => 'total_tax',
        'total' => 'total',
        'tax_code' => 'tax_code',
        'notes' => 'notes',
        'status' => 'status',
        'ledger_account' => 'ledger_account',
        'updated_by' => 'updated_by',
        'created_by' => 'created_by',
        'updated_at' => 'updated_at',
        'created_at' => 'created_at',
        'row_version' => 'row_version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'downstream_id' => 'setDownstreamId',
        'bill_number' => 'setBillNumber',
        'supplier' => 'setSupplier',
        'currency' => 'setCurrency',
        'currency_rate' => 'setCurrencyRate',
        'tax_inclusive' => 'setTaxInclusive',
        'bill_date' => 'setBillDate',
        'due_date' => 'setDueDate',
        'paid_date' => 'setPaidDate',
        'po_number' => 'setPoNumber',
        'reference' => 'setReference',
        'line_items' => 'setLineItems',
        'terms' => 'setTerms',
        'balance' => 'setBalance',
        'deposit' => 'setDeposit',
        'sub_total' => 'setSubTotal',
        'total_tax' => 'setTotalTax',
        'total' => 'setTotal',
        'tax_code' => 'setTaxCode',
        'notes' => 'setNotes',
        'status' => 'setStatus',
        'ledger_account' => 'setLedgerAccount',
        'updated_by' => 'setUpdatedBy',
        'created_by' => 'setCreatedBy',
        'updated_at' => 'setUpdatedAt',
        'created_at' => 'setCreatedAt',
        'row_version' => 'setRowVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'downstream_id' => 'getDownstreamId',
        'bill_number' => 'getBillNumber',
        'supplier' => 'getSupplier',
        'currency' => 'getCurrency',
        'currency_rate' => 'getCurrencyRate',
        'tax_inclusive' => 'getTaxInclusive',
        'bill_date' => 'getBillDate',
        'due_date' => 'getDueDate',
        'paid_date' => 'getPaidDate',
        'po_number' => 'getPoNumber',
        'reference' => 'getReference',
        'line_items' => 'getLineItems',
        'terms' => 'getTerms',
        'balance' => 'getBalance',
        'deposit' => 'getDeposit',
        'sub_total' => 'getSubTotal',
        'total_tax' => 'getTotalTax',
        'total' => 'getTotal',
        'tax_code' => 'getTaxCode',
        'notes' => 'getNotes',
        'status' => 'getStatus',
        'ledger_account' => 'getLedgerAccount',
        'updated_by' => 'getUpdatedBy',
        'created_by' => 'getCreatedBy',
        'updated_at' => 'getUpdatedAt',
        'created_at' => 'getCreatedAt',
        'row_version' => 'getRowVersion'
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

    const STATUS_DRAFT = 'draft';
    const STATUS_SUBMITTED = 'submitted';
    const STATUS_AUTHORISED = 'authorised';
    const STATUS_PARTIALLY_PAID = 'partially_paid';
    const STATUS_PAID = 'paid';
    const STATUS_VOID = 'void';
    const STATUS_CREDIT = 'credit';
    const STATUS_DELETED = 'deleted';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_DRAFT,
            self::STATUS_SUBMITTED,
            self::STATUS_AUTHORISED,
            self::STATUS_PARTIALLY_PAID,
            self::STATUS_PAID,
            self::STATUS_VOID,
            self::STATUS_CREDIT,
            self::STATUS_DELETED,
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
        $this->container['downstream_id'] = $data['downstream_id'] ?? null;
        $this->container['bill_number'] = $data['bill_number'] ?? null;
        $this->container['supplier'] = $data['supplier'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['currency_rate'] = $data['currency_rate'] ?? null;
        $this->container['tax_inclusive'] = $data['tax_inclusive'] ?? null;
        $this->container['bill_date'] = $data['bill_date'] ?? null;
        $this->container['due_date'] = $data['due_date'] ?? null;
        $this->container['paid_date'] = $data['paid_date'] ?? null;
        $this->container['po_number'] = $data['po_number'] ?? null;
        $this->container['reference'] = $data['reference'] ?? null;
        $this->container['line_items'] = $data['line_items'] ?? null;
        $this->container['terms'] = $data['terms'] ?? null;
        $this->container['balance'] = $data['balance'] ?? null;
        $this->container['deposit'] = $data['deposit'] ?? null;
        $this->container['sub_total'] = $data['sub_total'] ?? null;
        $this->container['total_tax'] = $data['total_tax'] ?? null;
        $this->container['total'] = $data['total'] ?? null;
        $this->container['tax_code'] = $data['tax_code'] ?? null;
        $this->container['notes'] = $data['notes'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['ledger_account'] = $data['ledger_account'] ?? null;
        $this->container['updated_by'] = $data['updated_by'] ?? null;
        $this->container['created_by'] = $data['created_by'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['row_version'] = $data['row_version'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets bill_number
     *
     * @return string|null
     */
    public function getBillNumber()
    {
        return $this->container['bill_number'];
    }

    /**
     * Sets bill_number
     *
     * @param string|null $bill_number bill_number
     *
     * @return self
     */
    public function setBillNumber($bill_number)
    {
        $this->container['bill_number'] = $bill_number;

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
     * Gets tax_inclusive
     *
     * @return bool|null
     */
    public function getTaxInclusive()
    {
        return $this->container['tax_inclusive'];
    }

    /**
     * Sets tax_inclusive
     *
     * @param bool|null $tax_inclusive Amounts are including tax
     *
     * @return self
     */
    public function setTaxInclusive($tax_inclusive)
    {
        $this->container['tax_inclusive'] = $tax_inclusive;

        return $this;
    }

    /**
     * Gets bill_date
     *
     * @return \DateTime|null
     */
    public function getBillDate()
    {
        return $this->container['bill_date'];
    }

    /**
     * Sets bill_date
     *
     * @param \DateTime|null $bill_date Date bill was issued - YYYY-MM-DD.
     *
     * @return self
     */
    public function setBillDate($bill_date)
    {
        $this->container['bill_date'] = $bill_date;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return \DateTime|null
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param \DateTime|null $due_date The due date is the date on which a payment is scheduled to be received by the supplier - YYYY-MM-DD.
     *
     * @return self
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets paid_date
     *
     * @return \DateTime|null
     */
    public function getPaidDate()
    {
        return $this->container['paid_date'];
    }

    /**
     * Sets paid_date
     *
     * @param \DateTime|null $paid_date The paid date is the date on which a payment was sent to the supplier - YYYY-MM-DD.
     *
     * @return self
     */
    public function setPaidDate($paid_date)
    {
        $this->container['paid_date'] = $paid_date;

        return $this;
    }

    /**
     * Gets po_number
     *
     * @return string|null
     */
    public function getPoNumber()
    {
        return $this->container['po_number'];
    }

    /**
     * Sets po_number
     *
     * @param string|null $po_number A PO Number uniquely identifies a purchase order and is generally defined by the buyer. The buyer will match the PO number in the invoice to the Purchase Order.
     *
     * @return self
     */
    public function setPoNumber($po_number)
    {
        $this->container['po_number'] = $po_number;

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
     * @param string|null $reference Optional invoice reference.
     *
     * @return self
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets line_items
     *
     * @return \Apideck\Client\Model\BillLineItem[]|null
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \Apideck\Client\Model\BillLineItem[]|null $line_items line_items
     *
     * @return self
     */
    public function setLineItems($line_items)
    {
        $this->container['line_items'] = $line_items;

        return $this;
    }

    /**
     * Gets terms
     *
     * @return string|null
     */
    public function getTerms()
    {
        return $this->container['terms'];
    }

    /**
     * Sets terms
     *
     * @param string|null $terms Terms of payment.
     *
     * @return self
     */
    public function setTerms($terms)
    {
        $this->container['terms'] = $terms;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return float|null
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param float|null $balance Balance of bill due.
     *
     * @return self
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets deposit
     *
     * @return float|null
     */
    public function getDeposit()
    {
        return $this->container['deposit'];
    }

    /**
     * Sets deposit
     *
     * @param float|null $deposit Amount of deposit made to this bill.
     *
     * @return self
     */
    public function setDeposit($deposit)
    {
        $this->container['deposit'] = $deposit;

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
     * Gets total_tax
     *
     * @return float|null
     */
    public function getTotalTax()
    {
        return $this->container['total_tax'];
    }

    /**
     * Sets total_tax
     *
     * @param float|null $total_tax Total tax amount applied to this bill.
     *
     * @return self
     */
    public function setTotalTax($total_tax)
    {
        $this->container['total_tax'] = $total_tax;

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
     * @param float|null $total Total amount of bill, including tax.
     *
     * @return self
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets tax_code
     *
     * @return string|null
     */
    public function getTaxCode()
    {
        return $this->container['tax_code'];
    }

    /**
     * Sets tax_code
     *
     * @param string|null $tax_code Applicable tax id/code override if tax is not supplied on a line item basis.
     *
     * @return self
     */
    public function setTaxCode($tax_code)
    {
        $this->container['tax_code'] = $tax_code;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string|null
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string|null $notes notes
     *
     * @return self
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

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
     * @param string|null $status Invoice status
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
     * Gets ledger_account
     *
     * @return \Apideck\Client\Model\LinkedLedgerAccount|null
     */
    public function getLedgerAccount()
    {
        return $this->container['ledger_account'];
    }

    /**
     * Sets ledger_account
     *
     * @param \Apideck\Client\Model\LinkedLedgerAccount|null $ledger_account ledger_account
     *
     * @return self
     */
    public function setLedgerAccount($ledger_account)
    {
        $this->container['ledger_account'] = $ledger_account;

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


