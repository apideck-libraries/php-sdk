# Apideck.Vault

## Class Name
**VaultApi**

## Methods

* [Get Resource Settings](#connectionSettingsAll)
* [Update Settings](#connectionSettingsUpdate)
* [Get All Connections](#connectionsAll)
* [Deletes A Connection](#connectionsDelete)
* [Import Connection](#connectionsImport)
* [Get Connection](#connectionsOne)
* [Authorize Access Token](#connectionsToken)
* [Update Connection](#connectionsUpdate)
* [Consumer Request Counts](#consumerRequestCountsAll)
* [Create Consumer](#consumersAdd)
* [Get All Consumers](#consumersAll)
* [Delete Consumer](#consumersDelete)
* [Get Consumer](#consumersOne)
* [Update Consumer](#consumersUpdate)
* [Get Resource Custom Fields](#customFieldsAll)
* [Get All Consumer Request Logs](#logsAll)
* [Create Session](#sessionsCreate)

<a name="connectionSettingsAll"></a>
# Get Resource Settings


Method: **connectionSettingsAll**

```php
Apideck->getVaultApi()->connectionSettingsAll($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unified_api** | **string**| Unified API |
 **service_id** | **string**| Service ID of the resource to return |
 **resource** | **string**| Name of the resource (plural) |
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |



### Response Type

[`\Apideck\Client\Model\GetConnectionResponse`](../models/\Apideck\Client\Model\GetConnectionResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Connection | 
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
  $response = $apideck->getVaultApi()->connectionSettingsAll('crm', 'pipedrive', 'leads');
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="connectionSettingsUpdate"></a>
# Update Settings


Method: **connectionSettingsUpdate**

```php
Apideck->getVaultApi()->connectionSettingsUpdate($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**| Service ID of the resource to return |
 **unified_api** | **string**| Unified API |
 **resource** | **string**| Name of the resource (plural) |
 **connection** | [\Apideck\Client\Model\Connection](../models/\Apideck\Client\Model\Connection.md)| Fields that need to be updated on the resource |
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |



### Response Type

[`\Apideck\Client\Model\UpdateConnectionResponse`](../models/\Apideck\Client\Model\UpdateConnectionResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Connection updated | 
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
  $response = $apideck->getVaultApi()->connectionSettingsUpdate('pipedrive', 'crm', 'leads', $connection);
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="connectionsAll"></a>
# Get All Connections


Method: **connectionsAll**

```php
Apideck->getVaultApi()->connectionsAll($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **api** | **string**| Scope results to Unified API |
 **configured** | **bool**| Scopes results to connections that have been configured or not |



### Response Type

[`\Apideck\Client\Model\GetConnectionsResponse`](../models/\Apideck\Client\Model\GetConnectionsResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Connections | 
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
  $response = $apideck->getVaultApi()->connectionsAll();
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="connectionsDelete"></a>
# Deletes A Connection


Method: **connectionsDelete**

```php
Apideck->getVaultApi()->connectionsDelete($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**| Service ID of the resource to return |
 **unified_api** | **string**| Unified API |
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |



### Response Type

void (empty response body)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**204** | Resource deleted | 
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
  $response = $apideck->getVaultApi()->connectionsDelete('pipedrive', 'crm');
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="connectionsImport"></a>
# Import Connection


Method: **connectionsImport**

```php
Apideck->getVaultApi()->connectionsImport($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**| Service ID of the resource to return |
 **unified_api** | **string**| Unified API |
 **connection_import_data** | [\Apideck\Client\Model\ConnectionImportData](../models/\Apideck\Client\Model\ConnectionImportData.md)| Fields that need to be persisted on the resource |
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |



### Response Type

[`\Apideck\Client\Model\CreateConnectionResponse`](../models/\Apideck\Client\Model\CreateConnectionResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Connection created | 
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
  $response = $apideck->getVaultApi()->connectionsImport('pipedrive', 'crm', $connection);
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="connectionsOne"></a>
# Get Connection


Method: **connectionsOne**

```php
Apideck->getVaultApi()->connectionsOne($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**| Service ID of the resource to return |
 **unified_api** | **string**| Unified API |
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |



### Response Type

[`\Apideck\Client\Model\GetConnectionResponse`](../models/\Apideck\Client\Model\GetConnectionResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Connection | 
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
  $response = $apideck->getVaultApi()->connectionsOne('pipedrive', 'crm');
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="connectionsToken"></a>
# Authorize Access Token


Method: **connectionsToken**

```php
Apideck->getVaultApi()->connectionsToken($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**| Service ID of the resource to return |
 **unified_api** | **string**| Unified API |
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **body** | **object**|  |



### Response Type

[`\Apideck\Client\Model\GetConnectionResponse`](../models/\Apideck\Client\Model\GetConnectionResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Connection | 
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
  $response = $apideck->getVaultApi()->connectionsToken('pipedrive', 'crm', $connectionsToken);
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="connectionsUpdate"></a>
# Update Connection


Method: **connectionsUpdate**

```php
Apideck->getVaultApi()->connectionsUpdate($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**| Service ID of the resource to return |
 **unified_api** | **string**| Unified API |
 **connection** | [\Apideck\Client\Model\Connection](../models/\Apideck\Client\Model\Connection.md)| Fields that need to be updated on the resource |
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |



### Response Type

[`\Apideck\Client\Model\UpdateConnectionResponse`](../models/\Apideck\Client\Model\UpdateConnectionResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Connection updated | 
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
  $response = $apideck->getVaultApi()->connectionsUpdate('pipedrive', 'crm', $connection);
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="consumerRequestCountsAll"></a>
# Consumer Request Counts


Method: **consumerRequestCountsAll**

```php
Apideck->getVaultApi()->consumerRequestCountsAll($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consumer_id** | **string**| ID of the consumer to return |
 **start_datetime** | **string**| Scopes results to requests that happened after datetime |
 **end_datetime** | **string**| Scopes results to requests that happened before datetime |
 **x_apideck_app_id** | **string**| The ID of your Unify application |



### Response Type

[`\Apideck\Client\Model\ConsumerRequestCountsInDateRangeResponse`](../models/\Apideck\Client\Model\ConsumerRequestCountsInDateRangeResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Consumers Request Counts within Date Range | 
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
  $response = $apideck->getVaultApi()->consumerRequestCountsAll('test_user_id', '2021-05-01T12:00:00.000Z', '2021-05-30T12:00:00.000Z');
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="consumersAdd"></a>
# Create Consumer


Method: **consumersAdd**

```php
Apideck->getVaultApi()->consumersAdd($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consumer** | [\Apideck\Client\Model\Consumer](../models/\Apideck\Client\Model\Consumer.md)|  |
 **x_apideck_app_id** | **string**| The ID of your Unify application |



### Response Type

[`\Apideck\Client\Model\CreateConsumerResponse`](../models/\Apideck\Client\Model\CreateConsumerResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Consumer created | 
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
  $response = $apideck->getVaultApi()->consumersAdd($consumer);
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="consumersAll"></a>
# Get All Consumers


Method: **consumersAll**

```php
Apideck->getVaultApi()->consumersAll($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **cursor** | **string**| Cursor to start from. You can find cursors for next/previous pages in the meta.cursors property of the response. |
 **limit** | [**int**] | Number of results to return. Minimum 1, Maximum 200, Default 20 | (optional) defaults to 20



### Response Type

[`\Apideck\Client\Model\GetConsumersResponse`](../models/\Apideck\Client\Model\GetConsumersResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Consumers | 
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
  $response = $apideck->getVaultApi()->consumersAll();
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="consumersDelete"></a>
# Delete Consumer


Method: **consumersDelete**

```php
Apideck->getVaultApi()->consumersDelete($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consumer_id** | **string**| ID of the consumer to return |
 **x_apideck_app_id** | **string**| The ID of your Unify application |



### Response Type

[`\Apideck\Client\Model\DeleteConsumerResponse`](../models/\Apideck\Client\Model\DeleteConsumerResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Consumer deleted | 
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
  $response = $apideck->getVaultApi()->consumersDelete('test_user_id');
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="consumersOne"></a>
# Get Consumer


Method: **consumersOne**

```php
Apideck->getVaultApi()->consumersOne($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consumer_id** | **string**| ID of the consumer to return |
 **x_apideck_app_id** | **string**| The ID of your Unify application |



### Response Type

[`\Apideck\Client\Model\GetConsumerResponse`](../models/\Apideck\Client\Model\GetConsumerResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Consumer | 
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
  $response = $apideck->getVaultApi()->consumersOne('test_user_id');
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="consumersUpdate"></a>
# Update Consumer


Method: **consumersUpdate**

```php
Apideck->getVaultApi()->consumersUpdate($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **consumer_id** | **string**| ID of the consumer to return |
 **update_consumer_request** | [\Apideck\Client\Model\UpdateConsumerRequest](../models/\Apideck\Client\Model\UpdateConsumerRequest.md)|  |
 **x_apideck_app_id** | **string**| The ID of your Unify application |



### Response Type

[`\Apideck\Client\Model\UpdateConsumerResponse`](../models/\Apideck\Client\Model\UpdateConsumerResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Consumer updated | 
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
  $response = $apideck->getVaultApi()->consumersUpdate('test_user_id', $consumer);
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="customFieldsAll"></a>
# Get Resource Custom Fields


Method: **customFieldsAll**

```php
Apideck->getVaultApi()->customFieldsAll($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unified_api** | **string**| Unified API |
 **service_id** | **string**| Service ID of the resource to return |
 **resource** | **string**| Name of the resource (plural) |
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |



### Response Type

[`\Apideck\Client\Model\GetCustomFieldsResponse`](../models/\Apideck\Client\Model\GetCustomFieldsResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Custom mapping | 
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
  $response = $apideck->getVaultApi()->customFieldsAll('crm', 'pipedrive', 'leads');
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="logsAll"></a>
# Get All Consumer Request Logs


Method: **logsAll**

```php
Apideck->getVaultApi()->logsAll($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **filter** | [\Apideck\Client\Model\LogsFilter](../models/\Apideck\Client\Model\LogsFilter.md)| Filter results |
 **cursor** | **string**| Cursor to start from. You can find cursors for next/previous pages in the meta.cursors property of the response. |
 **limit** | [**int**] | Number of results to return. Minimum 1, Maximum 200, Default 20 | (optional) defaults to 20



### Response Type

[`\Apideck\Client\Model\GetLogsResponse`](../models/\Apideck\Client\Model\GetLogsResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Logs | 
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
  $response = $apideck->getVaultApi()->logsAll();
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="sessionsCreate"></a>
# Create Session


Method: **sessionsCreate**

```php
Apideck->getVaultApi()->sessionsCreate($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_apideck_consumer_id** | **string**| ID of the consumer which you want to get or push data from |
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **session** | [\Apideck\Client\Model\Session](../models/\Apideck\Client\Model\Session.md)| Additional redirect uri and/or consumer metadata |



### Response Type

[`\Apideck\Client\Model\CreateSessionResponse`](../models/\Apideck\Client\Model\CreateSessionResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Session created | 
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
  $response = $apideck->getVaultApi()->sessionsCreate($session);
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

