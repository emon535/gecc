<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Auth;
use App\Payment;
use Illuminate\Support\Facades\Mail;
use Cartalyst\Stripe\Laravel\Facades\Stripe;

class PaymentController extends Controller
{

    public function store(Request $request){

        try {
            $charge = Stripe::charges()->create([
                'amount' => $request->amount,
                'currency' => "USD",
                'source' => $request->stripeToken,
                'description' => 'Payment for course',
                'receipt_email' => "shagor.ahmed374@email.com",
                'metadata' => [
                    
                ],
            ]);

        } catch (Exception $e) {


        }

        $stdID = Session::get('studentID');
        $payment = new Payment();
        $payment->student_id = $stdID;
        $payment->amount = $request->amount;
        $result = $payment->save();

        return redirect('payment-confirm');

    }

}//PaymentController