<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAddressesController extends Controller
{
    public function index(Request $request)
    {
    	return view('user_addresses.index',[
    		//不加括号代表返回结果集，加括号代表返回查询构造器
    		//$request->user()->addresses == $request->user()->addresses()->get();
    		'addresses' => $request->user()->addresses,
    	]);
    }
}
