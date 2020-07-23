<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use App\ads;
class AdminController extends Controller
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
        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //lates unactivated ads
        $ads = ads::where('status',0)->orderBy('created_at','desc')->take(5)->get();

         return view('admin')->with('ads',$ads);


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
        $admin = admin::find($id);
        return view('cpanel.admin-edit',['admin' => $admin]);
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
        $admin = admin::find($id);

        $this->validate($request,[
            'name' => 'required|max:10',
            'email'      => 'required|email',
            'password'   => 'required|min:4'
        ],[
            'name.required' => 'الرجاء ادخال الاسم ',
            'name.max' => 'يجب ان يكون الاسم اقل من 10 حرف',
            'email.required' => 'الرجاء ادخال البريد',
            'email.email'   => 'الرجاء ادخال بريد الكتروني صالح',
            'password.required' => 'الرجاء ادخال كلمة المرور',
            'password.min' => 'كلمة المرور يجب ان لا تقل عن 4 حروف'

        ]);
        
       
        $admin->name = $request['name'];
        $admin->email     = $request['email'];
        $admin->password  = bcrypt($request['password']);

        $admin->save();
        
        $message = "تم التعديل بنجاح ";

        return redirect()->back()->with('status',$message);

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
