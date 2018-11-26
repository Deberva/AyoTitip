<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;
class TripController extends Controller
{
    function create(){
      return view('Trip.createTrip');
    }
    function add(Request $request){
      $trip = new Trip;

      $trip->nama = $request->nama;
      $trip->tujuan = $request->tujuan;
      $trip->tanggal_pergi = $request->tanggal_pergi;
      $trip->tanggal_kembali = $request->tanggal_kembali;
      $trip->kecamatan = $request->kecamatan;

      $trip->save();
      return redirect('/home');
    }
    function tampil(){
      $trip = Trip::all();
      return view('Trip.tampil')->with('trip',$trip)->With('no',1);
    }
}
