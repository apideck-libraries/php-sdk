# Apideck.BalanceByPeriod

### Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
`start_date` | **\DateTime** | The starting date of the period. If not provided, it represents the oldest period, where all transactions due before the specified &#x60;end_date&#x60; are included. | [optional] 
`end_date` | **\DateTime** | The ending date of the period. If not provided, it represents an open-ended period starting from the &#x60;start_date&#x60;, typically capturing future-dated transactions that are not yet aged. | [optional] 
`total_amount` | **float** | Total amount of the period. | [optional] 
`balances_by_transaction` | [**\Apideck\Client\Model\BalanceByTransaction[]**](BalanceByTransaction.md) |  | [optional] 





## Referenced Types:



* [`BalanceByTransaction`](BalanceByTransaction.md)

---

[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)


