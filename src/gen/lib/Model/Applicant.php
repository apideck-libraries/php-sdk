<?php
/**
 * Applicant
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
 * The version of the OpenAPI document: 8.26.1
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
 * Applicant Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Applicant implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Applicant';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'position_id' => 'string',
        'name' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'headline' => 'string',
        'title' => 'string',
        'emails' => '\Apideck\Client\Model\Email[]',
        'phone_numbers' => '\Apideck\Client\Model\PhoneNumber[]',
        'addresses' => '\Apideck\Client\Model\Address[]',
        'websites' => '\Apideck\Client\Model\ApplicantWebsites[]',
        'stage_id' => 'string',
        'recruiter_id' => 'string',
        'coordinator_id' => 'string',
        'applications' => 'string[]',
        'followers' => 'string[]',
        'sources' => 'string[]',
        'confidential' => 'bool',
        'anonymized' => 'bool',
        'tags' => 'string[]',
        'archived' => 'bool',
        'last_interaction_at' => '\DateTime',
        'owner_id' => 'string',
        'sourced_by' => 'string',
        'deleted_by' => 'string',
        'deleted_at' => '\DateTime',
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
        'position_id' => null,
        'name' => null,
        'first_name' => null,
        'last_name' => null,
        'headline' => null,
        'title' => null,
        'emails' => null,
        'phone_numbers' => null,
        'addresses' => null,
        'websites' => null,
        'stage_id' => null,
        'recruiter_id' => null,
        'coordinator_id' => null,
        'applications' => null,
        'followers' => null,
        'sources' => null,
        'confidential' => null,
        'anonymized' => null,
        'tags' => null,
        'archived' => null,
        'last_interaction_at' => 'date-time',
        'owner_id' => null,
        'sourced_by' => null,
        'deleted_by' => null,
        'deleted_at' => 'date-time',
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
        'position_id' => 'position_id',
        'name' => 'name',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'headline' => 'headline',
        'title' => 'title',
        'emails' => 'emails',
        'phone_numbers' => 'phone_numbers',
        'addresses' => 'addresses',
        'websites' => 'websites',
        'stage_id' => 'stage_id',
        'recruiter_id' => 'recruiter_id',
        'coordinator_id' => 'coordinator_id',
        'applications' => 'applications',
        'followers' => 'followers',
        'sources' => 'sources',
        'confidential' => 'confidential',
        'anonymized' => 'anonymized',
        'tags' => 'tags',
        'archived' => 'archived',
        'last_interaction_at' => 'last_interaction_at',
        'owner_id' => 'owner_id',
        'sourced_by' => 'sourced_by',
        'deleted_by' => 'deleted_by',
        'deleted_at' => 'deleted_at',
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
        'position_id' => 'setPositionId',
        'name' => 'setName',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'headline' => 'setHeadline',
        'title' => 'setTitle',
        'emails' => 'setEmails',
        'phone_numbers' => 'setPhoneNumbers',
        'addresses' => 'setAddresses',
        'websites' => 'setWebsites',
        'stage_id' => 'setStageId',
        'recruiter_id' => 'setRecruiterId',
        'coordinator_id' => 'setCoordinatorId',
        'applications' => 'setApplications',
        'followers' => 'setFollowers',
        'sources' => 'setSources',
        'confidential' => 'setConfidential',
        'anonymized' => 'setAnonymized',
        'tags' => 'setTags',
        'archived' => 'setArchived',
        'last_interaction_at' => 'setLastInteractionAt',
        'owner_id' => 'setOwnerId',
        'sourced_by' => 'setSourcedBy',
        'deleted_by' => 'setDeletedBy',
        'deleted_at' => 'setDeletedAt',
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
        'position_id' => 'getPositionId',
        'name' => 'getName',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'headline' => 'getHeadline',
        'title' => 'getTitle',
        'emails' => 'getEmails',
        'phone_numbers' => 'getPhoneNumbers',
        'addresses' => 'getAddresses',
        'websites' => 'getWebsites',
        'stage_id' => 'getStageId',
        'recruiter_id' => 'getRecruiterId',
        'coordinator_id' => 'getCoordinatorId',
        'applications' => 'getApplications',
        'followers' => 'getFollowers',
        'sources' => 'getSources',
        'confidential' => 'getConfidential',
        'anonymized' => 'getAnonymized',
        'tags' => 'getTags',
        'archived' => 'getArchived',
        'last_interaction_at' => 'getLastInteractionAt',
        'owner_id' => 'getOwnerId',
        'sourced_by' => 'getSourcedBy',
        'deleted_by' => 'getDeletedBy',
        'deleted_at' => 'getDeletedAt',
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['position_id'] = $data['position_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['first_name'] = $data['first_name'] ?? null;
        $this->container['last_name'] = $data['last_name'] ?? null;
        $this->container['headline'] = $data['headline'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['emails'] = $data['emails'] ?? null;
        $this->container['phone_numbers'] = $data['phone_numbers'] ?? null;
        $this->container['addresses'] = $data['addresses'] ?? null;
        $this->container['websites'] = $data['websites'] ?? null;
        $this->container['stage_id'] = $data['stage_id'] ?? null;
        $this->container['recruiter_id'] = $data['recruiter_id'] ?? null;
        $this->container['coordinator_id'] = $data['coordinator_id'] ?? null;
        $this->container['applications'] = $data['applications'] ?? null;
        $this->container['followers'] = $data['followers'] ?? null;
        $this->container['sources'] = $data['sources'] ?? null;
        $this->container['confidential'] = $data['confidential'] ?? null;
        $this->container['anonymized'] = $data['anonymized'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['archived'] = $data['archived'] ?? null;
        $this->container['last_interaction_at'] = $data['last_interaction_at'] ?? null;
        $this->container['owner_id'] = $data['owner_id'] ?? null;
        $this->container['sourced_by'] = $data['sourced_by'] ?? null;
        $this->container['deleted_by'] = $data['deleted_by'] ?? null;
        $this->container['deleted_at'] = $data['deleted_at'] ?? null;
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
     * Gets position_id
     *
     * @return string|null
     */
    public function getPositionId()
    {
        return $this->container['position_id'];
    }

    /**
     * Sets position_id
     *
     * @param string|null $position_id The PositionId the applicant applied for.
     *
     * @return self
     */
    public function setPositionId($position_id)
    {
        $this->container['position_id'] = $position_id;

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
     * @param string|null $name The name of an applicant.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string|null $first_name first_name
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
     * @param string|null $last_name last_name
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets headline
     *
     * @return string|null
     */
    public function getHeadline()
    {
        return $this->container['headline'];
    }

    /**
     * Sets headline
     *
     * @param string|null $headline Typically a list of previous companies where the contact has worked or schools that the contact has attended
     *
     * @return self
     */
    public function setHeadline($headline)
    {
        $this->container['headline'] = $headline;

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
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
     * Gets websites
     *
     * @return \Apideck\Client\Model\ApplicantWebsites[]|null
     */
    public function getWebsites()
    {
        return $this->container['websites'];
    }

    /**
     * Sets websites
     *
     * @param \Apideck\Client\Model\ApplicantWebsites[]|null $websites websites
     *
     * @return self
     */
    public function setWebsites($websites)
    {
        $this->container['websites'] = $websites;

        return $this;
    }

    /**
     * Gets stage_id
     *
     * @return string|null
     */
    public function getStageId()
    {
        return $this->container['stage_id'];
    }

    /**
     * Sets stage_id
     *
     * @param string|null $stage_id stage_id
     *
     * @return self
     */
    public function setStageId($stage_id)
    {
        $this->container['stage_id'] = $stage_id;

        return $this;
    }

    /**
     * Gets recruiter_id
     *
     * @return string|null
     */
    public function getRecruiterId()
    {
        return $this->container['recruiter_id'];
    }

    /**
     * Sets recruiter_id
     *
     * @param string|null $recruiter_id recruiter_id
     *
     * @return self
     */
    public function setRecruiterId($recruiter_id)
    {
        $this->container['recruiter_id'] = $recruiter_id;

        return $this;
    }

    /**
     * Gets coordinator_id
     *
     * @return string|null
     */
    public function getCoordinatorId()
    {
        return $this->container['coordinator_id'];
    }

    /**
     * Sets coordinator_id
     *
     * @param string|null $coordinator_id coordinator_id
     *
     * @return self
     */
    public function setCoordinatorId($coordinator_id)
    {
        $this->container['coordinator_id'] = $coordinator_id;

        return $this;
    }

    /**
     * Gets applications
     *
     * @return string[]|null
     */
    public function getApplications()
    {
        return $this->container['applications'];
    }

    /**
     * Sets applications
     *
     * @param string[]|null $applications applications
     *
     * @return self
     */
    public function setApplications($applications)
    {
        $this->container['applications'] = $applications;

        return $this;
    }

    /**
     * Gets followers
     *
     * @return string[]|null
     */
    public function getFollowers()
    {
        return $this->container['followers'];
    }

    /**
     * Sets followers
     *
     * @param string[]|null $followers followers
     *
     * @return self
     */
    public function setFollowers($followers)
    {
        $this->container['followers'] = $followers;

        return $this;
    }

    /**
     * Gets sources
     *
     * @return string[]|null
     */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
     * Sets sources
     *
     * @param string[]|null $sources sources
     *
     * @return self
     */
    public function setSources($sources)
    {
        $this->container['sources'] = $sources;

        return $this;
    }

    /**
     * Gets confidential
     *
     * @return bool|null
     */
    public function getConfidential()
    {
        return $this->container['confidential'];
    }

    /**
     * Sets confidential
     *
     * @param bool|null $confidential confidential
     *
     * @return self
     */
    public function setConfidential($confidential)
    {
        $this->container['confidential'] = $confidential;

        return $this;
    }

    /**
     * Gets anonymized
     *
     * @return bool|null
     */
    public function getAnonymized()
    {
        return $this->container['anonymized'];
    }

    /**
     * Sets anonymized
     *
     * @param bool|null $anonymized anonymized
     *
     * @return self
     */
    public function setAnonymized($anonymized)
    {
        $this->container['anonymized'] = $anonymized;

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
     * Gets archived
     *
     * @return bool|null
     */
    public function getArchived()
    {
        return $this->container['archived'];
    }

    /**
     * Sets archived
     *
     * @param bool|null $archived archived
     *
     * @return self
     */
    public function setArchived($archived)
    {
        $this->container['archived'] = $archived;

        return $this;
    }

    /**
     * Gets last_interaction_at
     *
     * @return \DateTime|null
     */
    public function getLastInteractionAt()
    {
        return $this->container['last_interaction_at'];
    }

    /**
     * Sets last_interaction_at
     *
     * @param \DateTime|null $last_interaction_at last_interaction_at
     *
     * @return self
     */
    public function setLastInteractionAt($last_interaction_at)
    {
        $this->container['last_interaction_at'] = $last_interaction_at;

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
     * @param string|null $owner_id owner_id
     *
     * @return self
     */
    public function setOwnerId($owner_id)
    {
        $this->container['owner_id'] = $owner_id;

        return $this;
    }

    /**
     * Gets sourced_by
     *
     * @return string|null
     */
    public function getSourcedBy()
    {
        return $this->container['sourced_by'];
    }

    /**
     * Sets sourced_by
     *
     * @param string|null $sourced_by sourced_by
     *
     * @return self
     */
    public function setSourcedBy($sourced_by)
    {
        $this->container['sourced_by'] = $sourced_by;

        return $this;
    }

    /**
     * Gets deleted_by
     *
     * @return string|null
     */
    public function getDeletedBy()
    {
        return $this->container['deleted_by'];
    }

    /**
     * Sets deleted_by
     *
     * @param string|null $deleted_by deleted_by
     *
     * @return self
     */
    public function setDeletedBy($deleted_by)
    {
        $this->container['deleted_by'] = $deleted_by;

        return $this;
    }

    /**
     * Gets deleted_at
     *
     * @return \DateTime|null
     */
    public function getDeletedAt()
    {
        return $this->container['deleted_at'];
    }

    /**
     * Sets deleted_at
     *
     * @param \DateTime|null $deleted_at deleted_at
     *
     * @return self
     */
    public function setDeletedAt($deleted_at)
    {
        $this->container['deleted_at'] = $deleted_at;

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


