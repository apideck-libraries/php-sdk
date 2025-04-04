<?php
/**
 * ApiStatus
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
 * ApiStatus Class Doc Comment
 *
 * @category Class
 * @description Status of the API. APIs with status live or beta are callable.
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ApiStatus
{
    /**
     * Possible values of this enum
     */
    const LIVE = 'live';

    const BETA = 'beta';

    const DEVELOPMENT = 'development';

    const CONSIDERING = 'considering';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::LIVE,
            self::BETA,
            self::DEVELOPMENT,
            self::CONSIDERING
        ];
    }
}


