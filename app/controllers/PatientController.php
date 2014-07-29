<?php

class PatientController extends BaseController {

	public function dashboard()
	{
		$view = View::make('patient.dashboard', array());
		$view->appTitle 	=	$this->appTitle;
		return $view;
	}

}
