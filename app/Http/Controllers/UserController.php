<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function get($id)
    {
    	return view('user/list',compact('id'));
    }

    public function post(Request $request)
    {
    	return $request;
    }


    public function listuser()
    {
    	$list = User::all();
    	foreach ($list as $key => $value) {
    		echo $value;
    	}
    }
}
