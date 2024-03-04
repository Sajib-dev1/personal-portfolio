<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceList;
use App\Models\ServiceModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ServiceModelController extends Controller
{
    function model_service(){
        $services = Service::all();
        $service_listes = ServiceList::all();
        $model_services = ServiceModel::all();
        return view('admin.aplication.model_service',[
            'services'=>$services,
            'service_listes'=>$service_listes,
            'model_services'=>$model_services,
        ]);
    }

    function model_service_store(Request $request){
        $image = $request->image;
        $extension = $image->extension();
        $file_name = $request->service_name.'-'. uniqid().'.'.$extension;
        Image::make($image)->save(public_path('uploads/service/'.$file_name));

        ServiceModel::insert([
            'service_name'=>$request->service_name,
            'service_description'=>$request->service_description,
            'service_link'=>$request->service_link,
            'service_list'=>implode(',',$request->service_list),
            'image'=>$file_name,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('success','Model service added successfull');
    }

    function model_service_delete($id){
        $ser_info = ServiceModel::find($id);
        $delete_form = public_path('uploads/service/'.$ser_info->image);
        unlink($delete_form);
        ServiceModel::find($id)->delete();

        return back()->with('delete','Model service delete successfull');
    }


    //service list
    function service_list(){
        $service_listes = ServiceList::all();
        return view('admin.aplication.service_list',[
            'service_listes'=>$service_listes,
        ]);
    }

    function service_list_store(Request $request){
        $request->validate([
            'service_name'=>'required',
        ]);
        ServiceList::insert([
            'service_name'=>$request->service_name,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('success','service added successfull');
    }

    function service_list_edit($id){
        $service_list_info = ServiceList::find($id);
        return view('admin.aplication.service_list_edit',[
            'service_list_info'=>$service_list_info,
        ]);
    }

    function service_list_update(Request $request,$id){
        $request->validate([
            'service_name'=>'required',
        ]);
        ServiceList::find($id)->update([
            'service_name'=>$request->service_name,
        ]);
        return back()->with('update','service update successfull');
    }

    function service_list_delete($id){
        ServiceList::find($id)->delete();

        return back()->with('delete','service delete successfull');
    }
}
