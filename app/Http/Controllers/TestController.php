<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function index(Request $request)
    {
        return true;
    }

    function show(Request $request)
    {
        return false;
    }
}
