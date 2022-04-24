<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class logController extends Controller{
    
    public function index(){
        return view('login');
    }
    public function login1(Request $request){
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if($login1 = DB::select('SELECT * FROM users WHERE email = ? AND password = ?', [$request->email,$request->password])){
            $request->session()->regenerate();
            return redirect()->intended(route('index'));
        }
        return back()->withErrors([
            'salah' => 'Login Failed!',
        ]);
    }
}
