<?php

namespace App\Http\Controllers;

use App\Setting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SettingController extends Controller
{
    public function create()
    {
        return view('admin.settings.create');
    }

    public function store(Request $request)
    {
        $setting = new Setting();
        $setting->site_title = $request->site_title;
        $setting->about_us = $request->about_us;
        $setting->fb_link = $request->fb_link;
        $setting->twitter_link = $request->twitter_link;
        $setting->pinterest_link = $request->pinterest_link;
        $setting->vemio_link = $request->vemio_link;
        $setting->youtube_link = $request->youtube_link;
        $setting->created_at = Carbon::now();
        $logo = $request->file('logo');
        $favicon = $request->file('favicon');

        if ($logo) {
            $logoImageName = Str::random(10);
            $ext = strtolower($logo->getClientOriginalExtension());
            $logoFullName = $logoImageName . '.' . $ext;
            $uploadPath = 'public/settings-images/';
            $logoImageUrl = $uploadPath . $logoFullName;
            $success = $logo->move($uploadPath, $logoFullName);
            if ($success) {
                $setting->logo = $logoImageUrl;

            }
        }
        if ($favicon) {
            $favIconImageName = Str::random(8);
            $ext = strtolower($favicon->getClientOriginalExtension());
            $faviconFullName = $favIconImageName . '.' . $ext;
            $uploadPath = 'public/settings-images/';
            $favIconImageUrl = $uploadPath . $faviconFullName;
            $success = $favicon->move($uploadPath, $faviconFullName);
            if ($success) {
                $setting->favicon = $favIconImageUrl;

            }
        }

        $setting->save();
        toast('settings created!', 'success');
        return redirect()->back();

    }

    public function all()
    {
        $settings = Setting::all();
        return view('admin.settings.list', compact('settings'));
    }

    public function delete($id)
    {
        $setting = Setting::findOrFail($id);

        unlink($setting->logo);
        unlink($setting->favicon);

        $setting->delete();

        toast('settings deleted!', 'success');
        return redirect()->back();
    }

    public function edit($id)
    {
        $setting = DB::table('settings')->where('id',$id)->first();

        return view('admin.settings.edit', compact('setting'));

    }

    public function update(Request $request,$id)
    {

        $setting = Setting::find($id);
        $setting->site_title = $request->site_title;
        $setting->about_us = $request->about_us;
        $setting->fb_link = $request->fb_link;
        $setting->twitter_link = $request->twitter_link;
        $setting->pinterest_link = $request->pinterest_link;
        $setting->vemio_link = $request->vemio_link;
        $setting->youtube_link = $request->youtube_link;
        $setting->updated_at = Carbon::now();
        $oldLogo = $setting->logo;
        $oldFavicon = $setting->favicon;
        $logo = $request->file('logo');
        $favicon = $request->file('favicon');

        if ($logo) {
            $logoImageName = Str::random(10);
            $ext = strtolower($logo->getClientOriginalExtension());
            $logoFullName = $logoImageName . '.' . $ext;
            $uploadPath = 'public/settings-images/';
            $logoImageUrl = $uploadPath . $logoFullName;
            $success = $logo->move($uploadPath, $logoFullName);
            if ($success) {
                $setting->logo = $logoImageUrl;
                $setting->save();
                unlink($oldLogo);
                toast('setting updated!', 'success');
                return redirect()->back();
            }
        }
        if ($favicon) {
            $favIconImageName = Str::random(8);
            $ext = strtolower($favicon->getClientOriginalExtension());
            $faviconFullName = $favIconImageName . '.' . $ext;
            $uploadPath = 'public/settings-images/';
            $favIconImageUrl = $uploadPath . $faviconFullName;
            $success = $favicon->move($uploadPath, $faviconFullName);
            if ($success) {
                $setting->favicon = $favIconImageUrl;
                $setting->save();
                unlink($oldFavicon);
                toast('setting updated!', 'success');
                return redirect()->back();
            }
        }

        else{
            $setting->save();
            toast('settings updated!', 'success');
            return redirect()->back();
        }

    }

}
