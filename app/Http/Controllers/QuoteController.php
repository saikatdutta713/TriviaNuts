<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuoteController extends Controller
{
    public static function getQuote()
    {

        $quote = Http::get('https://zenquotes.io/api/today');
        $quote = $quote->json();

        return $quote;
    }
}
