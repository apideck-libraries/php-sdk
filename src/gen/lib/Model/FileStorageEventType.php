<?php
/**
 * FileStorageEventType
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
 * FileStorageEventType Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FileStorageEventType
{
    /**
     * Possible values of this enum
     */
    const STAR = '*';

    const FILE_STORAGE_FILE_CREATED = 'file-storage.file.created';

    const FILE_STORAGE_FILE_UPDATED = 'file-storage.file.updated';

    const FILE_STORAGE_FILE_DELETED = 'file-storage.file.deleted';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::STAR,
            self::FILE_STORAGE_FILE_CREATED,
            self::FILE_STORAGE_FILE_UPDATED,
            self::FILE_STORAGE_FILE_DELETED
        ];
    }
}


