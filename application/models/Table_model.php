<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Table_model extends CI_Model {
	private $table = 'tbl_crud';
    public function FetchData(){
            $query=$this->db->select('*')
            ->where('isDeleted',0)
            ->get($this->table);
            return $query->result();
   
	}
    public function DeleteData($id){
           $this->db->set('isDeleted',1);
           $this->db->where('id', $id);
           $this->db->update('tbl_crud');
           return $this->db->last_query();
    }
    public function ViewDetailsById($id='')       ///fetch specific id's data
    {
      $query=$this->db->select('*')
      ->where('isDeleted',0)
      ->where('id',$id)
      ->get($this->table);
      return $query->result(); 
    }
    public function EditDetails($id,$image1,$image2)   
    {
     
      if (empty($_FILES['picture']['name']) && empty($_FILES['picture1']['name'])  )  {
         $data = array(
            'name'    =>!empty($this->input->post('name'))?$this->input->post('name'):'',
            'contact'    =>!empty($this->input->post('contact'))?$this->input->post('contact'):'',
            'address'    =>!empty($this->input->post('address'))?$this->input->post('address'):''

        );            
        $this->db->where('id',$id);
        $this->db->update('tbl_crud',$data);    
        // return $this->db->last_query();        
        return TRUE;     
}

elseif (!empty($_FILES['picture']['name']) && empty($_FILES['picture1']['name'])) {
  $data = array(
            'name'    =>!empty($this->input->post('name'))?$this->input->post('name'):'',
            'contact'    =>!empty($this->input->post('contact'))?$this->input->post('contact'):'',
            'address'    =>!empty($this->input->post('address'))?$this->input->post('address'):'',
            'picture' =>!empty($image1)?$image1:'',
            
        );            
        $this->db->where('id',$id);
        $this->db->update('tbl_crud',$data);    
               
        return TRUE; 
}
elseif (!empty($_FILES['picture1']['name']) && empty($_FILES['picture']['name'])) {
  $data = array(
            'name'    =>!empty($this->input->post('name'))?$this->input->post('name'):'',
            'contact'    =>!empty($this->input->post('contact'))?$this->input->post('contact'):'',
            'address'    =>!empty($this->input->post('address'))?$this->input->post('address'):'',
            'picture1' =>!empty($image2)?$image2:'',
            
        );            
        $this->db->where('id',$id);
        $this->db->update('tbl_crud',$data);    
               
        return TRUE; 
}
else{
      $data = array(
            'name'    =>!empty($this->input->post('name'))?$this->input->post('name'):'',
            'contact'    =>!empty($this->input->post('contact'))?$this->input->post('contact'):'',
            'address'    =>!empty($this->input->post('address'))?$this->input->post('address'):'',
            'picture' =>!empty($image1)?$image1:'',
            'picture1' =>!empty($image2)?$image2:''
        );            
        $this->db->where('id',$id);
        $this->db->update('tbl_crud',$data);    
               
        return TRUE; 
}
      
          
    } 
}