<?php

class HospitalController extends BaseController {

	public function hospitalList()
	{
		return Datatable::collection(HospitalList::hospitalsList())
		->showColumns('id','name', 'type', 'City', 'contact')
        ->searchColumns('name', 'Address1', 'Address2', 'City', 'province')
        ->make();
	}

	public function autoFill()
	{
		$input = Input::all();

		return Response::json( HospitalList::where('name', 'LIKE', '%'. $input['name'] .'%')->get() );
		// return Response::json(array('message' => 'success'));
	}

}
