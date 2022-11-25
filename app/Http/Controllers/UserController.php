<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class UserController extends Controller
{
    public function login(){
        return view('front.login');

    }
    public function user_insert(Request $request){
       
        $user_count=User::where('email',$request->email)->count();
      
        if($user_count>0){
            return redirect()->back()->with('error','email is already exist');
        }else{
            $data =new User();
            // echo"<pre>";
            // print_r($user->all());
            $data->name=$request->name;
            $data->email=$request->email;
            $data->password=bcrypt($request->password);
            $data->save();
            if($data){
                return redirect('/login');
            }
        }
        $request->validate(
            [
                'name' => 'required|alpha|unique:name',
                'password' => 'required|string|confirmed|min:8'
            ]
        );
    }
    public function login_verification(Request $request){
        // $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required',
        // ]);
        // echo"<pre>";
        // print_r($request->all());
        $session_id=Session::getId();
        // echo $session_id;
        // die();
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('/dashboard');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
