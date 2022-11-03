<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Train;

class PageController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }
}
