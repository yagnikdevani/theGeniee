<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support;
use Illuminate\Support\Facades\Validator;
use Session;
use App\User;
use App\Merchant;

class MerchantController extends Controller
{
    //
    public function  __construct( User $user ,Merchant $merchant)
    {
        $this->user = $user;
        $this->merchant = $merchant;
    }
    public function registration(){
        $view = view('merchant.registration');
        return  $view;
    }
    public function saveRegistrationForm(Request $request){
       $input  = $request->all();
     //  echo "<pre>";
       // print_r($input);
       // exit;
        $validator = Validator::make($request->all(), [
            'fullname' => 'required|string|max:100',
            'companyName' => 'required|string|max:100',
            'email' => 'required|email|unique:users',
            'mobileNumber' =>'required',
            'businessFilingStatus'=> 'required|string|max:100',
            'businessType'=> 'required|string|max:100',
            'businessName'=> 'required|string|max:100',
            'businessAddress'=> 'required|string|max:100',
            'pincode'=> 'required|string|max:100',
            'operatingAddress'=> 'string|max:100',
            'operatingPincode'=> 'string|max:100',
            'appDetail'=> 'string|max:100',
            'panNumber'=> 'required',
            'cin'=> 'string|max:100',
            'din'=> 'string|max:100',
            'gst'=> 'required',
            'document'=> 'string|max:100',
            
        ]);
       if ($validator->fails()) {
             Session::flash('error', $validator->messages()->first());
             return redirect()->back()->withInput()->withErrors($validator);;
        }else{
            //$user= $this->user->create(array(
            //    'name'              => $input['fullname'],
            //    'email'             => $input['email'],
            //    'role_id'           => 3,
            //    'password'          => ' '
            // ));
            
            $lastInsertedId='01';
            $merchantId="MERID".$lastInsertedId;
            $file = $request->file('document');
            $name = $file->move(__DIR__.'/storage/',$file->getClientOriginalName());
            
            $filename=$patch.$name;
            $user= $this->merchant->create(array(
                'merchantId'=> $merchantId,
                'fullname' =>$input['fullname'],
                'companyName'=>$input['companyName'],
                'mobileNumber'=>$input['mobileNumber'],
                'isMobileVarified' => 0,
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
                'document'=>$filename
             ));
            

        }

    }
    public function mailRegistrationData(){

    }
    public function sendSMS(){

    }
    public function uploadDocument(Request $request){
        $file = $request->file('document');
        $format = $request->document->extension();
        $patch = $request->document->store('documents');
        $name = $file->getClientOriginalName();
        return  $patch.$name;
}
}
