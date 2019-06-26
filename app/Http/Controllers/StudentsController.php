<?php

namespace App\Http\Controllers;
use App\Students;
use App\Sixths;
use App\RegistrationCards;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Verta;
use CodeItNow\BarcodeBundle\Utils\QrCode;
class StudentsController extends Controller
{
    public function new (Request $request) {

        $data = array(
            'nationalcode' => $request->session()->get('nationalcode'),
            'name' => $request->session()->get('name'),
            'lastname' => $request->session()->get('lastname'),
            'school_sx' => $request->session()->get('school_sx'),
            'birth_year' => $request->session()->get('birth_year'),
            'birth_month' => $request->session()->get('birth_month'),
            'birth_day' => $request->session()->get('birth_day'),
            'fathername' => $request->session()->get('fathername'),
            'now_school' => $request->session()->get('now_school'),
            'now_city' => $request->session()->get('now_city'),
            
        );
        return view('addnew')->with('data' , $data);
    }

    public function post(Request $request) {
        
        $request->validate([
            'address'       => 'required',
            'mobile'        => 'required|numeric|digits:11',
        ]);

        $student = new Students;
        $student->nationalcode         = $request->nationalcode;
        $student->school_name           = $request->school_name;
        $student->shahed               = $request->shahed;
        $student->address              = $request->address;
        $student->phone                = $request->phone;
        $student->mobile               = $request->mobile;
        $student->fathersjob           = $request->fathersjob;
        $student->mothersjob            = $request->mothersjob;
        $student->academic_performance = $request->academic_performance;
        switch($student->academic_performance){
            case "اولویت اول : کسب مقیاس خیلی خوب در تمامی دروس در هر دو نوبت پایه های پنجم و ششم":
                $student->score1 = 600;
                break;
            case "اولویت دوم : کسب مقیاس خوب در یک درس در یک نوبت یکی از پایه های پنجم یا ششم و مقیاس خیلی خوب در سایر دروس هر دو نوبت پایه های پنجم و ششم":
                $student->score1 = 500;    
                break;
            default:
                $student->score1 = 0;
                break;
        }
        $student->quran_remember       = $request->quran_remember;
        $student->jozs                 = $request->jozs;
        if ($student->quran_remember == "on"){
            $student->score2 = ($student->jozs)*10;
        }else{
            $student->score2 = 0;
        }
        $student->score3 = 0;
        $student->qen_1m               = $request->qen_1m;
        $student->score3 += ($student->qen_1m)*120;
        $student->qen_2m               = $request->qen_2m;
        $student->score3 += ($student->qen_2m)*90;
        $student->qen_3m               = $request->qen_3m;
        $student->score3 += ($student->qen_3m)*60;
        $student->qen_1o               = $request->qen_1o;
        $student->score3 += ($student->qen_1o)*150;
        $student->qen_2o               = $request->qen_2o;
        $student->score3 += ($student->qen_2o)*120;
        $student->qen_3o               = $request->qen_3o;
        $student->score3 += ($student->qen_3o)*90;
        $student->qen_1k               = $request->qen_1k;
        $student->score3 += ($student->qen_1k)*180;
        $student->qen_2k               = $request->qen_2k;
        $student->score3 += ($student->qen_2k)*150;
        $student->qen_3k               = $request->qen_3k;
        $student->score3 += ($student->qen_3k)*120;
        if($student->score3 >330){$student->score3 = 330;}
        
        $student->score4 = 0;
        $student->fh_1m                = $request->fh_1m;
        $student->score4 += ($student->fh_1m)*120;
        $student->fh_2m                = $request->fh_2m;
        $student->score4 += ($student->fh_2m)*90;
        $student->fh_3m                = $request->fh_3m;
        $student->score4 += ($student->fh_3m)*60;
        if($student->score4 >120){$student->score4 = 120;}
        
        $student->score5 = 0;
        $student->jaber_1m             = $request->jaber_1m;
        $student->score5 += ($student->jaber_1m)*120;
        $student->jaber_1o             = $request->jaber_1o;
        $student->score5 += ($student->jaber_1o)*150;
        $student->jaber_1k             = $request->jaber_1k;
        $student->score5 += ($student->jaber_1k)*180;
        if($student->score5 >330){$student->score5 = 330;}
        
        $student->score6 = 0;
        $student->sport_1m             = $request->sport_1m;
        $student->score6 += ($student->sport_1m)*120;
        $student->sport_2m             = $request->sport_2m;
        $student->score6 += ($student->sport_2m)*90;
        $student->sport_3m             = $request->sport_3m;
        $student->score6 += ($student->sport_3m)*60;
        $student->sport_1o             = $request->sport_1o;
        $student->score6 += ($student->sport_1o)*150;
        $student->sport_2o             = $request->sport_2o;
        $student->score6 += ($student->sport_2o)*120;
        $student->sport_3o             = $request->sport_3o;
        $student->score6 += ($student->sport_3o)*90;
        $student->sport_1k             = $request->sport_1k;
        $student->score6 += ($student->sport_1k)*180;
        $student->sport_2k             = $request->sport_2k;
        $student->score6 += ($student->sport_2k)*150;
        $student->sport_3k             = $request->sport_3k; 
        $student->score6 += ($student->sport_3k)*120;
        if($student->score6 >330){$student->score6 = 330;}

        $student->talif                = $request->talif;
                
        $student->ekhtera              = $request->ekhtera;
        $student->score7 = (($student->talif)*120) + (($student->ekhtera)*120);
        if($student->score7 >240){$student->score7 = 240;}

        $student->shora                = $request->shora;
        if ($student->shora  == "on"){
            $student->score8 = 100;
        }else{
            $student->score8 = 0;
        }
        $student->pishtazan = $request->pishtazan;
        if ($student->pishtazan  == "on"){
            $student->score9 = 100;
        }else{
            $student->score9 = 0;
        }

        $student->sum_score = $student->score1+$student->score2+$student->score3+$student->score4+$student->score5+$student->score6+$student->score7+$student->score8+$student->score9;
        $student->tracking_code        = str_random(5);

        if($student->save()){            
            return redirect('success/'.$student->tracking_code);
        }else{
            return view('register');
        }
        
        

    }

    public function success (Request $request,$id) {
        $students = Students::where('tracking_code' , "=","{$id}")
                        ->get();        
        if (isset($students[0]->nationalcode)){
            $sixths = Sixths::where('nationalcode' , "=","{$students[0]->nationalcode}")
                        ->get(); 
            $students[0]['name']=$sixths[0]->name;
            $students[0]['lastname']=$sixths[0]->lastname;
            $students[0]['school_sx']=$sixths[0]->school_sx;
            $students[0]['birthday']=$sixths[0]->birthday;
            $students[0]['fathername']=$sixths[0]->fathername;
            $students[0]['now_school']=$sixths[0]->now_school;
            $students[0]['now_city']=$sixths[0]->now_city;

            $request->session()->put('isLoggedIn',FALSE);
            $request->session()->put('nationalcode','');
            $request->session()->put('name','');
            $request->session()->put('lastname','');
            $request->session()->put('school_sx','');
            $request->session()->put('birth_year','');
            $request->session()->put('birth_month','');
            $request->session()->put('birth_day','');
            $request->session()->put('fathername','');
            $request->session()->put('now_school','');
            $request->session()->put('now_city','');

           return  view('success')->with('students' , $students);
        }else{
            return abort(404);
        }                                
    }
    
    public function barcode ($id) {
        $qrCode = new QrCode();
        $qrCode
            ->setText($id)
            ->setSize(150)
            ->setPadding(10)
            ->setErrorCorrection('high')
            ->setForegroundColor(array('r' => 0, 'g' => 0, 'b' => 0, 'a' => 0))
            ->setBackgroundColor(array('r' => 255, 'g' => 255, 'b' => 255, 'a' => 0))
            ->setLabel($id)
            ->setLabelFontSize(8)
            ->setImageType(QrCode::IMAGE_TYPE_PNG)
        ;
        return '<img src="data:'.$qrCode->getContentType().';base64,'.$qrCode->generate().'" />';
    }


    public function login(Request $request){
            $data = array(
                'registration_code'     => $request->registration_code,
                'registration_password' => $request->registration_password
            );
            return view('login')
            ->with('data',$data);
    }

    

}
