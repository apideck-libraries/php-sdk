<?php
/**
 * Job
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
 * The version of the OpenAPI document: 8.26.0
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
 * Job Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Job implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Job';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'title' => 'string',
        'visibility' => 'string[]',
        'status' => '\Apideck\Client\Model\JobStatus',
        'code' => 'string',
        'requisition_id' => 'string',
        'hiring_managers' => 'object[]',
        'description' => 'string',
        'description_html' => 'string',
        'blocks' => 'object[]',
        'closing' => 'string',
        'closing_html' => 'string',
        'url' => 'string',
        'job_portal_url' => 'string',
        'confidential' => 'bool',
        'tags' => 'string[]',
        'owner_id' => 'string',
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
        'title' => null,
        'visibility' => null,
        'status' => null,
        'code' => null,
        'requisition_id' => null,
        'hiring_managers' => null,
        'description' => null,
        'description_html' => null,
        'blocks' => null,
        'closing' => null,
        'closing_html' => null,
        'url' => null,
        'job_portal_url' => null,
        'confidential' => null,
        'tags' => null,
        'owner_id' => null,
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
        'title' => 'title',
        'visibility' => 'visibility',
        'status' => 'status',
        'code' => 'code',
        'requisition_id' => 'requisition_id',
        'hiring_managers' => 'hiring_managers',
        'description' => 'description',
        'description_html' => 'description_html',
        'blocks' => 'blocks',
        'closing' => 'closing',
        'closing_html' => 'closing_html',
        'url' => 'url',
        'job_portal_url' => 'job_portal_url',
        'confidential' => 'confidential',
        'tags' => 'tags',
        'owner_id' => 'owner_id',
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
        'title' => 'setTitle',
        'visibility' => 'setVisibility',
        'status' => 'setStatus',
        'code' => 'setCode',
        'requisition_id' => 'setRequisitionId',
        'hiring_managers' => 'setHiringManagers',
        'description' => 'setDescription',
        'description_html' => 'setDescriptionHtml',
        'blocks' => 'setBlocks',
        'closing' => 'setClosing',
        'closing_html' => 'setClosingHtml',
        'url' => 'setUrl',
        'job_portal_url' => 'setJobPortalUrl',
        'confidential' => 'setConfidential',
        'tags' => 'setTags',
        'owner_id' => 'setOwnerId',
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
        'title' => 'getTitle',
        'visibility' => 'getVisibility',
        'status' => 'getStatus',
        'code' => 'getCode',
        'requisition_id' => 'getRequisitionId',
        'hiring_managers' => 'getHiringManagers',
        'description' => 'getDescription',
        'description_html' => 'getDescriptionHtml',
        'blocks' => 'getBlocks',
        'closing' => 'getClosing',
        'closing_html' => 'getClosingHtml',
        'url' => 'getUrl',
        'job_portal_url' => 'getJobPortalUrl',
        'confidential' => 'getConfidential',
        'tags' => 'getTags',
        'owner_id' => 'getOwnerId',
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

    const VISIBILITY__PUBLIC = 'public';
    const VISIBILITY_INTERNAL = 'internal';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVisibilityAllowableValues()
    {
        return [
            self::VISIBILITY__PUBLIC,
            self::VISIBILITY_INTERNAL,
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
        $this->container['title'] = $data['title'] ?? null;
        $this->container['visibility'] = $data['visibility'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['code'] = $data['code'] ?? null;
        $this->container['requisition_id'] = $data['requisition_id'] ?? null;
        $this->container['hiring_managers'] = $data['hiring_managers'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['description_html'] = $data['description_html'] ?? null;
        $this->container['blocks'] = $data['blocks'] ?? null;
        $this->container['closing'] = $data['closing'] ?? null;
        $this->container['closing_html'] = $data['closing_html'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['job_portal_url'] = $data['job_portal_url'] ?? null;
        $this->container['confidential'] = $data['confidential'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['owner_id'] = $data['owner_id'] ?? null;
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
     * Gets visibility
     *
     * @return string[]|null
     */
    public function getVisibility()
    {
        return $this->container['visibility'];
    }

    /**
     * Sets visibility
     *
     * @param string[]|null $visibility visibility
     *
     * @return self
     */
    public function setVisibility($visibility)
    {
        $allowedValues = $this->getVisibilityAllowableValues();
        if (!is_null($visibility) && array_diff($visibility, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'visibility', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['visibility'] = $visibility;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Apideck\Client\Model\JobStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Apideck\Client\Model\JobStatus|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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
     * @param string|null $code The code of the job.
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets requisition_id
     *
     * @return string|null
     */
    public function getRequisitionId()
    {
        return $this->container['requisition_id'];
    }

    /**
     * Sets requisition_id
     *
     * @param string|null $requisition_id A job's Requisition ID (Req ID) allows your organization to identify and track a job based on alphanumeric naming conventions unique to your company's internal processes.
     *
     * @return self
     */
    public function setRequisitionId($requisition_id)
    {
        $this->container['requisition_id'] = $requisition_id;

        return $this;
    }

    /**
     * Gets hiring_managers
     *
     * @return object[]|null
     */
    public function getHiringManagers()
    {
        return $this->container['hiring_managers'];
    }

    /**
     * Sets hiring_managers
     *
     * @param object[]|null $hiring_managers hiring_managers
     *
     * @return self
     */
    public function setHiringManagers($hiring_managers)
    {
        $this->container['hiring_managers'] = $hiring_managers;

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
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets description_html
     *
     * @return string|null
     */
    public function getDescriptionHtml()
    {
        return $this->container['description_html'];
    }

    /**
     * Sets description_html
     *
     * @param string|null $description_html The job description in HTML format
     *
     * @return self
     */
    public function setDescriptionHtml($description_html)
    {
        $this->container['description_html'] = $description_html;

        return $this;
    }

    /**
     * Gets blocks
     *
     * @return object[]|null
     */
    public function getBlocks()
    {
        return $this->container['blocks'];
    }

    /**
     * Sets blocks
     *
     * @param object[]|null $blocks blocks
     *
     * @return self
     */
    public function setBlocks($blocks)
    {
        $this->container['blocks'] = $blocks;

        return $this;
    }

    /**
     * Gets closing
     *
     * @return string|null
     */
    public function getClosing()
    {
        return $this->container['closing'];
    }

    /**
     * Sets closing
     *
     * @param string|null $closing closing
     *
     * @return self
     */
    public function setClosing($closing)
    {
        $this->container['closing'] = $closing;

        return $this;
    }

    /**
     * Gets closing_html
     *
     * @return string|null
     */
    public function getClosingHtml()
    {
        return $this->container['closing_html'];
    }

    /**
     * Sets closing_html
     *
     * @param string|null $closing_html The closing section of the job description in HTML format
     *
     * @return self
     */
    public function setClosingHtml($closing_html)
    {
        $this->container['closing_html'] = $closing_html;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url URL of the job description
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets job_portal_url
     *
     * @return string|null
     */
    public function getJobPortalUrl()
    {
        return $this->container['job_portal_url'];
    }

    /**
     * Sets job_portal_url
     *
     * @param string|null $job_portal_url URL of the job portal
     *
     * @return self
     */
    public function setJobPortalUrl($job_portal_url)
    {
        $this->container['job_portal_url'] = $job_portal_url;

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


