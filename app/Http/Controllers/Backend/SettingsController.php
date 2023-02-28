<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
// use App\Models\Settings;
use Illuminate\Http\Request;
use App\Models\Settings;


class SettingsController extends Controller
{
    public function index()

    {
        $data['adminSettings']=Settings::all()->sortBy('settings_must');
        // dd($data);
        return view('backend.settings.index',compact('data'));
    }
}
