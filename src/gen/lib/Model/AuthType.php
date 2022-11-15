<?php
/**
 * AuthType
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
 * The version of the OpenAPI document: 8.85.0
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
 * AuthType Class Doc Comment
 *
 * @category Class
 * @description Type of authorization used by the connector
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AuthType
{
    /**
     * Possible values of this enum
     */
    const OAUTH2 = 'oauth2';

    const API_KEY = 'apiKey';

    const BASIC = 'basic';

    const CUSTOM = 'custom';

    const NONE = 'none';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OAUTH2,
            self::API_KEY,
            self::BASIC,
            self::CUSTOM,
            self::NONE
        ];
    }
}


