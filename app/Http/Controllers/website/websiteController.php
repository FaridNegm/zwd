<?php

namespace App\Http\Controllers\website;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\services;
use App\post;
use App\teamWork;
use App\testmonials;
use App\siteSetting;

class websiteController extends Controller
{
    public function index(){
        $users = User::where('status' , 'admin')->get();
        $services = services::inRandomOrder()->paginate(3);
        $services_about = services::limit(6)->get();
        $contacts = siteSetting::all();
        $posts = post::limit(12)->orderBy('id' , 'DESC')->get();
        return view('website/index' , compact('users' ,'services' , 'services_about' , 'contacts' , 'posts'));
    }
}
