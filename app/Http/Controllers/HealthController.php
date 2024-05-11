<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HealthController extends Controller
{
    public function ping(Request $request): Response
    {
        return response("PONG");
    }
}
