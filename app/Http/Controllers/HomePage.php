<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use Illuminate\Http\Request;
use  App\City;
class HomePage extends Controller
{
    //
    public function index(Request $request){
        if($request->isMethod('POST')){
         $valu=$request->validate([
             'name'=>'required',
             'phone'=>'required',
             'des_locato'=>'required',
             'dat'=>'required',
             'time'=>'required'


         ],[
           'required'=>'هذا الحقل اساسي '
         ]);



            $order=new Order();
         $order->name=$valu['name'];
         $order->phone=$valu['phone'];
         $order->city_id=$request->city;

         $order->link=$this->getLink($request->link);
         $order->desc=$valu['des_locato'];
         $order->date_of_come=$valu['dat'];
         $order->time_come=$valu['time'].' '.$request->ps;
         if($order->save()){
             return redirect()->back()->with('msg',"تم اضافة الطلب بنجاح ");
         }

        }
        $ch=User::where('role_id','=','2')->get();
        $city=City::all();
        $arr=['city'=>$city,'ch'=>$ch];
        return view ('index',$arr);
    }

    public function start(){
        return view("start");
    }

    public function getLink ($text){
        preg_match_all('#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $text, $match);
        $link='';
        if(count($match[0])>0){
            foreach ($match[0] as $m ){
                $link=$m;
            }

        }

        return $link;

    }
}
