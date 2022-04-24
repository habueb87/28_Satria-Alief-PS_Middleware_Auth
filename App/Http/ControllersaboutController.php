<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class aboutController extends Controller{
    
    public function index(){
        return view('about',[
            "title" => "about",
            "posts" => Post::all()
        ]);
    }
    public function show($slug){
        return view('about',[
            "title" => "Single Post",
            "post" => Post::find($slug)
        ]);
    }
}
