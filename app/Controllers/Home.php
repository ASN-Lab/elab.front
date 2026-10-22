<?php

namespace App\Controllers;

class Home extends BaseController
{
    // public function index(): string
    // {
    //     return view('welcome_message');
    // }
    public function index(): string
    {
        $client = \Config\Services::curlrequest();
        $response = $client->request('GET', 'http://elab.api/');
        dd($response->getBody());
        print_r($response);
        //$data = json_decode($response->getBody(), true);
    }
}
