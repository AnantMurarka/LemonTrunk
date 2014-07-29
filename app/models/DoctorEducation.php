<?php
class DoctorEducation extends Eloquent {

	protected $table = 'doctors_educations';

	public function doctor() {
		return $this->belongsTo('doctors');
	}
}