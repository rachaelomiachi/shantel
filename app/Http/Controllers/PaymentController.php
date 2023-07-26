<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Unicodeveloper\Paystack\Facades\Paystack;

class PaymentController extends Controller
{
    public function pay(){
      $ref = Paystack::genTranxRef();
    
        return view('students.pay',['ref'=>$ref]);
    }


    public function make_payment(Request $request)
    {
      try {
        return paystack()->getAuthorizationUrl()->redirectNow();
      }catch(\Exception $th){
        dd($th->getMessage());
        return back()->with('error','Oops Something went please try again later');
      }
    }

    public function callback ()
    {
      $paymentInfo = Paystack::getPaymentData();
      // dd($paymentInfo);
    }
public function initiate_payment($formData){
    $url = "https://api.paystack.co/transaction/initialize";
    $fields_string = http_build_query($formData);
    //open connection
  $ch = curl_init();
  //set the url, number of POST vars, POST data

  curl_setopt($ch,CURLOPT_URL, $url);

  curl_setopt($ch,CURLOPT_POST, true);

  curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

  curl_setopt($ch, CURLOPT_HTTPHEADER, array(

    "Authorization: Bearer ".(getenv('pk_test_45a2e47a36dd5529815c1cc8f3c23bb9b5436502')),

    "Cache-Control: no-cache",

  ));                                                                                                                                                                                                                       

  

  //So that curl_exec returns the contents of the cURL; rather than echoing it

  curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 

    //execute post

  $result = curl_exec($ch);

  return $result;


}
}
