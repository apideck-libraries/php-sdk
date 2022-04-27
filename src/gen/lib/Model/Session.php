<?php
/**
 * Session
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
 * The version of the OpenAPI document: 8.27.0
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
 * Session Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Session implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Session';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'consumer_metadata' => '\Apideck\Client\Model\ConsumerMetadata',
        'custom_consumer_settings' => 'array<string,object>',
        'redirect_uri' => 'string',
        'settings' => '\Apideck\Client\Model\SessionSettings',
        'theme' => '\Apideck\Client\Model\SessionTheme'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'consumer_metadata' => null,
        'custom_consumer_settings' => null,
        'redirect_uri' => null,
        'settings' => null,
        'theme' => null
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
        'consumer_metadata' => 'consumer_metadata',
        'custom_consumer_settings' => 'custom_consumer_settings',
        'redirect_uri' => 'redirect_uri',
        'settings' => 'settings',
        'theme' => 'theme'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'consumer_metadata' => 'setConsumerMetadata',
        'custom_consumer_settings' => 'setCustomConsumerSettings',
        'redirect_uri' => 'setRedirectUri',
        'settings' => 'setSettings',
        'theme' => 'setTheme'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'consumer_metadata' => 'getConsumerMetadata',
        'custom_consumer_settings' => 'getCustomConsumerSettings',
        'redirect_uri' => 'getRedirectUri',
        'settings' => 'getSettings',
        'theme' => 'getTheme'
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
        $this->container['consumer_metadata'] = $data['consumer_metadata'] ?? null;
        $this->container['custom_consumer_settings'] = $data['custom_consumer_settings'] ?? null;
        $this->container['redirect_uri'] = $data['redirect_uri'] ?? null;
        $this->container['settings'] = $data['settings'] ?? null;
        $this->container['theme'] = $data['theme'] ?? null;
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
     * Gets consumer_metadata
     *
     * @return \Apideck\Client\Model\ConsumerMetadata|null
     */
    public function getConsumerMetadata()
    {
        return $this->container['consumer_metadata'];
    }

    /**
     * Sets consumer_metadata
     *
     * @param \Apideck\Client\Model\ConsumerMetadata|null $consumer_metadata consumer_metadata
     *
     * @return self
     */
    public function setConsumerMetadata($consumer_metadata)
    {
        $this->container['consumer_metadata'] = $consumer_metadata;

        return $this;
    }

    /**
     * Gets custom_consumer_settings
     *
     * @return array<string,object>|null
     */
    public function getCustomConsumerSettings()
    {
        return $this->container['custom_consumer_settings'];
    }

    /**
     * Sets custom_consumer_settings
     *
     * @param array<string,object>|null $custom_consumer_settings Custom consumer settings that are passed as part of the session.
     *
     * @return self
     */
    public function setCustomConsumerSettings($custom_consumer_settings)
    {
        $this->container['custom_consumer_settings'] = $custom_consumer_settings;

        return $this;
    }

    /**
     * Gets redirect_uri
     *
     * @return string|null
     */
    public function getRedirectUri()
    {
        return $this->container['redirect_uri'];
    }

    /**
     * Sets redirect_uri
     *
     * @param string|null $redirect_uri redirect_uri
     *
     * @return self
     */
    public function setRedirectUri($redirect_uri)
    {
        $this->container['redirect_uri'] = $redirect_uri;

        return $this;
    }

    /**
     * Gets settings
     *
     * @return \Apideck\Client\Model\SessionSettings|null
     */
    public function getSettings()
    {
        return $this->container['settings'];
    }

    /**
     * Sets settings
     *
     * @param \Apideck\Client\Model\SessionSettings|null $settings settings
     *
     * @return self
     */
    public function setSettings($settings)
    {
        $this->container['settings'] = $settings;

        return $this;
    }

    /**
     * Gets theme
     *
     * @return \Apideck\Client\Model\SessionTheme|null
     */
    public function getTheme()
    {
        return $this->container['theme'];
    }

    /**
     * Sets theme
     *
     * @param \Apideck\Client\Model\SessionTheme|null $theme theme
     *
     * @return self
     */
    public function setTheme($theme)
    {
        $this->container['theme'] = $theme;

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


