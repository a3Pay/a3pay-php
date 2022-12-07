<?php
namespace a3;

class payments
{

    protected $endpoint;
    protected $mode;
    protected $token;
    protected $httpClient;

    public function __construct($token, $mode)
    {
        $this->endpoint = 'payments/';
        $this->mode = $mode;
        $this->token = $token;
        $this->httpClient = new GuzzleHttpHandler;
    }

    public function create_transaction($cat, $amt, $lb, $cur, $coin, $su_call, $err_call)
    {
        if ($su_call)
        {
        $request = $this->endpoint . 'create_transaction/?token=' . $this->token . '&amount=' . $amt . '&mode=' . $this->mode . '&category=' . $cat . '&label=' . $lb . '&currency=' . $cur . '&coin=' . $coin . '&success_callback=' . $su_call . '&error_callback=' . $err_call;
        }
        else
        {
        $request = $this->endpoint . 'create_transaction/?token=' . $this->token . '&mode=' . $this->mode . '&amount=' . $amt . '&label=' . $lb . '&currency=' . $cur . '&coin=' . $coin;
        }
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
        $request = $this->endpoint . 'get_tx_info/?token=' . $this->token . '&mode=' . $this->mode . '&txid=' . $txid;
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

    public function get_tx_list($limit)
    {
        $request = $this->endpoint . 'get_tx_list/?token=' . $this->token . '&mode=' . $this->mode . '&limit=' . $limit;
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
