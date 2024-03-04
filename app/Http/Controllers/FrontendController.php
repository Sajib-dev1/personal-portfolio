<?php

namespace App\Http\Controllers;

use App\Models\Mywork;
use App\Models\Service;
use App\Models\ServiceModel;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index(){
        $services = Service::where('status',1)->get();
        $model_services = ServiceModel::all();
        $works = Mywork::first();
        return view('frontend.index',[
            'services'=>$services,
            'model_services'=>$model_services,
            'works'=>$works,
        ]);
    }
}
