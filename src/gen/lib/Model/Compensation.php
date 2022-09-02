<?php
/**
 * Compensation
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
 * Compensation Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Compensation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Compensation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'employee_id' => 'string',
        'net_pay' => 'float',
        'gross_pay' => 'float',
        'taxes' => '\Apideck\Client\Model\Tax[]',
        'deductions' => '\Apideck\Client\Model\Deduction[]',
        'benefits' => '\Apideck\Client\Model\Benefit[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'employee_id' => null,
        'net_pay' => null,
        'gross_pay' => null,
        'taxes' => null,
        'deductions' => null,
        'benefits' => null
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
        'employee_id' => 'employee_id',
        'net_pay' => 'net_pay',
        'gross_pay' => 'gross_pay',
        'taxes' => 'taxes',
        'deductions' => 'deductions',
        'benefits' => 'benefits'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'employee_id' => 'setEmployeeId',
        'net_pay' => 'setNetPay',
        'gross_pay' => 'setGrossPay',
        'taxes' => 'setTaxes',
        'deductions' => 'setDeductions',
        'benefits' => 'setBenefits'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'employee_id' => 'getEmployeeId',
        'net_pay' => 'getNetPay',
        'gross_pay' => 'getGrossPay',
        'taxes' => 'getTaxes',
        'deductions' => 'getDeductions',
        'benefits' => 'getBenefits'
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
        $this->container['employee_id'] = $data['employee_id'] ?? null;
        $this->container['net_pay'] = $data['net_pay'] ?? null;
        $this->container['gross_pay'] = $data['gross_pay'] ?? null;
        $this->container['taxes'] = $data['taxes'] ?? null;
        $this->container['deductions'] = $data['deductions'] ?? null;
        $this->container['benefits'] = $data['benefits'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['employee_id'] === null) {
            $invalidProperties[] = "'employee_id' can't be null";
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
     * Gets employee_id
     *
     * @return string
     */
    public function getEmployeeId()
    {
        return $this->container['employee_id'];
    }

    /**
     * Sets employee_id
     *
     * @param string $employee_id employee_id
     *
     * @return self
     */
    public function setEmployeeId($employee_id)
    {
        $this->container['employee_id'] = $employee_id;

        return $this;
    }

    /**
     * Gets net_pay
     *
     * @return float|null
     */
    public function getNetPay()
    {
        return $this->container['net_pay'];
    }

    /**
     * Sets net_pay
     *
     * @param float|null $net_pay The employee's net pay. Only available when payroll has been processed
     *
     * @return self
     */
    public function setNetPay($net_pay)
    {
        $this->container['net_pay'] = $net_pay;

        return $this;
    }

    /**
     * Gets gross_pay
     *
     * @return float|null
     */
    public function getGrossPay()
    {
        return $this->container['gross_pay'];
    }

    /**
     * Sets gross_pay
     *
     * @param float|null $gross_pay The employee's gross pay. Only available when payroll has been processed
     *
     * @return self
     */
    public function setGrossPay($gross_pay)
    {
        $this->container['gross_pay'] = $gross_pay;

        return $this;
    }

    /**
     * Gets taxes
     *
     * @return \Apideck\Client\Model\Tax[]|null
     */
    public function getTaxes()
    {
        return $this->container['taxes'];
    }

    /**
     * Sets taxes
     *
     * @param \Apideck\Client\Model\Tax[]|null $taxes An array of employer and employee taxes for the pay period.
     *
     * @return self
     */
    public function setTaxes($taxes)
    {
        $this->container['taxes'] = $taxes;

        return $this;
    }

    /**
     * Gets deductions
     *
     * @return \Apideck\Client\Model\Deduction[]|null
     */
    public function getDeductions()
    {
        return $this->container['deductions'];
    }

    /**
     * Sets deductions
     *
     * @param \Apideck\Client\Model\Deduction[]|null $deductions An array of employee deductions for the pay period.
     *
     * @return self
     */
    public function setDeductions($deductions)
    {
        $this->container['deductions'] = $deductions;

        return $this;
    }

    /**
     * Gets benefits
     *
     * @return \Apideck\Client\Model\Benefit[]|null
     */
    public function getBenefits()
    {
        return $this->container['benefits'];
    }

    /**
     * Sets benefits
     *
     * @param \Apideck\Client\Model\Benefit[]|null $benefits An array of employee benefits for the pay period.
     *
     * @return self
     */
    public function setBenefits($benefits)
    {
        $this->container['benefits'] = $benefits;

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


