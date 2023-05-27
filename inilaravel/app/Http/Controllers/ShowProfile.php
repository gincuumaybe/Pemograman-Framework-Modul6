<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowProfile extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return ('ini show');
    }
}

class Showurmom extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return ('ini mamamu');
    }
}
