<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilitiesController extends Controller
{
	public function about()
	{
		return view('utilities.about');
	}
}
