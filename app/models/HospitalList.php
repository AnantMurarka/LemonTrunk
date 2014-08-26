<?php
class HospitalList extends Eloquent {

	protected $table = 'hospital_list';

	public static function hospitalsList() 
	{
		$data = HospitalList::join('Cities', 'Cities.id', '=', 'hospital_list.Address3')
		->join('Province', 'Province.id', '=', 'hospital_list.Address4')
		->get(array('hospital_list.id', 'hospital_list.name', 'hospital_list.type', 'Cities.City', 'Province.province' ));

		return $data;
	}
}