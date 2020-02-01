<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tab_panel extends CI_Controller {

	public function index(){
		$data = [
			'title'=>'Tab Panel'

	
	];
		template('tab_panel_view', $data);
}

}
