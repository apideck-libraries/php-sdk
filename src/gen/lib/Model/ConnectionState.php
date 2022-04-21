<?php
/**
 * ConnectionState
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
 * The version of the OpenAPI document: 8.24.1
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
 * ConnectionState Class Doc Comment
 *
 * @category Class
 * @description [Connection state flow](#section/Connection-state)
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ConnectionState
{
    /**
     * Possible values of this enum
     */
    const AVAILABLE = 'available';

    const _CALLABLE = 'callable';

    const ADDED = 'added';

    const AUTHORIZED = 'authorized';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AVAILABLE,
            self::_CALLABLE,
            self::ADDED,
            self::AUTHORIZED
        ];
    }
}


