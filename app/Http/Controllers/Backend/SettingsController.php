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
        $data['adminSettings'] = Settings::all()->sortBy('settings_must');
        $settings = Settings::first();

        // dd($data);
        return view('backend.settings.index', compact('data','settings'));
    }

    public function sortable()
    {
        // print_r($_POST['item']);
        foreach ($_POST['item'] as $key => $value) {
            $settings = Settings::find(intval($value));
            $settings->settings_must = intval($key);
            $settings->save();
        }
        echo true;
    }

    public function destroy ($id) {
        $settings = Settings::find($id);
if ($settings->delete()) {
    return back()->with('succes', 'Islem Basarili');
}
return back()->with('error', 'Islem Basarisiz');
    }
}

?>
