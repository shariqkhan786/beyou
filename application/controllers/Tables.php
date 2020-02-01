<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tables extends CI_Controller {
        public function __construct() {
        parent::__construct();
        // if (!$this->session->userdata('logged_in') == TRUE) {
        //     redirect('auth');
        // }
        $this->load->library('session');
        $this->load->model(array('Table_model'));
    }
	public function index(){
		$data = [

			'title'=>'Tables',
			'Table' => $this->Table_model->FetchData(),

                ];
		template('table_view', $data);
}

    public function delete($id)
    {
    
			$CheckDelete = $this->Table_model->DeleteData($id);
			if ($CheckDelete) {
				$Dmessage = $this->session->set_flashdata('Dmessage','Deleted Successfully');

				redirect('Tables');
			}
			else{
				echo "something wrong";
			}

	

    }


    
}
