<?php
/* -- setup -- */
$authFilePath = __DIR__ . '/path/to/service-account-auth.json';
putenv("GOOGLE_APPLICATION_CREDENTIALS={$authFilePath}");

/* -- 購入情報 -- */
$packageName = 'com.example';
$subscriptionId = 'subscribe-XXX';
$token = 'some-token';

/* -- 実行 -- */
require_once __DIR__ . '/vendor/autoload.php';

$client = new Google_Client();
$client->useApplicationDefaultCredentials();
$client->setScopes([Google_Service_AndroidPublisher::ANDROIDPUBLISHER]);

$service = new Google_Service_AndroidPublisher($client);
$result = $service->purchases_subscriptions->get($packageName, $subscriptionId, $token);

var_dump($result);
