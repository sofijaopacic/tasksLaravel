<?php

namespace App\Http\Controllers;

use App\Models\TaskType;

class TypeController extends Controller
{

    public function index()
    {
        return response()->json(TaskType::all());
    }
}
