# Apideck.Connector

## Class Name
**ConnectorApi**

## Methods

* [Get API Resource Coverage](#apiResourceCoverageOne)
* [Get API Resource](#apiResourcesOne)
* [List APIs](#apisAll)
* [Get API](#apisOne)
* [Get Connector Doc Content](#connectorDocsOne)
* [Get Connector Resource](#connectorResourcesOne)
* [List Connectors](#connectorsAll)
* [Get Connector](#connectorsOne)

<a name="apiResourceCoverageOne"></a>
# Get API Resource Coverage


Method: **apiResourceCoverageOne**

```php
Apideck->getConnectorApi()->apiResourceCoverageOne($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the record you are acting upon. |
 **resource_id** | **string**| ID of the resource you are acting upon. |
 **x_apideck_app_id** | **string**| The ID of your Unify application |



### Response Type

[`\Apideck\Client\Model\GetApiResourceCoverageResponse`](../models/\Apideck\Client\Model\GetApiResourceCoverageResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | ApiResources | 
**401** | Unauthorized | 
**402** | Payment Required | 
**404** | The specified resource was not found | 
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
  $response = $apideck->getConnectorApi()->apiResourceCoverageOne('id_example', 'resource_id_example');
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="apiResourcesOne"></a>
# Get API Resource


Method: **apiResourcesOne**

```php
Apideck->getConnectorApi()->apiResourcesOne($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the record you are acting upon. |
 **resource_id** | **string**| ID of the resource you are acting upon. |
 **x_apideck_app_id** | **string**| The ID of your Unify application |



### Response Type

[`\Apideck\Client\Model\GetApiResourceResponse`](../models/\Apideck\Client\Model\GetApiResourceResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | ApiResources | 
**401** | Unauthorized | 
**402** | Payment Required | 
**404** | The specified resource was not found | 
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
  $response = $apideck->getConnectorApi()->apiResourcesOne('id_example', 'resource_id_example');
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="apisAll"></a>
# List APIs


Method: **apisAll**

```php
Apideck->getConnectorApi()->apisAll($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **cursor** | **string**| Cursor to start from. You can find cursors for next/previous pages in the meta.cursors property of the response. |
 **filter** | [\Apideck\Client\Model\ApisFilter](../models/\Apideck\Client\Model\ApisFilter.md)| Apply filters |
 **limit** | [**int**] | Number of records to return | (optional) defaults to 20



### Response Type

[`\Apideck\Client\Model\GetApisResponse`](../models/\Apideck\Client\Model\GetApisResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Apis | 
**400** | Bad Request | 
**401** | Unauthorized | 
**402** | Payment Required | 
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
  $response = $apideck->getConnectorApi()->apisAll();
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="apisOne"></a>
# Get API


Method: **apisOne**

```php
Apideck->getConnectorApi()->apisOne($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the record you are acting upon. |
 **x_apideck_app_id** | **string**| The ID of your Unify application |



### Response Type

[`\Apideck\Client\Model\GetApiResponse`](../models/\Apideck\Client\Model\GetApiResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Apis | 
**401** | Unauthorized | 
**402** | Payment Required | 
**404** | The specified resource was not found | 
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
  $response = $apideck->getConnectorApi()->apisOne('id_example');
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="connectorDocsOne"></a>
# Get Connector Doc Content


Method: **connectorDocsOne**

```php
Apideck->getConnectorApi()->connectorDocsOne($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the record you are acting upon. |
 **doc_id** | **string**| ID of the Doc |
 **x_apideck_app_id** | **string**| The ID of your Unify application |



### Response Type

[`\Apideck\Client\Model\GetConnectorResponse`](../models/\Apideck\Client\Model\GetConnectorResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Connectors | 
**401** | Unauthorized | 
**402** | Payment Required | 
**404** | The specified resource was not found | 
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
  $response = $apideck->getConnectorApi()->connectorDocsOne('id_example', 'doc_id_example');
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="connectorResourcesOne"></a>
# Get Connector Resource


Method: **connectorResourcesOne**

```php
Apideck->getConnectorApi()->connectorResourcesOne($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the record you are acting upon. |
 **resource_id** | **string**| ID of the resource you are acting upon. |
 **x_apideck_app_id** | **string**| The ID of your Unify application |



### Response Type

[`\Apideck\Client\Model\GetConnectorResourceResponse`](../models/\Apideck\Client\Model\GetConnectorResourceResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | ConnectorResources | 
**401** | Unauthorized | 
**402** | Payment Required | 
**404** | The specified resource was not found | 
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
  $response = $apideck->getConnectorApi()->connectorResourcesOne('id_example', 'resource_id_example');
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="connectorsAll"></a>
# List Connectors


Method: **connectorsAll**

```php
Apideck->getConnectorApi()->connectorsAll($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **cursor** | **string**| Cursor to start from. You can find cursors for next/previous pages in the meta.cursors property of the response. |
 **filter** | [\Apideck\Client\Model\ConnectorsFilter](../models/\Apideck\Client\Model\ConnectorsFilter.md)| Apply filters |
 **limit** | [**int**] | Number of records to return | (optional) defaults to 20



### Response Type

[`\Apideck\Client\Model\GetConnectorsResponse`](../models/\Apideck\Client\Model\GetConnectorsResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Connectors | 
**400** | Bad Request | 
**401** | Unauthorized | 
**402** | Payment Required | 
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
  $response = $apideck->getConnectorApi()->connectorsAll();
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="connectorsOne"></a>
# Get Connector


Method: **connectorsOne**

```php
Apideck->getConnectorApi()->connectorsOne($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the record you are acting upon. |
 **x_apideck_app_id** | **string**| The ID of your Unify application |



### Response Type

[`\Apideck\Client\Model\GetConnectorResponse`](../models/\Apideck\Client\Model\GetConnectorResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Connectors | 
**401** | Unauthorized | 
**402** | Payment Required | 
**404** | The specified resource was not found | 
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
  $response = $apideck->getConnectorApi()->connectorsOne('id_example');
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

