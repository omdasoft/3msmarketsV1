<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//admin resource route
Route::resource('/admins','AdminController');
//cars resource
Route::resource('/cars','carsController');
//ads resource
Route::resource('/ads','adsController');
//ads resource
Route::resource('/users','usersController');
//contact info resource
Route::resource('/info','infoController');
//route news resource
Route::resource('/news','newsController');



Route::get('/login', function(){
  return view('auth.login');
});
Route::get('/register',function(){
  return view('auth.register');
});

Auth::routes();

Route::get('/',function(){
  return view('index');
});
Route::get('/home', 'HomeController@index');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');


  Route::get('admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('admin/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
  Route::get('/admin', 'AdminController@index')->name('admin.dashboard');


/************************
 * frontend route *******
 * **********************/
Route::get('/about',function(){
  return view('about');
});

Route::get('/category',function(){
  return view('category');
});

Route::get('/ads-details',function(){
  return view('ads-details');
});

Route::get('/contact',function(){
  return view('contact');
});


Route::get('/single-post',function(){
  return view('single-post');
});
/***************************************
 ******* admin routes ******************
 */

//view ads
Route::get('/view/{id}',[
  'uses' => 'adminAdsController@adsView',
  'as'   => 'ads-view'
  ]);

//activate ads
Route::get('/active-ads/{id}',[
  'uses' => 'adminAdsController@activeAds',
  'as'   =>  'active-ads'
]);

//all ads in the system

Route::get('/all-ads',[
  'uses' => 'adminAdsController@allAds',
  'as'   =>  'all-ads'
]);

//pending ads
Route::get('/pending-ads',[
  'uses' => 'adminAdsController@pendingAds',
  'as'   =>  'pending-ads'
]);

//active ads
Route::get('/activated-ads',[
  'uses' => 'adminAdsController@activatedAds',
  'as'   =>  'activated-ads'
]);

//deactivate ads
Route::get('/deactivate-ads/{id}',[
  'uses' => 'adminAdsController@deactivateAds',
  'as'   =>  'deactivate-ads'
]);

//ads delete
Route::get('/adminAds-delete/{id}',[
  'uses' => 'adminAdsController@adminAdsDelete',
  'as'   =>  'adminAds-delete'
]);

//expaired ads
Route::get('/expaired-ads',[
  'uses' => 'adminAdsController@expairedAds',
  'as'   =>  'expaired-ads'
]);

//get all users
Route::get('/all-users',[
  'uses' => 'usersController@allUsers',
  'as'   =>  'all-users'
])->middleware('auth:admin');

//get deactivate user
Route::get('/decativate-user/{id}',[
  'uses' => 'usersController@deactivateUser',
  'as'    => 'deactivate-user'
]);

//get activate user 
Route::get('/activate-user/{id}',[
  'uses' => 'usersController@activateUser',
  'as'   => 'activate-user'
]);

//get delete user
Route::get('/delete-user/{id}',[
  'uses' => 'usersController@deleteUser',
  'as'   => 'delete-user'
]);


//route all news

Route::get('/all-news',[
  'uses' => 'newsController@allNews',
  'as'   =>  'all-news'
]);

//delete news
Route::get('/news-delete/{id}',[
  'uses' => 'newsController@deleteNews',
  'as'   =>  'news-delete'
]);
/**************************************
 * users dashboard  route ********************
 */
Route::get('/dashboard',[
  'uses' => 'dashboardController@index',
  'as'   =>  'dashboard'
]);

Route::get('/post-ads',function(){
  return view('users.post-ads');
});

Route::get('/main-category',function(){
  return view('users.main-category');
});

Route::get('/myads',[
  'uses' => 'dashboardController@myAds',
  'as'   => 'myads'
]);

Route::get('forgot-password',function(){
  return view('forgot-password');
});

Route::get('/ads-view/{id}',[
  'uses' => 'adsController@adsView',
  'as'   => 'ads-view'
]);

Route::get('/ads-delete/{id}',[
  'uses'  =>  'adsController@adsDelete',
  'as'    =>  'ads-delete'
]);


/* cars category routes*/
Route::get('/cars',[
  'uses' => 'carsController@index',
  'as'   => 'cars'
]);

/*  Route::get('/edit-car/{id}',[
  'uses' => 'carsController@adsEdit',
  'as'   =>  'edit-car'
]); */
/* function controller*/
/*get all cars mark when company selected*/
Route::get('/getMark','functionController@getMark');
/*get all location when city selected*/
Route::get('/getLocations','functionController@getLocation');
