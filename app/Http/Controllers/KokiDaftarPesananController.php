<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail_pesanan;
use App\Pesanan;
use App\Menu;
use App\User;

class KokiDaftarPesananController extends Controller
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
        $detailpesanan = Detail_pesanan::all();
        $pesanan = Pesanan::join('menu', 'menu.kode_makanan_minuman', 'pesanan.kode_makanan_minuman')->get();

        return view('restourant.koki.daftarpesanan')
            ->with('detailpesanan', $detailpesanan)
            ->with('pesanan', $pesanan);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    public function notification(Request $request){
        ini_set('max_execution_time', 1); 

        $data = Detail_pesanan::where('notification', 0)
                ->where('id', $request->input('id_user'))->count();

            return response()->json($data);

       /* while (Detail_pesanan::where('status' , 0)->where('id', $request->input('id_user'))->count() < 1){
            usleep(1000);
        }

        if(Detail_pesanan::where('status' , 0)->where('id', $request->input('id_user'))->count() > 0){
            $dp = Detail_pesanan::where('status' , 0)->where('id', $request->input('id_user'))->first();
            $id = $dp->id_detail_pesanan;
            $edit = Detail_pesanan::where('id_detail_pesanan', $id)->first();
            $edit->status = 1;
            $edit->save();
            
            
        }*/
        
    }

    public function daftarPesanan(Request $request){
        ini_set('max_execution_time', 1);


        //return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
