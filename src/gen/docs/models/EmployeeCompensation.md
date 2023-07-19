# Apideck.EmployeeCompensation

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** | A unique identifier for an object. | [optional] 
`job_id` | **string** | The ID of the job to which the compensation belongs. | [optional] 
`rate` | **float** | The amount paid per payment unit. | [optional] 
`payment_unit` | [**\Apideck\Client\Model\PaymentUnit**](PaymentUnit.md) |  | [optional] 
`currency` | [**\Apideck\Client\Model\Currency**](Currency.md) |  | [optional] 
`flsa_status` | **string** | The FLSA status for this compensation. | [optional] 
`effective_date` | **string** | The date on which a change to an employee's compensation takes effect. | [optional] 
`payment_frequency` | [**\Apideck\Client\Model\PaymentFrequency**](PaymentFrequency.md) |  | [optional] 





<a name="FLSA_STATUS"></a>
## Enum: EmployeeCompensation.flsa_status


* `EXEMPT` (value: `'exempt'`)

* `SALARIED_NONEXEMPT` (value: `'salaried-nonexempt'`)

* `NONEXEMPT` (value: `'nonexempt'`)

* `OWNER` (value: `'owner'`)

* `OTHER` (value: `'other'`)




## Referenced Types:



* [`PaymentUnit`](PaymentUnit.md)
* [`Currency`](Currency.md)


* [`PaymentFrequency`](PaymentFrequency.md)

---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


