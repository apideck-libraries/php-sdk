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
        'name' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'middle_name' => 'string',
        'initials' => 'string',
        'birthday' => '\DateTime',
        'cover_letter' => 'string',
        'job_url' => 'string',
        'photo_url' => 'string',
        'headline' => 'string',
        'title' => 'string',
        'emails' => '\Apideck\Client\Model\Email[]',
        'custom_fields' => '\Apideck\Client\Model\CustomField[]',
        'phone_numbers' => '\Apideck\Client\Model\PhoneNumber[]',
        'addresses' => '\Apideck\Client\Model\Address[]',
        'websites' => '\Apideck\Client\Model\ApplicantWebsites[]',
        'social_links' => '\Apideck\Client\Model\ApplicantSocialLinks[]',
        'stage_id' => 'string',
        'recruiter_id' => 'string',
        'coordinator_id' => 'string',
        'application_ids' => 'string[]',
        'applications' => 'string[]',
        'followers' => 'string[]',
        'sources' => 'string[]',
        'source_id' => 'string',
        'confidential' => 'bool',
        'anonymized' => 'bool',
        'tags' => 'string[]',
        'archived' => 'bool',
        'last_interaction_at' => '\DateTime',
        'owner_id' => 'string',
        'sourced_by' => 'string',
        'cv_url' => 'string',
        'record_url' => 'string',
        'rejected_at' => '\DateTime',
        'custom_mappings' => 'object',
        'deleted' => 'bool',
        'deleted_by' => 'string',
        'deleted_at' => '\DateTime',
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
        'name' => null,
        'first_name' => null,
        'last_name' => null,
        'middle_name' => null,
        'initials' => null,
        'birthday' => 'date',
        'cover_letter' => null,
        'job_url' => null,
        'photo_url' => null,
        'headline' => null,
        'title' => null,
        'emails' => null,
        'custom_fields' => null,
        'phone_numbers' => null,
        'addresses' => null,
        'websites' => null,
        'social_links' => null,
        'stage_id' => null,
        'recruiter_id' => null,
        'coordinator_id' => null,
        'application_ids' => null,
        'applications' => null,
        'followers' => null,
        'sources' => null,
        'source_id' => null,
        'confidential' => null,
        'anonymized' => null,
        'tags' => null,
        'archived' => null,
        'last_interaction_at' => 'date-time',
        'owner_id' => null,
        'sourced_by' => null,
        'cv_url' => null,
        'record_url' => null,
        'rejected_at' => 'date-time',
        'custom_mappings' => null,
        'deleted' => null,
        'deleted_by' => null,
        'deleted_at' => 'date-time',
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
        'name' => 'name',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'middle_name' => 'middle_name',
        'initials' => 'initials',
        'birthday' => 'birthday',
        'cover_letter' => 'cover_letter',
        'job_url' => 'job_url',
        'photo_url' => 'photo_url',
        'headline' => 'headline',
        'title' => 'title',
        'emails' => 'emails',
        'custom_fields' => 'custom_fields',
        'phone_numbers' => 'phone_numbers',
        'addresses' => 'addresses',
        'websites' => 'websites',
        'social_links' => 'social_links',
        'stage_id' => 'stage_id',
        'recruiter_id' => 'recruiter_id',
        'coordinator_id' => 'coordinator_id',
        'application_ids' => 'application_ids',
        'applications' => 'applications',
        'followers' => 'followers',
        'sources' => 'sources',
        'source_id' => 'source_id',
        'confidential' => 'confidential',
        'anonymized' => 'anonymized',
        'tags' => 'tags',
        'archived' => 'archived',
        'last_interaction_at' => 'last_interaction_at',
        'owner_id' => 'owner_id',
        'sourced_by' => 'sourced_by',
        'cv_url' => 'cv_url',
        'record_url' => 'record_url',
        'rejected_at' => 'rejected_at',
        'custom_mappings' => 'custom_mappings',
        'deleted' => 'deleted',
        'deleted_by' => 'deleted_by',
        'deleted_at' => 'deleted_at',
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
        'name' => 'setName',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'middle_name' => 'setMiddleName',
        'initials' => 'setInitials',
        'birthday' => 'setBirthday',
        'cover_letter' => 'setCoverLetter',
        'job_url' => 'setJobUrl',
        'photo_url' => 'setPhotoUrl',
        'headline' => 'setHeadline',
        'title' => 'setTitle',
        'emails' => 'setEmails',
        'custom_fields' => 'setCustomFields',
        'phone_numbers' => 'setPhoneNumbers',
        'addresses' => 'setAddresses',
        'websites' => 'setWebsites',
        'social_links' => 'setSocialLinks',
        'stage_id' => 'setStageId',
        'recruiter_id' => 'setRecruiterId',
        'coordinator_id' => 'setCoordinatorId',
        'application_ids' => 'setApplicationIds',
        'applications' => 'setApplications',
        'followers' => 'setFollowers',
        'sources' => 'setSources',
        'source_id' => 'setSourceId',
        'confidential' => 'setConfidential',
        'anonymized' => 'setAnonymized',
        'tags' => 'setTags',
        'archived' => 'setArchived',
        'last_interaction_at' => 'setLastInteractionAt',
        'owner_id' => 'setOwnerId',
        'sourced_by' => 'setSourcedBy',
        'cv_url' => 'setCvUrl',
        'record_url' => 'setRecordUrl',
        'rejected_at' => 'setRejectedAt',
        'custom_mappings' => 'setCustomMappings',
        'deleted' => 'setDeleted',
        'deleted_by' => 'setDeletedBy',
        'deleted_at' => 'setDeletedAt',
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
        'name' => 'getName',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'middle_name' => 'getMiddleName',
        'initials' => 'getInitials',
        'birthday' => 'getBirthday',
        'cover_letter' => 'getCoverLetter',
        'job_url' => 'getJobUrl',
        'photo_url' => 'getPhotoUrl',
        'headline' => 'getHeadline',
        'title' => 'getTitle',
        'emails' => 'getEmails',
        'custom_fields' => 'getCustomFields',
        'phone_numbers' => 'getPhoneNumbers',
        'addresses' => 'getAddresses',
        'websites' => 'getWebsites',
        'social_links' => 'getSocialLinks',
        'stage_id' => 'getStageId',
        'recruiter_id' => 'getRecruiterId',
        'coordinator_id' => 'getCoordinatorId',
        'application_ids' => 'getApplicationIds',
        'applications' => 'getApplications',
        'followers' => 'getFollowers',
        'sources' => 'getSources',
        'source_id' => 'getSourceId',
        'confidential' => 'getConfidential',
        'anonymized' => 'getAnonymized',
        'tags' => 'getTags',
        'archived' => 'getArchived',
        'last_interaction_at' => 'getLastInteractionAt',
        'owner_id' => 'getOwnerId',
        'sourced_by' => 'getSourcedBy',
        'cv_url' => 'getCvUrl',
        'record_url' => 'getRecordUrl',
        'rejected_at' => 'getRejectedAt',
        'custom_mappings' => 'getCustomMappings',
        'deleted' => 'getDeleted',
        'deleted_by' => 'getDeletedBy',
        'deleted_at' => 'getDeletedAt',
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['first_name'] = $data['first_name'] ?? null;
        $this->container['last_name'] = $data['last_name'] ?? null;
        $this->container['middle_name'] = $data['middle_name'] ?? null;
        $this->container['initials'] = $data['initials'] ?? null;
        $this->container['birthday'] = $data['birthday'] ?? null;
        $this->container['cover_letter'] = $data['cover_letter'] ?? null;
        $this->container['job_url'] = $data['job_url'] ?? null;
        $this->container['photo_url'] = $data['photo_url'] ?? null;
        $this->container['headline'] = $data['headline'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['emails'] = $data['emails'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['phone_numbers'] = $data['phone_numbers'] ?? null;
        $this->container['addresses'] = $data['addresses'] ?? null;
        $this->container['websites'] = $data['websites'] ?? null;
        $this->container['social_links'] = $data['social_links'] ?? null;
        $this->container['stage_id'] = $data['stage_id'] ?? null;
        $this->container['recruiter_id'] = $data['recruiter_id'] ?? null;
        $this->container['coordinator_id'] = $data['coordinator_id'] ?? null;
        $this->container['application_ids'] = $data['application_ids'] ?? null;
        $this->container['applications'] = $data['applications'] ?? null;
        $this->container['followers'] = $data['followers'] ?? null;
        $this->container['sources'] = $data['sources'] ?? null;
        $this->container['source_id'] = $data['source_id'] ?? null;
        $this->container['confidential'] = $data['confidential'] ?? null;
        $this->container['anonymized'] = $data['anonymized'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['archived'] = $data['archived'] ?? null;
        $this->container['last_interaction_at'] = $data['last_interaction_at'] ?? null;
        $this->container['owner_id'] = $data['owner_id'] ?? null;
        $this->container['sourced_by'] = $data['sourced_by'] ?? null;
        $this->container['cv_url'] = $data['cv_url'] ?? null;
        $this->container['record_url'] = $data['record_url'] ?? null;
        $this->container['rejected_at'] = $data['rejected_at'] ?? null;
        $this->container['custom_mappings'] = $data['custom_mappings'] ?? null;
        $this->container['deleted'] = $data['deleted'] ?? null;
        $this->container['deleted_by'] = $data['deleted_by'] ?? null;
        $this->container['deleted_at'] = $data['deleted_at'] ?? null;
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
     * @param string|null $middle_name Middle name of the person.
     *
     * @return self
     */
    public function setMiddleName($middle_name)
    {
        $this->container['middle_name'] = $middle_name;

        return $this;
    }

    /**
     * Gets initials
     *
     * @return string|null
     */
    public function getInitials()
    {
        return $this->container['initials'];
    }

    /**
     * Sets initials
     *
     * @param string|null $initials The initials of the person, usually derived from their first, middle, and last names.
     *
     * @return self
     */
    public function setInitials($initials)
    {
        $this->container['initials'] = $initials;

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
     * Gets cover_letter
     *
     * @return string|null
     */
    public function getCoverLetter()
    {
        return $this->container['cover_letter'];
    }

    /**
     * Sets cover_letter
     *
     * @param string|null $cover_letter cover_letter
     *
     * @return self
     */
    public function setCoverLetter($cover_letter)
    {
        $this->container['cover_letter'] = $cover_letter;

        return $this;
    }

    /**
     * Gets job_url
     *
     * @return string|null
     */
    public function getJobUrl()
    {
        return $this->container['job_url'];
    }

    /**
     * Sets job_url
     *
     * @param string|null $job_url job_url
     *
     * @return self
     */
    public function setJobUrl($job_url)
    {
        $this->container['job_url'] = $job_url;

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
     * @param string|null $title The job title of the person.
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
     * Gets social_links
     *
     * @return \Apideck\Client\Model\ApplicantSocialLinks[]|null
     */
    public function getSocialLinks()
    {
        return $this->container['social_links'];
    }

    /**
     * Sets social_links
     *
     * @param \Apideck\Client\Model\ApplicantSocialLinks[]|null $social_links social_links
     *
     * @return self
     */
    public function setSocialLinks($social_links)
    {
        $this->container['social_links'] = $social_links;

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
     * Gets application_ids
     *
     * @return string[]|null
     */
    public function getApplicationIds()
    {
        return $this->container['application_ids'];
    }

    /**
     * Sets application_ids
     *
     * @param string[]|null $application_ids application_ids
     *
     * @return self
     */
    public function setApplicationIds($application_ids)
    {
        $this->container['application_ids'] = $application_ids;

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
     * Gets source_id
     *
     * @return string|null
     */
    public function getSourceId()
    {
        return $this->container['source_id'];
    }

    /**
     * Sets source_id
     *
     * @param string|null $source_id source_id
     *
     * @return self
     */
    public function setSourceId($source_id)
    {
        $this->container['source_id'] = $source_id;

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
     * Gets cv_url
     *
     * @return string|null
     */
    public function getCvUrl()
    {
        return $this->container['cv_url'];
    }

    /**
     * Sets cv_url
     *
     * @param string|null $cv_url cv_url
     *
     * @return self
     */
    public function setCvUrl($cv_url)
    {
        $this->container['cv_url'] = $cv_url;

        return $this;
    }

    /**
     * Gets record_url
     *
     * @return string|null
     */
    public function getRecordUrl()
    {
        return $this->container['record_url'];
    }

    /**
     * Sets record_url
     *
     * @param string|null $record_url record_url
     *
     * @return self
     */
    public function setRecordUrl($record_url)
    {
        $this->container['record_url'] = $record_url;

        return $this;
    }

    /**
     * Gets rejected_at
     *
     * @return \DateTime|null
     */
    public function getRejectedAt()
    {
        return $this->container['rejected_at'];
    }

    /**
     * Sets rejected_at
     *
     * @param \DateTime|null $rejected_at rejected_at
     *
     * @return self
     */
    public function setRejectedAt($rejected_at)
    {
        $this->container['rejected_at'] = $rejected_at;

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
     * @param bool|null $deleted Flag to indicate if the object is deleted.
     *
     * @return self
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

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
     * @param string|null $deleted_by The user who deleted the object.
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
     * @param \DateTime|null $deleted_at The time at which the object was deleted.
     *
     * @return self
     */
    public function setDeletedAt($deleted_at)
    {
        $this->container['deleted_at'] = $deleted_at;

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


