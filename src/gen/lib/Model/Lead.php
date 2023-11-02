<?php
/**
 * Lead
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
 * The version of the OpenAPI document: 10.0.1
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
 * Lead Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Lead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Lead';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'company_name' => 'string',
        'id' => 'string',
        'owner_id' => 'string',
        'company_id' => 'string',
        'lead_id' => 'string',
        'lead_source' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'description' => 'string',
        'prefix' => 'string',
        'title' => 'string',
        'language' => 'string',
        'status' => 'string',
        'monetary_amount' => 'float',
        'currency' => '\Apideck\Client\Model\Currency',
        'fax' => 'string',
        'websites' => '\Apideck\Client\Model\Website[]',
        'addresses' => '\Apideck\Client\Model\Address[]',
        'social_links' => '\Apideck\Client\Model\SocialLink[]',
        'phone_numbers' => '\Apideck\Client\Model\PhoneNumber[]',
        'emails' => '\Apideck\Client\Model\Email[]',
        'custom_fields' => '\Apideck\Client\Model\CustomField[]',
        'tags' => 'string[]',
        'custom_mappings' => 'object',
        'updated_at' => 'string',
        'created_at' => 'string'
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
        'company_name' => null,
        'id' => null,
        'owner_id' => null,
        'company_id' => null,
        'lead_id' => null,
        'lead_source' => null,
        'first_name' => null,
        'last_name' => null,
        'description' => null,
        'prefix' => null,
        'title' => null,
        'language' => null,
        'status' => null,
        'monetary_amount' => null,
        'currency' => null,
        'fax' => null,
        'websites' => null,
        'addresses' => null,
        'social_links' => null,
        'phone_numbers' => null,
        'emails' => null,
        'custom_fields' => null,
        'tags' => null,
        'custom_mappings' => null,
        'updated_at' => null,
        'created_at' => null
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
        'company_name' => 'company_name',
        'id' => 'id',
        'owner_id' => 'owner_id',
        'company_id' => 'company_id',
        'lead_id' => 'lead_id',
        'lead_source' => 'lead_source',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'description' => 'description',
        'prefix' => 'prefix',
        'title' => 'title',
        'language' => 'language',
        'status' => 'status',
        'monetary_amount' => 'monetary_amount',
        'currency' => 'currency',
        'fax' => 'fax',
        'websites' => 'websites',
        'addresses' => 'addresses',
        'social_links' => 'social_links',
        'phone_numbers' => 'phone_numbers',
        'emails' => 'emails',
        'custom_fields' => 'custom_fields',
        'tags' => 'tags',
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
        'company_name' => 'setCompanyName',
        'id' => 'setId',
        'owner_id' => 'setOwnerId',
        'company_id' => 'setCompanyId',
        'lead_id' => 'setLeadId',
        'lead_source' => 'setLeadSource',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'description' => 'setDescription',
        'prefix' => 'setPrefix',
        'title' => 'setTitle',
        'language' => 'setLanguage',
        'status' => 'setStatus',
        'monetary_amount' => 'setMonetaryAmount',
        'currency' => 'setCurrency',
        'fax' => 'setFax',
        'websites' => 'setWebsites',
        'addresses' => 'setAddresses',
        'social_links' => 'setSocialLinks',
        'phone_numbers' => 'setPhoneNumbers',
        'emails' => 'setEmails',
        'custom_fields' => 'setCustomFields',
        'tags' => 'setTags',
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
        'company_name' => 'getCompanyName',
        'id' => 'getId',
        'owner_id' => 'getOwnerId',
        'company_id' => 'getCompanyId',
        'lead_id' => 'getLeadId',
        'lead_source' => 'getLeadSource',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'description' => 'getDescription',
        'prefix' => 'getPrefix',
        'title' => 'getTitle',
        'language' => 'getLanguage',
        'status' => 'getStatus',
        'monetary_amount' => 'getMonetaryAmount',
        'currency' => 'getCurrency',
        'fax' => 'getFax',
        'websites' => 'getWebsites',
        'addresses' => 'getAddresses',
        'social_links' => 'getSocialLinks',
        'phone_numbers' => 'getPhoneNumbers',
        'emails' => 'getEmails',
        'custom_fields' => 'getCustomFields',
        'tags' => 'getTags',
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
        $this->container['company_name'] = $data['company_name'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['owner_id'] = $data['owner_id'] ?? null;
        $this->container['company_id'] = $data['company_id'] ?? null;
        $this->container['lead_id'] = $data['lead_id'] ?? null;
        $this->container['lead_source'] = $data['lead_source'] ?? null;
        $this->container['first_name'] = $data['first_name'] ?? null;
        $this->container['last_name'] = $data['last_name'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['prefix'] = $data['prefix'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['language'] = $data['language'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['monetary_amount'] = $data['monetary_amount'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['fax'] = $data['fax'] ?? null;
        $this->container['websites'] = $data['websites'] ?? null;
        $this->container['addresses'] = $data['addresses'] ?? null;
        $this->container['social_links'] = $data['social_links'] ?? null;
        $this->container['phone_numbers'] = $data['phone_numbers'] ?? null;
        $this->container['emails'] = $data['emails'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
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
        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['company_name'] === null) {
            $invalidProperties[] = "'company_name' can't be null";
        }
        if (!is_null($this->container['updated_at']) && !preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}.\\d{3}Z$/", $this->container['updated_at'])) {
            $invalidProperties[] = "invalid value for 'updated_at', must be conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}.\\d{3}Z$/.";
        }

        if (!is_null($this->container['created_at']) && !preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}.\\d{3}Z$/", $this->container['created_at'])) {
            $invalidProperties[] = "invalid value for 'created_at', must be conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}.\\d{3}Z$/.";
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
     * @param string $name Full name of the lead.
     *
     * @return self
     */
    public function setName($name)
    {

        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Lead., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string $company_name The name of the company the lead is associated with.
     *
     * @return self
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

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
     * @param string|null $owner_id The owner of the lead.
     *
     * @return self
     */
    public function setOwnerId($owner_id)
    {
        $this->container['owner_id'] = $owner_id;

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
     * @param string|null $company_id The company the lead is associated with.
     *
     * @return self
     */
    public function setCompanyId($company_id)
    {
        $this->container['company_id'] = $company_id;

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
     * @param string|null $lead_id The identifier of the lead.
     *
     * @return self
     */
    public function setLeadId($lead_id)
    {
        $this->container['lead_id'] = $lead_id;

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
     * @param string|null $lead_source The source of the lead.
     *
     * @return self
     */
    public function setLeadSource($lead_source)
    {
        $this->container['lead_source'] = $lead_source;

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
     * @param string|null $first_name The first name of the lead.
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
     * @param string|null $last_name The last name of the lead.
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

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
     * @param string|null $description The description of the lead.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * @param string|null $prefix The prefix of the lead.
     *
     * @return self
     */
    public function setPrefix($prefix)
    {
        $this->container['prefix'] = $prefix;

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
     * @param string|null $title The job title of the lead.
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets monetary_amount
     *
     * @return float|null
     */
    public function getMonetaryAmount()
    {
        return $this->container['monetary_amount'];
    }

    /**
     * Sets monetary_amount
     *
     * @param float|null $monetary_amount The monetary amount of the lead.
     *
     * @return self
     */
    public function setMonetaryAmount($monetary_amount)
    {
        $this->container['monetary_amount'] = $monetary_amount;

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
     * @param string|null $fax The fax number of the lead.
     *
     * @return self
     */
    public function setFax($fax)
    {
        $this->container['fax'] = $fax;

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
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string|null $updated_at Date updated in ISO 8601 format
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {

        if (!is_null($updated_at) && (!preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}.\\d{3}Z$/", $updated_at))) {
            throw new \InvalidArgumentException("invalid value for $updated_at when calling Lead., must conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}.\\d{3}Z$/.");
        }

        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at Date created in ISO 8601 format
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {

        if (!is_null($created_at) && (!preg_match("/^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}.\\d{3}Z$/", $created_at))) {
            throw new \InvalidArgumentException("invalid value for $created_at when calling Lead., must conform to the pattern /^\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}.\\d{3}Z$/.");
        }

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


