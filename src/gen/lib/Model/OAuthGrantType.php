<?php
/**
 * OAuthGrantType
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
 * The version of the OpenAPI document: 10.3.3
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
 * OAuthGrantType Class Doc Comment
 *
 * @category Class
 * @description OAuth grant type used by the connector. More info: https://oauth.net/2/grant-types
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OAuthGrantType
{
    /**
     * Possible values of this enum
     */
    const AUTHORIZATION_CODE = 'authorization_code';

    const CLIENT_CREDENTIALS = 'client_credentials';

    const PASSWORD = 'password';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AUTHORIZATION_CODE,
            self::CLIENT_CREDENTIALS,
            self::PASSWORD
        ];
    }
}


