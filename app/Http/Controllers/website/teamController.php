<?php

namespace App\Http\Controllers\website;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class teamController extends Controller
{
    public function index(){
        $users = User::where('status' , 'Admin')->paginate(8);
        return view('website/team' , compact('users'));
    }
}
