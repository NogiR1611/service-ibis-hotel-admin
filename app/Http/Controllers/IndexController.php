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

    public function home(Request $request){
        $login = $request->session()->get('username_login');
        return view('index',['login' => $login]);
    }

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

    public function syarat_ketentuan(Request $request){
        $login = $request->session()->get('username_login');
        return view('syarat',['login' => $login]);
    }

    public function kebijakan_privasi(Request $request){
        $login = $request->session()->get('username_login');
        return view('privasi',['login' => $login]);
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
        $login = Login::where('username',$request->username)->firstOrFail();
        
        if ($login  == null){
            return redirect('/')->with('gagal','Maaf username anda tidak terdaftar');
        }
        elseif ($login){
            if($login->password == $request->password){
                session([
                    'berhasil_login' => true,
                    'username_login' => $login
                ]);
                return view('index',['login' => $login]);
            }
            else{
                return redirect('/')->with('gagal','Maaf username atau password anda salah');
            }
        }
        else{
            return redirect('/')->with('gagal','Mohon username dan passwordnya untuk di isi');
        }
        /*
        if ($login){
            if($login->password == $request->password){
                session([
                    'berhasil_login' => true,
                    'username_login' => $login
                ]);
                return view('index',['login' => $login]);
            }
            else{
                return redirect('/')->with('gagal','Maaf username atau password anda salah');
            }
        }
        else{
            return redirect('/')->with('gagal','Maaf username anda tidak terdaftar');
        }
        */
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/');
    }
}
