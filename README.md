# Redsys

A PHP package for Redsys payment gateway integration

[![tests](https://github.com/descom-es/redsys/actions/workflows/test.yml/badge.svg)](https://github.com/descom-es/redsys/actions/workflows/test.yml)
[![analyse](https://github.com/descom-es/redsys/actions/workflows/analyse.yml/badge.svg)](https://github.com/descom-es/redsys/actions/workflows/analyse.yml)
[![Fix Styles](https://github.com/descom-es/redsys/actions/workflows/fix_style.yml/badge.svg)](https://github.com/descom-es/redsys/actions/workflows/fix_style.yml)

## Table of Contents

- [Installation](#installation)
- [Configuration](#configuration)
- [Payment Methods](#payment-methods)
  - [Redirect Payment](#redirect-payment)
  - [InSite Payment (EMV 3DS)](#insite-payment-emv-3ds)
- [Response Object](#response-object)
- [Testing](#testing)

## Installation

Install via Composer:

```bash
composer require descom/redsys
```

## Configuration

The package supports both sandbox and production environments:

### Sandbox Environment

```php
use Descom\Redsys\Redsys;

$redsys = Redsys::sandbox([
    'code' => 999008881,
    'terminal' => 1,
    'signatureKey' => 'sq7HjrUOBfKmC576ILgskD5srU870gJ7',
]);
```

### Production Environment

```php
use Descom\Redsys\Redsys;

$redsys = Redsys::production([
    'code' => YOUR_MERCHANT_CODE,
    'terminal' => YOUR_TERMINAL,
    'signatureKey' => 'YOUR_SIGNATURE_KEY',
]);
```

## Payment Methods

### Redirect Payment

Traditional payment flow where the user is redirected to Redsys payment page.

#### Generate Redirect Payment

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
    ->redirect()
    ->generateRedirectPayment($orderId, $amount, 'http://localhost:8000/payment-notification')
    ->description('Order #123456 - Product description')  // optional
    ->merchantName('My Store')                            // optional
    ->data('internal-order-reference')                    // optional
    ->merchantPaymethods('z')                             // optional - 'z' for Bizum
    ->redirect();
```

#### Optional Parameters

- `description($text)` - Product or order description (DS_MERCHANT_PRODUCTDESCRIPTION)
- `merchantName($name)` - Custom merchant name (DS_MERCHANT_MERCHANTNAME)
- `data($data)` - Internal data to be returned in the response (DS_MERCHANT_MERCHANTDATA)
- `merchantPaymethods($methods)` - Payment method filter (e.g., 'z' for Bizum)
- `urlSuccessful($url)` - Custom success URL (DS_MERCHANT_URLOK)
- `urlDenied($url)` - Custom denied URL (DS_MERCHANT_URLKO)

#### Capture Payment Notification

Process the payment notification received from Redsys:

```php
use Descom\Redsys\Redsys;

$redsys = Redsys::sandbox([
    'code' => 999008881,
    'terminal' => 1,
    'signatureKey' => 'sq7HjrUOBfKmC576ILgskD5srU870gJ7',
]);

$response = $redsys->redirect()->capturePaymentNotification($_POST);

if (!$response->successful()) {
    $orderId = $response->orderId;
    $errorCode = $response->errorCode;
    $responseCode = $response->responseCode;

    throw new \Exception("Error processing payment [$orderId] [$errorCode]", $responseCode);
}

// Payment successful
$orderId = $response->orderId;
$authorizationCode = $response->authorizationCode;
$amount = $response->amount;
$data = $response->data; // Internal data sent in the request
```

### InSite Payment (EMV 3DS)

InSite payment allows processing payments directly on your website with EMV 3-D Secure authentication.

The InSite payment flow consists of three steps:

1. **Card Configuration** - Initialize 3DS authentication
2. **Process Payment** - Send authentication data and process the payment
3. **Capture Payment** - Complete the payment if challenge is required

#### Step 1: Card Configuration

Obtain the 3DS configuration for the card:

```php
use Descom\Redsys\Redsys;

$redsys = Redsys::sandbox([
    'code' => 999008881,
    'terminal' => 1,
    'signatureKey' => 'sq7HjrUOBfKmC576ILgskD5srU870gJ7',
]);

$orderId = '123456';
$amount = 12.05;
$cardToken = 'CARD_TOKEN_FROM_REDSYS'; // Token obtained from Redsys card tokenization
$urlNotification = 'https://yoursite.com/payment-notification';

$config = $redsys->inSite()->cardConfiguration($orderId, $amount, $cardToken, $urlNotification);

// Response contains:
// $config['em3dSecure']['version'] - Protocol version
// $config['em3dSecure']['transId'] - Transaction ID
// $config['em3dSecure']['url'] - 3DS Method URL (optional)
// $config['iframe']['src'] - iframe HTML to embed (optional, if url exists)
```

If `$config['iframe']` exists, render the iframe in your page to complete the 3DS method data collection.

#### Step 2: Process Payment

Process the payment with authentication data:

```php
use Descom\Redsys\Redsys;
use Illuminate\Http\Request; // Optional, for browser data collection

$redsys = Redsys::sandbox([
    'code' => 999008881,
    'terminal' => 1,
    'signatureKey' => 'sq7HjrUOBfKmC576ILgskD5srU870gJ7',
]);

$orderId = '123456';
$amount = 12.05;
$cardToken = 'CARD_TOKEN_FROM_REDSYS';
$urlNotification = 'https://yoursite.com/payment-notification';

// Browser screen information (collect from JavaScript)
$screen = [
    'width' => 1920,
    'height' => 1080,
    'colorDepth' => 24,
];

// 3DS configuration from step 1
$em3dSecure = [
    'version' => $config['em3dSecure']['version'],
    'transId' => $config['em3dSecure']['transId'],
    'url' => $config['em3dSecure']['url'] ?? null,
];

$request = Request::capture(); // Optional Laravel request for browser headers

$response = $redsys->inSite()->process(
    $orderId, 
    $amount, 
    $cardToken, 
    $urlNotification, 
    $screen, 
    $em3dSecure,
    $request  // optional
);

if ($response->required3DsChallenger()) {
    // Challenge required - proceed to step 3
    $emv3ds = $response->emv3ds;
    
    // Render challenge iframe:
    // <iframe name="challengeIframe" 
    //         src="{$emv3ds['acsURL']}" 
    //         width="100%" 
    //         height="400">
    // </iframe>
    //
    // <form id="challengeForm" method="POST" action="{$emv3ds['acsURL']}" target="challengeIframe">
    //     <input type="hidden" name="creq" value="{$emv3ds['creq']}" />
    // </form>
    
} elseif ($response->successful()) {
    // Payment completed successfully
    $orderId = $response->orderId;
    $authorizationCode = $response->authorizationCode;
    $amount = $response->amount;
} else {
    // Payment failed
    $errorCode = $response->errorCode;
    $responseCode = $response->responseCode;
}
```

#### Step 3: Capture Payment (if challenge required)

If the payment requires a challenge, capture the payment after the user completes it:

```php
use Descom\Redsys\Redsys;

$redsys = Redsys::sandbox([
    'code' => 999008881,
    'terminal' => 1,
    'signatureKey' => 'sq7HjrUOBfKmC576ILgskD5srU870gJ7',
]);

$orderId = '123456';
$amount = 12.05;
$cardToken = 'CARD_TOKEN_FROM_REDSYS';
$version = $emv3ds['protocolVersion']; // From step 2 response
$cres = $_POST['cres']; // Challenge response from the iframe form submission

$response = $redsys->inSite()->capture($orderId, $amount, $cardToken, $version, $cres);

if ($response->successful()) {
    // Payment completed successfully
    $orderId = $response->orderId;
    $authorizationCode = $response->authorizationCode;
    $amount = $response->amount;
} else {
    // Payment failed
    $errorCode = $response->errorCode;
    $responseCode = $response->responseCode;
}
```

## Response Object

The `Response` object provides convenient access to payment information:

### Properties

- `$response->orderId` - Order identifier
- `$response->amount` - Payment amount (as float)
- `$response->authorizationCode` - Authorization code (if successful)
- `$response->errorCode` - Error code (if failed)
- `$response->responseCode` - Response code from Redsys
- `$response->data` - Custom data sent in the request
- `$response->emv3ds` - EMV 3DS information (for InSite payments)

### Methods

- `$response->successful()` - Check if payment was successful
- `$response->required3DsChallenger()` - Check if 3DS challenge is required (InSite payments)
- `$response->secure()` - Check if payment was processed with secure payment
- `$response->toArray()` - Get all response parameters as an array

### Example

```php
$response = $redsys->redirect()->capturePaymentNotification($_POST);

if ($response->successful()) {
    echo "Payment successful!";
    echo "Order: " . $response->orderId;
    echo "Amount: " . $response->amount;
    echo "Authorization: " . $response->authorizationCode;
    echo "Secure payment: " . ($response->secure() ? 'Yes' : 'No');
} else {
    echo "Payment failed!";
    echo "Error: " . $response->errorCode;
    echo "Response code: " . $response->responseCode;
}
```

## Testing

Run the test suite:

```bash
composer test
```

Run static analysis:

```bash
composer analyse
```

Fix code style:

```bash
composer style
```
