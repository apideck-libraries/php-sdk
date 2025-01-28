<?php
/**
 * ScheduleWorkPatternOddWeeks
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
 * The version of the OpenAPI document: 10.11.0
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
 * ScheduleWorkPatternOddWeeks Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ScheduleWorkPatternOddWeeks implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Schedule_work_pattern_odd_weeks';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'hours_monday' => 'double',
        'hours_tuesday' => 'double',
        'hours_wednesday' => 'double',
        'hours_thursday' => 'double',
        'hours_friday' => 'double',
        'hours_saturday' => 'double',
        'hours_sunday' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'hours_monday' => 'double',
        'hours_tuesday' => 'double',
        'hours_wednesday' => 'double',
        'hours_thursday' => 'double',
        'hours_friday' => 'double',
        'hours_saturday' => 'double',
        'hours_sunday' => 'double'
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
        'hours_monday' => 'hours_monday',
        'hours_tuesday' => 'hours_tuesday',
        'hours_wednesday' => 'hours_wednesday',
        'hours_thursday' => 'hours_thursday',
        'hours_friday' => 'hours_friday',
        'hours_saturday' => 'hours_saturday',
        'hours_sunday' => 'hours_sunday'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hours_monday' => 'setHoursMonday',
        'hours_tuesday' => 'setHoursTuesday',
        'hours_wednesday' => 'setHoursWednesday',
        'hours_thursday' => 'setHoursThursday',
        'hours_friday' => 'setHoursFriday',
        'hours_saturday' => 'setHoursSaturday',
        'hours_sunday' => 'setHoursSunday'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hours_monday' => 'getHoursMonday',
        'hours_tuesday' => 'getHoursTuesday',
        'hours_wednesday' => 'getHoursWednesday',
        'hours_thursday' => 'getHoursThursday',
        'hours_friday' => 'getHoursFriday',
        'hours_saturday' => 'getHoursSaturday',
        'hours_sunday' => 'getHoursSunday'
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
        $this->container['hours_monday'] = $data['hours_monday'] ?? null;
        $this->container['hours_tuesday'] = $data['hours_tuesday'] ?? null;
        $this->container['hours_wednesday'] = $data['hours_wednesday'] ?? null;
        $this->container['hours_thursday'] = $data['hours_thursday'] ?? null;
        $this->container['hours_friday'] = $data['hours_friday'] ?? null;
        $this->container['hours_saturday'] = $data['hours_saturday'] ?? null;
        $this->container['hours_sunday'] = $data['hours_sunday'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['hours_monday']) && ($this->container['hours_monday'] > 24)) {
            $invalidProperties[] = "invalid value for 'hours_monday', must be smaller than or equal to 24.";
        }

        if (!is_null($this->container['hours_monday']) && ($this->container['hours_monday'] < 0)) {
            $invalidProperties[] = "invalid value for 'hours_monday', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['hours_tuesday']) && ($this->container['hours_tuesday'] > 24)) {
            $invalidProperties[] = "invalid value for 'hours_tuesday', must be smaller than or equal to 24.";
        }

        if (!is_null($this->container['hours_tuesday']) && ($this->container['hours_tuesday'] < 0)) {
            $invalidProperties[] = "invalid value for 'hours_tuesday', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['hours_wednesday']) && ($this->container['hours_wednesday'] > 24)) {
            $invalidProperties[] = "invalid value for 'hours_wednesday', must be smaller than or equal to 24.";
        }

        if (!is_null($this->container['hours_wednesday']) && ($this->container['hours_wednesday'] < 0)) {
            $invalidProperties[] = "invalid value for 'hours_wednesday', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['hours_thursday']) && ($this->container['hours_thursday'] > 24)) {
            $invalidProperties[] = "invalid value for 'hours_thursday', must be smaller than or equal to 24.";
        }

        if (!is_null($this->container['hours_thursday']) && ($this->container['hours_thursday'] < 0)) {
            $invalidProperties[] = "invalid value for 'hours_thursday', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['hours_friday']) && ($this->container['hours_friday'] > 24)) {
            $invalidProperties[] = "invalid value for 'hours_friday', must be smaller than or equal to 24.";
        }

        if (!is_null($this->container['hours_friday']) && ($this->container['hours_friday'] < 0)) {
            $invalidProperties[] = "invalid value for 'hours_friday', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['hours_saturday']) && ($this->container['hours_saturday'] > 24)) {
            $invalidProperties[] = "invalid value for 'hours_saturday', must be smaller than or equal to 24.";
        }

        if (!is_null($this->container['hours_saturday']) && ($this->container['hours_saturday'] < 0)) {
            $invalidProperties[] = "invalid value for 'hours_saturday', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['hours_sunday']) && ($this->container['hours_sunday'] > 24)) {
            $invalidProperties[] = "invalid value for 'hours_sunday', must be smaller than or equal to 24.";
        }

        if (!is_null($this->container['hours_sunday']) && ($this->container['hours_sunday'] < 0)) {
            $invalidProperties[] = "invalid value for 'hours_sunday', must be bigger than or equal to 0.";
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
     * Gets hours_monday
     *
     * @return double|null
     */
    public function getHoursMonday()
    {
        return $this->container['hours_monday'];
    }

    /**
     * Sets hours_monday
     *
     * @param double|null $hours_monday hours_monday
     *
     * @return self
     */
    public function setHoursMonday($hours_monday)
    {

        if (!is_null($hours_monday) && ($hours_monday > 24)) {
            throw new \InvalidArgumentException('invalid value for $hours_monday when calling ScheduleWorkPatternOddWeeks., must be smaller than or equal to 24.');
        }
        if (!is_null($hours_monday) && ($hours_monday < 0)) {
            throw new \InvalidArgumentException('invalid value for $hours_monday when calling ScheduleWorkPatternOddWeeks., must be bigger than or equal to 0.');
        }

        $this->container['hours_monday'] = $hours_monday;

        return $this;
    }

    /**
     * Gets hours_tuesday
     *
     * @return double|null
     */
    public function getHoursTuesday()
    {
        return $this->container['hours_tuesday'];
    }

    /**
     * Sets hours_tuesday
     *
     * @param double|null $hours_tuesday hours_tuesday
     *
     * @return self
     */
    public function setHoursTuesday($hours_tuesday)
    {

        if (!is_null($hours_tuesday) && ($hours_tuesday > 24)) {
            throw new \InvalidArgumentException('invalid value for $hours_tuesday when calling ScheduleWorkPatternOddWeeks., must be smaller than or equal to 24.');
        }
        if (!is_null($hours_tuesday) && ($hours_tuesday < 0)) {
            throw new \InvalidArgumentException('invalid value for $hours_tuesday when calling ScheduleWorkPatternOddWeeks., must be bigger than or equal to 0.');
        }

        $this->container['hours_tuesday'] = $hours_tuesday;

        return $this;
    }

    /**
     * Gets hours_wednesday
     *
     * @return double|null
     */
    public function getHoursWednesday()
    {
        return $this->container['hours_wednesday'];
    }

    /**
     * Sets hours_wednesday
     *
     * @param double|null $hours_wednesday hours_wednesday
     *
     * @return self
     */
    public function setHoursWednesday($hours_wednesday)
    {

        if (!is_null($hours_wednesday) && ($hours_wednesday > 24)) {
            throw new \InvalidArgumentException('invalid value for $hours_wednesday when calling ScheduleWorkPatternOddWeeks., must be smaller than or equal to 24.');
        }
        if (!is_null($hours_wednesday) && ($hours_wednesday < 0)) {
            throw new \InvalidArgumentException('invalid value for $hours_wednesday when calling ScheduleWorkPatternOddWeeks., must be bigger than or equal to 0.');
        }

        $this->container['hours_wednesday'] = $hours_wednesday;

        return $this;
    }

    /**
     * Gets hours_thursday
     *
     * @return double|null
     */
    public function getHoursThursday()
    {
        return $this->container['hours_thursday'];
    }

    /**
     * Sets hours_thursday
     *
     * @param double|null $hours_thursday hours_thursday
     *
     * @return self
     */
    public function setHoursThursday($hours_thursday)
    {

        if (!is_null($hours_thursday) && ($hours_thursday > 24)) {
            throw new \InvalidArgumentException('invalid value for $hours_thursday when calling ScheduleWorkPatternOddWeeks., must be smaller than or equal to 24.');
        }
        if (!is_null($hours_thursday) && ($hours_thursday < 0)) {
            throw new \InvalidArgumentException('invalid value for $hours_thursday when calling ScheduleWorkPatternOddWeeks., must be bigger than or equal to 0.');
        }

        $this->container['hours_thursday'] = $hours_thursday;

        return $this;
    }

    /**
     * Gets hours_friday
     *
     * @return double|null
     */
    public function getHoursFriday()
    {
        return $this->container['hours_friday'];
    }

    /**
     * Sets hours_friday
     *
     * @param double|null $hours_friday hours_friday
     *
     * @return self
     */
    public function setHoursFriday($hours_friday)
    {

        if (!is_null($hours_friday) && ($hours_friday > 24)) {
            throw new \InvalidArgumentException('invalid value for $hours_friday when calling ScheduleWorkPatternOddWeeks., must be smaller than or equal to 24.');
        }
        if (!is_null($hours_friday) && ($hours_friday < 0)) {
            throw new \InvalidArgumentException('invalid value for $hours_friday when calling ScheduleWorkPatternOddWeeks., must be bigger than or equal to 0.');
        }

        $this->container['hours_friday'] = $hours_friday;

        return $this;
    }

    /**
     * Gets hours_saturday
     *
     * @return double|null
     */
    public function getHoursSaturday()
    {
        return $this->container['hours_saturday'];
    }

    /**
     * Sets hours_saturday
     *
     * @param double|null $hours_saturday hours_saturday
     *
     * @return self
     */
    public function setHoursSaturday($hours_saturday)
    {

        if (!is_null($hours_saturday) && ($hours_saturday > 24)) {
            throw new \InvalidArgumentException('invalid value for $hours_saturday when calling ScheduleWorkPatternOddWeeks., must be smaller than or equal to 24.');
        }
        if (!is_null($hours_saturday) && ($hours_saturday < 0)) {
            throw new \InvalidArgumentException('invalid value for $hours_saturday when calling ScheduleWorkPatternOddWeeks., must be bigger than or equal to 0.');
        }

        $this->container['hours_saturday'] = $hours_saturday;

        return $this;
    }

    /**
     * Gets hours_sunday
     *
     * @return double|null
     */
    public function getHoursSunday()
    {
        return $this->container['hours_sunday'];
    }

    /**
     * Sets hours_sunday
     *
     * @param double|null $hours_sunday hours_sunday
     *
     * @return self
     */
    public function setHoursSunday($hours_sunday)
    {

        if (!is_null($hours_sunday) && ($hours_sunday > 24)) {
            throw new \InvalidArgumentException('invalid value for $hours_sunday when calling ScheduleWorkPatternOddWeeks., must be smaller than or equal to 24.');
        }
        if (!is_null($hours_sunday) && ($hours_sunday < 0)) {
            throw new \InvalidArgumentException('invalid value for $hours_sunday when calling ScheduleWorkPatternOddWeeks., must be bigger than or equal to 0.');
        }

        $this->container['hours_sunday'] = $hours_sunday;

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


