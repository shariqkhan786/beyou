<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class forms extends CI_Controller {
        public function __construct() {
        parent::__construct();
        // if (!$this->session->userdata('logged_in') == TRUE) {
        //     redirect('auth');
        // }
        $this->load->library('form_validation');

        $this->load->library('session');
        $this->load->model(array('Add_model','Table_model'));
    }


	public function index(){
		$data = [
			'title'=>'Add Form'

	
	];
		template('form_view', $data);
}

      public function upload_picture()
      {
        if(!empty($_FILES["picture"]['name']))
        {
            $config['upload_path'] = './uploads/pictures/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '0';
            $config['overwrite']     = FALSE;
            $this->upload->initialize($config);
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('picture')) 
            {
              $error = array('error' => $this->upload->display_errors());

              $this->session->set_flashdata('message', $error['error']);
              redirect('Forms');
          } 
          else
          {  
              $data = array('picture' => $this->upload->data());
              $image1= $data['picture']['file_name'];
              return $image1;

          }
      }
     
    }
          public function upload_picture1()
      {
        if(!empty($_FILES["picture1"]['name']))
        {
            $config['upload_path'] = './uploads/pictures/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '0';
            $config['overwrite']     = FALSE;
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('picture1')) 
            {
              $error = array('error' => $this->upload->display_errors());

              $this->session->set_flashdata('message', $error['error']);
              redirect('Forms');
          } 
          else
          {  
              $data = array('picture1' => $this->upload->data());
              $image2= $data['picture1']['file_name'];
              return $image2;
          }
      }
      
    }
public function add()
{
  $this->load->library('form_validation');
  $this->form_validation->set_rules('name', 'Name', 'required|min_length[5]|max_length[12]');
  $this->form_validation->set_rules('contact', 'Contact', 'required');
   if ($this->form_validation->run() == FALSE)
                {
                    $data = [
                   'title'=>'Add Form'
                          ];
                    template('form_view', $data);
                }
  else{
    $image1=$this->upload_picture();
    $image2=$this->upload_picture1();
    if($this->Add_model->AddData($image1,$image2))
    {        

       $message = $this->session->set_flashdata('message','Details Added Successfully');
        redirect('Tables');
    }
          
}
}
    public function ViewDetails($id='')
    {
      //$id = base64_decode($id);

      $Details=$this->Table_model->ViewDetailsById($id);
      $data = [
               'Title' => 'Details To Edit',
                'ViewDetailsToEdit' => $Details,
      ];
        template('form_edit_view', $data);
    }

    public function Edit($id='')
    {
         $image1=$this->upload_picture();
         $image2=$this->upload_picture1();
      
         $Vdetails=$this->Table_model->ViewDetailsById($id);
         $data=[
           'Title'=> 'Edit Details',
           'ViewDetailsToEdit1'=> $Vdetails,
               ];
         $this->form_validation->set_rules('name','Name','required');
         if ($this->form_validation->run() === FALSE) {
          template('form_edit_view',$data);
         }
         else{
          $id=$this->input->post('id');
           $data=[
           'ViewDetailsToEdit1'=> $Vdetails,
                 ];
            if ($this->Table_model->Editdetails($id,$image1,$image2)) {
              $this->session->set_flashdata('Umessage','Details Updated Successfully');
                    redirect('Tables');
            }
         }

    }
}
