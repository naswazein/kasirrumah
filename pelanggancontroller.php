<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\pelanggan;

class pelanggancontroller extends Controller
{
    function tampilpelanggan()
    {
        $judul = "Selamat Datang";
        $pelanggan = DB::table('pelanggan')->get();

       // $pelanggan = DB::where('Id' , Auth::user()->id)->get();
        return view('pelanggan' , ['judul' => $judul, 'pelanggan' => $pelanggan]);
        }
        //  function tampilpelanggan()
        // {
        //  echo "Tampillll";
        // }
}
        function deletepelanggan($id){
            $deleted=DB::table('pelanggan')->where('PelangganID', $id)->delete();
            if($deleted){
            return redirect()->back();
            }
}