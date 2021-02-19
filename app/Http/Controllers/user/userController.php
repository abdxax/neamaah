<?php

namespace App\Http\Controllers\user;

use App\BankAccount;
use App\Http\Controllers\Controller;
use App\Order;
use App\Phone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class userController extends Controller
{
    //

    public function  index(){
        $user=auth()->user();
        $today=date("Y-m-d");
        $ord=Order::where('city_id','=',$user->profile->city_id)->where('status','=','new')->count();
        $ordsd=Order::where('city_id','=',$user->profile->city_id)->where('status','=','take')->count();
        $doyord=Order::where('city_id','=',$user->profile->city_id)->where('status','=','take')->where('date_of_come','=',$today)->count();
        $arrs=['ord'=>$ord,'dord'=>$ordsd,'doyord'=>$doyord];
        return view('userView/index',$arrs);

    }

    public function updateprofile(Request $request){
         $user=auth()->user();
         if($request->isMethod("POST")){
             $prof=$user->profile;
           if($request->file('pathLogo')!=null){
               $vals=$request->validate([
                   'name'=>'required',
                   'pathLogo'=>'required|max:800000|mimes:jpeg,png,jpg'
               ]);
               $fileNmae=$request->file('pathLogo')->hashName();
               $pathLogo=$request->file('pathLogo')->storeAs('public/image/logos',$fileNmae);
               $pathLogo="image/logos/".$fileNmae;
               $vals['pathLogo']=$pathLogo;
              $prof->name=$request->name;
               $prof->linkLoca=$request->linkLoca;
               $prof->descr=$request->descr;
               $prof->pathLogo=$pathLogo;


               /*if($user->profile()->update($request->all())){
                   return redirect()->back()->with("msg","done");
               }*/
               if($prof->save()){
                   return redirect()->back()->with("msg","done");
               }
           }
           else{
               $vals=$request->validate([
                   'name'=>'required',

               ]);

               $prof->name=$request->name;
               $prof->linkLoca=$request->linkLoca;
               $prof->descr=$request->descr;

              /* if($user->profile()->update($vals)){
                   return redirect()->back()->with("msg","done");
               }*/

               if($prof->save()){
                   return redirect()->back()->with("msg","done");
               }


           }
         }
         $prof=$user->profile;
         $mag=Storage::url($prof->pathLogo);
         $arr=['prof'=>$prof,'mag'=>$mag];
        return view('userView/update',$arr);
    }



    public function takeorder(Request $request , $id){
        $user=auth()->user();

            $ord=Order::where('id',$id)->first();
            $ord->ch_id=$user->id;
            $ord->status='take';
            if($ord->save()){
                return redirect()->back()->with("msg","done");
            }

    }

    public function updataOrderSatatus(){

    }

    public function getNewOrder(){
        $user=auth()->user()->profile;
      $neword=Order::where('city_id','=',$user->city_id)->where('status','=','new')->get();
      return view('userView/neworder',compact('neword'));
    }


    public function getOrder(){


    }

    public  function myOder(Request $request){
        if($request->isMethod("POST")){
            if($request->id==1){
                $user=auth()->user();
                $orf=Order::where('ch_id',"=",$user->id)->get();
                $arr=[
                    'orf'=>Order::where('ch_id',"=",$user->id)->get(),
                    'id_o'=>1
                ];
                return view ('userView/myorder',$arr);
            }
            else if($request->id==2){
                $today=date("Y-m-d");
                $user=auth()->user();
               // $orf=Order::where('ch_id',"=",$user->id)->where('date_of_come','=',$today)->get();
                $arr=[
                    'orf'=>Order::where('ch_id',"=",$user->id)->where('date_of_come','=',$today)->get(),
                    'id_o'=>2
                ];
                return view ('userView/myorder',$arr);
            }
            else if ($request->id==3){
                $today=date("Y-m-d");
                $user=auth()->user();
               // $orf=Order::where('ch_id',"=",$user->id)->where('date_of_come','>',$today)->get();
                $arr=[
                    'orf'=>Order::where('ch_id',"=",$user->id)->where('date_of_come','>',$today)->get(),
                    'id_o'=>3
                ];
                return view ('userView/myorder',$arr);
            }
        }
        $user=auth()->user();
        //$orf=Order::where('ch_id',"=",$user->id)->get();
        $arr=[
          'orf'=>Order::where('ch_id',"=",$user->id)->get() ,
          'id_o'=>1
        ];
        return view ('userView/myorder',$arr);
    }

    public function phones(Request $request){
        $user=auth()->user()->profile;
        if($request->isMethod('POST')){
           $request->validate([
               'phone'=>'required'
           ]);

           $phones=new Phone();
           $phones->profile_id=$user->id;
           $phones->phone=$request->phone;
           if($phones->save()){
            return redirect()->route('user.phone')->with('msg','done');
           }
        }
       $user=auth()->user();
        $Phones=Phone::where('profile_id','=',$user->profile->id)->get();
        return view("userView/phones",compact('Phones'));


    }

    public function deletephone($id){
        $user=auth()->user();
        $phone=Phone::find($id);
        if($phone->profile_id==$user->profile->id){
            if($phone->delete()){
                return redirect()->route('user.phone');
            }
        }
    }

    public function bankAccount(Request $request){
        $user=auth()->user()->profile;
         if($request->isMethod('POST')){
             $val=$request->validate([
                'bankname'=>'required',
                'bankaccount'=>'required',
                'Iban'=>'required'
             ]);
             $ban=new BankAccount();
             $ban->BankName=$request->bankname;
             $ban->IBAN=$request->Iban;
             $ban->Account=$request->bankaccount;
             $ban->profile_id=$user->id;
             if($ban->save()){
                 return redirect()->route('user.bank')->with('msg','done');
             }
         }

         $bans=BankAccount::where('profile_id','=',$user->id)->get();
     return view('userView/bankpage',compact('bans'));
    }

    public function deletebank($id){
        $user=auth()->user()->profile;
        $ban=BankAccount::find($id);
        if($ban->profile_id==$user->id){
            if($ban->delete()){
                return redirect()->route('user.bank');
            }
        }
    }


}
