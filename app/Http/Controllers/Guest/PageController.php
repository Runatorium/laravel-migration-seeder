<?php

namespace App\Http\Controllers\Guest;

use App\models\Train;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::where('orario_di_partenza', '=', date('Y-m-d'))->get();
        return view('home', compact('trains'));
    }
}