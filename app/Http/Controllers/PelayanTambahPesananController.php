<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Pesanan;
use App\Detail_pesanan;
use App\Users;
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
        if ($request->input('jumlah_pesanan') == 400){
            $pesanan = new Pesanan;
            $pesanan -> id_pesanan = $request->input('id_pesanan');
            $pesanan -> kode_makanan_minuman = $request->input('kode_makanan_minuman');
            $pesanan -> nomor_meja = $request->input('nomor_meja');
            $pesanan -> jumlah = $request->input('jumlah');
            $pesanan -> save(); 
        }else{
            $pesanan = new Pesanan;
            $pesanan -> id_pesanan = $request->input('id_pesanan');
            $pesanan -> kode_makanan_minuman = $request->input('kode_makanan_minuman');
            $pesanan -> nomor_meja = $request->input('nomor_meja');
            $pesanan -> jumlah = 1;
            $pesanan -> save(); 
        }

        return response()->json($pesanan);
    }

    
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

    public function simpanPesanan(Request $request){
        $koki = Users::where('role', 'koki')->get();

        foreach ($koki as $item){
            $dp = new Detail_pesanan;
            $dp -> id_pesanan = $request->input('id_pesanan');
            $dp -> id = $item->id;
            $dp -> status = 0;
            $dp -> notification = 0;
            $dp -> save();
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editPesanan(Request $request)
    {

        if($request->input('jumlah_pesanan') != 400){
            if($request->input('jumlah_pesanan') == 1 &&  $request->input('jumlah') == -1){
                Pesanan::where('id_pesanan', $request->input('id_pesanan'))->delete();  
            }else{
                Pesanan::where('id_pesanan', '=', $request->input('id_pesanan'))
                    ->where('kode_makanan_minuman', '=', $request->input('kode_makanan_minuman'))
                    ->update([ 'jumlah' =>  $request->input('jumlah_pesanan') + $request->input('jumlah')]);    
            }

            $pesanan = new Pesanan;
            $pesanan -> id_pesanan = $request->input('id_pesanan');
            $pesanan -> kode_makanan_minuman = $request->input('kode_makanan_minuman');
            $pesanan -> nomor_meja = $request->input('nomor_meja');
            $pesanan -> jumlah = $request->input('jumlah_pesanan') + $request->input('jumlah');
        }else{
            Pesanan::where('id_pesanan', '=', $request->input('id_pesanan'))
                    ->where('kode_makanan_minuman', '=', $request->input('kode_makanan_minuman'))
                    ->update([ 'jumlah' =>  $request->input('jumlah') ]);

            $pesanan = new Pesanan;
            $pesanan -> id_pesanan = $request->input('id_pesanan');
            $pesanan -> kode_makanan_minuman = $request->input('kode_makanan_minuman');
            $pesanan -> nomor_meja = $request->input('nomor_meja');
            $pesanan -> jumlah = $request->input('jumlah');
        
        }

        return response()->json($pesanan);
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
