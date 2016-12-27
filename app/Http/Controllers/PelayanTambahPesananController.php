<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Pesanan;
use DB;

class PelayanTambahPesananController extends Controller
{
     public function __construct()
    {
       $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('restourant.pelayan.tambahpesanan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pesanan = new Pesanan;
        $pesanan -> id_pesanan = $request->input('id_pesanan');
        $pesanan -> kode_makanan_minuman = $request->input('kode_makanan_minuman');
        $pesanan -> nomor_meja = $request->input('nomor_meja');
        $pesanan -> jumlah = 1;
        $pesanan -> save(); 

        return response()->json($pesanan);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nomor_meja ,$id_pesanan)
    {
        $menus = Menu::all();
        $pesanan = Pesanan::where('id_pesanan', $id_pesanan)->get();

        return view('restourant.pelayan.tambahpesanan')
                ->with('menus', $menus)
                ->with('id_pesanan', $id_pesanan)
                ->with('nomor_meja', $nomor_meja)
                ->with('pesanan', $pesanan);  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editPesanan(Request $request)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
