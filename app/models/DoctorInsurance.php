<?php
class DoctorInsurance extends Eloquent {

	protected $table = 'doctors_insurances';

	public function doctor() {
		return $this->belongsTo('doctors');
	}
}