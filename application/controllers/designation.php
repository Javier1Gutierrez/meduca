<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class designation extends CI_Controller {
     public function __construct()
     {
          parent::__construct();
          $this->load->helper('url');
          $this->load->database();
     }

     public function index()
     {
          //load the department_model
          $this->load->model('designation_model');  
          //call the model function to get the department data
          $desigresult = $this->designation_model->get_designation_list();           
          $data['desiglist'] = $desigresult;
          //load the department_view
          $this->load->view('designation_view',$data);
     }
}
