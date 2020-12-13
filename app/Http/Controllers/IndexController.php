<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Login;
use App\Models\Register;
use Session;

class IndexController extends Controller
{

    protected $maxAttempts = 3;
    protected $decayMinutes = 2;

    public function __construct()
    {
        $this->middleware('guest:login');
    }

    public function get_data()
    {
        if(session('berhasil_login')){
            return view('index');
        }
        else{
            return redirect('/');
        }
    }

    public function syarat_ketentuan(){
        return view('syarat');
    }

    public function kebijakan_privasi(){
        return view('privasi');
    }

    public function login(){
        return view('login');
    }
    
    public function register(){
        return view('register');
    }

    public function postRegister(Request $request){
        Register::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return redirect('/');
    }

    public function auth(Request $request){
        $data = Login::where('username',$request->username)->firstOrFail();
        
        if ($data){
            if($data->password == $request->password){
                session(['berhasil_login' => true]);
                return redirect('/home');
            }
        }
        return redirect('/')->with('gagal','Maaf username atau password anda salah');
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/');
    }
}
