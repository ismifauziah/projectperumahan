<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function login(){
        return view('/login');
    }
    public  function auth(Request $request){
        $validasi = $request->validate(rules:[
            'email'=>['required'],
        'password'=>['required']
        ]);
        if(Auth::attempt($validasi)){
            return redirect('/dashboard');
        }else{
            return back()->withErrors([
                'email'=>'maaf,email anda salah',
            ]);
        }
        return redirect()->back()->with('pesan','mohon maaf login anda gagal');
    }
    function logout(){
        Auth::logout();
        return redirect('/login');
    }
    public function home(){
        return view('perumahan');
    }
    public function tentangkami(){
        return view('tentangkami');
    }
    public function perumahan2(){
        return view('perumahan2');
    }

    public function perumahan(){
        $data['artikel'] = Artikel::all();
        return view('perumahan', $data);
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function isi1(){
        return view('isi1');
    }
    public function isi2(){
        return view('isi2');
    }
    public function isi3(){
        return view('isi3');
    }
    public function isi4(){
        return view('isi4');
    }
    public function isi5(){
        return view('isi5');
    }
    public function isi6(){
        return view('isi6');
    }

}
