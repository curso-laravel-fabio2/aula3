<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForeverAlorController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return "<h1>i fell lonelly</h1>";
    }
}
