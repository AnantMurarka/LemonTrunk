<?php
class Country extends Eloquent {

	protected $table = 'Countries';

	public function province() {
		return $this->hasMany('Province', 'countryCode');
	}
	
}
?>