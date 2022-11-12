<?php
/**
 * LedgerAccount
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
 * The version of the OpenAPI document: 8.84.0
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
 * LedgerAccount Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LedgerAccount implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LedgerAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'display_id' => 'string',
        'nominal_code' => 'string',
        'code' => 'string',
        'classification' => 'string',
        'type' => 'string',
        'sub_type' => 'string',
        'name' => 'string',
        'fully_qualified_name' => 'string',
        'description' => 'string',
        'opening_balance' => 'float',
        'current_balance' => 'float',
        'currency' => '\Apideck\Client\Model\Currency',
        'tax_type' => 'string',
        'tax_rate' => '\Apideck\Client\Model\LinkedTaxRate',
        'level' => 'float',
        'active' => 'bool',
        'status' => 'string',
        'header' => 'bool',
        'bank_account' => '\Apideck\Client\Model\BankAccount',
        'categories' => '\Apideck\Client\Model\LedgerAccountCategories[]',
        'parent_account' => '\Apideck\Client\Model\LedgerAccountParentAccount',
        'sub_account' => 'bool',
        'sub_accounts' => 'object[]',
        'last_reconciliation_date' => '\DateTime',
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
        'display_id' => null,
        'nominal_code' => null,
        'code' => null,
        'classification' => null,
        'type' => null,
        'sub_type' => null,
        'name' => null,
        'fully_qualified_name' => null,
        'description' => null,
        'opening_balance' => null,
        'current_balance' => null,
        'currency' => null,
        'tax_type' => null,
        'tax_rate' => null,
        'level' => null,
        'active' => null,
        'status' => null,
        'header' => null,
        'bank_account' => null,
        'categories' => null,
        'parent_account' => null,
        'sub_account' => null,
        'sub_accounts' => null,
        'last_reconciliation_date' => 'date',
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
        'display_id' => 'display_id',
        'nominal_code' => 'nominal_code',
        'code' => 'code',
        'classification' => 'classification',
        'type' => 'type',
        'sub_type' => 'sub_type',
        'name' => 'name',
        'fully_qualified_name' => 'fully_qualified_name',
        'description' => 'description',
        'opening_balance' => 'opening_balance',
        'current_balance' => 'current_balance',
        'currency' => 'currency',
        'tax_type' => 'tax_type',
        'tax_rate' => 'tax_rate',
        'level' => 'level',
        'active' => 'active',
        'status' => 'status',
        'header' => 'header',
        'bank_account' => 'bank_account',
        'categories' => 'categories',
        'parent_account' => 'parent_account',
        'sub_account' => 'sub_account',
        'sub_accounts' => 'sub_accounts',
        'last_reconciliation_date' => 'last_reconciliation_date',
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
        'display_id' => 'setDisplayId',
        'nominal_code' => 'setNominalCode',
        'code' => 'setCode',
        'classification' => 'setClassification',
        'type' => 'setType',
        'sub_type' => 'setSubType',
        'name' => 'setName',
        'fully_qualified_name' => 'setFullyQualifiedName',
        'description' => 'setDescription',
        'opening_balance' => 'setOpeningBalance',
        'current_balance' => 'setCurrentBalance',
        'currency' => 'setCurrency',
        'tax_type' => 'setTaxType',
        'tax_rate' => 'setTaxRate',
        'level' => 'setLevel',
        'active' => 'setActive',
        'status' => 'setStatus',
        'header' => 'setHeader',
        'bank_account' => 'setBankAccount',
        'categories' => 'setCategories',
        'parent_account' => 'setParentAccount',
        'sub_account' => 'setSubAccount',
        'sub_accounts' => 'setSubAccounts',
        'last_reconciliation_date' => 'setLastReconciliationDate',
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
        'display_id' => 'getDisplayId',
        'nominal_code' => 'getNominalCode',
        'code' => 'getCode',
        'classification' => 'getClassification',
        'type' => 'getType',
        'sub_type' => 'getSubType',
        'name' => 'getName',
        'fully_qualified_name' => 'getFullyQualifiedName',
        'description' => 'getDescription',
        'opening_balance' => 'getOpeningBalance',
        'current_balance' => 'getCurrentBalance',
        'currency' => 'getCurrency',
        'tax_type' => 'getTaxType',
        'tax_rate' => 'getTaxRate',
        'level' => 'getLevel',
        'active' => 'getActive',
        'status' => 'getStatus',
        'header' => 'getHeader',
        'bank_account' => 'getBankAccount',
        'categories' => 'getCategories',
        'parent_account' => 'getParentAccount',
        'sub_account' => 'getSubAccount',
        'sub_accounts' => 'getSubAccounts',
        'last_reconciliation_date' => 'getLastReconciliationDate',
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

    const CLASSIFICATION_ASSET = 'asset';
    const CLASSIFICATION_EQUITY = 'equity';
    const CLASSIFICATION_EXPENSE = 'expense';
    const CLASSIFICATION_LIABILITY = 'liability';
    const CLASSIFICATION_REVENUE = 'revenue';
    const CLASSIFICATION_INCOME = 'income';
    const CLASSIFICATION_OTHER_INCOME = 'other_income';
    const CLASSIFICATION_OTHER_EXPENSE = 'other_expense';
    const CLASSIFICATION_COSTS_OF_SALES = 'costs_of_sales';
    const TYPE_ACCOUNTS_RECEIVABLE = 'accounts_receivable';
    const TYPE_REVENUE = 'revenue';
    const TYPE_SALES = 'sales';
    const TYPE_OTHER_INCOME = 'other_income';
    const TYPE_BANK = 'bank';
    const TYPE_CURRENT_ASSET = 'current_asset';
    const TYPE_FIXED_ASSET = 'fixed_asset';
    const TYPE_NON_CURRENT_ASSET = 'non_current_asset';
    const TYPE_OTHER_ASSET = 'other_asset';
    const TYPE_BALANCESHEET = 'balancesheet';
    const TYPE_EQUITY = 'equity';
    const TYPE_EXPENSE = 'expense';
    const TYPE_OTHER_EXPENSE = 'other_expense';
    const TYPE_COSTS_OF_SALES = 'costs_of_sales';
    const TYPE_ACCOUNTS_PAYABLE = 'accounts_payable';
    const TYPE_CREDIT_CARD = 'credit_card';
    const TYPE_CURRENT_LIABILITY = 'current_liability';
    const TYPE_NON_CURRENT_LIABILITY = 'non_current_liability';
    const TYPE_OTHER_LIABILITY = 'other_liability';
    const STATUS_ACTIVE = 'active';
    const STATUS_INACTIVE = 'inactive';
    const STATUS_ARCHIVED = 'archived';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getClassificationAllowableValues()
    {
        return [
            self::CLASSIFICATION_ASSET,
            self::CLASSIFICATION_EQUITY,
            self::CLASSIFICATION_EXPENSE,
            self::CLASSIFICATION_LIABILITY,
            self::CLASSIFICATION_REVENUE,
            self::CLASSIFICATION_INCOME,
            self::CLASSIFICATION_OTHER_INCOME,
            self::CLASSIFICATION_OTHER_EXPENSE,
            self::CLASSIFICATION_COSTS_OF_SALES,
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
            self::TYPE_ACCOUNTS_RECEIVABLE,
            self::TYPE_REVENUE,
            self::TYPE_SALES,
            self::TYPE_OTHER_INCOME,
            self::TYPE_BANK,
            self::TYPE_CURRENT_ASSET,
            self::TYPE_FIXED_ASSET,
            self::TYPE_NON_CURRENT_ASSET,
            self::TYPE_OTHER_ASSET,
            self::TYPE_BALANCESHEET,
            self::TYPE_EQUITY,
            self::TYPE_EXPENSE,
            self::TYPE_OTHER_EXPENSE,
            self::TYPE_COSTS_OF_SALES,
            self::TYPE_ACCOUNTS_PAYABLE,
            self::TYPE_CREDIT_CARD,
            self::TYPE_CURRENT_LIABILITY,
            self::TYPE_NON_CURRENT_LIABILITY,
            self::TYPE_OTHER_LIABILITY,
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
            self::STATUS_ACTIVE,
            self::STATUS_INACTIVE,
            self::STATUS_ARCHIVED,
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
        $this->container['display_id'] = $data['display_id'] ?? null;
        $this->container['nominal_code'] = $data['nominal_code'] ?? null;
        $this->container['code'] = $data['code'] ?? null;
        $this->container['classification'] = $data['classification'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['sub_type'] = $data['sub_type'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['fully_qualified_name'] = $data['fully_qualified_name'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['opening_balance'] = $data['opening_balance'] ?? null;
        $this->container['current_balance'] = $data['current_balance'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['tax_type'] = $data['tax_type'] ?? null;
        $this->container['tax_rate'] = $data['tax_rate'] ?? null;
        $this->container['level'] = $data['level'] ?? null;
        $this->container['active'] = $data['active'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['header'] = $data['header'] ?? null;
        $this->container['bank_account'] = $data['bank_account'] ?? null;
        $this->container['categories'] = $data['categories'] ?? null;
        $this->container['parent_account'] = $data['parent_account'] ?? null;
        $this->container['sub_account'] = $data['sub_account'] ?? null;
        $this->container['sub_accounts'] = $data['sub_accounts'] ?? null;
        $this->container['last_reconciliation_date'] = $data['last_reconciliation_date'] ?? null;
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

        $allowedValues = $this->getClassificationAllowableValues();
        if (!is_null($this->container['classification']) && !in_array($this->container['classification'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'classification', must be one of '%s'",
                $this->container['classification'],
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
     * @param string|null $display_id The human readable display ID used when displaying the account
     *
     * @return self
     */
    public function setDisplayId($display_id)
    {
        $this->container['display_id'] = $display_id;

        return $this;
    }

    /**
     * Gets nominal_code
     *
     * @return string|null
     * @deprecated
     */
    public function getNominalCode()
    {
        return $this->container['nominal_code'];
    }

    /**
     * Sets nominal_code
     *
     * @param string|null $nominal_code The nominal code of the ledger account.
     *
     * @return self
     * @deprecated
     */
    public function setNominalCode($nominal_code)
    {
        $this->container['nominal_code'] = $nominal_code;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code The code assigned to the account.
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets classification
     *
     * @return string|null
     */
    public function getClassification()
    {
        return $this->container['classification'];
    }

    /**
     * Sets classification
     *
     * @param string|null $classification The classification of account.
     *
     * @return self
     */
    public function setClassification($classification)
    {
        $allowedValues = $this->getClassificationAllowableValues();
        if (!is_null($classification) && !in_array($classification, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'classification', must be one of '%s'",
                    $classification,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['classification'] = $classification;

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
     * @param string|null $type The type of account.
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
     * Gets sub_type
     *
     * @return string|null
     */
    public function getSubType()
    {
        return $this->container['sub_type'];
    }

    /**
     * Sets sub_type
     *
     * @param string|null $sub_type The sub type of account.
     *
     * @return self
     */
    public function setSubType($sub_type)
    {
        $this->container['sub_type'] = $sub_type;

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
     * @param string|null $name The name of the account.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets fully_qualified_name
     *
     * @return string|null
     */
    public function getFullyQualifiedName()
    {
        return $this->container['fully_qualified_name'];
    }

    /**
     * Sets fully_qualified_name
     *
     * @param string|null $fully_qualified_name The fully qualified name of the account.
     *
     * @return self
     */
    public function setFullyQualifiedName($fully_qualified_name)
    {
        $this->container['fully_qualified_name'] = $fully_qualified_name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description The description of the account.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets opening_balance
     *
     * @return float|null
     */
    public function getOpeningBalance()
    {
        return $this->container['opening_balance'];
    }

    /**
     * Sets opening_balance
     *
     * @param float|null $opening_balance The opening balance of the account.
     *
     * @return self
     */
    public function setOpeningBalance($opening_balance)
    {
        $this->container['opening_balance'] = $opening_balance;

        return $this;
    }

    /**
     * Gets current_balance
     *
     * @return float|null
     */
    public function getCurrentBalance()
    {
        return $this->container['current_balance'];
    }

    /**
     * Sets current_balance
     *
     * @param float|null $current_balance The current balance of the account.
     *
     * @return self
     */
    public function setCurrentBalance($current_balance)
    {
        $this->container['current_balance'] = $current_balance;

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
     * Gets tax_type
     *
     * @return string|null
     */
    public function getTaxType()
    {
        return $this->container['tax_type'];
    }

    /**
     * Sets tax_type
     *
     * @param string|null $tax_type The tax type of the account.
     *
     * @return self
     */
    public function setTaxType($tax_type)
    {
        $this->container['tax_type'] = $tax_type;

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
     * Gets level
     *
     * @return float|null
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     *
     * @param float|null $level level
     *
     * @return self
     */
    public function setLevel($level)
    {
        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active Whether the account is active or not.
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

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
     * @param string|null $status The status of the account.
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
     * Gets header
     *
     * @return bool|null
     */
    public function getHeader()
    {
        return $this->container['header'];
    }

    /**
     * Sets header
     *
     * @param bool|null $header Whether the account is a header or not.
     *
     * @return self
     */
    public function setHeader($header)
    {
        $this->container['header'] = $header;

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
     * Gets categories
     *
     * @return \Apideck\Client\Model\LedgerAccountCategories[]|null
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param \Apideck\Client\Model\LedgerAccountCategories[]|null $categories The categories of the account.
     *
     * @return self
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets parent_account
     *
     * @return \Apideck\Client\Model\LedgerAccountParentAccount|null
     */
    public function getParentAccount()
    {
        return $this->container['parent_account'];
    }

    /**
     * Sets parent_account
     *
     * @param \Apideck\Client\Model\LedgerAccountParentAccount|null $parent_account parent_account
     *
     * @return self
     */
    public function setParentAccount($parent_account)
    {
        $this->container['parent_account'] = $parent_account;

        return $this;
    }

    /**
     * Gets sub_account
     *
     * @return bool|null
     */
    public function getSubAccount()
    {
        return $this->container['sub_account'];
    }

    /**
     * Sets sub_account
     *
     * @param bool|null $sub_account Whether the account is a sub account or not.
     *
     * @return self
     */
    public function setSubAccount($sub_account)
    {
        $this->container['sub_account'] = $sub_account;

        return $this;
    }

    /**
     * Gets sub_accounts
     *
     * @return object[]|null
     */
    public function getSubAccounts()
    {
        return $this->container['sub_accounts'];
    }

    /**
     * Sets sub_accounts
     *
     * @param object[]|null $sub_accounts The sub accounts of the account.
     *
     * @return self
     */
    public function setSubAccounts($sub_accounts)
    {
        $this->container['sub_accounts'] = $sub_accounts;

        return $this;
    }

    /**
     * Gets last_reconciliation_date
     *
     * @return \DateTime|null
     */
    public function getLastReconciliationDate()
    {
        return $this->container['last_reconciliation_date'];
    }

    /**
     * Sets last_reconciliation_date
     *
     * @param \DateTime|null $last_reconciliation_date Reconciliation Date means the last calendar day of each Reconciliation Period.
     *
     * @return self
     */
    public function setLastReconciliationDate($last_reconciliation_date)
    {
        $this->container['last_reconciliation_date'] = $last_reconciliation_date;

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


