<?php
/**
 * PaymentType
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
 * The version of the OpenAPI document: 10.9.0
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
 * PaymentType Class Doc Comment
 *
 * @category Class
 * @description Type of payment
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PaymentType
{
    /**
     * Possible values of this enum
     */
    const RECEIVABLE = 'accounts_receivable';

    const PAYABLE = 'accounts_payable';

    const RECEIVABLE_CREDIT = 'accounts_receivable_credit';

    const PAYABLE_CREDIT = 'accounts_payable_credit';

    const RECEIVABLE_OVERPAYMENT = 'accounts_receivable_overpayment';

    const PAYABLE_OVERPAYMENT = 'accounts_payable_overpayment';

    const RECEIVABLE_PREPAYMENT = 'accounts_receivable_prepayment';

    const PAYABLE_PREPAYMENT = 'accounts_payable_prepayment';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::RECEIVABLE,
            self::PAYABLE,
            self::RECEIVABLE_CREDIT,
            self::PAYABLE_CREDIT,
            self::RECEIVABLE_OVERPAYMENT,
            self::PAYABLE_OVERPAYMENT,
            self::RECEIVABLE_PREPAYMENT,
            self::PAYABLE_PREPAYMENT
        ];
    }
}


