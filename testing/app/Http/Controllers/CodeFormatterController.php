<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CodeFormatterController extends Controller
{
    public function formatterForm()
    {
        return view('code.formatter');
    }
}
