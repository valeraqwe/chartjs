<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function showChart(): \Illuminate\Contracts\View\View|Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('program_usage_chart');
    }

}
