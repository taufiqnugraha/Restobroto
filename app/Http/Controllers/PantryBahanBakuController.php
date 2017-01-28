<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use App\Bahan_baku;
use Illuminate\Http\Request;


class PantryBahanBakuController extends Controller
{
     public function tambahBahanBaku()
    {
        //$bahan_pokok = Bahan_baku::where('jenis', 'Bahan Pokok')->get();
        return view('restourant.pantry.tambahbahanbaku');
    }
    public function registerPantry(Request $req)
    {
         $rules = array(
        'nama_bahan_baku' => 'required',
        'stok' => 'required',
        'harga' => 'required',
        'jenis' => 'required',
        'satuan' => 'required'
        
      );
      // for Validator
      $validator = Validator::make ( Input::all (), $rules );
      if ($validator->fails())
      return Response::json(array('errors' => $validator->getMessageBag()->toArray()));

      else {
        $bahan_baku = new Bahan_baku();
        $bahan_baku->nama_bahan_baku = $req->nama_bahan_baku;
        $bahan_baku->stok = $req->stok;
        $bahan_baku->harga = $req->harga;
        $bahan_baku->jenis = $req->jenis;
        $bahan_baku->satuan = $req->satuan;
        $bahan_baku->save();
        return view('restourant.pantry.tambahbahanbaku');
        
      }


    }

}
