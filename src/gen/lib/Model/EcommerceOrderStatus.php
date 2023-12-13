<?php
/**
 * EcommerceOrderStatus
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
 * The version of the OpenAPI document: 10.1.2
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
 * EcommerceOrderStatus Class Doc Comment
 *
 * @category Class
 * @description Current status of the order.
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EcommerceOrderStatus
{
    /**
     * Possible values of this enum
     */
    const ACTIVE = 'active';

    const COMPLETED = 'completed';

    const CANCELLED = 'cancelled';

    const ARCHIVED = 'archived';

    const UNKNOWN = 'unknown';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACTIVE,
            self::COMPLETED,
            self::CANCELLED,
            self::ARCHIVED,
            self::UNKNOWN
        ];
    }
}


