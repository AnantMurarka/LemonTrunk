<?php

class HospitalController extends BaseController {

	public function hospitalList()
	{
		$data = HospitalList::join('Cities', 'Cities.id', '=', 'hospital_list.Address3')
		->join('Province', 'Province.id', '=', 'hospital_list.Address4')
		->orderBy(DB::raw('RAND()'))->take(5)
		->get();
		return Response::json($data);
	}

	public function searchHospital()
	{
		$input = Input::all();

		$data = HospitalList::join('Cities', 'Cities.id', '=', 'hospital_list.Address3')
		->join('Province', 'Province.id', '=', 'hospital_list.Address4')
		->where('name', 'LIKE', '%'.$input['query'].'%')
		->orWhere('City', 'LIKE', '%'.$input['query'].'%')
		->orWhere('province', 'LIKE', '%'.$input['query'].'%')
		->take(5)
		->get();
		return Response::json($data);
	}
	
}
