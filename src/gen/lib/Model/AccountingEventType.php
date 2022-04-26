<?php
/**
 * AccountingEventType
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
 * The version of the OpenAPI document: 8.26.1
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
 * AccountingEventType Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AccountingEventType
{
    /**
     * Possible values of this enum
     */
    const STAR = '*';

    const ACCOUNTING_CUSTOMER_CREATED = 'accounting.customer.created';

    const ACCOUNTING_CUSTOMER_UPDATED = 'accounting.customer.updated';

    const ACCOUNTING_CUSTOMER_DELETED = 'accounting.customer.deleted';

    const ACCOUNTING_INVOICE_CREATED = 'accounting.invoice.created';

    const ACCOUNTING_INVOICE_UPDATED = 'accounting.invoice.updated';

    const ACCOUNTING_INVOICE_DELETED = 'accounting.invoice.deleted';

    const ACCOUNTING_INVOICE_ITEM_CREATED = 'accounting.invoice_item.created';

    const ACCOUNTING_INVOICE_ITEM_UPDATED = 'accounting.invoice_item.updated';

    const ACCOUNTING_INVOICE_ITEM_DELETED = 'accounting.invoice_item.deleted';

    const ACCOUNTING_LEDGER_ACCOUNT_CREATED = 'accounting.ledger_account.created';

    const ACCOUNTING_LEDGER_ACCOUNT_UPDATED = 'accounting.ledger_account.updated';

    const ACCOUNTING_LEDGER_ACCOUNT_DELETED = 'accounting.ledger_account.deleted';

    const ACCOUNTING_TAX_RATE_CREATED = 'accounting.tax_rate.created';

    const ACCOUNTING_TAX_RATE_UPDATED = 'accounting.tax_rate.updated';

    const ACCOUNTING_TAX_RATE_DELETED = 'accounting.tax_rate.deleted';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::STAR,
            self::ACCOUNTING_CUSTOMER_CREATED,
            self::ACCOUNTING_CUSTOMER_UPDATED,
            self::ACCOUNTING_CUSTOMER_DELETED,
            self::ACCOUNTING_INVOICE_CREATED,
            self::ACCOUNTING_INVOICE_UPDATED,
            self::ACCOUNTING_INVOICE_DELETED,
            self::ACCOUNTING_INVOICE_ITEM_CREATED,
            self::ACCOUNTING_INVOICE_ITEM_UPDATED,
            self::ACCOUNTING_INVOICE_ITEM_DELETED,
            self::ACCOUNTING_LEDGER_ACCOUNT_CREATED,
            self::ACCOUNTING_LEDGER_ACCOUNT_UPDATED,
            self::ACCOUNTING_LEDGER_ACCOUNT_DELETED,
            self::ACCOUNTING_TAX_RATE_CREATED,
            self::ACCOUNTING_TAX_RATE_UPDATED,
            self::ACCOUNTING_TAX_RATE_DELETED
        ];
    }
}


