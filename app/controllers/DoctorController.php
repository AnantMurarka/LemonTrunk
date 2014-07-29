<?php

class DoctorController extends BaseController {

	// =======================================================
	// Begin Doctor Page Navigation		 					||
	// =======================================================
	public function dashboard()
	{
		$view = View::make('doctor.dashboard', array());
		$view->appTitle 	=	$this->appTitle;
		return $view;
	}

	public function profile()
	{
		/* Initialization */
		$id = Auth::doctor()->get()->id;
		$view 					=	View::make('doctor.profile', array());
		$view->appTitle 		=	$this->appTitle;
		
		/* profile */
		$doctor 				=	json_decode(Doctor::profile($id));
		$view->doctor 			=	$doctor;

		/* for page data */
		$view->countries 		= 	Country::all();
		$view->provinces 		= 	Province::where('countryCode', '=', $doctor->address5)->get();
		$view->cities 			= 	City::where('ProvinceCode', '=', $doctor->address5)->get();
		// $view->specialisms 		= 	SpecialismList::all();
		// $view->hospitalLists 	= 	HospitalList::hospitalsList();
		return $view;
	}

	public function hospital()
	{
		/* Initialization */
		$id 					= Auth::doctor()->get()->id;
		$view 					=	View::make('doctor.hospital', array());
		$view->appTitle 		=	$this->appTitle;
		// $view->hospitals 		= 	HospitalList::hospitalsList();
		$view->myHospitals 		= 	Doctor::doctorHospital($id);
		return $view;
	}

	public function hospitalList()
	{
		return Datatable::collection(HospitalList::hospitalsList())
		->showColumns('name', 'type', 'City', 'contact')
        ->searchColumns('name', 'Address1', 'Address2', 'City', 'province')
        ->make();
	}

	public function specialization()
	{
		/* Initialization */
		$id 					= 	Auth::doctor()->get()->id;
		$view 					=	View::make('doctor.specialization', array());
		$view->appTitle 		=	$this->appTitle;
		$view->specialisms 		= 	DoctorSpecialization::specializationWithDoctor();
		return $view;
	}

	public function insurance()
	{
		/* Initialization */
		$id 					= 	Auth::doctor()->get()->id;
		$view 					=	View::make('doctor.insurance', array());
		$view->appTitle 		=	$this->appTitle;
		$view->insurances 		= 	DoctorInsurance::where('doctor_id', '=', $id)->get();
		return $view;
	}

	public function patients()
	{
		/* Initialization */
		$id 					= 	Auth::doctor()->get()->id;
		$view 					=	View::make('doctor.patients', array());
		$view->appTitle 		=	$this->appTitle;
		return $view;
	}

	public function tasker()
	{
		/* Initialization */
		$id 					= Auth::doctor()->get()->id;
		$view 					=	View::make('doctor.tasker', array());
		$view->appTitle 		=	$this->appTitle;
		return $view;
	}

	// =======================================================
	// End Doctor Page Navigation		 					||
	// =======================================================
//==============================================================================	
	// =======================================================
	// Begin Doctor Information Updates 					||
	// =======================================================
	
	public function personalInfo()
	{
		$input 		= Input::all();
		$result 	= Doctor::updatePersocalInfo($input);

		if($result['result'] == 'Success') return Redirect::to('doctor/profile')->with('result', 'Success')->with('message', 'Your Information has been updated!');
		else return Redirect::to('doctor/profile')->with('result', 'Fail')->with('message', 'Something went wrong. Your information was not updated!');
	}

	public function changeAvatar()
	{
		$input 		= Input::all();
		$result 	= Doctor::updateAvatar($input);
		if($result['result'] == 'Success') return Redirect::to('doctor/profile')->with('result', 'Success')->with('message', 'Your avatar has been updated!');
		else return Redirect::to('doctor/profile')->with('result', 'Fail')->with('message', 'Something went wrong. Your avatar was not updated!');
	}

	public function changePassword()
	{
		$input = Input::all();
		if ( Auth::doctor()->get()->password == $input['current_password'] ) return Redirect::to('doctor/profile')->with('result', 'Success')->with('message', 'Your password has been updated!');
		else Redirect::to('doctor/profile')->with('result', 'Fail')->with('message', 'Something went wrong. Your password was not updated!');
	}

	public function privateSettings()
	{
		$input 		= Input::all();
		$result 	= Doctor::updateSettings($input);
		return $result;
	}
	
	// =======================================================
	// End Doctor Information Updates 						||
	// =======================================================
	//==============================================================================	
	// =======================================================
	// Actions Route 					 					||
	// =======================================================

	public function registrationHospital()
	{
		/* Initialization */
		$id 					= 	Auth::doctor()->get()->id;
		$view 					=	View::make('doctor.register.hospital', array());
		$view->appTitle 		=	$this->appTitle;
		$view->countries 		= 	Country::all();
		$view->provinces 		= 	Province::all();
		$view->cities 			= 	City::all();
		// $view->hospitals 		= 	HospitalList::hospitalsList();
		// $view->myHospitals 		= 	Doctor::doctorHospital($id);

		return $view;
	}
}
