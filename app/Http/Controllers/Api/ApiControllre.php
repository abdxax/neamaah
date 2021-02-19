<?php

namespace App\Http\Controllers\Api;

use App\City;
use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class ApiControllre extends Controller
{
    public function getCites(){
        $city =City::all();
        return $city;
    }

    public function addOrder(Request $request){
        $val=$request->validate([
            'name'=>'required',
            'phone'=>'required',
            'city_id'=>'required',
            'link'=>'required',
            'desc'=>'required',
            'time_come'=>'required',
            'date_of_come'=>'required'
        ]);

        $request->link=$this->getLink($val['link']);

        /*if(Order::create($request->all())){
            return response()->json(['msg'=>'done']);
        }*/
        $order=new Order();
        $order->name=$request->name;
        $order->phone=$request->phone;
        $order->city_id=$request->city_id;
        $order->link=$this->getLink($request->link);
        $order->desc=$request->desc;
        $order->time_come=$request->time_come;
        $order->date_of_come=$request->date_of_come;
        if($order->save()){
            return response()->json(['msg'=>'done']);
        }


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
