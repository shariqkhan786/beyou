<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

	public function index(){
		$data = [
			'title'=>'Admin'

	
	];
		template('dashboard_view', $data);
}

}
