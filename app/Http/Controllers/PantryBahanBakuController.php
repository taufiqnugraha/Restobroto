<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PantryBahanBakuController extends Controller
{
     public function tambahBahanBaku()
    {
        //$bahan_pokok = Bahan_baku::where('jenis', 'Bahan Pokok')->get();
        return view('restourant.pantry.tambahbahanbaku');
    }

}
