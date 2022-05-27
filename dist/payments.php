<?php
namespace a3;

class payments
{

    protected $endpoint;
    protected $token;
    protected $httpClient;

    public function __construct($token)
    {
        $this->endpoint = 'payments/';
        $this->token = $token;
        $this->httpClient = new GuzzleHttpHandler;
    }

    public function create_transaction($amt, $lb, $cur, $coin, $su_call, $err_call)
    {
        $request = $this->endpoint . 'create_transaction/' . $this->token . '/' . $amt . '/' . $lb . '/' . $cur . '/' . $coin . '/' . $su_call . '/' . $err_call;
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

    public function get_tx_info($txid)
    {
        $request = $this->endpoint . 'get_tx_info/' . $this->token . '/' . $txid;
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

    public function get_tx_list($txid)
    {
        $request = $this->endpoint . 'get_tx_list/' . $this->token;
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
