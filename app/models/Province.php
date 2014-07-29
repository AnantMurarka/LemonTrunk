<?php
class Province extends Eloquent {

	protected $table = 'Province';

	public function country() {
		return $this->belongsTo('countries');
	}

	public function city(){
		return $this->hasMany('City', 'ProvinceCode');
	}
	
}
?>