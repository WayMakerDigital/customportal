<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Woocommerce;

class LoginController extends Controller
{

    public function signup(Request $request)
    {
    	$data = [
        'email' => $request->email,
        'first_name' =>$request->firstname,
        'last_name' =>$request->lastname,
        'username' =>$request->username,
        'username'=> $request->username,
        'password' =>$request->password,
        'billing' => [
           'first_name' =>$request->firstname,
           'last_name' =>$request->lastname,
           'city'=> $request->city,
           'state'=> $request->state,
           'country'=>$request->country,
           'email' => $request->email
        ],
        'shipping' => [
           'first_name' =>$request->firstname,
           'last_name' =>$request->lastname,
           'city'=> $request->city,
           'state'=> $request->state,
           'country'=>$request->country
        ]
    ];
    $result = Woocommerce::post('customers', $data);
       if(!$result){
       	return redirect()->intended('/register')->with('status', 'Invalid Username or password');
        } else {
        	return redirect()->intended('dashboard');
        }

    }

    public function signin(Request $request)
    {
     $data = [
        'username' => $request->input('username'),
    	'password' => $request->input('password')         
  ];

   return Woocommerce::get('customers', $data);
    }
}
