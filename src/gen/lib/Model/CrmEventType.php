<?php
/**
 * CrmEventType
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
 * The version of the OpenAPI document: 8.50.0
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
 * CrmEventType Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CrmEventType
{
    /**
     * Possible values of this enum
     */
    const STAR = '*';

    const CRM_ACTIVITY_CREATED = 'crm.activity.created';

    const CRM_ACTIVITY_UPDATED = 'crm.activity.updated';

    const CRM_ACTIVITY_DELETED = 'crm.activity.deleted';

    const CRM_COMPANY_CREATED = 'crm.company.created';

    const CRM_COMPANY_UPDATED = 'crm.company.updated';

    const CRM_COMPANY_DELETED = 'crm.company.deleted';

    const CRM_CONTACT_CREATED = 'crm.contact.created';

    const CRM_CONTACT_UPDATED = 'crm.contact.updated';

    const CRM_CONTACT_DELETED = 'crm.contact.deleted';

    const CRM_LEAD_CREATED = 'crm.lead.created';

    const CRM_LEAD_UPDATED = 'crm.lead.updated';

    const CRM_LEAD_DELETED = 'crm.lead.deleted';

    const CRM_NOTE_CREATED = 'crm.note.created';

    const CRM_NOTE_UPDATED = 'crm.note.updated';

    const CRM_NOTE_DELETED = 'crm.note.deleted';

    const CRM_OPPORTUNITY_CREATED = 'crm.opportunity.created';

    const CRM_OPPORTUNITY_UPDATED = 'crm.opportunity.updated';

    const CRM_OPPORTUNITY_DELETED = 'crm.opportunity.deleted';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::STAR,
            self::CRM_ACTIVITY_CREATED,
            self::CRM_ACTIVITY_UPDATED,
            self::CRM_ACTIVITY_DELETED,
            self::CRM_COMPANY_CREATED,
            self::CRM_COMPANY_UPDATED,
            self::CRM_COMPANY_DELETED,
            self::CRM_CONTACT_CREATED,
            self::CRM_CONTACT_UPDATED,
            self::CRM_CONTACT_DELETED,
            self::CRM_LEAD_CREATED,
            self::CRM_LEAD_UPDATED,
            self::CRM_LEAD_DELETED,
            self::CRM_NOTE_CREATED,
            self::CRM_NOTE_UPDATED,
            self::CRM_NOTE_DELETED,
            self::CRM_OPPORTUNITY_CREATED,
            self::CRM_OPPORTUNITY_UPDATED,
            self::CRM_OPPORTUNITY_DELETED
        ];
    }
}


