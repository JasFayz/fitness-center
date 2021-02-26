<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    //

    public function index()
    {
        $data = [
            'foo' => 'bar'
        ];
        return Inertia::render('Dashboard/Index');
    }
}
