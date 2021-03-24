<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
class Admin_Dashboard_Model extends CI_Model {

function __construct(){
parent::__construct();
if(! $this->session->userdata('adid'))
redirect('admin/login');
}
}
