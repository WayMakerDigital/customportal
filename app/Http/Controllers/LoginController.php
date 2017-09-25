<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Woocommerce;
use Automattic\WooCommerce\HttpClient\HttpClientException;

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
    $results = Woocommerce::post('customers', $data);
       if(!$results){
       	return redirect()->intended('/register')->with('status', 'Invalid Username or password');
        } else {
        	return view('dashboard.index', compact('results'));
        }

    }

    public function signin(Request $request)
    {
     $data = [
        'username' => $request->input('username'),
    	'password' => $request->input('password')         
  ];

   $results = Woocommerce::post('customers/authenticate', $data);

  return view('dashboard.index', compact('results'));
       
     }
     public function getCourses(Request $request, $id)
     {
        
         $result = Woocommerce::get('customers/'.$id.'/orders');
            dd($result);
         return $result;
     }
    
    public function getCustomerDetails(Request $request, $id)
    {
      $results = Woocommerce::get('customers/'.$id.'/');
      //	dd($result);

      return view('dashboard.records', compact('results'));
    }

    public function updateCustomerDetails(Request $request, $id)
    {
    	$data = [
        'first_name' =>$request->firstname,
        'last_name' =>$request->lastname,
        'username' =>$request->username,
        'email' => $request->email,
        ];
       
       $result = Woocommerce::put('customers/'.$id.'/', $data);

       return redirect()->route('update', $id)->with('status', 'Your record has been been updated successfully');
    }
    public function getDashboard(Request $request, $id)
    {
       $results= Woocommerce::get('customers/'.$id.'/');

       return view('dashboard.home', compact('results'));
    }
     
     public function test()
    {
    $result = Woocommerce::get('customers/count');
   
     return $result;
  

   }
}
