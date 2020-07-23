<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class functionController extends Controller
{
    /*
        * this function used to fetch mark from db
        * it uses the company id that come from ajax request 
        * it return all data that matches the company id as html
    */
    public function getMark(Request $request){
        if($request->ajax()){
            $output = "";
            $data = DB::table('cars_mark')->where('company_id','=',$request->company_id)->get();
                                           
            if($data){
                foreach($data as $row){
                    $output .= '<option value='.$row->id.'>'.$row->mark.'</option>';
                }   

                return Response($output);
            }
        }
    }

     /*
        * this function used to fetch locations from db
        * it uses the city id that come from ajax request 
        * it return all data that matches the city id as html
    */
    public function getLocation(Request $request){
        if($request->ajax()){
            $output = "";
            $data = DB::table('locations')->where('city_id','=',$request->city_id)->get();
            $count = $data->count();                       
            if($count > 0){
                foreach($data as $row){
                    $output .= '<option value='.$row->id.'>'.$row->location.'</option>';
                }   

                
            }else{
                $output .= '<option value="0">جميع المناطق</option>';
            }

            return Response($output);
        }
    }
}
