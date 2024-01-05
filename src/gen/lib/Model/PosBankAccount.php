<?php
/**
 * PosBankAccount
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
 * The version of the OpenAPI document: 10.2.0
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
 * PosBankAccount Class Doc Comment
 *
 * @category Class
 * @description Card details for this payment. This field is currently not available. Reach out to our team for more info.
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PosBankAccount implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PosBankAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bank_name' => 'string',
        'transfer_type' => 'string',
        'account_ownership_type' => 'string',
        'fingerprint' => 'string',
        'country' => 'string',
        'statement_description' => 'string',
        'ach_details' => '\Apideck\Client\Model\PosBankAccountAchDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bank_name' => null,
        'transfer_type' => null,
        'account_ownership_type' => null,
        'fingerprint' => null,
        'country' => null,
        'statement_description' => null,
        'ach_details' => null
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
        'bank_name' => 'bank_name',
        'transfer_type' => 'transfer_type',
        'account_ownership_type' => 'account_ownership_type',
        'fingerprint' => 'fingerprint',
        'country' => 'country',
        'statement_description' => 'statement_description',
        'ach_details' => 'ach_details'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bank_name' => 'setBankName',
        'transfer_type' => 'setTransferType',
        'account_ownership_type' => 'setAccountOwnershipType',
        'fingerprint' => 'setFingerprint',
        'country' => 'setCountry',
        'statement_description' => 'setStatementDescription',
        'ach_details' => 'setAchDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bank_name' => 'getBankName',
        'transfer_type' => 'getTransferType',
        'account_ownership_type' => 'getAccountOwnershipType',
        'fingerprint' => 'getFingerprint',
        'country' => 'getCountry',
        'statement_description' => 'getStatementDescription',
        'ach_details' => 'getAchDetails'
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
        $this->container['bank_name'] = $data['bank_name'] ?? null;
        $this->container['transfer_type'] = $data['transfer_type'] ?? null;
        $this->container['account_ownership_type'] = $data['account_ownership_type'] ?? null;
        $this->container['fingerprint'] = $data['fingerprint'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['statement_description'] = $data['statement_description'] ?? null;
        $this->container['ach_details'] = $data['ach_details'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['bank_name']) && (mb_strlen($this->container['bank_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'bank_name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['transfer_type']) && (mb_strlen($this->container['transfer_type']) > 50)) {
            $invalidProperties[] = "invalid value for 'transfer_type', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['account_ownership_type']) && (mb_strlen($this->container['account_ownership_type']) > 50)) {
            $invalidProperties[] = "invalid value for 'account_ownership_type', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['fingerprint']) && (mb_strlen($this->container['fingerprint']) > 255)) {
            $invalidProperties[] = "invalid value for 'fingerprint', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) > 2)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) < 2)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['statement_description']) && (mb_strlen($this->container['statement_description']) > 1000)) {
            $invalidProperties[] = "invalid value for 'statement_description', the character length must be smaller than or equal to 1000.";
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
     * Gets bank_name
     *
     * @return string|null
     */
    public function getBankName()
    {
        return $this->container['bank_name'];
    }

    /**
     * Sets bank_name
     *
     * @param string|null $bank_name The name of the bank associated with the bank account.
     *
     * @return self
     */
    public function setBankName($bank_name)
    {
        if (!is_null($bank_name) && (mb_strlen($bank_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $bank_name when calling PosBankAccount., must be smaller than or equal to 100.');
        }

        $this->container['bank_name'] = $bank_name;

        return $this;
    }

    /**
     * Gets transfer_type
     *
     * @return string|null
     */
    public function getTransferType()
    {
        return $this->container['transfer_type'];
    }

    /**
     * Sets transfer_type
     *
     * @param string|null $transfer_type The type of the bank transfer. The type can be `ACH` or `UNKNOWN`.
     *
     * @return self
     */
    public function setTransferType($transfer_type)
    {
        if (!is_null($transfer_type) && (mb_strlen($transfer_type) > 50)) {
            throw new \InvalidArgumentException('invalid length for $transfer_type when calling PosBankAccount., must be smaller than or equal to 50.');
        }

        $this->container['transfer_type'] = $transfer_type;

        return $this;
    }

    /**
     * Gets account_ownership_type
     *
     * @return string|null
     */
    public function getAccountOwnershipType()
    {
        return $this->container['account_ownership_type'];
    }

    /**
     * Sets account_ownership_type
     *
     * @param string|null $account_ownership_type The ownership type of the bank account performing the transfer. The type can be `INDIVIDUAL`, `COMPANY`, or `UNKNOWN`.
     *
     * @return self
     */
    public function setAccountOwnershipType($account_ownership_type)
    {
        if (!is_null($account_ownership_type) && (mb_strlen($account_ownership_type) > 50)) {
            throw new \InvalidArgumentException('invalid length for $account_ownership_type when calling PosBankAccount., must be smaller than or equal to 50.');
        }

        $this->container['account_ownership_type'] = $account_ownership_type;

        return $this;
    }

    /**
     * Gets fingerprint
     *
     * @return string|null
     */
    public function getFingerprint()
    {
        return $this->container['fingerprint'];
    }

    /**
     * Sets fingerprint
     *
     * @param string|null $fingerprint Uniquely identifies the bank account for this seller and can be used to determine if payments are from the same bank account.
     *
     * @return self
     */
    public function setFingerprint($fingerprint)
    {
        if (!is_null($fingerprint) && (mb_strlen($fingerprint) > 255)) {
            throw new \InvalidArgumentException('invalid length for $fingerprint when calling PosBankAccount., must be smaller than or equal to 255.');
        }

        $this->container['fingerprint'] = $fingerprint;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country Country code according to ISO 3166-1 alpha-2.
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (!is_null($country) && (mb_strlen($country) > 2)) {
            throw new \InvalidArgumentException('invalid length for $country when calling PosBankAccount., must be smaller than or equal to 2.');
        }
        if (!is_null($country) && (mb_strlen($country) < 2)) {
            throw new \InvalidArgumentException('invalid length for $country when calling PosBankAccount., must be bigger than or equal to 2.');
        }

        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets statement_description
     *
     * @return string|null
     */
    public function getStatementDescription()
    {
        return $this->container['statement_description'];
    }

    /**
     * Sets statement_description
     *
     * @param string|null $statement_description The statement description as sent to the bank.
     *
     * @return self
     */
    public function setStatementDescription($statement_description)
    {
        if (!is_null($statement_description) && (mb_strlen($statement_description) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $statement_description when calling PosBankAccount., must be smaller than or equal to 1000.');
        }

        $this->container['statement_description'] = $statement_description;

        return $this;
    }

    /**
     * Gets ach_details
     *
     * @return \Apideck\Client\Model\PosBankAccountAchDetails|null
     */
    public function getAchDetails()
    {
        return $this->container['ach_details'];
    }

    /**
     * Sets ach_details
     *
     * @param \Apideck\Client\Model\PosBankAccountAchDetails|null $ach_details ach_details
     *
     * @return self
     */
    public function setAchDetails($ach_details)
    {
        $this->container['ach_details'] = $ach_details;

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


