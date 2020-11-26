<?php

namespace Modules\Settings\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Settings\Entities\Setting;
use Illuminate\Support\Facades\Session;
use Modules\Inventory\Entities\StkItem;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $settings = Setting::with(['model'])->orderBy('model_id')->get();
        $headers = $settings->unique('model_id');
        return view('settings::settings.index', compact('settings', 'headers'));
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('settings::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $setting = Setting::find($id);
        
        if (empty($setting)) {
            Session::flash('message', "Setting Not Found");
            return redirect(route('settings.index'));
        }

        return view('settings::settings.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $setting = Setting::find($id);
        
        if (empty($setting)) {
            Session::flash('message', "Setting Not Found");
            return redirect(route('settings.index'));
        }

        $setting->fill($request->only(['value']));
        $setting->save(); 

        Session::flash('message', "Setting updated");
        return redirect(route('settings.index'));
    }
}
