<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuoteController extends Controller
{
    function index()
    {

        // API Endpoint URL
        $apiUrl = 'https://zenquotes.io/api/today';

        $quote = Http::get($apiUrl);
        $quote = $quote->json();


        return view('home', ['quote' => $quote]);
    }
}
