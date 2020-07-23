<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ads;
use App\cars;
use DB;
class adsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    public function adsView($id){
        $row = ads::find($id);
        return view('users.ads-view')->with('row',$row);
    }

    public function adsDelete($id){
         //delete news
        
            $ads = ads::find($id);

            $table = $ads->table_name;
            $product_id = $ads->product_id;

            if($table == "cars"){
                $cars = cars::where('product_id',$product_id)->first();
               
                //delete all ads images from the folder
                $images = explode('|',$cars->images);
                foreach($images as $image){
                    if(file_exists(public_path('uploads/ads/'.$image))){
                        unlink(public_path('uploads/ads/'.$image));
                    } 
                 }

                 $cars->delete(); 
            }
            $ads->delete();
            $message = "تم الحذف بنجاح";

           return redirect()->back()->with('status',$message);
           
    }

    /*
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
