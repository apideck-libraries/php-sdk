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
 * The version of the OpenAPI document: 10.7.7
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
    const STAR = '*';

    const ATS_JOB_CREATED = 'ats.job.created';

    const ATS_JOB_UPDATED = 'ats.job.updated';

    const ATS_JOB_DELETED = 'ats.job.deleted';

    const ATS_APPLICANT_CREATED = 'ats.applicant.created';

    const ATS_APPLICANT_UPDATED = 'ats.applicant.updated';

    const ATS_APPLICANT_DELETED = 'ats.applicant.deleted';

    const ATS_APPLICATION_CREATED = 'ats.application.created';

    const ATS_APPLICATION_UPDATED = 'ats.application.updated';

    const ATS_APPLICATION_DELETED = 'ats.application.deleted';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::STAR,
            self::ATS_JOB_CREATED,
            self::ATS_JOB_UPDATED,
            self::ATS_JOB_DELETED,
            self::ATS_APPLICANT_CREATED,
            self::ATS_APPLICANT_UPDATED,
            self::ATS_APPLICANT_DELETED,
            self::ATS_APPLICATION_CREATED,
            self::ATS_APPLICATION_UPDATED,
            self::ATS_APPLICATION_DELETED
        ];
    }
}


