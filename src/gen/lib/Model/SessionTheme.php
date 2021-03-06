<?php
/**
 * SessionTheme
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
 * The version of the OpenAPI document: 8.37.0
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
 * SessionTheme Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SessionTheme implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Session_theme';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'favicon' => 'string',
        'primary_color' => 'string',
        'privacy_url' => 'string',
        'sidepanel_background_color' => 'string',
        'sidepanel_text_color' => 'string',
        'terms_url' => 'string',
        'vault_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'favicon' => null,
        'primary_color' => null,
        'privacy_url' => null,
        'sidepanel_background_color' => null,
        'sidepanel_text_color' => null,
        'terms_url' => null,
        'vault_name' => null
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
        'favicon' => 'favicon',
        'primary_color' => 'primary_color',
        'privacy_url' => 'privacy_url',
        'sidepanel_background_color' => 'sidepanel_background_color',
        'sidepanel_text_color' => 'sidepanel_text_color',
        'terms_url' => 'terms_url',
        'vault_name' => 'vault_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'favicon' => 'setFavicon',
        'primary_color' => 'setPrimaryColor',
        'privacy_url' => 'setPrivacyUrl',
        'sidepanel_background_color' => 'setSidepanelBackgroundColor',
        'sidepanel_text_color' => 'setSidepanelTextColor',
        'terms_url' => 'setTermsUrl',
        'vault_name' => 'setVaultName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'favicon' => 'getFavicon',
        'primary_color' => 'getPrimaryColor',
        'privacy_url' => 'getPrivacyUrl',
        'sidepanel_background_color' => 'getSidepanelBackgroundColor',
        'sidepanel_text_color' => 'getSidepanelTextColor',
        'terms_url' => 'getTermsUrl',
        'vault_name' => 'getVaultName'
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
        $this->container['favicon'] = $data['favicon'] ?? null;
        $this->container['primary_color'] = $data['primary_color'] ?? null;
        $this->container['privacy_url'] = $data['privacy_url'] ?? null;
        $this->container['sidepanel_background_color'] = $data['sidepanel_background_color'] ?? null;
        $this->container['sidepanel_text_color'] = $data['sidepanel_text_color'] ?? null;
        $this->container['terms_url'] = $data['terms_url'] ?? null;
        $this->container['vault_name'] = $data['vault_name'] ?? null;
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
     * Gets favicon
     *
     * @return string|null
     */
    public function getFavicon()
    {
        return $this->container['favicon'];
    }

    /**
     * Sets favicon
     *
     * @param string|null $favicon favicon
     *
     * @return self
     */
    public function setFavicon($favicon)
    {
        $this->container['favicon'] = $favicon;

        return $this;
    }

    /**
     * Gets primary_color
     *
     * @return string|null
     */
    public function getPrimaryColor()
    {
        return $this->container['primary_color'];
    }

    /**
     * Sets primary_color
     *
     * @param string|null $primary_color primary_color
     *
     * @return self
     */
    public function setPrimaryColor($primary_color)
    {
        $this->container['primary_color'] = $primary_color;

        return $this;
    }

    /**
     * Gets privacy_url
     *
     * @return string|null
     */
    public function getPrivacyUrl()
    {
        return $this->container['privacy_url'];
    }

    /**
     * Sets privacy_url
     *
     * @param string|null $privacy_url privacy_url
     *
     * @return self
     */
    public function setPrivacyUrl($privacy_url)
    {
        $this->container['privacy_url'] = $privacy_url;

        return $this;
    }

    /**
     * Gets sidepanel_background_color
     *
     * @return string|null
     */
    public function getSidepanelBackgroundColor()
    {
        return $this->container['sidepanel_background_color'];
    }

    /**
     * Sets sidepanel_background_color
     *
     * @param string|null $sidepanel_background_color sidepanel_background_color
     *
     * @return self
     */
    public function setSidepanelBackgroundColor($sidepanel_background_color)
    {
        $this->container['sidepanel_background_color'] = $sidepanel_background_color;

        return $this;
    }

    /**
     * Gets sidepanel_text_color
     *
     * @return string|null
     */
    public function getSidepanelTextColor()
    {
        return $this->container['sidepanel_text_color'];
    }

    /**
     * Sets sidepanel_text_color
     *
     * @param string|null $sidepanel_text_color sidepanel_text_color
     *
     * @return self
     */
    public function setSidepanelTextColor($sidepanel_text_color)
    {
        $this->container['sidepanel_text_color'] = $sidepanel_text_color;

        return $this;
    }

    /**
     * Gets terms_url
     *
     * @return string|null
     */
    public function getTermsUrl()
    {
        return $this->container['terms_url'];
    }

    /**
     * Sets terms_url
     *
     * @param string|null $terms_url terms_url
     *
     * @return self
     */
    public function setTermsUrl($terms_url)
    {
        $this->container['terms_url'] = $terms_url;

        return $this;
    }

    /**
     * Gets vault_name
     *
     * @return string|null
     */
    public function getVaultName()
    {
        return $this->container['vault_name'];
    }

    /**
     * Sets vault_name
     *
     * @param string|null $vault_name vault_name
     *
     * @return self
     */
    public function setVaultName($vault_name)
    {
        $this->container['vault_name'] = $vault_name;

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


