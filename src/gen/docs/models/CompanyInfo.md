# Apideck.CompanyInfo

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** | A unique identifier for an object. | [optional] 
`company_name` | **string** | The name of the company. | [optional] 
`status` | **string** | Based on the status some functionality is enabled or disabled. | [optional] 
`legal_name` | **string** | The legal name of the company | [optional] 
`country` | **string** | country code according to ISO 3166-1 alpha-2. | [optional] 
`sales_tax_number` | **string** |  | [optional] 
`automated_sales_tax` | **bool** | Whether sales tax is calculated automatically for the company | [optional] 
`sales_tax_enabled` | **bool** | Whether sales tax is enabled for the company | [optional] 
`default_sales_tax` | [**\Apideck\Client\Model\TaxRate**](TaxRate.md) |  | [optional] 
`currency` | [**\Apideck\Client\Model\Currency**](Currency.md) |  | [optional] 
`language` | **string** | language code according to ISO 639-1. For the United States - EN | [optional] 
`fiscal_year_start_month` | **string** | The start month of fiscal year. | [optional] 
`company_start_date` | **\DateTime** | Date when company file was created | [optional] 
`addresses` | [**\Apideck\Client\Model\Address[]**](Address.md) |  | [optional] 
`phone_numbers` | [**\Apideck\Client\Model\PhoneNumber[]**](PhoneNumber.md) |  | [optional] 
`emails` | [**\Apideck\Client\Model\Email[]**](Email.md) |  | [optional] 
`row_version` | **string** | A binary value used to detect updates to a object and prevent data conflicts. It is incremented each time an update is made to the object. | [optional] 
`updated_by` | **string** | The user who last updated the object. | [optional] 
`created_by` | **string** | The user who created the object. | [optional] 
`updated_at` | **\DateTime** | The date and time when the object was last updated. | [optional] 
`created_at` | **\DateTime** | The date and time when the object was created. | [optional] 





<a name="STATUS"></a>
## Enum: CompanyInfo.status


* `ACTIVE` (value: `'active'`)

* `INACTIVE` (value: `'inactive'`)




<a name="FISCAL_YEAR_START_MONTH"></a>
## Enum: CompanyInfo.fiscal_year_start_month


* `JANUARY` (value: `'January'`)

* `FEBRUARY` (value: `'February'`)

* `MARCH` (value: `'March'`)

* `APRIL` (value: `'April'`)

* `MAY` (value: `'May'`)

* `JUNE` (value: `'June'`)

* `JULY` (value: `'July'`)

* `AUGUST` (value: `'August'`)

* `SEPTEMBER` (value: `'September'`)

* `OCTOBER` (value: `'October'`)

* `NOVEMBER` (value: `'November'`)

* `DECEMBER` (value: `'December'`)




## Referenced Types:








* [`TaxRate`](TaxRate.md)
* [`Currency`](Currency.md)



* [`Address`](Address.md)
* [`PhoneNumber`](PhoneNumber.md)
* [`Email`](Email.md)






---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


