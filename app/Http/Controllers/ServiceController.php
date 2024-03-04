<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
{
    function services(){
        $services = Service::all();
        return view('admin.services.service',[
            'services'=>$services,
        ]);
    }
    function service_store(Request $request){
        $request->validate([
            'service_name'=>'required',
            'service_short_description'=>'required',
            'icon'=>'required',
        ]);

        $icon = $request->icon;
        $extension = $icon->extension();
        $file_name = $request->service_name.'-'. uniqid().'.'.$extension;
        Image::make($icon)->save(public_path('uploads/service/'.$file_name));

        Service::insert([
            'service_name'=>$request->service_name,
            'service_short_description'=>$request->service_short_description,
            'icon'=>$file_name,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('success','Service added successfull');
    }

    function getservicestatus(Request $request){
        Service::find($request->service_id)->update([
            'status'=>$request->status,
        ]);
    }

    function service_edit($id){
        $service_info = Service::find($id);
        return view('admin.services.service_edit',[
            'service_info'=>$service_info,
        ]);
    }

    function service_update(Request $request,$id){
        $request->validate([
            'service_name'=>'required',
            'service_short_description'=>'required',
        ]);
        if($request->icon == null){
            Service::find($id)->update([
                'service_name'=>$request->service_name,
                'service_short_description'=>$request->service_short_description,
            ]);
            return back()->with('update','Service update successfull');
        }
        else{
            $request->validate([
                'service_name'=>'required',
                'service_short_description'=>'required',
                'icon'=>'required',
            ]);
            $ser_info = Service::find($id);
            $delete_form = public_path('uploads/service/'.$ser_info->icon);
            unlink($delete_form);

            $icon = $request->icon;
            $extension = $icon->extension();
            $file_name = $request->service_name.'-'. uniqid().'.'.$extension;
            Image::make($icon)->save(public_path('uploads/service/'.$file_name));

            Service::find($id)->update([
                'service_name'=>$request->service_name,
                'service_short_description'=>$request->service_short_description,
                'icon'=>$file_name,
            ]);
            return back()->with('update','Service update successfull');
        }
    }

    function service_delete($id){
        $ser_info = Service::find($id);
        $delete_form = public_path('uploads/service/'.$ser_info->icon);
        unlink($delete_form);
        Service::find($id)->delete();

        return back()->with('delete','Service delete successfull');
    }
}
