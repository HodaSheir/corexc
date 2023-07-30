<?php

use GuzzleHttp\Client;

class DataClass implements DataProviderInterface
{

    private $apiUrl;
    private $httpClient;

    public function __construct()
    {
        $this->httpClient = new Client();
    }
    public function getData($url)
    {
        $this->apiUrl = $url;
        $response = $this->httpClient->get($this->apiUrl);
        $data = json_decode($response->getBody(), true);
        return $data ? $data : [];
    }


}







?>