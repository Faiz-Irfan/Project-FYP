<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Controllers\MailController;


class MainController extends Controller
{
    function login(){
        return view('auth.login');
    }

    function register(){
        return view('auth.register');
    }

    function save(Request $request){
        
        //return $request->input();

        //validate requests
        $request->validate([
            'usertype'=>'required',
            'name'=>'required',
            'username'=>'required|unique:admins',
            'email'=>'required|unique:admins|email'
            //'password'=>'required|min:5|max:12'
        ]);

        //Insert data into database 
        $admin = new Admin;
        $admin->name = $request->name;
        $admin->username = $request->username;
        $admin->email = $request->email;
        //$admin->password = make::hash($request->password); 
        $admin->password=Str::random(8);
        $request->password=$admin->password;

        $userlevel = $request->usertype;
        if($userlevel=='Coordinator')
        $admin->level = 2;
        else if($userlevel=='Admin')
        $admin->level = 1;
        else if($userlevel=='Lecturer')
        $admin->level = 3;

        $save = $admin->save();

        if($save){
            MailController::sendEmail($request);
            return back()->with('success','New User has been successfuly added to database');
        }else{
            return back()->with('fail','Something went wrong, try again later');
        }

    }

    function check(Request $request){
        
        //validate requests
        $request->validate([
            'username'=>'required',
            'password'=>'required|min:5|max:12'
        ]);

        $userInfo = Admin::where('username','=', $request->username)->first();

        if(!$userInfo){
            return back()->with('fail','We do not recognize your username');
        }else{
            //check password
            if(!strcmp($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                return view('admin/dashboard');
            }else{
                return back()->with('fail','Incorrect password');
            }
        }
    }

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        }
    }

    function dashboard(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];

        // if($data->level == 1)
         return view('admin.dashboard', $data);
        // else
        // return view('coordinator.dashboard', $data);
    }

    function changepassword(Request $request){

        // $request->validate([
        //     'curpassword'=>'required|min:5',
        //     'newpassword'=>'required|min:5|max:12',
        //     //'password'=>'required|min:5|max:12'
        // ]);


        // $userInfo = Admin::where('id','=',session('LoggedUser'))->first();

        // //if(!strcmp($request->curpassword, $userInfo->password)){
        // $userInfo->password = $request->curpassword;
        // $userInfo->save();
        //}
        
        // $userInfo = Admin::where('password','=', $request->curpassword)->first();
        //$userInfo->password = $request->newpassword;
        
        return view('admin.changepassword');
    }
}