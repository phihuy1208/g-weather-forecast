<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function showHistory($city = null) {
        if ($city === null) {
            return view('history');
        }
        return view('history', unserialize($_COOKIE[urlencode($city)]));
    }
}
