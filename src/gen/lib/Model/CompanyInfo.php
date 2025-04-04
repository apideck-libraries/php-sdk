<?php
/**
 * CompanyInfo
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
 * The version of the OpenAPI document: 10.14.1
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
 * CompanyInfo Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CompanyInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CompanyInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'company_name' => 'string',
        'status' => 'string',
        'legal_name' => 'string',
        'country' => 'string',
        'sales_tax_number' => 'string',
        'automated_sales_tax' => 'bool',
        'sales_tax_enabled' => 'bool',
        'default_sales_tax' => '\Apideck\Client\Model\TaxRate',
        'currency' => '\Apideck\Client\Model\Currency',
        'language' => 'string',
        'fiscal_year_start_month' => 'string',
        'company_start_date' => '\DateTime',
        'addresses' => '\Apideck\Client\Model\Address[]',
        'phone_numbers' => '\Apideck\Client\Model\PhoneNumber[]',
        'emails' => '\Apideck\Client\Model\Email[]',
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
        'company_name' => null,
        'status' => null,
        'legal_name' => null,
        'country' => null,
        'sales_tax_number' => null,
        'automated_sales_tax' => null,
        'sales_tax_enabled' => null,
        'default_sales_tax' => null,
        'currency' => null,
        'language' => null,
        'fiscal_year_start_month' => null,
        'company_start_date' => 'date',
        'addresses' => null,
        'phone_numbers' => null,
        'emails' => null,
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
        'company_name' => 'company_name',
        'status' => 'status',
        'legal_name' => 'legal_name',
        'country' => 'country',
        'sales_tax_number' => 'sales_tax_number',
        'automated_sales_tax' => 'automated_sales_tax',
        'sales_tax_enabled' => 'sales_tax_enabled',
        'default_sales_tax' => 'default_sales_tax',
        'currency' => 'currency',
        'language' => 'language',
        'fiscal_year_start_month' => 'fiscal_year_start_month',
        'company_start_date' => 'company_start_date',
        'addresses' => 'addresses',
        'phone_numbers' => 'phone_numbers',
        'emails' => 'emails',
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
        'company_name' => 'setCompanyName',
        'status' => 'setStatus',
        'legal_name' => 'setLegalName',
        'country' => 'setCountry',
        'sales_tax_number' => 'setSalesTaxNumber',
        'automated_sales_tax' => 'setAutomatedSalesTax',
        'sales_tax_enabled' => 'setSalesTaxEnabled',
        'default_sales_tax' => 'setDefaultSalesTax',
        'currency' => 'setCurrency',
        'language' => 'setLanguage',
        'fiscal_year_start_month' => 'setFiscalYearStartMonth',
        'company_start_date' => 'setCompanyStartDate',
        'addresses' => 'setAddresses',
        'phone_numbers' => 'setPhoneNumbers',
        'emails' => 'setEmails',
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
        'company_name' => 'getCompanyName',
        'status' => 'getStatus',
        'legal_name' => 'getLegalName',
        'country' => 'getCountry',
        'sales_tax_number' => 'getSalesTaxNumber',
        'automated_sales_tax' => 'getAutomatedSalesTax',
        'sales_tax_enabled' => 'getSalesTaxEnabled',
        'default_sales_tax' => 'getDefaultSalesTax',
        'currency' => 'getCurrency',
        'language' => 'getLanguage',
        'fiscal_year_start_month' => 'getFiscalYearStartMonth',
        'company_start_date' => 'getCompanyStartDate',
        'addresses' => 'getAddresses',
        'phone_numbers' => 'getPhoneNumbers',
        'emails' => 'getEmails',
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

    const STATUS_ACTIVE = 'active';
    const STATUS_INACTIVE = 'inactive';
    const FISCAL_YEAR_START_MONTH_JANUARY = 'January';
    const FISCAL_YEAR_START_MONTH_FEBRUARY = 'February';
    const FISCAL_YEAR_START_MONTH_MARCH = 'March';
    const FISCAL_YEAR_START_MONTH_APRIL = 'April';
    const FISCAL_YEAR_START_MONTH_MAY = 'May';
    const FISCAL_YEAR_START_MONTH_JUNE = 'June';
    const FISCAL_YEAR_START_MONTH_JULY = 'July';
    const FISCAL_YEAR_START_MONTH_AUGUST = 'August';
    const FISCAL_YEAR_START_MONTH_SEPTEMBER = 'September';
    const FISCAL_YEAR_START_MONTH_OCTOBER = 'October';
    const FISCAL_YEAR_START_MONTH_NOVEMBER = 'November';
    const FISCAL_YEAR_START_MONTH_DECEMBER = 'December';

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
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFiscalYearStartMonthAllowableValues()
    {
        return [
            self::FISCAL_YEAR_START_MONTH_JANUARY,
            self::FISCAL_YEAR_START_MONTH_FEBRUARY,
            self::FISCAL_YEAR_START_MONTH_MARCH,
            self::FISCAL_YEAR_START_MONTH_APRIL,
            self::FISCAL_YEAR_START_MONTH_MAY,
            self::FISCAL_YEAR_START_MONTH_JUNE,
            self::FISCAL_YEAR_START_MONTH_JULY,
            self::FISCAL_YEAR_START_MONTH_AUGUST,
            self::FISCAL_YEAR_START_MONTH_SEPTEMBER,
            self::FISCAL_YEAR_START_MONTH_OCTOBER,
            self::FISCAL_YEAR_START_MONTH_NOVEMBER,
            self::FISCAL_YEAR_START_MONTH_DECEMBER,
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
        $this->container['company_name'] = $data['company_name'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['legal_name'] = $data['legal_name'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['sales_tax_number'] = $data['sales_tax_number'] ?? null;
        $this->container['automated_sales_tax'] = $data['automated_sales_tax'] ?? null;
        $this->container['sales_tax_enabled'] = $data['sales_tax_enabled'] ?? null;
        $this->container['default_sales_tax'] = $data['default_sales_tax'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['language'] = $data['language'] ?? null;
        $this->container['fiscal_year_start_month'] = $data['fiscal_year_start_month'] ?? null;
        $this->container['company_start_date'] = $data['company_start_date'] ?? null;
        $this->container['addresses'] = $data['addresses'] ?? null;
        $this->container['phone_numbers'] = $data['phone_numbers'] ?? null;
        $this->container['emails'] = $data['emails'] ?? null;
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

        $allowedValues = $this->getFiscalYearStartMonthAllowableValues();
        if (!is_null($this->container['fiscal_year_start_month']) && !in_array($this->container['fiscal_year_start_month'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'fiscal_year_start_month', must be one of '%s'",
                $this->container['fiscal_year_start_month'],
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
     * Gets company_name
     *
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string|null $company_name The name of the company.
     *
     * @return self
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

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
     * @param string|null $status Based on the status some functionality is enabled or disabled.
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
     * Gets legal_name
     *
     * @return string|null
     */
    public function getLegalName()
    {
        return $this->container['legal_name'];
    }

    /**
     * Sets legal_name
     *
     * @param string|null $legal_name The legal name of the company
     *
     * @return self
     */
    public function setLegalName($legal_name)
    {
        $this->container['legal_name'] = $legal_name;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country country code according to ISO 3166-1 alpha-2.
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets sales_tax_number
     *
     * @return string|null
     */
    public function getSalesTaxNumber()
    {
        return $this->container['sales_tax_number'];
    }

    /**
     * Sets sales_tax_number
     *
     * @param string|null $sales_tax_number sales_tax_number
     *
     * @return self
     */
    public function setSalesTaxNumber($sales_tax_number)
    {
        $this->container['sales_tax_number'] = $sales_tax_number;

        return $this;
    }

    /**
     * Gets automated_sales_tax
     *
     * @return bool|null
     */
    public function getAutomatedSalesTax()
    {
        return $this->container['automated_sales_tax'];
    }

    /**
     * Sets automated_sales_tax
     *
     * @param bool|null $automated_sales_tax Whether sales tax is calculated automatically for the company
     *
     * @return self
     */
    public function setAutomatedSalesTax($automated_sales_tax)
    {
        $this->container['automated_sales_tax'] = $automated_sales_tax;

        return $this;
    }

    /**
     * Gets sales_tax_enabled
     *
     * @return bool|null
     */
    public function getSalesTaxEnabled()
    {
        return $this->container['sales_tax_enabled'];
    }

    /**
     * Sets sales_tax_enabled
     *
     * @param bool|null $sales_tax_enabled Whether sales tax is enabled for the company
     *
     * @return self
     */
    public function setSalesTaxEnabled($sales_tax_enabled)
    {
        $this->container['sales_tax_enabled'] = $sales_tax_enabled;

        return $this;
    }

    /**
     * Gets default_sales_tax
     *
     * @return \Apideck\Client\Model\TaxRate|null
     */
    public function getDefaultSalesTax()
    {
        return $this->container['default_sales_tax'];
    }

    /**
     * Sets default_sales_tax
     *
     * @param \Apideck\Client\Model\TaxRate|null $default_sales_tax default_sales_tax
     *
     * @return self
     */
    public function setDefaultSalesTax($default_sales_tax)
    {
        $this->container['default_sales_tax'] = $default_sales_tax;

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
     * Gets language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string|null $language language code according to ISO 639-1. For the United States - EN
     *
     * @return self
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets fiscal_year_start_month
     *
     * @return string|null
     */
    public function getFiscalYearStartMonth()
    {
        return $this->container['fiscal_year_start_month'];
    }

    /**
     * Sets fiscal_year_start_month
     *
     * @param string|null $fiscal_year_start_month The start month of fiscal year.
     *
     * @return self
     */
    public function setFiscalYearStartMonth($fiscal_year_start_month)
    {
        $allowedValues = $this->getFiscalYearStartMonthAllowableValues();
        if (!is_null($fiscal_year_start_month) && !in_array($fiscal_year_start_month, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'fiscal_year_start_month', must be one of '%s'",
                    $fiscal_year_start_month,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fiscal_year_start_month'] = $fiscal_year_start_month;

        return $this;
    }

    /**
     * Gets company_start_date
     *
     * @return \DateTime|null
     */
    public function getCompanyStartDate()
    {
        return $this->container['company_start_date'];
    }

    /**
     * Sets company_start_date
     *
     * @param \DateTime|null $company_start_date Date when company file was created
     *
     * @return self
     */
    public function setCompanyStartDate($company_start_date)
    {
        $this->container['company_start_date'] = $company_start_date;

        return $this;
    }

    /**
     * Gets addresses
     *
     * @return \Apideck\Client\Model\Address[]|null
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param \Apideck\Client\Model\Address[]|null $addresses addresses
     *
     * @return self
     */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;

        return $this;
    }

    /**
     * Gets phone_numbers
     *
     * @return \Apideck\Client\Model\PhoneNumber[]|null
     */
    public function getPhoneNumbers()
    {
        return $this->container['phone_numbers'];
    }

    /**
     * Sets phone_numbers
     *
     * @param \Apideck\Client\Model\PhoneNumber[]|null $phone_numbers phone_numbers
     *
     * @return self
     */
    public function setPhoneNumbers($phone_numbers)
    {
        $this->container['phone_numbers'] = $phone_numbers;

        return $this;
    }

    /**
     * Gets emails
     *
     * @return \Apideck\Client\Model\Email[]|null
     */
    public function getEmails()
    {
        return $this->container['emails'];
    }

    /**
     * Sets emails
     *
     * @param \Apideck\Client\Model\Email[]|null $emails emails
     *
     * @return self
     */
    public function setEmails($emails)
    {
        $this->container['emails'] = $emails;

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


