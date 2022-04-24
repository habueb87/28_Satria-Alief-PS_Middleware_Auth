<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class contController extends Controller{
    
    public function index(){
        return view('contact');
    }
}
