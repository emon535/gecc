<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    public function index()
    {
        $settings = Setting::latest()->get()->pluck('value', 'key');
        return view('admin.settings.index', compact('settings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'regsitration_btn_link' => 'required',
            'email_for_e_meeting' => 'required',
            'email_for_event_registration' => 'required',
            'email_for_free_consulation' => 'required',
        ]);

        $data_array = $request->all();

        try {
            $all_data = collect($data_array)->only([
                'regsitration_btn_link',
                'email_for_e_meeting',
                'email_for_event_registration',
                'email_for_free_consulation',
            ])->toArray();

            foreach ($all_data as $key => $data) {
                Setting::updateOrCreate(['key' => $key], ['value' => $data]);
            }

            setMessage("message", "success", "Successful");
            return redirect()->route('admin.settings.index');
        } catch (\Throwable $th) {
            setMessage("message", "danger", "Failed");
            return redirect()->back()->withInput();
        }
    }
}