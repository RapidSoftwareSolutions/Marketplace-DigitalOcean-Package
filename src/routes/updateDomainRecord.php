<?php

$app->post('/api/DigitalOcean/updateDomainRecord', function ($request, $response) {

    $settings = $this->settings;
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['accessToken','domain','recordId','type']);

    if(!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback']=='error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }

    $requiredParams = ['accessToken'=>'accessToken','domain'=>'domain','recordId'=>'recordId','type'=>'type'];
    $optionalParams = ['name'=>'name','data'=>'data','priority'=>'priority','port'=>'port','ttl'=>'ttl','weight'=>'weight'];

    $paramsDependence = [
        "type" => [
            "A" => "name,data",
            "AAAA" => "name,data",
            "CNAME" => "name,data",
            "MX" => "data,priority",
            "TXT" => "name,data",
            "NS" => "data",
            "SRV" => "name,data,priority,port,weight"
        ]
    ];

    $checkDependence = \Models\Params::checkDependencies($post_data['args'], $paramsDependence);
    if($checkDependence['callback'] != "success"){
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($checkDependence);
    }

    $bodyParams = ['type','name','data','priority','port','ttl','weight'];

    $data = \Models\Params::createParams($requiredParams, $optionalParams, $post_data['args']);
    $requestBody = \Models\Params::createRequestBody($data, $bodyParams);

    $client = $this->httpClient;
    $query_str = "https://api.digitalocean.com/v2/domains/{$data['domain']}/records/{$data['recordId']}";

    $requestParams['headers'] = ['Authorization' => 'Bearer ' . $data['accessToken']];
    $requestParams['json'] = $requestBody;

    try {
        $resp = $client->put($query_str, $requestParams);
        $responseBody = $resp->getBody()->getContents();

        if(in_array($resp->getStatusCode(), ['200', '201', '202', '203', '204'])) {
            $result['callback'] = 'success';
            $result['contextWrites']['to'] = is_array($responseBody) ? $responseBody : json_decode($responseBody);
            if(empty($result['contextWrites']['to'])) {
                $result['contextWrites']['to']['status_msg'] = "Api return no results";
            }
        } else {
            $result['callback'] = 'error';
            $result['contextWrites']['to']['status_code'] = 'API_ERROR';
            $result['contextWrites']['to']['status_msg'] = json_decode($responseBody);
        }

    } catch (\GuzzleHttp\Exception\ClientException $exception) {

        $responseBody = $exception->getResponse()->getBody()->getContents();
        if(empty(json_decode($responseBody))) {
            $out = $responseBody;
        } else {
            $out = json_decode($responseBody);
        }
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $out;

    } catch (GuzzleHttp\Exception\ServerException $exception) {

        $responseBody = $exception->getResponse()->getBody()->getContents();
        if(empty(json_decode($responseBody))) {
            $out = $responseBody;
        } else {
            $out = json_decode($responseBody);
        }
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $out;

    } catch (GuzzleHttp\Exception\ConnectException $exception) {

        $responseBody = $exception->getResponse()->getBody(true);
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'INTERNAL_PACKAGE_ERROR';
        $result['contextWrites']['to']['status_msg'] = 'Something went wrong inside the package.';

    }

    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});