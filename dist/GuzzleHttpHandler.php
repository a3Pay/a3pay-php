<?php
namespace a3;

use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\ServerException;

class GuzzleHttpHandler
{

    protected $client;

    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

    public function fetch($parms)
    {
        try
        {
            $response = $this
                ->client
                ->request('GET', 'https://a3pay.co/' . $parms);
            return array(
                'code' => $response->getStatusCode() ,
                'body' => json_decode($response->getBody() , true)
            );
        }
        catch(ClientException $e)
        {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()
                ->getContents();
            return array(
                'code' => $response->getStatusCode() ,
                'body' => json_decode($responseBodyAsString, true)
            );
        }
        catch(ConnectException $e)
        {
            $response = $e->getMessage();
            return array(
                'code' => 500,
                'body' => ['message' => $response]
            );
        }
        catch(ServerException $e)
        {
            $response = $e->getMessage();
            return array(
                'code' => 500,
                'body' => ['message' => $response]
            );
        }

    }

}
