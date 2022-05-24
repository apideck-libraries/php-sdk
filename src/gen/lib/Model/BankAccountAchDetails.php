<?php
/**
 * BankAccountAchDetails
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
 * The version of the OpenAPI document: 8.30.0
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
 * BankAccountAchDetails Class Doc Comment
 *
 * @category Class
 * @description ACH-specific details about &#x60;BANK_ACCOUNT&#x60; type payments with the &#x60;transfer_type&#x60; of &#x60;ACH&#x60;.
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BankAccountAchDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Bank_account_ach_details';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'routing_number' => 'string',
        'account_number_suffix' => 'string',
        'account_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'routing_number' => null,
        'account_number_suffix' => null,
        'account_type' => null
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
        'routing_number' => 'routing_number',
        'account_number_suffix' => 'account_number_suffix',
        'account_type' => 'account_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'routing_number' => 'setRoutingNumber',
        'account_number_suffix' => 'setAccountNumberSuffix',
        'account_type' => 'setAccountType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'routing_number' => 'getRoutingNumber',
        'account_number_suffix' => 'getAccountNumberSuffix',
        'account_type' => 'getAccountType'
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
        $this->container['routing_number'] = $data['routing_number'] ?? null;
        $this->container['account_number_suffix'] = $data['account_number_suffix'] ?? null;
        $this->container['account_type'] = $data['account_type'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['routing_number']) && (mb_strlen($this->container['routing_number']) > 50)) {
            $invalidProperties[] = "invalid value for 'routing_number', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['account_number_suffix']) && (mb_strlen($this->container['account_number_suffix']) > 4)) {
            $invalidProperties[] = "invalid value for 'account_number_suffix', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['account_type']) && (mb_strlen($this->container['account_type']) > 50)) {
            $invalidProperties[] = "invalid value for 'account_type', the character length must be smaller than or equal to 50.";
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
     * Gets routing_number
     *
     * @return string|null
     */
    public function getRoutingNumber()
    {
        return $this->container['routing_number'];
    }

    /**
     * Sets routing_number
     *
     * @param string|null $routing_number The routing number for the bank account.
     *
     * @return self
     */
    public function setRoutingNumber($routing_number)
    {
        if (!is_null($routing_number) && (mb_strlen($routing_number) > 50)) {
            throw new \InvalidArgumentException('invalid length for $routing_number when calling BankAccountAchDetails., must be smaller than or equal to 50.');
        }

        $this->container['routing_number'] = $routing_number;

        return $this;
    }

    /**
     * Gets account_number_suffix
     *
     * @return string|null
     */
    public function getAccountNumberSuffix()
    {
        return $this->container['account_number_suffix'];
    }

    /**
     * Sets account_number_suffix
     *
     * @param string|null $account_number_suffix The last few digits of the bank account number.
     *
     * @return self
     */
    public function setAccountNumberSuffix($account_number_suffix)
    {
        if (!is_null($account_number_suffix) && (mb_strlen($account_number_suffix) > 4)) {
            throw new \InvalidArgumentException('invalid length for $account_number_suffix when calling BankAccountAchDetails., must be smaller than or equal to 4.');
        }

        $this->container['account_number_suffix'] = $account_number_suffix;

        return $this;
    }

    /**
     * Gets account_type
     *
     * @return string|null
     */
    public function getAccountType()
    {
        return $this->container['account_type'];
    }

    /**
     * Sets account_type
     *
     * @param string|null $account_type The type of the bank account performing the transfer. The account type can be `CHECKING`, `SAVINGS`, or `UNKNOWN`.
     *
     * @return self
     */
    public function setAccountType($account_type)
    {
        if (!is_null($account_type) && (mb_strlen($account_type) > 50)) {
            throw new \InvalidArgumentException('invalid length for $account_type when calling BankAccountAchDetails., must be smaller than or equal to 50.');
        }

        $this->container['account_type'] = $account_type;

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


