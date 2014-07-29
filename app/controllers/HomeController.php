<?php

class HomeController extends BaseController {


	public function index()
	{
		$view = View::make('index', array());
		// var_dump(Auth::doctor()->check());
		// die();
		if (Auth::doctor()->check() == true)
		{
			$view = Redirect::to('doctor/dashboard');
            return $view;
		}elseif (Auth::patient()->check() == true)
		{
			$view = Redirect::to('patient/dashboard');
            return $view;
		}

		
		$view->appTitle 	=	$this->appTitle;
		return $view;
	}

	public function howitworks()
	{
		$view = View::make('howitworks', array());
		$view->appTitle 	=	$this->appTitle;
		return $view;
	}

	public function aboutus()
	{
		$view = View::make('aboutus', array());
		$view->appTitle 	=	$this->appTitle;
		return $view;
	}

	public function contactus()
	{
		$view = View::make('contactus', array());
		$view->appTitle 	=	$this->appTitle;
		return $view;
	}

	public function support()
	{
		$view = View::make('support', array());
		$view->appTitle 	=	$this->appTitle;
		return $view;
	}

	public function result()
	{
		$view = View::make('result', array());
		$view->appTitle 	=	$this->appTitle;
		return $view;
	}

	public function termsandpolicy()
	{
		$view = View::make('termsandpolicy', array());
		$view->appTitle 	=	$this->appTitle;
		return $view;
	}

	public function createuserstart()
	{
		$view = View::make('createuser.start', array());
		$view->appTitle 	=	$this->appTitle;
		return $view;
	}

	public function doctorForm()
	{
		$view = View::make('createuser.doctor', array());
		$view->countries 		= Country::all(array('id', 'Country'));
		$view->appTitle 	=	$this->appTitle;
		return $view;
	}

	public function patientForm()
	{
		$view = View::make('createuser.patient', array());
		$view->appTitle 	=	$this->appTitle;
		return $view;
	}

	public function whyjoin()
	{
		$view = View::make('createuser.whyjoin', array());
		$view->appTitle 	=	$this->appTitle;
		return $view;
	}

	public function pending()
	{
		$view = View::make('createuser.pending', array());
		$view->appTitle 	=	$this->appTitle;
		return $view;
	}

	public function pending_doctor()
	{
		$view = View::make('createuser.pending_doctor', array());
		$view->appTitle 	=	$this->appTitle;
		return $view;
	}

	public function login()
	{
		$view = View::make('login', array());
		$view->appTitle 	=	$this->appTitle;
		return $view;
	}

	public function logout()
	{
		Auth::patient()->logout();
		Auth::doctor()->logout();

		return View::make('login', array());
	}

}
