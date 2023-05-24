
# Apideck PHP SDK

## Table of Contents

- [Table of Contents](#table-of-contents)
- [Installation](#installation)
- [Getting started](#getting-started)
- [Example](#example)
- [Support](#support)
- [License](#license)

## Installation

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

Install the latest SDK using composer:

```console
$ composer require apideck-libraries/php-sdk
```

## Getting started

The module supports all Apideck API endpoints. For complete information about the API, head
to the [docs][2].


### Configuration

A new Apideck instance is initialized by passing in required settings to the configuration.

```<?php
require('vendor/autoload.php');

use Apideck\Client\Apideck;
use Apideck\Client\ApideckConfiguration;

$config = new ApideckConfiguration('<insert-api-key-here>', '<insert-application-id-here>', '<insert-consumer-id-here>');
$apideck = new Apideck($config);
```

Top level parameters (except for apiKey) can be overriden in specific resource calls.

```php

<?php
// Declare Unify Api to use
$crmApi = $apideck->getCrmApi();

// Override consumerId serviceId as declared in initial configuration for this operation.
$serviceId = 'salesforce';
$response = $crmApi->contactsAll(
  false,
  null,
  null,
  $serviceId,
  null,
  10
);
```

## Example

Retrieving a list of all contacts and updating the first record with a new address.

```php
<?php
require('vendor/autoload.php');

use Apideck\Client\Apideck;
use Apideck\Client\ApideckConfiguration;
use Apideck\Client\Model\Contact;
use Apideck\Client\Model\Address;
use Apideck\Client\Model\PhoneNumber;

$config = new ApideckConfiguration('<insert-api-key-here>', '<insert-application-id-here>', '<insert-consumer-id-here>');
$apideck = new Apideck($config);

$crmApi = $apideck->getCrmApi();

$response = $crmApi->contactsAll(false, null, null, $serviceId, null, 10);

$data = $response->getData();
$result = $crmApi->contactsUpdate([
  $data[0]->getId(),
  new Contact([
    "name" => "John Doe",
    "first_name" => "John",
    "last_name" => "Doe",
    "addresses" => [
      new Address([
        "city" => "Hoboken",
        "line1" => "Streetname 19",
        "state" => "NY"
      ])
    ],
    "phone_numbers" => [
      new PhoneNumber([
        "number" => "0486565656",
        "phoneType" => "home"
      ])
    ]
  ])
]);

var_dump($result);
```

<a name="documentation-for-api-endpoints"></a>
## Apideck Unified Apis

The following Apis are currently available:

### AccountingApi

Read the full documentation of the AccountingApi [here](./src/gen/docs/apis/AccountingApi.md).

### AtsApi

Read the full documentation of the AtsApi [here](./src/gen/docs/apis/AtsApi.md).

### ConnectorApi

Read the full documentation of the ConnectorApi [here](./src/gen/docs/apis/ConnectorApi.md).

### CrmApi

Read the full documentation of the CrmApi [here](./src/gen/docs/apis/CrmApi.md).

### EcommerceApi

Read the full documentation of the EcommerceApi [here](./src/gen/docs/apis/EcommerceApi.md).

### FileStorageApi

Read the full documentation of the FileStorageApi [here](./src/gen/docs/apis/FileStorageApi.md).

### HrisApi

Read the full documentation of the HrisApi [here](./src/gen/docs/apis/HrisApi.md).

### IssueTrackingApi

Read the full documentation of the IssueTrackingApi [here](./src/gen/docs/apis/IssueTrackingApi.md).

### LeadApi

Read the full documentation of the LeadApi [here](./src/gen/docs/apis/LeadApi.md).

### PosApi

Read the full documentation of the PosApi [here](./src/gen/docs/apis/PosApi.md).

### SmsApi

Read the full documentation of the SmsApi [here](./src/gen/docs/apis/SmsApi.md).

### VaultApi

Read the full documentation of the VaultApi [here](./src/gen/docs/apis/VaultApi.md).

### WebhookApi

Read the full documentation of the WebhookApi [here](./src/gen/docs/apis/WebhookApi.md).


## Support

Open an [issue][3]!

## License

[MIT][4]

[1]: https://apideck.com
[2]: https://developers.apideck.com/
[3]: https://github.com/apideck-libraries/php-sdk/issues/new
[4]: https://github.com/apideck-libraries/php-sdk/blob/master/LICENSE
