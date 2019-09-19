<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support;
use Illuminate\Support\Facades\Validator;
use Session;
use App\User;
use App\Merchant;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

use Auth;

class MerchantController extends Controller
{
    //
    public function  __construct( User $user ,Merchant $merchant)
    {
        $this->user = $user;
        $this->merchant = $merchant;
    }
    public function registration(){
        return view('merchant.registration');
    }
    public function saveRegistrationForm(Request $request){
        
        $input  = $request->all();
        
        $validator = Validator::make($request->all(), [
            'fullname' => 'required|string|max:100',
            'companyName' => 'required|string|max:100',
            'email' => 'required|email|unique:users',
            'mobileNumber' =>'required|max:10',
            'businessFilingStatus'=> 'required|string|max:100',
            'businessType'=> 'required|string|max:100',
            'businessName'=> 'required|string|max:100',
            'businessAddress'=> 'required|string|max:100',
            //'pincode'=> 'required|string|max:100',
            'operatingAddress'=> 'string|max:100',
            'Pincode'=> 'string|max:100',
            'appDetail'=> 'string|max:100',
            'panNumber'=> 'required',
            'cin'=> 'string|max:100',
            'din'=> 'string|max:100',
            'gst'=> 'required',
            'g-recaptcha-response' => 'required|captcha',
            //'document'=> 'required|max:10000|mimes:doc,pdf,docx,zip',
        ]);
       if ($validator->fails()) {
             Session::flash('error', $validator->messages()->first());
             return redirect()->back()->withInput()->withErrors($validator);
        }else{
            
            $file = $request->file('document');
            $filename = '';
            if($file){
                $size = $file->getSize();
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $file->store('document');    
            }
            
            
            $merchant = $this->merchant->create(array(
                
                'fullname' =>$input['fullname'],
                'companyName'=>$input['companyName'],
                'mobileNumber'=>$input['mobileNumber'],
                //'isMobileVarified' => 0,
                'email' =>$input['email'],
                'businessFilingStatus' =>$input['businessFilingStatus'],
                'businessType'=>$input['businessType'],
                'businessName'=>$input['businessName'],
                'businessAddress'=>$input['businessAddress'],
                'pincode'=>$input['pincode'],
                'operatingAddress'=>$input['operatingAddress'],
                'operatingPincode'=>$input['operatingPincode'],
                'appDetail'=>$input['appDetail'],
                'panNumber'=>$input['panNumber'],
                'cin'=>$input['cin'],
                'din'=>$input['din'],
                'gst'=>$input['gst'],
                'document'  =>  $filename,
                'verification_code'  =>  rand(pow(10, 5-1), pow(10, 5)-1)
             ));
            $mobile = '91'.$input['mobileNumber'];

            // send mail
            /*$name = $input['fullname'];
            Mail::to($input['email'])->send(new SendMailable($name));
            return 'Email has been sent to '. $toEmail;
            */
           
            $msg = "User Has Been Registered Successfully";

            // use wordwrap() if lines are longer than 70 characters
            $msg = wordwrap($msg,70);

            // send email
            mail($input['email'],"Merchant Registration",$msg);

            $this->sendSms($mobile,'Your Otp Varification Code is '.$merchant->verification_code);
            return redirect()->route('sms_verification', ['id' => $merchant->id]);
        }

    }
    public function mailRegistrationData(){

    }
    public function smsVerification($id){
        return view('merchant.sms-verification',compact('id'));
    }

    public function checkVerificationCode(Request $request){
        $otpCode = $request->get('otp_code');
        $merchantId = $request->get('merchant_id');

        $checkOtp = Merchant::where('id',$merchantId)->where('verification_code',$otpCode)->first();
        if (empty($checkOtp)) {
            return redirect()->back()->withErrors(['Please Enter valid Otp']);
        }
        $checkOtp->is_verified = 1;
        $checkOtp->save();

        echo 'Merchant Verification Success';
        
    }

    public function uploadDocument(Request $request){
        $file = $request->file('document');
        $format = $request->document->extension();
        $patch = $request->document->store('documents');
        $name = $file->getClientOriginalName();
        return  $patch.$name;
    }

    public function sendSms($phone ,$message = ''){
        $url = 'http://sms.o2technology.in/api/sendhttp.php?authkey=293437AkEctXY625d776efe&mobiles='.$phone.'&message='.$message.'&sender=RCRTIN&route=4&country=0';
        file_get_contents($url);
    }
}
