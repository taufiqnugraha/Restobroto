<?php

namespace App\Http\Controllers;
use App\Pertanyaan;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Validator;
use Response;
use DB;
use Illuminate\Support\Facades\Input;
class CustomerserviceContoller extends Controller
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
        return view('restourant.customerservice.daftarpertanyaan');
    }
     public function olahkuisioner()
    {	
        $today = Carbon::today();
        $collection = Pertanyaan::select(DB::raw('year(updated_at) as year'),
        DB::raw('DATE_FORMAT(updated_at,"%M") as month'),
        DB::raw('avg(pertanyaan1) as pertanyaan1'),
        DB::raw('avg(pertanyaan2) as pertanyaan2'),
        DB::raw('avg(pertanyaan3) as pertanyaan3'))
        ->groupBy('month')
        ->orderBy('month','ASC')->get();
        
        return view('restourant.customerservice.olahpertanyaan')->with('collection',$collection);
    }
    public function tambahKuisioner(Request $req){
        $rules = array(
        'pertanyaan1' => 'required',
        'pertanyaan2' => 'required',
        'pertanyaan3' => 'required',
        'saran' => 'required'
       
       
      );
      // for Validator
      $validator = Validator::make ( Input::all (), $rules );
      if ($validator->fails())
      return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
      else {
        $pertanyaan = new Pertanyaan();
        $pertanyaan->pertanyaan1 = $req->pertanyaan1;
        $pertanyaan->pertanyaan2 = $req->pertanyaan2;
        $pertanyaan->pertanyaan3 = $req->pertanyaan3;
        $pertanyaan->saran = $req->saran;
        $pertanyaan->save(); 

        return view('restourant.customerservice.daftarpertanyaan');
        
      }   
    }
    public function pertanyaan()
    {

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
        //
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
