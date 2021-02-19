<?php

namespace App\Http\Controllers\Admin;

use App\City;
use App\Http\Controllers\Controller;
use App\Order;
use App\Profile;
use App\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    //
    public function index(){
        $ch=User::where('role_id','=','2')->count();
        $ord=Order::all()->count();
       // $city=City::all()->leftJoin('orders','city.id','=','orders.city_id')->select('city.*')->get();
       //$city=DB::table('cit')
        $arr=['ch'=>$ch,'ord'=>$ord];
        return view ('AdminView/index',$arr);
    }
    public function city(Request $request){
        if($request->isMethod('POST')){
            $vals=$request->validate([
                'city'=>'required'
            ]);

            $cit=new City();
            $cit->cityNmae=$request->city;
            if($cit->save()){
               // dd($request);
                return redirect()->route('admin.city')->with('msg','done');
            }
        }
    $citys=City::all();
    return view('AdminView/city',compact('citys'));
    }

    public  function deleteCity($id){
        $city=City::find($id);
        if($city->delete()){
            return redirect()->route('admin.city');
        }
    }

    public function charities(Request $request){
        if($request->isMethod('POST')){
           // dd($request);
            $valt=$request->validate([
              'email'=>'required|unique:users',
                'password'=>'required',
            ]);
            $valt['role_id']=2;
            if($request->password==$request->password_conf){
                $valt['password']=bcrypt($valt['password']);
                $user=User::create($valt);
                $prof=new Profile();
                $prof->user_id=$user->id;
               // $prof->email=$user->email;
                $prof->city_id=$request->city;
                $prof->pathLogo="image/webImage/logo2.png";
                //name
                $prof->name="new ";
                if($prof->save()){
                    return redirect()->back()->with("msg","done");
                }
                else{
                    return redirect()->back()->with("msg","error");
                }
            }

        }
        $users=User::Where('role_id','2')->get();
       // $userd=$users->profile->city;
        $citys=City::all();
        $arr=['users'=>$users,'city'=>$citys];
        return view('AdminView/charities',$arr);
    }

    public function delch($id){
        $ch=User::find($id);
    }

    public function orders(){
        $order=Order::all();
        $citys=City::all();
        return view('AdminView/order',compact('citys'));
    }
}
