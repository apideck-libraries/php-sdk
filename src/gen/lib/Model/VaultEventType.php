<?php
/**
 * VaultEventType
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
 * The version of the OpenAPI document: 8.63.0
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
 * VaultEventType Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class VaultEventType
{
    /**
     * Possible values of this enum
     */
    const STAR = '*';

    const VAULT_CONNECTION_CREATED = 'vault.connection.created';

    const VAULT_CONNECTION_UPDATED = 'vault.connection.updated';

    const VAULT_CONNECTION_DELETED = 'vault.connection.deleted';

    const VAULT_CONNECTION_CALLABLE = 'vault.connection.callable';

    const VAULT_CONNECTION_TOKEN_REFRESH_FAILED = 'vault.connection.token_refresh.failed';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::STAR,
            self::VAULT_CONNECTION_CREATED,
            self::VAULT_CONNECTION_UPDATED,
            self::VAULT_CONNECTION_DELETED,
            self::VAULT_CONNECTION_CALLABLE,
            self::VAULT_CONNECTION_TOKEN_REFRESH_FAILED
        ];
    }
}


