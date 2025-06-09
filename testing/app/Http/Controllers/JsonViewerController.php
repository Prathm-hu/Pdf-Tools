<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsonViewerController extends Controller
{
    public function form()
    {
        return view('json.jsonViewer');
    }

}

