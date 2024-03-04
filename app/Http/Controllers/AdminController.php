<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    function profile(){
        return view('admin.profile');
    }

    function admin_profile_update(Request $request){
        $request->validate([
            'name'=>'required',
        ]);
        if($request->image == null){
            if($request->password == ''){
                User::find(Auth::id())->update([
                    'name'=>$request->name,
                ]);
                return back()->with('update','Profile update successfull');
            }
            else{
                $request->validate([
                    'password'=>'required',
                ]);
                User::find(Auth::id())->update([
                    'name'=>$request->name,
                    'password'=>bcrypt($request->password),
                ]);
                return back()->with('update','Profile update successfull');
            }
        }
        else{
            $request->validate([
                'image'=>'required',
            ]);
            $image = $request->image;
            $extension = $image->extension();
            $file_name = Auth::id().'.'.$extension;
            Image::make($image)->save(public_path('uploads/admin/'.$file_name));

            if($request->password == ''){
                User::find(Auth::id())->update([
                    'name'=>$request->name,
                    'photo'=>$file_name,
                ]);
                return back()->with('update','Profile update successfull');
            }
            else{
                $request->validate([
                    'image'=>'required',
                    'password'=>'required',
                ]);
                User::find(Auth::id())->update([
                    'name'=>$request->name,
                    'password'=>bcrypt($request->password),
                    'photo'=>$file_name,
                ]);
                return back()->with('update','Profile update successfull');
            }
        }
    }

    function admin_logo_update(Request $request){
        if($request->logo == null){
            $request->validate([
                'logo_text'=>'required',
            ]);
            $logo_text = $request->logo_text;
            $extension = $logo_text->extension();
            $file_text_name = uniqid().'.'.$extension;
            Image::make($logo_text)->save(public_path('uploads/admin/'.$file_text_name));
    
            User::find(Auth::id())->update([
                'logo_text'=>$file_text_name,
            ]);
            return back()->with('update','Profile update successfull');
        }
        else{
            $request->validate([
                'logo'=>'required',
            ]);
            $logo = $request->logo;
            $extension = $logo->extension();
            $file_name = uniqid().'.'.$extension;
            Image::make($logo)->resize(70,70)->save(public_path('uploads/admin/'.$file_name));

            User::find(Auth::id())->update([
                'logo'=>$file_name,
            ]);
            return back()->with('update','Profile update successfull');
        }
    }
}
