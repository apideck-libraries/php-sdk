<?php
/**
 * WebhookEventType
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
 * The version of the OpenAPI document: 8.85.0
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
 * WebhookEventType Class Doc Comment
 *
 * @category Class
 * @package  Apideck\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WebhookEventType
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

    const CRM_NOTES_UPDATED = 'crm.notes.updated';

    const CRM_NOTES_DELETED = 'crm.notes.deleted';

    const CRM_OPPORTUNITY_CREATED = 'crm.opportunity.created';

    const CRM_OPPORTUNITY_UPDATED = 'crm.opportunity.updated';

    const CRM_OPPORTUNITY_DELETED = 'crm.opportunity.deleted';

    const LEAD_LEAD_CREATED = 'lead.lead.created';

    const LEAD_LEAD_UPDATED = 'lead.lead.updated';

    const LEAD_LEAD_DELETED = 'lead.lead.deleted';

    const VAULT_CONNECTION_CREATED = 'vault.connection.created';

    const VAULT_CONNECTION_UPDATED = 'vault.connection.updated';

    const VAULT_CONNECTION_DISABLED = 'vault.connection.disabled';

    const VAULT_CONNECTION_DELETED = 'vault.connection.deleted';

    const VAULT_CONNECTION_CALLABLE = 'vault.connection.callable';

    const VAULT_CONNECTION_TOKEN_REFRESH_FAILED = 'vault.connection.token_refresh.failed';

    const ATS_JOB_CREATED = 'ats.job.created';

    const ATS_JOB_UPDATED = 'ats.job.updated';

    const ATS_JOB_DELETED = 'ats.job.deleted';

    const ATS_APPLICANT_CREATED = 'ats.applicant.created';

    const ATS_APPLICANT_UPDATED = 'ats.applicant.updated';

    const ATS_APPLICANT_DELETED = 'ats.applicant.deleted';

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

    const ACCOUNTING_BILL_CREATED = 'accounting.bill.created';

    const ACCOUNTING_BILL_UPDATED = 'accounting.bill.updated';

    const ACCOUNTING_BILL_DELETED = 'accounting.bill.deleted';

    const ACCOUNTING_PAYMENT_CREATED = 'accounting.payment.created';

    const ACCOUNTING_PAYMENT_UPDATED = 'accounting.payment.updated';

    const ACCOUNTING_PAYMENT_DELETED = 'accounting.payment.deleted';

    const ACCOUNTING_SUPPLIER_CREATED = 'accounting.supplier.created';

    const ACCOUNTING_SUPPLIER_UPDATED = 'accounting.supplier.updated';

    const ACCOUNTING_SUPPLIER_DELETED = 'accounting.supplier.deleted';

    const POS_ORDER_CREATED = 'pos.order.created';

    const POS_ORDER_UPDATED = 'pos.order.updated';

    const POS_ORDER_DELETED = 'pos.order.deleted';

    const POS_PRODUCT_CREATED = 'pos.product.created';

    const POS_PRODUCT_UPDATED = 'pos.product.updated';

    const POS_PRODUCT_DELETED = 'pos.product.deleted';

    const POS_PAYMENT_CREATED = 'pos.payment.created';

    const POS_PAYMENT_UPDATED = 'pos.payment.updated';

    const POS_PAYMENT_DELETED = 'pos.payment.deleted';

    const POS_MERCHANT_CREATED = 'pos.merchant.created';

    const POS_MERCHANT_UPDATED = 'pos.merchant.updated';

    const POS_MERCHANT_DELETED = 'pos.merchant.deleted';

    const POS_LOCATION_CREATED = 'pos.location.created';

    const POS_LOCATION_UPDATED = 'pos.location.updated';

    const POS_LOCATION_DELETED = 'pos.location.deleted';

    const POS_ITEM_CREATED = 'pos.item.created';

    const POS_ITEM_UPDATED = 'pos.item.updated';

    const POS_ITEM_DELETED = 'pos.item.deleted';

    const POS_MODIFIER_CREATED = 'pos.modifier.created';

    const POS_MODIFIER_UPDATED = 'pos.modifier.updated';

    const POS_MODIFIER_DELETED = 'pos.modifier.deleted';

    const POS_MODIFIER_GROUP_CREATED = 'pos.modifier-group.created';

    const POS_MODIFIER_GROUP_UPDATED = 'pos.modifier-group.updated';

    const POS_MODIFIER_GROUP_DELETED = 'pos.modifier-group.deleted';

    const HRIS_EMPLOYEE_CREATED = 'hris.employee.created';

    const HRIS_EMPLOYEE_UPDATED = 'hris.employee.updated';

    const HRIS_EMPLOYEE_DELETED = 'hris.employee.deleted';

    const HRIS_COMPANY_CREATED = 'hris.company.created';

    const HRIS_COMPANY_UPDATED = 'hris.company.updated';

    const HRIS_COMPANY_DELETED = 'hris.company.deleted';

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
            self::CRM_NOTES_UPDATED,
            self::CRM_NOTES_DELETED,
            self::CRM_OPPORTUNITY_CREATED,
            self::CRM_OPPORTUNITY_UPDATED,
            self::CRM_OPPORTUNITY_DELETED,
            self::LEAD_LEAD_CREATED,
            self::LEAD_LEAD_UPDATED,
            self::LEAD_LEAD_DELETED,
            self::VAULT_CONNECTION_CREATED,
            self::VAULT_CONNECTION_UPDATED,
            self::VAULT_CONNECTION_DISABLED,
            self::VAULT_CONNECTION_DELETED,
            self::VAULT_CONNECTION_CALLABLE,
            self::VAULT_CONNECTION_TOKEN_REFRESH_FAILED,
            self::ATS_JOB_CREATED,
            self::ATS_JOB_UPDATED,
            self::ATS_JOB_DELETED,
            self::ATS_APPLICANT_CREATED,
            self::ATS_APPLICANT_UPDATED,
            self::ATS_APPLICANT_DELETED,
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
            self::ACCOUNTING_TAX_RATE_DELETED,
            self::ACCOUNTING_BILL_CREATED,
            self::ACCOUNTING_BILL_UPDATED,
            self::ACCOUNTING_BILL_DELETED,
            self::ACCOUNTING_PAYMENT_CREATED,
            self::ACCOUNTING_PAYMENT_UPDATED,
            self::ACCOUNTING_PAYMENT_DELETED,
            self::ACCOUNTING_SUPPLIER_CREATED,
            self::ACCOUNTING_SUPPLIER_UPDATED,
            self::ACCOUNTING_SUPPLIER_DELETED,
            self::POS_ORDER_CREATED,
            self::POS_ORDER_UPDATED,
            self::POS_ORDER_DELETED,
            self::POS_PRODUCT_CREATED,
            self::POS_PRODUCT_UPDATED,
            self::POS_PRODUCT_DELETED,
            self::POS_PAYMENT_CREATED,
            self::POS_PAYMENT_UPDATED,
            self::POS_PAYMENT_DELETED,
            self::POS_MERCHANT_CREATED,
            self::POS_MERCHANT_UPDATED,
            self::POS_MERCHANT_DELETED,
            self::POS_LOCATION_CREATED,
            self::POS_LOCATION_UPDATED,
            self::POS_LOCATION_DELETED,
            self::POS_ITEM_CREATED,
            self::POS_ITEM_UPDATED,
            self::POS_ITEM_DELETED,
            self::POS_MODIFIER_CREATED,
            self::POS_MODIFIER_UPDATED,
            self::POS_MODIFIER_DELETED,
            self::POS_MODIFIER_GROUP_CREATED,
            self::POS_MODIFIER_GROUP_UPDATED,
            self::POS_MODIFIER_GROUP_DELETED,
            self::HRIS_EMPLOYEE_CREATED,
            self::HRIS_EMPLOYEE_UPDATED,
            self::HRIS_EMPLOYEE_DELETED,
            self::HRIS_COMPANY_CREATED,
            self::HRIS_COMPANY_UPDATED,
            self::HRIS_COMPANY_DELETED
        ];
    }
}


