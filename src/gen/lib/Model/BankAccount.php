<?php
/**
 * BankAccount
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
 * BankAccount Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BankAccount implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BankAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bank_name' => 'string',
        'account_number' => 'string',
        'account_name' => 'string',
        'account_type' => 'string',
        'iban' => 'string',
        'bic' => 'string',
        'routing_number' => 'string',
        'bsb_number' => 'string',
        'branch_identifier' => 'string',
        'bank_code' => 'string',
        'currency' => '\Apideck\Client\Model\Currency'
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
        'account_number' => null,
        'account_name' => null,
        'account_type' => null,
        'iban' => null,
        'bic' => null,
        'routing_number' => null,
        'bsb_number' => null,
        'branch_identifier' => null,
        'bank_code' => null,
        'currency' => null
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
        'account_number' => 'account_number',
        'account_name' => 'account_name',
        'account_type' => 'account_type',
        'iban' => 'iban',
        'bic' => 'bic',
        'routing_number' => 'routing_number',
        'bsb_number' => 'bsb_number',
        'branch_identifier' => 'branch_identifier',
        'bank_code' => 'bank_code',
        'currency' => 'currency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bank_name' => 'setBankName',
        'account_number' => 'setAccountNumber',
        'account_name' => 'setAccountName',
        'account_type' => 'setAccountType',
        'iban' => 'setIban',
        'bic' => 'setBic',
        'routing_number' => 'setRoutingNumber',
        'bsb_number' => 'setBsbNumber',
        'branch_identifier' => 'setBranchIdentifier',
        'bank_code' => 'setBankCode',
        'currency' => 'setCurrency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bank_name' => 'getBankName',
        'account_number' => 'getAccountNumber',
        'account_name' => 'getAccountName',
        'account_type' => 'getAccountType',
        'iban' => 'getIban',
        'bic' => 'getBic',
        'routing_number' => 'getRoutingNumber',
        'bsb_number' => 'getBsbNumber',
        'branch_identifier' => 'getBranchIdentifier',
        'bank_code' => 'getBankCode',
        'currency' => 'getCurrency'
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

    const ACCOUNT_TYPE_BANK_ACCOUNT = 'bank_account';
    const ACCOUNT_TYPE_CREDIT_CARD = 'credit_card';
    const ACCOUNT_TYPE_OTHER = 'other';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccountTypeAllowableValues()
    {
        return [
            self::ACCOUNT_TYPE_BANK_ACCOUNT,
            self::ACCOUNT_TYPE_CREDIT_CARD,
            self::ACCOUNT_TYPE_OTHER,
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
        $this->container['bank_name'] = $data['bank_name'] ?? null;
        $this->container['account_number'] = $data['account_number'] ?? null;
        $this->container['account_name'] = $data['account_name'] ?? null;
        $this->container['account_type'] = $data['account_type'] ?? null;
        $this->container['iban'] = $data['iban'] ?? null;
        $this->container['bic'] = $data['bic'] ?? null;
        $this->container['routing_number'] = $data['routing_number'] ?? null;
        $this->container['bsb_number'] = $data['bsb_number'] ?? null;
        $this->container['branch_identifier'] = $data['branch_identifier'] ?? null;
        $this->container['bank_code'] = $data['bank_code'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAccountTypeAllowableValues();
        if (!is_null($this->container['account_type']) && !in_array($this->container['account_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'account_type', must be one of '%s'",
                $this->container['account_type'],
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
     * @param string|null $bank_name The name of the bank
     *
     * @return self
     */
    public function setBankName($bank_name)
    {
        $this->container['bank_name'] = $bank_name;

        return $this;
    }

    /**
     * Gets account_number
     *
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     *
     * @param string|null $account_number A bank account number is a number that is tied to your bank account. If you have several bank accounts, such as personal, joint, business (and so on), each account will have a different account number.
     *
     * @return self
     */
    public function setAccountNumber($account_number)
    {
        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets account_name
     *
     * @return string|null
     */
    public function getAccountName()
    {
        return $this->container['account_name'];
    }

    /**
     * Sets account_name
     *
     * @param string|null $account_name The name which you used in opening your bank account.
     *
     * @return self
     */
    public function setAccountName($account_name)
    {
        $this->container['account_name'] = $account_name;

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
     * @param string|null $account_type The type of bank account.
     *
     * @return self
     */
    public function setAccountType($account_type)
    {
        $allowedValues = $this->getAccountTypeAllowableValues();
        if (!is_null($account_type) && !in_array($account_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'account_type', must be one of '%s'",
                    $account_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['account_type'] = $account_type;

        return $this;
    }

    /**
     * Gets iban
     *
     * @return string|null
     */
    public function getIban()
    {
        return $this->container['iban'];
    }

    /**
     * Sets iban
     *
     * @param string|null $iban The International Bank Account Number (IBAN).
     *
     * @return self
     */
    public function setIban($iban)
    {
        $this->container['iban'] = $iban;

        return $this;
    }

    /**
     * Gets bic
     *
     * @return string|null
     */
    public function getBic()
    {
        return $this->container['bic'];
    }

    /**
     * Sets bic
     *
     * @param string|null $bic The Bank Identifier Code (BIC).
     *
     * @return self
     */
    public function setBic($bic)
    {
        $this->container['bic'] = $bic;

        return $this;
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
     * @param string|null $routing_number A routing number is a nine-digit code used to identify a financial institution in the United States.
     *
     * @return self
     */
    public function setRoutingNumber($routing_number)
    {
        $this->container['routing_number'] = $routing_number;

        return $this;
    }

    /**
     * Gets bsb_number
     *
     * @return string|null
     */
    public function getBsbNumber()
    {
        return $this->container['bsb_number'];
    }

    /**
     * Sets bsb_number
     *
     * @param string|null $bsb_number A BSB is a 6 digit numeric code used for identifying the branch of an Australian or New Zealand bank or financial institution.
     *
     * @return self
     */
    public function setBsbNumber($bsb_number)
    {
        $this->container['bsb_number'] = $bsb_number;

        return $this;
    }

    /**
     * Gets branch_identifier
     *
     * @return string|null
     */
    public function getBranchIdentifier()
    {
        return $this->container['branch_identifier'];
    }

    /**
     * Sets branch_identifier
     *
     * @param string|null $branch_identifier A branch identifier is a unique identifier for a branch of a bank or financial institution.
     *
     * @return self
     */
    public function setBranchIdentifier($branch_identifier)
    {
        $this->container['branch_identifier'] = $branch_identifier;

        return $this;
    }

    /**
     * Gets bank_code
     *
     * @return string|null
     */
    public function getBankCode()
    {
        return $this->container['bank_code'];
    }

    /**
     * Sets bank_code
     *
     * @param string|null $bank_code A bank code is a code assigned by a central bank, a bank supervisory body or a Bankers Association in a country to all its licensed member banks or financial institutions.
     *
     * @return self
     */
    public function setBankCode($bank_code)
    {
        $this->container['bank_code'] = $bank_code;

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


