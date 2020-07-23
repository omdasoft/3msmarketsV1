<?php
if (!function_exists('validate_training_cnt')) {
    /*
        *this function is used to fetch all cars company
        *from the database
        *no param 
        *it returns the cars comapny
    */
    function getCarsCompany(){
      $rows = DB::table('cars_companies')->get();
      return $rows;
    }
}

    /*
        *this function is used to fetch all cities from db
        *no param
        *it returns all cities from database

    */
    function getCity(){
        $rows = DB::table('cities')->get();
        return $rows;
    }

    /*
        * this function is used to filter data
        * it accept the input and make the validation
        * return the input after validation
    
    */

    function check_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
    }
    /*
        * this function is used to count user ads
        * it search from ads table 
        * and return ads number where advertiser = auth user
    */
    function countUserAds(){
      return $rows = DB::table('ads')->where('advertiser_id','=',\Auth::user()->id)->count();
        
    }

    /*
        * this function is used to count Expired ads
        * when the end date is less than current date 
        * the ads is expaired
        * return count of expaired ads
        *
    */
    function countExpiredAds(){
        $date = date("Y-m-d");
        return $rows = DB::table('ads')->where('end_date','<',$date)->count();
    }

     /*
        * this function is used to count user Expired ads
        * when the end date is less than current date 
        * the ads is expaired
        * return count of expaired ads
        *
    */
    function countUserExpiredAds(){
        $date = date("Y-m-d");
        return $rows = DB::table('ads')->where('advertiser_id','=',\Auth::user()->id)->where('end_date','<',$date)->count();

    }


     /*
        * this function is used to count user msg
        * it search from messages table 
        * and return msg number where advertiser = auth user
    */
    function countMsg(){
            return $rows = DB::table('messages')->where('user_id','=',\Auth::user()->id)->count();
       
      }

 /*
        * this function is used to count activated user ads
        * if the ad is activated check end date
        * if end date > current date this ad is expaired    
        * and return activated ads number from ads tablewhere advertiser = auth user
    */
    function countUserActivatedAds(){
        $date = date('Y-m-d');
        return $rows = DB::table('ads')->where('advertiser_id','=',\Auth::user()->id)->where('status',1)->where('end_date','>',$date)->count();
   
  }

  /*
        * this function is used to count un activated user ads
        
        * and return unactivated ads number from ads tablewhere advertiser = auth user
    */
    function countUserPendingAds(){
        return $rows = DB::table('ads')->where('advertiser_id','=',\Auth::user()->id)->where('status',0)->count();
   
  }
    
    function adsEdit($table_name,$product_id){
        switch($table_name){
            case 'cars' : return route('edit-car',$product_id);
            break;
            case 'heavy_vehicles' : return route('heavyVehicles-edit');
            break;
            default : return redirect()->back();
        }
    }
/*
*this function is used to get city name
*from cities table
*based on city selected
*/
    function getCityName($id){
        $city = DB::table('cities')->where('id','=',$id)->first();

        return $city->name;
    }
/*
*this function is used to get location  name
*from locations table
*based on location selected
*/
    function getLocationName($id){
        if($id != 0){
            $location = DB::table('locations')->where('id','=',$id)->first();

            return $location->location;
        }else{
            return $location = "جميع المناطق";
        }

    }

/*
*this function is used to count all  adds
*select from ads table 
*
*/
function countAds(){
     return $ads = DB::table('ads')->count();
}

/*
*this function is used to count all activated adds
* if the ad is activated check end date
* if end date > current date this ad is expaired
*return ads where status = 1
*
*/
function countActivatedAds(){
    $date = date('Y-m-d');
    return $ads = DB::table('ads')->where('status',1)->where('end_date','>',$date)->count();
}

/*
*this function is used to count all unactivated adds
*select from ads table 
*
*/
function countPendingAds(){
    return $ads = DB::table('ads')->where('status',0)->count();
}
/**
 * return advertiser name from users table
 * it takes the advertiser id as parameter
 */
 
 function advertiserName($id){
     if($id == ''){
        return "لا يوجد مستخدم";
     }else{
        $name = DB::table('users')->where('id',$id)->first();
        return $name->first_name.' '.$name->middle_name;
     }
 }

 /**
 * return cars company name from cars companies  table
 * it takes the company id as parameter
 */
 
function carsCompanyName($id){
    $name = DB::table('cars_companies')->where('id',$id)->first();
    return $name->company;
}

/**
 * return cars mark name from cars mark  table
 * it takes the mark id as parameter
 */
 
function carsMarkName($id){
    $name = DB::table('cars_mark')->where('id',$id)->first();
    return $name->mark;
}

/*
*this funtion is used to calculate ads period
*it pass the ads duration and add it to activation date
*return the ads end date
*/
function endDate($d){

    $end_date = date('Y-m-d', strtotime("+$d days"));
    return $end_date;
}

/*
* this function is used to change ads status 
* it uses product_id and user_id to search the ads
* if ads status = 0 , return pending  
*  if ads status = 1 and end_date > current date return activated
*  if ads end_date > current date return expaired
*/
function adsStatus($product_id){
    $date = date('Y-m-d');
    $ads = DB::table('ads')->where('product_id',$product_id)->where('advertiser_id',\auth::user()->id)->first();

    $status = $ads->status;
    $end_date = $ads->end_date;

    if($status == 0){
        return 0;
    }else if($status == 1 and $end_date > $date){
        return 1;
    }else if($end_date < $date){
        return 2;
    }
}
?>