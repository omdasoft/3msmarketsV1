<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cars;
use Auth;
use App\ads;
use DB;
class carsController extends Controller
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
        return view('users.cars');
    }

  /*   public function adsEdit($id){
        $car = cars::where('product_id',$id)->first()->get();
        return view('users.edit-car')->with('car',$car);
        //dd($row);
    } */
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
       /*  $this->validate($request,[
            'ads_type' => 'required',
            'condition' => 'required',
            'images'  =>  'image|mimes:jpeg,jpg,png,PNG,JPG| max:1000',
        ],[
            'ads_type.required' => 'هذا الحقل مطلوب',
            'condition.required' => 'هذا الحقل مطلوب',
            'images.image'    => 'يجب ان يكون نوع الملف صورة',
            'images.mimes'    =>  'امتداد الصورة يجب ان يكون jpq , png, jpeg فقط ',
            'images.max'      => 'حجم الصورة المسموح بة 1000 ميقا بايت'     
        ]); */
       $cars = new cars();
        $images = array();
      if($files = $request->file('images')){

        foreach($files as $file){
            $name = rand(1234,9999).'.'.$file->getClientOriginalExtension();
            //$name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/ads');
            $imagePath = $destinationPath. "/".  $name;
            $file->move($destinationPath,$name);
            $images[] = $name;
        }
      }
      $product_id = rand(1,9999);
      $cars->category = "موتورات";
      $cars->sub_cat = "سيارات";
       $cars->ads_type = $request['ads_type'];
       $cars->condition = $request['condition'];
       $cars->company_id = $request['company'];
       $cars->mark_id = $request['mark'];
       $cars->car_type = $request['car_type'];
       $cars->fuel_type = $request['fuel_type'];
       $cars->gear_type = $request['gear_type'];
       $cars->manufacture_date = $request['manufacture_date'];
       $cars->distance = $request['distance'];
       $cars->color = $request['color'];
       $cars->license = $request['license'];
       $cars->body = $request['body'];
       $cars->city_id = $request['city'];
       $cars->location_id = $request['location'];
       $cars->mechanical_state = $request['mechanical_state'];
       $cars->chassis_num = check_input($request['chassis_num']);
       $cars->desc = check_input($request['desc']);
       $cars->images = implode('|',$images);
       $cars->cylinders = $request['cylinders'];
       $cars->doors = $request['doors'];
       $cars->price = check_input($request['price']);
       $cars->title = check_input($request['title']);
       $cars->duration = check_input($request['duration']);
       $cars->price = check_input($request['price']);
       $cars->user_id = \Auth::user()->id;
       $cars->product_id = $product_id;
       $cars->save();


      $ads =  new ads();
      $ads->image = $images[0];
      $ads->title = $request['title'];
      $ads->sub_cat = "سيارات";
      $ads->status = 0;
      $ads->price = $request['price'];
      $ads->advertiser = \Auth::user()->first_name.' '.\Auth::user()->middle_name;
      $ads->advertiser_id = \Auth::user()->id;
      $ads->product_id = $product_id;
      $ads->table_name = "cars";
      $ads->date = date("Y-m-d");
      $ads->duration = $request['duration'];
      $ads->total = $request['duration']*5;
      $ads->save();
       $message = "تم اضافة الاعلان بنجاح";
        return redirect()->route('dashboard')->with('status',$message);
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
