<?php
class DoctorHospital extends Eloquent {

	protected $table = 'doctors_hospitals';

	public function doctor() {
		return $this->belongsTo('doctors');
	}
}