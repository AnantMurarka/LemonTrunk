<?php

class LoginController extends BaseController {


	/* Login with Docsearch */
	public function loginWithDocSearch()
	{

		$input = Input::all();
		$rules = array(	'email' 	=> 'required', 
						'password' 	=> 'required' );

		$valid = Validator::make($input,$rules);

		if ($valid->fails()) 
		{
			return Redirect::to('login')->withErrors($valid);
		}
		else 
		{
			$userdata = array(
				'email' 	=> $input['email'],
				'password' 	=> $input['password'],
			);

			if (Auth::patient()->attempt($userdata) == true) 
			{
                if (Auth::patient()->get()->confirmation == '1')
                {
				    if (Auth::patient()->get()->status == '0')
				    {
				    	$view = Redirect::to('patient/dashboard');
				    	return $view;
				    }
				    else
				    {
                        Auth::patient()->logout();
				    	return Redirect::to('login')->withErrors('You have been Deactivated');
				    }
                }
                else
                {
                    $id = Auth::patient()->get()->id;
                    Auth::patient()->logout();
                    return Redirect::to('createuser/pending')->with('id', $id)->with('message', 'Please verify your account.');
                }
			}
			elseif (Auth::doctor()->attempt($userdata) == true) 
			{
				if (Auth::doctor()->get()->confirmation == '1')
                {
                    if (Auth::doctor()->get()->status == '0')
                    {
                        $view = Redirect::to('doctor/dashboard');
                        return $view;
                    }
                    else
                    {
                        Auth::doctor()->logout();
                        return Redirect::to('login')->withErrors('You have been Deactivated');
                    }
                }
                else
                {
                    $id = Auth::doctor()->get()->id;
                    Auth::patient()->logout();
                    return Redirect::to('createuser/pending_doctor')->with('id', $id)->with('message', 'Please verify your account.');
                }
			}
            else
            {
                return Redirect::to('login')->withErrors('Incorrect Email or Password');
            }
			
		}
	}

	/* Login with facebook */
	public function loginWithFacebook() {

    // get data from input
    $code = Input::get( 'code' );

    // get fb service
    $fb = OAuth::consumer( 'Facebook' );

    // check if code is valid

    // if code is provided get user data and sign in
    if ( !empty( $code ) ) 
    {

         // This was a callback request from facebook, get the token
        $token = $fb->requestAccessToken( $code );

        // Send a request with it
        $result = json_decode( $fb->request( '/me' ), true );

        $patientCheck = Patient::where('email', '=', $result['email'])->get(array('id','email'));

        if ($patientCheck->isEmpty())
    	{
    		$patient = new Patient;
    		$patient->email			= $result['email'];
    		$patient->firstname		= $result['first_name'];
    		$patient->middlename	= $result['middle_name'];
    		$patient->lastname		= $result['last_name'];
    		$patient->gender 		= $result['gender'];
    		$patient->profilePic	= 'http://graph.facebook.com/'.$result['id'].'/picture';
    		$patient->status		=	'0';
    		$patient->confirmation	=	'1';
    		$patient->save();

    		$patientid = $patient->id;

    		$patientSocial					= new PatientSocial;
    		$patientSocial->id				= $patientid;
    		$patientSocial->social_id		= $result['id'];
    		$patientSocial->social_type		= 'facebook';
    		$patientSocial->save();

    		Auth::patient()->loginUsingId($patientid);
    		return Redirect::to('patient/dashboard');

    	}
    	else
    	{
    		Auth::patient()->loginUsingId($patientCheck[0]->id );
    		return Redirect::to('patient/dashboard');
    	}
    }
    // if not ask for permission first
    else {
        // get fb authorization
        $url = $fb->getAuthorizationUri();

        // return to facebook login url
         return Redirect::to( (string)$url );
    }
}

	/* Login with Google+ */
	public function loginWithGoogle() 
	{

    	// get data from input
    	$code = Input::get( 'code' );
	
    	// get google service
    	$googleService = OAuth::consumer( 'Google' );
	
    	// check if code is valid
	
    	// if code is provided get user data and sign in
    	if ( !empty( $code ) ) 
    	{
    	    // This was a callback request from google, get the token
    	    $token = $googleService->requestAccessToken( $code );
	
    	    // Send a request with it
    	    $result = json_decode( $googleService->request( 'https://www.googleapis.com/oauth2/v1/userinfo' ), true );
	
    	    $patientAuth = Patient::where('id', '=', $result['id'])->get(array('id','email'));

    	    if ($patientCheck->isEmpty())
    		{
    			$patient = new Patient;
    			$patient->email			= $result['email'];
    			$patient->firstname		= $result['given_name'];
    			$patient->lastname		= $result['family_name'];
    			$patient->gender 		= $result['gender'];
    			$patient->profilePic	= $result['picture'];
    			$patient->status		=	'0';
    			$patient->confirmation	=	'1';
    			$patient->save();
	
    			$patientid = $patient->id;
	
    			$patientSocial					= new PatientSocial;
    			$patientSocial->id				= $patientid;
    			$patientSocial->social_id		= $result['id'];
    			$patientSocial->social_type		= 'google';
    			$patientSocial->save();
	
    			Auth::patient()->loginUsingId($patientid);
    			return Redirect::to('patient/dashboard');
	
    		}
    		else
    		{
    			Auth::patient()->loginUsingId($patientCheck->id );
    			return Redirect::to('patient/dashboard');
    		}
    	}
    	else 
    	{
        	// get googleService authorization
        	$url = $googleService->getAuthorizationUri();

        	// return to facebook login url
        	return Redirect::to( (string)$url );
    	}
        
	}

	/* Login with Twitter */
	public function loginWithTwitter() 
	{

		$code = Input::get( 'code' );
		$twitterService = OAuth::consumer( 'twitter' );

		if ( !empty( $code ) ) {

        	
			$token = $twitterService->requestAccessToken( $code );
			$result = json_decode( $twitterService->request('account/verify_credentials.json'), true);

			$message = 'Your unique Twitter user id is: ' . $result['id'] . ' and your name is ' . $result['name'];
			echo $message. "<br/>";
			dd($result);

		}
		else {

			$url = $twitterService->getAuthorizationUri();
			return Redirect::to( (string)$url );

		}
	}

	

	
}