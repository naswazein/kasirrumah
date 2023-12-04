<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class penjualancontroller extends Controller
{
    function tampilpenjualan()
    {
        $judul = "Selamat Datang";
        $penjualan = DB::table('penjualan')->get();

       // $penjualan = DB::where('Id' , Auth::user()->id)->get();
        return view('penjualan' , ['judul' => $judul, 'penjualan' => $penjualan]);
        }
        //  function tampilpenjualan()
        // {
        //  echo "Tampillll";
        // }
}
    