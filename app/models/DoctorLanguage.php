<?php
class DoctorLanguage extends Eloquent {

	protected $table = 'doctors_language';

	public function doctor() {
		return $this->belongsTo('doctors');
	}
}