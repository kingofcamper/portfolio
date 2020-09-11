<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendController extends Controller
{
    /*
    public function home()
	{
		return view('index');
	}
	*/

	public function about()
	{
		return view('about-us');
	}

	public function services()
	{
		return view('services');
	}

	public function portfolio()
	{
		return view('portfolio');
	}

	public function elements()
	{
		return view('elements');
	}

	public function blog()
	{
		return view('blog');
	}

	public function blogDetail()
	{
		return view('security_awareness');
	}

	public function contact()
	{
		return view('security_awareness');
	}


}
