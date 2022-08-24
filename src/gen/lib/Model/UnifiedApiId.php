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
 * The version of the OpenAPI document: 8.41.1
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
    const VAULT = 'vault';

    const LEAD = 'lead';

    const CRM = 'crm';

    const ACCOUNTING = 'accounting';

    const FILE_STORAGE = 'file-storage';

    const SPREADSHEET = 'spreadsheet';

    const EMAIL = 'email';

    const SCRIPT = 'script';

    const SMS = 'sms';

    const TEAM_MESSAGING = 'team-messaging';

    const ECOMMERCE = 'ecommerce';

    const PAYROLL = 'payroll';

    const CUSTOMER_SUPPORT = 'customer-support';

    const TIME_REGISTRATION = 'time-registration';

    const TRANSACTIONAL_EMAIL = 'transactional-email';

    const HCM = 'hcm';

    const FORM = 'form';

    const CSP = 'csp';

    const EMAIL_MARKETING = 'email-marketing';

    const ATS = 'ats';

    const HRIS = 'hris';

    const POS = 'pos';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::VAULT,
            self::LEAD,
            self::CRM,
            self::ACCOUNTING,
            self::FILE_STORAGE,
            self::SPREADSHEET,
            self::EMAIL,
            self::SCRIPT,
            self::SMS,
            self::TEAM_MESSAGING,
            self::ECOMMERCE,
            self::PAYROLL,
            self::CUSTOMER_SUPPORT,
            self::TIME_REGISTRATION,
            self::TRANSACTIONAL_EMAIL,
            self::HCM,
            self::FORM,
            self::CSP,
            self::EMAIL_MARKETING,
            self::ATS,
            self::HRIS,
            self::POS
        ];
    }
}


