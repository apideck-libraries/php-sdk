<?php
/**
 * LeadEventType
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
 * LeadEventType Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LeadEventType
{
    /**
     * Possible values of this enum
     */
    const STAR = '*';

    const LEAD_LEAD_CREATED = 'lead.lead.created';

    const LEAD_LEAD_UPDATED = 'lead.lead.updated';

    const LEAD_LEAD_DELETED = 'lead.lead.deleted';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::STAR,
            self::LEAD_LEAD_CREATED,
            self::LEAD_LEAD_UPDATED,
            self::LEAD_LEAD_DELETED
        ];
    }
}


