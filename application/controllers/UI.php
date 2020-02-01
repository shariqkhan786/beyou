<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ui extends CI_Controller {

	public function index(){
		$data = [
			'title'=>'UI'

	
	];
		template('ui_view', $data);
}
	
}
