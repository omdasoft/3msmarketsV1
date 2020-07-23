<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|max:20',
            'middle_name'  => 'required|max:20',
            'last_name'   => 'required|max:20',
            'city'    => 'required',
            //'location' => 'required',
            'address' => 'required|max:255',
            'phone'  =>  'required|numeric|min:10',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
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
            'email.unique'   =>  'عفوا هذا البريد موجود مسبقا الرجاء ادخال بريد جديد',
            'password.required' => 'الرجاء ادخال كلمة المرور',
            'password.min'  => 'الحد الادني لكلمة المرور 6 حرف',
            'password.confirmed' => 'عفوا كلمتي المرور غير متطابقتان',
            //'terms.required' => 'الرجاء الموافقة علي شروط انشاء الحساب'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'middle_name' => $data['middle_name'],
            'last_name' => $data['last_name'],
            'city' => $data['city'],
            'location' => $data['location'],
            'address' => $data['address'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'phone' => $data['phone'],
            'active' => '1'
        ]);
    }
}
