<?php
/**
 * Invoice
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
 * The version of the OpenAPI document: 8.28.1
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
 * Invoice Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Invoice implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Invoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'downstream_id' => 'string',
        'type' => 'string',
        'number' => 'string',
        'customer' => '\Apideck\Client\Model\LinkedCustomer',
        'invoice_date' => '\DateTime',
        'due_date' => '\DateTime',
        'terms' => 'string',
        'po_number' => 'string',
        'reference' => 'string',
        'status' => 'string',
        'invoice_sent' => 'bool',
        'currency' => '\Apideck\Client\Model\Currency',
        'currency_rate' => 'float',
        'tax_inclusive' => 'bool',
        'sub_total' => 'float',
        'total_tax' => 'float',
        'total' => 'float',
        'balance' => 'float',
        'deposit' => 'float',
        'customer_memo' => 'string',
        'line_items' => '\Apideck\Client\Model\InvoiceLineItem[]',
        'billing_address' => '\Apideck\Client\Model\Address',
        'shipping_address' => '\Apideck\Client\Model\Address',
        'template_id' => 'string',
        'row_version' => 'string',
        'updated_by' => 'string',
        'created_by' => 'string',
        'updated_at' => '\DateTime',
        'created_at' => '\DateTime'
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
        'type' => null,
        'number' => null,
        'customer' => null,
        'invoice_date' => 'date',
        'due_date' => 'date',
        'terms' => null,
        'po_number' => null,
        'reference' => null,
        'status' => null,
        'invoice_sent' => null,
        'currency' => null,
        'currency_rate' => null,
        'tax_inclusive' => null,
        'sub_total' => null,
        'total_tax' => null,
        'total' => null,
        'balance' => null,
        'deposit' => null,
        'customer_memo' => null,
        'line_items' => null,
        'billing_address' => null,
        'shipping_address' => null,
        'template_id' => null,
        'row_version' => null,
        'updated_by' => null,
        'created_by' => null,
        'updated_at' => 'date-time',
        'created_at' => 'date-time'
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
        'type' => 'type',
        'number' => 'number',
        'customer' => 'customer',
        'invoice_date' => 'invoice_date',
        'due_date' => 'due_date',
        'terms' => 'terms',
        'po_number' => 'po_number',
        'reference' => 'reference',
        'status' => 'status',
        'invoice_sent' => 'invoice_sent',
        'currency' => 'currency',
        'currency_rate' => 'currency_rate',
        'tax_inclusive' => 'tax_inclusive',
        'sub_total' => 'sub_total',
        'total_tax' => 'total_tax',
        'total' => 'total',
        'balance' => 'balance',
        'deposit' => 'deposit',
        'customer_memo' => 'customer_memo',
        'line_items' => 'line_items',
        'billing_address' => 'billing_address',
        'shipping_address' => 'shipping_address',
        'template_id' => 'template_id',
        'row_version' => 'row_version',
        'updated_by' => 'updated_by',
        'created_by' => 'created_by',
        'updated_at' => 'updated_at',
        'created_at' => 'created_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'downstream_id' => 'setDownstreamId',
        'type' => 'setType',
        'number' => 'setNumber',
        'customer' => 'setCustomer',
        'invoice_date' => 'setInvoiceDate',
        'due_date' => 'setDueDate',
        'terms' => 'setTerms',
        'po_number' => 'setPoNumber',
        'reference' => 'setReference',
        'status' => 'setStatus',
        'invoice_sent' => 'setInvoiceSent',
        'currency' => 'setCurrency',
        'currency_rate' => 'setCurrencyRate',
        'tax_inclusive' => 'setTaxInclusive',
        'sub_total' => 'setSubTotal',
        'total_tax' => 'setTotalTax',
        'total' => 'setTotal',
        'balance' => 'setBalance',
        'deposit' => 'setDeposit',
        'customer_memo' => 'setCustomerMemo',
        'line_items' => 'setLineItems',
        'billing_address' => 'setBillingAddress',
        'shipping_address' => 'setShippingAddress',
        'template_id' => 'setTemplateId',
        'row_version' => 'setRowVersion',
        'updated_by' => 'setUpdatedBy',
        'created_by' => 'setCreatedBy',
        'updated_at' => 'setUpdatedAt',
        'created_at' => 'setCreatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'downstream_id' => 'getDownstreamId',
        'type' => 'getType',
        'number' => 'getNumber',
        'customer' => 'getCustomer',
        'invoice_date' => 'getInvoiceDate',
        'due_date' => 'getDueDate',
        'terms' => 'getTerms',
        'po_number' => 'getPoNumber',
        'reference' => 'getReference',
        'status' => 'getStatus',
        'invoice_sent' => 'getInvoiceSent',
        'currency' => 'getCurrency',
        'currency_rate' => 'getCurrencyRate',
        'tax_inclusive' => 'getTaxInclusive',
        'sub_total' => 'getSubTotal',
        'total_tax' => 'getTotalTax',
        'total' => 'getTotal',
        'balance' => 'getBalance',
        'deposit' => 'getDeposit',
        'customer_memo' => 'getCustomerMemo',
        'line_items' => 'getLineItems',
        'billing_address' => 'getBillingAddress',
        'shipping_address' => 'getShippingAddress',
        'template_id' => 'getTemplateId',
        'row_version' => 'getRowVersion',
        'updated_by' => 'getUpdatedBy',
        'created_by' => 'getCreatedBy',
        'updated_at' => 'getUpdatedAt',
        'created_at' => 'getCreatedAt'
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

    const TYPE_STANDARD = 'standard';
    const TYPE_CREDIT = 'credit';
    const TYPE_SERVICE = 'service';
    const TYPE_PRODUCT = 'product';
    const TYPE_SUPPLIER = 'supplier';
    const TYPE_OTHER = 'other';
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
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_STANDARD,
            self::TYPE_CREDIT,
            self::TYPE_SERVICE,
            self::TYPE_PRODUCT,
            self::TYPE_SUPPLIER,
            self::TYPE_OTHER,
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
        $this->container['type'] = $data['type'] ?? null;
        $this->container['number'] = $data['number'] ?? null;
        $this->container['customer'] = $data['customer'] ?? null;
        $this->container['invoice_date'] = $data['invoice_date'] ?? null;
        $this->container['due_date'] = $data['due_date'] ?? null;
        $this->container['terms'] = $data['terms'] ?? null;
        $this->container['po_number'] = $data['po_number'] ?? null;
        $this->container['reference'] = $data['reference'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['invoice_sent'] = $data['invoice_sent'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['currency_rate'] = $data['currency_rate'] ?? null;
        $this->container['tax_inclusive'] = $data['tax_inclusive'] ?? null;
        $this->container['sub_total'] = $data['sub_total'] ?? null;
        $this->container['total_tax'] = $data['total_tax'] ?? null;
        $this->container['total'] = $data['total'] ?? null;
        $this->container['balance'] = $data['balance'] ?? null;
        $this->container['deposit'] = $data['deposit'] ?? null;
        $this->container['customer_memo'] = $data['customer_memo'] ?? null;
        $this->container['line_items'] = $data['line_items'] ?? null;
        $this->container['billing_address'] = $data['billing_address'] ?? null;
        $this->container['shipping_address'] = $data['shipping_address'] ?? null;
        $this->container['template_id'] = $data['template_id'] ?? null;
        $this->container['row_version'] = $data['row_version'] ?? null;
        $this->container['updated_by'] = $data['updated_by'] ?? null;
        $this->container['created_by'] = $data['created_by'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
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
     * @param string|null $number number
     *
     * @return self
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

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
     * Gets invoice_date
     *
     * @return \DateTime|null
     */
    public function getInvoiceDate()
    {
        return $this->container['invoice_date'];
    }

    /**
     * Sets invoice_date
     *
     * @param \DateTime|null $invoice_date Date invoice was issued - YYYY-MM-DD
     *
     * @return self
     */
    public function setInvoiceDate($invoice_date)
    {
        $this->container['invoice_date'] = $invoice_date;

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
     * @param \DateTime|null $due_date The invoice due date is the date on which a payment or invoice is scheduled to be received by the seller - YYYY-MM-DD
     *
     * @return self
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

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
     * @param string|null $terms Terms of payment
     *
     * @return self
     */
    public function setTerms($terms)
    {
        $this->container['terms'] = $terms;

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
     * Gets invoice_sent
     *
     * @return bool|null
     */
    public function getInvoiceSent()
    {
        return $this->container['invoice_sent'];
    }

    /**
     * Sets invoice_sent
     *
     * @param bool|null $invoice_sent Invoice sent to contact/customer
     *
     * @return self
     */
    public function setInvoiceSent($invoice_sent)
    {
        $this->container['invoice_sent'] = $invoice_sent;

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
     * @param float|null $sub_total sub_total
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
     * @param float|null $total_tax total_tax
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
     * @param float|null $balance balance
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
     * @param float|null $deposit deposit
     *
     * @return self
     */
    public function setDeposit($deposit)
    {
        $this->container['deposit'] = $deposit;

        return $this;
    }

    /**
     * Gets customer_memo
     *
     * @return string|null
     */
    public function getCustomerMemo()
    {
        return $this->container['customer_memo'];
    }

    /**
     * Sets customer_memo
     *
     * @param string|null $customer_memo customer_memo
     *
     * @return self
     */
    public function setCustomerMemo($customer_memo)
    {
        $this->container['customer_memo'] = $customer_memo;

        return $this;
    }

    /**
     * Gets line_items
     *
     * @return \Apideck\Client\Model\InvoiceLineItem[]|null
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \Apideck\Client\Model\InvoiceLineItem[]|null $line_items line_items
     *
     * @return self
     */
    public function setLineItems($line_items)
    {
        $this->container['line_items'] = $line_items;

        return $this;
    }

    /**
     * Gets billing_address
     *
     * @return \Apideck\Client\Model\Address|null
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \Apideck\Client\Model\Address|null $billing_address billing_address
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
     * @return \Apideck\Client\Model\Address|null
     */
    public function getShippingAddress()
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address
     *
     * @param \Apideck\Client\Model\Address|null $shipping_address shipping_address
     *
     * @return self
     */
    public function setShippingAddress($shipping_address)
    {
        $this->container['shipping_address'] = $shipping_address;

        return $this;
    }

    /**
     * Gets template_id
     *
     * @return string|null
     */
    public function getTemplateId()
    {
        return $this->container['template_id'];
    }

    /**
     * Sets template_id
     *
     * @param string|null $template_id Optional invoice template
     *
     * @return self
     */
    public function setTemplateId($template_id)
    {
        $this->container['template_id'] = $template_id;

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
     * @param string|null $updated_by updated_by
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
     * @param string|null $created_by created_by
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


