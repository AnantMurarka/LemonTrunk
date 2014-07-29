<?php
class City extends Eloquent {

	protected $table = 'Cities';

	public function province() {
		return $this->belongsTo('Province');
	}
	
}
?>