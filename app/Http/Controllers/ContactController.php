<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function contact(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required',
        ]);
        Contact::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'message'=>$request->message,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('success','Your message send successfully');
    }

    function contact_info(){
        $contacts = Contact::latest()->get();
        return view('admin.contact.contact_info',[
            'contacts'=>$contacts,
        ]);
    }

    function contact_delete($id){
        Contact::find($id)->delete();
        return back()->with('delete','Delete successfull');
    }
}
