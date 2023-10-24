<?php
/**
 * PaymentCard
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
 * The version of the OpenAPI document: 10.0.0
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
 * PaymentCard Class Doc Comment
 *
 * @category Class
 * @description A card&#39;s non-confidential details.
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentCard implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentCard';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'bin' => 'string',
        'card_brand' => 'string',
        'card_type' => 'string',
        'prepaid_type' => 'string',
        'cardholder_name' => 'string',
        'customer_id' => 'string',
        'merchant_id' => 'string',
        'exp_month' => 'int',
        'exp_year' => 'int',
        'fingerprint' => 'string',
        'last_4' => 'string',
        'enabled' => 'bool',
        'billing_address' => '\Apideck\Client\Model\Address',
        'reference_id' => 'string',
        'version' => 'string'
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
        'bin' => null,
        'card_brand' => null,
        'card_type' => null,
        'prepaid_type' => null,
        'cardholder_name' => null,
        'customer_id' => null,
        'merchant_id' => null,
        'exp_month' => null,
        'exp_year' => null,
        'fingerprint' => null,
        'last_4' => null,
        'enabled' => null,
        'billing_address' => null,
        'reference_id' => null,
        'version' => null
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
        'bin' => 'bin',
        'card_brand' => 'card_brand',
        'card_type' => 'card_type',
        'prepaid_type' => 'prepaid_type',
        'cardholder_name' => 'cardholder_name',
        'customer_id' => 'customer_id',
        'merchant_id' => 'merchant_id',
        'exp_month' => 'exp_month',
        'exp_year' => 'exp_year',
        'fingerprint' => 'fingerprint',
        'last_4' => 'last_4',
        'enabled' => 'enabled',
        'billing_address' => 'billing_address',
        'reference_id' => 'reference_id',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'bin' => 'setBin',
        'card_brand' => 'setCardBrand',
        'card_type' => 'setCardType',
        'prepaid_type' => 'setPrepaidType',
        'cardholder_name' => 'setCardholderName',
        'customer_id' => 'setCustomerId',
        'merchant_id' => 'setMerchantId',
        'exp_month' => 'setExpMonth',
        'exp_year' => 'setExpYear',
        'fingerprint' => 'setFingerprint',
        'last_4' => 'setLast4',
        'enabled' => 'setEnabled',
        'billing_address' => 'setBillingAddress',
        'reference_id' => 'setReferenceId',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'bin' => 'getBin',
        'card_brand' => 'getCardBrand',
        'card_type' => 'getCardType',
        'prepaid_type' => 'getPrepaidType',
        'cardholder_name' => 'getCardholderName',
        'customer_id' => 'getCustomerId',
        'merchant_id' => 'getMerchantId',
        'exp_month' => 'getExpMonth',
        'exp_year' => 'getExpYear',
        'fingerprint' => 'getFingerprint',
        'last_4' => 'getLast4',
        'enabled' => 'getEnabled',
        'billing_address' => 'getBillingAddress',
        'reference_id' => 'getReferenceId',
        'version' => 'getVersion'
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

    const CARD_BRAND_VISA = 'visa';
    const CARD_BRAND_MASTERCARD = 'mastercard';
    const CARD_BRAND_AMEX = 'amex';
    const CARD_BRAND_DISCOVER = 'discover';
    const CARD_BRAND_DISCOVER_DINERS = 'discover-diners';
    const CARD_BRAND_JCB = 'jcb';
    const CARD_BRAND_CHINA_UNIONPAY = 'china-unionpay';
    const CARD_BRAND_SQUARE_GIFT_CARD = 'square-gift-card';
    const CARD_BRAND_SQUARE_CAPITAL_CARD = 'square-capital-card';
    const CARD_BRAND_INTERAC = 'interac';
    const CARD_BRAND_EFTPOS = 'eftpos';
    const CARD_BRAND_FELICA = 'felica';
    const CARD_BRAND_EBT = 'ebt';
    const CARD_BRAND_OTHER = 'other';
    const CARD_TYPE_CREDIT = 'credit';
    const CARD_TYPE_DEBIT = 'debit';
    const CARD_TYPE_PREPAID = 'prepaid';
    const CARD_TYPE_OTHER = 'other';
    const PREPAID_TYPE_NON_PREPAID = 'non-prepaid';
    const PREPAID_TYPE_PREPAID = 'prepaid';
    const PREPAID_TYPE_UNKNOWN = 'unknown';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCardBrandAllowableValues()
    {
        return [
            self::CARD_BRAND_VISA,
            self::CARD_BRAND_MASTERCARD,
            self::CARD_BRAND_AMEX,
            self::CARD_BRAND_DISCOVER,
            self::CARD_BRAND_DISCOVER_DINERS,
            self::CARD_BRAND_JCB,
            self::CARD_BRAND_CHINA_UNIONPAY,
            self::CARD_BRAND_SQUARE_GIFT_CARD,
            self::CARD_BRAND_SQUARE_CAPITAL_CARD,
            self::CARD_BRAND_INTERAC,
            self::CARD_BRAND_EFTPOS,
            self::CARD_BRAND_FELICA,
            self::CARD_BRAND_EBT,
            self::CARD_BRAND_OTHER,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCardTypeAllowableValues()
    {
        return [
            self::CARD_TYPE_CREDIT,
            self::CARD_TYPE_DEBIT,
            self::CARD_TYPE_PREPAID,
            self::CARD_TYPE_OTHER,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPrepaidTypeAllowableValues()
    {
        return [
            self::PREPAID_TYPE_NON_PREPAID,
            self::PREPAID_TYPE_PREPAID,
            self::PREPAID_TYPE_UNKNOWN,
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
        $this->container['bin'] = $data['bin'] ?? null;
        $this->container['card_brand'] = $data['card_brand'] ?? null;
        $this->container['card_type'] = $data['card_type'] ?? null;
        $this->container['prepaid_type'] = $data['prepaid_type'] ?? null;
        $this->container['cardholder_name'] = $data['cardholder_name'] ?? null;
        $this->container['customer_id'] = $data['customer_id'] ?? null;
        $this->container['merchant_id'] = $data['merchant_id'] ?? null;
        $this->container['exp_month'] = $data['exp_month'] ?? null;
        $this->container['exp_year'] = $data['exp_year'] ?? null;
        $this->container['fingerprint'] = $data['fingerprint'] ?? null;
        $this->container['last_4'] = $data['last_4'] ?? null;
        $this->container['enabled'] = $data['enabled'] ?? null;
        $this->container['billing_address'] = $data['billing_address'] ?? null;
        $this->container['reference_id'] = $data['reference_id'] ?? null;
        $this->container['version'] = $data['version'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCardBrandAllowableValues();
        if (!is_null($this->container['card_brand']) && !in_array($this->container['card_brand'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'card_brand', must be one of '%s'",
                $this->container['card_brand'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCardTypeAllowableValues();
        if (!is_null($this->container['card_type']) && !in_array($this->container['card_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'card_type', must be one of '%s'",
                $this->container['card_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPrepaidTypeAllowableValues();
        if (!is_null($this->container['prepaid_type']) && !in_array($this->container['prepaid_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'prepaid_type', must be one of '%s'",
                $this->container['prepaid_type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['exp_month']) && ($this->container['exp_month'] > 12)) {
            $invalidProperties[] = "invalid value for 'exp_month', must be smaller than or equal to 12.";
        }

        if (!is_null($this->container['exp_month']) && ($this->container['exp_month'] < 1)) {
            $invalidProperties[] = "invalid value for 'exp_month', must be bigger than or equal to 1.";
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
     * Gets bin
     *
     * @return string|null
     */
    public function getBin()
    {
        return $this->container['bin'];
    }

    /**
     * Sets bin
     *
     * @param string|null $bin The first six digits of the card number, known as the Bank Identification Number (BIN).
     *
     * @return self
     */
    public function setBin($bin)
    {
        $this->container['bin'] = $bin;

        return $this;
    }

    /**
     * Gets card_brand
     *
     * @return string|null
     */
    public function getCardBrand()
    {
        return $this->container['card_brand'];
    }

    /**
     * Sets card_brand
     *
     * @param string|null $card_brand The first six digits of the card number, known as the Bank Identification Number (BIN).
     *
     * @return self
     */
    public function setCardBrand($card_brand)
    {
        $allowedValues = $this->getCardBrandAllowableValues();
        if (!is_null($card_brand) && !in_array($card_brand, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'card_brand', must be one of '%s'",
                    $card_brand,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['card_brand'] = $card_brand;

        return $this;
    }

    /**
     * Gets card_type
     *
     * @return string|null
     */
    public function getCardType()
    {
        return $this->container['card_type'];
    }

    /**
     * Sets card_type
     *
     * @param string|null $card_type card_type
     *
     * @return self
     */
    public function setCardType($card_type)
    {
        $allowedValues = $this->getCardTypeAllowableValues();
        if (!is_null($card_type) && !in_array($card_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'card_type', must be one of '%s'",
                    $card_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['card_type'] = $card_type;

        return $this;
    }

    /**
     * Gets prepaid_type
     *
     * @return string|null
     */
    public function getPrepaidType()
    {
        return $this->container['prepaid_type'];
    }

    /**
     * Sets prepaid_type
     *
     * @param string|null $prepaid_type prepaid_type
     *
     * @return self
     */
    public function setPrepaidType($prepaid_type)
    {
        $allowedValues = $this->getPrepaidTypeAllowableValues();
        if (!is_null($prepaid_type) && !in_array($prepaid_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'prepaid_type', must be one of '%s'",
                    $prepaid_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['prepaid_type'] = $prepaid_type;

        return $this;
    }

    /**
     * Gets cardholder_name
     *
     * @return string|null
     */
    public function getCardholderName()
    {
        return $this->container['cardholder_name'];
    }

    /**
     * Sets cardholder_name
     *
     * @param string|null $cardholder_name cardholder_name
     *
     * @return self
     */
    public function setCardholderName($cardholder_name)
    {
        $this->container['cardholder_name'] = $cardholder_name;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return string|null
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string|null $customer_id customer_id
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets merchant_id
     *
     * @return string|null
     */
    public function getMerchantId()
    {
        return $this->container['merchant_id'];
    }

    /**
     * Sets merchant_id
     *
     * @param string|null $merchant_id merchant_id
     *
     * @return self
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets exp_month
     *
     * @return int|null
     */
    public function getExpMonth()
    {
        return $this->container['exp_month'];
    }

    /**
     * Sets exp_month
     *
     * @param int|null $exp_month The expiration month of the associated card as an integer between 1 and 12.
     *
     * @return self
     */
    public function setExpMonth($exp_month)
    {

        if (!is_null($exp_month) && ($exp_month > 12)) {
            throw new \InvalidArgumentException('invalid value for $exp_month when calling PaymentCard., must be smaller than or equal to 12.');
        }
        if (!is_null($exp_month) && ($exp_month < 1)) {
            throw new \InvalidArgumentException('invalid value for $exp_month when calling PaymentCard., must be bigger than or equal to 1.');
        }

        $this->container['exp_month'] = $exp_month;

        return $this;
    }

    /**
     * Gets exp_year
     *
     * @return int|null
     */
    public function getExpYear()
    {
        return $this->container['exp_year'];
    }

    /**
     * Sets exp_year
     *
     * @param int|null $exp_year The four-digit year of the card's expiration date.
     *
     * @return self
     */
    public function setExpYear($exp_year)
    {
        $this->container['exp_year'] = $exp_year;

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
     * @param string|null $fingerprint fingerprint
     *
     * @return self
     */
    public function setFingerprint($fingerprint)
    {
        $this->container['fingerprint'] = $fingerprint;

        return $this;
    }

    /**
     * Gets last_4
     *
     * @return string|null
     */
    public function getLast4()
    {
        return $this->container['last_4'];
    }

    /**
     * Sets last_4
     *
     * @param string|null $last_4 last_4
     *
     * @return self
     */
    public function setLast4($last_4)
    {
        $this->container['last_4'] = $last_4;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool|null $enabled Indicates whether or not a card can be used for payments.
     *
     * @return self
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets billing_address
     *
     * @return \Apideck\Client\Model\Address|null
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \Apideck\Client\Model\Address|null $billing_address billing_address
     *
     * @return self
     */
    public function setBillingAddress($billing_address)
    {
        $this->container['billing_address'] = $billing_address;

        return $this;
    }

    /**
     * Gets reference_id
     *
     * @return string|null
     */
    public function getReferenceId()
    {
        return $this->container['reference_id'];
    }

    /**
     * Sets reference_id
     *
     * @param string|null $reference_id An optional user-defined reference ID that associates this record with another entity in an external system. For example, a customer ID from an external customer management system.
     *
     * @return self
     */
    public function setReferenceId($reference_id)
    {
        $this->container['reference_id'] = $reference_id;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string|null $version version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

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


