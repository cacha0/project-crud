<?php

namespace App\Http\Controllers;

use App\Models\Sites;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompaniesController extends Controller
{
    //nampilin data
    public function index(){
        $companies = DB::table('companies')->paginate(5);
        return view('companies', ['companies' => $companies]);
    }

    public function tambahdata(){
        return view('tambahdata');
    }

    public function simpan(Request $request){
        DB::table('companies')->insert([
            ['name' => $request->name, 'address' => $request->address]
        ]);
        return redirect()->route('companies.data');
    }

    public function delete($id){
        DB::table('companies')->where('id',$id)->delete();
        return redirect()->route('companies.data');
    }
}
