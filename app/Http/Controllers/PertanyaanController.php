<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pertanyaans;
class PertanyaanController extends Controller
{
    //
    public function index(){
        $pertanyaan = Pertanyaans::all();
        // $pertanyaan = DB::table('pertanyaan')->get();
        // dd($pertanyaan->all());
        return view('forum.index', compact('pertanyaan'));

    }
    public function create(){
        return view('forum.pertanyaan.create');

    }

    

    public function store(Request $request){
        // dd($request->all());
        // $query = DB::table('pertanyaan')->insert([
        //     "judul" => $request["judul"],
        //     "isi" => $request["isi"]
        //     ]);

        //     $validatedData = $request->validate([
        //         'judul' => 'required',
        //         'isi' => 'required|max:255',
        //     ]);
        //     return redirect('/pertanyaan')->with('success', 'Pertanyaan berhasil dipost');

        $p = new Pertanyaans;
        $p->judul = $request->judul;
        $p->isi = $request->isi;

        $p->save();
        return redirect('/pertanyaan');

    } 
    public function show($id){
        // $pertanyaan = Pertanyaans::where('id', $id)->first();
        $pertanyaan = Pertanyaans::find($id);
        //QUERY BUILDER
        // $pertanyaan = DB::table('pertanyaan')-> where('id',$id)->first();
        return view('forum.pertanyaan.show', compact('pertanyaan'));

    }
    public function edit($id){

        $pertanyaan = Pertanyaans::find($id);
        return view('forum.pertanyaan.edit', compact('pertanyaan'));
    }
    public function update($id,Request $request){

        // $pertanyaan = Pertanyaans::find($id);

        // $pertanyaan->judul = $request['judul'];
        // $pertanyaan->isi= $request['isi'];
        // $pertanyaan->save();

        $pertanyaan = Pertanyaans::where('id', $id)->update(["judul" => $request["judul"],"isi" => $request["isi"]]);

            return redirect('/pertanyaan')->with('success', 'Pertanyaan berhasil diupdate');
    }
    public function destroy($id){
        // $pertanyaan = Pertanyaans::find($id);
        // $pertanyaan->delete();

        $pertanyaan = Pertanyaans::destroy($id);
        return redirect('/pertanyaan')->with('success', 'Pertanyaan berhasil dihapus');
    }
}
