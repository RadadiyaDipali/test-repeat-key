<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
class TestController extends Controller
{
    public function list(){
    	$users = User::all();
    	$users->map(function($user){
    		$user->updated_at = $user->updated_at->format('Y-m-d H:i:s');
    		return $user;
    	});
    	return $users;
    }
}
