<?php


namespace Mafzst\CaptainUp;


use Mafzst\CaptainUp\Exception\ApiException;
use Mafzst\CaptainUp\Exception\ApiUnreachableException;

class Captain
{
    private $key;
    private $baseUrl = "https://captainup.com/mechanics/v1/";
    private $api;

    public function __construct($key, $baseUrl = null)
    {
        $this->key = $key;
        if ($baseUrl) $this->baseUrl = $baseUrl;

        $this->api = new \RestClient([
            'base_url' => $this->baseUrl
        ]);
    }

    public function getApp()
    {
        $endpoint = "app/" . $this->key;
        $data =  $this->requestApi($endpoint);
        return Parser::parseApp($data);
    }

    protected function requestApi($endpoint)
    {
        $result = $this->api->get($endpoint);

        if($result->info->http_code !== 200) throw new ApiUnreachableException($result->info->http_code);

        $data = $result->decode_response();

        if($data->code !== 200) throw new ApiException($data->message, $data->type);
        
        return $result->decode_response()->data;
    }
}