<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ModelPesan;
use App\Models\Login;
use Session;

class PesanKlien extends Controller
{ 
    public function get_form(){
        return view('testing');
    }

    public function get_inbox(Request $request){
        $pesan_klien = DB::table('inbox_clients')->paginate(5);
        $login = $request->session()->get('username_login');
        return view('data_inbox',['pesan_klien' => $pesan_klien,'login' => $login]);
    }

    public function get_id_inbox($id,Request $request){
        $pesan_klien = DB::table('inbox_clients')->where('id',$id)->get();
        $login = $request->session()->get('username_login');
        return view('pesan_klien',['pesan_klien' => $pesan_klien,'login' => $login]);
    }

    public function post_messages(Request $request){
        DB::table('inbox_clients')->insert([
            'nama_kontak'=> $request->nama_kontak,
            'email'=> $request->email,
            'pesan'=>$request->pesan
        ]);
        
        return response()->json([
            'nama_kontak'=>$request->nama_kontak,
            'email'=>$request->email,
            'pesan'=>$request->pesan
        ])->header('Access-Control-Allow-Origin', '*');
    }

    public function delete_inbox($id){ 
        DB::table('inbox_clients')->where('id',$id)->delete();

        Session::flash('berhasil','Pesan berhasil dihapus kak :)');
        return redirect('/inbox'); 
    }
}