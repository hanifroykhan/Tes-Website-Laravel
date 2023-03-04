<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class ProductController extends Controller
{
    public function index()
    {
        $client = new Client();
        $response = $client->request('POST', 'http://149.129.221.143/kanaldata/Webservice/bank_account', [
            'form_params' => [
                'bank_id' => '2'
            ]
        ]);
    
        $data = json_decode($response->getBody(), true);
    
        return response()->json([
            'status' => $data['status'],
            'message' => $data['message'],
            'data' => $data['data'],
        ]);
        
    }
}
