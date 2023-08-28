<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuoteController extends Controller
{
    function index()
    {
        $quote = Http::get(env('QUOTE_API_URL'));
        $quote = $quote->json();
        
        return view('home', ['quote' => $quote]);
    }
}
