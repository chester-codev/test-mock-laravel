<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function index(Request $request)
    {
        if ($request->has('false')) return false;

        return true;
    }
}
