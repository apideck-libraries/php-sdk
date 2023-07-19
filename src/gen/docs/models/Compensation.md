# Apideck.Compensation

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`employee_id` | **string** | A unique identifier for an object. | 
`net_pay` | **float** | The employee's net pay. Only available when payroll has been processed | [optional] 
`gross_pay` | **float** | The employee's gross pay. Only available when payroll has been processed | [optional] 
`taxes` | [**\Apideck\Client\Model\Tax[]**](Tax.md) | An array of employer and employee taxes for the pay period. | [optional] 
`deductions` | [**\Apideck\Client\Model\Deduction[]**](Deduction.md) | An array of employee deductions for the pay period. | [optional] 
`benefits` | [**\Apideck\Client\Model\Benefit[]**](Benefit.md) | An array of employee benefits for the pay period. | [optional] 





## Referenced Types:



* [`Tax`](Tax.md)
* [`Deduction`](Deduction.md)
* [`Benefit`](Benefit.md)

---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


