<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\SettingUpdateRequest;
use App\Models\Setting;
use App\Utils\ImageUpload;
use Image;
class SettingController extends Controller
{
    
    public function index()
    {
        return view('dashboard.settings.index');
        }


        // update setting first
        public function update(SettingUpdateRequest $request, Setting $setting)
        
        {
            $setting->update($request->validated());
            if ($request->has('logo')) {
               $logo= ImageUpload::uploadImage($request->logo,'/img', 200, 200);
               $setting->update(['logo' => $logo]);
            }
            if ($request->has('favicon')) {
                $favicon= ImageUpload::uploadImage($request->favicon,'/img', 66, 66);
                $setting->update(['favicon' => $favicon]);
             }
 

            return redirect()->route('dashboard.settings.index')->with('success', 'Setting Updated Successfully');
           
    
        }

        
}
