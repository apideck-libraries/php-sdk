# Apideck.EmployeeJob

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** | A unique identifier for an object. | [optional] 
`employee_id` | **string** | A unique identifier for an object. | [optional] 
`title` | **string** | The job title of the person. | [optional] 
`role` | **string** | The position and responsibilities of the person within the organization. | [optional] 
`start_date` | **\DateTime** | The date on which the employee starts working in their current job role. | [optional] 
`end_date` | **\DateTime** | The date on which the employee leaves or is expected to leave their current job role. | [optional] 
`compensation_rate` | **float** | The rate of pay for the employee in their current job role. | [optional] 
`currency` | [**\Apideck\Client\Model\Currency**](Currency.md) |  | [optional] 
`payment_unit` | [**\Apideck\Client\Model\PaymentUnit**](PaymentUnit.md) |  | [optional] 
`hired_at` | **\DateTime** | The date on which the employee was hired by the organization | [optional] 
`is_primary` | **bool** | Indicates whether this the employee's primary job. | [optional] 
`is_manager` | **bool** | Indicates whether this the employee has a manager role. | [optional] 
`location` | [**\Apideck\Client\Model\Address**](Address.md) |  | [optional] 





## Referenced Types:







* [`Currency`](Currency.md)
* [`PaymentUnit`](PaymentUnit.md)



* [`Address`](Address.md)

---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


