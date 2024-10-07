<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    public function show(){
        $data['artikel'] = Artikel::all();
        $data['total'] = Artikel::count();
        return view('index',$data);
    }

    public function search(Request $request){
        $data['artikel'] = Artikel::where('alamat',$request->cari)->get();
        $data['total'] = $data['artikel']->count();
        return view('index',$data);
    }

    public function create(){
        return view('artikelcreate');
    }

    public function add(Request $request){
        $request->validate([
            'alamat' => 'required',
            'luas_tanah' => 'required',
            'jumlah_kamar' => 'required',
            'tahun_dibangun' => 'required',
            'harga' => 'required',
            'foto' => 'image'
        ]);

        $fileName = '';
        if($request->file('foto')){
            $extfile = $request->file('foto')->getClientOriginalExtension();
            $fileName = time().".".$extfile;
            $request->file('foto')->storeAs('foto',$fileName);
        }else{
            $fileName = '';
        }
        $artikel = Artikel::create([
            'alamat'=> $request->alamat,
            'luas_tanah'=> $request->luas_tanah,
            'jumlah_kamar'=> $request->jumlah_kamar,
            'tahun_dibangun'=> $request->tahun_dibangun,
            'harga'=> $request->harga,
            'foto'=> $fileName
        ]);
        if ($artikel) {
            Session::flash('pesan','data berhasil ditambahkan');
        }else{
            Session::flash('pesan','data gagal ditambahkan');
        }
        return redirect('index');
    }

    public function edit(Request $request){
        $data['artikel'] = Artikel::find($request->id);
        return view('artikeledit',$data);
    }

    public function delete(Request $request){
        $artikel = Artikel::find($request->id);
        $delete  = Artikel::where('id', $request->id)->delete();
        if($delete) {
            // if ($artikel->foto) {
            //     Storage::delete('foto/'.$artikel->foto);
            // }
            Session::flash('pesan', 'data berhasil dihapus');
        }else{
            Session::flash('pesan','data gagal ditambahkan');
        }
        return redirect('/index');
    }
    public function update(Request $request){
        $artikel  = Artikel::find($request->id);

        $fileName = '';
        if ($request->file('foto')) {
            $extfile = $request->file('foto')->getClientOriginalExtension();
            $fileName = time().".".$extfile;
            $request->file('foto')->storeAs('foto',$fileName);
        }
        $update = Artikel::where('id',$request->id)->update([
            'nama'=>$request->nama,
            'alamat'=> $request->alamat,
            'luas_tanah'=> $request->luas_tanah,
            'jumlah_kamar'=> $request->jumlah_kamar,
            'tahun_dibangun'=> $request->tahun_dibangun,
            'harga'=> $request->harga,
            'foto'=> $fileName
        ]);
        if ($update) {
            Session::flash('pesan','data berhasil diubah');
        }else{
            Session::flash('pesan','data gagal diubah');
        }
        return redirect('/index');
    }
    
}
