<?php
// This sample uses the Apache HTTP client from HTTP Components (http://hc.apache.org/httpcomponents-client-ga/)
require_once 'HTTP/Request2.php';

$request = new Http_Request2('https://videobreakdown.azure-api.net/Breakdowns/Api/Partner/Accounts');
$url = $request->getUrl();
var_dump($url);
$headers = array(
    // Request headers
    'Ocp-Apim-Subscription-Key' => 'fd93f1039fc744edbc56411f896e8461',
);

$request->setHeader($headers);

$parameters = array(
    // Request parameters
);

$url->setQueryVariables($parameters);

$request->setMethod(HTTP_Request2::METHOD_GET);

// Request body
$request->setBody("{body}");

try
{
    $response = $request->send();
    echo $response->getBody();
}
catch (HttpException $ex)
{
    echo $ex;
}

?>