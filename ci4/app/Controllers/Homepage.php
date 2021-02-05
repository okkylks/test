<?php

namespace App\Controllers;

class Homepage extends BaseController
{
	public function index()
	{
		return view('home');
	}

	public function page1()
	{
		return view('page1');
	}

	public function page2()
	{
		return view('page2');
	}

	public function page3()
	{
		return view('page3');
	}

	public function page4()
	{
		return view('page4');
	}

	public function page5()
	{
		return view('page5');
	}
}
