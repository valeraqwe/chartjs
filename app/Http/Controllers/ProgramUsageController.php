<?php

namespace App\Http\Controllers;

use App\Models\ProgramUsage;
use Illuminate\Http\Request;

class ProgramUsageController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        $data = ProgramUsage::all();
        return response()->json($data);
    }
}
