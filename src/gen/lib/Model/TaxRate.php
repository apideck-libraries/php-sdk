<?php
/**
 * TaxRate
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
 * The version of the OpenAPI document: 8.63.0
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
 * TaxRate Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TaxRate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TaxRate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'code' => 'string',
        'description' => 'string',
        'effective_tax_rate' => 'float',
        'total_tax_rate' => 'float',
        'tax_payable_account_id' => 'string',
        'tax_remitted_account_id' => 'string',
        'components' => 'object[]',
        'type' => 'string',
        'report_tax_type' => 'string',
        'original_tax_rate_id' => 'string',
        'status' => 'string',
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
        'name' => null,
        'code' => null,
        'description' => null,
        'effective_tax_rate' => null,
        'total_tax_rate' => null,
        'tax_payable_account_id' => null,
        'tax_remitted_account_id' => null,
        'components' => null,
        'type' => null,
        'report_tax_type' => null,
        'original_tax_rate_id' => null,
        'status' => null,
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
        'name' => 'name',
        'code' => 'code',
        'description' => 'description',
        'effective_tax_rate' => 'effective_tax_rate',
        'total_tax_rate' => 'total_tax_rate',
        'tax_payable_account_id' => 'tax_payable_account_id',
        'tax_remitted_account_id' => 'tax_remitted_account_id',
        'components' => 'components',
        'type' => 'type',
        'report_tax_type' => 'report_tax_type',
        'original_tax_rate_id' => 'original_tax_rate_id',
        'status' => 'status',
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
        'name' => 'setName',
        'code' => 'setCode',
        'description' => 'setDescription',
        'effective_tax_rate' => 'setEffectiveTaxRate',
        'total_tax_rate' => 'setTotalTaxRate',
        'tax_payable_account_id' => 'setTaxPayableAccountId',
        'tax_remitted_account_id' => 'setTaxRemittedAccountId',
        'components' => 'setComponents',
        'type' => 'setType',
        'report_tax_type' => 'setReportTaxType',
        'original_tax_rate_id' => 'setOriginalTaxRateId',
        'status' => 'setStatus',
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
        'name' => 'getName',
        'code' => 'getCode',
        'description' => 'getDescription',
        'effective_tax_rate' => 'getEffectiveTaxRate',
        'total_tax_rate' => 'getTotalTaxRate',
        'tax_payable_account_id' => 'getTaxPayableAccountId',
        'tax_remitted_account_id' => 'getTaxRemittedAccountId',
        'components' => 'getComponents',
        'type' => 'getType',
        'report_tax_type' => 'getReportTaxType',
        'original_tax_rate_id' => 'getOriginalTaxRateId',
        'status' => 'getStatus',
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

    const STATUS_ACTIVE = 'active';
    const STATUS_INACTIVE = 'inactive';
    const STATUS_ARCHIVED = 'archived';

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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['code'] = $data['code'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['effective_tax_rate'] = $data['effective_tax_rate'] ?? null;
        $this->container['total_tax_rate'] = $data['total_tax_rate'] ?? null;
        $this->container['tax_payable_account_id'] = $data['tax_payable_account_id'] ?? null;
        $this->container['tax_remitted_account_id'] = $data['tax_remitted_account_id'] ?? null;
        $this->container['components'] = $data['components'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['report_tax_type'] = $data['report_tax_type'] ?? null;
        $this->container['original_tax_rate_id'] = $data['original_tax_rate_id'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
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

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
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
     * @param string|null $id ID assigned to identify this tax rate.
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
     * @param string|null $name Name assigned to identify this tax rate.
     *
     * @return self
     */
    public function setName($name)
    {

        if (!is_null($name) && (mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling TaxRate., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

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
     * @param string|null $code Tax code assigned to identify this tax rate.
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

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
     * @param string|null $description Description of tax rate
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets effective_tax_rate
     *
     * @return float|null
     */
    public function getEffectiveTaxRate()
    {
        return $this->container['effective_tax_rate'];
    }

    /**
     * Sets effective_tax_rate
     *
     * @param float|null $effective_tax_rate Effective tax rate
     *
     * @return self
     */
    public function setEffectiveTaxRate($effective_tax_rate)
    {
        $this->container['effective_tax_rate'] = $effective_tax_rate;

        return $this;
    }

    /**
     * Gets total_tax_rate
     *
     * @return float|null
     */
    public function getTotalTaxRate()
    {
        return $this->container['total_tax_rate'];
    }

    /**
     * Sets total_tax_rate
     *
     * @param float|null $total_tax_rate Not compounded sum of the components of a tax rate
     *
     * @return self
     */
    public function setTotalTaxRate($total_tax_rate)
    {
        $this->container['total_tax_rate'] = $total_tax_rate;

        return $this;
    }

    /**
     * Gets tax_payable_account_id
     *
     * @return string|null
     */
    public function getTaxPayableAccountId()
    {
        return $this->container['tax_payable_account_id'];
    }

    /**
     * Sets tax_payable_account_id
     *
     * @param string|null $tax_payable_account_id Unique identifier for the account for tax collected.
     *
     * @return self
     */
    public function setTaxPayableAccountId($tax_payable_account_id)
    {
        $this->container['tax_payable_account_id'] = $tax_payable_account_id;

        return $this;
    }

    /**
     * Gets tax_remitted_account_id
     *
     * @return string|null
     */
    public function getTaxRemittedAccountId()
    {
        return $this->container['tax_remitted_account_id'];
    }

    /**
     * Sets tax_remitted_account_id
     *
     * @param string|null $tax_remitted_account_id Unique identifier for the account for tax remitted.
     *
     * @return self
     */
    public function setTaxRemittedAccountId($tax_remitted_account_id)
    {
        $this->container['tax_remitted_account_id'] = $tax_remitted_account_id;

        return $this;
    }

    /**
     * Gets components
     *
     * @return object[]|null
     */
    public function getComponents()
    {
        return $this->container['components'];
    }

    /**
     * Sets components
     *
     * @param object[]|null $components components
     *
     * @return self
     */
    public function setComponents($components)
    {
        $this->container['components'] = $components;

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
     * @param string|null $type Tax type used to indicate the source of tax collected or paid
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets report_tax_type
     *
     * @return string|null
     */
    public function getReportTaxType()
    {
        return $this->container['report_tax_type'];
    }

    /**
     * Sets report_tax_type
     *
     * @param string|null $report_tax_type Report Tax type to aggregate tax collected or paid for reporting purposes
     *
     * @return self
     */
    public function setReportTaxType($report_tax_type)
    {
        $this->container['report_tax_type'] = $report_tax_type;

        return $this;
    }

    /**
     * Gets original_tax_rate_id
     *
     * @return string|null
     */
    public function getOriginalTaxRateId()
    {
        return $this->container['original_tax_rate_id'];
    }

    /**
     * Sets original_tax_rate_id
     *
     * @param string|null $original_tax_rate_id ID of the original tax rate from which the new tax rate is derived. Helps to understand the relationship between corresponding tax rate entities.
     *
     * @return self
     */
    public function setOriginalTaxRateId($original_tax_rate_id)
    {
        $this->container['original_tax_rate_id'] = $original_tax_rate_id;

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
     * @param string|null $status Tax rate status
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


