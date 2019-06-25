<?php

namespace App\Http\Controllers;
use App\Sixths;
use App\RegistrationCards;
use App\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
class SixthsController extends Controller
{
    
    
    public function checklogin(Request $request) {
        $nationalcode = $request->nationalcode;

        $std = Students::where('nationalcode' , "=","{$nationalcode}")
        ->get(); 
        if (isset($std[0]->nationalcode)){
            return redirect('/success/'.$std[0]->tracking_code);
            die();
        }
        $sixths = Sixths::where('nationalcode' , "=","{$nationalcode}")
                        ->get(); 
        if (isset($sixths[0]->nationalcode)){
            // $registration_code     = $request->registration_code; 
            // $registration_password = $request->registration_password;
            // $card = RegistrationCards::where([
            //                 ['registration_code' , "=","{$registration_code}"],
            //                 ['registration_password',"=","{$registration_password}"]
            //             ])
            //             ->get(); 
            // if(isset($card[0]->registration_code) && $card[0]->nationalcode == NULL){ 
                $request->session()->put('isLoggedIn',TRUE);
                $request->session()->put('nationalcode',$sixths[0]->nationalcode);
                $request->session()->put('name',$sixths[0]->name);
                $request->session()->put('lastname',$sixths[0]->lastname);
                $request->session()->put('school_sx',$sixths[0]->school_sx);
                $request->session()->put('birth_year',explode('/',$sixths[0]->birthday)[0]);
                $request->session()->put('birth_month',explode('/',$sixths[0]->birthday)[1]);
                $request->session()->put('birth_day',explode('/',$sixths[0]->birthday)[2]);
                $request->session()->put('fathername',$sixths[0]->fathername);
                $request->session()->put('now_school',$sixths[0]->now_school);
                $request->session()->put('now_city',$sixths[0]->now_city);
            
                // DB::table('registration_cards')
                //     ->where('registration_code', $registration_code)
                //     ->update(['nationalcode' => $nationalcode]);
            
                    return redirect('/');
            // }else{
            //     $data = array(
            //         'registration_code' => '',
            //         'registration_password' => ''
            //     );
            //     return view('login')->with('message','2')->with('data',$data);
            // }

        }else{
            $data = array(
                'registration_code' => '',
                'registration_password' => ''
            );
            return view('login')->with('message','1')->with('data',$data);
        }
        
    }

    public function logoff(Request $request) {
        $request->session()->put('isLoggedIn',FALSE);
        $request->session()->put('nationalcode','');
        return redirect('/');
    }
}
