<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Author 	:	Lean Karlo Corpuz
| Version 	:	1.0.0
|
*/


/* BEGIN FRONTEND routes */
Route::get('/',
	array('uses'=>'HomeController@index'));

Route::get('howitworks',
	array('uses'=>'HomeController@howitworks'));

Route::get('aboutus',
	array('uses'=>'HomeController@aboutus'));

Route::get('contactus',
	array('uses'=>'HomeController@contactus'));

Route::get('support',
	array('uses'=>'HomeController@support'));

Route::get('result',
	array('uses'=>'HomeController@support'));

Route::get('login',
	array('as' => 'login', 'uses'=>'HomeController@login'));

Route::get('termsandpolicy',
	array('uses'=>'HomeController@termsandpolicy'));

/* END FRONTEND routes */

/*==========================================================================*/

/* BEGIN GET DATA routes */
Route::post('province',
	array(
		'as' => 'loadProvince',
		'uses'=>'ProvinceController@loadProvince'
		));

Route::post('city',
	array(
		'as' => 'loadCity',
		'uses'=>'CityController@loadCity'
		));

Route::get('specialization',
	array(
		'as' => 'specialization_list',
		'uses'=>'SpecializationController@loadSpecialization'
		));

/* END GET DATA routes */

/*==========================================================================*/

/* Login with social media */
 //docsearch
Route::post('login/patient',
	array('as' => 'loginWithDocSearch', 
		'uses'=>'LoginController@loginWithDocSearch'
		));

Route::get('patient/dashboard',array(
	'before' => 'auth',
	'uses'=>'PatientController@dashboard'
	));

Route::get('doctor/dashboard',array(
	'before' => 'auth',
	'uses'=>'DoctorController@dashboard'
	));

 // facebook
Route::get('login/facebook',
	array('as' => 'loginWithFacebook',
		'uses'=>'LoginController@loginWithFacebook'
		));

 // google+
Route::get('login/google',
	array('as' => 'loginWithGoogle',
		'uses'=>'LoginController@loginWithGoogle'
		));

 //twitter
Route::get('login/twitter',
	array('as' => 'loginWithTwitter',
		'uses'=>'LoginController@loginWithTwitter'
		));

/* End Login with socia media */

/*==========================================================================*/

/* BEGIN Registration */
Route::get('createuser/start',
	array('uses'=>'HomeController@createuserstart'));

Route::get('createuser/patient',
	array('uses'=>'HomeController@patientForm'));

Route::get('createuser/doctor',
	array('uses'=>'HomeController@doctorForm'));

Route::get('createuser/whyjoin',
	array('uses'=>'HomeController@whyjoin'));

Route::get('createuser/pending',
	array('uses'=>'HomeController@pending'));

Route::get('createuser/pending_doctor',
	array('uses'=>'HomeController@pending_doctor'));

	// begin patient registation

Route::post('createuser/patient',
	array('uses'=>'RegistrationController@patientRegister'));

Route::post('createuser/pending',
	array('uses'=>'RegistrationController@patientVerificationResend'));

Route::get('createuser/verify/{confirmation}/{id}',
	array('uses'=>'RegistrationController@verifyPatient'));
	// end patient registation


	// begin doctor registation
Route::post('createuser/doctor',
	array('uses'=>'RegistrationController@doctorRegister'));

Route::post('createuser/pending_doctor',
	array('uses'=>'RegistrationController@doctorVerificationResend'));

Route::get('createuser/verify_doctor/{confirmation}/{id}',
	array('uses'=>'RegistrationController@verifyDoctor'));
	// end doctor registation


/* END Registration */

/*==========================================================================*/

/* BEGIN AUTHENTICATED PATIENT */

Route::group(array('before' => 'auth', 'prefix'=>'patient'), function(){ 

	
});

/* END AUTHENTICATED PATIENT */

/*==========================================================================*/

/* BEGIN AUTHENTICATED DOCTOR */

Route::group(array('before' => 'auth', 'prefix'=>'doctor'), function(){ 

	/* Begin Dashboard Menu */
	Route::get('hospital',
		array(
			'uses'=>'DoctorController@hospital'
			)
		);

	Route::get('insurance',
		array(
			'before' => 'auth',
			'uses'=>'DoctorController@insurance'
			)
		);

	Route::get('patients',
		array(
			'uses'=>'DoctorController@patients'
			)
		);

	Route::get('tasker',
		array(
			'uses'=>'DoctorController@tasker'
			)
		);
	/* End Dashboard Menu */


	/* Begin My Profile */
	Route::get('profile',
		array(
			'uses'=>'DoctorController@profile'
			)
		);

	Route::post('updateinfo',
		array(
			'uses'=>'DoctorController@personalInfo'
			)
		);

	Route::post('updateavatar',
		array(
			'uses'=>'DoctorController@changeAvatar'
			)
		);

	Route::post('updatepassword',
		array(
			'uses'=>'DoctorController@changePassword'
			)
		);

	Route::post('updatesettings',
		array(
			'uses'=>'DoctorController@privateSettings'
			)
		);
	/* End My Profile */

	/* Begin Hospital Registration */
	Route::get('register/hospital',
	array(
		'uses'=>'DoctorController@registrationHospital'
		)
	);

	Route::post('register/hospital',
	array(
		'uses'=>'RegistrationController@registerHospital'
		)
	);
	/* End Hospital Registration */

	/* Begin linking hospital */
	Route::post('link/hospital',
	array(
		'uses'=>'RegistrationController@linkHospital'
		)
	);
	/* End linking hospital */

	/* datatables */
	Route::get('hospitallist',
	array(
		'as' => 'dt_hospital_all',
		'uses'=>'HospitalController@hospitalList'
		));

	/* ajax calls */
	Route::post('hospitalnames',
	array(
		'as' => 'fillhospitalname',
		'uses'=>'HospitalController@autoFill'
		));

});

/* END AUTHENTICATED DOCTOR */

/*==========================================================================*/

Route::get('login',
	array( 'as' => 'logout', 'uses'=>'HomeController@logout'));
