<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HealthCheckController extends Controller
{
    //
    public function healthcheck()
    {
        return response()->json([
            'status' => 'healthy',
            'uptime' => 'running',
            'version' => '1.0.0'
        ]);
    }
}
