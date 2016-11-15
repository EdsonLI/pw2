# RedePayClient-php
Documentação do lojista com informações da integração com o RedePay


## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/userede/redepay-php.git"
    }
  ],
  "require": {
    "RedePay/RedePay-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/redepay-php/autoload.php');
```

## Getting Started

To create an order follow this code

```php

try {

  $api = new RedePay\Client\Api\OrdersApi();
  $order = new RedePay\Client\Model\OrderDetailsResponseJson();
  $item = new RedePay\Client\Model\SellerItem(array("id" => "1", 
                                                      "amount" => "5000", 
                                                      "quantity" => 1, 
                                                      "freight" => "200", 
                                                      "description" => "IPhone 6s 64Gb"));
  
  $phone = new RedePay\Client\Model\SellerPhone;
  $phone->setKind("cellphone","home");
  $phone->setNumber("11988880000","1155550000");

  $document = new RedePay\Client\Model\SellerDocument;
  $document->setKind("cpf");
  $document->setNumber("01234567890");

  $address = new RedePay\Client\Model\SellerAddress;
  $address->setStreet("Marcos Penteado");
  $address->setNumber("939");
  $address->setComplement("11 andar");
  $address->setPostalCode("04147100");
  $address->setCity("Barueri");
  $address->setDistrict("Alphaville");
  $address->setState("SP");

  $settings = new RedePay\Client\Model\SellerSettings;

  $settings->setExpiresAt(\DateTime::createFromFormat(\DateTime::ISO8601, "2016-14-30T22:00:30-03:00"));
  $settings->setAttempts("1");
  $settings->setMaxInstallments("3");

  $customer = new RedePay\Client\Model\SellerCustomer;
  $customer->setName("Nome do Comprador");
  $customer->setEmail("comprador@email.com");
  $customer->setDocuments(array($document));
  $customer->setPhones(array($phone));

  $shipping = new RedePay\Client\Model\SellerShipping;
  $shipping->setCost("10");
  $shipping->setAddress($address);

  $url = new RedePay\Client\Model\SellerUrl;
  $url->setKind("redirect");
  $url->setUrl("https://userede.com.br/redepay");

  $order->setItems(array($item));
  $order->setReference("1234");
  $order->setCustomer($customer);
  $order->setShipping($shipping);

  $s = new RedePay\Client\ObjectSerializer;

  $response = $api->createOrder("v1","YOUR-ACCESS-TOKEN", $order);

  print_r($response);

} catch (RedePay\Api\ApiException $e) {
    echo 'Caught exception: ',      $e->getMessage(), "\n";
    echo 'HTTP response headers: ', $e->getResponseHeaders(), "\n";
    echo 'HTTP response body: ',    $e->getResponseBody(), "\n";
    echo 'HTTP status code: ',      $e->getCode(), "\n";
}


```

To get an order by id follow this code

```php

$api_instance = new RedePay\Client\Api\OrdersApi();
$api_version = "v1";
$access_token = "YOUR-ACCESS-TOKEN"; 
$id = "YOUR-CHECKOUT-CODE"; 

try {
    $result = $api_instance->getOrder($api_version, 
                                      $id, 
                                      $access_token);

    print_r($result);
} catch (RedePay\Api\ApiException $e) {
    echo 'Caught exception: ',      $e->getMessage(), "\n";
    echo 'HTTP response headers: ', $e->getResponseHeaders(), "\n";
    echo 'HTTP response body: ',    $e->getResponseBody(), "\n";
    echo 'HTTP status code: ',      $e->getCode(), "\n";
}


```

To get a transaction by id follow this code

```php

$api_instance = new RedePay\Client\Api\TransactionsApi();
$api_version = "v1"; 
$access_token = "YOUR-ACCESS-TOKEN"; 
$id = "YOUR-TRANSACTION-ID"; 

try {
    $result = $api_instance->getTransaction($api_version, 
                                            $id, 
                                            $access_token);

    print_r($result);
} catch (RedePay\Api\ApiException $e) {
    echo 'Caught exception: ',      $e->getMessage(), "\n";
    echo 'HTTP response headers: ', $e->getResponseHeaders(), "\n";
    echo 'HTTP response body: ',    $e->getResponseBody(), "\n";
    echo 'HTTP status code: ',      $e->getCode(), "\n";
}


```

To reversal transaction follow this code

```php

$api_instance = new RedePay\Client\Api\TransactionsApi();
$api_version = "v1"; 
$access_token = "YOUR-ACCESS-TOKEN"; 
$id = "YOUR-TRANSACTION-ID"; 
$transaction_reversal = new \RedePay\Client\Model\TransactionReversalJsonRequest(); 

try {

    $transaction_reversal->setAmount("12900");
    $result = $api_instance->postTransactionReversal($api_version,
                                                     $id,
                                                     $access_token,
                                                     $transaction_reversal);

    print_r($result);
} catch (RedePay\Api\ApiException $e) {
    echo 'Caught exception: ',      $e->getMessage(), "\n";
    echo 'HTTP response headers: ', $e->getResponseHeaders(), "\n";
    echo 'HTTP response body: ',    $e->getResponseBody(), "\n";
    echo 'HTTP status code: ',      $e->getCode(), "\n";
}


```

To add a tracking number in a transaction follow this code

```php

$api_instance = new RedePay\Client\Api\TransactionsApi();
$api_version = "v1"; 
$access_token = "YOUR-ACCESS-TOKEN"; 
$id = "YOUR-TRANSACTION-ID"; 

try {

    $tracking_number_request = new \RedePay\Client\Model\SellerTrackingNumber();
    $tracking_number_request->setTrackingNumber("JP123456789AB");
    $result = $api_instance->postTrackingNumber($api_version, 
                                                $id,
                                                $access_token,
                                                $tracking_number_request);

    print_r($result);
} catch (RedePay\Api\ApiException $e) {
    echo 'Caught exception: ',      $e->getMessage(), "\n";
    echo 'HTTP response headers: ', $e->getResponseHeaders(), "\n";
    echo 'HTTP response body: ',    $e->getResponseBody(), "\n";
    echo 'HTTP status code: ',      $e->getCode(), "\n";
}


```



To remove a tracking number in a transaction follow this code

```php

$api_instance = new RedePay\Client\Api\TransactionsApi();
$api_version = "v1"; 
$access_token = "YOUR-ACCESS-TOKEN"; 
$id = "YOUR-TRANSACTION-ID"; 
$delete_tracking_number_request = new \RedePay\Client\Model\SellerDeleteTrackingNumberRequest();

try {
    $delete_tracking_number_request->setReason("BAD_TRACKING_NUMBER");
    $result = $api_instance->deleteTrackingNumber($api_version,
                                                  $id,
                                                  $access_token,
                                                  $delete_tracking_number_request);

    print_r($result);
} catch (RedePay\Api\ApiException $e) {
    echo 'Caught exception: ',      $e->getMessage(), "\n";
    echo 'HTTP response headers: ', $e->getResponseHeaders(), "\n";
    echo 'HTTP response body: ',    $e->getResponseBody(), "\n";
    echo 'HTTP status code: ',      $e->getCode(), "\n";
}


```

To get user info follow this code

```php

$api_instance = new RedePay\Client\Api\UserinfoApi();
$api_version = "v1"; 
$access_token = "OAUTH-ACCESS-TOKEN"; 

try {
    $result = $api_instance->getUserInfo($access_token, $api_version);
    print_r($result);
} catch (RedePay\Api\ApiException $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
    echo 'HTTP response headers: ', $e->getResponseHeaders(), "\n";
    echo 'HTTP response body: ', $e->getResponseBody(), "\n";
    echo 'HTTP status code: ', $e->getCode(), "\n";
}

```

To create access token follow this code

```php

$api_instance = new RedePay\Client\Api\AccesstokenApi();
$grant_type = "GRANT-TYPE";
$code = "CODE";
$redirect_uri = "REDIRECT-URI";
$authorization = "AUTHORIZATION";

try {
    $result = $api_instance->createAccessToken($grant_type, $code, $redirect_uri, $authorization);
    print_r($result);
} catch (RedePay\Api\ApiException $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
    echo 'HTTP response headers: ', $e->getResponseHeaders(), "\n";
    echo 'HTTP response body: ', $e->getResponseBody(), "\n";
    echo 'HTTP status code: ', $e->getCode(), "\n";
}
```

To get payment follow this code 

```php

try {
    $api_instance = new RedePay\Client\Api\PaymentsApi();

    $access_token = "ACCESS-TOKEN";
    $version = "v1";

    $payment = new \RedePay\Client\Model\SellerPaymentRequest;

    $sellerPayment = new \RedePay\Client\Model\SellerPayment;

    $sellerPayment ->setInstallments("1");
    $sellerPayment ->setCardToken("MOCKHIPE-4c4c5909ae3cc176a0416a7dce9cee52");

    $shippingAddress = new \RedePay\Client\Model\SellerPaymentAddress;

    $shippingAddress->setCity("Carapicuiba");
    $shippingAddress->setComplement("apto 26");
    $shippingAddress->setDistrict("Conjunt.Hab.Pres.Cast.Branco");
    $shippingAddress->setNumber("226");
    $shippingAddress->setPostalCode("06328070");
    $shippingAddress->setState("SP");
    $shippingAddress->setStreet("Rua Sto Antonio da Platina");

    $payment->setOrder("2132530441");
    $payment->setPayment($sellerPayment);
    $payment->setShippingAddress($shippingAddress);
    $payment->setFingerprint("2822019795");
    $payment->setIpAddress("172.20.90.116");
    $payment->setChannel("1004");

    $s = new RedePay\Client\ObjectSerializer;

  $result = $api_instance->payment($access_token, $payment, $version);

    print_r($result);
} catch (RedePay\Api\ApiException $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
    echo 'HTTP response headers: ', $e->getResponseHeaders(), "\n";
    echo 'HTTP response body: ', $e->getResponseBody(), "\n";
    echo 'HTTP status code: ', $e->getCode(), "\n";
}

```


To get cardlist follow this code 

Include:

```php
require_once('vendor/autoload.php');
use Firebase\JWT\JWT;
```

```php

try {
    

  $api_instance = new RedePay\Client\Api\CardsApi(); 
  $access_token = "ACCESS-TOKEN";  
  $version = "v1";

  $clientId    = "CLIENT_ID";
  $secret      = "SECRET";
  $customerCpf = "CPF";
    
  $cardsJWT = $api_instance->cards($access_token, $version);   
    
  $token = $cardsJWT->getCardToken();        

  $key = $clientId . ":" . $secret . ":" . $customerCpf;

  $decoded = JWT::decode($token, utf8_encode($key), array('HS256'));    

  print_r($decoded);

    
    
} catch (RedePay\Api\ApiException $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
    echo 'HTTP response headers: ', $e->getResponseHeaders(), "\n";
    echo 'HTTP response body: ', $e->getResponseBody(), "\n";
    echo 'HTTP status code: ', $e->getCode(), "\n";
}

```
## Documentation For Authorization

 All endpoints do not require authorization.