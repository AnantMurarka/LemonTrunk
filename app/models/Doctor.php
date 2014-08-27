<?php
class Doctor extends Eloquent {

	protected $table = 'doctors';

	/* DB Relationships ============================================= */
	public function education() {
		return $this->hasMany('DoctorEducation', 'doctor_id');
	}

	public function insurance() {
		return $this->hasMany('DoctorInsurance', 'doctor_id');
	}

	public function comment() {
		return $this->hasMany('DoctorComment', 'doctor_id');
	}

	public function specialization() {
		return $this->hasMany('DoctorSpecialization', 'doctor_id');
	}

	public function hospital() {
		return $this->hasMany('DoctorHospital', 'doctor_id');
	}

	public function language() {
		return $this->hasMany('DoctorLanguage', 'doctor_id');
	}

	public function patient() {
		return $this->hasMany('DoctorPatient', 'doctor_id');
	}

	/* Functions =================================================== */
	/* Display Functions */
	public static function profile($id)
	{
		$doctor 					=	Doctor::find($id);
		$doctor['educations']		=	Doctor::find($id)->education()
										->join('Countries', 'Countries.id', '=', 'doctors_educations.country_code')
										->get(array('doctors_educations.school', 'doctors_educations.degree', 'doctors_educations.year_graduated', 'Countries.Country'))
										->toArray();
		$doctor['insurances']		=	Doctor::find($id)->insurance()
										->get(array('insurance'))
										->toArray();
		$doctor['specializations']	=	Doctor::find($id)->specialization()
										->join('specialism_list', 'specialism_list.id', '=', 'doctors_specializations.specialization_id')
										->get(array('specialism_list.name as specialization', 'specialism_list.description as specialization_description'))
										->toArray();
		$doctor['comments']			=	Doctor::find($id)->comment()
										->join('patients', 'patients.id', '=', 'doctors_comments.patient_id')
										->get(array('doctors_comments.comment', 'doctors_comments.updated_at', 'patients.firstname', 'patients.lastname'))
										->toArray();
		$doctor['ratings']			= 	DoctorRatings::where('doctors_id', '=', $id)->avg('ratings');
		$doctor['hospitals']		=	Doctor::find($id)->hospital()
										->join('hospital_list', 'hospital_list.id', '=', 'doctors_hospitals.hospital_id')
										->get(array('hospital_list.name as hospital_name', 'hospital_list.longitude', 'hospital_list.latitude', 'doctors_hospitals.contact'))
										->toArray();
		$doctor['language']			= 	Doctor::find($id)->language()
										->join('language', 'language.id', '=', 'doctors_language.language_id')
										->get(array('name'))->toArray();
		// echo $doctor;
		// die();
		return $doctor;
	}

	public static function doctorHospital($id)
	{
		$doctorHospitalList = Doctor::find($id)->hospital()->join('hospital_list', 'hospital_list.id', '=', 'doctors_hospitals.hospital_id')->get();
		return $doctorHospitalList;
	}


	/* Update Functions */
	public static function updatePersocalInfo($input)
	{
		$result = array('result' => 'fail' , 'message' => 'Something went wrong. Your Information has been updated!' );
		Doctor::where('id', '=', $input['id'])
		->update( array(
			'firstname' 	=> $input['firstname'],
			'middlename' 	=> $input['middlename'],
			'lastname'	 	=> $input['lastname'],
			'contact'	 	=> $input['contact'],
			'address1' 		=> $input['address1'],
			'address2' 		=> $input['address2'],
			'address3' 		=> $input['city'],
			'address4' 		=> $input['province'],
			'address5' 		=> $input['country']
		));
		$result = array('result' => 'Success' , 'message' => 'Your Information has been updated!' );
		return $result;
	}

	public static function updateAvatar($input)
	{
		$result = array('result' => 'fail' , 'message' => 'Something went wrong. Your avatar has been updated!');

		$input = Input::all();
		$file = $input['image'];
 
		$pubpath = public_path();
    	$destinationPath = $pubpath.'/uploads/profile/images';

    	$extension = $file->getClientOriginalExtension();
    	$filename = str_random(10). '.'.$extension;

    	$size = $file->getSize();
    	$mime = $file->getMimeType();
    	$upload_success = Input::file('imagefile')->move($destinationPath, $filename);
		 
		if( $upload_success ) 
		{
			Doctor::where('id', '=', $input['id'])->update( array(
			'image' 	=> $filename
			));
		   	$result = array('result' => 'Success' , 'message' => 'Your avatar has been updated!' );
			return $result;
		}


		return $result;
	}

	public static function updatePassword($password, $id)
	{
		$hpassword = Hash::make($password);
		Doctor::where('id', '=', $id)
		->update(
			array(
				'password' => $hpassword
				)
			);
		if ($password == Auth::doctors()->get()->password) return array('result' => 'Success' , 'message' => "Your password has been updated." );
		else return array('result' => 'fail' , 'message' => "Something went wrong your password wasn't updated. Please try again." );
	}

	public static function updateSettings($input)
	{
		$result = array('result' => 'fail' , 'message' => 'Something went wrong!' );
		Doctor::where('id', '=', $input['id'])
		->update( array(
			'firstname' 	=> $input['firstname'],
			'middlename' 	=> $input['middlename'],
			'lastname'	 	=> $input['lastname'],
			'contact'	 	=> $input['contact'],
			'address1' 		=> $input['address1'],
			'address2' 		=> $input['address2'],
			'address3' 		=> $input['city'],
			'address4' 		=> $input['province'],
			'address5' 		=> $input['country']
		));
		$result = array('result' => 'successfull' , 'message' => 'Your Information has been updated!' );
		return $result;
	}

}