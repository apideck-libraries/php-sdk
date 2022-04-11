# apideck/php-sdk

The Apideck OpenAPI Spec: SDK Optimized


## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/apideck-libraries/php-sdk.git"
    }
  ],
  "require": {
    "apideck-libraries/php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/apideck/php-sdk/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: apiKey
$config = Apideck\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Apideck\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Apideck\Client\Api\AccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$raw = false; // bool | Include raw response. Mostly used for debugging purposes
$x_apideck_consumer_id = 'x_apideck_consumer_id_example'; // string | ID of the consumer which you want to get or push data from
$x_apideck_app_id = 'x_apideck_app_id_example'; // string | The ID of your Unify application
$x_apideck_service_id = 'x_apideck_service_id_example'; // string | Provide the service id you want to call (e.g., pipedrive). Only needed when a consumer has activated multiple integrations for a Unified API.

try {
    $result = $apiInstance->companyInfoOne($raw, $x_apideck_consumer_id, $x_apideck_app_id, $x_apideck_service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingApi->companyInfoOne: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://unify.apideck.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountingApi* | [**companyInfoOne**](docs/Api/AccountingApi.md#companyinfoone) | **GET** /accounting/company-info | Get company info
*AccountingApi* | [**customersAdd**](docs/Api/AccountingApi.md#customersadd) | **POST** /accounting/customers | Create Customer
*AccountingApi* | [**customersAll**](docs/Api/AccountingApi.md#customersall) | **GET** /accounting/customers | List Customers
*AccountingApi* | [**customersDelete**](docs/Api/AccountingApi.md#customersdelete) | **DELETE** /accounting/customers/{id} | Delete Customer
*AccountingApi* | [**customersOne**](docs/Api/AccountingApi.md#customersone) | **GET** /accounting/customers/{id} | Get Customer
*AccountingApi* | [**customersUpdate**](docs/Api/AccountingApi.md#customersupdate) | **PATCH** /accounting/customers/{id} | Update Customer
*AccountingApi* | [**invoiceItemsAdd**](docs/Api/AccountingApi.md#invoiceitemsadd) | **POST** /accounting/invoice-items | Create Invoice Item
*AccountingApi* | [**invoiceItemsAll**](docs/Api/AccountingApi.md#invoiceitemsall) | **GET** /accounting/invoice-items | List Invoice Items
*AccountingApi* | [**invoiceItemsDelete**](docs/Api/AccountingApi.md#invoiceitemsdelete) | **DELETE** /accounting/invoice-items/{id} | Delete Invoice Item
*AccountingApi* | [**invoiceItemsOne**](docs/Api/AccountingApi.md#invoiceitemsone) | **GET** /accounting/invoice-items/{id} | Get Invoice Item
*AccountingApi* | [**invoiceItemsUpdate**](docs/Api/AccountingApi.md#invoiceitemsupdate) | **PATCH** /accounting/invoice-items/{id} | Update Invoice Item
*AccountingApi* | [**invoicesAdd**](docs/Api/AccountingApi.md#invoicesadd) | **POST** /accounting/invoices | Create Invoice
*AccountingApi* | [**invoicesAll**](docs/Api/AccountingApi.md#invoicesall) | **GET** /accounting/invoices | List Invoices
*AccountingApi* | [**invoicesDelete**](docs/Api/AccountingApi.md#invoicesdelete) | **DELETE** /accounting/invoices/{id} | Delete Invoice
*AccountingApi* | [**invoicesOne**](docs/Api/AccountingApi.md#invoicesone) | **GET** /accounting/invoices/{id} | Get Invoice
*AccountingApi* | [**invoicesUpdate**](docs/Api/AccountingApi.md#invoicesupdate) | **PATCH** /accounting/invoices/{id} | Update Invoice
*AccountingApi* | [**ledgerAccountsAdd**](docs/Api/AccountingApi.md#ledgeraccountsadd) | **POST** /accounting/ledger-accounts | Create Ledger Account
*AccountingApi* | [**ledgerAccountsAll**](docs/Api/AccountingApi.md#ledgeraccountsall) | **GET** /accounting/ledger-accounts | List Ledger Accounts
*AccountingApi* | [**ledgerAccountsDelete**](docs/Api/AccountingApi.md#ledgeraccountsdelete) | **DELETE** /accounting/ledger-accounts/{id} | Delete Ledger Account
*AccountingApi* | [**ledgerAccountsOne**](docs/Api/AccountingApi.md#ledgeraccountsone) | **GET** /accounting/ledger-accounts/{id} | Get Ledger Account
*AccountingApi* | [**ledgerAccountsUpdate**](docs/Api/AccountingApi.md#ledgeraccountsupdate) | **PATCH** /accounting/ledger-accounts/{id} | Update Ledger Account
*AccountingApi* | [**paymentsAdd**](docs/Api/AccountingApi.md#paymentsadd) | **POST** /accounting/payments | Create Payment
*AccountingApi* | [**paymentsAll**](docs/Api/AccountingApi.md#paymentsall) | **GET** /accounting/payments | List Payments
*AccountingApi* | [**paymentsDelete**](docs/Api/AccountingApi.md#paymentsdelete) | **DELETE** /accounting/payments/{id} | Delete Payment
*AccountingApi* | [**paymentsOne**](docs/Api/AccountingApi.md#paymentsone) | **GET** /accounting/payments/{id} | Get Payment
*AccountingApi* | [**paymentsUpdate**](docs/Api/AccountingApi.md#paymentsupdate) | **PATCH** /accounting/payments/{id} | Update Payment
*AccountingApi* | [**taxRatesAdd**](docs/Api/AccountingApi.md#taxratesadd) | **POST** /accounting/tax-rates | Create Tax Rate
*AccountingApi* | [**taxRatesAll**](docs/Api/AccountingApi.md#taxratesall) | **GET** /accounting/tax-rates | List Tax Rates
*AccountingApi* | [**taxRatesDelete**](docs/Api/AccountingApi.md#taxratesdelete) | **DELETE** /accounting/tax-rates/{id} | Delete Tax Rate
*AccountingApi* | [**taxRatesOne**](docs/Api/AccountingApi.md#taxratesone) | **GET** /accounting/tax-rates/{id} | Get Tax Rate
*AccountingApi* | [**taxRatesUpdate**](docs/Api/AccountingApi.md#taxratesupdate) | **PATCH** /accounting/tax-rates/{id} | Update Tax Rate
*AtsApi* | [**applicantsAdd**](docs/Api/AtsApi.md#applicantsadd) | **POST** /ats/applicants | Create applicant
*AtsApi* | [**applicantsAll**](docs/Api/AtsApi.md#applicantsall) | **GET** /ats/applicants | List applicants
*AtsApi* | [**applicantsOne**](docs/Api/AtsApi.md#applicantsone) | **GET** /ats/applicants/{id} | Get applicant
*AtsApi* | [**jobsAll**](docs/Api/AtsApi.md#jobsall) | **GET** /ats/jobs | List jobs
*AtsApi* | [**jobsOne**](docs/Api/AtsApi.md#jobsone) | **GET** /ats/jobs/{id} | Get job
*ConnectorApi* | [**apiResourceCoverageOne**](docs/Api/ConnectorApi.md#apiresourcecoverageone) | **GET** /connector/apis/{id}/resources/{resource_id}/coverage | Get API Resource Coverage
*ConnectorApi* | [**apiResourcesOne**](docs/Api/ConnectorApi.md#apiresourcesone) | **GET** /connector/apis/{id}/resources/{resource_id} | Get API Resource
*ConnectorApi* | [**apisAll**](docs/Api/ConnectorApi.md#apisall) | **GET** /connector/apis | List APIs
*ConnectorApi* | [**apisOne**](docs/Api/ConnectorApi.md#apisone) | **GET** /connector/apis/{id} | Get API
*ConnectorApi* | [**connectorDocsOne**](docs/Api/ConnectorApi.md#connectordocsone) | **GET** /connector/connectors/{id}/docs/{doc_id} | Get Connector Doc content
*ConnectorApi* | [**connectorResourcesOne**](docs/Api/ConnectorApi.md#connectorresourcesone) | **GET** /connector/connectors/{id}/resources/{resource_id} | Get Connector Resource
*ConnectorApi* | [**connectorsAll**](docs/Api/ConnectorApi.md#connectorsall) | **GET** /connector/connectors | List Connectors
*ConnectorApi* | [**connectorsOne**](docs/Api/ConnectorApi.md#connectorsone) | **GET** /connector/connectors/{id} | Get Connector
*CrmApi* | [**activitiesAdd**](docs/Api/CrmApi.md#activitiesadd) | **POST** /crm/activities | Create activity
*CrmApi* | [**activitiesAll**](docs/Api/CrmApi.md#activitiesall) | **GET** /crm/activities | List activities
*CrmApi* | [**activitiesDelete**](docs/Api/CrmApi.md#activitiesdelete) | **DELETE** /crm/activities/{id} | Delete activity
*CrmApi* | [**activitiesOne**](docs/Api/CrmApi.md#activitiesone) | **GET** /crm/activities/{id} | Get activity
*CrmApi* | [**activitiesUpdate**](docs/Api/CrmApi.md#activitiesupdate) | **PATCH** /crm/activities/{id} | Update activity
*CrmApi* | [**companiesAdd**](docs/Api/CrmApi.md#companiesadd) | **POST** /crm/companies | Create company
*CrmApi* | [**companiesAll**](docs/Api/CrmApi.md#companiesall) | **GET** /crm/companies | List companies
*CrmApi* | [**companiesDelete**](docs/Api/CrmApi.md#companiesdelete) | **DELETE** /crm/companies/{id} | Delete company
*CrmApi* | [**companiesOne**](docs/Api/CrmApi.md#companiesone) | **GET** /crm/companies/{id} | Get company
*CrmApi* | [**companiesUpdate**](docs/Api/CrmApi.md#companiesupdate) | **PATCH** /crm/companies/{id} | Update company
*CrmApi* | [**contactsAdd**](docs/Api/CrmApi.md#contactsadd) | **POST** /crm/contacts | Create contact
*CrmApi* | [**contactsAll**](docs/Api/CrmApi.md#contactsall) | **GET** /crm/contacts | List contacts
*CrmApi* | [**contactsDelete**](docs/Api/CrmApi.md#contactsdelete) | **DELETE** /crm/contacts/{id} | Delete contact
*CrmApi* | [**contactsOne**](docs/Api/CrmApi.md#contactsone) | **GET** /crm/contacts/{id} | Get contact
*CrmApi* | [**contactsUpdate**](docs/Api/CrmApi.md#contactsupdate) | **PATCH** /crm/contacts/{id} | Update contact
*CrmApi* | [**leadsAdd**](docs/Api/CrmApi.md#leadsadd) | **POST** /crm/leads | Create lead
*CrmApi* | [**leadsAll**](docs/Api/CrmApi.md#leadsall) | **GET** /crm/leads | List leads
*CrmApi* | [**leadsDelete**](docs/Api/CrmApi.md#leadsdelete) | **DELETE** /crm/leads/{id} | Delete lead
*CrmApi* | [**leadsOne**](docs/Api/CrmApi.md#leadsone) | **GET** /crm/leads/{id} | Get lead
*CrmApi* | [**leadsUpdate**](docs/Api/CrmApi.md#leadsupdate) | **PATCH** /crm/leads/{id} | Update lead
*CrmApi* | [**notesAdd**](docs/Api/CrmApi.md#notesadd) | **POST** /crm/notes | Create note
*CrmApi* | [**notesAll**](docs/Api/CrmApi.md#notesall) | **GET** /crm/notes | List notes
*CrmApi* | [**notesDelete**](docs/Api/CrmApi.md#notesdelete) | **DELETE** /crm/notes/{id} | Delete note
*CrmApi* | [**notesOne**](docs/Api/CrmApi.md#notesone) | **GET** /crm/notes/{id} | Get note
*CrmApi* | [**notesUpdate**](docs/Api/CrmApi.md#notesupdate) | **PATCH** /crm/notes/{id} | Update note
*CrmApi* | [**opportunitiesAdd**](docs/Api/CrmApi.md#opportunitiesadd) | **POST** /crm/opportunities | Create opportunity
*CrmApi* | [**opportunitiesAll**](docs/Api/CrmApi.md#opportunitiesall) | **GET** /crm/opportunities | List opportunities
*CrmApi* | [**opportunitiesDelete**](docs/Api/CrmApi.md#opportunitiesdelete) | **DELETE** /crm/opportunities/{id} | Delete opportunity
*CrmApi* | [**opportunitiesOne**](docs/Api/CrmApi.md#opportunitiesone) | **GET** /crm/opportunities/{id} | Get opportunity
*CrmApi* | [**opportunitiesUpdate**](docs/Api/CrmApi.md#opportunitiesupdate) | **PATCH** /crm/opportunities/{id} | Update opportunity
*CrmApi* | [**pipelinesAdd**](docs/Api/CrmApi.md#pipelinesadd) | **POST** /crm/pipelines | Create pipeline
*CrmApi* | [**pipelinesAll**](docs/Api/CrmApi.md#pipelinesall) | **GET** /crm/pipelines | List pipelines
*CrmApi* | [**pipelinesDelete**](docs/Api/CrmApi.md#pipelinesdelete) | **DELETE** /crm/pipelines/{id} | Delete pipeline
*CrmApi* | [**pipelinesOne**](docs/Api/CrmApi.md#pipelinesone) | **GET** /crm/pipelines/{id} | Get pipeline
*CrmApi* | [**pipelinesUpdate**](docs/Api/CrmApi.md#pipelinesupdate) | **PATCH** /crm/pipelines/{id} | Update pipeline
*CrmApi* | [**usersAdd**](docs/Api/CrmApi.md#usersadd) | **POST** /crm/users | Create user
*CrmApi* | [**usersAll**](docs/Api/CrmApi.md#usersall) | **GET** /crm/users | List users
*CrmApi* | [**usersDelete**](docs/Api/CrmApi.md#usersdelete) | **DELETE** /crm/users/{id} | Delete user
*CrmApi* | [**usersOne**](docs/Api/CrmApi.md#usersone) | **GET** /crm/users/{id} | Get user
*CrmApi* | [**usersUpdate**](docs/Api/CrmApi.md#usersupdate) | **PATCH** /crm/users/{id} | Update user
*CustomerSupportApi* | [**customersAdd**](docs/Api/CustomerSupportApi.md#customersadd) | **POST** /customer-support/customers | Create Customer Support Customer
*CustomerSupportApi* | [**customersAll**](docs/Api/CustomerSupportApi.md#customersall) | **GET** /customer-support/customers | List Customer Support Customers
*CustomerSupportApi* | [**customersDelete**](docs/Api/CustomerSupportApi.md#customersdelete) | **DELETE** /customer-support/customers/{id} | Delete Customer Support Customer
*CustomerSupportApi* | [**customersOne**](docs/Api/CustomerSupportApi.md#customersone) | **GET** /customer-support/customers/{id} | Get Customer Support Customer
*CustomerSupportApi* | [**customersUpdate**](docs/Api/CustomerSupportApi.md#customersupdate) | **PATCH** /customer-support/customers/{id} | Update Customer Support Customer
*FileStorageApi* | [**filesAll**](docs/Api/FileStorageApi.md#filesall) | **GET** /file-storage/files | List Files
*FileStorageApi* | [**filesDelete**](docs/Api/FileStorageApi.md#filesdelete) | **DELETE** /file-storage/files/{id} | Delete File
*FileStorageApi* | [**filesDownload**](docs/Api/FileStorageApi.md#filesdownload) | **GET** /file-storage/files/{id}/download | Download File
*FileStorageApi* | [**filesOne**](docs/Api/FileStorageApi.md#filesone) | **GET** /file-storage/files/{id} | Get File
*FileStorageApi* | [**filesSearch**](docs/Api/FileStorageApi.md#filessearch) | **POST** /file-storage/files/search | Search Files
*FileStorageApi* | [**foldersAdd**](docs/Api/FileStorageApi.md#foldersadd) | **POST** /file-storage/folders | Create Folder
*FileStorageApi* | [**foldersCopy**](docs/Api/FileStorageApi.md#folderscopy) | **POST** /file-storage/folders/{id}/copy | Copy Folder
*FileStorageApi* | [**foldersDelete**](docs/Api/FileStorageApi.md#foldersdelete) | **DELETE** /file-storage/folders/{id} | Delete Folder
*FileStorageApi* | [**foldersOne**](docs/Api/FileStorageApi.md#foldersone) | **GET** /file-storage/folders/{id} | Get Folder
*FileStorageApi* | [**foldersUpdate**](docs/Api/FileStorageApi.md#foldersupdate) | **PATCH** /file-storage/folders/{id} | Rename or move Folder
*FileStorageApi* | [**sharedLinksAdd**](docs/Api/FileStorageApi.md#sharedlinksadd) | **POST** /file-storage/shared-links | Create Shared Link
*FileStorageApi* | [**sharedLinksAll**](docs/Api/FileStorageApi.md#sharedlinksall) | **GET** /file-storage/shared-links | List SharedLinks
*FileStorageApi* | [**sharedLinksDelete**](docs/Api/FileStorageApi.md#sharedlinksdelete) | **DELETE** /file-storage/shared-links/{id} | Delete Shared Link
*FileStorageApi* | [**sharedLinksOne**](docs/Api/FileStorageApi.md#sharedlinksone) | **GET** /file-storage/shared-links/{id} | Get Shared Link
*FileStorageApi* | [**sharedLinksUpdate**](docs/Api/FileStorageApi.md#sharedlinksupdate) | **PATCH** /file-storage/shared-links/{id} | Update Shared Link
*FileStorageApi* | [**uploadSessionsAdd**](docs/Api/FileStorageApi.md#uploadsessionsadd) | **POST** /file-storage/upload-sessions | Start Upload Session
*FileStorageApi* | [**uploadSessionsDelete**](docs/Api/FileStorageApi.md#uploadsessionsdelete) | **DELETE** /file-storage/upload-sessions/{id} | Abort Upload Session
*FileStorageApi* | [**uploadSessionsFinish**](docs/Api/FileStorageApi.md#uploadsessionsfinish) | **POST** /file-storage/upload-sessions/{id}/finish | Finish Upload Session
*FileStorageApi* | [**uploadSessionsOne**](docs/Api/FileStorageApi.md#uploadsessionsone) | **GET** /file-storage/upload-sessions/{id} | Get Upload Session
*HrisApi* | [**companiesAdd**](docs/Api/HrisApi.md#companiesadd) | **POST** /hris/companies | Create Company
*HrisApi* | [**companiesAll**](docs/Api/HrisApi.md#companiesall) | **GET** /hris/companies | List Companies
*HrisApi* | [**companiesDelete**](docs/Api/HrisApi.md#companiesdelete) | **DELETE** /hris/companies/{id} | Delete Company
*HrisApi* | [**companiesOne**](docs/Api/HrisApi.md#companiesone) | **GET** /hris/companies/{id} | Get Company
*HrisApi* | [**companiesUpdate**](docs/Api/HrisApi.md#companiesupdate) | **PATCH** /hris/companies/{id} | Update Company
*HrisApi* | [**departmentsAdd**](docs/Api/HrisApi.md#departmentsadd) | **POST** /hris/departments | Create Department
*HrisApi* | [**departmentsAll**](docs/Api/HrisApi.md#departmentsall) | **GET** /hris/departments | List Departments
*HrisApi* | [**departmentsDelete**](docs/Api/HrisApi.md#departmentsdelete) | **DELETE** /hris/departments/{id} | Delete Department
*HrisApi* | [**departmentsOne**](docs/Api/HrisApi.md#departmentsone) | **GET** /hris/departments/{id} | Get Department
*HrisApi* | [**departmentsUpdate**](docs/Api/HrisApi.md#departmentsupdate) | **PATCH** /hris/departments/{id} | Update Department
*HrisApi* | [**employeesAdd**](docs/Api/HrisApi.md#employeesadd) | **POST** /hris/employees | Create Employee
*HrisApi* | [**employeesAll**](docs/Api/HrisApi.md#employeesall) | **GET** /hris/employees | List Employees
*HrisApi* | [**employeesDelete**](docs/Api/HrisApi.md#employeesdelete) | **DELETE** /hris/employees/{id} | Delete Employee
*HrisApi* | [**employeesOne**](docs/Api/HrisApi.md#employeesone) | **GET** /hris/employees/{id} | Get Employee
*HrisApi* | [**employeesUpdate**](docs/Api/HrisApi.md#employeesupdate) | **PATCH** /hris/employees/{id} | Update Employee
*LeadApi* | [**leadsAdd**](docs/Api/LeadApi.md#leadsadd) | **POST** /lead/leads | Create lead
*LeadApi* | [**leadsAll**](docs/Api/LeadApi.md#leadsall) | **GET** /lead/leads | List leads
*LeadApi* | [**leadsDelete**](docs/Api/LeadApi.md#leadsdelete) | **DELETE** /lead/leads/{id} | Delete lead
*LeadApi* | [**leadsOne**](docs/Api/LeadApi.md#leadsone) | **GET** /lead/leads/{id} | Get lead
*LeadApi* | [**leadsUpdate**](docs/Api/LeadApi.md#leadsupdate) | **PATCH** /lead/leads/{id} | Update lead
*SmsApi* | [**messagesAdd**](docs/Api/SmsApi.md#messagesadd) | **POST** /sms/messages | Create Message
*SmsApi* | [**messagesAll**](docs/Api/SmsApi.md#messagesall) | **GET** /sms/messages | List Messages
*SmsApi* | [**messagesDelete**](docs/Api/SmsApi.md#messagesdelete) | **DELETE** /sms/messages/{id} | Delete Message
*SmsApi* | [**messagesOne**](docs/Api/SmsApi.md#messagesone) | **GET** /sms/messages/{id} | Get Message
*SmsApi* | [**messagesUpdate**](docs/Api/SmsApi.md#messagesupdate) | **PATCH** /sms/messages/{id} | Update Message
*VaultApi* | [**connectionsAll**](docs/Api/VaultApi.md#connectionsall) | **GET** /vault/connections | Get all connections
*VaultApi* | [**connectionsDelete**](docs/Api/VaultApi.md#connectionsdelete) | **DELETE** /vault/connections/{unified_api}/{service_id} | Deletes a connection
*VaultApi* | [**connectionsGetSettings**](docs/Api/VaultApi.md#connectionsgetsettings) | **GET** /vault/connections/{unified_api}/{service_id}/{resource}/config | Get resource settings
*VaultApi* | [**connectionsOne**](docs/Api/VaultApi.md#connectionsone) | **GET** /vault/connections/{unified_api}/{service_id} | Get connection
*VaultApi* | [**connectionsUpdate**](docs/Api/VaultApi.md#connectionsupdate) | **PATCH** /vault/connections/{unified_api}/{service_id} | Update connection
*VaultApi* | [**connectionsUpdateSettings**](docs/Api/VaultApi.md#connectionsupdatesettings) | **PATCH** /vault/connections/{unified_api}/{service_id}/{resource}/config | Update settings
*VaultApi* | [**consumersAll**](docs/Api/VaultApi.md#consumersall) | **GET** /vault/consumers | Get all consumers
*VaultApi* | [**consumersOne**](docs/Api/VaultApi.md#consumersone) | **GET** /vault/consumers/{consumer_id} | Get consumer
*VaultApi* | [**consumersRequestCounts**](docs/Api/VaultApi.md#consumersrequestcounts) | **GET** /vault/consumers/{consumer_id}/stats | Consumer request counts
*VaultApi* | [**logsAll**](docs/Api/VaultApi.md#logsall) | **GET** /vault/logs | Get all consumer request logs
*VaultApi* | [**sessionsCreate**](docs/Api/VaultApi.md#sessionscreate) | **POST** /vault/sessions | Create Session
*WebhookApi* | [**eventLogsAll**](docs/Api/WebhookApi.md#eventlogsall) | **GET** /webhook/logs | List event logs
*WebhookApi* | [**webhooksAdd**](docs/Api/WebhookApi.md#webhooksadd) | **POST** /webhook/webhooks | Create webhook
*WebhookApi* | [**webhooksAll**](docs/Api/WebhookApi.md#webhooksall) | **GET** /webhook/webhooks | List webhooks
*WebhookApi* | [**webhooksDelete**](docs/Api/WebhookApi.md#webhooksdelete) | **DELETE** /webhook/webhooks/{id} | Delete webhook
*WebhookApi* | [**webhooksOne**](docs/Api/WebhookApi.md#webhooksone) | **GET** /webhook/webhooks/{id} | Get webhook
*WebhookApi* | [**webhooksUpdate**](docs/Api/WebhookApi.md#webhooksupdate) | **PATCH** /webhook/webhooks/{id} | Update webhook

## Models

- [AccountingCustomer](docs/Model/AccountingCustomer.md)
- [AccountingEventType](docs/Model/AccountingEventType.md)
- [Activity](docs/Model/Activity.md)
- [ActivityAttendee](docs/Model/ActivityAttendee.md)
- [Address](docs/Model/Address.md)
- [Api](docs/Model/Api.md)
- [ApiResource](docs/Model/ApiResource.md)
- [ApiResourceCoverage](docs/Model/ApiResourceCoverage.md)
- [ApiResourceCoverageCoverage](docs/Model/ApiResourceCoverageCoverage.md)
- [ApiResourceCoverageSupportedFields](docs/Model/ApiResourceCoverageSupportedFields.md)
- [ApiResourceLinkedResources](docs/Model/ApiResourceLinkedResources.md)
- [ApiResources](docs/Model/ApiResources.md)
- [ApiStatus](docs/Model/ApiStatus.md)
- [ApisFilter](docs/Model/ApisFilter.md)
- [Applicant](docs/Model/Applicant.md)
- [ApplicantWebsites](docs/Model/ApplicantWebsites.md)
- [AuthType](docs/Model/AuthType.md)
- [BadRequestResponse](docs/Model/BadRequestResponse.md)
- [BankAccount](docs/Model/BankAccount.md)
- [CompaniesFilter](docs/Model/CompaniesFilter.md)
- [CompaniesSort](docs/Model/CompaniesSort.md)
- [Company](docs/Model/Company.md)
- [CompanyInfo](docs/Model/CompanyInfo.md)
- [Connection](docs/Model/Connection.md)
- [ConnectionConfiguration](docs/Model/ConnectionConfiguration.md)
- [ConnectionDefaults](docs/Model/ConnectionDefaults.md)
- [ConnectionImportData](docs/Model/ConnectionImportData.md)
- [ConnectionImportDataCredentials](docs/Model/ConnectionImportDataCredentials.md)
- [ConnectionMetadata](docs/Model/ConnectionMetadata.md)
- [ConnectionState](docs/Model/ConnectionState.md)
- [Connector](docs/Model/Connector.md)
- [ConnectorDoc](docs/Model/ConnectorDoc.md)
- [ConnectorOauthScopes](docs/Model/ConnectorOauthScopes.md)
- [ConnectorResource](docs/Model/ConnectorResource.md)
- [ConnectorSetting](docs/Model/ConnectorSetting.md)
- [ConnectorStatus](docs/Model/ConnectorStatus.md)
- [ConnectorSupportedEvents](docs/Model/ConnectorSupportedEvents.md)
- [ConnectorSupportedResources](docs/Model/ConnectorSupportedResources.md)
- [ConnectorUnifiedApis](docs/Model/ConnectorUnifiedApis.md)
- [ConnectorsFilter](docs/Model/ConnectorsFilter.md)
- [Consumer](docs/Model/Consumer.md)
- [ConsumerConnection](docs/Model/ConsumerConnection.md)
- [ConsumerMetadata](docs/Model/ConsumerMetadata.md)
- [ConsumerRequestCountsInDateRangeResponse](docs/Model/ConsumerRequestCountsInDateRangeResponse.md)
- [ConsumerRequestCountsInDateRangeResponseData](docs/Model/ConsumerRequestCountsInDateRangeResponseData.md)
- [ConsumerWebhook](docs/Model/ConsumerWebhook.md)
- [Contact](docs/Model/Contact.md)
- [ContactsFilter](docs/Model/ContactsFilter.md)
- [ContactsSort](docs/Model/ContactsSort.md)
- [CopyFolderRequest](docs/Model/CopyFolderRequest.md)
- [CreateActivityResponse](docs/Model/CreateActivityResponse.md)
- [CreateApplicantResponse](docs/Model/CreateApplicantResponse.md)
- [CreateCompanyResponse](docs/Model/CreateCompanyResponse.md)
- [CreateConnectionResponse](docs/Model/CreateConnectionResponse.md)
- [CreateContactResponse](docs/Model/CreateContactResponse.md)
- [CreateCustomerResponse](docs/Model/CreateCustomerResponse.md)
- [CreateCustomerSupportCustomerResponse](docs/Model/CreateCustomerSupportCustomerResponse.md)
- [CreateDepartmentResponse](docs/Model/CreateDepartmentResponse.md)
- [CreateEmployeeResponse](docs/Model/CreateEmployeeResponse.md)
- [CreateFileRequest](docs/Model/CreateFileRequest.md)
- [CreateFileResponse](docs/Model/CreateFileResponse.md)
- [CreateFolderRequest](docs/Model/CreateFolderRequest.md)
- [CreateFolderResponse](docs/Model/CreateFolderResponse.md)
- [CreateHrisCompanyResponse](docs/Model/CreateHrisCompanyResponse.md)
- [CreateInvoiceItemResponse](docs/Model/CreateInvoiceItemResponse.md)
- [CreateInvoiceResponse](docs/Model/CreateInvoiceResponse.md)
- [CreateLeadResponse](docs/Model/CreateLeadResponse.md)
- [CreateLedgerAccountResponse](docs/Model/CreateLedgerAccountResponse.md)
- [CreateMessageResponse](docs/Model/CreateMessageResponse.md)
- [CreateNoteResponse](docs/Model/CreateNoteResponse.md)
- [CreateOpportunityResponse](docs/Model/CreateOpportunityResponse.md)
- [CreatePaymentResponse](docs/Model/CreatePaymentResponse.md)
- [CreatePipelineResponse](docs/Model/CreatePipelineResponse.md)
- [CreateSessionResponse](docs/Model/CreateSessionResponse.md)
- [CreateSessionResponseData](docs/Model/CreateSessionResponseData.md)
- [CreateSharedLinkResponse](docs/Model/CreateSharedLinkResponse.md)
- [CreateTaxRateResponse](docs/Model/CreateTaxRateResponse.md)
- [CreateUploadSessionRequest](docs/Model/CreateUploadSessionRequest.md)
- [CreateUploadSessionResponse](docs/Model/CreateUploadSessionResponse.md)
- [CreateUserResponse](docs/Model/CreateUserResponse.md)
- [CreateWebhookRequest](docs/Model/CreateWebhookRequest.md)
- [CreateWebhookResponse](docs/Model/CreateWebhookResponse.md)
- [CrmEventType](docs/Model/CrmEventType.md)
- [Currency](docs/Model/Currency.md)
- [CustomField](docs/Model/CustomField.md)
- [CustomerSupportCustomer](docs/Model/CustomerSupportCustomer.md)
- [DeleteActivityResponse](docs/Model/DeleteActivityResponse.md)
- [DeleteCompanyResponse](docs/Model/DeleteCompanyResponse.md)
- [DeleteContactResponse](docs/Model/DeleteContactResponse.md)
- [DeleteCustomerResponse](docs/Model/DeleteCustomerResponse.md)
- [DeleteCustomerSupportCustomerResponse](docs/Model/DeleteCustomerSupportCustomerResponse.md)
- [DeleteDepartmentResponse](docs/Model/DeleteDepartmentResponse.md)
- [DeleteEmployeeResponse](docs/Model/DeleteEmployeeResponse.md)
- [DeleteFileResponse](docs/Model/DeleteFileResponse.md)
- [DeleteFolderResponse](docs/Model/DeleteFolderResponse.md)
- [DeleteHrisCompanyResponse](docs/Model/DeleteHrisCompanyResponse.md)
- [DeleteInvoiceResponse](docs/Model/DeleteInvoiceResponse.md)
- [DeleteLeadResponse](docs/Model/DeleteLeadResponse.md)
- [DeleteLedgerAccountResponse](docs/Model/DeleteLedgerAccountResponse.md)
- [DeleteMessageResponse](docs/Model/DeleteMessageResponse.md)
- [DeleteNoteResponse](docs/Model/DeleteNoteResponse.md)
- [DeleteOpportunityResponse](docs/Model/DeleteOpportunityResponse.md)
- [DeletePaymentResponse](docs/Model/DeletePaymentResponse.md)
- [DeletePipelineResponse](docs/Model/DeletePipelineResponse.md)
- [DeleteSharedLinkResponse](docs/Model/DeleteSharedLinkResponse.md)
- [DeleteTaxRateResponse](docs/Model/DeleteTaxRateResponse.md)
- [DeleteUploadSessionResponse](docs/Model/DeleteUploadSessionResponse.md)
- [DeleteUserResponse](docs/Model/DeleteUserResponse.md)
- [DeleteWebhookResponse](docs/Model/DeleteWebhookResponse.md)
- [Department](docs/Model/Department.md)
- [Email](docs/Model/Email.md)
- [Employee](docs/Model/Employee.md)
- [EmployeeCompensations](docs/Model/EmployeeCompensations.md)
- [EmployeeEmploymentRole](docs/Model/EmployeeEmploymentRole.md)
- [EmployeeJobs](docs/Model/EmployeeJobs.md)
- [EmployeeManager](docs/Model/EmployeeManager.md)
- [EmployeeSocialLinks](docs/Model/EmployeeSocialLinks.md)
- [EmployeeTeam](docs/Model/EmployeeTeam.md)
- [EmployeesFilter](docs/Model/EmployeesFilter.md)
- [Error](docs/Model/Error.md)
- [ExecuteWebhookResponse](docs/Model/ExecuteWebhookResponse.md)
- [FileType](docs/Model/FileType.md)
- [FilesFilter](docs/Model/FilesFilter.md)
- [FilesSearch](docs/Model/FilesSearch.md)
- [FilesSort](docs/Model/FilesSort.md)
- [Folder](docs/Model/Folder.md)
- [FormField](docs/Model/FormField.md)
- [FormFieldOption](docs/Model/FormFieldOption.md)
- [FormFieldOptionGroup](docs/Model/FormFieldOptionGroup.md)
- [Gender](docs/Model/Gender.md)
- [GetActivitiesResponse](docs/Model/GetActivitiesResponse.md)
- [GetActivityResponse](docs/Model/GetActivityResponse.md)
- [GetApiResourceCoverageResponse](docs/Model/GetApiResourceCoverageResponse.md)
- [GetApiResourceResponse](docs/Model/GetApiResourceResponse.md)
- [GetApiResponse](docs/Model/GetApiResponse.md)
- [GetApisResponse](docs/Model/GetApisResponse.md)
- [GetApplicantResponse](docs/Model/GetApplicantResponse.md)
- [GetApplicantsResponse](docs/Model/GetApplicantsResponse.md)
- [GetCompaniesResponse](docs/Model/GetCompaniesResponse.md)
- [GetCompanyInfoResponse](docs/Model/GetCompanyInfoResponse.md)
- [GetCompanyResponse](docs/Model/GetCompanyResponse.md)
- [GetConnectionResponse](docs/Model/GetConnectionResponse.md)
- [GetConnectionsResponse](docs/Model/GetConnectionsResponse.md)
- [GetConnectorResourceResponse](docs/Model/GetConnectorResourceResponse.md)
- [GetConnectorResponse](docs/Model/GetConnectorResponse.md)
- [GetConnectorsResponse](docs/Model/GetConnectorsResponse.md)
- [GetConsumerResponse](docs/Model/GetConsumerResponse.md)
- [GetConsumersResponse](docs/Model/GetConsumersResponse.md)
- [GetConsumersResponseData](docs/Model/GetConsumersResponseData.md)
- [GetContactResponse](docs/Model/GetContactResponse.md)
- [GetContactsResponse](docs/Model/GetContactsResponse.md)
- [GetCustomerResponse](docs/Model/GetCustomerResponse.md)
- [GetCustomerSupportCustomerResponse](docs/Model/GetCustomerSupportCustomerResponse.md)
- [GetCustomerSupportCustomersResponse](docs/Model/GetCustomerSupportCustomersResponse.md)
- [GetCustomersResponse](docs/Model/GetCustomersResponse.md)
- [GetDepartmentResponse](docs/Model/GetDepartmentResponse.md)
- [GetDepartmentsResponse](docs/Model/GetDepartmentsResponse.md)
- [GetEmployeeResponse](docs/Model/GetEmployeeResponse.md)
- [GetEmployeesResponse](docs/Model/GetEmployeesResponse.md)
- [GetFileResponse](docs/Model/GetFileResponse.md)
- [GetFilesResponse](docs/Model/GetFilesResponse.md)
- [GetFolderResponse](docs/Model/GetFolderResponse.md)
- [GetFoldersResponse](docs/Model/GetFoldersResponse.md)
- [GetHrisCompaniesResponse](docs/Model/GetHrisCompaniesResponse.md)
- [GetHrisCompanyResponse](docs/Model/GetHrisCompanyResponse.md)
- [GetInvoiceItemResponse](docs/Model/GetInvoiceItemResponse.md)
- [GetInvoiceItemsResponse](docs/Model/GetInvoiceItemsResponse.md)
- [GetInvoiceResponse](docs/Model/GetInvoiceResponse.md)
- [GetInvoicesResponse](docs/Model/GetInvoicesResponse.md)
- [GetJobResponse](docs/Model/GetJobResponse.md)
- [GetJobsResponse](docs/Model/GetJobsResponse.md)
- [GetLeadResponse](docs/Model/GetLeadResponse.md)
- [GetLeadsResponse](docs/Model/GetLeadsResponse.md)
- [GetLedgerAccountResponse](docs/Model/GetLedgerAccountResponse.md)
- [GetLedgerAccountsResponse](docs/Model/GetLedgerAccountsResponse.md)
- [GetLogsResponse](docs/Model/GetLogsResponse.md)
- [GetMessageResponse](docs/Model/GetMessageResponse.md)
- [GetMessagesResponse](docs/Model/GetMessagesResponse.md)
- [GetNoteResponse](docs/Model/GetNoteResponse.md)
- [GetNotesResponse](docs/Model/GetNotesResponse.md)
- [GetOpportunitiesResponse](docs/Model/GetOpportunitiesResponse.md)
- [GetOpportunityResponse](docs/Model/GetOpportunityResponse.md)
- [GetPaymentResponse](docs/Model/GetPaymentResponse.md)
- [GetPaymentsResponse](docs/Model/GetPaymentsResponse.md)
- [GetPipelineResponse](docs/Model/GetPipelineResponse.md)
- [GetPipelinesResponse](docs/Model/GetPipelinesResponse.md)
- [GetSharedLinkResponse](docs/Model/GetSharedLinkResponse.md)
- [GetSharedLinksResponse](docs/Model/GetSharedLinksResponse.md)
- [GetTaxRateResponse](docs/Model/GetTaxRateResponse.md)
- [GetTaxRatesResponse](docs/Model/GetTaxRatesResponse.md)
- [GetUploadSessionResponse](docs/Model/GetUploadSessionResponse.md)
- [GetUserResponse](docs/Model/GetUserResponse.md)
- [GetUsersResponse](docs/Model/GetUsersResponse.md)
- [GetWebhookEventLogsResponse](docs/Model/GetWebhookEventLogsResponse.md)
- [GetWebhookResponse](docs/Model/GetWebhookResponse.md)
- [GetWebhooksResponse](docs/Model/GetWebhooksResponse.md)
- [HrisCompany](docs/Model/HrisCompany.md)
- [Invoice](docs/Model/Invoice.md)
- [InvoiceItem](docs/Model/InvoiceItem.md)
- [InvoiceItemSalesDetails](docs/Model/InvoiceItemSalesDetails.md)
- [InvoiceLineItem](docs/Model/InvoiceLineItem.md)
- [InvoiceResponse](docs/Model/InvoiceResponse.md)
- [Job](docs/Model/Job.md)
- [JobStatus](docs/Model/JobStatus.md)
- [JobsFilter](docs/Model/JobsFilter.md)
- [Lead](docs/Model/Lead.md)
- [LeadEventType](docs/Model/LeadEventType.md)
- [LeadsFilter](docs/Model/LeadsFilter.md)
- [LeadsSort](docs/Model/LeadsSort.md)
- [LedgerAccount](docs/Model/LedgerAccount.md)
- [LedgerAccountParentAccount](docs/Model/LedgerAccountParentAccount.md)
- [LinkedCustomer](docs/Model/LinkedCustomer.md)
- [LinkedFolder](docs/Model/LinkedFolder.md)
- [LinkedInvoiceItem](docs/Model/LinkedInvoiceItem.md)
- [LinkedLedgerAccount](docs/Model/LinkedLedgerAccount.md)
- [LinkedTaxRate](docs/Model/LinkedTaxRate.md)
- [Links](docs/Model/Links.md)
- [Log](docs/Model/Log.md)
- [LogOperation](docs/Model/LogOperation.md)
- [LogService](docs/Model/LogService.md)
- [LogsFilter](docs/Model/LogsFilter.md)
- [Message](docs/Model/Message.md)
- [Meta](docs/Model/Meta.md)
- [MetaCursors](docs/Model/MetaCursors.md)
- [NotFoundResponse](docs/Model/NotFoundResponse.md)
- [NotImplementedResponse](docs/Model/NotImplementedResponse.md)
- [Note](docs/Model/Note.md)
- [OAuthGrantType](docs/Model/OAuthGrantType.md)
- [OpportunitiesFilter](docs/Model/OpportunitiesFilter.md)
- [OpportunitiesSort](docs/Model/OpportunitiesSort.md)
- [Opportunity](docs/Model/Opportunity.md)
- [Owner](docs/Model/Owner.md)
- [Payment](docs/Model/Payment.md)
- [PaymentRequiredResponse](docs/Model/PaymentRequiredResponse.md)
- [PaymentUnit](docs/Model/PaymentUnit.md)
- [PhoneNumber](docs/Model/PhoneNumber.md)
- [Pipeline](docs/Model/Pipeline.md)
- [PipelineStages](docs/Model/PipelineStages.md)
- [Price](docs/Model/Price.md)
- [RequestCountAllocation](docs/Model/RequestCountAllocation.md)
- [ResourceStatus](docs/Model/ResourceStatus.md)
- [Session](docs/Model/Session.md)
- [SessionSettings](docs/Model/SessionSettings.md)
- [SessionTheme](docs/Model/SessionTheme.md)
- [SharedLink](docs/Model/SharedLink.md)
- [SharedLinkTarget](docs/Model/SharedLinkTarget.md)
- [SimpleFormFieldOption](docs/Model/SimpleFormFieldOption.md)
- [SocialLink](docs/Model/SocialLink.md)
- [SortDirection](docs/Model/SortDirection.md)
- [Status](docs/Model/Status.md)
- [TaxRate](docs/Model/TaxRate.md)
- [TaxRatesFilter](docs/Model/TaxRatesFilter.md)
- [UnauthorizedResponse](docs/Model/UnauthorizedResponse.md)
- [UnexpectedErrorResponse](docs/Model/UnexpectedErrorResponse.md)
- [UnifiedApiId](docs/Model/UnifiedApiId.md)
- [UnifiedFile](docs/Model/UnifiedFile.md)
- [UnifiedId](docs/Model/UnifiedId.md)
- [UnprocessableResponse](docs/Model/UnprocessableResponse.md)
- [UpdateActivityResponse](docs/Model/UpdateActivityResponse.md)
- [UpdateCompanyResponse](docs/Model/UpdateCompanyResponse.md)
- [UpdateConnectionResponse](docs/Model/UpdateConnectionResponse.md)
- [UpdateContactResponse](docs/Model/UpdateContactResponse.md)
- [UpdateCustomerResponse](docs/Model/UpdateCustomerResponse.md)
- [UpdateCustomerSupportCustomerResponse](docs/Model/UpdateCustomerSupportCustomerResponse.md)
- [UpdateDepartmentResponse](docs/Model/UpdateDepartmentResponse.md)
- [UpdateEmployeeResponse](docs/Model/UpdateEmployeeResponse.md)
- [UpdateFileResponse](docs/Model/UpdateFileResponse.md)
- [UpdateFolderRequest](docs/Model/UpdateFolderRequest.md)
- [UpdateFolderResponse](docs/Model/UpdateFolderResponse.md)
- [UpdateHrisCompanyResponse](docs/Model/UpdateHrisCompanyResponse.md)
- [UpdateInvoiceItemsResponse](docs/Model/UpdateInvoiceItemsResponse.md)
- [UpdateInvoiceResponse](docs/Model/UpdateInvoiceResponse.md)
- [UpdateLeadResponse](docs/Model/UpdateLeadResponse.md)
- [UpdateLedgerAccountResponse](docs/Model/UpdateLedgerAccountResponse.md)
- [UpdateMessageResponse](docs/Model/UpdateMessageResponse.md)
- [UpdateNoteResponse](docs/Model/UpdateNoteResponse.md)
- [UpdateOpportunityResponse](docs/Model/UpdateOpportunityResponse.md)
- [UpdatePaymentResponse](docs/Model/UpdatePaymentResponse.md)
- [UpdatePipelineResponse](docs/Model/UpdatePipelineResponse.md)
- [UpdateSharedLinkResponse](docs/Model/UpdateSharedLinkResponse.md)
- [UpdateTaxRateResponse](docs/Model/UpdateTaxRateResponse.md)
- [UpdateUploadSessionResponse](docs/Model/UpdateUploadSessionResponse.md)
- [UpdateUserResponse](docs/Model/UpdateUserResponse.md)
- [UpdateWebhookRequest](docs/Model/UpdateWebhookRequest.md)
- [UpdateWebhookResponse](docs/Model/UpdateWebhookResponse.md)
- [UploadSession](docs/Model/UploadSession.md)
- [User](docs/Model/User.md)
- [VaultEventType](docs/Model/VaultEventType.md)
- [Webhook](docs/Model/Webhook.md)
- [WebhookEventLog](docs/Model/WebhookEventLog.md)
- [WebhookEventLogAttempts](docs/Model/WebhookEventLogAttempts.md)
- [WebhookEventLogService](docs/Model/WebhookEventLogService.md)
- [WebhookEventLogsFilter](docs/Model/WebhookEventLogsFilter.md)
- [WebhookEventLogsFilterService](docs/Model/WebhookEventLogsFilterService.md)
- [WebhookEventType](docs/Model/WebhookEventType.md)
- [Website](docs/Model/Website.md)

## Authorization

### apiKey

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header



### applicationId

- **Type**: API key
- **API key parameter name**: x-apideck-app-id
- **Location**: HTTP header



### consumerId

- **Type**: API key
- **API key parameter name**: x-apideck-consumer-id
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `8.19.2`
    - Package version: `0.0.2`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
