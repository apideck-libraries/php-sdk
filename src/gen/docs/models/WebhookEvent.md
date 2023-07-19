# Apideck.WebhookEvent

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`event_id` | **string** | Unique reference to this request event | [optional] 
`unified_api` | **string** | Name of Apideck Unified API | [optional] 
`service_id` | **string** | Service provider identifier | [optional] 
`consumer_id` | **string** | Unique consumer identifier. You can freely choose a consumer ID yourself. Most of the time, this is an ID of your internal data model that represents a user or account in your system (for example account:12345). If the consumer doesn't exist yet, Vault will upsert a consumer based on your ID. | [optional] 
`entity_id` | **string** | The service provider's ID of the entity that triggered this event | [optional] 
`entity_type` | **string** | The type entity that triggered this event | [optional] 
`entity_url` | **string** | The url to retrieve entity detail. | [optional] 
`execution_attempt` | **float** | The current count this request event has been attempted | [optional] 
`occurred_at` | **string** | ISO Datetime for when the original event occurred | [optional] 





<a name="UNIFIED_API"></a>
## Enum: WebhookEvent.unified_api


* `ACCOUNTING` (value: `'accounting'`)

* `ATS` (value: `'ats'`)

* `CALENDAR` (value: `'calendar'`)

* `CRM` (value: `'crm'`)

* `CSP` (value: `'csp'`)

* `CUSTOMER_SUPPORT` (value: `'customer-support'`)

* `ECOMMERCE` (value: `'ecommerce'`)

* `EMAIL` (value: `'email'`)

* `EMAIL_MARKETING` (value: `'email-marketing'`)

* `EXPENSE_MANAGEMENT` (value: `'expense-management'`)

* `FILE_STORAGE` (value: `'file-storage'`)

* `FORM` (value: `'form'`)

* `HRIS` (value: `'hris'`)

* `LEAD` (value: `'lead'`)

* `PAYROLL` (value: `'payroll'`)

* `POS` (value: `'pos'`)

* `PROCUREMENT` (value: `'procurement'`)

* `PROJECT_MANAGEMENT` (value: `'project-management'`)

* `SCRIPT` (value: `'script'`)

* `SMS` (value: `'sms'`)

* `SPREADSHEET` (value: `'spreadsheet'`)

* `TEAM_MESSAGING` (value: `'team-messaging'`)

* `ISSUE_TRACKING` (value: `'issue-tracking'`)

* `TIME_REGISTRATION` (value: `'time-registration'`)

* `TRANSACTIONAL_EMAIL` (value: `'transactional-email'`)

* `VAULT` (value: `'vault'`)

* `DATA_WAREHOUSE` (value: `'data-warehouse'`)




---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


