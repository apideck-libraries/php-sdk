# Apideck.Webhook

## Class Name
**WebhookApi**

## Methods

* [List Event Logs](#eventLogsAll)
* [Create Webhook Subscription](#webhooksAdd)
* [List Webhook Subscriptions](#webhooksAll)
* [Delete Webhook Subscription](#webhooksDelete)
* [Get Webhook Subscription](#webhooksOne)
* [Update Webhook Subscription](#webhooksUpdate)

<a name="eventLogsAll"></a>
# List Event Logs


Method: **eventLogsAll**

```php
Apideck->getWebhookApi()->eventLogsAll($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **cursor** | **string**| Cursor to start from. You can find cursors for next/previous pages in the meta.cursors property of the response. |
 **filter** | [\Apideck\Client\Model\WebhookEventLogsFilter](../models/\Apideck\Client\Model\WebhookEventLogsFilter.md)| Filter results |
 **limit** | [**int**] | Number of records to return | (optional) defaults to 20



### Response Type

[`\Apideck\Client\Model\GetWebhookEventLogsResponse`](../models/\Apideck\Client\Model\GetWebhookEventLogsResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | EventLogs | 
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
  $response = $apideck->getWebhookApi()->eventLogsAll();
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="webhooksAdd"></a>
# Create Webhook Subscription


Method: **webhooksAdd**

```php
Apideck->getWebhookApi()->webhooksAdd($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_webhook_request** | [\Apideck\Client\Model\CreateWebhookRequest](../models/\Apideck\Client\Model\CreateWebhookRequest.md)|  |
 **x_apideck_app_id** | **string**| The ID of your Unify application |



### Response Type

[`\Apideck\Client\Model\CreateWebhookResponse`](../models/\Apideck\Client\Model\CreateWebhookResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**201** | Webhooks | 
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
  $response = $apideck->getWebhookApi()->webhooksAdd($webhook);
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="webhooksAll"></a>
# List Webhook Subscriptions


Method: **webhooksAll**

```php
Apideck->getWebhookApi()->webhooksAll($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_apideck_app_id** | **string**| The ID of your Unify application |
 **cursor** | **string**| Cursor to start from. You can find cursors for next/previous pages in the meta.cursors property of the response. |
 **limit** | [**int**] | Number of records to return | (optional) defaults to 20



### Response Type

[`\Apideck\Client\Model\GetWebhooksResponse`](../models/\Apideck\Client\Model\GetWebhooksResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Webhooks | 
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
  $response = $apideck->getWebhookApi()->webhooksAll();
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="webhooksDelete"></a>
# Delete Webhook Subscription


Method: **webhooksDelete**

```php
Apideck->getWebhookApi()->webhooksDelete($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| JWT Webhook token that represents the unifiedApi and applicationId associated to the event source. |
 **x_apideck_app_id** | **string**| The ID of your Unify application |



### Response Type

[`\Apideck\Client\Model\DeleteWebhookResponse`](../models/\Apideck\Client\Model\DeleteWebhookResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Webhooks | 
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
  $response = $apideck->getWebhookApi()->webhooksDelete('id_example');
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="webhooksOne"></a>
# Get Webhook Subscription


Method: **webhooksOne**

```php
Apideck->getWebhookApi()->webhooksOne($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| JWT Webhook token that represents the unifiedApi and applicationId associated to the event source. |
 **x_apideck_app_id** | **string**| The ID of your Unify application |



### Response Type

[`\Apideck\Client\Model\GetWebhookResponse`](../models/\Apideck\Client\Model\GetWebhookResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Webhooks | 
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
  $response = $apideck->getWebhookApi()->webhooksOne('id_example');
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

<a name="webhooksUpdate"></a>
# Update Webhook Subscription


Method: **webhooksUpdate**

```php
Apideck->getWebhookApi()->webhooksUpdate($data)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| JWT Webhook token that represents the unifiedApi and applicationId associated to the event source. |
 **update_webhook_request** | [\Apideck\Client\Model\UpdateWebhookRequest](../models/\Apideck\Client\Model\UpdateWebhookRequest.md)|  |
 **x_apideck_app_id** | **string**| The ID of your Unify application |



### Response Type

[`\Apideck\Client\Model\UpdateWebhookResponse`](../models/\Apideck\Client\Model\UpdateWebhookResponse.md)



### HTTP response details
| Status code | Description |
|-------------|-------------|
**200** | Webhooks | 
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
  $response = $apideck->getWebhookApi()->webhooksUpdate('id_example', $webhook);
  var_dump('API called successfully', $response);
} catch(ApiException $error) {
  var_dump('API called failed', $error);
}

```


[[Back to top]](#) [[Back to API list]](../../../../README.md#documentation-for-api-endpoints) [[Back to README]](../../../../README.md)

