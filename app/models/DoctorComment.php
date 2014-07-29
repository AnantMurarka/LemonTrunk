<?php
class DoctorComment extends Eloquent {

	protected $table = 'doctors_comments';

	public function doctor() {
		return $this->belongsTo('doctors');
	}
}