<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Project_check extends CI_Controller {
function __construct(){
parent::__construct();
if(! $this->session->userdata('uid'))
redirect('user/login');
$this->load->model('User_Profile_Model');
}
public function index(){
    $projectid = $this->session->userdata('uid');
    $projectdetails=$this->User_Profile_Model->getproject($projectid);
    // echo '<pre>';
    // print_r($projectdetails);
    // exit();
    $this->load->view('user/project_dashboard',['project'=>$projectdetails]);
    }



    public function approve()
    {

          if(isset($_REQUEST['approve']))
          {
            $this->load->model('User_Profile_Model');
           $update_approve= $this->User_Profile_Model->approveproject();
            if($update_approve > 0)
            {
                $this->session->set_flashdata('msg', "You Reject the project");
            }
            else{
                $this->session->set_flashdata('error', " not Approved");
            }
            redirect('user/project_check');
          }
    }
}