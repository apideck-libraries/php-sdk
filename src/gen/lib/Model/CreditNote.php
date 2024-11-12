<?php
/**
 * CreditNote
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
 * The version of the OpenAPI document: 10.8.1
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
 * CreditNote Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreditNote implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreditNote';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'total_amount' => 'float',
        'number' => 'string',
        'customer' => '\Apideck\Client\Model\LinkedCustomer',
        'company_id' => 'string',
        'currency' => '\Apideck\Client\Model\Currency',
        'currency_rate' => 'float',
        'tax_inclusive' => 'bool',
        'sub_total' => 'float',
        'total_tax' => 'float',
        'tax_code' => 'string',
        'balance' => 'float',
        'remaining_credit' => 'float',
        'status' => 'string',
        'reference' => 'string',
        'date_issued' => '\DateTime',
        'date_paid' => '\DateTime',
        'type' => 'string',
        'account' => '\Apideck\Client\Model\LinkedLedgerAccount',
        'line_items' => '\Apideck\Client\Model\InvoiceLineItem[]',
        'allocations' => '\Apideck\Client\Model\Allocation[]',
        'note' => 'string',
        'terms' => 'string',
        'billing_address' => '\Apideck\Client\Model\Address',
        'shipping_address' => '\Apideck\Client\Model\Address',
        'tracking_categories' => '\Apideck\Client\Model\LinkedTrackingCategory[]',
        'custom_mappings' => 'object',
        'custom_fields' => '\Apideck\Client\Model\CustomField[]',
        'row_version' => 'string',
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
        'id' => null,
        'total_amount' => null,
        'number' => null,
        'customer' => null,
        'company_id' => null,
        'currency' => null,
        'currency_rate' => null,
        'tax_inclusive' => null,
        'sub_total' => null,
        'total_tax' => null,
        'tax_code' => null,
        'balance' => null,
        'remaining_credit' => null,
        'status' => null,
        'reference' => null,
        'date_issued' => 'date-time',
        'date_paid' => 'date-time',
        'type' => null,
        'account' => null,
        'line_items' => null,
        'allocations' => null,
        'note' => null,
        'terms' => null,
        'billing_address' => null,
        'shipping_address' => null,
        'tracking_categories' => null,
        'custom_mappings' => null,
        'custom_fields' => null,
        'row_version' => null,
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
        'id' => 'id',
        'total_amount' => 'total_amount',
        'number' => 'number',
        'customer' => 'customer',
        'company_id' => 'company_id',
        'currency' => 'currency',
        'currency_rate' => 'currency_rate',
        'tax_inclusive' => 'tax_inclusive',
        'sub_total' => 'sub_total',
        'total_tax' => 'total_tax',
        'tax_code' => 'tax_code',
        'balance' => 'balance',
        'remaining_credit' => 'remaining_credit',
        'status' => 'status',
        'reference' => 'reference',
        'date_issued' => 'date_issued',
        'date_paid' => 'date_paid',
        'type' => 'type',
        'account' => 'account',
        'line_items' => 'line_items',
        'allocations' => 'allocations',
        'note' => 'note',
        'terms' => 'terms',
        'billing_address' => 'billing_address',
        'shipping_address' => 'shipping_address',
        'tracking_categories' => 'tracking_categories',
        'custom_mappings' => 'custom_mappings',
        'custom_fields' => 'custom_fields',
        'row_version' => 'row_version',
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
        'id' => 'setId',
        'total_amount' => 'setTotalAmount',
        'number' => 'setNumber',
        'customer' => 'setCustomer',
        'company_id' => 'setCompanyId',
        'currency' => 'setCurrency',
        'currency_rate' => 'setCurrencyRate',
        'tax_inclusive' => 'setTaxInclusive',
        'sub_total' => 'setSubTotal',
        'total_tax' => 'setTotalTax',
        'tax_code' => 'setTaxCode',
        'balance' => 'setBalance',
        'remaining_credit' => 'setRemainingCredit',
        'status' => 'setStatus',
        'reference' => 'setReference',
        'date_issued' => 'setDateIssued',
        'date_paid' => 'setDatePaid',
        'type' => 'setType',
        'account' => 'setAccount',
        'line_items' => 'setLineItems',
        'allocations' => 'setAllocations',
        'note' => 'setNote',
        'terms' => 'setTerms',
        'billing_address' => 'setBillingAddress',
        'shipping_address' => 'setShippingAddress',
        'tracking_categories' => 'setTrackingCategories',
        'custom_mappings' => 'setCustomMappings',
        'custom_fields' => 'setCustomFields',
        'row_version' => 'setRowVersion',
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
        'id' => 'getId',
        'total_amount' => 'getTotalAmount',
        'number' => 'getNumber',
        'customer' => 'getCustomer',
        'company_id' => 'getCompanyId',
        'currency' => 'getCurrency',
        'currency_rate' => 'getCurrencyRate',
        'tax_inclusive' => 'getTaxInclusive',
        'sub_total' => 'getSubTotal',
        'total_tax' => 'getTotalTax',
        'tax_code' => 'getTaxCode',
        'balance' => 'getBalance',
        'remaining_credit' => 'getRemainingCredit',
        'status' => 'getStatus',
        'reference' => 'getReference',
        'date_issued' => 'getDateIssued',
        'date_paid' => 'getDatePaid',
        'type' => 'getType',
        'account' => 'getAccount',
        'line_items' => 'getLineItems',
        'allocations' => 'getAllocations',
        'note' => 'getNote',
        'terms' => 'getTerms',
        'billing_address' => 'getBillingAddress',
        'shipping_address' => 'getShippingAddress',
        'tracking_categories' => 'getTrackingCategories',
        'custom_mappings' => 'getCustomMappings',
        'custom_fields' => 'getCustomFields',
        'row_version' => 'getRowVersion',
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

    const STATUS_DRAFT = 'draft';
    const STATUS_AUTHORISED = 'authorised';
    const STATUS_PAID = 'paid';
    const STATUS_VOIDED = 'voided';
    const STATUS_DELETED = 'deleted';
    const TYPE_RECEIVABLE_CREDIT = 'accounts_receivable_credit';
    const TYPE_PAYABLE_CREDIT = 'accounts_payable_credit';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_DRAFT,
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
            self::TYPE_RECEIVABLE_CREDIT,
            self::TYPE_PAYABLE_CREDIT,
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
        $this->container['number'] = $data['number'] ?? null;
        $this->container['customer'] = $data['customer'] ?? null;
        $this->container['company_id'] = $data['company_id'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['currency_rate'] = $data['currency_rate'] ?? null;
        $this->container['tax_inclusive'] = $data['tax_inclusive'] ?? null;
        $this->container['sub_total'] = $data['sub_total'] ?? null;
        $this->container['total_tax'] = $data['total_tax'] ?? null;
        $this->container['tax_code'] = $data['tax_code'] ?? null;
        $this->container['balance'] = $data['balance'] ?? null;
        $this->container['remaining_credit'] = $data['remaining_credit'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['reference'] = $data['reference'] ?? null;
        $this->container['date_issued'] = $data['date_issued'] ?? null;
        $this->container['date_paid'] = $data['date_paid'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['account'] = $data['account'] ?? null;
        $this->container['line_items'] = $data['line_items'] ?? null;
        $this->container['allocations'] = $data['allocations'] ?? null;
        $this->container['note'] = $data['note'] ?? null;
        $this->container['terms'] = $data['terms'] ?? null;
        $this->container['billing_address'] = $data['billing_address'] ?? null;
        $this->container['shipping_address'] = $data['shipping_address'] ?? null;
        $this->container['tracking_categories'] = $data['tracking_categories'] ?? null;
        $this->container['custom_mappings'] = $data['custom_mappings'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['row_version'] = $data['row_version'] ?? null;
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['total_amount'] === null) {
            $invalidProperties[] = "'total_amount' can't be null";
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
     * @param float $total_amount Amount of transaction
     *
     * @return self
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

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
     * @param string|null $number Credit note number.
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
     * @param float|null $balance The balance reflecting any payments made against the transaction.
     *
     * @return self
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets remaining_credit
     *
     * @return float|null
     */
    public function getRemainingCredit()
    {
        return $this->container['remaining_credit'];
    }

    /**
     * Sets remaining_credit
     *
     * @param float|null $remaining_credit Indicates the total credit amount still available to apply towards the payment.
     *
     * @return self
     */
    public function setRemainingCredit($remaining_credit)
    {
        $this->container['remaining_credit'] = $remaining_credit;

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
     * @param string|null $status Status of credit notes
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
     * @param string|null $reference Optional reference message ie: Debit remittance detail.
     *
     * @return self
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets date_issued
     *
     * @return \DateTime|null
     */
    public function getDateIssued()
    {
        return $this->container['date_issued'];
    }

    /**
     * Sets date_issued
     *
     * @param \DateTime|null $date_issued Date credit note issued - YYYY:MM::DDThh:mm:ss.sTZD
     *
     * @return self
     */
    public function setDateIssued($date_issued)
    {
        $this->container['date_issued'] = $date_issued;

        return $this;
    }

    /**
     * Gets date_paid
     *
     * @return \DateTime|null
     */
    public function getDatePaid()
    {
        return $this->container['date_paid'];
    }

    /**
     * Sets date_paid
     *
     * @param \DateTime|null $date_paid Date credit note paid - YYYY:MM::DDThh:mm:ss.sTZD
     *
     * @return self
     */
    public function setDatePaid($date_paid)
    {
        $this->container['date_paid'] = $date_paid;

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
     * Gets allocations
     *
     * @return \Apideck\Client\Model\Allocation[]|null
     */
    public function getAllocations()
    {
        return $this->container['allocations'];
    }

    /**
     * Sets allocations
     *
     * @param \Apideck\Client\Model\Allocation[]|null $allocations allocations
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
     * @param string|null $note Optional note to be associated with the credit note.
     *
     * @return self
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

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
     * @param string|null $terms Optional terms to be associated with the credit note.
     *
     * @return self
     */
    public function setTerms($terms)
    {
        $this->container['terms'] = $terms;

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
     * Gets tracking_categories
     *
     * @return \Apideck\Client\Model\LinkedTrackingCategory[]|null
     */
    public function getTrackingCategories()
    {
        return $this->container['tracking_categories'];
    }

    /**
     * Sets tracking_categories
     *
     * @param \Apideck\Client\Model\LinkedTrackingCategory[]|null $tracking_categories A list of linked tracking categories.
     *
     * @return self
     */
    public function setTrackingCategories($tracking_categories)
    {
        $this->container['tracking_categories'] = $tracking_categories;

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


