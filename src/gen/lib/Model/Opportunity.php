<?php
/**
 * Opportunity
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
 * The version of the OpenAPI document: 8.46.0
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
 * Opportunity Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Opportunity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Opportunity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'title' => 'string',
        'primary_contact_id' => 'string',
        'id' => 'string',
        'description' => 'string',
        'type' => 'string',
        'monetary_amount' => 'float',
        'currency' => '\Apideck\Client\Model\Currency',
        'win_probability' => 'float',
        'expected_revenue' => 'float',
        'close_date' => '\DateTime',
        'loss_reason_id' => 'string',
        'loss_reason' => 'string',
        'won_reason_id' => 'string',
        'won_reason' => 'string',
        'pipeline_id' => 'string',
        'pipeline_stage_id' => 'string',
        'source_id' => 'string',
        'lead_id' => 'string',
        'lead_source' => 'string',
        'contact_id' => 'string',
        'company_id' => 'string',
        'company_name' => 'string',
        'owner_id' => 'string',
        'priority' => 'string',
        'status' => 'string',
        'status_id' => 'string',
        'tags' => 'string[]',
        'interaction_count' => 'float',
        'custom_fields' => '\Apideck\Client\Model\CustomField[]',
        'stage_last_changed_at' => '\DateTime',
        'last_activity_at' => 'string',
        'deleted' => 'bool',
        'date_stage_changed' => '\DateTime',
        'date_last_contacted' => '\DateTime',
        'date_lead_created' => '\DateTime',
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
        'title' => null,
        'primary_contact_id' => null,
        'id' => null,
        'description' => null,
        'type' => null,
        'monetary_amount' => null,
        'currency' => null,
        'win_probability' => null,
        'expected_revenue' => null,
        'close_date' => 'date',
        'loss_reason_id' => null,
        'loss_reason' => null,
        'won_reason_id' => null,
        'won_reason' => null,
        'pipeline_id' => null,
        'pipeline_stage_id' => null,
        'source_id' => null,
        'lead_id' => null,
        'lead_source' => null,
        'contact_id' => null,
        'company_id' => null,
        'company_name' => null,
        'owner_id' => null,
        'priority' => null,
        'status' => null,
        'status_id' => null,
        'tags' => null,
        'interaction_count' => null,
        'custom_fields' => null,
        'stage_last_changed_at' => 'date-time',
        'last_activity_at' => null,
        'deleted' => null,
        'date_stage_changed' => 'date-time',
        'date_last_contacted' => 'date-time',
        'date_lead_created' => 'date-time',
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
        'title' => 'title',
        'primary_contact_id' => 'primary_contact_id',
        'id' => 'id',
        'description' => 'description',
        'type' => 'type',
        'monetary_amount' => 'monetary_amount',
        'currency' => 'currency',
        'win_probability' => 'win_probability',
        'expected_revenue' => 'expected_revenue',
        'close_date' => 'close_date',
        'loss_reason_id' => 'loss_reason_id',
        'loss_reason' => 'loss_reason',
        'won_reason_id' => 'won_reason_id',
        'won_reason' => 'won_reason',
        'pipeline_id' => 'pipeline_id',
        'pipeline_stage_id' => 'pipeline_stage_id',
        'source_id' => 'source_id',
        'lead_id' => 'lead_id',
        'lead_source' => 'lead_source',
        'contact_id' => 'contact_id',
        'company_id' => 'company_id',
        'company_name' => 'company_name',
        'owner_id' => 'owner_id',
        'priority' => 'priority',
        'status' => 'status',
        'status_id' => 'status_id',
        'tags' => 'tags',
        'interaction_count' => 'interaction_count',
        'custom_fields' => 'custom_fields',
        'stage_last_changed_at' => 'stage_last_changed_at',
        'last_activity_at' => 'last_activity_at',
        'deleted' => 'deleted',
        'date_stage_changed' => 'date_stage_changed',
        'date_last_contacted' => 'date_last_contacted',
        'date_lead_created' => 'date_lead_created',
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
        'title' => 'setTitle',
        'primary_contact_id' => 'setPrimaryContactId',
        'id' => 'setId',
        'description' => 'setDescription',
        'type' => 'setType',
        'monetary_amount' => 'setMonetaryAmount',
        'currency' => 'setCurrency',
        'win_probability' => 'setWinProbability',
        'expected_revenue' => 'setExpectedRevenue',
        'close_date' => 'setCloseDate',
        'loss_reason_id' => 'setLossReasonId',
        'loss_reason' => 'setLossReason',
        'won_reason_id' => 'setWonReasonId',
        'won_reason' => 'setWonReason',
        'pipeline_id' => 'setPipelineId',
        'pipeline_stage_id' => 'setPipelineStageId',
        'source_id' => 'setSourceId',
        'lead_id' => 'setLeadId',
        'lead_source' => 'setLeadSource',
        'contact_id' => 'setContactId',
        'company_id' => 'setCompanyId',
        'company_name' => 'setCompanyName',
        'owner_id' => 'setOwnerId',
        'priority' => 'setPriority',
        'status' => 'setStatus',
        'status_id' => 'setStatusId',
        'tags' => 'setTags',
        'interaction_count' => 'setInteractionCount',
        'custom_fields' => 'setCustomFields',
        'stage_last_changed_at' => 'setStageLastChangedAt',
        'last_activity_at' => 'setLastActivityAt',
        'deleted' => 'setDeleted',
        'date_stage_changed' => 'setDateStageChanged',
        'date_last_contacted' => 'setDateLastContacted',
        'date_lead_created' => 'setDateLeadCreated',
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
        'title' => 'getTitle',
        'primary_contact_id' => 'getPrimaryContactId',
        'id' => 'getId',
        'description' => 'getDescription',
        'type' => 'getType',
        'monetary_amount' => 'getMonetaryAmount',
        'currency' => 'getCurrency',
        'win_probability' => 'getWinProbability',
        'expected_revenue' => 'getExpectedRevenue',
        'close_date' => 'getCloseDate',
        'loss_reason_id' => 'getLossReasonId',
        'loss_reason' => 'getLossReason',
        'won_reason_id' => 'getWonReasonId',
        'won_reason' => 'getWonReason',
        'pipeline_id' => 'getPipelineId',
        'pipeline_stage_id' => 'getPipelineStageId',
        'source_id' => 'getSourceId',
        'lead_id' => 'getLeadId',
        'lead_source' => 'getLeadSource',
        'contact_id' => 'getContactId',
        'company_id' => 'getCompanyId',
        'company_name' => 'getCompanyName',
        'owner_id' => 'getOwnerId',
        'priority' => 'getPriority',
        'status' => 'getStatus',
        'status_id' => 'getStatusId',
        'tags' => 'getTags',
        'interaction_count' => 'getInteractionCount',
        'custom_fields' => 'getCustomFields',
        'stage_last_changed_at' => 'getStageLastChangedAt',
        'last_activity_at' => 'getLastActivityAt',
        'deleted' => 'getDeleted',
        'date_stage_changed' => 'getDateStageChanged',
        'date_last_contacted' => 'getDateLastContacted',
        'date_lead_created' => 'getDateLeadCreated',
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
        $this->container['title'] = $data['title'] ?? null;
        $this->container['primary_contact_id'] = $data['primary_contact_id'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['monetary_amount'] = $data['monetary_amount'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['win_probability'] = $data['win_probability'] ?? null;
        $this->container['expected_revenue'] = $data['expected_revenue'] ?? null;
        $this->container['close_date'] = $data['close_date'] ?? null;
        $this->container['loss_reason_id'] = $data['loss_reason_id'] ?? null;
        $this->container['loss_reason'] = $data['loss_reason'] ?? null;
        $this->container['won_reason_id'] = $data['won_reason_id'] ?? null;
        $this->container['won_reason'] = $data['won_reason'] ?? null;
        $this->container['pipeline_id'] = $data['pipeline_id'] ?? null;
        $this->container['pipeline_stage_id'] = $data['pipeline_stage_id'] ?? null;
        $this->container['source_id'] = $data['source_id'] ?? null;
        $this->container['lead_id'] = $data['lead_id'] ?? null;
        $this->container['lead_source'] = $data['lead_source'] ?? null;
        $this->container['contact_id'] = $data['contact_id'] ?? null;
        $this->container['company_id'] = $data['company_id'] ?? null;
        $this->container['company_name'] = $data['company_name'] ?? null;
        $this->container['owner_id'] = $data['owner_id'] ?? null;
        $this->container['priority'] = $data['priority'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['status_id'] = $data['status_id'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['interaction_count'] = $data['interaction_count'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['stage_last_changed_at'] = $data['stage_last_changed_at'] ?? null;
        $this->container['last_activity_at'] = $data['last_activity_at'] ?? null;
        $this->container['deleted'] = $data['deleted'] ?? null;
        $this->container['date_stage_changed'] = $data['date_stage_changed'] ?? null;
        $this->container['date_last_contacted'] = $data['date_last_contacted'] ?? null;
        $this->container['date_lead_created'] = $data['date_lead_created'] ?? null;
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

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ((mb_strlen($this->container['title']) < 1)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['primary_contact_id'] === null) {
            $invalidProperties[] = "'primary_contact_id' can't be null";
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
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return self
     */
    public function setTitle($title)
    {

        if ((mb_strlen($title) < 1)) {
            throw new \InvalidArgumentException('invalid length for $title when calling Opportunity., must be bigger than or equal to 1.');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets primary_contact_id
     *
     * @return string
     */
    public function getPrimaryContactId()
    {
        return $this->container['primary_contact_id'];
    }

    /**
     * Sets primary_contact_id
     *
     * @param string $primary_contact_id primary_contact_id
     *
     * @return self
     */
    public function setPrimaryContactId($primary_contact_id)
    {
        $this->container['primary_contact_id'] = $primary_contact_id;

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
     * @param string|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
     * @param float|null $monetary_amount monetary_amount
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
     * Gets win_probability
     *
     * @return float|null
     */
    public function getWinProbability()
    {
        return $this->container['win_probability'];
    }

    /**
     * Sets win_probability
     *
     * @param float|null $win_probability win_probability
     *
     * @return self
     */
    public function setWinProbability($win_probability)
    {
        $this->container['win_probability'] = $win_probability;

        return $this;
    }

    /**
     * Gets expected_revenue
     *
     * @return float|null
     */
    public function getExpectedRevenue()
    {
        return $this->container['expected_revenue'];
    }

    /**
     * Sets expected_revenue
     *
     * @param float|null $expected_revenue Expected Revenue
     *
     * @return self
     */
    public function setExpectedRevenue($expected_revenue)
    {
        $this->container['expected_revenue'] = $expected_revenue;

        return $this;
    }

    /**
     * Gets close_date
     *
     * @return \DateTime|null
     */
    public function getCloseDate()
    {
        return $this->container['close_date'];
    }

    /**
     * Sets close_date
     *
     * @param \DateTime|null $close_date close_date
     *
     * @return self
     */
    public function setCloseDate($close_date)
    {
        $this->container['close_date'] = $close_date;

        return $this;
    }

    /**
     * Gets loss_reason_id
     *
     * @return string|null
     */
    public function getLossReasonId()
    {
        return $this->container['loss_reason_id'];
    }

    /**
     * Sets loss_reason_id
     *
     * @param string|null $loss_reason_id loss_reason_id
     *
     * @return self
     */
    public function setLossReasonId($loss_reason_id)
    {
        $this->container['loss_reason_id'] = $loss_reason_id;

        return $this;
    }

    /**
     * Gets loss_reason
     *
     * @return string|null
     */
    public function getLossReason()
    {
        return $this->container['loss_reason'];
    }

    /**
     * Sets loss_reason
     *
     * @param string|null $loss_reason loss_reason
     *
     * @return self
     */
    public function setLossReason($loss_reason)
    {
        $this->container['loss_reason'] = $loss_reason;

        return $this;
    }

    /**
     * Gets won_reason_id
     *
     * @return string|null
     */
    public function getWonReasonId()
    {
        return $this->container['won_reason_id'];
    }

    /**
     * Sets won_reason_id
     *
     * @param string|null $won_reason_id won_reason_id
     *
     * @return self
     */
    public function setWonReasonId($won_reason_id)
    {
        $this->container['won_reason_id'] = $won_reason_id;

        return $this;
    }

    /**
     * Gets won_reason
     *
     * @return string|null
     */
    public function getWonReason()
    {
        return $this->container['won_reason'];
    }

    /**
     * Sets won_reason
     *
     * @param string|null $won_reason won_reason
     *
     * @return self
     */
    public function setWonReason($won_reason)
    {
        $this->container['won_reason'] = $won_reason;

        return $this;
    }

    /**
     * Gets pipeline_id
     *
     * @return string|null
     */
    public function getPipelineId()
    {
        return $this->container['pipeline_id'];
    }

    /**
     * Sets pipeline_id
     *
     * @param string|null $pipeline_id pipeline_id
     *
     * @return self
     */
    public function setPipelineId($pipeline_id)
    {
        $this->container['pipeline_id'] = $pipeline_id;

        return $this;
    }

    /**
     * Gets pipeline_stage_id
     *
     * @return string|null
     */
    public function getPipelineStageId()
    {
        return $this->container['pipeline_stage_id'];
    }

    /**
     * Sets pipeline_stage_id
     *
     * @param string|null $pipeline_stage_id pipeline_stage_id
     *
     * @return self
     */
    public function setPipelineStageId($pipeline_stage_id)
    {
        $this->container['pipeline_stage_id'] = $pipeline_stage_id;

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
     * @param string|null $lead_id lead_id
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
     * @param string|null $lead_source Lead source
     *
     * @return self
     */
    public function setLeadSource($lead_source)
    {
        $this->container['lead_source'] = $lead_source;

        return $this;
    }

    /**
     * Gets contact_id
     *
     * @return string|null
     */
    public function getContactId()
    {
        return $this->container['contact_id'];
    }

    /**
     * Sets contact_id
     *
     * @param string|null $contact_id contact_id
     *
     * @return self
     */
    public function setContactId($contact_id)
    {
        $this->container['contact_id'] = $contact_id;

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
     * @param string|null $company_id company_id
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
     * @param string|null $company_name company_name
     *
     * @return self
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

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
     * Gets priority
     *
     * @return string|null
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param string|null $priority priority
     *
     * @return self
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

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
     * Gets status_id
     *
     * @return string|null
     */
    public function getStatusId()
    {
        return $this->container['status_id'];
    }

    /**
     * Sets status_id
     *
     * @param string|null $status_id status_id
     *
     * @return self
     */
    public function setStatusId($status_id)
    {
        $this->container['status_id'] = $status_id;

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
     * Gets interaction_count
     *
     * @return float|null
     */
    public function getInteractionCount()
    {
        return $this->container['interaction_count'];
    }

    /**
     * Sets interaction_count
     *
     * @param float|null $interaction_count interaction_count
     *
     * @return self
     */
    public function setInteractionCount($interaction_count)
    {
        $this->container['interaction_count'] = $interaction_count;

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
     * Gets stage_last_changed_at
     *
     * @return \DateTime|null
     */
    public function getStageLastChangedAt()
    {
        return $this->container['stage_last_changed_at'];
    }

    /**
     * Sets stage_last_changed_at
     *
     * @param \DateTime|null $stage_last_changed_at stage_last_changed_at
     *
     * @return self
     */
    public function setStageLastChangedAt($stage_last_changed_at)
    {
        $this->container['stage_last_changed_at'] = $stage_last_changed_at;

        return $this;
    }

    /**
     * Gets last_activity_at
     *
     * @return string|null
     */
    public function getLastActivityAt()
    {
        return $this->container['last_activity_at'];
    }

    /**
     * Sets last_activity_at
     *
     * @param string|null $last_activity_at last_activity_at
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
     * @param bool|null $deleted deleted
     *
     * @return self
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

        return $this;
    }

    /**
     * Gets date_stage_changed
     *
     * @return \DateTime|null
     */
    public function getDateStageChanged()
    {
        return $this->container['date_stage_changed'];
    }

    /**
     * Sets date_stage_changed
     *
     * @param \DateTime|null $date_stage_changed date_stage_changed
     *
     * @return self
     */
    public function setDateStageChanged($date_stage_changed)
    {
        $this->container['date_stage_changed'] = $date_stage_changed;

        return $this;
    }

    /**
     * Gets date_last_contacted
     *
     * @return \DateTime|null
     */
    public function getDateLastContacted()
    {
        return $this->container['date_last_contacted'];
    }

    /**
     * Sets date_last_contacted
     *
     * @param \DateTime|null $date_last_contacted date_last_contacted
     *
     * @return self
     */
    public function setDateLastContacted($date_last_contacted)
    {
        $this->container['date_last_contacted'] = $date_last_contacted;

        return $this;
    }

    /**
     * Gets date_lead_created
     *
     * @return \DateTime|null
     */
    public function getDateLeadCreated()
    {
        return $this->container['date_lead_created'];
    }

    /**
     * Sets date_lead_created
     *
     * @param \DateTime|null $date_lead_created date_lead_created
     *
     * @return self
     */
    public function setDateLeadCreated($date_lead_created)
    {
        $this->container['date_lead_created'] = $date_lead_created;

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


