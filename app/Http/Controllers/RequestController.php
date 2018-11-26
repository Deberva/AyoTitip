<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReequestModel;

class RequestController extends Controller
{
    function request(){
      return view('Request.CreateRequest');
    }
    function add(Request $request){
      $req = new ReequestModel;

      $req->nama = $request->nama;
      $req->nama_barang = $request->nama_barang;
      $req->harga_barang = $request->harga;
      $req->deskripsi = $request->deskripsi;

      $req->save();
      return redirect('/home');
    }
}
