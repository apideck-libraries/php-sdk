<?php
/**
 * UnifiedApiId
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
 * The version of the OpenAPI document: 10.6.3
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
 * UnifiedApiId Class Doc Comment
 *
 * @category Class
 * @description Name of Apideck Unified API
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UnifiedApiId
{
    /**
     * Possible values of this enum
     */
    const ACCOUNTING = 'accounting';

    const ATS = 'ats';

    const CALENDAR = 'calendar';

    const CRM = 'crm';

    const CSP = 'csp';

    const CUSTOMER_SUPPORT = 'customer-support';

    const ECOMMERCE = 'ecommerce';

    const EMAIL = 'email';

    const EMAIL_MARKETING = 'email-marketing';

    const EXPENSE_MANAGEMENT = 'expense-management';

    const FILE_STORAGE = 'file-storage';

    const FORM = 'form';

    const HRIS = 'hris';

    const LEAD = 'lead';

    const PAYROLL = 'payroll';

    const POS = 'pos';

    const PROCUREMENT = 'procurement';

    const PROJECT_MANAGEMENT = 'project-management';

    const SCRIPT = 'script';

    const SMS = 'sms';

    const SPREADSHEET = 'spreadsheet';

    const TEAM_MESSAGING = 'team-messaging';

    const ISSUE_TRACKING = 'issue-tracking';

    const TIME_REGISTRATION = 'time-registration';

    const TRANSACTIONAL_EMAIL = 'transactional-email';

    const VAULT = 'vault';

    const DATA_WAREHOUSE = 'data-warehouse';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACCOUNTING,
            self::ATS,
            self::CALENDAR,
            self::CRM,
            self::CSP,
            self::CUSTOMER_SUPPORT,
            self::ECOMMERCE,
            self::EMAIL,
            self::EMAIL_MARKETING,
            self::EXPENSE_MANAGEMENT,
            self::FILE_STORAGE,
            self::FORM,
            self::HRIS,
            self::LEAD,
            self::PAYROLL,
            self::POS,
            self::PROCUREMENT,
            self::PROJECT_MANAGEMENT,
            self::SCRIPT,
            self::SMS,
            self::SPREADSHEET,
            self::TEAM_MESSAGING,
            self::ISSUE_TRACKING,
            self::TIME_REGISTRATION,
            self::TRANSACTIONAL_EMAIL,
            self::VAULT,
            self::DATA_WAREHOUSE
        ];
    }
}


