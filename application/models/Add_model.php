<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Add_model extends CI_Model {
	private $table = 'tbl_crud';
    public function AddData($image1,$image2){
    $data= array(
            'name' =>$this->input->post('name'),
            'contact' =>$this->input->post('contact'),
            'address' =>$this->input->post('address'),
            'picture' =>!empty($image1)?$image1:'',
            'picture1' =>!empty($image2)?$image2:''
             );
            $this->db->insert($this->table,$data);
            return $this->db->last_query();
	}


}