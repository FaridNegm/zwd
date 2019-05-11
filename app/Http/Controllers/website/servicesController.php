<?php

namespace App\Http\Controllers\website;
use App\services;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class servicesController extends Controller
{
    public function index(){
        $services = services::paginate(9);
        return view('website/services' , compact('services'));
    }

    public function single_service($name){
        $single_service = services::limit(1)->where('title' , $name)->get();
        $related_services = services::limit(3)->InRandomOrder()->get();
        return view('website/single_service' , compact('single_service' , 'related_services'));
    }

}
