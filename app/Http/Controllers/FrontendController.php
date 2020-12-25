<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Carbon\Carbon;
use DateTime;
use App\StepOne;
use App\StepTwo;
use App\StepThree;
use App\StepFour;
use App\addClientDetail;
class FrontendController extends Controller
{
    public function index()
    {
        return view('setup');
    }

    public function setup2(){

        return view('setup2');
    }

    public function addClientDetail(Request $request){

     //


    }

    public function multiForm(){
        return view('setup3');
    }
    public function stepOne()
    {
    	
    }
    public function checkAge(Request $request){

    
         
    	$dob = $request->dob;
        
    	$age = Carbon::parse($dob)->age;
         StepOne::create([
            'age' => $age,
        ]);
       
        return response()->json($age);

    }
    public function greenCardConfirmation(Request $request){

        $green_card_holder = $request->green_card_holder;

          StepTwo::create([
            'us_green_card_holder' => $green_card_holder,
        ]);


    }
    public function checkUsResident(Request $request)
    {
        $dor = $request->dor;
       
      
        $currentDate = Carbon::now();
        $to = Carbon::parse($dor);


         

        $diff_in_months = $to->diffInMonths($currentDate);
       

       SteppThree::create([
        'since_citizen' => $diff_in_months,
       ]);
       

        return response()->json($diff_in_months);

    }
    public function checkMariageDate(Request $request)
    {
        $dom = $request->dom;
        $currentDate = Carbon::now();
        $to = Carbon::parse($dom);
    


        $diff_in_months = $to->diffInMonths($currentDate);


        return response()->json($diff_in_months);

        
    }

    public function checkCitizenshipDate(Request $request){
        $doc = $request->doc;
        $currentDate = Carbon::now();
        $to = Carbon::parse($doc);
    


        $diff_in_months = $to->diffInMonths($currentDate);

        return response()->json($diff_in_months);

    }
                
}
