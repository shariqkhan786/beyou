<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blank extends CI_Controller {

	public function index(){
		$data = [
			'title'=>'Blank Page'

	
	];
		template('blank_view', $data);
}
	
}
