<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsonToTableController extends Controller
{
    public function jsonToTableForm()
    {
        return view('json.jsonTable');
    }
}
