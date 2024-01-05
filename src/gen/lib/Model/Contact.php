<?php
/**
 * Contact
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
 * The version of the OpenAPI document: 10.2.0
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
 * Contact Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Contact implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Contact';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'id' => 'string',
        'owner_id' => 'string',
        'type' => 'string',
        'company_id' => 'string',
        'company_name' => 'string',
        'lead_id' => 'string',
        'first_name' => 'string',
        'middle_name' => 'string',
        'last_name' => 'string',
        'prefix' => 'string',
        'suffix' => 'string',
        'title' => 'string',
        'department' => 'string',
        'language' => 'string',
        'gender' => 'string',
        'birthday' => 'string',
        'image' => 'string',
        'photo_url' => 'string',
        'lead_source' => 'string',
        'fax' => 'string',
        'description' => 'string',
        'current_balance' => 'float',
        'status' => 'string',
        'active' => 'bool',
        'websites' => '\Apideck\Client\Model\Website[]',
        'addresses' => '\Apideck\Client\Model\Address[]',
        'social_links' => '\Apideck\Client\Model\SocialLink[]',
        'phone_numbers' => '\Apideck\Client\Model\PhoneNumber[]',
        'emails' => '\Apideck\Client\Model\Email[]',
        'email_domain' => 'string',
        'custom_fields' => '\Apideck\Client\Model\CustomField[]',
        'tags' => 'string[]',
        'first_call_at' => '\DateTime',
        'first_email_at' => '\DateTime',
        'last_activity_at' => '\DateTime',
        'custom_mappings' => 'object',
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
        'name' => null,
        'id' => null,
        'owner_id' => null,
        'type' => null,
        'company_id' => null,
        'company_name' => null,
        'lead_id' => null,
        'first_name' => null,
        'middle_name' => null,
        'last_name' => null,
        'prefix' => null,
        'suffix' => null,
        'title' => null,
        'department' => null,
        'language' => null,
        'gender' => null,
        'birthday' => null,
        'image' => null,
        'photo_url' => null,
        'lead_source' => null,
        'fax' => null,
        'description' => null,
        'current_balance' => null,
        'status' => null,
        'active' => null,
        'websites' => null,
        'addresses' => null,
        'social_links' => null,
        'phone_numbers' => null,
        'emails' => null,
        'email_domain' => null,
        'custom_fields' => null,
        'tags' => null,
        'first_call_at' => 'date-time',
        'first_email_at' => 'date-time',
        'last_activity_at' => 'date-time',
        'custom_mappings' => null,
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
        'name' => 'name',
        'id' => 'id',
        'owner_id' => 'owner_id',
        'type' => 'type',
        'company_id' => 'company_id',
        'company_name' => 'company_name',
        'lead_id' => 'lead_id',
        'first_name' => 'first_name',
        'middle_name' => 'middle_name',
        'last_name' => 'last_name',
        'prefix' => 'prefix',
        'suffix' => 'suffix',
        'title' => 'title',
        'department' => 'department',
        'language' => 'language',
        'gender' => 'gender',
        'birthday' => 'birthday',
        'image' => 'image',
        'photo_url' => 'photo_url',
        'lead_source' => 'lead_source',
        'fax' => 'fax',
        'description' => 'description',
        'current_balance' => 'current_balance',
        'status' => 'status',
        'active' => 'active',
        'websites' => 'websites',
        'addresses' => 'addresses',
        'social_links' => 'social_links',
        'phone_numbers' => 'phone_numbers',
        'emails' => 'emails',
        'email_domain' => 'email_domain',
        'custom_fields' => 'custom_fields',
        'tags' => 'tags',
        'first_call_at' => 'first_call_at',
        'first_email_at' => 'first_email_at',
        'last_activity_at' => 'last_activity_at',
        'custom_mappings' => 'custom_mappings',
        'updated_at' => 'updated_at',
        'created_at' => 'created_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'id' => 'setId',
        'owner_id' => 'setOwnerId',
        'type' => 'setType',
        'company_id' => 'setCompanyId',
        'company_name' => 'setCompanyName',
        'lead_id' => 'setLeadId',
        'first_name' => 'setFirstName',
        'middle_name' => 'setMiddleName',
        'last_name' => 'setLastName',
        'prefix' => 'setPrefix',
        'suffix' => 'setSuffix',
        'title' => 'setTitle',
        'department' => 'setDepartment',
        'language' => 'setLanguage',
        'gender' => 'setGender',
        'birthday' => 'setBirthday',
        'image' => 'setImage',
        'photo_url' => 'setPhotoUrl',
        'lead_source' => 'setLeadSource',
        'fax' => 'setFax',
        'description' => 'setDescription',
        'current_balance' => 'setCurrentBalance',
        'status' => 'setStatus',
        'active' => 'setActive',
        'websites' => 'setWebsites',
        'addresses' => 'setAddresses',
        'social_links' => 'setSocialLinks',
        'phone_numbers' => 'setPhoneNumbers',
        'emails' => 'setEmails',
        'email_domain' => 'setEmailDomain',
        'custom_fields' => 'setCustomFields',
        'tags' => 'setTags',
        'first_call_at' => 'setFirstCallAt',
        'first_email_at' => 'setFirstEmailAt',
        'last_activity_at' => 'setLastActivityAt',
        'custom_mappings' => 'setCustomMappings',
        'updated_at' => 'setUpdatedAt',
        'created_at' => 'setCreatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'id' => 'getId',
        'owner_id' => 'getOwnerId',
        'type' => 'getType',
        'company_id' => 'getCompanyId',
        'company_name' => 'getCompanyName',
        'lead_id' => 'getLeadId',
        'first_name' => 'getFirstName',
        'middle_name' => 'getMiddleName',
        'last_name' => 'getLastName',
        'prefix' => 'getPrefix',
        'suffix' => 'getSuffix',
        'title' => 'getTitle',
        'department' => 'getDepartment',
        'language' => 'getLanguage',
        'gender' => 'getGender',
        'birthday' => 'getBirthday',
        'image' => 'getImage',
        'photo_url' => 'getPhotoUrl',
        'lead_source' => 'getLeadSource',
        'fax' => 'getFax',
        'description' => 'getDescription',
        'current_balance' => 'getCurrentBalance',
        'status' => 'getStatus',
        'active' => 'getActive',
        'websites' => 'getWebsites',
        'addresses' => 'getAddresses',
        'social_links' => 'getSocialLinks',
        'phone_numbers' => 'getPhoneNumbers',
        'emails' => 'getEmails',
        'email_domain' => 'getEmailDomain',
        'custom_fields' => 'getCustomFields',
        'tags' => 'getTags',
        'first_call_at' => 'getFirstCallAt',
        'first_email_at' => 'getFirstEmailAt',
        'last_activity_at' => 'getLastActivityAt',
        'custom_mappings' => 'getCustomMappings',
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

    const TYPE_CUSTOMER = 'customer';
    const TYPE_SUPPLIER = 'supplier';
    const TYPE_EMPLOYEE = 'employee';
    const TYPE_PERSONAL = 'personal';
    const GENDER_MALE = 'male';
    const GENDER_FEMALE = 'female';
    const GENDER_UNISEX = 'unisex';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CUSTOMER,
            self::TYPE_SUPPLIER,
            self::TYPE_EMPLOYEE,
            self::TYPE_PERSONAL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGenderAllowableValues()
    {
        return [
            self::GENDER_MALE,
            self::GENDER_FEMALE,
            self::GENDER_UNISEX,
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['owner_id'] = $data['owner_id'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['company_id'] = $data['company_id'] ?? null;
        $this->container['company_name'] = $data['company_name'] ?? null;
        $this->container['lead_id'] = $data['lead_id'] ?? null;
        $this->container['first_name'] = $data['first_name'] ?? null;
        $this->container['middle_name'] = $data['middle_name'] ?? null;
        $this->container['last_name'] = $data['last_name'] ?? null;
        $this->container['prefix'] = $data['prefix'] ?? null;
        $this->container['suffix'] = $data['suffix'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['department'] = $data['department'] ?? null;
        $this->container['language'] = $data['language'] ?? null;
        $this->container['gender'] = $data['gender'] ?? null;
        $this->container['birthday'] = $data['birthday'] ?? null;
        $this->container['image'] = $data['image'] ?? null;
        $this->container['photo_url'] = $data['photo_url'] ?? null;
        $this->container['lead_source'] = $data['lead_source'] ?? null;
        $this->container['fax'] = $data['fax'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['current_balance'] = $data['current_balance'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['active'] = $data['active'] ?? null;
        $this->container['websites'] = $data['websites'] ?? null;
        $this->container['addresses'] = $data['addresses'] ?? null;
        $this->container['social_links'] = $data['social_links'] ?? null;
        $this->container['phone_numbers'] = $data['phone_numbers'] ?? null;
        $this->container['emails'] = $data['emails'] ?? null;
        $this->container['email_domain'] = $data['email_domain'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['first_call_at'] = $data['first_call_at'] ?? null;
        $this->container['first_email_at'] = $data['first_email_at'] ?? null;
        $this->container['last_activity_at'] = $data['last_activity_at'] ?? null;
        $this->container['custom_mappings'] = $data['custom_mappings'] ?? null;
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getGenderAllowableValues();
        if (!is_null($this->container['gender']) && !in_array($this->container['gender'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'gender', must be one of '%s'",
                $this->container['gender'],
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
     * @param string $name Full name of the contact.
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
     * @param string|null $id Unique identifier for the contact.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string|null $owner_id The owner of the contact.
     *
     * @return self
     */
    public function setOwnerId($owner_id)
    {
        $this->container['owner_id'] = $owner_id;

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
     * @param string|null $type The type of the contact.
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
     * @param string|null $company_id The company the contact is associated with.
     *
     * @return self
     */
    public function setCompanyId($company_id)
    {
        $this->container['company_id'] = $company_id;

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
     * @param string|null $company_name The name of the company the contact is associated with.
     *
     * @return self
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets lead_id
     *
     * @return string|null
     */
    public function getLeadId()
    {
        return $this->container['lead_id'];
    }

    /**
     * Sets lead_id
     *
     * @param string|null $lead_id The lead the contact is associated with.
     *
     * @return self
     */
    public function setLeadId($lead_id)
    {
        $this->container['lead_id'] = $lead_id;

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
     * @param string|null $first_name The first name of the contact.
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets middle_name
     *
     * @return string|null
     */
    public function getMiddleName()
    {
        return $this->container['middle_name'];
    }

    /**
     * Sets middle_name
     *
     * @param string|null $middle_name The middle name of the contact.
     *
     * @return self
     */
    public function setMiddleName($middle_name)
    {
        $this->container['middle_name'] = $middle_name;

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
     * @param string|null $last_name The last name of the contact.
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets prefix
     *
     * @return string|null
     */
    public function getPrefix()
    {
        return $this->container['prefix'];
    }

    /**
     * Sets prefix
     *
     * @param string|null $prefix The prefix of the contact.
     *
     * @return self
     */
    public function setPrefix($prefix)
    {
        $this->container['prefix'] = $prefix;

        return $this;
    }

    /**
     * Gets suffix
     *
     * @return string|null
     */
    public function getSuffix()
    {
        return $this->container['suffix'];
    }

    /**
     * Sets suffix
     *
     * @param string|null $suffix The suffix of the contact.
     *
     * @return self
     */
    public function setSuffix($suffix)
    {
        $this->container['suffix'] = $suffix;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title The job title of the contact.
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets department
     *
     * @return string|null
     */
    public function getDepartment()
    {
        return $this->container['department'];
    }

    /**
     * Sets department
     *
     * @param string|null $department The department of the contact.
     *
     * @return self
     */
    public function setDepartment($department)
    {
        $this->container['department'] = $department;

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
     * Gets gender
     *
     * @return string|null
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string|null $gender The gender of the contact.
     *
     * @return self
     */
    public function setGender($gender)
    {
        $allowedValues = $this->getGenderAllowableValues();
        if (!is_null($gender) && !in_array($gender, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'gender', must be one of '%s'",
                    $gender,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets birthday
     *
     * @return string|null
     */
    public function getBirthday()
    {
        return $this->container['birthday'];
    }

    /**
     * Sets birthday
     *
     * @param string|null $birthday The birthday of the contact.
     *
     * @return self
     */
    public function setBirthday($birthday)
    {
        $this->container['birthday'] = $birthday;

        return $this;
    }

    /**
     * Gets image
     *
     * @return string|null
     * @deprecated
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param string|null $image image
     *
     * @return self
     * @deprecated
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets photo_url
     *
     * @return string|null
     */
    public function getPhotoUrl()
    {
        return $this->container['photo_url'];
    }

    /**
     * Sets photo_url
     *
     * @param string|null $photo_url The URL of the photo of a person.
     *
     * @return self
     */
    public function setPhotoUrl($photo_url)
    {
        $this->container['photo_url'] = $photo_url;

        return $this;
    }

    /**
     * Gets lead_source
     *
     * @return string|null
     */
    public function getLeadSource()
    {
        return $this->container['lead_source'];
    }

    /**
     * Sets lead_source
     *
     * @param string|null $lead_source The lead source of the contact.
     *
     * @return self
     */
    public function setLeadSource($lead_source)
    {
        $this->container['lead_source'] = $lead_source;

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
     * @param string|null $fax The fax number of the contact.
     *
     * @return self
     */
    public function setFax($fax)
    {
        $this->container['fax'] = $fax;

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
     * @param string|null $description The description of the contact.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * @param float|null $current_balance The current balance of the contact.
     *
     * @return self
     */
    public function setCurrentBalance($current_balance)
    {
        $this->container['current_balance'] = $current_balance;

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
     * @param string|null $status The status of the contact.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
     * @param bool|null $active The active status of the contact.
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

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
     * Gets email_domain
     *
     * @return string|null
     */
    public function getEmailDomain()
    {
        return $this->container['email_domain'];
    }

    /**
     * Sets email_domain
     *
     * @param string|null $email_domain email_domain
     *
     * @return self
     */
    public function setEmailDomain($email_domain)
    {
        $this->container['email_domain'] = $email_domain;

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
     * Gets first_call_at
     *
     * @return \DateTime|null
     */
    public function getFirstCallAt()
    {
        return $this->container['first_call_at'];
    }

    /**
     * Sets first_call_at
     *
     * @param \DateTime|null $first_call_at The first call date of the contact.
     *
     * @return self
     */
    public function setFirstCallAt($first_call_at)
    {
        $this->container['first_call_at'] = $first_call_at;

        return $this;
    }

    /**
     * Gets first_email_at
     *
     * @return \DateTime|null
     */
    public function getFirstEmailAt()
    {
        return $this->container['first_email_at'];
    }

    /**
     * Sets first_email_at
     *
     * @param \DateTime|null $first_email_at The first email date of the contact.
     *
     * @return self
     */
    public function setFirstEmailAt($first_email_at)
    {
        $this->container['first_email_at'] = $first_email_at;

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
     * @param \DateTime|null $last_activity_at The last activity date of the contact.
     *
     * @return self
     */
    public function setLastActivityAt($last_activity_at)
    {
        $this->container['last_activity_at'] = $last_activity_at;

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
     * @param \DateTime|null $updated_at The last update date of the contact.
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
     * @param \DateTime|null $created_at The creation date of the contact.
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


