# Apideck.ConsumerWebhook

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`unified_api` | [**\Apideck\Client\Model\UnifiedApiId**](UnifiedApiId.md) |  | 
`status` | **string** | The status of the webhook. | 
`delivery_url` | **string** | The delivery url of the webhook endpoint. | 
`execute_base_url` | **string** | The Unify Base URL events from connectors will be sent to after service id is appended. | 
`events` | **string[]** | The list of subscribed events for this webhook. [&#x60;*&#x60;] indicates that all events are enabled. | 
`id` | **string** |  | [optional] 
`description` | **string** |  | [optional] 
`updated_at` | **\DateTime** |  | [optional] 
`created_at` | **\DateTime** |  | [optional] 





<a name="STATUS"></a>
## Enum: ConsumerWebhook.status


* `ENABLED` (value: `'enabled'`)

* `DISABLED` (value: `'disabled'`)




<a name="EVENTS[]"></a>
## Enum: ConsumerWebhook.events


* `STAR` (value: `'*'`)

* `CRM_ACTIVITY_CREATED` (value: `'crm.activity.created'`)

* `CRM_ACTIVITY_UPDATED` (value: `'crm.activity.updated'`)

* `CRM_ACTIVITY_DELETED` (value: `'crm.activity.deleted'`)

* `CRM_COMPANY_CREATED` (value: `'crm.company.created'`)

* `CRM_COMPANY_UPDATED` (value: `'crm.company.updated'`)

* `CRM_COMPANY_DELETED` (value: `'crm.company.deleted'`)

* `CRM_CONTACT_CREATED` (value: `'crm.contact.created'`)

* `CRM_CONTACT_UPDATED` (value: `'crm.contact.updated'`)

* `CRM_CONTACT_DELETED` (value: `'crm.contact.deleted'`)

* `CRM_LEAD_CREATED` (value: `'crm.lead.created'`)

* `CRM_LEAD_UPDATED` (value: `'crm.lead.updated'`)

* `CRM_LEAD_DELETED` (value: `'crm.lead.deleted'`)

* `CRM_NOTE_CREATED` (value: `'crm.note.created'`)

* `CRM_NOTES_UPDATED` (value: `'crm.notes.updated'`)

* `CRM_NOTES_DELETED` (value: `'crm.notes.deleted'`)

* `CRM_OPPORTUNITY_CREATED` (value: `'crm.opportunity.created'`)

* `CRM_OPPORTUNITY_UPDATED` (value: `'crm.opportunity.updated'`)

* `CRM_OPPORTUNITY_DELETED` (value: `'crm.opportunity.deleted'`)

* `LEAD_LEAD_CREATED` (value: `'lead.lead.created'`)

* `LEAD_LEAD_UPDATED` (value: `'lead.lead.updated'`)

* `LEAD_LEAD_DELETED` (value: `'lead.lead.deleted'`)

* `VAULT_CONNECTION_CREATED` (value: `'vault.connection.created'`)

* `VAULT_CONNECTION_UPDATED` (value: `'vault.connection.updated'`)

* `VAULT_CONNECTION_DELETED` (value: `'vault.connection.deleted'`)

* `VAULT_CONNECTION_CALLABLE` (value: `'vault.connection.callable'`)

* `VAULT_CONNECTION_TOKEN_REFRESH_FAILED` (value: `'vault.connection.token_refresh.failed'`)

* `ATS_JOB_CREATED` (value: `'ats.job.created'`)

* `ATS_JOB_UPDATED` (value: `'ats.job.updated'`)

* `ATS_JOB_DELETED` (value: `'ats.job.deleted'`)

* `ATS_APPLICANT_CREATED` (value: `'ats.applicant.created'`)

* `ATS_APPLICANT_UPDATED` (value: `'ats.applicant.updated'`)

* `ATS_APPLICANT_DELETED` (value: `'ats.applicant.deleted'`)

* `ACCOUNTING_CUSTOMER_CREATED` (value: `'accounting.customer.created'`)

* `ACCOUNTING_CUSTOMER_UPDATED` (value: `'accounting.customer.updated'`)

* `ACCOUNTING_CUSTOMER_DELETED` (value: `'accounting.customer.deleted'`)

* `ACCOUNTING_INVOICE_CREATED` (value: `'accounting.invoice.created'`)

* `ACCOUNTING_INVOICE_UPDATED` (value: `'accounting.invoice.updated'`)

* `ACCOUNTING_INVOICE_DELETED` (value: `'accounting.invoice.deleted'`)

* `ACCOUNTING_INVOICE_ITEM_CREATED` (value: `'accounting.invoice_item.created'`)

* `ACCOUNTING_INVOICE_ITEM_UPDATED` (value: `'accounting.invoice_item.updated'`)

* `ACCOUNTING_INVOICE_ITEM_DELETED` (value: `'accounting.invoice_item.deleted'`)

* `ACCOUNTING_LEDGER_ACCOUNT_CREATED` (value: `'accounting.ledger_account.created'`)

* `ACCOUNTING_LEDGER_ACCOUNT_UPDATED` (value: `'accounting.ledger_account.updated'`)

* `ACCOUNTING_LEDGER_ACCOUNT_DELETED` (value: `'accounting.ledger_account.deleted'`)

* `ACCOUNTING_TAX_RATE_CREATED` (value: `'accounting.tax_rate.created'`)

* `ACCOUNTING_TAX_RATE_UPDATED` (value: `'accounting.tax_rate.updated'`)

* `ACCOUNTING_TAX_RATE_DELETED` (value: `'accounting.tax_rate.deleted'`)

* `ACCOUNTING_BILL_CREATED` (value: `'accounting.bill.created'`)

* `ACCOUNTING_BILL_UPDATED` (value: `'accounting.bill.updated'`)

* `ACCOUNTING_BILL_DELETED` (value: `'accounting.bill.deleted'`)

* `ACCOUNTING_PAYMENT_CREATED` (value: `'accounting.payment.created'`)

* `ACCOUNTING_PAYMENT_UPDATED` (value: `'accounting.payment.updated'`)

* `ACCOUNTING_PAYMENT_DELETED` (value: `'accounting.payment.deleted'`)

* `ACCOUNTING_SUPPLIER_CREATED` (value: `'accounting.supplier.created'`)

* `ACCOUNTING_SUPPLIER_UPDATED` (value: `'accounting.supplier.updated'`)

* `ACCOUNTING_SUPPLIER_DELETED` (value: `'accounting.supplier.deleted'`)

* `POS_ORDER_CREATED` (value: `'pos.order.created'`)

* `POS_ORDER_UPDATED` (value: `'pos.order.updated'`)

* `POS_ORDER_DELETED` (value: `'pos.order.deleted'`)

* `POS_PRODUCT_CREATED` (value: `'pos.product.created'`)

* `POS_PRODUCT_UPDATED` (value: `'pos.product.updated'`)

* `POS_PRODUCT_DELETED` (value: `'pos.product.deleted'`)

* `POS_PAYMENT_CREATED` (value: `'pos.payment.created'`)

* `POS_PAYMENT_UPDATED` (value: `'pos.payment.updated'`)

* `POS_PAYMENT_DELETED` (value: `'pos.payment.deleted'`)

* `POS_MERCHANT_CREATED` (value: `'pos.merchant.created'`)

* `POS_MERCHANT_UPDATED` (value: `'pos.merchant.updated'`)

* `POS_MERCHANT_DELETED` (value: `'pos.merchant.deleted'`)

* `POS_LOCATION_CREATED` (value: `'pos.location.created'`)

* `POS_LOCATION_UPDATED` (value: `'pos.location.updated'`)

* `POS_LOCATION_DELETED` (value: `'pos.location.deleted'`)

* `POS_ITEM_CREATED` (value: `'pos.item.created'`)

* `POS_ITEM_UPDATED` (value: `'pos.item.updated'`)

* `POS_ITEM_DELETED` (value: `'pos.item.deleted'`)

* `POS_MODIFIER_CREATED` (value: `'pos.modifier.created'`)

* `POS_MODIFIER_UPDATED` (value: `'pos.modifier.updated'`)

* `POS_MODIFIER_DELETED` (value: `'pos.modifier.deleted'`)

* `POS_MODIFIER_GROUP_CREATED` (value: `'pos.modifier-group.created'`)

* `POS_MODIFIER_GROUP_UPDATED` (value: `'pos.modifier-group.updated'`)

* `POS_MODIFIER_GROUP_DELETED` (value: `'pos.modifier-group.deleted'`)

* `HRIS_EMPLOYEE_CREATED` (value: `'hris.employee.created'`)

* `HRIS_EMPLOYEE_UPDATED` (value: `'hris.employee.updated'`)

* `HRIS_EMPLOYEE_DELETED` (value: `'hris.employee.deleted'`)

* `HRIS_COMPANY_CREATED` (value: `'hris.company.created'`)

* `HRIS_COMPANY_UPDATED` (value: `'hris.company.updated'`)

* `HRIS_COMPANY_DELETED` (value: `'hris.company.deleted'`)




## Referenced Types:
* [`UnifiedApiId`](UnifiedApiId.md)









---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


