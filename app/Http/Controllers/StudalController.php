<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreStudalData;
use Illuminate\Support\Facades\DB;
use Validator;

class StudalController extends Controller
{
    public function myForm(Request $request){

        // if($request->isMethod("post")){
        //     $request->validate([
        //         "name"=>"required|min:4|max:20",
        //         "email"=>"required",
        //         "phone"=>"required|digits_between:9,11"
        //     ],[

        //         "name.required"=> "Rendes nevet adj meg :) "

        //     ]);
        // }

        //         return view("my_form");
        
    }

    public function addStudal(){
        return view("my_form");
    }

    public function submitStudal(Request $request){

        // $request->validated();
        $validate=Validator::make($request->all(),[


            "name"=>"required",
            "email"=>"required",
            "phone"=>"required"
        ]);

        if($validate->fails()){

                return redirect("add-studal")->withErrors($validate)->withInput();
        }

         print_r($request->all());


        
    }
    public function listStudent(){
        //$students = DB::table("students")->where("id",5)->select("name as név","email as levél")->get(); //first() ---első---
        //$students = DB::table("students")->where("name","Andre Lynch")->where("id",1)->get();
        // $students = DB::table("students")->where("id",1)->where(function($querry){
        //     $querry->where("name","Andre Lynch")->orWhere("email","jamil98@example.net");
        // })->get();
        //$students = DB::table("students")->whereBetween("id",[2,40])->get();


        //$students = DB::table("students")->select("students.name as Név","students.email as email","courses.course as tanfolyam","courses.price as Ár")->join("courses","students.id","=","courses.student_id")->get();
        $students = DB::table("students")->select("students.name as Név","students.email as email","courses.course as tanfolyam","courses.price as Ár")->rightjoin("courses","students.id","=","courses.student_id")->get();

        echo "<pre>";
        print_r($students); 
    }

}
