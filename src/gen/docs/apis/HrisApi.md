# Apideck.Hris

## Class Name
**HrisApi**

## Methods

* [Create Company](#companiesAdd)
* [List Companies](#companiesAll)
* [Delete Company](#companiesDelete)
* [Get Company](#companiesOne)
* [Update Company](#companiesUpdate)
* [Create Department](#departmentsAdd)
* [List Departments](#departmentsAll)
* [Delete Department](#departmentsDelete)
* [Get Department](#departmentsOne)
* [Update Department](#departmentsUpdate)
* [List Employee Payrolls](#employeePayrollsAll)
* [Get Employee Payroll](#employeePayrollsOne)
* [List Employee Schedules](#employeeSchedulesAll)
* [Create Employee](#employeesAdd)
* [List Employees](#employeesAll)
* [Delete Employee](#employeesDelete)
* [Get Employee](#employeesOne)
* [Update Employee](#employeesUpdate)
* [List Jobs](#jobsAll)
* [One Job](#jobsOne)
* [List Payroll](#payrollsAll)
* [Get Payroll](#payrollsOne)
* [Create Time Off Request](#timeOffRequestsAdd)
* [List Time Off Requests](#timeOffRequestsAll)
* [Delete Time Off Request](#timeOffRequestsDelete)
* [Get Time Off Request](#timeOffRequestsOne)
* [Update Time Off Request](#timeOffRequestsUpdate)

<a name="companiesAdd"></a>
# Create Company


Method: **companiesAdd**

```php
Apideck->getHrisApi()->companiesAdd($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **hris_company** | [\Apideck\Client\Model\HrisCompany](../models/\Apideck\Client\Model\HrisCompany.md)|  |
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **x_apideck_service_id** | **string**| Provide the service id you want to call (e.g., pipedrive). Only needed when a consumer has activated multiple integrations for a Unified API. |
 **raw** | [**bool**] | Include raw response. Mostly used for debugging purposes | (optional) defaults to false



### Response Type

[`\Apideck\Client\Model\CreateHrisCompanyResponse`](../models/\Apideck\Client\Model\CreateHrisCompanyResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**201** | Companies | 
**400** | Bad Request | 
**401** | Unauthorized | 
**402** | Payment Required | 
**404** | The specified resource was not found | 
**422** | Unprocessable | 
4/5xx | Unexpected error | 


## Example Usage

```php
<?php
require('vendor/autoload.php');

use Apideck\Client\Apideck;
use Apideck\Client\ApideckConfiguration;
use Apideck\Client\ApiException;

$config = new ApideckConfiguration('<insert-api-key-here>', '<insert-application-id-here>', '<insert-consumer-id-here>', '<insert-service-id-here>');

$apideck = new Apideck($config);

try {
  $response = $apideck->getHrisApi()->companiesAdd($company);
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="companiesAll"></a>
# List Companies


Method: **companiesAll**

```php
Apideck->getHrisApi()->companiesAll($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **x_apideck_service_id** | **string**| Provide the service id you want to call (e.g., pipedrive). Only needed when a consumer has activated multiple integrations for a Unified API. |
 **cursor** | **string**| Cursor to start from. You can find cursors for next/previous pages in the meta.cursors property of the response. |
 **raw** | [**bool**] | Include raw response. Mostly used for debugging purposes | (optional) defaults to false
 **limit** | [**int**] | Number of records to return | (optional) defaults to 20



### Response Type

[`\Apideck\Client\Model\GetHrisCompaniesResponse`](../models/\Apideck\Client\Model\GetHrisCompaniesResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Companies | 
**400** | Bad Request | 
**401** | Unauthorized | 
**402** | Payment Required | 
**404** | The specified resource was not found | 
**422** | Unprocessable | 
4/5xx | Unexpected error | 


## Example Usage

```php
<?php
require('vendor/autoload.php');

use Apideck\Client\Apideck;
use Apideck\Client\ApideckConfiguration;
use Apideck\Client\ApiException;

$config = new ApideckConfiguration('<insert-api-key-here>', '<insert-application-id-here>', '<insert-consumer-id-here>', '<insert-service-id-here>');

$apideck = new Apideck($config);

try {
  $response = $apideck->getHrisApi()->companiesAll();
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="companiesDelete"></a>
# Delete Company


Method: **companiesDelete**

```php
Apideck->getHrisApi()->companiesDelete($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the record you are acting upon. |
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **x_apideck_service_id** | **string**| Provide the service id you want to call (e.g., pipedrive). Only needed when a consumer has activated multiple integrations for a Unified API. |
 **raw** | [**bool**] | Include raw response. Mostly used for debugging purposes | (optional) defaults to false



### Response Type

[`\Apideck\Client\Model\DeleteHrisCompanyResponse`](../models/\Apideck\Client\Model\DeleteHrisCompanyResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Companies | 
**400** | Bad Request | 
**401** | Unauthorized | 
**402** | Payment Required | 
**404** | The specified resource was not found | 
**422** | Unprocessable | 
4/5xx | Unexpected error | 


## Example Usage

```php
<?php
require('vendor/autoload.php');

use Apideck\Client\Apideck;
use Apideck\Client\ApideckConfiguration;
use Apideck\Client\ApiException;

$config = new ApideckConfiguration('<insert-api-key-here>', '<insert-application-id-here>', '<insert-consumer-id-here>', '<insert-service-id-here>');

$apideck = new Apideck($config);

try {
  $response = $apideck->getHrisApi()->companiesDelete('id_example');
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="companiesOne"></a>
# Get Company


Method: **companiesOne**

```php
Apideck->getHrisApi()->companiesOne($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the record you are acting upon. |
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **x_apideck_service_id** | **string**| Provide the service id you want to call (e.g., pipedrive). Only needed when a consumer has activated multiple integrations for a Unified API. |
 **raw** | [**bool**] | Include raw response. Mostly used for debugging purposes | (optional) defaults to false



### Response Type

[`\Apideck\Client\Model\GetHrisCompanyResponse`](../models/\Apideck\Client\Model\GetHrisCompanyResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Company | 
**400** | Bad Request | 
**401** | Unauthorized | 
**402** | Payment Required | 
**404** | The specified resource was not found | 
**422** | Unprocessable | 
4/5xx | Unexpected error | 


## Example Usage

```php
<?php
require('vendor/autoload.php');

use Apideck\Client\Apideck;
use Apideck\Client\ApideckConfiguration;
use Apideck\Client\ApiException;

$config = new ApideckConfiguration('<insert-api-key-here>', '<insert-application-id-here>', '<insert-consumer-id-here>', '<insert-service-id-here>');

$apideck = new Apideck($config);

try {
  $response = $apideck->getHrisApi()->companiesOne('id_example');
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="companiesUpdate"></a>
# Update Company


Method: **companiesUpdate**

```php
Apideck->getHrisApi()->companiesUpdate($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the record you are acting upon. |
 **hris_company** | [\Apideck\Client\Model\HrisCompany](../models/\Apideck\Client\Model\HrisCompany.md)|  |
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **x_apideck_service_id** | **string**| Provide the service id you want to call (e.g., pipedrive). Only needed when a consumer has activated multiple integrations for a Unified API. |
 **raw** | [**bool**] | Include raw response. Mostly used for debugging purposes | (optional) defaults to false



### Response Type

[`\Apideck\Client\Model\UpdateHrisCompanyResponse`](../models/\Apideck\Client\Model\UpdateHrisCompanyResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Companies | 
**400** | Bad Request | 
**401** | Unauthorized | 
**402** | Payment Required | 
**404** | The specified resource was not found | 
**422** | Unprocessable | 
4/5xx | Unexpected error | 


## Example Usage

```php
<?php
require('vendor/autoload.php');

use Apideck\Client\Apideck;
use Apideck\Client\ApideckConfiguration;
use Apideck\Client\ApiException;

$config = new ApideckConfiguration('<insert-api-key-here>', '<insert-application-id-here>', '<insert-consumer-id-here>', '<insert-service-id-here>');

$apideck = new Apideck($config);

try {
  $response = $apideck->getHrisApi()->companiesUpdate('id_example', $company);
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="departmentsAdd"></a>
# Create Department


Method: **departmentsAdd**

```php
Apideck->getHrisApi()->departmentsAdd($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **department** | [\Apideck\Client\Model\Department](../models/\Apideck\Client\Model\Department.md)|  |
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **x_apideck_service_id** | **string**| Provide the service id you want to call (e.g., pipedrive). Only needed when a consumer has activated multiple integrations for a Unified API. |
 **raw** | [**bool**] | Include raw response. Mostly used for debugging purposes | (optional) defaults to false



### Response Type

[`\Apideck\Client\Model\CreateDepartmentResponse`](../models/\Apideck\Client\Model\CreateDepartmentResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**201** | Departments | 
**400** | Bad Request | 
**401** | Unauthorized | 
**402** | Payment Required | 
**404** | The specified resource was not found | 
**422** | Unprocessable | 
4/5xx | Unexpected error | 


## Example Usage

```php
<?php
require('vendor/autoload.php');

use Apideck\Client\Apideck;
use Apideck\Client\ApideckConfiguration;
use Apideck\Client\ApiException;

$config = new ApideckConfiguration('<insert-api-key-here>', '<insert-application-id-here>', '<insert-consumer-id-here>', '<insert-service-id-here>');

$apideck = new Apideck($config);

try {
  $response = $apideck->getHrisApi()->departmentsAdd($department);
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="departmentsAll"></a>
# List Departments


Method: **departmentsAll**

```php
Apideck->getHrisApi()->departmentsAll($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **x_apideck_service_id** | **string**| Provide the service id you want to call (e.g., pipedrive). Only needed when a consumer has activated multiple integrations for a Unified API. |
 **cursor** | **string**| Cursor to start from. You can find cursors for next/previous pages in the meta.cursors property of the response. |
 **raw** | [**bool**] | Include raw response. Mostly used for debugging purposes | (optional) defaults to false
 **limit** | [**int**] | Number of records to return | (optional) defaults to 20



### Response Type

[`\Apideck\Client\Model\GetDepartmentsResponse`](../models/\Apideck\Client\Model\GetDepartmentsResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Departments | 
**400** | Bad Request | 
**401** | Unauthorized | 
**402** | Payment Required | 
**404** | The specified resource was not found | 
**422** | Unprocessable | 
4/5xx | Unexpected error | 


## Example Usage

```php
<?php
require('vendor/autoload.php');

use Apideck\Client\Apideck;
use Apideck\Client\ApideckConfiguration;
use Apideck\Client\ApiException;

$config = new ApideckConfiguration('<insert-api-key-here>', '<insert-application-id-here>', '<insert-consumer-id-here>', '<insert-service-id-here>');

$apideck = new Apideck($config);

try {
  $response = $apideck->getHrisApi()->departmentsAll();
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="departmentsDelete"></a>
# Delete Department


Method: **departmentsDelete**

```php
Apideck->getHrisApi()->departmentsDelete($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the record you are acting upon. |
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **x_apideck_service_id** | **string**| Provide the service id you want to call (e.g., pipedrive). Only needed when a consumer has activated multiple integrations for a Unified API. |
 **raw** | [**bool**] | Include raw response. Mostly used for debugging purposes | (optional) defaults to false



### Response Type

[`\Apideck\Client\Model\DeleteDepartmentResponse`](../models/\Apideck\Client\Model\DeleteDepartmentResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Departments | 
**400** | Bad Request | 
**401** | Unauthorized | 
**402** | Payment Required | 
**404** | The specified resource was not found | 
**422** | Unprocessable | 
4/5xx | Unexpected error | 


## Example Usage

```php
<?php
require('vendor/autoload.php');

use Apideck\Client\Apideck;
use Apideck\Client\ApideckConfiguration;
use Apideck\Client\ApiException;

$config = new ApideckConfiguration('<insert-api-key-here>', '<insert-application-id-here>', '<insert-consumer-id-here>', '<insert-service-id-here>');

$apideck = new Apideck($config);

try {
  $response = $apideck->getHrisApi()->departmentsDelete('id_example');
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="departmentsOne"></a>
# Get Department


Method: **departmentsOne**

```php
Apideck->getHrisApi()->departmentsOne($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the record you are acting upon. |
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **x_apideck_service_id** | **string**| Provide the service id you want to call (e.g., pipedrive). Only needed when a consumer has activated multiple integrations for a Unified API. |
 **raw** | [**bool**] | Include raw response. Mostly used for debugging purposes | (optional) defaults to false



### Response Type

[`\Apideck\Client\Model\GetDepartmentResponse`](../models/\Apideck\Client\Model\GetDepartmentResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Departments | 
**400** | Bad Request | 
**401** | Unauthorized | 
**402** | Payment Required | 
**404** | The specified resource was not found | 
**422** | Unprocessable | 
4/5xx | Unexpected error | 


## Example Usage

```php
<?php
require('vendor/autoload.php');

use Apideck\Client\Apideck;
use Apideck\Client\ApideckConfiguration;
use Apideck\Client\ApiException;

$config = new ApideckConfiguration('<insert-api-key-here>', '<insert-application-id-here>', '<insert-consumer-id-here>', '<insert-service-id-here>');

$apideck = new Apideck($config);

try {
  $response = $apideck->getHrisApi()->departmentsOne('id_example');
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="departmentsUpdate"></a>
# Update Department


Method: **departmentsUpdate**

```php
Apideck->getHrisApi()->departmentsUpdate($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the record you are acting upon. |
 **department** | [\Apideck\Client\Model\Department](../models/\Apideck\Client\Model\Department.md)|  |
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **x_apideck_service_id** | **string**| Provide the service id you want to call (e.g., pipedrive). Only needed when a consumer has activated multiple integrations for a Unified API. |
 **raw** | [**bool**] | Include raw response. Mostly used for debugging purposes | (optional) defaults to false



### Response Type

[`\Apideck\Client\Model\UpdateDepartmentResponse`](../models/\Apideck\Client\Model\UpdateDepartmentResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Departments | 
**400** | Bad Request | 
**401** | Unauthorized | 
**402** | Payment Required | 
**404** | The specified resource was not found | 
**422** | Unprocessable | 
4/5xx | Unexpected error | 


## Example Usage

```php
<?php
require('vendor/autoload.php');

use Apideck\Client\Apideck;
use Apideck\Client\ApideckConfiguration;
use Apideck\Client\ApiException;

$config = new ApideckConfiguration('<insert-api-key-here>', '<insert-application-id-here>', '<insert-consumer-id-here>', '<insert-service-id-here>');

$apideck = new Apideck($config);

try {
  $response = $apideck->getHrisApi()->departmentsUpdate('id_example', $department);
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="employeePayrollsAll"></a>
# List Employee Payrolls


Method: **employeePayrollsAll**

```php
Apideck->getHrisApi()->employeePayrollsAll($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_id** | **string**| ID of the employee you are acting upon. |
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **x_apideck_service_id** | **string**| Provide the service id you want to call (e.g., pipedrive). Only needed when a consumer has activated multiple integrations for a Unified API. |
 **filter** | [\Apideck\Client\Model\PayrollsFilter](../models/\Apideck\Client\Model\PayrollsFilter.md)| Apply filters |
 **raw** | [**bool**] | Include raw response. Mostly used for debugging purposes | (optional) defaults to false



### Response Type

[`\Apideck\Client\Model\GetEmployeePayrollsResponse`](../models/\Apideck\Client\Model\GetEmployeePayrollsResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | EmployeePayrolls | 
**400** | Bad Request | 
**401** | Unauthorized | 
**402** | Payment Required | 
**404** | The specified resource was not found | 
**422** | Unprocessable | 
4/5xx | Unexpected error | 


## Example Usage

```php
<?php
require('vendor/autoload.php');

use Apideck\Client\Apideck;
use Apideck\Client\ApideckConfiguration;
use Apideck\Client\ApiException;

$config = new ApideckConfiguration('<insert-api-key-here>', '<insert-application-id-here>', '<insert-consumer-id-here>', '<insert-service-id-here>');

$apideck = new Apideck($config);

try {
  $response = $apideck->getHrisApi()->employeePayrollsAll('employee_id_example');
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="employeePayrollsOne"></a>
# Get Employee Payroll


Method: **employeePayrollsOne**

```php
Apideck->getHrisApi()->employeePayrollsOne($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payroll_id** | **string**| ID of the payroll you are acting upon. |
 **employee_id** | **string**| ID of the employee you are acting upon. |
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **x_apideck_service_id** | **string**| Provide the service id you want to call (e.g., pipedrive). Only needed when a consumer has activated multiple integrations for a Unified API. |
 **raw** | [**bool**] | Include raw response. Mostly used for debugging purposes | (optional) defaults to false



### Response Type

[`\Apideck\Client\Model\GetEmployeePayrollResponse`](../models/\Apideck\Client\Model\GetEmployeePayrollResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Payrolls | 
**400** | Bad Request | 
**401** | Unauthorized | 
**402** | Payment Required | 
**404** | The specified resource was not found | 
**422** | Unprocessable | 
4/5xx | Unexpected error | 


## Example Usage

```php
<?php
require('vendor/autoload.php');

use Apideck\Client\Apideck;
use Apideck\Client\ApideckConfiguration;
use Apideck\Client\ApiException;

$config = new ApideckConfiguration('<insert-api-key-here>', '<insert-application-id-here>', '<insert-consumer-id-here>', '<insert-service-id-here>');

$apideck = new Apideck($config);

try {
  $response = $apideck->getHrisApi()->employeePayrollsOne('payroll_id_example', 'employee_id_example');
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="employeeSchedulesAll"></a>
# List Employee Schedules


Method: **employeeSchedulesAll**

```php
Apideck->getHrisApi()->employeeSchedulesAll($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_id** | **string**| ID of the employee you are acting upon. |
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **x_apideck_service_id** | **string**| Provide the service id you want to call (e.g., pipedrive). Only needed when a consumer has activated multiple integrations for a Unified API. |
 **raw** | [**bool**] | Include raw response. Mostly used for debugging purposes | (optional) defaults to false



### Response Type

[`\Apideck\Client\Model\GetEmployeeSchedulesResponse`](../models/\Apideck\Client\Model\GetEmployeeSchedulesResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | EmployeeSchedules | 
**400** | Bad Request | 
**401** | Unauthorized | 
**402** | Payment Required | 
**404** | The specified resource was not found | 
**422** | Unprocessable | 
4/5xx | Unexpected error | 


## Example Usage

```php
<?php
require('vendor/autoload.php');

use Apideck\Client\Apideck;
use Apideck\Client\ApideckConfiguration;
use Apideck\Client\ApiException;

$config = new ApideckConfiguration('<insert-api-key-here>', '<insert-application-id-here>', '<insert-consumer-id-here>', '<insert-service-id-here>');

$apideck = new Apideck($config);

try {
  $response = $apideck->getHrisApi()->employeeSchedulesAll('employee_id_example');
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="employeesAdd"></a>
# Create Employee


Method: **employeesAdd**

```php
Apideck->getHrisApi()->employeesAdd($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee** | [\Apideck\Client\Model\Employee](../models/\Apideck\Client\Model\Employee.md)|  |
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **x_apideck_service_id** | **string**| Provide the service id you want to call (e.g., pipedrive). Only needed when a consumer has activated multiple integrations for a Unified API. |
 **raw** | [**bool**] | Include raw response. Mostly used for debugging purposes | (optional) defaults to false



### Response Type

[`\Apideck\Client\Model\CreateEmployeeResponse`](../models/\Apideck\Client\Model\CreateEmployeeResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**201** | Employees | 
**400** | Bad Request | 
**401** | Unauthorized | 
**402** | Payment Required | 
**404** | The specified resource was not found | 
**422** | Unprocessable | 
4/5xx | Unexpected error | 


## Example Usage

```php
<?php
require('vendor/autoload.php');

use Apideck\Client\Apideck;
use Apideck\Client\ApideckConfiguration;
use Apideck\Client\ApiException;

$config = new ApideckConfiguration('<insert-api-key-here>', '<insert-application-id-here>', '<insert-consumer-id-here>', '<insert-service-id-here>');

$apideck = new Apideck($config);

try {
  $response = $apideck->getHrisApi()->employeesAdd($employee);
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="employeesAll"></a>
# List Employees


Method: **employeesAll**

```php
Apideck->getHrisApi()->employeesAll($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **x_apideck_service_id** | **string**| Provide the service id you want to call (e.g., pipedrive). Only needed when a consumer has activated multiple integrations for a Unified API. |
 **cursor** | **string**| Cursor to start from. You can find cursors for next/previous pages in the meta.cursors property of the response. |
 **filter** | [\Apideck\Client\Model\EmployeesFilter](../models/\Apideck\Client\Model\EmployeesFilter.md)| Apply filters |
 **sort** | [\Apideck\Client\Model\EmployeesSort](../models/\Apideck\Client\Model\EmployeesSort.md)| Apply sorting |
 **raw** | [**bool**] | Include raw response. Mostly used for debugging purposes | (optional) defaults to false
 **limit** | [**int**] | Number of records to return | (optional) defaults to 20



### Response Type

[`\Apideck\Client\Model\GetEmployeesResponse`](../models/\Apideck\Client\Model\GetEmployeesResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Employees | 
**400** | Bad Request | 
**401** | Unauthorized | 
**402** | Payment Required | 
**404** | The specified resource was not found | 
**422** | Unprocessable | 
4/5xx | Unexpected error | 


## Example Usage

```php
<?php
require('vendor/autoload.php');

use Apideck\Client\Apideck;
use Apideck\Client\ApideckConfiguration;
use Apideck\Client\ApiException;

$config = new ApideckConfiguration('<insert-api-key-here>', '<insert-application-id-here>', '<insert-consumer-id-here>', '<insert-service-id-here>');

$apideck = new Apideck($config);

try {
  $response = $apideck->getHrisApi()->employeesAll();
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="employeesDelete"></a>
# Delete Employee


Method: **employeesDelete**

```php
Apideck->getHrisApi()->employeesDelete($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the record you are acting upon. |
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **x_apideck_service_id** | **string**| Provide the service id you want to call (e.g., pipedrive). Only needed when a consumer has activated multiple integrations for a Unified API. |
 **raw** | [**bool**] | Include raw response. Mostly used for debugging purposes | (optional) defaults to false



### Response Type

[`\Apideck\Client\Model\DeleteEmployeeResponse`](../models/\Apideck\Client\Model\DeleteEmployeeResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Employees | 
**400** | Bad Request | 
**401** | Unauthorized | 
**402** | Payment Required | 
**404** | The specified resource was not found | 
**422** | Unprocessable | 
4/5xx | Unexpected error | 


## Example Usage

```php
<?php
require('vendor/autoload.php');

use Apideck\Client\Apideck;
use Apideck\Client\ApideckConfiguration;
use Apideck\Client\ApiException;

$config = new ApideckConfiguration('<insert-api-key-here>', '<insert-application-id-here>', '<insert-consumer-id-here>', '<insert-service-id-here>');

$apideck = new Apideck($config);

try {
  $response = $apideck->getHrisApi()->employeesDelete('id_example');
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="employeesOne"></a>
# Get Employee


Method: **employeesOne**

```php
Apideck->getHrisApi()->employeesOne($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the record you are acting upon. |
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **x_apideck_service_id** | **string**| Provide the service id you want to call (e.g., pipedrive). Only needed when a consumer has activated multiple integrations for a Unified API. |
 **raw** | [**bool**] | Include raw response. Mostly used for debugging purposes | (optional) defaults to false



### Response Type

[`\Apideck\Client\Model\GetEmployeeResponse`](../models/\Apideck\Client\Model\GetEmployeeResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Employees | 
**400** | Bad Request | 
**401** | Unauthorized | 
**402** | Payment Required | 
**404** | The specified resource was not found | 
**422** | Unprocessable | 
4/5xx | Unexpected error | 


## Example Usage

```php
<?php
require('vendor/autoload.php');

use Apideck\Client\Apideck;
use Apideck\Client\ApideckConfiguration;
use Apideck\Client\ApiException;

$config = new ApideckConfiguration('<insert-api-key-here>', '<insert-application-id-here>', '<insert-consumer-id-here>', '<insert-service-id-here>');

$apideck = new Apideck($config);

try {
  $response = $apideck->getHrisApi()->employeesOne('id_example');
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="employeesUpdate"></a>
# Update Employee


Method: **employeesUpdate**

```php
Apideck->getHrisApi()->employeesUpdate($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the record you are acting upon. |
 **employee** | [\Apideck\Client\Model\Employee](../models/\Apideck\Client\Model\Employee.md)|  |
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **x_apideck_service_id** | **string**| Provide the service id you want to call (e.g., pipedrive). Only needed when a consumer has activated multiple integrations for a Unified API. |
 **raw** | [**bool**] | Include raw response. Mostly used for debugging purposes | (optional) defaults to false



### Response Type

[`\Apideck\Client\Model\UpdateEmployeeResponse`](../models/\Apideck\Client\Model\UpdateEmployeeResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Employees | 
**400** | Bad Request | 
**401** | Unauthorized | 
**402** | Payment Required | 
**404** | The specified resource was not found | 
**422** | Unprocessable | 
4/5xx | Unexpected error | 


## Example Usage

```php
<?php
require('vendor/autoload.php');

use Apideck\Client\Apideck;
use Apideck\Client\ApideckConfiguration;
use Apideck\Client\ApiException;

$config = new ApideckConfiguration('<insert-api-key-here>', '<insert-application-id-here>', '<insert-consumer-id-here>', '<insert-service-id-here>');

$apideck = new Apideck($config);

try {
  $response = $apideck->getHrisApi()->employeesUpdate('id_example', $employee);
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="jobsAll"></a>
# List Jobs


Method: **jobsAll**

```php
Apideck->getHrisApi()->jobsAll($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **employee_id** | **string**| ID of the employee you are acting upon. |
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **x_apideck_service_id** | **string**| Provide the service id you want to call (e.g., pipedrive). Only needed when a consumer has activated multiple integrations for a Unified API. |
 **raw** | [**bool**] | Include raw response. Mostly used for debugging purposes | (optional) defaults to false



### Response Type

[`\Apideck\Client\Model\GetHrisJobsResponse`](../models/\Apideck\Client\Model\GetHrisJobsResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Jobs | 
**400** | Bad Request | 
**401** | Unauthorized | 
**402** | Payment Required | 
**404** | The specified resource was not found | 
**422** | Unprocessable | 
4/5xx | Unexpected error | 


## Example Usage

```php
<?php
require('vendor/autoload.php');

use Apideck\Client\Apideck;
use Apideck\Client\ApideckConfiguration;
use Apideck\Client\ApiException;

$config = new ApideckConfiguration('<insert-api-key-here>', '<insert-application-id-here>', '<insert-consumer-id-here>', '<insert-service-id-here>');

$apideck = new Apideck($config);

try {
  $response = $apideck->getHrisApi()->jobsAll('employee_id_example');
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="jobsOne"></a>
# One Job


Method: **jobsOne**

```php
Apideck->getHrisApi()->jobsOne($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **job_id** | **string**| ID of the job you are acting upon. |
 **employee_id** | **string**| ID of the employee you are acting upon. |
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **x_apideck_service_id** | **string**| Provide the service id you want to call (e.g., pipedrive). Only needed when a consumer has activated multiple integrations for a Unified API. |
 **raw** | [**bool**] | Include raw response. Mostly used for debugging purposes | (optional) defaults to false



### Response Type

[`\Apideck\Client\Model\GetHrisJobResponse`](../models/\Apideck\Client\Model\GetHrisJobResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Job | 
**400** | Bad Request | 
**401** | Unauthorized | 
**402** | Payment Required | 
**404** | The specified resource was not found | 
**422** | Unprocessable | 
4/5xx | Unexpected error | 


## Example Usage

```php
<?php
require('vendor/autoload.php');

use Apideck\Client\Apideck;
use Apideck\Client\ApideckConfiguration;
use Apideck\Client\ApiException;

$config = new ApideckConfiguration('<insert-api-key-here>', '<insert-application-id-here>', '<insert-consumer-id-here>', '<insert-service-id-here>');

$apideck = new Apideck($config);

try {
  $response = $apideck->getHrisApi()->jobsOne('job_id_example', 'employee_id_example');
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="payrollsAll"></a>
# List Payroll


Method: **payrollsAll**

```php
Apideck->getHrisApi()->payrollsAll($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **x_apideck_service_id** | **string**| Provide the service id you want to call (e.g., pipedrive). Only needed when a consumer has activated multiple integrations for a Unified API. |
 **filter** | [\Apideck\Client\Model\PayrollsFilter](../models/\Apideck\Client\Model\PayrollsFilter.md)| Apply filters |
 **raw** | [**bool**] | Include raw response. Mostly used for debugging purposes | (optional) defaults to false



### Response Type

[`\Apideck\Client\Model\GetPayrollsResponse`](../models/\Apideck\Client\Model\GetPayrollsResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Payrolls | 
**400** | Bad Request | 
**401** | Unauthorized | 
**402** | Payment Required | 
**404** | The specified resource was not found | 
**422** | Unprocessable | 
4/5xx | Unexpected error | 


## Example Usage

```php
<?php
require('vendor/autoload.php');

use Apideck\Client\Apideck;
use Apideck\Client\ApideckConfiguration;
use Apideck\Client\ApiException;

$config = new ApideckConfiguration('<insert-api-key-here>', '<insert-application-id-here>', '<insert-consumer-id-here>', '<insert-service-id-here>');

$apideck = new Apideck($config);

try {
  $response = $apideck->getHrisApi()->payrollsAll();
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="payrollsOne"></a>
# Get Payroll


Method: **payrollsOne**

```php
Apideck->getHrisApi()->payrollsOne($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payroll_id** | **string**| ID of the payroll you are acting upon. |
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **x_apideck_service_id** | **string**| Provide the service id you want to call (e.g., pipedrive). Only needed when a consumer has activated multiple integrations for a Unified API. |
 **raw** | [**bool**] | Include raw response. Mostly used for debugging purposes | (optional) defaults to false



### Response Type

[`\Apideck\Client\Model\GetPayrollResponse`](../models/\Apideck\Client\Model\GetPayrollResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Payrolls | 
**400** | Bad Request | 
**401** | Unauthorized | 
**402** | Payment Required | 
**404** | The specified resource was not found | 
**422** | Unprocessable | 
4/5xx | Unexpected error | 


## Example Usage

```php
<?php
require('vendor/autoload.php');

use Apideck\Client\Apideck;
use Apideck\Client\ApideckConfiguration;
use Apideck\Client\ApiException;

$config = new ApideckConfiguration('<insert-api-key-here>', '<insert-application-id-here>', '<insert-consumer-id-here>', '<insert-service-id-here>');

$apideck = new Apideck($config);

try {
  $response = $apideck->getHrisApi()->payrollsOne('payroll_id_example');
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="timeOffRequestsAdd"></a>
# Create Time Off Request


Method: **timeOffRequestsAdd**

```php
Apideck->getHrisApi()->timeOffRequestsAdd($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **time_off_request** | [\Apideck\Client\Model\TimeOffRequest](../models/\Apideck\Client\Model\TimeOffRequest.md)|  |
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **x_apideck_service_id** | **string**| Provide the service id you want to call (e.g., pipedrive). Only needed when a consumer has activated multiple integrations for a Unified API. |
 **raw** | [**bool**] | Include raw response. Mostly used for debugging purposes | (optional) defaults to false



### Response Type

[`\Apideck\Client\Model\CreateTimeOffRequestResponse`](../models/\Apideck\Client\Model\CreateTimeOffRequestResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**201** | TimeOffRequests | 
**400** | Bad Request | 
**401** | Unauthorized | 
**402** | Payment Required | 
**404** | The specified resource was not found | 
**422** | Unprocessable | 
4/5xx | Unexpected error | 


## Example Usage

```php
<?php
require('vendor/autoload.php');

use Apideck\Client\Apideck;
use Apideck\Client\ApideckConfiguration;
use Apideck\Client\ApiException;

$config = new ApideckConfiguration('<insert-api-key-here>', '<insert-application-id-here>', '<insert-consumer-id-here>', '<insert-service-id-here>');

$apideck = new Apideck($config);

try {
  $response = $apideck->getHrisApi()->timeOffRequestsAdd($timeOffRequest);
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="timeOffRequestsAll"></a>
# List Time Off Requests


Method: **timeOffRequestsAll**

```php
Apideck->getHrisApi()->timeOffRequestsAll($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **x_apideck_service_id** | **string**| Provide the service id you want to call (e.g., pipedrive). Only needed when a consumer has activated multiple integrations for a Unified API. |
 **cursor** | **string**| Cursor to start from. You can find cursors for next/previous pages in the meta.cursors property of the response. |
 **filter** | [\Apideck\Client\Model\TimeOffRequestsFilter](../models/\Apideck\Client\Model\TimeOffRequestsFilter.md)| Apply filters |
 **raw** | [**bool**] | Include raw response. Mostly used for debugging purposes | (optional) defaults to false
 **limit** | [**int**] | Number of records to return | (optional) defaults to 20



### Response Type

[`\Apideck\Client\Model\GetTimeOffRequestsResponse`](../models/\Apideck\Client\Model\GetTimeOffRequestsResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | TimeOffRequests | 
**400** | Bad Request | 
**401** | Unauthorized | 
**402** | Payment Required | 
**404** | The specified resource was not found | 
**422** | Unprocessable | 
4/5xx | Unexpected error | 


## Example Usage

```php
<?php
require('vendor/autoload.php');

use Apideck\Client\Apideck;
use Apideck\Client\ApideckConfiguration;
use Apideck\Client\ApiException;

$config = new ApideckConfiguration('<insert-api-key-here>', '<insert-application-id-here>', '<insert-consumer-id-here>', '<insert-service-id-here>');

$apideck = new Apideck($config);

try {
  $response = $apideck->getHrisApi()->timeOffRequestsAll();
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="timeOffRequestsDelete"></a>
# Delete Time Off Request


Method: **timeOffRequestsDelete**

```php
Apideck->getHrisApi()->timeOffRequestsDelete($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the record you are acting upon. |
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **x_apideck_service_id** | **string**| Provide the service id you want to call (e.g., pipedrive). Only needed when a consumer has activated multiple integrations for a Unified API. |
 **raw** | [**bool**] | Include raw response. Mostly used for debugging purposes | (optional) defaults to false



### Response Type

[`\Apideck\Client\Model\DeleteTimeOffRequestResponse`](../models/\Apideck\Client\Model\DeleteTimeOffRequestResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | TimeOffRequests | 
**400** | Bad Request | 
**401** | Unauthorized | 
**402** | Payment Required | 
**404** | The specified resource was not found | 
**422** | Unprocessable | 
4/5xx | Unexpected error | 


## Example Usage

```php
<?php
require('vendor/autoload.php');

use Apideck\Client\Apideck;
use Apideck\Client\ApideckConfiguration;
use Apideck\Client\ApiException;

$config = new ApideckConfiguration('<insert-api-key-here>', '<insert-application-id-here>', '<insert-consumer-id-here>', '<insert-service-id-here>');

$apideck = new Apideck($config);

try {
  $response = $apideck->getHrisApi()->timeOffRequestsDelete('id_example');
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="timeOffRequestsOne"></a>
# Get Time Off Request


Method: **timeOffRequestsOne**

```php
Apideck->getHrisApi()->timeOffRequestsOne($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the record you are acting upon. |
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **x_apideck_service_id** | **string**| Provide the service id you want to call (e.g., pipedrive). Only needed when a consumer has activated multiple integrations for a Unified API. |
 **raw** | [**bool**] | Include raw response. Mostly used for debugging purposes | (optional) defaults to false



### Response Type

[`\Apideck\Client\Model\GetTimeOffRequestResponse`](../models/\Apideck\Client\Model\GetTimeOffRequestResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | TimeOffRequests | 
**400** | Bad Request | 
**401** | Unauthorized | 
**402** | Payment Required | 
**404** | The specified resource was not found | 
**422** | Unprocessable | 
4/5xx | Unexpected error | 


## Example Usage

```php
<?php
require('vendor/autoload.php');

use Apideck\Client\Apideck;
use Apideck\Client\ApideckConfiguration;
use Apideck\Client\ApiException;

$config = new ApideckConfiguration('<insert-api-key-here>', '<insert-application-id-here>', '<insert-consumer-id-here>', '<insert-service-id-here>');

$apideck = new Apideck($config);

try {
  $response = $apideck->getHrisApi()->timeOffRequestsOne('id_example');
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="timeOffRequestsUpdate"></a>
# Update Time Off Request


Method: **timeOffRequestsUpdate**

```php
Apideck->getHrisApi()->timeOffRequestsUpdate($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the record you are acting upon. |
 **time_off_request** | [\Apideck\Client\Model\TimeOffRequest](../models/\Apideck\Client\Model\TimeOffRequest.md)|  |
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **x_apideck_service_id** | **string**| Provide the service id you want to call (e.g., pipedrive). Only needed when a consumer has activated multiple integrations for a Unified API. |
 **raw** | [**bool**] | Include raw response. Mostly used for debugging purposes | (optional) defaults to false



### Response Type

[`\Apideck\Client\Model\UpdateTimeOffRequestResponse`](../models/\Apideck\Client\Model\UpdateTimeOffRequestResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | TimeOffRequests | 
**400** | Bad Request | 
**401** | Unauthorized | 
**402** | Payment Required | 
**404** | The specified resource was not found | 
**422** | Unprocessable | 
4/5xx | Unexpected error | 


## Example Usage

```php
<?php
require('vendor/autoload.php');

use Apideck\Client\Apideck;
use Apideck\Client\ApideckConfiguration;
use Apideck\Client\ApiException;

$config = new ApideckConfiguration('<insert-api-key-here>', '<insert-application-id-here>', '<insert-consumer-id-here>', '<insert-service-id-here>');

$apideck = new Apideck($config);

try {
  $response = $apideck->getHrisApi()->timeOffRequestsUpdate('id_example', $timeOffRequest);
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

