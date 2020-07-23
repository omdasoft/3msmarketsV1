<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\news;
class newsController extends Controller
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
        return view('cpanel.add-news');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'text'  => 'required',
            'image'  => 'required|mimes:jpg,jpeg,png,JPEG'
        ],[
            'title.required' => 'الرجاء ادخال العنوان',
            'text.required'  => 'الرجاء ادخال نص الخبر',
            'image.required'  => 'الرجاء اختيار صورة',
            'image.mimes'    => 'امتداد الصورة غير مسموح jpg,png,jpeg,JPEG فقط'
        ]); 

        $news = new news();

        if ($request->hasFile('image')) {
            //Storage::delete('public/uploads/news/'. $news->image);
           /*  if(file_exists(public_path('uploads/news/'.$news->image))){
                unlink(public_path('uploads/news/'.$news->image));
            } */ 

           $image = $request->file('image');
          /// $name = str_slug($request->title).'.'.$image->getClientOriginalExtension();
           $name = rand(1234,9999).'.'.$image->getClientOriginalExtension();

           $destinationPath = public_path('/uploads/news');
           $imagePath = $destinationPath. "/".  $name;
           $image->move($destinationPath, $name);
         }else{
             $name = $news->image;
         }

         $news->title = $request['title'];
         $news->news = $request['text'];
         $news->date = date('Y-m-d');
         $news->image = $name;

         $news->save();
         $message = "تم اضافة الخبر بنجاح";
         return redirect()->back()->with('status',$message);
    }
    
    //all news
    public function allNews(){
        $news = news::orderBy('created_at','desc')->get();
        return view('cpanel.all-news')->with('news',$news);
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
        $new = news::find($id);

        return view('cpanel.edit-news')->with('new',$new);
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
        $new = news::find($id);
        $this->validate($request,[
            'title' => 'required',
            'text'  => 'required',
            'image'  => 'mimes:jpg,jpeg,png,JPEG'
        ],[
            'title.required' => 'الرجاء ادخال العنوان',
            'text.required'  => 'الرجاء ادخال نص الخبر',
            'image.mimes'    => 'امتداد الصورة غير مسموح jpg,png,jpeg,JPEG فقط'
        ]); 
        if ($request->hasFile('image')) {
            //Storage::delete('public/uploads/news/'. $news->image);
            if(file_exists(public_path('uploads/news/'.$new->image))){
                unlink(public_path('uploads/news/'.$new->image));
            } 

           $image = $request->file('image');
          /// $name = str_slug($request->title).'.'.$image->getClientOriginalExtension();
           $name = rand(1234,9999).'.'.$image->getClientOriginalExtension();

           $destinationPath = public_path('/uploads/news');
           $imagePath = $destinationPath. "/".  $name;
           $image->move($destinationPath, $name);
         }else{
             $name = $new->image;
         }
      
        $new->title = $request['title'];
        $new->news = $request['text'];
        $new->image = $name;

        $new->save();

        $message = "تم التعديل بنجاح";
        return redirect()->back()->with('status',$message);
        
    }


    //delete news
    public function deleteNews($id){
        $new = news::find($id);
        if(file_exists(public_path('uploads/news/'.$new->image))){
            unlink(public_path('uploads/news/'.$new->image));
        } 
        $new->delete();

        $message = "تم الحذف بنجاح";
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
