<?php
namespace a3;

class apps
{

    protected $endpoint;
    protected $token;
    protected $httpClient;

    public function __construct($token)
    {
        $this->endpoint = 'account/';
        $this->token = $token;
        $this->httpClient = new GuzzleHttpHandler;
    }

    public function get_account_info()
    {
        $request = $this->endpoint . 'get_account_info/' . $this->token;
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

    public function update_password($oldPass, $newPass)
    {
        $request = $this->endpoint . 'update_password/' . $this->token . '/' . $oldPass. '/' . $newPass;
        $resp = $this
            ->httpClient
            ->fetch($request);
        if ($resp['body']['status'] == 'ok')
        {
            return 'Account Password Updated';
        }
        else
        {
            return 'Failed: ' . $resp['body']['message'];
        }
    }

    public function list_login_activity()
    {
        $request = $this->endpoint . 'list_login_activity/' . $this->token;
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

    public function list_assets()
    {
        $request = $this->endpoint . 'list_assets/' . $this->token;
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

    public function support_countries()
    {
        $request = $this->endpoint . 'support_countries/' . $this->token;
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

    public function list_pricing()
    {
        $request = $this->endpoint . 'list_pricing/' . $this->token;
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

    public function support_currencies()
    {
        $request = $this->endpoint . 'support_currencies/' . $this->token;
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
