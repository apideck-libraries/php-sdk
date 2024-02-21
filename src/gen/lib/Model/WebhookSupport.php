<?php
/**
 * WebhookSupport
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
 * The version of the OpenAPI document: 10.3.2
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
 * WebhookSupport Class Doc Comment
 *
 * @category Class
 * @description How webhooks are supported for the connector. Sometimes the connector natively supports webhooks, other times Apideck virtualizes them based on polling.
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class WebhookSupport implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WebhookSupport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'mode' => 'string',
        'subscription_level' => 'string',
        'managed_via' => 'string',
        'virtual_webhooks' => '\Apideck\Client\Model\VirtualWebhooks'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'mode' => null,
        'subscription_level' => null,
        'managed_via' => null,
        'virtual_webhooks' => null
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
        'mode' => 'mode',
        'subscription_level' => 'subscription_level',
        'managed_via' => 'managed_via',
        'virtual_webhooks' => 'virtual_webhooks'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mode' => 'setMode',
        'subscription_level' => 'setSubscriptionLevel',
        'managed_via' => 'setManagedVia',
        'virtual_webhooks' => 'setVirtualWebhooks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mode' => 'getMode',
        'subscription_level' => 'getSubscriptionLevel',
        'managed_via' => 'getManagedVia',
        'virtual_webhooks' => 'getVirtualWebhooks'
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

    const MODE_NATIVE = 'native';
    const MODE_VIRTUAL = 'virtual';
    const MODE_NONE = 'none';
    const SUBSCRIPTION_LEVEL_CONNECTION = 'connection';
    const SUBSCRIPTION_LEVEL_INTEGRATION = 'integration';
    const MANAGED_VIA_MANUAL = 'manual';
    const MANAGED_VIA_API = 'api';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getModeAllowableValues()
    {
        return [
            self::MODE_NATIVE,
            self::MODE_VIRTUAL,
            self::MODE_NONE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSubscriptionLevelAllowableValues()
    {
        return [
            self::SUBSCRIPTION_LEVEL_CONNECTION,
            self::SUBSCRIPTION_LEVEL_INTEGRATION,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getManagedViaAllowableValues()
    {
        return [
            self::MANAGED_VIA_MANUAL,
            self::MANAGED_VIA_API,
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
        $this->container['mode'] = $data['mode'] ?? null;
        $this->container['subscription_level'] = $data['subscription_level'] ?? null;
        $this->container['managed_via'] = $data['managed_via'] ?? null;
        $this->container['virtual_webhooks'] = $data['virtual_webhooks'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getModeAllowableValues();
        if (!is_null($this->container['mode']) && !in_array($this->container['mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'mode', must be one of '%s'",
                $this->container['mode'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSubscriptionLevelAllowableValues();
        if (!is_null($this->container['subscription_level']) && !in_array($this->container['subscription_level'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'subscription_level', must be one of '%s'",
                $this->container['subscription_level'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getManagedViaAllowableValues();
        if (!is_null($this->container['managed_via']) && !in_array($this->container['managed_via'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'managed_via', must be one of '%s'",
                $this->container['managed_via'],
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
     * Gets mode
     *
     * @return string|null
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param string|null $mode Mode of the webhook support.
     *
     * @return self
     */
    public function setMode($mode)
    {
        $allowedValues = $this->getModeAllowableValues();
        if (!is_null($mode) && !in_array($mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'mode', must be one of '%s'",
                    $mode,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mode'] = $mode;

        return $this;
    }

    /**
     * Gets subscription_level
     *
     * @return string|null
     */
    public function getSubscriptionLevel()
    {
        return $this->container['subscription_level'];
    }

    /**
     * Sets subscription_level
     *
     * @param string|null $subscription_level Received events are scoped to connection or across integration.
     *
     * @return self
     */
    public function setSubscriptionLevel($subscription_level)
    {
        $allowedValues = $this->getSubscriptionLevelAllowableValues();
        if (!is_null($subscription_level) && !in_array($subscription_level, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'subscription_level', must be one of '%s'",
                    $subscription_level,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['subscription_level'] = $subscription_level;

        return $this;
    }

    /**
     * Gets managed_via
     *
     * @return string|null
     */
    public function getManagedVia()
    {
        return $this->container['managed_via'];
    }

    /**
     * Sets managed_via
     *
     * @param string|null $managed_via How the subscription is managed in the downstream.
     *
     * @return self
     */
    public function setManagedVia($managed_via)
    {
        $allowedValues = $this->getManagedViaAllowableValues();
        if (!is_null($managed_via) && !in_array($managed_via, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'managed_via', must be one of '%s'",
                    $managed_via,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['managed_via'] = $managed_via;

        return $this;
    }

    /**
     * Gets virtual_webhooks
     *
     * @return \Apideck\Client\Model\VirtualWebhooks|null
     */
    public function getVirtualWebhooks()
    {
        return $this->container['virtual_webhooks'];
    }

    /**
     * Sets virtual_webhooks
     *
     * @param \Apideck\Client\Model\VirtualWebhooks|null $virtual_webhooks virtual_webhooks
     *
     * @return self
     */
    public function setVirtualWebhooks($virtual_webhooks)
    {
        $this->container['virtual_webhooks'] = $virtual_webhooks;

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


