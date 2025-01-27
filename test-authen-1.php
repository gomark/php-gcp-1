<?php

require __DIR__ . '/vendor/autoload.php';

use Google\Auth\AccessToken\AccessToken;
use Google\Client;

$credentialsPath = '/Users/puttitang/Downloads/putti-argolis-1-fdb9cf6ba1ca.json';
$client = new Client();
$client->setAuthConfig($credentialsPath);

$scopes = ['https://www.googleapis.com/auth/cloud-platform'];

$client->setScopes($scopes);

$accessToken = $client->fetchAccessTokenWithAssertion();

$access_token = $client->getAccessToken();

$bearerToken = $accessToken['access_token'];
var_dump($accessToken);

echo $bearerToken
?>