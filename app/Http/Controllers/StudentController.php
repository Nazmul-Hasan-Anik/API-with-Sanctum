<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    //
    public function register(Request $request){

        //validate
        $request->validate([
            "name"=> "required",
            "email"=> "required|email|unique:students",
            "password"=> "required|confirmed",

        ]);
        //insert
        $student= new Student();
        $student->name=$request->name;
        $student->email=$request->email;
        $student->password=Hash::make($request->password);
        $student->phone_no=isset($request->phone_no)?$request->phone_no:"";
        $student->save();

        //send
        return response()->json([
            "status"=> 1,
            "message"=>"Student Register Succesfully"
        ]); 


    }
    public function login(Request $request){
        
    }
    public function profile(){
        
    }
    public function logout(){
        
    }

}
