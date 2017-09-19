<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Woocommerce;

class ProductController extends Controller
{
    public function test()
    {
    	return Woocommerce::get('orders');
    }
}
