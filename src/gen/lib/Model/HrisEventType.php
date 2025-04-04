<?php
/**
 * HrisEventType
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
 * HrisEventType Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class HrisEventType
{
    /**
     * Possible values of this enum
     */
    const STAR = '*';

    const HRIS_EMPLOYEE_CREATED = 'hris.employee.created';

    const HRIS_EMPLOYEE_UPDATED = 'hris.employee.updated';

    const HRIS_EMPLOYEE_TERMINATED = 'hris.employee.terminated';

    const HRIS_EMPLOYEE_DELETED = 'hris.employee.deleted';

    const HRIS_COMPANY_CREATED = 'hris.company.created';

    const HRIS_COMPANY_UPDATED = 'hris.company.updated';

    const HRIS_COMPANY_DELETED = 'hris.company.deleted';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::STAR,
            self::HRIS_EMPLOYEE_CREATED,
            self::HRIS_EMPLOYEE_UPDATED,
            self::HRIS_EMPLOYEE_TERMINATED,
            self::HRIS_EMPLOYEE_DELETED,
            self::HRIS_COMPANY_CREATED,
            self::HRIS_COMPANY_UPDATED,
            self::HRIS_COMPANY_DELETED
        ];
    }
}


