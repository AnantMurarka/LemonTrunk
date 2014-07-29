<?php

class CityController extends BaseController {

	public function loadCity()
	{
		$input = Input::all();
		$code = $input['provinceCode'];

		return Response::json( Province::find($code)->city );
	}
	

}
