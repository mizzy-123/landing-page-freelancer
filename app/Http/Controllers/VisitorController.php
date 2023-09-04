<?php

namespace App\Http\Controllers;

use App\Models\visitor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorevisitorRequest;
use App\Http\Requests\UpdatevisitorRequest;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $visitor = session()->getId();
        // $first_num = 100;
        $tamu = new visitor(); 
        $id_gen = "VIS".$visitor."MYID";
        
        $tamu->visitor_id = $id_gen;
        $tamu->ip_address = $req->ip();
        $tamu->user_agent = $req->header('User-Agent');
        $tamu->save();
        
        return view('landing_page.index');   
 


        // if($tamu->where('visitor_id', $id_gen)->first() != null){
        //       //jika visitor pernah visit
              
        // }else{
        //     //tambahkan data visitor
        //     if(visitor::pluck('id')->last() != null){
        //         // $num = visitor::pluck('id')->count();  
        //         $tamu->visitor_id = $id_gen;
        //         $tamu->ip_address = $req->ip();
        //         $tamu->user_agent = $req->header('User-Agent');
        //         $tamu->save();
               
        //     }else{
        //         $tamu->visitor_id = $id_gen;
        //         $tamu->ip_address = $req->ip();
        //         $tamu->user_agent = $req->header('User-Agent');
        //         $tamu->save();
        //         //  print_r(
        //         //    $id_gen,
        //         //    $tamu->visitor_id,
        //         //    $tamu->ip_address,
        //         //    $tamu->user_agent     
        //         // );
        //     }    
        // } 
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
     * @param  \App\Http\Requests\StorevisitorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorevisitorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function show(visitor $visitor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function edit(visitor $visitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatevisitorRequest  $request
     * @param  \App\Models\visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatevisitorRequest $request, visitor $visitor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function destroy(visitor $visitor)
    {
        //
    }
}
