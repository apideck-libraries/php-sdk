<?php
/**
 * Company
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
 * The version of the OpenAPI document: 10.6.0
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
 * Company Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Company implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Company';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'id' => 'string',
        'interaction_count' => 'int',
        'owner_id' => 'string',
        'image' => 'string',
        'description' => 'string',
        'vat_number' => 'string',
        'currency' => '\Apideck\Client\Model\Currency',
        'status' => 'string',
        'fax' => 'string',
        'annual_revenue' => 'string',
        'number_of_employees' => 'string',
        'industry' => 'string',
        'ownership' => 'string',
        'sales_tax_number' => 'string',
        'payee_number' => 'string',
        'abn_or_tfn' => 'string',
        'abn_branch' => 'string',
        'acn' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'parent_id' => 'string',
        'bank_accounts' => '\Apideck\Client\Model\BankAccount[]',
        'websites' => '\Apideck\Client\Model\Website[]',
        'addresses' => '\Apideck\Client\Model\Address[]',
        'social_links' => '\Apideck\Client\Model\SocialLink[]',
        'phone_numbers' => '\Apideck\Client\Model\PhoneNumber[]',
        'emails' => '\Apideck\Client\Model\Email[]',
        'row_type' => '\Apideck\Client\Model\CompanyRowType',
        'custom_fields' => '\Apideck\Client\Model\CustomField[]',
        'tags' => 'string[]',
        'read_only' => 'bool',
        'last_activity_at' => '\DateTime',
        'deleted' => 'bool',
        'salutation' => 'string',
        'birthday' => '\DateTime',
        'custom_mappings' => 'object',
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
        'name' => null,
        'id' => null,
        'interaction_count' => null,
        'owner_id' => null,
        'image' => null,
        'description' => null,
        'vat_number' => null,
        'currency' => null,
        'status' => null,
        'fax' => null,
        'annual_revenue' => null,
        'number_of_employees' => null,
        'industry' => null,
        'ownership' => null,
        'sales_tax_number' => null,
        'payee_number' => null,
        'abn_or_tfn' => null,
        'abn_branch' => null,
        'acn' => null,
        'first_name' => null,
        'last_name' => null,
        'parent_id' => null,
        'bank_accounts' => null,
        'websites' => null,
        'addresses' => null,
        'social_links' => null,
        'phone_numbers' => null,
        'emails' => null,
        'row_type' => null,
        'custom_fields' => null,
        'tags' => null,
        'read_only' => null,
        'last_activity_at' => 'date-time',
        'deleted' => null,
        'salutation' => null,
        'birthday' => 'date',
        'custom_mappings' => null,
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
        'name' => 'name',
        'id' => 'id',
        'interaction_count' => 'interaction_count',
        'owner_id' => 'owner_id',
        'image' => 'image',
        'description' => 'description',
        'vat_number' => 'vat_number',
        'currency' => 'currency',
        'status' => 'status',
        'fax' => 'fax',
        'annual_revenue' => 'annual_revenue',
        'number_of_employees' => 'number_of_employees',
        'industry' => 'industry',
        'ownership' => 'ownership',
        'sales_tax_number' => 'sales_tax_number',
        'payee_number' => 'payee_number',
        'abn_or_tfn' => 'abn_or_tfn',
        'abn_branch' => 'abn_branch',
        'acn' => 'acn',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'parent_id' => 'parent_id',
        'bank_accounts' => 'bank_accounts',
        'websites' => 'websites',
        'addresses' => 'addresses',
        'social_links' => 'social_links',
        'phone_numbers' => 'phone_numbers',
        'emails' => 'emails',
        'row_type' => 'row_type',
        'custom_fields' => 'custom_fields',
        'tags' => 'tags',
        'read_only' => 'read_only',
        'last_activity_at' => 'last_activity_at',
        'deleted' => 'deleted',
        'salutation' => 'salutation',
        'birthday' => 'birthday',
        'custom_mappings' => 'custom_mappings',
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
        'name' => 'setName',
        'id' => 'setId',
        'interaction_count' => 'setInteractionCount',
        'owner_id' => 'setOwnerId',
        'image' => 'setImage',
        'description' => 'setDescription',
        'vat_number' => 'setVatNumber',
        'currency' => 'setCurrency',
        'status' => 'setStatus',
        'fax' => 'setFax',
        'annual_revenue' => 'setAnnualRevenue',
        'number_of_employees' => 'setNumberOfEmployees',
        'industry' => 'setIndustry',
        'ownership' => 'setOwnership',
        'sales_tax_number' => 'setSalesTaxNumber',
        'payee_number' => 'setPayeeNumber',
        'abn_or_tfn' => 'setAbnOrTfn',
        'abn_branch' => 'setAbnBranch',
        'acn' => 'setAcn',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'parent_id' => 'setParentId',
        'bank_accounts' => 'setBankAccounts',
        'websites' => 'setWebsites',
        'addresses' => 'setAddresses',
        'social_links' => 'setSocialLinks',
        'phone_numbers' => 'setPhoneNumbers',
        'emails' => 'setEmails',
        'row_type' => 'setRowType',
        'custom_fields' => 'setCustomFields',
        'tags' => 'setTags',
        'read_only' => 'setReadOnly',
        'last_activity_at' => 'setLastActivityAt',
        'deleted' => 'setDeleted',
        'salutation' => 'setSalutation',
        'birthday' => 'setBirthday',
        'custom_mappings' => 'setCustomMappings',
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
        'name' => 'getName',
        'id' => 'getId',
        'interaction_count' => 'getInteractionCount',
        'owner_id' => 'getOwnerId',
        'image' => 'getImage',
        'description' => 'getDescription',
        'vat_number' => 'getVatNumber',
        'currency' => 'getCurrency',
        'status' => 'getStatus',
        'fax' => 'getFax',
        'annual_revenue' => 'getAnnualRevenue',
        'number_of_employees' => 'getNumberOfEmployees',
        'industry' => 'getIndustry',
        'ownership' => 'getOwnership',
        'sales_tax_number' => 'getSalesTaxNumber',
        'payee_number' => 'getPayeeNumber',
        'abn_or_tfn' => 'getAbnOrTfn',
        'abn_branch' => 'getAbnBranch',
        'acn' => 'getAcn',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'parent_id' => 'getParentId',
        'bank_accounts' => 'getBankAccounts',
        'websites' => 'getWebsites',
        'addresses' => 'getAddresses',
        'social_links' => 'getSocialLinks',
        'phone_numbers' => 'getPhoneNumbers',
        'emails' => 'getEmails',
        'row_type' => 'getRowType',
        'custom_fields' => 'getCustomFields',
        'tags' => 'getTags',
        'read_only' => 'getReadOnly',
        'last_activity_at' => 'getLastActivityAt',
        'deleted' => 'getDeleted',
        'salutation' => 'getSalutation',
        'birthday' => 'getBirthday',
        'custom_mappings' => 'getCustomMappings',
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['interaction_count'] = $data['interaction_count'] ?? null;
        $this->container['owner_id'] = $data['owner_id'] ?? null;
        $this->container['image'] = $data['image'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['vat_number'] = $data['vat_number'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['fax'] = $data['fax'] ?? null;
        $this->container['annual_revenue'] = $data['annual_revenue'] ?? null;
        $this->container['number_of_employees'] = $data['number_of_employees'] ?? null;
        $this->container['industry'] = $data['industry'] ?? null;
        $this->container['ownership'] = $data['ownership'] ?? null;
        $this->container['sales_tax_number'] = $data['sales_tax_number'] ?? null;
        $this->container['payee_number'] = $data['payee_number'] ?? null;
        $this->container['abn_or_tfn'] = $data['abn_or_tfn'] ?? null;
        $this->container['abn_branch'] = $data['abn_branch'] ?? null;
        $this->container['acn'] = $data['acn'] ?? null;
        $this->container['first_name'] = $data['first_name'] ?? null;
        $this->container['last_name'] = $data['last_name'] ?? null;
        $this->container['parent_id'] = $data['parent_id'] ?? null;
        $this->container['bank_accounts'] = $data['bank_accounts'] ?? null;
        $this->container['websites'] = $data['websites'] ?? null;
        $this->container['addresses'] = $data['addresses'] ?? null;
        $this->container['social_links'] = $data['social_links'] ?? null;
        $this->container['phone_numbers'] = $data['phone_numbers'] ?? null;
        $this->container['emails'] = $data['emails'] ?? null;
        $this->container['row_type'] = $data['row_type'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['read_only'] = $data['read_only'] ?? null;
        $this->container['last_activity_at'] = $data['last_activity_at'] ?? null;
        $this->container['deleted'] = $data['deleted'] ?? null;
        $this->container['salutation'] = $data['salutation'] ?? null;
        $this->container['birthday'] = $data['birthday'] ?? null;
        $this->container['custom_mappings'] = $data['custom_mappings'] ?? null;
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the company
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string|null $id Unique identifier for the company
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets interaction_count
     *
     * @return int|null
     */
    public function getInteractionCount()
    {
        return $this->container['interaction_count'];
    }

    /**
     * Sets interaction_count
     *
     * @param int|null $interaction_count Number of interactions
     *
     * @return self
     */
    public function setInteractionCount($interaction_count)
    {
        $this->container['interaction_count'] = $interaction_count;

        return $this;
    }

    /**
     * Gets owner_id
     *
     * @return string|null
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id
     *
     * @param string|null $owner_id Owner ID
     *
     * @return self
     */
    public function setOwnerId($owner_id)
    {
        $this->container['owner_id'] = $owner_id;

        return $this;
    }

    /**
     * Gets image
     *
     * @return string|null
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param string|null $image The Image URL of the company
     *
     * @return self
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

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
     * @param string|null $description A description of the company
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets vat_number
     *
     * @return string|null
     */
    public function getVatNumber()
    {
        return $this->container['vat_number'];
    }

    /**
     * Sets vat_number
     *
     * @param string|null $vat_number The VAT number of the company
     *
     * @return self
     */
    public function setVatNumber($vat_number)
    {
        $this->container['vat_number'] = $vat_number;

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
     * @param string|null $status The status of the company
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets fax
     *
     * @return string|null
     */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     *
     * @param string|null $fax The fax number of the company
     *
     * @return self
     */
    public function setFax($fax)
    {
        $this->container['fax'] = $fax;

        return $this;
    }

    /**
     * Gets annual_revenue
     *
     * @return string|null
     */
    public function getAnnualRevenue()
    {
        return $this->container['annual_revenue'];
    }

    /**
     * Sets annual_revenue
     *
     * @param string|null $annual_revenue The annual revenue of the company
     *
     * @return self
     */
    public function setAnnualRevenue($annual_revenue)
    {
        $this->container['annual_revenue'] = $annual_revenue;

        return $this;
    }

    /**
     * Gets number_of_employees
     *
     * @return string|null
     */
    public function getNumberOfEmployees()
    {
        return $this->container['number_of_employees'];
    }

    /**
     * Sets number_of_employees
     *
     * @param string|null $number_of_employees Number of employees
     *
     * @return self
     */
    public function setNumberOfEmployees($number_of_employees)
    {
        $this->container['number_of_employees'] = $number_of_employees;

        return $this;
    }

    /**
     * Gets industry
     *
     * @return string|null
     */
    public function getIndustry()
    {
        return $this->container['industry'];
    }

    /**
     * Sets industry
     *
     * @param string|null $industry The industry represents the type of business the company is in.
     *
     * @return self
     */
    public function setIndustry($industry)
    {
        $this->container['industry'] = $industry;

        return $this;
    }

    /**
     * Gets ownership
     *
     * @return string|null
     */
    public function getOwnership()
    {
        return $this->container['ownership'];
    }

    /**
     * Sets ownership
     *
     * @param string|null $ownership The ownership indicates the type of ownership of the company.
     *
     * @return self
     */
    public function setOwnership($ownership)
    {
        $this->container['ownership'] = $ownership;

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
     * @param string|null $sales_tax_number A sales tax number is a unique number that identifies a company for tax purposes.
     *
     * @return self
     */
    public function setSalesTaxNumber($sales_tax_number)
    {
        $this->container['sales_tax_number'] = $sales_tax_number;

        return $this;
    }

    /**
     * Gets payee_number
     *
     * @return string|null
     */
    public function getPayeeNumber()
    {
        return $this->container['payee_number'];
    }

    /**
     * Sets payee_number
     *
     * @param string|null $payee_number A payee number is a unique number that identifies a payee for tax purposes.
     *
     * @return self
     */
    public function setPayeeNumber($payee_number)
    {
        $this->container['payee_number'] = $payee_number;

        return $this;
    }

    /**
     * Gets abn_or_tfn
     *
     * @return string|null
     */
    public function getAbnOrTfn()
    {
        return $this->container['abn_or_tfn'];
    }

    /**
     * Sets abn_or_tfn
     *
     * @param string|null $abn_or_tfn An ABN is necessary for operating a business, while a TFN (Tax File Number) is required for any person working in Australia.
     *
     * @return self
     */
    public function setAbnOrTfn($abn_or_tfn)
    {
        $this->container['abn_or_tfn'] = $abn_or_tfn;

        return $this;
    }

    /**
     * Gets abn_branch
     *
     * @return string|null
     */
    public function getAbnBranch()
    {
        return $this->container['abn_branch'];
    }

    /**
     * Sets abn_branch
     *
     * @param string|null $abn_branch An ABN Branch (also known as a GST Branch) is used if part of your business needs to account for GST separately from its parent entity.
     *
     * @return self
     */
    public function setAbnBranch($abn_branch)
    {
        $this->container['abn_branch'] = $abn_branch;

        return $this;
    }

    /**
     * Gets acn
     *
     * @return string|null
     */
    public function getAcn()
    {
        return $this->container['acn'];
    }

    /**
     * Sets acn
     *
     * @param string|null $acn The Australian Company Number (ACN) is a nine digit number with the last digit being a check digit calculated using a modified modulus 10 calculation. ASIC has adopted a convention of always printing and displaying the ACN in the format XXX XXX XXX; three blocks of three characters, each block separated by a blank.
     *
     * @return self
     */
    public function setAcn($acn)
    {
        $this->container['acn'] = $acn;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name The first name of the person.
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name The last name of the person.
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets parent_id
     *
     * @return string|null
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param string|null $parent_id Parent ID
     *
     * @return self
     */
    public function setParentId($parent_id)
    {
        $this->container['parent_id'] = $parent_id;

        return $this;
    }

    /**
     * Gets bank_accounts
     *
     * @return \Apideck\Client\Model\BankAccount[]|null
     */
    public function getBankAccounts()
    {
        return $this->container['bank_accounts'];
    }

    /**
     * Sets bank_accounts
     *
     * @param \Apideck\Client\Model\BankAccount[]|null $bank_accounts bank_accounts
     *
     * @return self
     */
    public function setBankAccounts($bank_accounts)
    {
        $this->container['bank_accounts'] = $bank_accounts;

        return $this;
    }

    /**
     * Gets websites
     *
     * @return \Apideck\Client\Model\Website[]|null
     */
    public function getWebsites()
    {
        return $this->container['websites'];
    }

    /**
     * Sets websites
     *
     * @param \Apideck\Client\Model\Website[]|null $websites websites
     *
     * @return self
     */
    public function setWebsites($websites)
    {
        $this->container['websites'] = $websites;

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
     * Gets social_links
     *
     * @return \Apideck\Client\Model\SocialLink[]|null
     */
    public function getSocialLinks()
    {
        return $this->container['social_links'];
    }

    /**
     * Sets social_links
     *
     * @param \Apideck\Client\Model\SocialLink[]|null $social_links social_links
     *
     * @return self
     */
    public function setSocialLinks($social_links)
    {
        $this->container['social_links'] = $social_links;

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
     * Gets row_type
     *
     * @return \Apideck\Client\Model\CompanyRowType|null
     */
    public function getRowType()
    {
        return $this->container['row_type'];
    }

    /**
     * Sets row_type
     *
     * @param \Apideck\Client\Model\CompanyRowType|null $row_type row_type
     *
     * @return self
     */
    public function setRowType($row_type)
    {
        $this->container['row_type'] = $row_type;

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
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags tags
     *
     * @return self
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets read_only
     *
     * @return bool|null
     */
    public function getReadOnly()
    {
        return $this->container['read_only'];
    }

    /**
     * Sets read_only
     *
     * @param bool|null $read_only Whether the company is read-only or not
     *
     * @return self
     */
    public function setReadOnly($read_only)
    {
        $this->container['read_only'] = $read_only;

        return $this;
    }

    /**
     * Gets last_activity_at
     *
     * @return \DateTime|null
     */
    public function getLastActivityAt()
    {
        return $this->container['last_activity_at'];
    }

    /**
     * Sets last_activity_at
     *
     * @param \DateTime|null $last_activity_at Last activity date
     *
     * @return self
     */
    public function setLastActivityAt($last_activity_at)
    {
        $this->container['last_activity_at'] = $last_activity_at;

        return $this;
    }

    /**
     * Gets deleted
     *
     * @return bool|null
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param bool|null $deleted Whether the company is deleted or not
     *
     * @return self
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

        return $this;
    }

    /**
     * Gets salutation
     *
     * @return string|null
     */
    public function getSalutation()
    {
        return $this->container['salutation'];
    }

    /**
     * Sets salutation
     *
     * @param string|null $salutation A formal salutation for the person. For example, 'Mr', 'Mrs'
     *
     * @return self
     */
    public function setSalutation($salutation)
    {
        $this->container['salutation'] = $salutation;

        return $this;
    }

    /**
     * Gets birthday
     *
     * @return \DateTime|null
     */
    public function getBirthday()
    {
        return $this->container['birthday'];
    }

    /**
     * Sets birthday
     *
     * @param \DateTime|null $birthday The date of birth of the person.
     *
     * @return self
     */
    public function setBirthday($birthday)
    {
        $this->container['birthday'] = $birthday;

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
     * @param string|null $updated_by Updated by user ID
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
     * @param string|null $created_by Created by user ID
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
     * @param \DateTime|null $updated_at Last updated date
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
     * @param \DateTime|null $created_at Creation date
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


