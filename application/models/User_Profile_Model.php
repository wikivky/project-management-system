<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_Profile_Model extends CI_Model{

public function getprofile($userid){
	$query=$this->db->select('firstName,lastName,emailId,mobileNumber,regDate')
                ->where('id',$userid)
                ->from('tblusers')
                ->get();
  return $query->row();  
}

public function update_profile($fname,$lname,$mnumber,$userid){
$data = array(
               'firstName' =>$fname,
               'lastName' => $lname,
               'mobileNumber' => $mnumber
            );

$sql_query=$this->db->where('id', $userid) 
                ->update('tblusers', $data); 
}


public function getproject($projectid){
	     $this->db->select(['tblusers.id','addproject.project_name','addproject.description','addproject.date','addproject.project_id','addproject.project_file','addproject.approve']);
                  $this->db->from('tblusers');
                  $this->db->join('addproject','addproject.id = tblusers.id');
                  $this->db->where(['addproject.id'=>$projectid]);
             $query= $this->db->get();
             return $query->result();   
}

public function view_Allproject_Details()
       {
           $this->db->select(['tblusers.firstName', 'tblusers.id ','tblusers.lastName','addproject.project_name','tblusers.emailId ','addproject.description','addproject.date','addproject.project_id','addproject.approve']);
           $this->db->from('tblusers');
           $this->db->join('addproject','addproject.id= tblusers.id');
           $allprojectshow= $this->db->get();
           return $allprojectshow->result();
       }

public function approveproject()
       {

        $id= $_REQUEST['project_id'];
        $status= $_REQUEST['approve'];
        // echo '<pre>';
        // echo $id;
        // echo $status;
        // exit();
        if($status =='approved')
        {
            $status='rejected';
        }
        $data=array('approve'=>$status);
        $this->db->where('project_id',$id);
       
        
        return $this->db->update('addproject',$data);
        
    } 
}

