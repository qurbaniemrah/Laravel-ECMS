<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function index() 
    {
        $settings =Settings::first();
        return view('backend.default.index',compact('settings'));
    }
}
