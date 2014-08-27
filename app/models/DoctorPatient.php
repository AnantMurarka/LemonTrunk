<?php
class DoctorPatient extends Eloquent {

	protected $table = 'doctors_patients';

	public function doctor() {
		return $this->belongsTo('doctors');
	}
}