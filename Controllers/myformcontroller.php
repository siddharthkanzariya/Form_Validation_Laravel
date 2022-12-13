<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myformcontroller extends Controller
{
    public function form()
    {
        return view('form');
    }

    public function process(request $request)
    {
        $request->validate([
            'txt1' => 'required | min:3',
            'txt2' => 'required',
            'txt3' => 'required | numeric',
            'txt4' => 'required | email',
            'txt5' => 'required | max:10',
            'txt6' => 'required | same:txt5',
            'age' => 'required | numeric',
            'bdate' => 'required | date',
        ],
        [
            'txt1.required' => 'Name is required',
            'txt1.min' => 'Minimum 3 characters required',
            'txt2.required' => 'Surname is required',
            'txt3.required' => 'Mobile Number is required',
             'txt3.digits:10' => '10 digits required',
            'txt3.numeric' => 'Only Numeric allowed',
            'txt4.required' => 'Email is required',
            'txt5.required' => 'Password is required',
            'txt6.required' => 'Password and Confirm Passwor must be same',
            'age.required' => 'Age is required',
            'age.numeric' => 'Only Numeric Value Allowed',
            'bdate.required' => 'DOB is required',
            'bdate.date' => 'Only date is Allowed',
        ]);



        $name = $request->input('txt1');
        $sname = $request->input('txt2');
        $age = $request->input('age');
        $mobile = $request->input('txt3');
        $email = $request->input('txt4');
        $password = $request->input('txt5');
        $cpassword = $request->input('txt6');
        $bdate = $request->input('bdate');


        echo "<h1>
                     Name is :- <u>$name</u></br>
                     Surname is :- <u>$sname</u></br>
                     Age is :- <u>$age</u></br>
                     DOB is :- <u>$bdate</u></br>
                     Mobile is :- <u>$mobile</u></br>
                     Email is :- <u>$email</u></br>
                     Password is :- <u>$password</u></br>
                     Confirm Password is :- <u>$cpassword</u>
             </h1>";
    }
}
