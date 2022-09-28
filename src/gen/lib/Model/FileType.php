<?php
/**
 * FileType
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
 * The version of the OpenAPI document: 8.64.0
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
 * FileType Class Doc Comment
 *
 * @category Class
 * @description The type of resource. Could be file, folder or url
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FileType
{
    /**
     * Possible values of this enum
     */
    const FILE = 'file';

    const FOLDER = 'folder';

    const URL = 'url';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FILE,
            self::FOLDER,
            self::URL
        ];
    }
}


