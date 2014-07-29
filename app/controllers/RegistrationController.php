<?php

class RegistrationController extends BaseController {


	/* BEGIN PATIENT REGISTRION SECTION */

	public function patientRegister()
	{
		$input = Input::all();
		
		$rules_p = array(	'email' 			=> 'required|unique:patients',
						'firstname'	=>	'required',
						'lastname'	=>	'required',
						'password'	=>	'required|between:6,32');

		$rules_d = array(	'email' 			=> 'required|unique:doctors',
						'firstname'	=>	'required',
						'lastname'	=>	'required',
						'password'	=>	'required|between:6,32');
		
		$valid_p = Validator::make(Input::all(), $rules_p);
		$valid_d = Validator::make(Input::all(), $rules_d);
		
		if ($valid_p->fails() && $valid_d->fails())
		{
			return Redirect::to('createuser/patient')->withInput($input)->withErrors($valid);
		}
		else 
		{
			// this will transfer the password to a variable then encrypt it using hash.
			$password = $input['password'];
			$password = Hash::make($password);
			
			// saves all the data to the database
			$patient 				= 	new Patient();
			$patient->email			= 	$input['email'];
			$patient->password 		= 	$password;
			$patient->firstname 	= 	$input['firstname'];
			$patient->lastname 		= 	$input['lastname'];
			$patient->status 		=	'0';
			$patient->confirmation_token = str_random(4). '-'. str_random(10);
			$patient->save();

			try{
				if($input['subcribe'] == 'on')
				{
					$subscriber				= new Subscriber();
					$subscriber->email 		= $input['email'];
					$subscriber->save();
				}
			}
			catch(Exception $e)
			{}

			

			$patient_temp = Patient::where('email', '=', $patient->email)->get(array('id'));
			$id =  $patient_temp[0]->id;
			$url = URL::to('createuser/verify/'.$patient->confirmation_token).'/'. $id;

			/* send validation email */
			$patient_v = array(
  				'email'		=>	$patient->email,
  				'name'		=>	$patient->firstname
			);

			$data = array(
			  'detail'=> $url,
			  'name'  => $patient_v['name']
			);

			Mail::send('emails.verification.verify', $data, function($message) use ($patient_v)
			{
  				$message->from('testmailserver@teknolohiya.ph', 'Administrator');
  				$message->to($patient_v['email'], $patient_v['name'])->subject('Welcome to Project Doc Search!');
			});

			return Redirect::to('createuser/pending')->with('id', $id)->with('message', 'Congratulations');
		}
	}

	public function verifyPatient($confirmation, $id)
	{
		$patient = Patient::find($id);
		if ($confirmation == $patient->confirmation_token)
		{
			Patient::where('id', '=', $id)->update(array('confirmation'  => '1'));
			// if (Auth::patient()->attempt(array('email' => $input['email'], 'password' => $input['password'] )) == true)
   //  	    {
   //  	    	return Redirect::to('patient/dashboard');
   //  	    }
			return Redirect::to('login');
		}
	}

	public function patientVerificationResend()
	{

		$input = Input::all();
		$patient = Patient::where('id', '=', $input['patientID'])->get();
		// var_dump($input['patientID']);
		// die('test1');
		$id = $patient[0]->id;
		$url = URL::to('createuser/verify/'.$patient[0]->confirmation_token).'/'. $id;

		/* send validation email */
		$patient_v = array(
  			'email'		=>	$patient[0]->email,
  			'name'		=>	$patient[0]->firstname
		);

		$data = array(
		  'detail'=> $url,
		  'name'  => $patient_v['name']
		);

		Mail::send('emails.verification.verify', $data, function($message) use ($patient_v)
		{
  			$message->from('testmailserver@teknolohiya.ph', 'Administrator');
  			$message->to($patient_v['email'], $patient_v['name'])->subject('Re-welcome to Project Doc Search!');
		});
		return Redirect::to('createuser/pending')->with('id', $id)->with('message', 'Congratulations');
	}

	/* END PATIENT REGISTRION SECTION */

	/* =========================================================================================== */

	/* BEGIN DOCTOR REGISTRATION SECTION */

	public function doctorRegister()
	{
		$input = Input::all();
		
		$rules = array(	'email' 			=> 'required|unique:doctors',
						'firstname'	=>	'required',
						'lastname'	=>	'required',
						'password'	=>	'required|between:6,32');
		
		$valid = Validator::make(Input::all(), $rules);
		
		if ($valid->fails())
		{
			return Redirect::to('createuser/doctor');
		}
		else 
		{
			// this will transfer the password to a variable then encrypt it using hash.
			$password = $input['password'];
			$password = Hash::make($password);
			
			// saves all the data to the database
			$doctor 				= 	new Doctor();
			$doctor->email			= 	$input['email'];
			$doctor->password 		= 	$password;
			$doctor->firstname 		= 	$input['firstname'];
			$doctor->lastname 		= 	$input['lastname'];
			$doctor->status 		=	'0';
			$doctor->confirmation_token = str_random(4). '-'. str_random(10);
			$doctor->save();

			$doctor_temp = Doctor::where('email', '=', $doctor->email)->get(array('id'));
			$id =  $doctor_temp[0]->id;
			$url = URL::to('createuser/verify_doctor/'.$doctor->confirmation_token).'/'. $id;

			/* send validation email */
			$doctor_v = array(
  				'email'		=>	$doctor->email,
  				'name'		=>	$doctor->lastname
			);

			$data = array(
			  'detail'=> $url,
			  'name'  => $doctor_v['name']
			);

			Mail::send('emails.verification.verify', $data, function($message) use ($doctor_v)
			{
  				$message->from('testmailserver@teknolohiya.ph', 'Administrator');
  				$message->to($doctor_v['email'], $doctor_v['name'])->subject('Welcome to Project Doc Search!');
			});

			return Redirect::to('createuser/pending_doctor')->with('id', $id)->with('message', 'Congratulations');
		}
	}

	public function verifyDoctor($confirmation, $id)
	{
		$doctor = Doctor::find($id);
		if ($confirmation == $doctor->confirmation_token)
		{
			Doctor::where('id', '=', $id)->update(array('confirmation'  => '1'));
			return Redirect::to('login');
		}
	}

	public function doctorVerificationResend()
	{

		$input = Input::all();
		$doctor = Doctor::where('id', '=', $input['patientID'])->get();

		$id = $doctor[0]->id;
		$url = URL::to('createuser/verify_doctor/'.$doctor[0]->confirmation_token).'/'. $id;

		/* send validation email */
		$doctor_v = array(
  			'email'		=>	$doctor[0]->email,
  			'name'		=>	$doctor[0]->firstname
		);

		$data = array(
		  'detail'=> $url,
		  'name'  => $doctor_v['name']
		);

		Mail::send('emails.verification.verify', $data, function($message) use ($doctor_v)
		{
  			$message->from('testmailserver@teknolohiya.ph', 'Administrator');
  			$message->to($doctor_v['email'], $doctor_v['name'])->subject('Re-welcome to Project Doc Search!');
		});
		return Redirect::to('createuser/pending_doctor')->with('id', $id)->with('message', 'Congratulations');
	}
	/* END DOCTOR REGISTRATION SECTION */

	/* =========================================================================================== */

	/* BEGIN HOSPITAL REGISTRATION SECTION */

	public function registerHospital()
	{
		$input = Input::all();
		
		try
		{
			$hospitalList = new HospitalList();
			$hospitalList->name 		= $input['name'];
			$hospitalList->type			= $input['type'];
			$hospitalList->Address1		= $input['address1'];
			$hospitalList->Address2		= $input['address2'];
			$hospitalList->Address3		= $input['cities'];
			$hospitalList->Address4		= $input['province'];
			$hospitalList->latitude		= $input['pos_lat'];
			$hospitalList->longitude	= $input['pos_lng'];
			$hospitalList->contact		= $input['contact'];
			$hospitalList->description	= $input['description'];
			$hospitalList->save();

			return Redirect::to('doctor/hospital')->with('result', 'Successfull')->with('message', 'New hospital has successfully been added.');
		}
		catch(Exception $e)
		{
			return Redirect::to('doctor/hospital')->with('result', 'Failed')->with('message', 'Something went wrong! Hospital was not added. Please retry again.');
		}
		

		
	}

	/* END HOSPITAL REGISTRATION SECTION */

	/* =========================================================================================== */
	
}