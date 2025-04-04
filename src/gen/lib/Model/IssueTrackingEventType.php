<?php
/**
 * IssueTrackingEventType
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
 * IssueTrackingEventType Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class IssueTrackingEventType
{
    /**
     * Possible values of this enum
     */
    const STAR = '*';

    const ISSUE_TRACKING_TICKET_CREATED = 'issue-tracking.ticket.created';

    const ISSUE_TRACKING_TICKET_UPDATED = 'issue-tracking.ticket.updated';

    const ISSUE_TRACKING_TICKET_DELETED = 'issue-tracking.ticket.deleted';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::STAR,
            self::ISSUE_TRACKING_TICKET_CREATED,
            self::ISSUE_TRACKING_TICKET_UPDATED,
            self::ISSUE_TRACKING_TICKET_DELETED
        ];
    }
}


