# Apideck.FormField

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** | The unique identifier of the form field. | [optional] 
`label` | **string** | The label of the field | [optional] 
`placeholder` | **string** | The placeholder for the form field | [optional] 
`description` | **string** | The description of the form field | [optional] 
`type` | **string** |  | [optional] 
`required` | **bool** | Indicates if the form field is required, which means it must be filled in before the form can be submitted | [optional] 
`custom_field` | **bool** |  | [optional] 
`allow_custom_values` | **bool** | Only applicable to select fields. Allow the user to add a custom value though the option select if the desired value is not in the option select list. | [optional] 
`disabled` | **bool** | Indicates if the form field is displayed in a “read-only” mode. | [optional] 
`hidden` | **bool** | Indicates if the form field is not displayed but the value that is being stored on the connection. | [optional] 
`deprecated` | **bool** | When the setting is deprecated, it should be hidden from the user interface. The value will still be stored on the connection for the sake of backwards compatibility. | [optional] 
`sensitive` | **bool** | Indicates if the form field contains sensitive data, which will display the value as a masked input. | [optional] 
`prefix` | **string** | Prefix to display in front of the form field. | [optional] 
`suffix` | **string** | Suffix to display next to the form field. | [optional] 
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


