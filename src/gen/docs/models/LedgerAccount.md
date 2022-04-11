# Apideck.LedgerAccount

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** |  | [optional] 
`display_id` | **string** |  | [optional] 
`nominal_code` | **string** |  | [optional] 
`classification` | **string** |  | [optional] 
`type` | **string** |  | [optional] 
`sub_type` | **string** |  | [optional] 
`name` | **string** |  | [optional] 
`fully_qualified_name` | **string** |  | [optional] 
`description` | **string** |  | [optional] 
`opening_balance` | **float** |  | [optional] 
`current_balance` | **float** |  | [optional] 
`currency` | [**\Apideck\Client\Model\Currency**](Currency.md) |  | [optional] 
`tax_type` | **string** |  | [optional] 
`tax_rate` | [**\Apideck\Client\Model\LinkedTaxRate**](LinkedTaxRate.md) |  | [optional] 
`level` | **float** |  | [optional] 
`active` | **bool** |  | [optional] 
`status` | **string** |  | [optional] 
`header` | **bool** |  | [optional] 
`bank_account` | [**\Apideck\Client\Model\BankAccount**](BankAccount.md) |  | [optional] 
`categories` | **object[]** |  | [optional] 
`parent_account` | [**\Apideck\Client\Model\LedgerAccountParentAccount**](LedgerAccountParentAccount.md) |  | [optional] 
`sub_account` | **bool** |  | [optional] 
`sub_accounts` | **object[]** |  | [optional] 
`last_reconciliation_date` | **\DateTime** | Reconciliation Date means the last calendar day of each Reconciliation Period. | [optional] 
`row_version` | **string** |  | [optional] 
`updated_by` | **string** |  | [optional] 
`created_by` | **string** |  | [optional] 
`updated_at` | **\DateTime** |  | [optional] 
`created_at` | **\DateTime** |  | [optional] 





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




<a name="STATUS"></a>
## Enum: LedgerAccount.status


* `ACTIVE` (value: `'active'`)

* `INACTIVE` (value: `'inactive'`)

* `ARCHIVED` (value: `'archived'`)




## Referenced Types:











* [`Currency`](Currency.md)

* [`LinkedTaxRate`](LinkedTaxRate.md)




* [`BankAccount`](BankAccount.md)

* [`LedgerAccountParentAccount`](LedgerAccountParentAccount.md)









---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


