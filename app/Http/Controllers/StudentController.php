<?php

namespace App\Http\Controllers;

use DB;
use Session;
use App\Student;
use App\Payment;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    
    public function index(Request $request){

    	$this->validate($request,[
    		'name'=>'required',
    		'email'=>'required',
    		'phone'=>'required',
    		'address'=>'required',
    		'password' => ['required','min:6',"max:20"],
            'con_password' => ['required'],
    	]);

        $password = $request->password;
        $confirm_password = $request->con_password;

        if($password == $confirm_password){

            $student = new Student();
            $student->name = $request->name;
            $student->email = $request->email;
            $student->phone = $request->phone;
            $student->address = $request->address;
            $student->password = md5($request->password);
            $result = $student->save();
            $studentID = $student->id;
            Session::put('studentID', $studentID);

            if($result){
                setMessage("message", "success", "Your Request has been send successfully.");
                return redirect('login');
            }else{
                setMessage("message", "danger", "Failed to send your request.");
                return redirect('login');
            }

        }else{
            setMessage("message","danger","Password and Confirm Password does not matched !!!"); 
            return redirect('login');
        }

    }//saveStudent

    public function checkCredintial(Request $request){

        $this->validate($request,[ 'email' => 'required', 'password' => 'required' ]);

        $email = $request->email;
        $password = md5($request->password);

        $check = DB::table('students')->where('email', $email)->where('password',$password)->first();

        if($check){

            Session::put('studentID',$check->id);
            setMessage("message", "success", "Login Successful.");
            return redirect("login");

        }else{

            setMessage("message", "danger", "Failed.Please try again.!!!");
            return redirect("login");
        }
        
    }

    public function logout(){

        Session::flush();
        return redirect('/');
    }

    public function savePayment(Request $request){

        $this->validate($request,[
            'payment_method'=>'required'
        ]);

        $payment_method = $request->payment_method;
        if($payment_method == 'card'){

            $stdID = Session::get('studentID');
            $payment = new Payment();
            $payment->student_id = $stdID;
            $payment->payment_method = $request->payment_method;
            $payment->amount = $request->amount;
            $payment->card_no = $request->card_no;
            $payment->cvc_no = $request->cvc_no;
            $result = $payment->save();

            if($result){

                setMessage("message", "success", "Your Payment has been confirmed.");
                return redirect('payment-confirm');
            }else{

                setMessage("message", "danger", "Failed");
                return redirect('payment-confirm');
            }

        }else{

            $stdID = Session::get('studentID');
            $payment = new Payment();
            $payment->student_id = $stdID;
            $payment->payment_method = $request->payment_method;
            $payment->amount = $request->amount;
            $payment->card_no = $request->card_no;
            $payment->cvc_no = $request->cvc_no;
            $result = $payment->save();
            Session::forget('studentID');
            return view('website.htmlWebsiteStandardPayment');
        }

    }//savePayment

    public function confirm(){

        Session::forget('studentID');
        return view('website.confirm_msg');
    }

    
}//StudentController