<?php
namespace a3;

class wallet
{

    protected $apikey;
    protected $httpClient;

    public function __construct($apikey)
    {
        $this->apikey = $apikey;
        $this->httpClient = new GuzzleHttpHandler;
    }

    public function get_new_address($label)
    {
        $request = 'get_new_address/' . $this->apikey . '/' . $label;
        $resp = $this
            ->httpClient
            ->fetch($request);
        if ($resp['code'] == 200)
        {
            return $resp['body']['data']['address'];
        }
        else
        {
            return 'Failed: ' . $resp['body']['message'];
        }
    }

    public function get_balance()
    {
        $request = 'get_balance/' . $this->apikey;
        $resp = $this
            ->httpClient
            ->fetch($request);
        if ($resp['code'] == 200)
        {
            return $resp['body']['data']['avaliable_balance'];
        }
        else
        {
            return 'Failed: ' . $resp['body']['message'];
        }
    }

    public function get_my_addresses($limit)
    {
        $request = 'get_my_addresses/' . $this->apikey . '/' . $limit;
        $resp = $this
            ->httpClient
            ->fetch($request);
        if ($resp['code'] == 200)
        {
            return $resp['body']['data']['addresses'];
        }
        else
        {
            return 'Failed: ' . $resp['body']['message'];
        }
    }

    public function get_address_balance($address)
    {
        $request = 'get_address_balance/' . $this->apikey . '/' . $address;
        $resp = $this
            ->httpClient
            ->fetch($request);
        if ($resp['code'] == 200)
        {
            return $resp['body']['data']['final_balance'];
        }
        else
        {
            return 'Failed: ' . $resp['body']['message'];
        }
    }

    public function get_address_by_label($label)
    {
        $request = 'get_address_by_label/' . $this->apikey . '/' . $label;
        $resp = $this
            ->httpClient
            ->fetch($request);
        if ($resp['code'] == 200)
        {
            return $resp['body']['data']['address'];
        }
        else
        {
            return 'Failed: ' . $resp['body']['message'];
        }
    }

    public function get_network_fee_estimate()
    {
        $request = 'get_network_fee_estimate/' . $this->apikey;
        $resp = $this
            ->httpClient
            ->fetch($request);
        if ($resp['code'] == 200)
        {
            return $resp['body']['data']['feerate'];
        }
        else
        {
            return 'Failed: ' . $resp['body']['message'];
        }
    }

    public function get_transactions($limit)
    {
        $request = 'get_transactions/' . $this->apikey . '/' . $limit;
        $resp = $this
            ->httpClient
            ->fetch($request);
        if ($resp['code'] == 200)
        {
            return $resp['body']['data']['txs'];
        }
        else
        {
            return 'Failed: ' . $resp['body']['message'];
        }
    }

    public function get_transaction($txid)
    {
        $request = 'get_transaction/' . $this->apikey . '/' . $txid;
        $resp = $this
            ->httpClient
            ->fetch($request);
        if ($resp['code'] == 200)
        {
            return $resp['body']['data']['tx'];
        }
        else
        {
            return 'Failed: ' . $resp['body']['message'];
        }
    }

    public function get_block_transaction($txid)
    {
        $request = 'get_block_transaction/' . $this->apikey . '/' . $txid;
        $resp = $this
            ->httpClient
            ->fetch($request);
        if ($resp['code'] == 200)
        {
            return $resp['body']['data']['tx'];
        }
        else
        {
            return 'Failed: ' . $resp['body']['message'];
        }
    }

    public function send_to_address($address, $amount, $from)
    {
        if ($from)
        {
        $request = 'send_to_address/' . $this->apikey . '/' . $address . '/' . $amount . '/' . $from;
        }
        else
        {
        $request = 'send_to_address/' . $this->apikey . '/' . $address . '/' . $amount;
        }
        $resp = $this
            ->httpClient
            ->fetch($request);
        if ($resp['code'] == 200)
        {
            return $resp['body']['data']['txId'];
        }
        else
        {
            return 'Failed: ' . $resp['body']['message'];
        }
    }

    public function set_tx_fee($feerate)
    {
        $request = 'set_tx_fee/' . $this->apikey . '/' . $feerate;
        $resp = $this
            ->httpClient
            ->fetch($request);
        if ($resp['code'] == 200)
        {
            return $resp['body']['data']['message'];
        }
        else
        {
            return 'Failed: ' . $resp['body']['message'];
        }
    }

    public function wallet_unlock($passphrase, $duration)
    {
        $request = 'wallet_unlock/' . $this->apikey . '/' . $passphrase . '/' . $duration;
        $resp = $this
            ->httpClient
            ->fetch($request);
        if ($resp['code'] == 200)
        {
            return $resp['body']['data']['message'];
        }
        else
        {
            return 'Failed: ' . $resp['body']['message'];
        }
    }

    public function wallet_lock()
    {
        $request = 'wallet_lock/' . $this->apikey;
        $resp = $this
            ->httpClient
            ->fetch($request);
        if ($resp['code'] == 200)
        {
            return $resp['body']['data']['message'];
        }
        else
        {
            return 'Failed: ' . $resp['body']['message'];
        }
    }

    public function passphrase_change($oldpass, $newpass)
    {
        $request = 'passphrase_change/' . $this->apikey . '/' . $oldpass . '/' . $newpass;
        $resp = $this
            ->httpClient
            ->fetch($request);
        if ($resp['code'] == 200)
        {
            return $resp['body']['data']['message'];
        }
        else
        {
            return 'Failed: ' . $resp['body']['message'];
        }
    }

    public function dump_privkey($address)
    {
        $request = 'dump_privkey/' . $this->apikey . '/' . $address;
        $resp = $this
            ->httpClient
            ->fetch($request);
        if ($resp['code'] == 200)
        {
            return $resp['body']['data']['privkey'];
        }
        else
        {
            return 'Failed: ' . $resp['body']['message'];
        }
    }

    public function abandon_transaction($txid)
    {
        $request = 'abandon_transaction/' . $this->apikey . '/' . $txid;
        $resp = $this
            ->httpClient
            ->fetch($request);
        if ($resp['code'] == 200)
        {
            return 'Transaction Canceled';
        }
        else
        {
            return 'Failed: ' . $resp['body']['message'];
        }
    }

}
