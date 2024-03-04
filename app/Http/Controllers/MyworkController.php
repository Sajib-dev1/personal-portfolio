<?php

namespace App\Http\Controllers;

use App\Models\Mywork;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MyworkController extends Controller
{
    function mywork(){
        $works = Mywork::first();
        $myworks = Mywork::all();
        return view('admin.work.mywork',[
            'works'=>$works,
            'myworks'=>$myworks,
        ]);
    }

    function mywork_update(Request $request,$id){
        $request->validate([
            'clients'=>'required',
            'projects'=>'required',
            'awards'=>'required',
            'experience'=>'required',
        ]);

        Mywork::find($id)->update([
            'clients'=>$request->clients,
            'projects'=>$request->projects,
            'awards'=>$request->awards,
            'experience'=>$request->experience,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('update','Data updated successfull');
    }
}
