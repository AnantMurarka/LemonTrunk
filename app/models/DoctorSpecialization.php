<?php
class DoctorSpecialization extends Eloquent {

	protected $table = 'doctors_specializations';

	public function doctor() {
		return $this->belongsTo('doctors');
	}

	public static function specializationWithDoctor()
	{
		$data = SpecialismList::leftJoin('doctors_specializations', function($join)
        		{
        		    $join->on('specialism_list.id', '=', 'doctors_specializations.specialization_id')
        		    	->where('doctors_specializations.doctor_id', '=', Auth::doctor()->get()->id);
        		})
				->groupBy('specialism_list.id')
        		->get(array('specialism_list.id', 'specialism_list.name', 'specialism_list.description as description', 'doctors_specializations.doctor_id as doctor'));

        /* above query is equal to */
        // SELECT specialism_list.id as id, specialism_list.name as specialization, doctors_specializations.doctor_id as doctor
		// from specialism_list left join 
		// (select doctors_specializations.specialization_id, doctors_specializations.doctor_id
		//     from doctors_specializations
		//     where doctors_specializations.doctor_id = '13432'
		//     group by doctors_specializations.specialization_id
		// ) doctors_specializations on specialism_list.id = doctors_specializations.specialization_id
		// echo $data;
		// die();
		return $data;
	}
}