<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelanggan;
use DB;

class PelayanCekKesediaanMejaController extends Controller
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
        $mejas = Pelanggan::all(); 
        return view('restourant.pelayan.cekkesediaanmeja')->with('mejas', $mejas);
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editItem(Request $request)
    {
        DB::table('pelanggan')
        ->where('nomor_meja', $request->input('nomor_meja'))
        ->limit(1)
        ->update(array('status'=> $request->input('status')));

       /* $meja = Pelanggan::where('nomor_meja', $request->input('nomor_meja'));
        $meja -> status = $request->input('status');*/
        

        //if(!$request->status == '1'){
           // return response()->json();
        //}
        
    }

     public function ajax(){
        ini_set('max_execution_time', 1);
        $data = Pelanggan::all();

        return response()->json($data);
            
                //'nomor_meja' => $data -> nomor_meja,
                //'status' => $data -> status
            
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
