<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JsonToExcelController extends Controller
{
    public function jsonToExcelForm()
    {
        return view('json.jsonToExcel');
    }
}
