<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ads;
use App\cars;
use DB;
class adminAdsController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin'); 
                  
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * get all ads from ads table
     * 
     * @return ads information
     * redirect to all ads view with data
     */
  

    //ads details

    public function adsView($id){
        $ads = DB::table('ads')->where('product_id',$id)->first();
        
        $table = $ads->table_name;
        switch($table){
            case 'cars': $row = DB::table('cars')->where('product_id',$id)->first();
            break;
        }
        
        return view('cpanel.adminAds-view')->with('row',$row);
    }

    //active ads function 
    public function activeAds($id){
        
        $ads = ads::where('product_id',$id)->first();
        $date = date("Y-m-d");
        //determin ads category table
        $table = $ads->table_name;

       if($table == 'cars'){
          $car = cars::where('product_id',$id)->first();
          $end_date = endDate($car->duration);
          $ads->status = 1;
          $ads->activation_date = $date;
          $ads->end_date = $end_date;
          $car->status = 1;
          $car->activation_date = $date;
          $car->end_date = $end_date;

          $ads->save();
          $car->save();

          $message = "تم التفعيل بنجاح";
          return redirect()->back()->with('status',$message);
       }
    }

    //all users ads
    public function allAds(){
        $ads = ads::orderBy('created_at','desc')->get();
       return view('cpanel.all-ads')->with('ads',$ads);
    }

    //pending ads 
    public function pendingAds(){
        $ads = ads::where('status',0)->orderBy('created_at','desc')->get();
        
       return view('cpanel.pending-ads')->with('ads',$ads);
    }
    //activated ads 
    public function activatedAds(){
        $ads = ads::where('status',1)->orderBy('created_at','desc')->get();
        
       return view('cpanel.activated-ads')->with('ads',$ads);
    }

    //deactivate ads
    public function deactivateAds($id){
        $ads = ads::where('product_id',$id)->first(); 
        
        $table_name = $ads->table_name; //determin ads table name
        if($table_name == 'cars'){
            $cars = cars::where('product_id',$id)->first();
            $cars->status = 0;
            $cars->activation_date = null;
            $cars->end_date = null;
            $cars->save();

        }

        $ads->status = 0;
        $ads->activation_date = null;
        $ads->end_date = null;
        $ads->save();
        $message = "تم الغاء التفعيل بنجاح";

        return redirect()->back()->with('status',$message);

    }

    //expaired ads
    public function expairedAds(){
        $date = date("Y-m-d");
        $ads = DB::table('ads')->where('end_date','<',$date)->get();
        return view('cpanel.expaired-ads')->with('ads',$ads);
    }

    //delete ads
    public function adminAdsDelete($id){

        $ads = ads::where('product_id',$id)->first();
        

        $table = $ads->table_name;
        if($table == "cars"){
            $cars = cars::where('product_id',$id)->first();
           
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
