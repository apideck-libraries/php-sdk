<?php
/**
 * PaymentFrequency
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
 * The version of the OpenAPI document: 10.10.0
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
 * PaymentFrequency Class Doc Comment
 *
 * @category Class
 * @description Frequency of employee compensation.
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentFrequency
{
    /**
     * Possible values of this enum
     */
    const WEEKLY = 'weekly';

    const BIWEEKLY = 'biweekly';

    const MONTHLY = 'monthly';

    const PRO_RATA = 'pro-rata';

    const OTHER = 'other';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::WEEKLY,
            self::BIWEEKLY,
            self::MONTHLY,
            self::PRO_RATA,
            self::OTHER
        ];
    }
}


