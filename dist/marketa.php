<?php
namespace a3;

class marketa
{

    protected $endpoint;
    protected $httpClient;

    public function __construct()
    {
        $this->endpoint = 'marketa/';
        $this->httpClient = new GuzzleHttpHandler;
    }

    public function live_data()
    {
        $request = $this->endpoint . 'live_data';
        $resp = $this
            ->httpClient
            ->fetch($request);
        if ($resp['code'] == 200)
        {
            return $resp['body']['data'];
        }
        else
        {
            return 'Failed: ' . $resp['body']['message'];
        }
    }

    public function specific_data($target, $symbol, $option)
    {
        $request = $this->endpoint . 'specific_data/' . $target . '/' . $symbol . '/' . $option;
        $resp = $this
            ->httpClient
            ->fetch($request);
        if ($resp['code'] == 200)
        {
            return $resp['body']['data'];
        }
        else
        {
            return 'Failed: ' . $resp['body']['message'];
        }
    }

    public function list_symbols()
    {
        $request = $this->endpoint . 'list_symbols';
        $resp = $this
            ->httpClient
            ->fetch($request);
        if ($resp['code'] == 200)
        {
            return $resp['body']['data'];
        }
        else
        {
            return 'Failed: ' . $resp['body']['message'];
        }
    }

    public function list_targets()
    {
        $request = $this->endpoint . 'list_targets';
        $resp = $this
            ->httpClient
            ->fetch($request);
        if ($resp['code'] == 200)
        {
            return $resp['body']['data'];
        }
        else
        {
            return 'Failed: ' . $resp['body']['message'];
        }
    }

}
