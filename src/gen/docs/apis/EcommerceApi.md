# Apideck.Ecommerce

## Class Name
**EcommerceApi**

## Methods

* [List Customers](#customersAll)
* [Get Customer](#customersOne)
* [List Orders](#ordersAll)
* [Get Order](#ordersOne)
* [List Products](#productsAll)
* [Get Product](#productsOne)
* [Get Store](#storesOne)

<a name="customersAll"></a>
# List Customers


Method: **customersAll**

```php
Apideck->getEcommerceApi()->customersAll($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **x_apideck_service_id** | **string**| Provide the service id you want to call (e.g., pipedrive). Only needed when a consumer has activated multiple integrations for a Unified API. |
 **cursor** | **string**| Cursor to start from. You can find cursors for next/previous pages in the meta.cursors property of the response. |
 **filter** | [\Apideck\Client\Model\EcommerceCustomersFilter](../models/\Apideck\Client\Model\EcommerceCustomersFilter.md)| Apply filters |
 **pass_through** | [\Apideck\Client\Model\PassThroughQuery](../models/\Apideck\Client\Model\PassThroughQuery.md)| Optional unmapped key/values that will be passed through to downstream as query parameters. Ie: ?pass_through[search]=leads becomes ?search=leads |
 **fields** | **string**| The 'fields' parameter allows API users to specify the fields they want to include in the API response. If this parameter is not present, the API will return all available fields. If this parameter is present, only the fields specified in the comma-separated string will be included in the response. Nested properties can also be requested by using a dot notation. <br /><br />Example: &#x60;fields=name,email,addresses.city&#x60;<br /><br />In the example above, the response will only include the fields \&quot;name\&quot;, \&quot;email\&quot; and \&quot;addresses.city\&quot;. If any other fields are available, they will be excluded. |
 **raw** | [**bool**] | Include raw response. Mostly used for debugging purposes | (optional) defaults to false
 **limit** | [**int**] | Number of results to return. Minimum 1, Maximum 200, Default 20 | (optional) defaults to 20



### Response Type

[`\Apideck\Client\Model\GetEcommerceCustomersResponse`](../models/\Apideck\Client\Model\GetEcommerceCustomersResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Customers | 
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
  $response = $apideck->getEcommerceApi()->customersAll();
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="customersOne"></a>
# Get Customer


Method: **customersOne**

```php
Apideck->getEcommerceApi()->customersOne($data)
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

[`\Apideck\Client\Model\GetEcommerceCustomerResponse`](../models/\Apideck\Client\Model\GetEcommerceCustomerResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Customers | 
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
  $response = $apideck->getEcommerceApi()->customersOne('id_example');
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="ordersAll"></a>
# List Orders


Method: **ordersAll**

```php
Apideck->getEcommerceApi()->ordersAll($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **x_apideck_service_id** | **string**| Provide the service id you want to call (e.g., pipedrive). Only needed when a consumer has activated multiple integrations for a Unified API. |
 **cursor** | **string**| Cursor to start from. You can find cursors for next/previous pages in the meta.cursors property of the response. |
 **filter** | [\Apideck\Client\Model\EcommerceOrdersFilter](../models/\Apideck\Client\Model\EcommerceOrdersFilter.md)| Apply filters |
 **sort** | [\Apideck\Client\Model\OrdersSort](../models/\Apideck\Client\Model\OrdersSort.md)| Apply sorting |
 **pass_through** | [\Apideck\Client\Model\PassThroughQuery](../models/\Apideck\Client\Model\PassThroughQuery.md)| Optional unmapped key/values that will be passed through to downstream as query parameters. Ie: ?pass_through[search]=leads becomes ?search=leads |
 **fields** | **string**| The 'fields' parameter allows API users to specify the fields they want to include in the API response. If this parameter is not present, the API will return all available fields. If this parameter is present, only the fields specified in the comma-separated string will be included in the response. Nested properties can also be requested by using a dot notation. <br /><br />Example: &#x60;fields=name,email,addresses.city&#x60;<br /><br />In the example above, the response will only include the fields \&quot;name\&quot;, \&quot;email\&quot; and \&quot;addresses.city\&quot;. If any other fields are available, they will be excluded. |
 **raw** | [**bool**] | Include raw response. Mostly used for debugging purposes | (optional) defaults to false
 **limit** | [**int**] | Number of results to return. Minimum 1, Maximum 200, Default 20 | (optional) defaults to 20



### Response Type

[`\Apideck\Client\Model\GetEcommerceOrdersResponse`](../models/\Apideck\Client\Model\GetEcommerceOrdersResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Orders | 
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
  $response = $apideck->getEcommerceApi()->ordersAll();
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="ordersOne"></a>
# Get Order


Method: **ordersOne**

```php
Apideck->getEcommerceApi()->ordersOne($data)
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

[`\Apideck\Client\Model\GetEcommerceOrderResponse`](../models/\Apideck\Client\Model\GetEcommerceOrderResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Orders | 
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
  $response = $apideck->getEcommerceApi()->ordersOne('id_example');
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="productsAll"></a>
# List Products


Method: **productsAll**

```php
Apideck->getEcommerceApi()->productsAll($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **x_apideck_service_id** | **string**| Provide the service id you want to call (e.g., pipedrive). Only needed when a consumer has activated multiple integrations for a Unified API. |
 **cursor** | **string**| Cursor to start from. You can find cursors for next/previous pages in the meta.cursors property of the response. |
 **pass_through** | [\Apideck\Client\Model\PassThroughQuery](../models/\Apideck\Client\Model\PassThroughQuery.md)| Optional unmapped key/values that will be passed through to downstream as query parameters. Ie: ?pass_through[search]=leads becomes ?search=leads |
 **fields** | **string**| The 'fields' parameter allows API users to specify the fields they want to include in the API response. If this parameter is not present, the API will return all available fields. If this parameter is present, only the fields specified in the comma-separated string will be included in the response. Nested properties can also be requested by using a dot notation. <br /><br />Example: &#x60;fields=name,email,addresses.city&#x60;<br /><br />In the example above, the response will only include the fields \&quot;name\&quot;, \&quot;email\&quot; and \&quot;addresses.city\&quot;. If any other fields are available, they will be excluded. |
 **raw** | [**bool**] | Include raw response. Mostly used for debugging purposes | (optional) defaults to false
 **limit** | [**int**] | Number of results to return. Minimum 1, Maximum 200, Default 20 | (optional) defaults to 20



### Response Type

[`\Apideck\Client\Model\GetProductsResponse`](../models/\Apideck\Client\Model\GetProductsResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Products | 
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
  $response = $apideck->getEcommerceApi()->productsAll();
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="productsOne"></a>
# Get Product


Method: **productsOne**

```php
Apideck->getEcommerceApi()->productsOne($data)
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

[`\Apideck\Client\Model\GetProductResponse`](../models/\Apideck\Client\Model\GetProductResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Products | 
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
  $response = $apideck->getEcommerceApi()->productsOne('id_example');
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="storesOne"></a>
# Get Store


Method: **storesOne**

```php
Apideck->getEcommerceApi()->storesOne($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **x_apideck_service_id** | **string**| Provide the service id you want to call (e.g., pipedrive). Only needed when a consumer has activated multiple integrations for a Unified API. |
 **fields** | **string**| The 'fields' parameter allows API users to specify the fields they want to include in the API response. If this parameter is not present, the API will return all available fields. If this parameter is present, only the fields specified in the comma-separated string will be included in the response. Nested properties can also be requested by using a dot notation. <br /><br />Example: &#x60;fields=name,email,addresses.city&#x60;<br /><br />In the example above, the response will only include the fields \&quot;name\&quot;, \&quot;email\&quot; and \&quot;addresses.city\&quot;. If any other fields are available, they will be excluded. |
 **raw** | [**bool**] | Include raw response. Mostly used for debugging purposes | (optional) defaults to false



### Response Type

[`\Apideck\Client\Model\GetStoreResponse`](../models/\Apideck\Client\Model\GetStoreResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Stores | 
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
  $response = $apideck->getEcommerceApi()->storesOne();
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

