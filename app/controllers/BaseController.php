<?php

class BaseController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Application Controller
	|--------------------------------------------------------------------------
	|
	| Author 	:	Lean Karlo Corpuz
	| Version 	:	1.0.0
	|
	*/

	public $appTitle 	= 'DocSearch Project';
	public $appVerion 	= 'Dev 1.0.0';

	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
