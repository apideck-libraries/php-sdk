<?php
/**
 * EmploymentStatus
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
use \Apideck\Client\ObjectSerializer;

/**
 * EmploymentStatus Class Doc Comment
 *
 * @category Class
 * @description The employment status of the employee, indicating whether they are currently employed, inactive, terminated, or in another status.
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EmploymentStatus
{
    /**
     * Possible values of this enum
     */
    const ACTIVE = 'active';

    const INACTIVE = 'inactive';

    const TERMINATED = 'terminated';

    const OTHER = 'other';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACTIVE,
            self::INACTIVE,
            self::TERMINATED,
            self::OTHER
        ];
    }
}


