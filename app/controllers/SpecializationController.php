<?php

class SpecializationController extends BaseController {

	public function loadSpecialization()
	{
		return Response::json( SpecialismList::all() );
	}
}
