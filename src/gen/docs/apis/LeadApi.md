# Apideck.Lead

## Class Name
**LeadApi**

## Methods

* [Create Lead](#leadsAdd)
* [List Leads](#leadsAll)
* [Delete Lead](#leadsDelete)
* [Get Lead](#leadsOne)
* [Update Lead](#leadsUpdate)

<a name="leadsAdd"></a>
# Create Lead


Method: **leadsAdd**

```php
Apideck->getLeadApi()->leadsAdd($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead** | [\Apideck\Client\Model\Lead](../models/\Apideck\Client\Model\Lead.md)|  |
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **x_apideck_service_id** | **string**| Provide the service id you want to call (e.g., pipedrive). Only needed when a consumer has activated multiple integrations for a Unified API. |
 **raw** | [**bool**] | Include raw response. Mostly used for debugging purposes | (optional) defaults to false



### Response Type

[`\Apideck\Client\Model\CreateLeadResponse`](../models/\Apideck\Client\Model\CreateLeadResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**201** | Lead created | 
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
  $response = $apideck->getLeadApi()->leadsAdd($lead);
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="leadsAll"></a>
# List Leads


Method: **leadsAll**

```php
Apideck->getLeadApi()->leadsAll($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **x_apideck_service_id** | **string**| Provide the service id you want to call (e.g., pipedrive). Only needed when a consumer has activated multiple integrations for a Unified API. |
 **cursor** | **string**| Cursor to start from. You can find cursors for next/previous pages in the meta.cursors property of the response. |
 **filter** | [\Apideck\Client\Model\LeadsFilter](../models/\Apideck\Client\Model\LeadsFilter.md)| Apply filters |
 **sort** | [\Apideck\Client\Model\LeadsSort](../models/\Apideck\Client\Model\LeadsSort.md)| Apply sorting |
 **fields** | **string**| The 'fields' parameter allows API users to specify the fields they want to include in the API response. If this parameter is not present, the API will return all available fields. If this parameter is present, only the fields specified in the comma-separated string will be included in the response. Nested properties can also be requested by using a dot notation. <br /><br />Example: &#x60;fields=name,email,addresses.city&#x60;<br /><br />In the example above, the response will only include the fields \&quot;name\&quot;, \&quot;email\&quot; and \&quot;addresses.city\&quot;. If any other fields are available, they will be excluded. |
 **raw** | [**bool**] | Include raw response. Mostly used for debugging purposes | (optional) defaults to false
 **limit** | [**int**] | Number of records to return | (optional) defaults to 20



### Response Type

[`\Apideck\Client\Model\GetLeadsResponse`](../models/\Apideck\Client\Model\GetLeadsResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Leads | 
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
  $response = $apideck->getLeadApi()->leadsAll();
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="leadsDelete"></a>
# Delete Lead


Method: **leadsDelete**

```php
Apideck->getLeadApi()->leadsDelete($data)
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

[`\Apideck\Client\Model\DeleteLeadResponse`](../models/\Apideck\Client\Model\DeleteLeadResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Lead deleted | 
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
  $response = $apideck->getLeadApi()->leadsDelete('id_example');
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="leadsOne"></a>
# Get Lead


Method: **leadsOne**

```php
Apideck->getLeadApi()->leadsOne($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the record you are acting upon. |
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **x_apideck_service_id** | **string**| Provide the service id you want to call (e.g., pipedrive). Only needed when a consumer has activated multiple integrations for a Unified API. |
 **fields** | **string**| The 'fields' parameter allows API users to specify the fields they want to include in the API response. If this parameter is not present, the API will return all available fields. If this parameter is present, only the fields specified in the comma-separated string will be included in the response. Nested properties can also be requested by using a dot notation. <br /><br />Example: &#x60;fields=name,email,addresses.city&#x60;<br /><br />In the example above, the response will only include the fields \&quot;name\&quot;, \&quot;email\&quot; and \&quot;addresses.city\&quot;. If any other fields are available, they will be excluded. |
 **raw** | [**bool**] | Include raw response. Mostly used for debugging purposes | (optional) defaults to false



### Response Type

[`\Apideck\Client\Model\GetLeadResponse`](../models/\Apideck\Client\Model\GetLeadResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Lead | 
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
  $response = $apideck->getLeadApi()->leadsOne('id_example');
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="leadsUpdate"></a>
# Update Lead


Method: **leadsUpdate**

```php
Apideck->getLeadApi()->leadsUpdate($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the record you are acting upon. |
 **lead** | [\Apideck\Client\Model\Lead](../models/\Apideck\Client\Model\Lead.md)|  |
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **x_apideck_service_id** | **string**| Provide the service id you want to call (e.g., pipedrive). Only needed when a consumer has activated multiple integrations for a Unified API. |
 **raw** | [**bool**] | Include raw response. Mostly used for debugging purposes | (optional) defaults to false



### Response Type

[`\Apideck\Client\Model\UpdateLeadResponse`](../models/\Apideck\Client\Model\UpdateLeadResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Lead updated | 
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
  $response = $apideck->getLeadApi()->leadsUpdate('id_example', $lead);
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

