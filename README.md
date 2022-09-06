# Redsys

A PHP package to platform Redsys

[![tests](https://github.com/descom-es/redsys/actions/workflows/test.yml/badge.svg)](https://github.com/descom-es/redsys/actions/workflows/test.yml)
[![analyse](https://github.com/descom-es/redsys/actions/workflows/analyse.yml/badge.svg)](https://github.com/descom-es/redsys/actions/workflows/analyse.yml)
[![Fix Styles](https://github.com/descom-es/redsys/actions/workflows/fix_style.yml/badge.svg)](https://github.com/descom-es/redsys/actions/workflows/fix_style.yml)

## Install

Via Composer

```bash
composer require descom/redsys
```

## Usage

### Generate Redirect From to payment

```php
use Descom\Redsys\Redsys;

$redsys = Redsys::sandbox([
    'code' => 999008881,
    'terminal' => 1,
    'signatureKey' => 'sq7HjrUOBfKmC576ILgskD5srU870gJ7',
]);

$orderId = '123456';
$amount = 12.05;


echo $redsys
    ->generateRedirectPayment($orderId, $amount, 'http://localhost:8000')
    ->redirect();
```

### Capture payment notification

```php
use Descom\Redsys\Redsys;

$redsys = Redsys::sandbox([
    'code' => 999008881,
    'terminal' => 1,
    'signatureKey' => 'sq7HjrUOBfKmC576ILgskD5srU870gJ7',
]);

$response = $redsys->capturePaymentNotification($_POST);

if (! $response->successful()) {
    $errorCode = $response->errorCode;
    $responseString = json_encode($response->toArray());

    throw new \Exception("Error processing payment [$errorCode]. Response: " . $responseString);
}

$order = $response->order;
$authorizationCode = $response->authorizationCode;
//
```

## Testing

``` bash
composer test
```
