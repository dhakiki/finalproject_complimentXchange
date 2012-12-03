<?php

class Cily_Controller extends Base_Controller {

	public function action_index() {

		//$schools= Cilyuser::all_schools();
		//$results= array(
		//	'schools' => $schools
		//	);
		//return View::make('home.cily', $results);
		return View::make('home.cily');
	}
	

};