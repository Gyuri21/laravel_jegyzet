<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreStudalData;
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

}
