<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Settings;
use App\Http\Requests\Setting;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Settings::where('id', 1)->firstOrFail();
        return view('admin.setting',['setting' => $setting]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Setting $request, $id)
    {
        $setting = Settings::where('id', $id)
          ->update($request->except('_token', '_method'));
          return redirect('/setting')->with('info' , 'Setting is Update');
    }

    
}
