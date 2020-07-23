<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\ads;
use App\cars;
use DB;
class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    //select alla users
    public function allUsers(){
        $users = DB::table('users')->orderBy('created_at','desc')->get();
        return view('cpanel.users')->with('users',$users);
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
        $user = User::find($id)->first();
    
        return view('users.user-edit')->with('user',$user);
    }


    //deactivate user function
    public function deactivateUser($id){
        $user = User::find($id);
    
        $user->active = 0;
        $user->save();
        $message = "تم الغاء التفعيل بنجاح";
        return redirect()->back()->with('status',$message);
    }

    //activate user 
    
    public function activateUser($id){
        $user = User::find($id);
    
        $user->active = 1;
        $user->save();
        $message = "تم التفعيل بنجاح";
        return redirect()->back()->with('status',$message);
    }

    //delete user
    public function deleteUser($id){
        $user = User::find($id);

        $ads = ads::where('advertiser_id',$id)->first();
        $table = $ads->table_name;
      
        if($table == "cars"){
            $cars = cars::where('user_id',$id)->first();
           
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
        $user->delete();
        $message = "تم حذف المستخدم بنجاح";
        
        return redirect()->back()->with('status',$message);
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
        $this->validate($request,[
            'first_name' => 'required|max:20',
            'middle_name'  => 'required|max:20',
            'last_name'   => 'required|max:20',
            'city'    => 'required',
            //'location' => 'required',
            'address' => 'required|max:255',
            'phone'  =>  'required|numeric|min:10',
            'email' => 'required|email|max:255',
            //'terms' => 'required'
        ],[
            'first_name.required' => 'الرجاء ادخال الاسم الاول',
            'first_name.max'      =>  'عفوا يجب ان لا يتجاوز الاسم اكثر من 20 حرف',
            'middle_name.required' => 'الرجاء ادخال الاسم الثاني',
            'middle_name.max' => 'عفوا يجب ان لا يتجاوز الاسم اكثر من 20 حرف',
            'last_name.required' => 'الرجاء ادخال الاسم الاخير',
            'last_name.max'  => 'عفوا يجب ان لا يتجاوز الاسم اكثر من 20 حرف',
            'city.required' => 'الرجاء اختيار المدينة',
            //'location.required' => 'الرجاء اختيار المنطقة',
            'address.required' => 'الرجاء ادخال العنوان',
            'phone.required' => 'الرجاء ادخال الهاتف',
            'phone.numeric' => 'يسمح بادخال الارقام فقط',
            'phone.max'  => 'يسمح بادخال 10 ارقام فقط',
            'email.required' => 'الرجاء ادخال البريد الإلكتروني',
            'email.email'    =>  'الرجاء ادخال بريد الكتروني صالح',
            //'terms.required' => 'الرجاء الموافقة علي شروط انشاء الحساب'
        ]);

        $user = User::find($id);

        if(empty($request['email'])){
            $email = $user->email;
        }else{
            $email = $request['email'];
        }

        if(empty($request['password'])){
            $password = $user->password;
        }else{
            $password = bcrypt($request['password']);
        }

        $user->first_name = $request['first_name'];
        $user->middle_name = $request['middle_name'];
        $user->last_name = $request['last_name'];
        $user->city = $request['city'];
        $user->location = $request['location'];
        $user->address = $request['address'];
        $user->email = $email;
        $user->password = $password;

       
       $user->save();

       $message = "تم تحديث البيانات بنجاح";

       return redirect()->route('dashboard')->with('status',$message);
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
