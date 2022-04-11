# Apideck.Company

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`name` | **string** |  | 
`id` | **string** |  | [optional] 
`interaction_count` | **int** |  | [optional] 
`owner_id` | **string** |  | [optional] 
`image` | **string** |  | [optional] 
`description` | **string** |  | [optional] 
`vat_number` | **string** | VAT number | [optional] 
`currency` | [**\Apideck\Client\Model\Currency**](Currency.md) |  | [optional] 
`status` | **string** |  | [optional] 
`fax` | **string** |  | [optional] 
`annual_revenue` | **string** | Annual revenue | [optional] 
`number_of_employees` | **string** | Number of employees | [optional] 
`industry` | **string** | Industry | [optional] 
`ownership` | **string** | Ownership | [optional] 
`sales_tax_number` | **string** |  | [optional] 
`payee_number` | **string** |  | [optional] 
`abn_or_tfn` | **string** | An ABN is necessary for operating a business, while a TFN (Tax File Number) is required for any person working in Australia. | [optional] 
`abn_branch` | **string** | An ABN Branch (also known as a GST Branch) is used if part of your business needs to account for GST separately from its parent entity. | [optional] 
`acn` | **string** | The Australian Company Number (ACN) is a nine digit number with the last digit being a check digit calculated using a modified modulus 10 calculation. ASIC has adopted a convention of always printing and displaying the ACN in the format XXX XXX XXX; three blocks of three characters, each block separated by a blank. | [optional] 
`parent_id` | **string** | Parent ID | [optional] 
`bank_accounts` | [**\Apideck\Client\Model\BankAccount[]**](BankAccount.md) |  | [optional] 
`websites` | [**\Apideck\Client\Model\Website[]**](Website.md) |  | [optional] 
`addresses` | [**\Apideck\Client\Model\Address[]**](Address.md) |  | [optional] 
`social_links` | [**\Apideck\Client\Model\SocialLink[]**](SocialLink.md) |  | [optional] 
`phone_numbers` | [**\Apideck\Client\Model\PhoneNumber[]**](PhoneNumber.md) |  | [optional] 
`emails` | [**\Apideck\Client\Model\Email[]**](Email.md) |  | [optional] 
`custom_fields` | [**\Apideck\Client\Model\CustomField[]**](CustomField.md) |  | [optional] 
`tags` | **string[]** |  | [optional] 
`read_only` | **bool** |  | [optional] 
`last_activity_at` | **\DateTime** |  | [optional] 
`deleted` | **bool** |  | [optional] 
`updated_by` | **string** |  | [optional] 
`created_by` | **string** |  | [optional] 
`updated_at` | **\DateTime** |  | [optional] 
`created_at` | **\DateTime** |  | [optional] 





## Referenced Types:







* [`Currency`](Currency.md)












* [`BankAccount`](BankAccount.md)
* [`Website`](Website.md)
* [`Address`](Address.md)
* [`SocialLink`](SocialLink.md)
* [`PhoneNumber`](PhoneNumber.md)
* [`Email`](Email.md)
* [`CustomField`](CustomField.md)









---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


