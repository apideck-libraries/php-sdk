<?php
/**
 * Item
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
 * The version of the OpenAPI document: 10.14.1
 * Contact: support@apideck.com
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
 * Item Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Item implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'id' => 'string',
        'idempotency_key' => 'string',
        'description' => 'string',
        'abbreviation' => 'string',
        'product_type' => 'string',
        'price_amount' => 'float',
        'pricing_type' => 'string',
        'price_currency' => '\Apideck\Client\Model\Currency',
        'cost' => 'float',
        'tax_ids' => 'string[]',
        'is_revenue' => 'bool',
        'use_default_tax_rates' => 'bool',
        'absent_at_location_ids' => 'string[]',
        'present_at_all_locations' => 'bool',
        'available_for_pickup' => 'bool',
        'available_online' => 'bool',
        'sku' => 'string',
        'code' => 'string',
        'categories' => 'object[]',
        'options' => 'object[]',
        'variations' => 'object[]',
        'modifier_groups' => 'object[]',
        'available' => 'bool',
        'hidden' => 'bool',
        'version' => 'string',
        'custom_mappings' => 'object',
        'deleted' => 'bool',
        'updated_by' => 'string',
        'created_by' => 'string',
        'updated_at' => '\DateTime',
        'created_at' => '\DateTime',
        'pass_through' => 'object[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'id' => null,
        'idempotency_key' => null,
        'description' => null,
        'abbreviation' => null,
        'product_type' => null,
        'price_amount' => null,
        'pricing_type' => null,
        'price_currency' => null,
        'cost' => null,
        'tax_ids' => null,
        'is_revenue' => null,
        'use_default_tax_rates' => null,
        'absent_at_location_ids' => null,
        'present_at_all_locations' => null,
        'available_for_pickup' => null,
        'available_online' => null,
        'sku' => null,
        'code' => null,
        'categories' => null,
        'options' => null,
        'variations' => null,
        'modifier_groups' => null,
        'available' => null,
        'hidden' => null,
        'version' => null,
        'custom_mappings' => null,
        'deleted' => null,
        'updated_by' => null,
        'created_by' => null,
        'updated_at' => 'date-time',
        'created_at' => 'date-time',
        'pass_through' => null
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
        'name' => 'name',
        'id' => 'id',
        'idempotency_key' => 'idempotency_key',
        'description' => 'description',
        'abbreviation' => 'abbreviation',
        'product_type' => 'product_type',
        'price_amount' => 'price_amount',
        'pricing_type' => 'pricing_type',
        'price_currency' => 'price_currency',
        'cost' => 'cost',
        'tax_ids' => 'tax_ids',
        'is_revenue' => 'is_revenue',
        'use_default_tax_rates' => 'use_default_tax_rates',
        'absent_at_location_ids' => 'absent_at_location_ids',
        'present_at_all_locations' => 'present_at_all_locations',
        'available_for_pickup' => 'available_for_pickup',
        'available_online' => 'available_online',
        'sku' => 'sku',
        'code' => 'code',
        'categories' => 'categories',
        'options' => 'options',
        'variations' => 'variations',
        'modifier_groups' => 'modifier_groups',
        'available' => 'available',
        'hidden' => 'hidden',
        'version' => 'version',
        'custom_mappings' => 'custom_mappings',
        'deleted' => 'deleted',
        'updated_by' => 'updated_by',
        'created_by' => 'created_by',
        'updated_at' => 'updated_at',
        'created_at' => 'created_at',
        'pass_through' => 'pass_through'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'id' => 'setId',
        'idempotency_key' => 'setIdempotencyKey',
        'description' => 'setDescription',
        'abbreviation' => 'setAbbreviation',
        'product_type' => 'setProductType',
        'price_amount' => 'setPriceAmount',
        'pricing_type' => 'setPricingType',
        'price_currency' => 'setPriceCurrency',
        'cost' => 'setCost',
        'tax_ids' => 'setTaxIds',
        'is_revenue' => 'setIsRevenue',
        'use_default_tax_rates' => 'setUseDefaultTaxRates',
        'absent_at_location_ids' => 'setAbsentAtLocationIds',
        'present_at_all_locations' => 'setPresentAtAllLocations',
        'available_for_pickup' => 'setAvailableForPickup',
        'available_online' => 'setAvailableOnline',
        'sku' => 'setSku',
        'code' => 'setCode',
        'categories' => 'setCategories',
        'options' => 'setOptions',
        'variations' => 'setVariations',
        'modifier_groups' => 'setModifierGroups',
        'available' => 'setAvailable',
        'hidden' => 'setHidden',
        'version' => 'setVersion',
        'custom_mappings' => 'setCustomMappings',
        'deleted' => 'setDeleted',
        'updated_by' => 'setUpdatedBy',
        'created_by' => 'setCreatedBy',
        'updated_at' => 'setUpdatedAt',
        'created_at' => 'setCreatedAt',
        'pass_through' => 'setPassThrough'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'id' => 'getId',
        'idempotency_key' => 'getIdempotencyKey',
        'description' => 'getDescription',
        'abbreviation' => 'getAbbreviation',
        'product_type' => 'getProductType',
        'price_amount' => 'getPriceAmount',
        'pricing_type' => 'getPricingType',
        'price_currency' => 'getPriceCurrency',
        'cost' => 'getCost',
        'tax_ids' => 'getTaxIds',
        'is_revenue' => 'getIsRevenue',
        'use_default_tax_rates' => 'getUseDefaultTaxRates',
        'absent_at_location_ids' => 'getAbsentAtLocationIds',
        'present_at_all_locations' => 'getPresentAtAllLocations',
        'available_for_pickup' => 'getAvailableForPickup',
        'available_online' => 'getAvailableOnline',
        'sku' => 'getSku',
        'code' => 'getCode',
        'categories' => 'getCategories',
        'options' => 'getOptions',
        'variations' => 'getVariations',
        'modifier_groups' => 'getModifierGroups',
        'available' => 'getAvailable',
        'hidden' => 'getHidden',
        'version' => 'getVersion',
        'custom_mappings' => 'getCustomMappings',
        'deleted' => 'getDeleted',
        'updated_by' => 'getUpdatedBy',
        'created_by' => 'getCreatedBy',
        'updated_at' => 'getUpdatedAt',
        'created_at' => 'getCreatedAt',
        'pass_through' => 'getPassThrough'
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

    const PRODUCT_TYPE_REGULAR = 'regular';
    const PRODUCT_TYPE_OTHER = 'other';
    const PRICING_TYPE_FIXED = 'fixed';
    const PRICING_TYPE_VARIABLE = 'variable';
    const PRICING_TYPE_PER_UNIT = 'per_unit';
    const PRICING_TYPE_OTHER = 'other';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProductTypeAllowableValues()
    {
        return [
            self::PRODUCT_TYPE_REGULAR,
            self::PRODUCT_TYPE_OTHER,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPricingTypeAllowableValues()
    {
        return [
            self::PRICING_TYPE_FIXED,
            self::PRICING_TYPE_VARIABLE,
            self::PRICING_TYPE_PER_UNIT,
            self::PRICING_TYPE_OTHER,
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['idempotency_key'] = $data['idempotency_key'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['abbreviation'] = $data['abbreviation'] ?? null;
        $this->container['product_type'] = $data['product_type'] ?? null;
        $this->container['price_amount'] = $data['price_amount'] ?? null;
        $this->container['pricing_type'] = $data['pricing_type'] ?? null;
        $this->container['price_currency'] = $data['price_currency'] ?? null;
        $this->container['cost'] = $data['cost'] ?? null;
        $this->container['tax_ids'] = $data['tax_ids'] ?? null;
        $this->container['is_revenue'] = $data['is_revenue'] ?? null;
        $this->container['use_default_tax_rates'] = $data['use_default_tax_rates'] ?? null;
        $this->container['absent_at_location_ids'] = $data['absent_at_location_ids'] ?? null;
        $this->container['present_at_all_locations'] = $data['present_at_all_locations'] ?? null;
        $this->container['available_for_pickup'] = $data['available_for_pickup'] ?? null;
        $this->container['available_online'] = $data['available_online'] ?? null;
        $this->container['sku'] = $data['sku'] ?? null;
        $this->container['code'] = $data['code'] ?? null;
        $this->container['categories'] = $data['categories'] ?? null;
        $this->container['options'] = $data['options'] ?? null;
        $this->container['variations'] = $data['variations'] ?? null;
        $this->container['modifier_groups'] = $data['modifier_groups'] ?? null;
        $this->container['available'] = $data['available'] ?? null;
        $this->container['hidden'] = $data['hidden'] ?? null;
        $this->container['version'] = $data['version'] ?? null;
        $this->container['custom_mappings'] = $data['custom_mappings'] ?? null;
        $this->container['deleted'] = $data['deleted'] ?? null;
        $this->container['updated_by'] = $data['updated_by'] ?? null;
        $this->container['created_by'] = $data['created_by'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['pass_through'] = $data['pass_through'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if (!is_null($this->container['idempotency_key']) && (mb_strlen($this->container['idempotency_key']) > 45)) {
            $invalidProperties[] = "invalid value for 'idempotency_key', the character length must be smaller than or equal to 45.";
        }

        $allowedValues = $this->getProductTypeAllowableValues();
        if (!is_null($this->container['product_type']) && !in_array($this->container['product_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'product_type', must be one of '%s'",
                $this->container['product_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPricingTypeAllowableValues();
        if (!is_null($this->container['pricing_type']) && !in_array($this->container['pricing_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'pricing_type', must be one of '%s'",
                $this->container['pricing_type'],
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * Gets idempotency_key
     *
     * @return string|null
     */
    public function getIdempotencyKey()
    {
        return $this->container['idempotency_key'];
    }

    /**
     * Sets idempotency_key
     *
     * @param string|null $idempotency_key A value you specify that uniquely identifies this request among requests you have sent.
     *
     * @return self
     */
    public function setIdempotencyKey($idempotency_key)
    {
        if (!is_null($idempotency_key) && (mb_strlen($idempotency_key) > 45)) {
            throw new \InvalidArgumentException('invalid length for $idempotency_key when calling Item., must be smaller than or equal to 45.');
        }

        $this->container['idempotency_key'] = $idempotency_key;

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
     * Gets abbreviation
     *
     * @return string|null
     */
    public function getAbbreviation()
    {
        return $this->container['abbreviation'];
    }

    /**
     * Sets abbreviation
     *
     * @param string|null $abbreviation abbreviation
     *
     * @return self
     */
    public function setAbbreviation($abbreviation)
    {
        $this->container['abbreviation'] = $abbreviation;

        return $this;
    }

    /**
     * Gets product_type
     *
     * @return string|null
     */
    public function getProductType()
    {
        return $this->container['product_type'];
    }

    /**
     * Sets product_type
     *
     * @param string|null $product_type product_type
     *
     * @return self
     */
    public function setProductType($product_type)
    {
        $allowedValues = $this->getProductTypeAllowableValues();
        if (!is_null($product_type) && !in_array($product_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'product_type', must be one of '%s'",
                    $product_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['product_type'] = $product_type;

        return $this;
    }

    /**
     * Gets price_amount
     *
     * @return float|null
     */
    public function getPriceAmount()
    {
        return $this->container['price_amount'];
    }

    /**
     * Sets price_amount
     *
     * @param float|null $price_amount price_amount
     *
     * @return self
     */
    public function setPriceAmount($price_amount)
    {
        $this->container['price_amount'] = $price_amount;

        return $this;
    }

    /**
     * Gets pricing_type
     *
     * @return string|null
     */
    public function getPricingType()
    {
        return $this->container['pricing_type'];
    }

    /**
     * Sets pricing_type
     *
     * @param string|null $pricing_type pricing_type
     *
     * @return self
     */
    public function setPricingType($pricing_type)
    {
        $allowedValues = $this->getPricingTypeAllowableValues();
        if (!is_null($pricing_type) && !in_array($pricing_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'pricing_type', must be one of '%s'",
                    $pricing_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['pricing_type'] = $pricing_type;

        return $this;
    }

    /**
     * Gets price_currency
     *
     * @return \Apideck\Client\Model\Currency|null
     */
    public function getPriceCurrency()
    {
        return $this->container['price_currency'];
    }

    /**
     * Sets price_currency
     *
     * @param \Apideck\Client\Model\Currency|null $price_currency price_currency
     *
     * @return self
     */
    public function setPriceCurrency($price_currency)
    {
        $this->container['price_currency'] = $price_currency;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return float|null
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param float|null $cost cost
     *
     * @return self
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets tax_ids
     *
     * @return string[]|null
     */
    public function getTaxIds()
    {
        return $this->container['tax_ids'];
    }

    /**
     * Sets tax_ids
     *
     * @param string[]|null $tax_ids A list of Tax IDs for the product.
     *
     * @return self
     */
    public function setTaxIds($tax_ids)
    {
        $this->container['tax_ids'] = $tax_ids;

        return $this;
    }

    /**
     * Gets is_revenue
     *
     * @return bool|null
     */
    public function getIsRevenue()
    {
        return $this->container['is_revenue'];
    }

    /**
     * Sets is_revenue
     *
     * @param bool|null $is_revenue True if this item should be counted as revenue. For example, gift cards and donations would not be counted as revenue.
     *
     * @return self
     */
    public function setIsRevenue($is_revenue)
    {
        $this->container['is_revenue'] = $is_revenue;

        return $this;
    }

    /**
     * Gets use_default_tax_rates
     *
     * @return bool|null
     */
    public function getUseDefaultTaxRates()
    {
        return $this->container['use_default_tax_rates'];
    }

    /**
     * Sets use_default_tax_rates
     *
     * @param bool|null $use_default_tax_rates use_default_tax_rates
     *
     * @return self
     */
    public function setUseDefaultTaxRates($use_default_tax_rates)
    {
        $this->container['use_default_tax_rates'] = $use_default_tax_rates;

        return $this;
    }

    /**
     * Gets absent_at_location_ids
     *
     * @return string[]|null
     */
    public function getAbsentAtLocationIds()
    {
        return $this->container['absent_at_location_ids'];
    }

    /**
     * Sets absent_at_location_ids
     *
     * @param string[]|null $absent_at_location_ids A list of locations where the object is not present, even if present_at_all_locations is true. This can include locations that are deactivated.
     *
     * @return self
     */
    public function setAbsentAtLocationIds($absent_at_location_ids)
    {
        $this->container['absent_at_location_ids'] = $absent_at_location_ids;

        return $this;
    }

    /**
     * Gets present_at_all_locations
     *
     * @return bool|null
     */
    public function getPresentAtAllLocations()
    {
        return $this->container['present_at_all_locations'];
    }

    /**
     * Sets present_at_all_locations
     *
     * @param bool|null $present_at_all_locations present_at_all_locations
     *
     * @return self
     */
    public function setPresentAtAllLocations($present_at_all_locations)
    {
        $this->container['present_at_all_locations'] = $present_at_all_locations;

        return $this;
    }

    /**
     * Gets available_for_pickup
     *
     * @return bool|null
     */
    public function getAvailableForPickup()
    {
        return $this->container['available_for_pickup'];
    }

    /**
     * Sets available_for_pickup
     *
     * @param bool|null $available_for_pickup available_for_pickup
     *
     * @return self
     */
    public function setAvailableForPickup($available_for_pickup)
    {
        $this->container['available_for_pickup'] = $available_for_pickup;

        return $this;
    }

    /**
     * Gets available_online
     *
     * @return bool|null
     */
    public function getAvailableOnline()
    {
        return $this->container['available_online'];
    }

    /**
     * Sets available_online
     *
     * @param bool|null $available_online available_online
     *
     * @return self
     */
    public function setAvailableOnline($available_online)
    {
        $this->container['available_online'] = $available_online;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string|null $sku SKU of the item
     *
     * @return self
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

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
     * @param string|null $code Product code, e.g. UPC or EAN
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return object[]|null
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param object[]|null $categories categories
     *
     * @return self
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets options
     *
     * @return object[]|null
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param object[]|null $options List of options pertaining to this item's attribute variation
     *
     * @return self
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets variations
     *
     * @return object[]|null
     */
    public function getVariations()
    {
        return $this->container['variations'];
    }

    /**
     * Sets variations
     *
     * @param object[]|null $variations variations
     *
     * @return self
     */
    public function setVariations($variations)
    {
        $this->container['variations'] = $variations;

        return $this;
    }

    /**
     * Gets modifier_groups
     *
     * @return object[]|null
     */
    public function getModifierGroups()
    {
        return $this->container['modifier_groups'];
    }

    /**
     * Sets modifier_groups
     *
     * @param object[]|null $modifier_groups modifier_groups
     *
     * @return self
     */
    public function setModifierGroups($modifier_groups)
    {
        $this->container['modifier_groups'] = $modifier_groups;

        return $this;
    }

    /**
     * Gets available
     *
     * @return bool|null
     */
    public function getAvailable()
    {
        return $this->container['available'];
    }

    /**
     * Sets available
     *
     * @param bool|null $available available
     *
     * @return self
     */
    public function setAvailable($available)
    {
        $this->container['available'] = $available;

        return $this;
    }

    /**
     * Gets hidden
     *
     * @return bool|null
     */
    public function getHidden()
    {
        return $this->container['hidden'];
    }

    /**
     * Sets hidden
     *
     * @param bool|null $hidden hidden
     *
     * @return self
     */
    public function setHidden($hidden)
    {
        $this->container['hidden'] = $hidden;

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
     * @param string|null $version The user who last updated the object.
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets custom_mappings
     *
     * @return object|null
     */
    public function getCustomMappings()
    {
        return $this->container['custom_mappings'];
    }

    /**
     * Sets custom_mappings
     *
     * @param object|null $custom_mappings When custom mappings are configured on the resource, the result is included here.
     *
     * @return self
     */
    public function setCustomMappings($custom_mappings)
    {
        $this->container['custom_mappings'] = $custom_mappings;

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
     * @param bool|null $deleted Flag to indicate if the object is deleted.
     *
     * @return self
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

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
     * @param string|null $updated_by The user who last updated the object.
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
     * @param string|null $created_by The user who created the object.
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
     * @param \DateTime|null $updated_at The date and time when the object was last updated.
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
     * @param \DateTime|null $created_at The date and time when the object was created.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets pass_through
     *
     * @return object[]|null
     */
    public function getPassThrough()
    {
        return $this->container['pass_through'];
    }

    /**
     * Sets pass_through
     *
     * @param object[]|null $pass_through The pass_through property allows passing service-specific, custom data or structured modifications in request body when creating or updating resources.
     *
     * @return self
     */
    public function setPassThrough($pass_through)
    {
        $this->container['pass_through'] = $pass_through;

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


