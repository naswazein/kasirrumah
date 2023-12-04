<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class Controller extends BaseController
{
    public function index ()
    {
        $judul = "welcome";
        //$kasir = DB::table('')->get();
        return view('home', ['TextJudul' =>$judul]);
    }
    function tampilproduk()
    {
        $judul = "Selamat Datang";
        $produk = DB::table('produk')->get();

        // $produk = DB::where('id' , Auth::user()->id)->get();
        return view('produk' , ['judul' => $judul, 'produk' => $produk]);
        }
        //  function tampilproduk()
        //  {
        //     echo "Tampillll";
          }





























































































































































































































