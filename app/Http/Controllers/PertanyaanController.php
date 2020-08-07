<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PertanyaanController extends Controller
{
    //
    public function index(){
        $pertanyaan = DB::table('pertanyaan')->get();
        // dd($pertanyaan->all());
        return view('forum.index', compact('pertanyaan'));

    }
    public function create(){
        return view('forum.pertanyaan.create');

    }
    public function store(Request $request){
        // dd($request->all());
        $query = DB::table('pertanyaan')->insert([
            "judul" => $request["judul"],
            "isi" => $request["isi"]
            ]);

            $validatedData = $request->validate([
                'judul' => 'required',
                'isi' => 'required|max:255',
            ]);
            return redirect('/pertanyaan')->with('success', 'Pertanyaan berhasil dipost');

    } 
    public function show($id){
        $pertanyaan = DB::table('pertanyaan')-> where('id',$id)->first();
        return view('forum.pertanyaan.show', compact('pertanyaan'));

    }
    public function edit($id){
        $pertanyaan = DB::table('pertanyaan')-> where('id',$id)->first();
        return view('forum.pertanyaan.edit', compact('pertanyaan'));
    }
    public function update($id,Request $request){

        $query = DB::table('pertanyaan')
        ->where('id', $id)->update([
            'judul' => $request['judul'],
            'isi' => $request['isi'],
            ]);

            return redirect('/pertanyaan')->with('success', 'Pertanyaan berhasil diupdate');
    }
    public function destroy($id){
        $query= DB ::table('pertanyaan')->where('id', $id)->delete();
        return redirect('/pertanyaan')->with('success', 'Pertanyaan berhasil dihapus');
    }
}
