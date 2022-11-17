<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	// Show Register/Create Form
	public function register()
	{
		return view('users.register');
	}
}