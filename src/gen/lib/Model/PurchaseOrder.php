<?php
/**
 * PurchaseOrder
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
 * The version of the OpenAPI document: 10.4.2
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
 * PurchaseOrder Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PurchaseOrder implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PurchaseOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'downstream_id' => 'string',
        'po_number' => 'string',
        'reference' => 'string',
        'supplier' => '\Apideck\Client\Model\LinkedSupplier',
        'company_id' => 'string',
        'status' => 'string',
        'issued_date' => '\DateTime',
        'delivery_date' => '\DateTime',
        'expected_arrival_date' => '\DateTime',
        'currency' => '\Apideck\Client\Model\Currency',
        'currency_rate' => 'float',
        'sub_total' => 'float',
        'total_tax' => 'float',
        'total' => 'float',
        'tax_inclusive' => 'bool',
        'line_items' => '\Apideck\Client\Model\InvoiceLineItem[]',
        'shipping_address' => '\Apideck\Client\Model\Address',
        'ledger_account' => '\Apideck\Client\Model\LinkedLedgerAccount',
        'template_id' => 'string',
        'discount_percentage' => 'float',
        'bank_account' => '\Apideck\Client\Model\BankAccount',
        'accounting_by_row' => 'bool',
        'due_date' => '\DateTime',
        'payment_method' => 'string',
        'tax_code' => 'string',
        'channel' => 'string',
        'memo' => 'string',
        'custom_mappings' => 'object',
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
        'po_number' => null,
        'reference' => null,
        'supplier' => null,
        'company_id' => null,
        'status' => null,
        'issued_date' => 'date',
        'delivery_date' => 'date',
        'expected_arrival_date' => 'date',
        'currency' => null,
        'currency_rate' => null,
        'sub_total' => null,
        'total_tax' => null,
        'total' => null,
        'tax_inclusive' => null,
        'line_items' => null,
        'shipping_address' => null,
        'ledger_account' => null,
        'template_id' => null,
        'discount_percentage' => null,
        'bank_account' => null,
        'accounting_by_row' => null,
        'due_date' => 'date',
        'payment_method' => null,
        'tax_code' => null,
        'channel' => null,
        'memo' => null,
        'custom_mappings' => null,
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
        'po_number' => 'po_number',
        'reference' => 'reference',
        'supplier' => 'supplier',
        'company_id' => 'company_id',
        'status' => 'status',
        'issued_date' => 'issued_date',
        'delivery_date' => 'delivery_date',
        'expected_arrival_date' => 'expected_arrival_date',
        'currency' => 'currency',
        'currency_rate' => 'currency_rate',
        'sub_total' => 'sub_total',
        'total_tax' => 'total_tax',
        'total' => 'total',
        'tax_inclusive' => 'tax_inclusive',
        'line_items' => 'line_items',
        'shipping_address' => 'shipping_address',
        'ledger_account' => 'ledger_account',
        'template_id' => 'template_id',
        'discount_percentage' => 'discount_percentage',
        'bank_account' => 'bank_account',
        'accounting_by_row' => 'accounting_by_row',
        'due_date' => 'due_date',
        'payment_method' => 'payment_method',
        'tax_code' => 'tax_code',
        'channel' => 'channel',
        'memo' => 'memo',
        'custom_mappings' => 'custom_mappings',
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
        'po_number' => 'setPoNumber',
        'reference' => 'setReference',
        'supplier' => 'setSupplier',
        'company_id' => 'setCompanyId',
        'status' => 'setStatus',
        'issued_date' => 'setIssuedDate',
        'delivery_date' => 'setDeliveryDate',
        'expected_arrival_date' => 'setExpectedArrivalDate',
        'currency' => 'setCurrency',
        'currency_rate' => 'setCurrencyRate',
        'sub_total' => 'setSubTotal',
        'total_tax' => 'setTotalTax',
        'total' => 'setTotal',
        'tax_inclusive' => 'setTaxInclusive',
        'line_items' => 'setLineItems',
        'shipping_address' => 'setShippingAddress',
        'ledger_account' => 'setLedgerAccount',
        'template_id' => 'setTemplateId',
        'discount_percentage' => 'setDiscountPercentage',
        'bank_account' => 'setBankAccount',
        'accounting_by_row' => 'setAccountingByRow',
        'due_date' => 'setDueDate',
        'payment_method' => 'setPaymentMethod',
        'tax_code' => 'setTaxCode',
        'channel' => 'setChannel',
        'memo' => 'setMemo',
        'custom_mappings' => 'setCustomMappings',
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
        'po_number' => 'getPoNumber',
        'reference' => 'getReference',
        'supplier' => 'getSupplier',
        'company_id' => 'getCompanyId',
        'status' => 'getStatus',
        'issued_date' => 'getIssuedDate',
        'delivery_date' => 'getDeliveryDate',
        'expected_arrival_date' => 'getExpectedArrivalDate',
        'currency' => 'getCurrency',
        'currency_rate' => 'getCurrencyRate',
        'sub_total' => 'getSubTotal',
        'total_tax' => 'getTotalTax',
        'total' => 'getTotal',
        'tax_inclusive' => 'getTaxInclusive',
        'line_items' => 'getLineItems',
        'shipping_address' => 'getShippingAddress',
        'ledger_account' => 'getLedgerAccount',
        'template_id' => 'getTemplateId',
        'discount_percentage' => 'getDiscountPercentage',
        'bank_account' => 'getBankAccount',
        'accounting_by_row' => 'getAccountingByRow',
        'due_date' => 'getDueDate',
        'payment_method' => 'getPaymentMethod',
        'tax_code' => 'getTaxCode',
        'channel' => 'getChannel',
        'memo' => 'getMemo',
        'custom_mappings' => 'getCustomMappings',
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

    const STATUS_DRAFT = 'draft';
    const STATUS_OPEN = 'open';
    const STATUS_CLOSED = 'closed';
    const STATUS_DELETED = 'deleted';
    const STATUS_BILLED = 'billed';
    const STATUS_OTHER = 'other';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_DRAFT,
            self::STATUS_OPEN,
            self::STATUS_CLOSED,
            self::STATUS_DELETED,
            self::STATUS_BILLED,
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['downstream_id'] = $data['downstream_id'] ?? null;
        $this->container['po_number'] = $data['po_number'] ?? null;
        $this->container['reference'] = $data['reference'] ?? null;
        $this->container['supplier'] = $data['supplier'] ?? null;
        $this->container['company_id'] = $data['company_id'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['issued_date'] = $data['issued_date'] ?? null;
        $this->container['delivery_date'] = $data['delivery_date'] ?? null;
        $this->container['expected_arrival_date'] = $data['expected_arrival_date'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['currency_rate'] = $data['currency_rate'] ?? null;
        $this->container['sub_total'] = $data['sub_total'] ?? null;
        $this->container['total_tax'] = $data['total_tax'] ?? null;
        $this->container['total'] = $data['total'] ?? null;
        $this->container['tax_inclusive'] = $data['tax_inclusive'] ?? null;
        $this->container['line_items'] = $data['line_items'] ?? null;
        $this->container['shipping_address'] = $data['shipping_address'] ?? null;
        $this->container['ledger_account'] = $data['ledger_account'] ?? null;
        $this->container['template_id'] = $data['template_id'] ?? null;
        $this->container['discount_percentage'] = $data['discount_percentage'] ?? null;
        $this->container['bank_account'] = $data['bank_account'] ?? null;
        $this->container['accounting_by_row'] = $data['accounting_by_row'] ?? null;
        $this->container['due_date'] = $data['due_date'] ?? null;
        $this->container['payment_method'] = $data['payment_method'] ?? null;
        $this->container['tax_code'] = $data['tax_code'] ?? null;
        $this->container['channel'] = $data['channel'] ?? null;
        $this->container['memo'] = $data['memo'] ?? null;
        $this->container['custom_mappings'] = $data['custom_mappings'] ?? null;
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
     * @param string|null $po_number A PO Number uniquely identifies a purchase order and is generally defined by the buyer.
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
     * @param string|null $reference Optional purchase order reference.
     *
     * @return self
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

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
     * @param string|null $status status
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
     * Gets issued_date
     *
     * @return \DateTime|null
     */
    public function getIssuedDate()
    {
        return $this->container['issued_date'];
    }

    /**
     * Sets issued_date
     *
     * @param \DateTime|null $issued_date Date purchase order was issued - YYYY-MM-DD.
     *
     * @return self
     */
    public function setIssuedDate($issued_date)
    {
        $this->container['issued_date'] = $issued_date;

        return $this;
    }

    /**
     * Gets delivery_date
     *
     * @return \DateTime|null
     */
    public function getDeliveryDate()
    {
        return $this->container['delivery_date'];
    }

    /**
     * Sets delivery_date
     *
     * @param \DateTime|null $delivery_date The date on which the purchase order is to be delivered - YYYY-MM-DD.
     *
     * @return self
     */
    public function setDeliveryDate($delivery_date)
    {
        $this->container['delivery_date'] = $delivery_date;

        return $this;
    }

    /**
     * Gets expected_arrival_date
     *
     * @return \DateTime|null
     */
    public function getExpectedArrivalDate()
    {
        return $this->container['expected_arrival_date'];
    }

    /**
     * Sets expected_arrival_date
     *
     * @param \DateTime|null $expected_arrival_date The date on which the order is expected to arrive - YYYY-MM-DD.
     *
     * @return self
     */
    public function setExpectedArrivalDate($expected_arrival_date)
    {
        $this->container['expected_arrival_date'] = $expected_arrival_date;

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
     * @param float|null $total_tax Total tax amount applied to this invoice.
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
     * @param float|null $total Total amount of invoice, including tax.
     *
     * @return self
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

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
     * @param string|null $template_id Optional purchase order template
     *
     * @return self
     */
    public function setTemplateId($template_id)
    {
        $this->container['template_id'] = $template_id;

        return $this;
    }

    /**
     * Gets discount_percentage
     *
     * @return float|null
     */
    public function getDiscountPercentage()
    {
        return $this->container['discount_percentage'];
    }

    /**
     * Sets discount_percentage
     *
     * @param float|null $discount_percentage Discount percentage applied to this transaction.
     *
     * @return self
     */
    public function setDiscountPercentage($discount_percentage)
    {
        $this->container['discount_percentage'] = $discount_percentage;

        return $this;
    }

    /**
     * Gets bank_account
     *
     * @return \Apideck\Client\Model\BankAccount|null
     */
    public function getBankAccount()
    {
        return $this->container['bank_account'];
    }

    /**
     * Sets bank_account
     *
     * @param \Apideck\Client\Model\BankAccount|null $bank_account bank_account
     *
     * @return self
     */
    public function setBankAccount($bank_account)
    {
        $this->container['bank_account'] = $bank_account;

        return $this;
    }

    /**
     * Gets accounting_by_row
     *
     * @return bool|null
     */
    public function getAccountingByRow()
    {
        return $this->container['accounting_by_row'];
    }

    /**
     * Sets accounting_by_row
     *
     * @param bool|null $accounting_by_row Indicates if accounting by row is used (true) or not (false). Accounting by row means that a separate ledger transaction is created for each row.
     *
     * @return self
     */
    public function setAccountingByRow($accounting_by_row)
    {
        $this->container['accounting_by_row'] = $accounting_by_row;

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
     * @param \DateTime|null $due_date The due date is the date on which a payment is scheduled to be received - YYYY-MM-DD.
     *
     * @return self
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

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
     * @param string|null $payment_method Payment method used for the transaction, such as cash, credit card, bank transfer, or check
     *
     * @return self
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

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
     * Gets channel
     *
     * @return string|null
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     *
     * @param string|null $channel The channel through which the transaction is processed.
     *
     * @return self
     */
    public function setChannel($channel)
    {
        $this->container['channel'] = $channel;

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
     * @param string|null $memo Message for the supplier. This text appears on the Purchase Order.
     *
     * @return self
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

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


