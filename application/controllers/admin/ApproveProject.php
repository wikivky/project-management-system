<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Approveproject extends CI_Controller {

public function index(){

    $this->load->model('User_Profile_Model');
    // $projectid = $this->session->userdata('uid');
    $approveproject = $this->session->userdata('project_id');
    $projectid=$this->User_Profile_Model->approveproject($approveproject);
    
    $allprojectshow= $this->User_Profile_Model->view_Allproject_Details();
    // echo '<pre>';
    // print_r($users);
    // exit();
    $this->load->view('admin/all_Userproject_Dashboard',['allprojectshow'=>$allprojectshow]); 
}
}   