<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\info;
class infoController extends Controller
{
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
        return view('cpanel.info');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact = new info;

        $this->validate($request,[
            'phone' => 'required|max:10|unique:contact_info',
            'email'      => 'required|email|unique:contact_info',
            'address'   => 'required'
        ],[
            'phone.required' => 'الرجاء ادخال الهاتف',
            'phone.unique' => 'عفوا هذا الرقم موجود مسبقا الرجاء ادخال رقم اخر',
            'phone.max' => 'يجب ان لا يكون رقم الهاتف اقل من 10 رقم',
            'email.required' => 'الرجاء ادخال البريد',
            'email.email'   => 'الرجاء ادخال بريد الكتروني صالح',
            'email.unique' => 'عفوا هذا البريد موجود مسبقا الرجاء ادخال بريد اخر',

            'address.required' => 'الرجاء ادخال العنوان',
        ]);

        $contact->phone = $request['phone'];
        $contact->email = $request['email'];
        $contact->address = $request['address'];
        $contact->save();
        
        $message = "تم الحفظ بنجاح";
        return redirect()->back()->with('status',$message);

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
