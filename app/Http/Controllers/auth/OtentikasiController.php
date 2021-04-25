<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class OtentikasiController extends Controller
{
    public function index(){
        return view('login');
    }

    public function login(Request $request){
        //dd($request->all());
        $data = User::where('email', $request->email)->firstOrFail();
        if ($data){
            if(Hash::check($request->password, $data->password)){
                return redirect('companies');
            }
            return redirect('/')->with('message', 'Email atau Password Salah');
        }
    }
}
