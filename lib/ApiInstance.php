<?php 
namespace Wherewhere;

use Wherewhere\Api\DefaultApi;
use Wherewhere\Configuration;
use GuzzleHttp\Client;

class ApiInstance
{
    public function __construct()
    {
        echo "Client class loaded";
    }

    public static function New($access_token){
        $config = Configuration::getDefaultConfiguration()->setAccessToken($access_token);

        $apiInstance = new DefaultApi(
            // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
            // This is optional, `GuzzleHttp\Client` will be used as default.
            new Client(),
            $config
        );
        return $apiInstance;
    }
}
