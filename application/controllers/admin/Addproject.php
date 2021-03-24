<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addproject extends CI_Controller{
  
    public function project(){

        $config['upload_path']          = './assests/uploads/';
        $config['allowed_types']        = 'jpeg|jpg|png|pdf|doc';
        $config['max_size']             = 4000;

          $this->load->library('upload', $config);
          $this->load->model('ManageUsers_Model');
          $this->load->library('form_validation');
          $this->form_validation->set_rules('projectname', 'project_name', 'required'); 
          $this->form_validation->set_rules('description', 'description', 'required'); 
          $this->form_validation->set_rules('id', 'id', 'required'); 

          if ($this->form_validation->run() == true) {
           
            if(!empty($_FILES['project_file']['name'])){

                // Admin can select file for project with file
                if($this->upload->do_upload('project_file')){

                        $data= $this->upload->data();
                        $projectdetails['project_name'] = $this->input->post('projectname');
                        $projectdetails['description'] = $this->input->post('description');
                        $projectdetails['id'] = $this->input->post('id');
                        $projectdetails['date'] = $this->input->post('lastdate');
                        $projectdetails['project_file'] = $data['file_name'];
                        // $projectdetails['approve'] = 0;
        
                        $this->ManageUsers_Model->createproject($projectdetails);
                        $this->session->set_flashdata('success', 'Project assign Successfully');
                        redirect(base_url().'admin/addproject/project');

                }else{
                    $error= $this->upload->display_errors();
                    $data['errorImageUpload']=$error;
                    $users= $this->ManageUsers_Model->getusers();
                    $this->load->view('admin/addproject',$data,['users'=>$users]);
                }
            }
            else{
                // Admin can assign project without file
                $projectdetails['project_name'] = $this->input->post('projectname');
                $projectdetails['description'] = $this->input->post('description');
                $projectdetails['id'] = $this->input->post('id');
                $projectdetails['date'] = $this->input->post('lastdate');


                $this->ManageUsers_Model->createproject($projectdetails);
                $users= $this->ManageUsers_Model->getusers();
                $this->session->set_flashdata('success', 'Project assign Successfully');
                redirect(base_url().'admin/addproject/project',['users'=>$users]);
            }
        
        }else{
            $this->load->model('ManageUsers_Model');
            $users= $this->ManageUsers_Model->getusers();
            $this->load->view('admin/addproject',['users'=>$users]);
        }
    }

}