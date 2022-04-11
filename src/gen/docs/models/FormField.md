# Apideck.FormField

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** |  | [optional] 
`label` | **string** |  | [optional] 
`placeholder` | **string** |  | [optional] 
`description` | **string** |  | [optional] 
`type` | **string** |  | [optional] 
`required` | **bool** |  | [optional] 
`custom_field` | **bool** |  | [optional] 
`allow_custom_values` | **bool** | Only applicable to select fields. Allow the user to add a custom value though the option select if the desired value is not in the option select list. | [optional] 
`disabled` | **bool** |  | [optional] 
`sensitive` | **bool** |  | [optional] 
`options` | [**\Apideck\Client\Model\FormFieldOption[]**](FormFieldOption.md) |  | [optional] 





<a name="TYPE"></a>
## Enum: FormField.type


* `TEXT` (value: `'text'`)

* `CHECKBOX` (value: `'checkbox'`)

* `TEL` (value: `'tel'`)

* `EMAIL` (value: `'email'`)

* `URL` (value: `'url'`)

* `TEXTAREA` (value: `'textarea'`)

* `SELECT` (value: `'select'`)

* `FILTERED_SELECT` (value: `'filtered-select'`)

* `MULTI_SELECT` (value: `'multi-select'`)

* `DATETIME` (value: `'datetime'`)

* `DATE` (value: `'date'`)

* `TIME` (value: `'time'`)

* `NUMBER` (value: `'number'`)




## Referenced Types:










* [`FormFieldOption`](FormFieldOption.md)

---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


