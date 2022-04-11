# Apideck.EmployeeCompensations

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`id` | **string** |  | [optional] 
`job_id` | **string** | The ID of the job to which the compensation belongs. | [optional] 
`rate` | **float** | The amount paid per payment unit. | [optional] 
`payment_unit` | [**\Apideck\Client\Model\PaymentUnit**](PaymentUnit.md) |  | [optional] 
`currency` | [**\Apideck\Client\Model\Currency**](Currency.md) |  | [optional] 
`flsa_status` | **string** | The FLSA status for this compensation. | [optional] 
`effective_date` | **string** | The effective date for this compensation. | [optional] 





<a name="FLSA_STATUS"></a>
## Enum: EmployeeCompensations.flsa_status


* `EXEMPT` (value: `'exempt'`)

* `SALARIED_NONEXEMPT` (value: `'salaried-nonexempt'`)

* `NONEXEMPT` (value: `'nonexempt'`)

* `OWNER` (value: `'owner'`)




## Referenced Types:



* [`PaymentUnit`](PaymentUnit.md)
* [`Currency`](Currency.md)



---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


