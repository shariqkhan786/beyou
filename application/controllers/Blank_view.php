<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class blank_view extends CI_Controller {

	public function index(){
		$data = [
			'title'=>'Admin'

	
	];
		template('dashboard_view', $data);
}
	public function tables(){
		$data = [
			'title'=>'Tables'

	
	];
		template('table_view', $data);
}
	public function forms(){
		$data = [
			'title'=>'Forms'

	
	];
		template('form_view', $data);
}
	public function charts(){
		$data = [
			'title'=>'charts'

	
	];
		template('chart_view', $data);
}
	public function ui(){
		$data = [
			'title'=>'ui'

	
	];
		template('ui_view', $data);
}
	public function tab_panel(){
		$data = [
			'title'=>'tab_panel'

	
	];
		template('tab_panel_view', $data);
}
	public function blank_page(){
		$data = [
			'title'=>'Blank Page'

	
	];
		template('blank_view', $data);
}
}
