<?php
/**
 * JobStatus
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
 * The version of the OpenAPI document: 8.39.0
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
 * JobStatus Class Doc Comment
 *
 * @category Class
 * @description The status of the job.
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class JobStatus
{
    /**
     * Possible values of this enum
     */
    const DRAFT = 'draft';

    const INTERNAL = 'internal';

    const PUBLISHED = 'published';

    const COMPLETED = 'completed';

    const ON_HOLD = 'on-hold';

    const _PRIVATE = 'private';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DRAFT,
            self::INTERNAL,
            self::PUBLISHED,
            self::COMPLETED,
            self::ON_HOLD,
            self::_PRIVATE
        ];
    }
}


