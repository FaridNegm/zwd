<?php

namespace App\Http\Controllers\website;

use App\post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class projectController extends Controller
{

    public function index(){
        $posts = post::orderBy('id' , 'Desc')->paginate(4);
        return view('website/projects' , compact('posts'));
    }

}
