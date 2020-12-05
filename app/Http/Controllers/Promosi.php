<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ModelPromosi;
use Session;

class Promosi extends Controller
{
    public function pagination(){
        $promosi = DB::table('list_promosi')->paginate(6);
        return response()->json($promosi);
    }

    public function json(){
        $promosi = DB::table('list_promosi')->get();
        return response() -> json([
            'data' => $promosi
        ],200) -> header('Access-Control-Allow-Origin','*');
    } 

    public function get_id_json($id){
        /*
        $events = DB::table('list_events')->where('id',$id)->get();
        return response() -> json($events) -> header('Access-Control-Allow-Origin','*');
        */
        return ModelPromosi::find($id);
    }

    public function get_promosi(){
        $promosi = DB::table('list_promosi')->paginate(6);
        return view('table-promosi',['promosi'=>$promosi]);
    }

    public function get_form(){
        return view('form_promosi');
    }

    public function post_promosi(Request $request){
        //untuk save dan upload foto
        $file = $request->file('foto');
        $foto = $file->getClientOriginalName();
        $tujuan_upload = "img_promotion";
        $file->move($tujuan_upload,$file->getClientOriginalName());

        //untuk membuat validasi form yang dibuat
        $messages = [
            'required' => ':attribute wajib di isi kak :)',
            'max' => ':attribute maksimal wajib di isi :max karakter ya kak :)',
            'min' => ':attribute minimal wajib di isi :min karakter ya kak :)'
        ];

        $request->validate([
            'judul_promosi' => 'required|max:100',
            'deskripsi' => 'required|min:10|max:2000',
            'periode' => 'required',
            'deskripsi' => 'required',
            'kontak' => 'required'
        ],$messages);
        
        //insert data ke database
        DB::table('list_promosi')->insert([
            'judul_promosi' => $request->judul_promosi,
            'penulis' => $request->penulis,
            'periode'=> $request->periode,
            'syarat' => $request->syarat,
            'foto' => $foto,
            'deskripsi' => $request->deskripsi,
            'kontak' =>$request->kontak
        ]);

        Session::flash('berhasil','Data berhasil di tambah kak :)');
        return redirect('promosi');
    }

    public function edit_promosi($id){
        $promosi = DB::table('list_promosi')->where('id',$id)->get();
        return view('edit_promosi',['promosi' => $promosi]);
    }

    public function update_promosi(Request $request){
        $file = $request->file('foto');
        $foto = $file->getClientOriginalName();
        $tujuan_upload = "img_promotion";
        $file->move($tujuan_upload,$foto);

        //update data ke database
        DB::table('list_promosi')->where('id',$request->id)->update([
            'judul_promosi' => $request->judul_promosi,
            'penulis' => $request->penulis,
            'periode'=> $request->periode,
            'syarat' => $request->syarat,
            'foto' => $foto,
            'deskripsi' => $request->deskripsi,
            'kontak' =>$request->kontak
        ]);
        
        Session::flash('sukses','Data berhasil di update kak :)');
        return redirect('promosi');
    }

    public function delete_promosi($id){
        DB::table('list_promosi')->where('id',$id)->delete();
        return redirect()->back();
    }
}
