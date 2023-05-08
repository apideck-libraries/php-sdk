<?php
/**
 * AtsEventType
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
 * The version of the OpenAPI document: 9.3.1
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
 * AtsEventType Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AtsEventType
{
    /**
     * Possible values of this enum
     */
    const JOB_CREATED = 'ats.job.created';

    const JOB_UPDATED = 'ats.job.updated';

    const JOB_DELETED = 'ats.job.deleted';

    const APPLICANT_CREATED = 'ats.applicant.created';

    const APPLICANT_UPDATED = 'ats.applicant.updated';

    const APPLICANT_DELETED = 'ats.applicant.deleted';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::JOB_CREATED,
            self::JOB_UPDATED,
            self::JOB_DELETED,
            self::APPLICANT_CREATED,
            self::APPLICANT_UPDATED,
            self::APPLICANT_DELETED
        ];
    }
}


