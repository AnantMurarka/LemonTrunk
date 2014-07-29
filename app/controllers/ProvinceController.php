<?php

class ProvinceController extends BaseController {

	public function loadProvince()
	{
		$input = Input::all();
		$code = $input['countryCode'];

		return Response::json( Country::find($code)->province );
	}
	

}
