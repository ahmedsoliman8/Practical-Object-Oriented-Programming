<?php



class  SignUpForm{

    public  static  $rules=[
        'username'=>'required',
        'email'=>'required|email',
        'password'=>'required|min:5'
    ];
}

$validator->validate($request,SignUpForm::$rules);