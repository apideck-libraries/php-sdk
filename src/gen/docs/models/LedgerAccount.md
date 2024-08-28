# Apideck.LedgerAccount

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** | A unique identifier for an object. | [optional] 
`display_id` | **string** | The human readable display ID used when displaying the account | [optional] 
`nominal_code` | **string** | The nominal code of the ledger account. | [optional] 
`code` | **string** | The code assigned to the account. | [optional] 
`classification` | **string** | The classification of account. | [optional] 
`type` | **string** | The type of account. | [optional] 
`sub_type` | **string** | The sub type of account. | [optional] 
`name` | **string** | The name of the account. | [optional] 
`fully_qualified_name` | **string** | The fully qualified name of the account. | [optional] 
`description` | **string** | The description of the account. | [optional] 
`opening_balance` | **float** | The opening balance of the account. | [optional] 
`current_balance` | **float** | The current balance of the account. | [optional] 
`currency` | [**\Apideck\Client\Model\Currency**](Currency.md) |  | [optional] 
`tax_type` | **string** | The tax type of the account. | [optional] 
`tax_rate` | [**\Apideck\Client\Model\LinkedTaxRate**](LinkedTaxRate.md) |  | [optional] 
`level` | **float** |  | [optional] 
`active` | **bool** | Whether the account is active or not. | [optional] 
`status` | **string** | The status of the account. | [optional] 
`header` | **bool** | Whether the account is a header or not. | [optional] 
`bank_account` | [**\Apideck\Client\Model\BankAccount**](BankAccount.md) |  | [optional] 
`categories` | [**\Apideck\Client\Model\LedgerAccountCategories[]**](LedgerAccountCategories.md) | The categories of the account. | [optional] 
`parent_account` | [**\Apideck\Client\Model\LedgerAccountParentAccount**](LedgerAccountParentAccount.md) |  | [optional] 
`sub_account` | **bool** | Whether the account is a sub account or not. | [optional] 
`sub_accounts` | **object[]** | The sub accounts of the account. | [optional] 
`last_reconciliation_date` | **\DateTime** | Reconciliation Date means the last calendar day of each Reconciliation Period. | [optional] 
`custom_mappings` | **object** | When custom mappings are configured on the resource, the result is included here. | [optional] 
`row_version` | **string** | A binary value used to detect updates to a object and prevent data conflicts. It is incremented each time an update is made to the object. | [optional] 
`updated_by` | **string** | The user who last updated the object. | [optional] 
`created_by` | **string** | The user who created the object. | [optional] 
`updated_at` | **\DateTime** | The date and time when the object was last updated. | [optional] 
`created_at` | **\DateTime** | The date and time when the object was created. | [optional] 
`pass_through` | **object[]** | The pass_through property allows passing service-specific, custom data or structured modifications in request body when creating or updating resources. | [optional] 





<a name="CLASSIFICATION"></a>
## Enum: LedgerAccount.classification


* `ASSET` (value: `'asset'`)

* `EQUITY` (value: `'equity'`)

* `EXPENSE` (value: `'expense'`)

* `LIABILITY` (value: `'liability'`)

* `REVENUE` (value: `'revenue'`)

* `INCOME` (value: `'income'`)

* `OTHER_INCOME` (value: `'other_income'`)

* `OTHER_EXPENSE` (value: `'other_expense'`)

* `COSTS_OF_SALES` (value: `'costs_of_sales'`)

* `OTHER` (value: `'other'`)




<a name="TYPE"></a>
## Enum: LedgerAccount.type


* `ACCOUNTS_RECEIVABLE` (value: `'accounts_receivable'`)

* `REVENUE` (value: `'revenue'`)

* `SALES` (value: `'sales'`)

* `OTHER_INCOME` (value: `'other_income'`)

* `BANK` (value: `'bank'`)

* `CURRENT_ASSET` (value: `'current_asset'`)

* `FIXED_ASSET` (value: `'fixed_asset'`)

* `NON_CURRENT_ASSET` (value: `'non_current_asset'`)

* `OTHER_ASSET` (value: `'other_asset'`)

* `BALANCESHEET` (value: `'balancesheet'`)

* `EQUITY` (value: `'equity'`)

* `EXPENSE` (value: `'expense'`)

* `OTHER_EXPENSE` (value: `'other_expense'`)

* `COSTS_OF_SALES` (value: `'costs_of_sales'`)

* `ACCOUNTS_PAYABLE` (value: `'accounts_payable'`)

* `CREDIT_CARD` (value: `'credit_card'`)

* `CURRENT_LIABILITY` (value: `'current_liability'`)

* `NON_CURRENT_LIABILITY` (value: `'non_current_liability'`)

* `OTHER_LIABILITY` (value: `'other_liability'`)

* `OTHER` (value: `'other'`)




<a name="STATUS"></a>
## Enum: LedgerAccount.status


* `ACTIVE` (value: `'active'`)

* `INACTIVE` (value: `'inactive'`)

* `ARCHIVED` (value: `'archived'`)




## Referenced Types:












* [`Currency`](Currency.md)

* [`LinkedTaxRate`](LinkedTaxRate.md)




* [`BankAccount`](BankAccount.md)
* [`LedgerAccountCategories`](LedgerAccountCategories.md)
* [`LedgerAccountParentAccount`](LedgerAccountParentAccount.md)











---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


