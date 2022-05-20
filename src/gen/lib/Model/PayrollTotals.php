<?php
/**
 * PayrollTotals
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
 * The version of the OpenAPI document: 8.29.5
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
 * PayrollTotals Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PayrollTotals implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PayrollTotals';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'company_debit' => 'float',
        'tax_debit' => 'float',
        'check_amount' => 'float',
        'net_pay' => 'float',
        'gross_pay' => 'float',
        'employer_taxes' => 'float',
        'employee_taxes' => 'float',
        'employer_benefit_contributions' => 'float',
        'employee_benefit_deductions' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'company_debit' => null,
        'tax_debit' => null,
        'check_amount' => null,
        'net_pay' => null,
        'gross_pay' => null,
        'employer_taxes' => null,
        'employee_taxes' => null,
        'employer_benefit_contributions' => null,
        'employee_benefit_deductions' => null
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
        'company_debit' => 'company_debit',
        'tax_debit' => 'tax_debit',
        'check_amount' => 'check_amount',
        'net_pay' => 'net_pay',
        'gross_pay' => 'gross_pay',
        'employer_taxes' => 'employer_taxes',
        'employee_taxes' => 'employee_taxes',
        'employer_benefit_contributions' => 'employer_benefit_contributions',
        'employee_benefit_deductions' => 'employee_benefit_deductions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company_debit' => 'setCompanyDebit',
        'tax_debit' => 'setTaxDebit',
        'check_amount' => 'setCheckAmount',
        'net_pay' => 'setNetPay',
        'gross_pay' => 'setGrossPay',
        'employer_taxes' => 'setEmployerTaxes',
        'employee_taxes' => 'setEmployeeTaxes',
        'employer_benefit_contributions' => 'setEmployerBenefitContributions',
        'employee_benefit_deductions' => 'setEmployeeBenefitDeductions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company_debit' => 'getCompanyDebit',
        'tax_debit' => 'getTaxDebit',
        'check_amount' => 'getCheckAmount',
        'net_pay' => 'getNetPay',
        'gross_pay' => 'getGrossPay',
        'employer_taxes' => 'getEmployerTaxes',
        'employee_taxes' => 'getEmployeeTaxes',
        'employer_benefit_contributions' => 'getEmployerBenefitContributions',
        'employee_benefit_deductions' => 'getEmployeeBenefitDeductions'
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
        $this->container['company_debit'] = $data['company_debit'] ?? null;
        $this->container['tax_debit'] = $data['tax_debit'] ?? null;
        $this->container['check_amount'] = $data['check_amount'] ?? null;
        $this->container['net_pay'] = $data['net_pay'] ?? null;
        $this->container['gross_pay'] = $data['gross_pay'] ?? null;
        $this->container['employer_taxes'] = $data['employer_taxes'] ?? null;
        $this->container['employee_taxes'] = $data['employee_taxes'] ?? null;
        $this->container['employer_benefit_contributions'] = $data['employer_benefit_contributions'] ?? null;
        $this->container['employee_benefit_deductions'] = $data['employee_benefit_deductions'] ?? null;
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
     * Gets company_debit
     *
     * @return float|null
     */
    public function getCompanyDebit()
    {
        return $this->container['company_debit'];
    }

    /**
     * Sets company_debit
     *
     * @param float|null $company_debit The total company debit for the payroll.
     *
     * @return self
     */
    public function setCompanyDebit($company_debit)
    {
        $this->container['company_debit'] = $company_debit;

        return $this;
    }

    /**
     * Gets tax_debit
     *
     * @return float|null
     */
    public function getTaxDebit()
    {
        return $this->container['tax_debit'];
    }

    /**
     * Sets tax_debit
     *
     * @param float|null $tax_debit The total tax debit for the payroll.
     *
     * @return self
     */
    public function setTaxDebit($tax_debit)
    {
        $this->container['tax_debit'] = $tax_debit;

        return $this;
    }

    /**
     * Gets check_amount
     *
     * @return float|null
     */
    public function getCheckAmount()
    {
        return $this->container['check_amount'];
    }

    /**
     * Sets check_amount
     *
     * @param float|null $check_amount The total check amount for the payroll.
     *
     * @return self
     */
    public function setCheckAmount($check_amount)
    {
        $this->container['check_amount'] = $check_amount;

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
     * @param float|null $net_pay The net pay amount for the payroll.
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
     * @param float|null $gross_pay The gross pay amount for the payroll.
     *
     * @return self
     */
    public function setGrossPay($gross_pay)
    {
        $this->container['gross_pay'] = $gross_pay;

        return $this;
    }

    /**
     * Gets employer_taxes
     *
     * @return float|null
     */
    public function getEmployerTaxes()
    {
        return $this->container['employer_taxes'];
    }

    /**
     * Sets employer_taxes
     *
     * @param float|null $employer_taxes The total amount of employer paid taxes for the payroll.
     *
     * @return self
     */
    public function setEmployerTaxes($employer_taxes)
    {
        $this->container['employer_taxes'] = $employer_taxes;

        return $this;
    }

    /**
     * Gets employee_taxes
     *
     * @return float|null
     */
    public function getEmployeeTaxes()
    {
        return $this->container['employee_taxes'];
    }

    /**
     * Sets employee_taxes
     *
     * @param float|null $employee_taxes The total amount of employee paid taxes for the payroll.
     *
     * @return self
     */
    public function setEmployeeTaxes($employee_taxes)
    {
        $this->container['employee_taxes'] = $employee_taxes;

        return $this;
    }

    /**
     * Gets employer_benefit_contributions
     *
     * @return float|null
     */
    public function getEmployerBenefitContributions()
    {
        return $this->container['employer_benefit_contributions'];
    }

    /**
     * Sets employer_benefit_contributions
     *
     * @param float|null $employer_benefit_contributions The total amount of company contributed benefits for the payroll.
     *
     * @return self
     */
    public function setEmployerBenefitContributions($employer_benefit_contributions)
    {
        $this->container['employer_benefit_contributions'] = $employer_benefit_contributions;

        return $this;
    }

    /**
     * Gets employee_benefit_deductions
     *
     * @return float|null
     */
    public function getEmployeeBenefitDeductions()
    {
        return $this->container['employee_benefit_deductions'];
    }

    /**
     * Sets employee_benefit_deductions
     *
     * @param float|null $employee_benefit_deductions The total amount of employee deducted benefits for the payroll.
     *
     * @return self
     */
    public function setEmployeeBenefitDeductions($employee_benefit_deductions)
    {
        $this->container['employee_benefit_deductions'] = $employee_benefit_deductions;

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


