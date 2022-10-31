<?php
/**
 * ConsumerWebhook
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
 * The version of the OpenAPI document: 8.75.0
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
 * ConsumerWebhook Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ConsumerWebhook implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConsumerWebhook';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'unified_api' => '\Apideck\Client\Model\UnifiedApiId',
        'status' => 'string',
        'delivery_url' => 'string',
        'execute_base_url' => 'string',
        'events' => 'string[]',
        'id' => 'string',
        'description' => 'string',
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
        'unified_api' => null,
        'status' => null,
        'delivery_url' => 'uri',
        'execute_base_url' => 'uri',
        'events' => null,
        'id' => null,
        'description' => null,
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
        'unified_api' => 'unified_api',
        'status' => 'status',
        'delivery_url' => 'delivery_url',
        'execute_base_url' => 'execute_base_url',
        'events' => 'events',
        'id' => 'id',
        'description' => 'description',
        'updated_at' => 'updated_at',
        'created_at' => 'created_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'unified_api' => 'setUnifiedApi',
        'status' => 'setStatus',
        'delivery_url' => 'setDeliveryUrl',
        'execute_base_url' => 'setExecuteBaseUrl',
        'events' => 'setEvents',
        'id' => 'setId',
        'description' => 'setDescription',
        'updated_at' => 'setUpdatedAt',
        'created_at' => 'setCreatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'unified_api' => 'getUnifiedApi',
        'status' => 'getStatus',
        'delivery_url' => 'getDeliveryUrl',
        'execute_base_url' => 'getExecuteBaseUrl',
        'events' => 'getEvents',
        'id' => 'getId',
        'description' => 'getDescription',
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

    const STATUS_ENABLED = 'enabled';
    const STATUS_DISABLED = 'disabled';
    const EVENTS_STAR = '*';
    const EVENTS_CRM_ACTIVITY_CREATED = 'crm.activity.created';
    const EVENTS_CRM_ACTIVITY_UPDATED = 'crm.activity.updated';
    const EVENTS_CRM_ACTIVITY_DELETED = 'crm.activity.deleted';
    const EVENTS_CRM_COMPANY_CREATED = 'crm.company.created';
    const EVENTS_CRM_COMPANY_UPDATED = 'crm.company.updated';
    const EVENTS_CRM_COMPANY_DELETED = 'crm.company.deleted';
    const EVENTS_CRM_CONTACT_CREATED = 'crm.contact.created';
    const EVENTS_CRM_CONTACT_UPDATED = 'crm.contact.updated';
    const EVENTS_CRM_CONTACT_DELETED = 'crm.contact.deleted';
    const EVENTS_CRM_LEAD_CREATED = 'crm.lead.created';
    const EVENTS_CRM_LEAD_UPDATED = 'crm.lead.updated';
    const EVENTS_CRM_LEAD_DELETED = 'crm.lead.deleted';
    const EVENTS_CRM_NOTE_CREATED = 'crm.note.created';
    const EVENTS_CRM_NOTES_UPDATED = 'crm.notes.updated';
    const EVENTS_CRM_NOTES_DELETED = 'crm.notes.deleted';
    const EVENTS_CRM_OPPORTUNITY_CREATED = 'crm.opportunity.created';
    const EVENTS_CRM_OPPORTUNITY_UPDATED = 'crm.opportunity.updated';
    const EVENTS_CRM_OPPORTUNITY_DELETED = 'crm.opportunity.deleted';
    const EVENTS_LEAD_LEAD_CREATED = 'lead.lead.created';
    const EVENTS_LEAD_LEAD_UPDATED = 'lead.lead.updated';
    const EVENTS_LEAD_LEAD_DELETED = 'lead.lead.deleted';
    const EVENTS_VAULT_CONNECTION_CREATED = 'vault.connection.created';
    const EVENTS_VAULT_CONNECTION_UPDATED = 'vault.connection.updated';
    const EVENTS_VAULT_CONNECTION_DELETED = 'vault.connection.deleted';
    const EVENTS_VAULT_CONNECTION_CALLABLE = 'vault.connection.callable';
    const EVENTS_VAULT_CONNECTION_TOKEN_REFRESH_FAILED = 'vault.connection.token_refresh.failed';
    const EVENTS_ATS_JOB_CREATED = 'ats.job.created';
    const EVENTS_ATS_JOB_UPDATED = 'ats.job.updated';
    const EVENTS_ATS_JOB_DELETED = 'ats.job.deleted';
    const EVENTS_ATS_APPLICANT_CREATED = 'ats.applicant.created';
    const EVENTS_ATS_APPLICANT_UPDATED = 'ats.applicant.updated';
    const EVENTS_ATS_APPLICANT_DELETED = 'ats.applicant.deleted';
    const EVENTS_ACCOUNTING_CUSTOMER_CREATED = 'accounting.customer.created';
    const EVENTS_ACCOUNTING_CUSTOMER_UPDATED = 'accounting.customer.updated';
    const EVENTS_ACCOUNTING_CUSTOMER_DELETED = 'accounting.customer.deleted';
    const EVENTS_ACCOUNTING_INVOICE_CREATED = 'accounting.invoice.created';
    const EVENTS_ACCOUNTING_INVOICE_UPDATED = 'accounting.invoice.updated';
    const EVENTS_ACCOUNTING_INVOICE_DELETED = 'accounting.invoice.deleted';
    const EVENTS_ACCOUNTING_INVOICE_ITEM_CREATED = 'accounting.invoice_item.created';
    const EVENTS_ACCOUNTING_INVOICE_ITEM_UPDATED = 'accounting.invoice_item.updated';
    const EVENTS_ACCOUNTING_INVOICE_ITEM_DELETED = 'accounting.invoice_item.deleted';
    const EVENTS_ACCOUNTING_LEDGER_ACCOUNT_CREATED = 'accounting.ledger_account.created';
    const EVENTS_ACCOUNTING_LEDGER_ACCOUNT_UPDATED = 'accounting.ledger_account.updated';
    const EVENTS_ACCOUNTING_LEDGER_ACCOUNT_DELETED = 'accounting.ledger_account.deleted';
    const EVENTS_ACCOUNTING_TAX_RATE_CREATED = 'accounting.tax_rate.created';
    const EVENTS_ACCOUNTING_TAX_RATE_UPDATED = 'accounting.tax_rate.updated';
    const EVENTS_ACCOUNTING_TAX_RATE_DELETED = 'accounting.tax_rate.deleted';
    const EVENTS_ACCOUNTING_BILL_CREATED = 'accounting.bill.created';
    const EVENTS_ACCOUNTING_BILL_UPDATED = 'accounting.bill.updated';
    const EVENTS_ACCOUNTING_BILL_DELETED = 'accounting.bill.deleted';
    const EVENTS_ACCOUNTING_PAYMENT_CREATED = 'accounting.payment.created';
    const EVENTS_ACCOUNTING_PAYMENT_UPDATED = 'accounting.payment.updated';
    const EVENTS_ACCOUNTING_PAYMENT_DELETED = 'accounting.payment.deleted';
    const EVENTS_ACCOUNTING_SUPPLIER_CREATED = 'accounting.supplier.created';
    const EVENTS_ACCOUNTING_SUPPLIER_UPDATED = 'accounting.supplier.updated';
    const EVENTS_ACCOUNTING_SUPPLIER_DELETED = 'accounting.supplier.deleted';
    const EVENTS_POS_ORDER_CREATED = 'pos.order.created';
    const EVENTS_POS_ORDER_UPDATED = 'pos.order.updated';
    const EVENTS_POS_ORDER_DELETED = 'pos.order.deleted';
    const EVENTS_POS_PRODUCT_CREATED = 'pos.product.created';
    const EVENTS_POS_PRODUCT_UPDATED = 'pos.product.updated';
    const EVENTS_POS_PRODUCT_DELETED = 'pos.product.deleted';
    const EVENTS_POS_PAYMENT_CREATED = 'pos.payment.created';
    const EVENTS_POS_PAYMENT_UPDATED = 'pos.payment.updated';
    const EVENTS_POS_PAYMENT_DELETED = 'pos.payment.deleted';
    const EVENTS_POS_MERCHANT_CREATED = 'pos.merchant.created';
    const EVENTS_POS_MERCHANT_UPDATED = 'pos.merchant.updated';
    const EVENTS_POS_MERCHANT_DELETED = 'pos.merchant.deleted';
    const EVENTS_POS_LOCATION_CREATED = 'pos.location.created';
    const EVENTS_POS_LOCATION_UPDATED = 'pos.location.updated';
    const EVENTS_POS_LOCATION_DELETED = 'pos.location.deleted';
    const EVENTS_POS_ITEM_CREATED = 'pos.item.created';
    const EVENTS_POS_ITEM_UPDATED = 'pos.item.updated';
    const EVENTS_POS_ITEM_DELETED = 'pos.item.deleted';
    const EVENTS_POS_MODIFIER_CREATED = 'pos.modifier.created';
    const EVENTS_POS_MODIFIER_UPDATED = 'pos.modifier.updated';
    const EVENTS_POS_MODIFIER_DELETED = 'pos.modifier.deleted';
    const EVENTS_POS_MODIFIER_GROUP_CREATED = 'pos.modifier-group.created';
    const EVENTS_POS_MODIFIER_GROUP_UPDATED = 'pos.modifier-group.updated';
    const EVENTS_POS_MODIFIER_GROUP_DELETED = 'pos.modifier-group.deleted';
    const EVENTS_HRIS_EMPLOYEE_CREATED = 'hris.employee.created';
    const EVENTS_HRIS_EMPLOYEE_UPDATED = 'hris.employee.updated';
    const EVENTS_HRIS_EMPLOYEE_DELETED = 'hris.employee.deleted';
    const EVENTS_HRIS_COMPANY_CREATED = 'hris.company.created';
    const EVENTS_HRIS_COMPANY_UPDATED = 'hris.company.updated';
    const EVENTS_HRIS_COMPANY_DELETED = 'hris.company.deleted';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ENABLED,
            self::STATUS_DISABLED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEventsAllowableValues()
    {
        return [
            self::EVENTS_STAR,
            self::EVENTS_CRM_ACTIVITY_CREATED,
            self::EVENTS_CRM_ACTIVITY_UPDATED,
            self::EVENTS_CRM_ACTIVITY_DELETED,
            self::EVENTS_CRM_COMPANY_CREATED,
            self::EVENTS_CRM_COMPANY_UPDATED,
            self::EVENTS_CRM_COMPANY_DELETED,
            self::EVENTS_CRM_CONTACT_CREATED,
            self::EVENTS_CRM_CONTACT_UPDATED,
            self::EVENTS_CRM_CONTACT_DELETED,
            self::EVENTS_CRM_LEAD_CREATED,
            self::EVENTS_CRM_LEAD_UPDATED,
            self::EVENTS_CRM_LEAD_DELETED,
            self::EVENTS_CRM_NOTE_CREATED,
            self::EVENTS_CRM_NOTES_UPDATED,
            self::EVENTS_CRM_NOTES_DELETED,
            self::EVENTS_CRM_OPPORTUNITY_CREATED,
            self::EVENTS_CRM_OPPORTUNITY_UPDATED,
            self::EVENTS_CRM_OPPORTUNITY_DELETED,
            self::EVENTS_LEAD_LEAD_CREATED,
            self::EVENTS_LEAD_LEAD_UPDATED,
            self::EVENTS_LEAD_LEAD_DELETED,
            self::EVENTS_VAULT_CONNECTION_CREATED,
            self::EVENTS_VAULT_CONNECTION_UPDATED,
            self::EVENTS_VAULT_CONNECTION_DELETED,
            self::EVENTS_VAULT_CONNECTION_CALLABLE,
            self::EVENTS_VAULT_CONNECTION_TOKEN_REFRESH_FAILED,
            self::EVENTS_ATS_JOB_CREATED,
            self::EVENTS_ATS_JOB_UPDATED,
            self::EVENTS_ATS_JOB_DELETED,
            self::EVENTS_ATS_APPLICANT_CREATED,
            self::EVENTS_ATS_APPLICANT_UPDATED,
            self::EVENTS_ATS_APPLICANT_DELETED,
            self::EVENTS_ACCOUNTING_CUSTOMER_CREATED,
            self::EVENTS_ACCOUNTING_CUSTOMER_UPDATED,
            self::EVENTS_ACCOUNTING_CUSTOMER_DELETED,
            self::EVENTS_ACCOUNTING_INVOICE_CREATED,
            self::EVENTS_ACCOUNTING_INVOICE_UPDATED,
            self::EVENTS_ACCOUNTING_INVOICE_DELETED,
            self::EVENTS_ACCOUNTING_INVOICE_ITEM_CREATED,
            self::EVENTS_ACCOUNTING_INVOICE_ITEM_UPDATED,
            self::EVENTS_ACCOUNTING_INVOICE_ITEM_DELETED,
            self::EVENTS_ACCOUNTING_LEDGER_ACCOUNT_CREATED,
            self::EVENTS_ACCOUNTING_LEDGER_ACCOUNT_UPDATED,
            self::EVENTS_ACCOUNTING_LEDGER_ACCOUNT_DELETED,
            self::EVENTS_ACCOUNTING_TAX_RATE_CREATED,
            self::EVENTS_ACCOUNTING_TAX_RATE_UPDATED,
            self::EVENTS_ACCOUNTING_TAX_RATE_DELETED,
            self::EVENTS_ACCOUNTING_BILL_CREATED,
            self::EVENTS_ACCOUNTING_BILL_UPDATED,
            self::EVENTS_ACCOUNTING_BILL_DELETED,
            self::EVENTS_ACCOUNTING_PAYMENT_CREATED,
            self::EVENTS_ACCOUNTING_PAYMENT_UPDATED,
            self::EVENTS_ACCOUNTING_PAYMENT_DELETED,
            self::EVENTS_ACCOUNTING_SUPPLIER_CREATED,
            self::EVENTS_ACCOUNTING_SUPPLIER_UPDATED,
            self::EVENTS_ACCOUNTING_SUPPLIER_DELETED,
            self::EVENTS_POS_ORDER_CREATED,
            self::EVENTS_POS_ORDER_UPDATED,
            self::EVENTS_POS_ORDER_DELETED,
            self::EVENTS_POS_PRODUCT_CREATED,
            self::EVENTS_POS_PRODUCT_UPDATED,
            self::EVENTS_POS_PRODUCT_DELETED,
            self::EVENTS_POS_PAYMENT_CREATED,
            self::EVENTS_POS_PAYMENT_UPDATED,
            self::EVENTS_POS_PAYMENT_DELETED,
            self::EVENTS_POS_MERCHANT_CREATED,
            self::EVENTS_POS_MERCHANT_UPDATED,
            self::EVENTS_POS_MERCHANT_DELETED,
            self::EVENTS_POS_LOCATION_CREATED,
            self::EVENTS_POS_LOCATION_UPDATED,
            self::EVENTS_POS_LOCATION_DELETED,
            self::EVENTS_POS_ITEM_CREATED,
            self::EVENTS_POS_ITEM_UPDATED,
            self::EVENTS_POS_ITEM_DELETED,
            self::EVENTS_POS_MODIFIER_CREATED,
            self::EVENTS_POS_MODIFIER_UPDATED,
            self::EVENTS_POS_MODIFIER_DELETED,
            self::EVENTS_POS_MODIFIER_GROUP_CREATED,
            self::EVENTS_POS_MODIFIER_GROUP_UPDATED,
            self::EVENTS_POS_MODIFIER_GROUP_DELETED,
            self::EVENTS_HRIS_EMPLOYEE_CREATED,
            self::EVENTS_HRIS_EMPLOYEE_UPDATED,
            self::EVENTS_HRIS_EMPLOYEE_DELETED,
            self::EVENTS_HRIS_COMPANY_CREATED,
            self::EVENTS_HRIS_COMPANY_UPDATED,
            self::EVENTS_HRIS_COMPANY_DELETED,
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
        $this->container['unified_api'] = $data['unified_api'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['delivery_url'] = $data['delivery_url'] ?? null;
        $this->container['execute_base_url'] = $data['execute_base_url'] ?? null;
        $this->container['events'] = $data['events'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
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

        if ($this->container['unified_api'] === null) {
            $invalidProperties[] = "'unified_api' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['delivery_url'] === null) {
            $invalidProperties[] = "'delivery_url' can't be null";
        }
        if (!preg_match("/^(https?):\/\//", $this->container['delivery_url'])) {
            $invalidProperties[] = "invalid value for 'delivery_url', must be conform to the pattern /^(https?):\/\//.";
        }

        if ($this->container['execute_base_url'] === null) {
            $invalidProperties[] = "'execute_base_url' can't be null";
        }
        if (!preg_match("/^(https?):\/\//", $this->container['execute_base_url'])) {
            $invalidProperties[] = "invalid value for 'execute_base_url', must be conform to the pattern /^(https?):\/\//.";
        }

        if ($this->container['events'] === null) {
            $invalidProperties[] = "'events' can't be null";
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
     * Gets unified_api
     *
     * @return \Apideck\Client\Model\UnifiedApiId
     */
    public function getUnifiedApi()
    {
        return $this->container['unified_api'];
    }

    /**
     * Sets unified_api
     *
     * @param \Apideck\Client\Model\UnifiedApiId $unified_api unified_api
     *
     * @return self
     */
    public function setUnifiedApi($unified_api)
    {
        $this->container['unified_api'] = $unified_api;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The status of the webhook.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
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
     * Gets delivery_url
     *
     * @return string
     */
    public function getDeliveryUrl()
    {
        return $this->container['delivery_url'];
    }

    /**
     * Sets delivery_url
     *
     * @param string $delivery_url The delivery url of the webhook endpoint.
     *
     * @return self
     */
    public function setDeliveryUrl($delivery_url)
    {

        if ((!preg_match("/^(https?):\/\//", $delivery_url))) {
            throw new \InvalidArgumentException("invalid value for $delivery_url when calling ConsumerWebhook., must conform to the pattern /^(https?):\/\//.");
        }

        $this->container['delivery_url'] = $delivery_url;

        return $this;
    }

    /**
     * Gets execute_base_url
     *
     * @return string
     */
    public function getExecuteBaseUrl()
    {
        return $this->container['execute_base_url'];
    }

    /**
     * Sets execute_base_url
     *
     * @param string $execute_base_url The Unify Base URL events from connectors will be sent to after service id is appended.
     *
     * @return self
     */
    public function setExecuteBaseUrl($execute_base_url)
    {

        if ((!preg_match("/^(https?):\/\//", $execute_base_url))) {
            throw new \InvalidArgumentException("invalid value for $execute_base_url when calling ConsumerWebhook., must conform to the pattern /^(https?):\/\//.");
        }

        $this->container['execute_base_url'] = $execute_base_url;

        return $this;
    }

    /**
     * Gets events
     *
     * @return string[]
     */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
     * Sets events
     *
     * @param string[] $events The list of subscribed events for this webhook. [`*`] indicates that all events are enabled.
     *
     * @return self
     */
    public function setEvents($events)
    {
        $allowedValues = $this->getEventsAllowableValues();
        if (array_diff($events, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'events', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['events'] = $events;

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


